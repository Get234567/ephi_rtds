<?php

namespace App\Controller;

use App\Entity\ActivityLog;
use App\Entity\Dataset;
use App\Entity\Study;
use App\Entity\WorkUnit;
use App\Form\FilterType;
use App\Repository\StudyRepository;
use App\Services\EPHISecurity;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class HomeController extends AbstractController


{
    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }





    /**
     * @Route("/custom", name="custom")
     *
     */
     public function custom(Request $request, PaginatorInterface $paginator)
     {
         $em = $this->getDoctrine()->getManager();
         $datasetrepo = $em->getRepository(Dataset::class);
         $studyrepo = $em->getRepository(Study::class);
         $requestrepo = $em->getRepository(ActivityLog::class);
         $datasetData = null;
         $studyData = null;
         $requestData = null;
         $user = $this->getUser();
         $roles = $user->getRoles();
         //$data = $this->getData($user->getId(), $user->getRoles()[0]);
         $search = $request->query->get('search');
         $percent=false;
             $form2 = $this->createFormBuilder()
                 ->add('Directorate', EntityType::class, [
                     'class' => WorkUnit::class,'required'=>false
                 ])
                 ->add('Choice',ChoiceType::class,['choices'=>['Publication Year'=>'py','coverageType'=>'dg','Covarage Sex'=>'cs','Study Design'=>'sd']])
                 ->add('date3',TextType::class,['attr'=>['class'=>'form-control date-range-picker','id'=>'id-date-range-picker-1'],'data'=>'1990/11/2 - '.       (new DateTime('now'))->format('Y/m/d')    ])
                 ->add('StackedBarChart',CheckboxType::class,['required'=>false])
                 ->add('Percent',CheckboxType::class,['required'=>false])
                 ->add('Visualize', SubmitType::class, [
                     'attr' => [
                         'class' => 'btn btn-primary',
                     ],
                 ])
                 ->getForm();
             $sqlfor3 = " SELECT count(d.id) as total , w.name as name, dg.name as col FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join coverage_type dg on d.coverage_type_id=dg.id GROUP BY d.coverage_type_id, d.workunit_id";
             $title="";
             $sub="";
             $s="nn";
             $form2->handleRequest($request);
             if ($form2->isSubmitted() && $form2->isValid()) {
             $col=$form2->getData()['Choice'];
             $dir=$form2->getData()['Directorate'];
             $date=$form2->getData()['date3'];
             $s=$form2->getData()['StackedBarChart'];
             $percent=$form2->getData()['Percent'];

             if($s){
                 $s="stacked";
             }
             $fromdate =$date;
             $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];
             $where="";

           if ($dir) {
              $where=" w.id = ". $dir->getId().' AND ';
              $title=$dir->getName()." ";
           }
           else $title="All Directorate";
           if ($col) {
               # code...

         if ($col=='py') {
             $sqlfor3 = " SELECT w.name as name ,EXTRACT(YEAR FROM ds.publication_year) AS col, COUNT(ds.id) as total FROM dataset as ds left join work_unit as w on ds.workunit_id=w.id where ".$where." ds.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "'  and ds.approved = 1 GROUP BY ds.workunit_id, EXTRACT(YEAR FROM ds.publication_year) ";
         $sub="Publication Year";
         }
             elseif ($col=='sd') {
                 $sub="Study Design";
             $sqlfor3 = " SELECT count(d.id) as total , w.name as name, sd.name as col FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join study_design sd on d.study_design_id=sd.id where ".$where." d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "'  and d.approved = 1 GROUP BY d.study_design_id, d.workunit_id";

         }    elseif ($col=='dg')  {
             $sub="CoverageType";
             $sqlfor3 = " SELECT count(d.id) as total , w.name as name, dg.name as col FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join coverage_type dg on d.coverage_type_id=dg.id where ".$where." d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.approved = 1  GROUP BY d.coverage_type_id, d.workunit_id";
         }
             elseif(($col=='cs') ){
                 $sub="Coverage Sex";
             $sqlfor3 = " SELECT count(d.id) as total , w.name as name, d.coverage_sex as col FROM dataset d inner join work_unit w on d.workunit_id=w.id where ".$where." d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.approved = 1  GROUP BY d.coverage_sex, d.workunit_id";
         }


         }
        }
        //else   $sqlfor3 = " SELECT count(d.id) as total , w.name as name  FROM dataset d inner join work_unit w on d.workunit_id=w.id where ".$where." d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "'  GROUP BY d.workunit_id";




             $conn = $em->getConnection();
             $stmt3 = $conn->prepare($sqlfor3);
             $stmt3->execute();

             $data3 = $stmt3->fetchAll();
             //dd($data3);
             if($percent){
             $total=[];
             foreach ($data3 as $key => $value) {
               if( ! array_key_exists($value["name"],$total))
                $total[$value["name"]]=$value["total"];
                else
                $total[$value["name"]]=$total[$value["name"]]+$value["total"];


             }
             foreach ($data3 as $key => $value){
                $tot=$total[$value['name']];
                $data3[$key]["total"]=($value['total']*100)/$tot;


             }}
             if ($percent) {
                $title=$title." in % ";
             }
           //  dd($data3);

             return $this->render('home/custom.html.twig', [

                 'directorateform' => $form2->createView(),
                'dataset' => $data3,
                'type'=> $s,
                'sub' => $sub,
                'title'=>$title,

             ]);



     }



    /**
     * @Route("/home", name="home")
     *
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {

        $em = $this->getDoctrine()->getManager();
        $datasetrepo = $em->getRepository(Dataset::class);
        $studyrepo = $em->getRepository(Study::class);
        $requestrepo = $em->getRepository(ActivityLog::class);
        $datasetData = null;
        $studyData = null;
        $requestData = null;
        $user = $this->getUser();
        $roles = $user->getRoles();
        //$data = $this->getData($user->getId(), $user->getRoles()[0]);
        $search = $request->query->get('search');






            $form = $this->createForm(FilterType::class, null);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

            }
            $form2 = $this->createFormBuilder()
                ->add('Directorate', EntityType::class, [
                    'class' => WorkUnit::class,
                ])
                ->add('Search', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-primary',
                    ],
                ])
                ->getForm();

            $form2->handleRequest($request);

            if ($form2->isSubmitted() && $form2->isValid()) {

                // dd($form2['Directorate']->getData()->getId());
                $queryBuilder = $datasetrepo->searchByDirectorate($form2['Directorate']->getData());
                $data = $paginator->paginate(
                    $queryBuilder, /* query NOT result */
                    $request->query->getInt('page', 1) /*page number*/,
                    10/*limit per page*/
                );
                return $this->render('dashboard/search.html.twig', [
                    'datasets' => $data,
                ]);

            }

            if ($request->request->get("date1")) {

                $fromdate = $request->request->get("date1");
                $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];
         //   dd($todate);
                $sql = "SELECT workunit_id, COUNT(*) as total FROM dataset where publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and approved=1 GROUP BY workunit_id ";
            } else {
                $sql = "SELECT workunit_id, COUNT(*) as total FROM dataset where approved=1 GROUP BY workunit_id ";
            }


            //graph 3
            if ($request->request->get("date3")) {

                $fromdate = $request->request->get("date3");
                $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];

                   $sqlfor3 = " SELECT w.name ,EXTRACT(YEAR FROM ds.publication_year) AS year, COUNT(ds.id) as total FROM dataset as ds left join work_unit as w on ds.workunit_id=w.id where ds.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and ds.approved=1 GROUP BY ds.workunit_id, EXTRACT(YEAR FROM ds.publication_year) ";
            } else {
                $sqlfor3 = " SELECT w.name ,EXTRACT(YEAR FROM ds.publication_year) AS year, COUNT(ds.id) as total FROM dataset as ds left join work_unit as w on ds.workunit_id=w.id where ds.approved=1 GROUP BY ds.workunit_id, EXTRACT(YEAR FROM ds.publication_year) ";
            }
            //graph 4
            if ($request->request->get("date4")) {

                $fromdate = $request->request->get("date4");
                $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];

             $sqlfor4 = " SELECT count(d.id) as total , w.name as workunit_name, dg.name as demo_name FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join coverage_type dg on d.coverage_type_id=dg.id where d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.approved=1 GROUP BY d.coverage_type_id, d.workunit_id";
            } else {
                $sqlfor4 = " SELECT count(d.id) as total , w.name as workunit_name, dg.name as demo_name FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join coverage_type dg on d.coverage_type_id=dg.id and d.approved=1 GROUP BY d.coverage_type_id, d.workunit_id";
            }

            //graph 5
            if ($request->request->get("date5")) {

                $fromdate = $request->request->get("date5");
                $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];

             $sqlfor5 = " SELECT count(d.id) as total , w.name as workunit_name, sd.name as study_name FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join study_design sd on d.study_design_id=sd.id where d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.approved=1 GROUP BY d.study_design_id, d.workunit_id";
            } else {
                $sqlfor5 = " SELECT count(d.id) as total , w.name as workunit_name, sd.name as study_name FROM dataset d inner join work_unit w on d.workunit_id=w.id inner join study_design sd on d.study_design_id=sd.id and d.approved=1 GROUP BY d.study_design_id, d.workunit_id";
            }
            //graph 6
            if ($request->request->get("date6")) {

                $fromdate = $request->request->get("date6");
                $date_arr = explode ("-", $fromdate);
             $fromdate=$date_arr[0];
             $todate=$date_arr[1];

             $sqlfor6 = " SELECT count(d.id) as total , w.name as workunit_name, d.coverage_sex FROM dataset d inner join work_unit w on d.workunit_id=w.id where d.publication_year BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.approved=1  GROUP BY d.coverage_sex, d.workunit_id";
            } else {
                $sqlfor6 = " SELECT count(d.id) as total , w.name as workunit_name, d.coverage_sex FROM dataset d inner join work_unit w on d.workunit_id=w.id and d.approved=1 GROUP BY d.coverage_sex, d.workunit_id";
            }





            $conn = $em->getConnection();

            $stmt = $conn->prepare($sql);
            $stmt3 = $conn->prepare($sqlfor3);
            $stmt4 = $conn->prepare($sqlfor4);
            $stmt5 = $conn->prepare($sqlfor5);
            $stmt6 = $conn->prepare($sqlfor6);


            $stmt->execute();
            $stmt3->execute();
            $stmt4->execute();
            $stmt5->execute();
            $stmt6->execute();


            $data = $stmt->fetchAll();
            $data3 = $stmt3->fetchAll();
            $data4 = $stmt4->fetchAll();
            $data5 = $stmt5->fetchAll();
            $data6 = $stmt6->fetchAll();


//   dd($data);

            $type = "doughnut";

            if ($request->query->get("type")) {
                $type = $request->query->get("type");
            }
            $percent=false;


            $total_data = array(['Directorate', 'Speakers (in millions)']);
            $label = [];
            $datal = [];

            foreach ($data as $kk => $val) {

                    if($val['workunit_id']){

                $sql2 = "SELECT name FROM work_unit where id =" . $val['workunit_id'];
                $stmt2 = $conn->prepare($sql2);
                $stmt2->execute();
                $data2 = $stmt2->fetchAll();

                $label[$kk] = $data2[0]['name'];
            }
                    else{
                        $data2=null;
                        $label[$kk] = "null";
                    }


                $datal[$kk] = +$val['total'];

            }
            $totals=0;
            foreach ($datal as $key => $value) {
                    $totals=$totals+$value;

            }
            foreach ($datal as $key => $value) {
                $datal[$key]=round(($value*100)/$totals,2);


        }
        foreach ($label as $key => $value) {
           $label[$key]=$label[$key]." (".$datal[$key]."%)";
        }
           // dd($datal);

            return $this->render('home/index.html.twig', [

                'filterform' => $form->createView(),
                'directorateform' => $form2->createView(),

                'label' => $label,
                'datal' => $datal,
                'type' => $type,
                'dataset2' => $data,
                'dataset3' => $data3,
                'dataset4' => $data4,
                'dataset5' => $data5,
                'dataset6' => $data6,
            ]);



    }

    /**
    * @Route("/home/search", name="homesearch")
    *
    */
   public function search(Request $request, PaginatorInterface $paginator)
   {


return new Response("");
   }
    /**
     * @Route("/myrequest", name="myrequest")
     *
     */
    public function myRequest(Request $request, PaginatorInterface $paginator, StudyRepository $studyRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $requestrepo = $em->getRepository(ActivityLog::class);
        $search = $request->query->get('search');
       // $studyRepository->findOneBy([''])
        $queryBuilder = $requestrepo->findYourRequest($this->getUser()->getId(), $search);
        // dd($queryBuilder->getQuery()->getResult());
        $requestData = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1) /*page number*/,
            10/*limit per page*/
        );
        return $this->render('home/researcher.html.twig', [
            'requests' => $requestData,
            'form' => '',
            'data' => null,
            'studies' => null,
            'datasets' => null,
            'role' => '',

        ]);

    }
    /**
     * @Route("/myreview", name="myreview")
     *
     */
    public function myreview(Request $request, PaginatorInterface $paginator, StudyRepository $studyRepository)
    {
        $em = $this->getDoctrine()->getManager();

        $search = $request->query->get('search');

        $queryBuilder = $studyRepository->findReview($this->getUser()->getId(), $search);

        $requestData = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1) /*page number*/,
            10/*limit per page*/
        );
        return $this->render('home/review.html.twig', [
            'studies' => $requestData,
        ]);

    }
    /**
     * @Route("/myresearch", name="myresearch")
     *
     */
    public function myresearch(Request $request, PaginatorInterface $paginator)
    {

        if($this->security->isAllowedTwig($this->getUser(),"std_new")){

        }
        elseif ($this->security->isAllowedTwig($this->getUser(),"dtst_new")){
            return $this->redirectToRoute('mydataset');
        }
        else {
            throw new AccessDeniedException();
        }
        $em = $this->getDoctrine()->getManager();
        $datasetrepo = $em->getRepository(Dataset::class);
        $studyrepo = $em->getRepository(Study::class);
        $requestrepo = $em->getRepository(ActivityLog::class);
        $datasetData = null;
        $studyData = null;
        $requestData = null;
        $user = $this->getUser();
        $roles = $user->getRoles();
       // $data = $this->getData($user->getId(), $user->getRoles()[0]);
        $studyData=$this->getUser()->getStudies();
        if($request->query->get('search')){
        $search = $request->query->get('search');
        $queryBuilder = $studyrepo->findYourStudy($this->getUser()->getId(), $search);

        $studyData = $queryBuilder->getQuery()->getResult();

        // = $paginator->paginate(
        //     $queryBuilder, /* query NOT result */
        //     $request->query->getInt('page', 1) /*page number*/,
        //     10/*limit per page*/
        // );
        }
        if($request->query->get('search')){
        $requestrepo = $em->getRepository(ActivityLog::class);

        $queryBuilder = $requestrepo->findYourRequest($this->getUser()->getId(), $search);
        //  dd($queryBuilder->getQuery()->getResult());
        $requestData = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1) /*page number*/,
            10/*limit per page*/
        );
    }

        return $this->render('home/researcher.html.twig', [
            'userdata' => $user,
            'form' => '',
            'studies' => $studyData,
            'review'=>null,
            'requests' => null,
            'datasets' => null,

        ]);
    }
    /**
     * @Route("/mydataset", name="mydataset")
     *
     */
    public function myDataset(Request $request, PaginatorInterface $paginator)
    {
        if($this->security->isAllowedTwig($this->getUser(),"dtst_new")){

        }
        elseif ($this->security->isAllowedTwig($this->getUser(),"std_new")){
            return $this->redirectToRoute('myresearch');
        }
        else {
            throw new AccessDeniedException();
        }
        $em = $this->getDoctrine()->getManager();
        $datasetrepo = $em->getRepository(Dataset::class);
        $search = $request->query->get('search');




           // $data = $this->getData($user->getId(), $user->getRoles()[0]);
           $datasetData=$this->getUser()->getDatasets();
           if($request->query->get('search')){

           $search = $request->query->get('search');


        //    $queryBuilder = $datasetrepo->findBy($this, $search);
        //    $queryBuilder = $datasetrepo->findYourDataset($this->getUser(), $search);
           $queryBuilder = $datasetrepo->findYourDataset($this->getUser(), $search);



           $datasetData = $queryBuilder->getQuery()->getResult();
        //    dd($datasetData[0]->getOwner());


        //    $queryBuilder = $datasetrepo->findYourDataset($this->getUser(), $search);
           }

        // $datasetData = $paginator->paginate(
        //     $queryBuilder, /* query NOT result */
        //     $request->query->getInt('page', 1) /*page number*/,
        //     10/*limit per page*/
        // );

        return $this->render('home/researcher.html.twig', [
            'form' => '',
            'data' => '',
            'studies' => null,
            'datasets' => $datasetData,
            'owner'=>$this->getUser(),
            'requests' => null,
            'role' => '',
        ]);
    }


}
