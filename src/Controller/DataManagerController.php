<?php

namespace App\Controller;
use App\Form\DatasetStudySubjectType;
use App\Form\ResearcherResearchTeamType;
use App\Form\FilterType;
use App\Entity\WorkUnit;
use App\Entity\ResearcherResearchTeam;
use App\Repository\DatasetRepository;
use App\Controller\Study;
use App\Controller\Dataset;
use App\Services\EPHISecurity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Options;
use Dompdf\Dompdf;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;


class DataManagerController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/data/manager", name="data_manager")
     */
    public function index(Request $request)
    {


        $form = $this->createForm(DatasetStudySubjectType::class,null);
        
        

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
          
     
    
        }


        return $this->render('datamanager/index.html.twig', [
            'controller_name' => 'DataManagerController',
            'form' =>$form->createView()
        ]);
    }
    /**
     * @Route("/addteammember", name="addteammember")
     */
    public function addteammember(Request $request)
    {

       $rteam= new ResearcherResearchTeam();
        $form = $this->createFormBuilder(ResearcherResearchTeamTYpe::class,null);
        
        

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
          
     
    
        }


        return $this->render('datamanager/index.html.twig', [
            'controller_name' => 'DataManagerController',
            'form' =>$form->createView()
        ]);
    }


  /**
     * @Route("/admindashboard", name="admindashboard")
     */
    public function admindash(Request $request, EntityManagerInterface $em, DatasetRepository $datasetRepository,PaginatorInterface $paginator)
    {
        

        $form = $this->createForm(FilterType::class,null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
          
     
    
        }
        $form2 = $this->createFormBuilder()
        ->add('Directorate',EntityType::class,[
            'class'=>WorkUnit::class
        ])
        ->add('Search',SubmitType::class,[
            'attr'=>[
                'class'=>'btn btn-primary'
            ]
        ])
        ->getForm();

$form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
          
            // dd($form2['Directorate']->getData()->getId());
         $queryBuilder=$datasetRepository->searchByDirectorate($form2['Directorate']->getData());     
         $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
         return $this->render('dashboard/search.html.twig',[
            'datasets' => $data,
           ]);

        }



if($request->request->get("_fromdate") && $request->request->get("_todate")){
    $fromdate=$request->request->get("_fromdate");
    $todate=$request->request->get("_todate");
   
        $sql="SELECT work_unit_id, COUNT(*) as total FROM study where year_published BETWEEN '".$fromdate."' AND '".$todate."'  GROUP BY work_unit_id ";
}
else
   $sql="SELECT work_unit_id, COUNT(*) as total FROM study  GROUP BY work_unit_id ";
  




   if($request->request->get("_fromdate3") && $request->request->get("_todate3")){
    $fromdate=$request->request->get("_fromdate2");
    $todate=$request->request->get("_todate2");
   
        $sql="SELECT work_unit_id, COUNT(*) as total FROM study where year_published BETWEEN '".$fromdate."' AND '".$todate."'  GROUP BY work_unit_id ";
}
else
   $sqlfor3=" SELECT w.name ,EXTRACT(YEAR FROM ds.publication_year) AS year, COUNT(ds.id) as total FROM dataset as ds left join work_unit as w on ds.workunit_id=w.id GROUP BY ds.workunit_id, EXTRACT(YEAR FROM ds.publication_year) ";
  




   $conn = $em->getConnection();
 
$stmt = $conn->prepare($sql);
$stmt3 = $conn->prepare($sqlfor3);

$stmt->execute();
$stmt3->execute();



$data=$stmt->fetchAll();
$data3=$stmt3->fetchAll();

//dd($data3);    
  
     $type="doughnut";
     
     if($request->query->get("type")) 
 $type=$request->query->get("type");


 
 

$total_data=array(['Directorate', 'Speakers (in millions)']);
$label=[];
$datal=[];


 foreach($data as $kk=>$val){
 
 
  $sql2="SELECT name FROM work_unit where id =".$val['work_unit_id'];
  $stmt2 = $conn->prepare($sql2);
  $stmt2->execute();
  $data2=$stmt2->fetchAll();
  

   $label[$kk]=$data2[0]['name'];
    $datal[$kk]=+$val['total'];
 

 }

   
  


        return $this->render('dashboard/index.html.twig', [
           
            'filterform' => $form->createView(),
            'directorateform' => $form2->createView(),
    
            'label' => $label,
            'datal' => $datal,
            'type' => $type,
            'dataset3' =>$data3,
        ]);
   
     
    }


    /**
     * @Route("/getCSV/{name}", name="getCSV")
     */

    public function exportDataset(Request $request,DatasetRepository $datasetRepository,$name)
    {

 
        $dataset = $datasetRepository->namedSearch($name)->getQuery()->getResult();
    
      
        $rows = array();
             $data=array("Name","Label","Format","Coverage Location","Coverage Age","Coverage Sex","Size","CodeBook","Cleaned","Cleaaned Format","Raw Format","Title","Publication year",'Publisher');
             $rows[] = implode(',', $data);
             foreach ($dataset as $event) {
            $data1 = array(
                
                $event->getName(),
                $event->getLabel(),
                $event->getFormat(),
                $event->getCoverageLocation(),
                $event->getCoverageAge(),
                $event->getCoverageSex(),
                $event->getSize(),
                $event->getCodebook(),
                // $event->getKeywords(),
                $event->getCleaned(),
                $event->getCleanedFormat(),
                $event->getRawFormat(),
                $event->getTitle(),
                $event->getPublicationYear()->format('d/m/Y'),
            //   $event->getDemographicGroup(),
                $event->getPublisher(),
                // $event->getWorkUnit()
               
            );

            $rows[] = implode(',', $data1);
        }
      

        $content = implode("\n", $rows);
// dd($content);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');


        return $response;


    }





    


}
