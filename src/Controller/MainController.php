<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\ActivityLog;
use App\Entity\Location;
use App\Entity\Study;
use App\Entity\Dataset;
use App\Entity\DataSubmission;
use App\Entity\Dataowner;
use App\Entity\Datapercentage;
use App\Entity\DatapercentageRepository;
use App\Entity\Submission;
use App\Repository\SubmissionRepository;
use App\Entity\WorkUnit;
use App\Entity\StudyDesign;
use App\Entity\DatasetAttachment;
use App\Entity\DemographicGroup;
use App\Form\DemographicGroupType;
use App\Form\AdvancedSearchType;
use App\Form\FilterType;
use App\Services\EPHISecurity;
use App\Repository\StudyRepository;
use App\Repository\DataSubmissionRepository;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Repository\AffiliationRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DatasetRepository;
use App\Repository\SiteRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilder;
use Dompdf\Options;
use Dompdf\Dompdf;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Services\MailerService;
use Symfony\Component\Mailer\MailerInterface;

class MainController extends AbstractController
{


    /**
     * @Route("/", name="main")
     */
    public function home(Request $request, DataSubmissionRepository $DataSubmissionRepository, DatasetRepository $datasetRepository,SiteRepository $siteRepository, EntityManagerInterface $em,PaginatorInterface $paginator, MailerInterface $mailer ,MailerService $mservice )
    {
      $rate = null;
      $feedback = null;
      if($request->query->get('rate')){
        $rate = $request->query->get('rate');
      }
        if($request->query->get('feedback')){
        $feedback = $request->query->get('feedback');


          $message=" User feedback          "."Rated ".$rate."          Message ".$feedback."";
     $mservice->sendEmail($mailer,$message, "galeabdi12@gmail.com", "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
}
      $em = $this->getDoctrine()->getManager();
        $datasetrepo = $em->getRepository(Dataset::class);
        $studyrepo = $em->getRepository(Study::class);

        $datasetData = null;
        $studyData = null;
        $requestData = null;
        $user = $this->getUser();

        //$data = $this->getData($user->getId(), $user->getRoles()[0]);
        $search = $request->query->get('search');
        $percent=false;
            $form2 = $this->createFormBuilder()
                ->add('Directorate', EntityType::class, [
                    'class' => WorkUnit::class,'required'=>false
                ])

                ->add('date3',TextType::class,['attr'=>['class'=>'form-control date-range-picker','id'=>'id-date-range-picker-1'],'data'=>'1990/01/2 -'.       (new DateTime('now'))->format('Y/m/d')    ])

                ->add('Search', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-success',
                    ],
                ])
                ->getForm();
                $sqlfor99 = "SELECT COUNT(id) as cid FROM dataset";
                $sqlfor101 = 'SELECT SUM(submitted) as submite, work_unit.name as name FROM data_submission,work_unit WHERE work_unit.id=data_submission.work_unit_id GROUP BY work_unit_id';
            $sqlfor3 = "SELECT d.id as id, d.title, d.location,  d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd, dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType  where d.time_period_coverage_start BETWEEN '2001-01-11' AND '2020-07-16' and d.data_type_id=dataType.id and  w.name='Ethiopian Public Health Institute (EPHI)' GROUP BY d.id";
            $title="";
            $sub="";
            $s="nn";
            $form2->handleRequest($request);
            if ($form2->isSubmitted() && $form2->isValid()) {

            $dir=$form2->getData()['Directorate'];
            $date=$form2->getData()['date3'];



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
          if ($dir=='Ethiopian Public Health Institute (EPHI)') {
            $sqlfor3 = "SELECT d.id as id,, d.title, d.location, d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd,dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType  where  d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.data_type_id=dataType.id and w.name='Ethiopian Public Health Institute (EPHI)'  GROUP BY d.id";
              $sub="Ethiopian Public Health Institute (EPHI)";
          }

          elseif ($dir=='HIV and TB Research Directorate') {
            $sqlfor3 = "SELECT d.id as id, d.title, d.location, d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd,dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType  where ".$where." d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.data_type_id=dataType.id and w.name='HIV and TB Research Directorate'  GROUP BY d.id";
              $sub="HIV and TB Research Directorate";

      }
      elseif ($dir=='Bacteriology, Parasitology and Zoonosis') {
        $sqlfor3 = "SELECT d.id as id,d.title, d.location, d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd, dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType  where ".$where." d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and d.data_type_id=dataType.id and w.name='Bacteriology, Parasitology and Zoonosis'  GROUP BY d.id";
          $sub="Bacteriology, Parasitology and Zoonosis";

     }
     elseif ($dir=='Vaccines and Diagnostic Production Directorate') {
       $sqlfor3 = "SELECT d.id as id, d.title, d.location,  d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd, dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType where ".$where." d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and w.name='Vaccines and Diagnostic Production Directorate'  GROUP BY d.id";
         $sub="Vaccines and Diagnostic Production Directorate";

    }
    elseif ($dir=='Food Science and Nutrition Research Directorate') {
      $sqlfor3 = "SELECT d.id as id,d.title, d.location, d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd, dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType where ".$where." d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and w.name='Food Science and Nutrition Research Directorate'  GROUP BY d.id";
        $sub="Food Science and Nutrition Research Directorate";

   }
   elseif ($dir=='Health System and Reproductive Health') {
     $sqlfor3 = "SELECT d.id as id, d.title, d.location,  d.time_period_coverage_start as timePeriodCoverageStart, d.name, d.keywords as keywords, d.time_period_coverage_end as timePeriodCoverageEnd, dataType.name as dataType, dataType.id  FROM dataset d inner join work_unit w on d.workunit_id=w.id, data_type dataType  where ".$where." d.time_period_coverage_start BETWEEN '" . $fromdate . "' AND '" . $todate . "' and w.name='Health System and Reproductive Health'  GROUP BY d.id";
       $sub="Health System and Reproductive Health";

   }






       }




            $conn = $em->getConnection();
            $stmt101=$conn->prepare($sqlfor101);
            $stmt101->execute();
             $dah=array();
              $h=[];
              $dahh=array();
              $hh=[];
              $dahhh=array();
              $hhh=[];

                  $data101 = $stmt101->fetchAll();
                    foreach ($data101 as $key => $value) {
                      $dah = (int)$value['submite'];
                      $h[]=$dah;
                      $dahh = $value['name'];
                      $hh[]=$dahh;
                      $dahhh=[$value['name'],(int)$value['submite']];
                      $hhh[]=$dahhh;
                    }

            $subm=json_encode($h);
            $name=json_encode($hh);
            $named=str_replace('"', "'",$name);
            $bot=json_encode($hhh);
              $both=str_replace('"', "'",$bot);



            $stmt3 = $conn->prepare($sqlfor3);
              $stmt66 = $conn->prepare($sqlfor99);
            $stmt3->execute();
         $stmt66->execute();

         $data60=array();

  $data60 = $stmt66->fetchAll();
    $data89=[];
foreach ($data60 as $key => $value) {
  $data67 = $value['cid'];
}



$data3=array();
            $data3 = $stmt3->fetchAll();

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
$data609=[];
            foreach ($data3 as $key => $value) {
              $data609 = $value['location'];
              $data609 = $value['name'];
              $data609 = $value['location'];
                  $data609 = $value['title'];
            }

if ($form2->isSubmitted() && $form2->isValid()) {
 $queryBuilder =$datasetRepository->findYourDataset(NULL,$data609);
                      $data = $paginator->paginate(
                    $queryBuilder, /* query NOT result */
                        $request->query->getInt('page', 1)/*page number*/,
                        10/*limit per page*/
                    );
                      return $this->render('dashboard/search.html.twig',[
                       'datasets' => $data,
                      ]);

}

        $siteInfo=$siteRepository->findAll();
        if($siteInfo)
          $siteInfo=$siteInfo[0];
        else
          $siteInfo='';
        if($siteInfo);
          $form =$this->createFormBuilder()
          ->add('location',EntityType::class,[
              'placeholder'=>'-All-',
              'class'=>Location::class
          ])->getForm();

          $form->handleRequest($request);
          if($form->isSubmitted() && $form->isValid()){

              $loc=$form['location']->getData();

              $locdata=$datasetRepository->findBy(['location'=>$loc->getName()]);

             return $this->render('dashboard/search.html.twig',[
              'datasets' => $locdata,
             ]);

          }
  $sortby='id';

  $type="ASC";
         if($request->query->get('search')){




             $name=$request->query->get('search');


             $name = preg_replace("/'*/", '', $name);


                  $re = '/ephi-ds\d{4,}$/i';
                preg_match_all($re, $name, $matches, PREG_SET_ORDER, 0);


              if($matches){
                  $len = strlen('EPHI-DS');
              $name=+substr($name,$len);



            }

            //  if (strpos(strtoupper($name), 'EPHI-DS') === 0) {
            //  $len = strlen('EPHI-DS');
            //   $name=substr($name,$len);



            //  }

             if($request->query->get('sortby'))
              $sortby=$request->query->get('sortby');

             if($request->query->get('type'))
              $type=$request->query->get('type');




             $queryBuilder =$datasetRepository->namedSearch($name,$sortby,$type);
             $data = $paginator->paginate(
                 $queryBuilder, /* query NOT result */
                 $request->query->getInt('page', 1)/*page number*/,
                 10/*limit per page*/
             );


             return $this->render('dashboard/search.html.twig',[
              'datasets' => $data,
             ]);


         }


         if($request->query->get('dataType')){
          $name=$request->query->get('dataType');



          $queryBuilder= $datasetRepository->findBySomething(null,$name);
          $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
          return $this->render('dashboard/search.html.twig',[
           'datasets' => $data,
          ]);

      }

      if($request->query->get('keywords')){
        $name=$request->query->get('keywords');


        $queryBuilder=  $datasetRepository->findBySomething($name,null);
        $data = $paginator->paginate(
          $queryBuilder, /* query NOT result */
          $request->query->getInt('page', 1)/*page number*/,
          10/*limit per page*/
      );

        return $this->render('dashboard/search.html.twig',[
         'datasets' => $data,
        ]);

    }


         $query = $em->createQuery(
          'SELECT d FROM App:Dataset d ORDER BY d.id DESC'
          );
          $recent = $query->setMaxResults(6)->getResult();


          $sqlfor33 = "select s.submitted, d.unit from submissiondata as s, data_owner as d where d.id=s.owner_id and s.yearss=2018 and d.Parent_id=7";
           $sqlfor34 ="select s.submitted, d.unit from submissiondata as s, data_owner as d where d.id=s.owner_id and s.yearss=2019 and d.Parent_id=7";
           $sqlfor35 = "select s.submitted, d.unit from submissiondata as s, data_owner as d where d.id=s.owner_id and s.yearss=2020 and d.Parent_id=7";
           $sqlfor36 = "select s.submitted, d.unit from submissiondata as s, data_owner as d where d.id=s.owner_id and s.yearss=2021 and d.Parent_id=7";

            $conn = $em->getConnection();
            /*
            $stmt112=$conn->prepare($sqlfor33);
            $stmt112->execute();
             $dah=array();
              $h=[];
              $dahh=array();
              $hh=[];
              $dahhh=array();
              $hhh=[];

                  $data112 = $stmt112->fetchAll();
                    foreach ($data112 as $key => $value) {

                      $dahhh=$value['submitted'];
                      
                      $hhh[]=(float)$dahhh;
                    }

            $bot=json_encode($hhh);
              $both=str_replace('"', "'",$bot);
              */
              $sqlfor33=$conn->prepare($sqlfor33);
              $sqlfor33->execute();
              $arr = array();
              $data = $sqlfor33->fetchAll();
              foreach($data as $key => $value){
                $arr = array(
                  'unit'      => $value['unit'],
                  'submitted' => $value['submitted']
                );
              }
              $finalData = json_encode($data);
              
               $sqlfor_non_ephi = "SELECT d.unit,p.percentage FROM data_owner d INNER JOIN datapercentage p WHERE d.ID = p.owner_id AND d.Parent_id = (SELECT Parent_id FROM data_owner WHERE unit = 'Non-Ephi')";
               
              $sqlfor_non_ephi=$conn->prepare($sqlfor_non_ephi);
              $sqlfor_non_ephi->execute();
              $arr2 = array();
              $data2 = $sqlfor_non_ephi->fetchAll();
              foreach($data2 as $key2 => $value2){
                $arr2 = array(
                  'unit'      => $value2['unit'],
                  'percentage' => $value2['percentage']
                );
              }
              $finalData_non_ephi = json_encode($data2);
               

              $sqlfor_data_submission = "select s.yearss, sum(case when d.unit = 'Food Science and Nutrition Research Directorate' then s.submitted else 0 end) as 'Food Science and Nutrition Research Directorate', sum(case when d.unit = 'Bacteriology, Parasitology and Zoonosis' then s.submitted else 0 end) as 'Bacteriology, Parasitology and Zoonosis', sum(case when d.unit = 'HIV and TB Research Directorate' then s.submitted else 0 end) as 'HIV and TB Research Directorate', sum(case when d.unit = 'Health System and Reproductive Health' then s.submitted else 0 end) as 'Health System and Reproductive Health', sum(case when d.unit = 'National Laboratory' then s.submitted else 0 end) as 'National Laboratory', sum(case when d.unit = 'Public Health Emergency Management' then s.submitted else 0 end) as 'Public Health Emergency Management' from data_owner d inner join submissiondata s on d.id=s.owner_id group by s.yearss";
              $sqlfor_data_submission=$conn->prepare($sqlfor_data_submission);
              $sqlfor_data_submission->execute();
              $arr3 = array();
              $data3 = $sqlfor_data_submission->fetchAll();
              foreach($data3 as $key3 => $value3){
                $arr3 = array(
                  
                  'year'      => $value3['yearss']
                );
              }
              $finalData_data_submission = json_encode($data3);
               /*
               if($result_non_ephi = mysqli_query()){
                if(mysqli_num_rows($result_non_ephi) > 0){
          
                  while($row_non_ephi = $result_non_ephi->fetch_assoc()){
                   $arr_non_ephi = array (
                     'unit'      => $row_non_ephi['unit'],
                     'percentage' => $row_non_ephi['percentage']
                   );
                   $data_non_ephi[] = $arr_non_ephi;
                  }
                  $finalData_non_ephi = json_encode($data_non_ephi);
                } else {
                   echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sqlfor_non_ephi. " .mysqli_error($sqlfor_non_ephi);
              }    */

              /*$sqlfor_data_submission = "select s.yearss, s.submitted, d.unit from submissiondata as s, data_owner as d where d.id=s.owner_id";
              if($result_data_submission = mysqli_query()){
                if(mysqli_num_rows($result_data_submission) > 0){
          
                  while($row_data_submission = $result_data_submission->fetch_assoc()){
                   $arr_data_submission = array (
                    'unit' => $row_data_submission['unit'],
                    'year' =>  $row_data_submission['yearss'],
                    'submitted' =>  $row_data_submission['submitted']
                   );
                   $data_data_submission[] = $arr_data_submission;
                  }
                  $finalData_data_submission = json_encode($data_data_submission);
                } else {
                   echo "No records matching your query were found.";
                }
              } else {
                echo "ERROR: Could not able to execute $sqlfor_data_submission. " .mysqli_error($sqlfor_data_submission);
              }  */  

              $stmt113=$conn->prepare($sqlfor34);
              $stmt113->execute();
               $dah=array();
                $h=[];
                $dahh=array();
                $hh=[];
                $dahhh=array();
                $hhh=[];

                    $data113 = $stmt113->fetchAll();
                      foreach ($data113 as $key => $value) {

                        $dahhh=$value['submitted'];
                        $hhh[]=(float)$dahhh;
                      }

              $bott=json_encode($hhh);
                $bothh=str_replace('"', "'",$bott);
                $stmt114=$conn->prepare($sqlfor35);
                $stmt114->execute();
                 $dah=array();
                  $h=[];
                  $dahh=array();
                  $hh=[];
                  $dahhh=array();
                  $hhh=[];

                      $data114 = $stmt114->fetchAll();
                        foreach ($data114 as $key => $value) {

                          $dahhh=$value['submitted'];
                          $hhh[]=(float)$dahhh;
                        }

                $bottt=json_encode($hhh);
                  $bothhh=str_replace('"', "'",$bottt);
                  $stmt115=$conn->prepare($sqlfor36);
                  $stmt115->execute();
                   $dah=array();
                    $h=[];
                    $dahh=array();
                    $hh=[];
                    $dahhh=array();
                    $hhh=[];

                        $data115 = $stmt115->fetchAll();
                          foreach ($data115 as $key => $value) {

                            $dahhh=$value['submitted'];
                            $hhh[]=(float)$dahhh;
                          }

                  $bottp=json_encode($hhh);
                    $bothp=str_replace('"', "'",$bottp);


                    $sqlfor233 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='HIV and TB Research Directorate'";
                     $sqlfor234 ="select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='Bacteriology, Parasitology and Zoonosis'";
                     $sqlfor235 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='Health System and Reproductive Health'";
                     $sqlfor236 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='National Laboratory'";
                    $sqlfor237 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='Public Health Emergency Management'";
                    $sqlfor238 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='Food Science and Nutrition Research Directorate'";
                     $sqlfor239 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.unit='Traditional Medicine'";
                      $conn = $em->getConnection();
                      $stmt221=$conn->prepare($sqlfor233);
                      $stmt221->execute();
                      $dah=array();
                       $h=0;
                       $dahh=array();
                       $hh=[];
                       $dahhh=array();
                       $hhh=[];


                            $data221 = $stmt221->fetchAll();


                              foreach ($data221 as $key => $value) {

                                $dahhh=$value['percentage'];

                              $hhh=(float)$dahhh;
                              }

                          $bottt=json_encode($hhh);
                          $hv=str_replace('"', "'",$bottt);



                        $stmt222=$conn->prepare($sqlfor234);
                        $stmt222->execute();
                         $dah=array();
                          $h=[];
                          $dahh=array();
                          $hh=[];
                          $dahhh=array();
                          $hhh=0;

                              $data222 = $stmt222->fetchAll();
                                foreach ($data222 as $key => $value) {
                            $hhh=$value['percentage'];

                                $hhh=(float)$hhh;
                                }

                        $bottt=json_encode($hhh);
                          $bp=str_replace('"', "'",$bottt);



                          $stmt223=$conn->prepare($sqlfor235);
                          $stmt223->execute();
                           $dah=array();
                            $h=[];
                            $dahh=array();
                            $hh=[];
                            $dahhh=array();
                            $hhh=0;

                                $data223 = $stmt223->fetchAll();
                                  foreach ($data223 as $key => $value) {
                                  $dahhh = $value['percentage'];
                                  $hhh=(float)$dahhh;
                                  }

                          $bottt=json_encode($hhh);
                            $hs=str_replace('"', "'",$bottt);
                            $stmt224=$conn->prepare($sqlfor236);
                            $stmt224->execute();
                             $dah=array();
                              $h=[];
                              $dahh=array();
                              $hh=[];
                              $dahhh=array();
                              $hhh=0;

                                  $data224 = $stmt224->fetchAll();
                                    foreach ($data224 as $key => $value) {
                                    $dahhh =$value['percentage'];
                                    $hhh=(float)$dahhh;
                                    }

                            $bottp=json_encode($hhh);
                              $nl=str_replace('"', "'",$bottp);
                              $stmt225=$conn->prepare($sqlfor237);
                              $stmt225->execute();
                               $dah=array();
                                $h=[];
                                $dahh=array();
                                $hh=[];
                                $dahhh=array();
                                $hhh=0;

                                    $data225 = $stmt225->fetchAll();
                                      foreach ($data225 as $key => $value) {
                                      $dahhh = $value['percentage'];
                                      $hhh=(float)$dahhh;
                                      }

                              $bottl=json_encode($hhh);
                                $ph=str_replace('"', "'",$bottl);
                                $stmt226=$conn->prepare($sqlfor238);
                                $stmt226->execute();
                                 $dah=array();
                                  $h=[];
                                  $dahh=array();
                                  $hh=[];
                                  $dahhh=array();
                                  $hhh=0;

                                      $data226 = $stmt226->fetchAll();
                                        foreach ($data226 as $key => $value) {
                                        $dahhh = $value['percentage'];
                                        $hhh=(float)$dahhh;
                                        }

                                $bottz=json_encode($hhh);
                                  $fs=str_replace('"', "'",$bottz);
                                  $stmt227=$conn->prepare($sqlfor239);
                                  $stmt227->execute();
                                   $dah=array();
                                    $h=[];
                                    $dahh=array();
                                    $hh=[];
                                    $dahhh=array();
                                    $hhh=0;

                                        $data227 = $stmt227->fetchAll();
                                          foreach ($data227 as $key => $value) {
                                          $dahhh = $value['percentage'];
                                          $hhh=(float)$dahhh;
                                          }

                                  $bottz=json_encode($hhh);
                                    $tm=str_replace('"', "'",$bottz);
                                    $sqlfor333 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=17";
                                     $sqlfor334 ="select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=18";
                                     $sqlfor335 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=19";
                                     $sqlfor336 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=20";
                                    $sqlfor337 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=21";
                                    $sqlfor338 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=22";
                                     $sqlfor339 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=23";
                                      $sqlfor140 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=24";
                                       $sqlfor141 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=25";
                                        $sqlfor142 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=26";
                                         $sqlfor143 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=27";
                                          $sqlfor144 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=28";
                                           $sqlfor145 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=29";
                                            $sqlfor146 = "select s.percentage from datapercentage as s, data_owner as d where d.id=s.owner_id and d.owner_id=30";
                                      $conn = $em->getConnection();
                                      $stmt421=$conn->prepare($sqlfor333);
                                      $stmt421->execute();
                                       $dah=array();
                                        $h=0;
                                        $dahh=array();
                                        $hh=[];
                                        $dahhh=array();
                                        $hhh=0;

                                            $data421 = $stmt421->fetchAll();
                                              foreach ($data421 as $key => $value) {
                                                $dahhh = (float)$value['percentage'];
                                                $hhh=$dahhh;

                                              }

                                      $bot=json_encode($hhh);
                                        $onen=str_replace('"', "'",$bot);

                                        $stmt422=$conn->prepare($sqlfor334);
                                        $stmt422->execute();
                                         $dah=array();
                                          $h=[];
                                          $dahh=array();
                                          $hh=[];
                                          $dahhh=array();
                                          $hhh=0;

                                              $data422 = $stmt422->fetchAll();
                                                foreach ($data422 as $key => $value) {
                                                $dahhh = (float)$value['percentage'];
                                                $hhh=$dahhh;
                                                }

                                        $bott=json_encode($hhh);
                                          $two=str_replace('"', "'",$bott);
                                          $stmt423=$conn->prepare($sqlfor335);
                                          $stmt423->execute();
                                           $dah=array();
                                            $h=[];
                                            $dahh=array();
                                            $hh=[];
                                            $dahhh=array();
                                            $hhh=0;

                                                $data423 = $stmt423->fetchAll();
                                                  foreach ($data423 as $key => $value) {
                                                  $dahhh = (float)$value['percentage'];
                                                  $hhh=$dahhh;
                                                  }

                                          $bottt=json_encode($hhh);
                                            $three=str_replace('"', "'",$bottt);
                                            $stmt424=$conn->prepare($sqlfor336);
                                            $stmt424->execute();
                                             $dah=array();
                                              $h=[];
                                              $dahh=array();
                                              $hh=[];
                                              $dahhh=array();
                                              $hhh=0;

                                                  $data424 = $stmt424->fetchAll();
                                                    foreach ($data424 as $key => $value) {
                                                    $dahhh = (float)$value['percentage'];
                                                    $hhh=$dahhh;
                                                    }

                                            $bottp=json_encode($hhh);
                                              $four=str_replace('"', "'",$bottp);
                                              $stmt425=$conn->prepare($sqlfor337);
                                              $stmt425->execute();
                                               $dah=array();
                                                $h=[];
                                                $dahh=array();
                                                $hh=[];
                                                $dahhh=array();
                                                $hhh=0;

                                                    $data425 = $stmt425->fetchAll();
                                                      foreach ($data425 as $key => $value) {
                                                      $dahhh = (float)$value['percentage'];
                                                      $hhh=$dahhh;
                                                      }

                                              $bottl=json_encode($hhh);
                                                $five=str_replace('"', "'",$bottl);
                                                $stmt426=$conn->prepare($sqlfor338);
                                                $stmt426->execute();
                                                 $dah=array();
                                                  $h=[];
                                                  $dahh=array();
                                                  $hh=[];
                                                  $dahhh=array();
                                                  $hhh=0;

                                                      $data426 = $stmt426->fetchAll();
                                                        foreach ($data426 as $key => $value) {
                                                        $dahhh = (float)$value['percentage'];
                                                        $hhh=$dahhh;
                                                        }

                                                $bottz=json_encode($hhh);
                                                  $six=str_replace('"', "'",$bottz);
                                                  $stmt427=$conn->prepare($sqlfor339);
                                                  $stmt427->execute();
                                                   $dah=array();
                                                    $h=[];
                                                    $dahh=array();
                                                    $hh=[];
                                                    $dahhh=array();
                                                    $hhh=0;

                                                        $data427 = $stmt427->fetchAll();
                                                          foreach ($data427 as $key => $value) {
                                                          $dahhh = (float)$value['percentage'];
                                                          $hhh=$dahhh;
                                                          }

                                                  $bottz=json_encode($hhh);
                                                    $seven=str_replace('"', "'",$bottz);
                                                    $stmt521=$conn->prepare($sqlfor140);
                                                    $stmt521->execute();
                                                    $dah=array();
                                                     $h=0;
                                                     $dahh=array();
                                                     $hh=[];
                                                     $dahhh=array();
                                                     $hhh=0;

                                                         $data521 = $stmt521->fetchAll();
                                                           foreach ($data521 as $key => $value) {
                                                             $dahhh = (float)$value['percentage'];
                                                             $hhh=$dahhh;

                                                           }

                                                   $bot=json_encode($hhh);
                                                     $eighty=str_replace('"', "'",$bot);

                                                     $stmt522=$conn->prepare($sqlfor141);
                                                     $stmt522->execute();
                                                      $dah=array();
                                                       $h=[];
                                                       $dahh=array();
                                                       $hh=[];
                                                       $dahhh=array();
                                                       $hhh=0;

                                                           $data522 = $stmt522->fetchAll();
                                                             foreach ($data522 as $key => $value) {
                                                             $dahhh = (float)$value['percentage'];
                                                             $hhh=$dahhh;
                                                             }

                                                     $bott=json_encode($hhh);
                                                       $ninen=str_replace('"', "'",$bott);
                                                       $stmt523=$conn->prepare($sqlfor142);
                                                       $stmt523->execute();
                                                        $dah=array();
                                                         $h=[];
                                                         $dahh=array();
                                                         $hh=[];
                                                         $dahhh=array();
                                                         $hhh=0;

                                                             $data523 = $stmt523->fetchAll();
                                                               foreach ($data523 as $key => $value) {
                                                               $dahhh = (float)$value['percentage'];
                                                               $hhh=$dahhh;
                                                               }

                                                       $bottt=json_encode($hhh);
                                                         $ten=str_replace('"', "'",$bottt);
                                                         $stmt524=$conn->prepare($sqlfor143);
                                                         $stmt524->execute();
                                                          $dah=array();
                                                           $h=[];
                                                           $dahh=array();
                                                           $hh=[];
                                                           $dahhh=array();
                                                           $hhh=0;

                                                               $data524 = $stmt524->fetchAll();
                                                                 foreach ($data524 as $key => $value) {
                                                                 $dahhh = (float)$value['percentage'];
                                                                 $hhh=$dahhh;
                                                                 }

                                                         $bottp=json_encode($hhh);
                                                           $eleven=str_replace('"', "'",$bottp);
                                                           $stmt525=$conn->prepare($sqlfor144);
                                                           $stmt525->execute();
                                                            $dah=array();
                                                             $h=[];
                                                             $dahh=array();
                                                             $hh=[];
                                                             $dahhh=array();
                                                             $hhh=0;

                                                                 $data525 = $stmt525->fetchAll();
                                                                   foreach ($data525 as $key => $value) {
                                                                   $dahhh = (float)$value['percentage'];
                                                                   $hhh=$dahhh;
                                                                   }

                                                           $bottl=json_encode($hhh);
                                                             $twelve=str_replace('"', "'",$bottl);
                                                             $stmt526=$conn->prepare($sqlfor145);
                                                             $stmt526->execute();
                                                              $dah=array();
                                                               $h=[];
                                                               $dahh=array();
                                                               $hh=[];
                                                               $dahhh=array();
                                                               $hhh=0;

                                                                   $data526 = $stmt526->fetchAll();
                                                                     foreach ($data526 as $key => $value) {
                                                                     $dahhh = (float)$value['percentage'];
                                                                     $hhh=$dahhh;
                                                                     }

                                                             $bottz=json_encode($hhh);
                                                               $thirthen=str_replace('"', "'",$bottz);
                                                               $stmt527=$conn->prepare($sqlfor146);
                                                               $stmt527->execute();
                                                                $dah=array();
                                                                 $h=[];
                                                                 $dahh=array();
                                                                 $hh=[];
                                                                 $dahhh=array();
                                                                 $hhh=0;

                                                                     $data527 = $stmt527->fetchAll();
                                                                       foreach ($data527 as $key => $value) {
                                                                       $dahhh = (float)$value['percentage'];
                                                                       $hhh=$dahhh;
                                                                       }

                                                               $bottz=json_encode($hhh);
                                                                 $fourthen=str_replace('"', "'",$bottz);




          return $this->render('dashboard/blank.html.twig',[
              'recent'=>$recent,
              'locationform'=>$form->createView(),
              'siteInfo' => $siteInfo,
              'directorateform' => $form2->createView(),
               'count' => $data67,
               'subm'=>$subm,
               'named'=>$named,
               'finalData'=>$finalData,
               'finalData_non_ephi'=>$finalData_non_ephi,
               'finalData_data_submission'=>$finalData_data_submission,
              'type'=> $s,
              'sub' => $sub,
              'title'=>$title,
              'eight' => $finalData,
              'nine' => $bothh,
              'twenty' => $bothhh,
              'one' => $bothp,
              'hv' => $hv,
              'bp' => $bp,
              'hs' => $hs,
              'nl' => $nl,
              'ph' => $ph,
              'fs' => $fs,
              'tm' => $tm,
              'save'=>$onen,
             'fh'=> $two,
             'care' => $three,
             'hep'=>$four,
             'amr' => $five,
           'jpie' => $six,
           'corha' => $seven,
             'fmoh' => $eighty,
             'oromia' => $ninen,
           'iom'  => $ten,
             'csa' => $eleven,
             'js' => $twelve,
           'champ' => $thirthen,
             'who' => $fourthen,

          ]);






      }
   /**
     * @Route("/advanced-search", name="advanced-search")
     */
    public function advancedSearch(Request $request,DatasetRepository $datasetRepository,PaginatorInterface $paginator)
    {
      $em = $this->getDoctrine()->getManager();
      $datasetrepo = $em->getRepository(Dataset::class);

         $form =$this->createForm(AdvancedSearchType::class,null);
         $form->handleRequest($request);
         $form5 = $this->createForm(FilterType::class, null);
         $form5->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){

        $dataTypeid=null;
        $studydesignid=null;
        if($form['datatype']->getData())
        $dataTypeid=$form['datatype']->getData()->getId();

        if($form['studydesign']->getData())
        $studydesignid=$form['studydesign']->getData()->getId();

        // dd($form['keywords']->getData());
           $queryBuilder= $datasetRepository->advancedSearch($form['keywords']->getData(),$dataTypeid,$studydesignid,$form['coveragesex']->getData(),$form['yearstart']->getData(),$form['yearend']->getData());

           $data = $paginator->paginate(
             $queryBuilder, /* query NOT result */
             $request->query->getInt('page', 1)/*page number*/,
             10/*limit per page*/
         );



           return $this->render('dashboard/search.html.twig',[
            'datasets' => $data,
           ]);

       }

       $form5 = $this->createFormBuilder()
           ->add('Directorate', EntityType::class, [
               'class' => WorkUnit::class,
           ])
           ->add('Search', SubmitType::class, [
               'attr' => [
                   'class' => 'btn btn-success',
               ],
           ])
           ->getForm();
             $form5->handleRequest($request);
           if ($form5->isSubmitted() && $form5->isValid()) {

               // dd($form2['Directorate']->getData()->getId());
               $queryBuilder = $datasetrepo->searchByDirectorate($form5['Directorate']->getData());
               $data1 = $paginator->paginate(
                   $queryBuilder, /* query NOT result */
                   $request->query->getInt('page', 1) /*page number*/,
                   10/*limit per page*/
               );
               return $this->render('dashboard/search.html.twig', [
                   'datasets' => $data1,
               ]);

           }

        return $this->render('dashboard/advanced.html.twig',[
            'form'=>$form->createView(),
              'directorateform' => $form5->createView(),
        ]);





    }




  /**
     * @Route("/showdetail/{id}", name="showdetail")
     */
    public function showDetail(Dataset $dataset, AffiliationRepository $affiliationRepository)
    {

      $user=null;
      $em=$this->getDoctrine()->getManager();
      $affliation=$affiliationRepository->findAll();
     // $attachments=$em->getRepository(DatasetAttachment::class)->findBy(['dataset'=>$dataset->getId()]);
      $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());
      if($this->getUser()){

        $user=$this->getUser();
      }

      return $this->render('dashboard/showdetail.html.twig',[
        'dataset' =>$dataset,
        'attachments'=>$attachments,
        'affliations' => $affliation,
        'user' => $user
       ]);



    }
    /**
     * @Route("/showsingle/{id}", name="showsingle")
     */
    public function showsingle(Request $request,DatasetRepository $datasetRepository)
    {







       if($request->query->get('name')){
           $name=$request->query->get('name');
           $data= $datasetRepository->findBy(['id'=>$id]);
          //
           return $this->render('dashboard/showsingle.html.twig',[
             'datasets' =>$data,

            ]);
       }
       if($request->query->get('dataType')){
           $name=$request->query->get('dataType');
  $data= $datasetRepository->findOneBy(['dataType'=>$name]);

  return $this->render('dashboard/showsingle.html.twig',[
    'datasets' =>$data,

   ]);
}


        return $this->render('dashboard/home.html.twig');
    }


  /**
     * @Route("/loc", name="loc")
     */
    public function location(Request $request,DatasetRepository $datasetRepository)
    {

       if($request->query->get('location')){
           $location=$request->query->get('location');
           if($location=='location'){
         $data=$datasetRepository->findAll();
           }
           else{

            $data= $datasetRepository->locationSearch($location);
           }

           return $this->render('dashboard/location.html.twig',[
             'datasets' =>$data,
            ]);
       }







        return $this->render('dashboard/home.html.twig');





    }



  /**
     * @Route("/study_design", name="study_design")
     */
    public function study_design(Request $request,DatasetRepository $datasetRepository)
    {

        $form=$this->createFormBuilder();
        $form->add('studies',EntityType::class,[
            'class'=>StudyDesign::class
        ])->getForm();

       if($request->query->get('study_design')){
           $study_design=$request->query->get('study_design');
           if($study_design=='all'){
         $data=$datasetRepository->findAll();
           }
           else{

            $data= $datasetRepository->studydesignSearch($study_design);
           }

           return $this->render('dashboard/studydesign.html.twig',[
             'datasets' =>$data,
             'form'=>$form
            ]);
       }


        return $this->render('dashboard/home.html.twig');

    }

  /**
     * @Route("/demographic_group", name="demographic_group")
     */
    public function demographic_group(Request $request,DatasetRepository $datasetRepository)
    {

        $form=$this->createFormBuilder();
        $form->add('studies',EntityType::class,[
            'class'=>DemographicGroup::class
        ])->getForm();

       if($request->query->get('demographic_group')){
           $demographic_group=$request->query->get('demographic_group');
           if($demographic_group=='all'){
         $data=$datasetRepository->findAll();
           }
           else{

            $data= $datasetRepository->demographicGroupSearch($demographic_group);
           }

           return $this->render('dashboard/demographic_group.html.twig',[
             'datasets' =>$data,
             'form'=>$form
            ]);
       }


        return $this->render('dashboard/home.html.twig');

    }



    /**
     * @Route("/print_single", name="print_single")
     */
    public function print_single(Request $request,DatasetRepository $datasetRepository)
    {

$html="";


       if($request->query->get('name')){
           $name=$request->query->get('name');
           $data= $datasetRepository->findBy(['name'=>$name]);


           $html = $this->renderView("print_document/printsingle.html.twig", [
            'datasets'=> $data
        ]);


       }

       $name="".rand(10000,99999);

       $pdfOptions = new Options();
       $pdfOptions->set('defaultFont', 'Arial');

       $dompdf = new Dompdf($pdfOptions);
      // $dompdf->set_option('isHtml5ParserEnabled', true);

       $dompdf->loadHtml($html);

       $dompdf->setPaper('A4', 'portrait');

       // Render the HTML as PDF
       $dompdf->render();


       // Output the generated PDF to Browser (force download)
       $dompdf->stream($name.".pdf", [
           "Attachment" => 1
       ]);





        return $this->render('dashboard/home.html.twig');
    }

  /**
     * @Route("/generateCSV", name="generateCSV")
     */
    public function generateCSV(Request $request,DatasetRepository $datasetRepository)
    {


      $list = array (
        array('aaa', 'bbb', 'ccc', 'dddd'),
        array('123', '456', '789', '102'),
        array('"aaa"', '"bbb"')
    );

    $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);

// instantiation, when using it inside the Symfony framework
file_put_contents(
  'data.csv',
  $serializer->encode($list, 'csv')
);

//     $response = new Response();
// $response->headers->set('Content-type', 'text/csv');
// $response->headers->set('Cache-Control', 'private');
// // $response->headers->set('Content-length', $attachmentSize);
// $response->headers->set('Content-Disposition', 'attachment; filename="data.csv";');
// $response->sendHeaders();
// // $responseString contains csv result string
// //  $response->setContent($fileName);
// return $response;
  return new Response('done');
}
public function sendEmail(Request $request,MailerInterface $mailer ,MailerService $mservice)
{

    $rate = $request->request->get('rate');
    $feedback = $request->request->get('feedback');
dd($feedback);
        $message=" User feedback"."Rated ".$rate."Message ".$feedback."";
    $mservice->sendEmail($mailer,$message, "galeabdi12@gmail.com", "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);

    }


}
