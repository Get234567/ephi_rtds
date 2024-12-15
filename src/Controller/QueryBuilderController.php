<?php

namespace App\Controller;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\SaveQuery;
use App\Repository\SaveQueryRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QueryBuilderController extends AbstractController
{
    /**
     * @Route("/query/builder", name="query_builder",methods={"GET","POST"})
     */
    public function index(EntityManagerInterface $em,Request $request,PaginatorInterface $paginator, SaveQueryRepository $saveQueryRepository)
    {

        $select_query="select ";

        // $con =$em->getConfiguration();
        // $con=mysqli_connect("localhost","extra","Qwerty12!@","ephi");
        $con = $this->getDoctrine()->getConnection();



        $table_sql="show tables";
        // $res_table=mysqli_query($con,$table_sql);
        // $tables=mysqli_fetch_all($res_table);

        $res_table=$con->query($table_sql);
        $tables= $res_table->fetchAll();

$table_columns=array();

$display_tables=['dataset','study','study_design','work_unit','coverage_type','study_type','Keyword'];
      if($tables){

        foreach($tables as $table){
// dd($table);
$table=$table['Tables_in_ephi'];
            if(in_array($table,$display_tables)){




            $column_sql="show columns from ".$table."";
            // $res_col=mysqli_query($con,$column_sql);
            // $columns=mysqli_fetch_all($res_col);
            $res_col=$con->query($column_sql);
            $columns= $res_col->fetchAll();
        //  dd($columns[0]);


          $table_columns[$table]=$columns;

                }
                    }


    }

//return result


    if($request->request->get('show') or $request->request->get('save') or $request->query->getInt('page')){
// dd($request->request->get('table'));

$selection_tables=[];
$selection_columns=[];
$conditions=[];

foreach($display_tables as $dt)
{
    if ($request->request->get($dt.'-checkbox') !== null){
        $sub_table=$request->request->get($dt.'-checkbox');

        $column_sql="show columns from ".$sub_table."";
        // $res_col=mysqli_query($con,$column_sql);
        // $columns=mysqli_fetch_all($res_col);
        $res_col=$con->query($column_sql);
        $columns= $res_col->fetchAll();


        $selection_tables[]=$sub_table;
    foreach($columns as $col)
    {
        if ($request->request->get($sub_table.'-'.$col['Field'].'-column') !== null){
            $column=$request->request->get($sub_table.'-'.$col['Field'].'-column');
            $operator=$request->request->get($sub_table.'-'.$col['Field'].'-operators');
            $input=$request->request->get($sub_table.'-'.$col['Field'].'-input');


            $selection_columns[]=$column;


           if($operator=="LIKE %...%" ){

            $operator="LIKE ";
            $input="%".$input."%";
        }
        if($operator=="LIKE" ){

            $input=$input."%";
        }
        if($col['Type']!='int(11)' and $operator!='IN' and $operator!='NOT IN'){
            $input="'".$input."'";
        }
            // $select_query=$select_query.$column.",";
            if($input!="''" and $input!=null ){

                $conditions[]=$column." ".$operator." ".$input;
            }
            if($operator=="IS NULL" or $operator=="IS NOT NULL" ){

                $conditions[]=$column." ".$operator;
            }

// dump($column,$operator,$input);
        }
    }

}


}

if(implode(' and ',$conditions)=="")
$from="".implode(', ',$selection_columns)." from ".implode(', ',$selection_tables);
else
$from="".implode(', ',$selection_columns)." from ".implode(', ',$selection_tables)." where ".implode(' and ',$conditions);

if(!$selection_columns)
$select_query=$select_query." * ";

$built_query=$select_query.$from;
// dd($built_query);
// $res_built=mysqli_query($con,$built_query);
if(!$con->query($built_query))
{

    $this->addFlash("danger","not found");
    return $this->redirectToRoute("query_builder");
}
$res_built=$con->query($built_query);


// dd($res_built);
if(!$res_built){

    $this->addFlash("danger","not found");
    return $this->redirectToRoute("query_builder");
}

$old_query=$saveQueryRepository->findBy(['auto'=>true]);

if($old_query){
    $entityManager = $this->getDoctrine()->getManager();

foreach($old_query as $old)
$entityManager->remove($old);
$entityManager->flush();

}

$saveQuery=new SaveQuery();
$saveQuery->setSavedBy($this->getUser());
$saveQuery->setSavedAt(new DateTime());
$saveQuery->setQuery($built_query);
$saveQuery->setName("Auto");
$saveQuery->setAuto(true);
$em=$this->getDoctrine()->getManager();
$em->persist($saveQuery);
$em->flush();



if($request->request->get('save')){
    $name=$request->request->get('save_query');
    $description=$request->request->get('description');
    $saveQuery=new SaveQuery();
    $saveQuery->setName($name);
    $saveQuery->setDescription($description);
    $saveQuery->setSavedBy($this->getUser());
    $saveQuery->setSavedAt(new DateTime());
    $saveQuery->setAuto(false);
    $saveQuery->setQuery($built_query);
    $em=$this->getDoctrine()->getManager();

    $em->persist($saveQuery);
    $em->flush();
    $this->addFlash("success","Query saved successfully");
    return $this->redirectToRoute("query_builder");

}


// $built_result=mysqli_fetch_all($res_built);
$built_result= $res_built->fetchAll();


// $queryBuilder= $built_result;
// $built_result = $paginator->paginate(
//   $queryBuilder, /* query NOT result */
//   $request->query->getInt('page', 1)/*page number*/,
//   10/*limit per page*/
// );
// dd($built_result);

return $this->render('query_builder/index.html.twig', [
    // 'tables'=>$tables,
    // 'columns' =>$columns
    'built_result'=>$built_result,
    'table_columns'=>$table_columns,
    'selected_columns'=>$selection_columns

]);
    }


        return $this->render('query_builder/index.html.twig', [
            // 'tables'=>$tables,
            // 'columns' =>$columns
            'table_columns'=>$table_columns

        ]);
    }



    /**
     * @Route("/query/print", name="query_builder_print",methods={"GET","POST"})
     */
    public function printSavedQuery(Request $request  ,  SaveQueryRepository $saveQueryRepository)
    {

        if(!$request->request->get('print')){

            $query=$saveQueryRepository->findOneBy(['auto'=>true]);
            $printing=$query->getQuery();
            $str1=explode(' from ',$printing)[0];
            $str2=explode("select",$str1)[1];
             $cols=explode(",",$str2);
            // dd($cols);
            // dd($printing);
            // $con=mysqli_connect("localhost","extra","Qwerty12!@","ephi");

            // $res_built=mysqli_query($con,$printing);
            // $built_result=mysqli_fetch_all($res_built);

            $con = $this->getDoctrine()->getConnection();


                    $res_built=$con->query($printing);
                    $built_result= $res_built->fetchAll();

            // $this->security->isAllowed($this->getUser(),"srch_res_exprt_pdf");

          $html="";



       $html = $this->renderView("print_document/printquery.twig", [
        'built_result'=>$built_result,
    // 'table_columns'=>$table_columns,
    'selected_columns'=>$cols
    ]);

       $name="".rand(10000,99999);

       $pdfOptions = new Options();
       $pdfOptions->set('defaultFont', 'Arial');

       $dompdf = new Dompdf($pdfOptions);
      // $dompdf->set_option('isHtml5ParserEnabled', true);

       $dompdf->loadHtml($html);

       $dompdf->setPaper('A3', 'landscape');

       // Render the HTML as PDF
       $dompdf->render();


       // Output the generated PDF to Browser (force download)
       $dompdf->stream($name.".pdf", [
           "Attachment" => 0
       ]);







        }

     return $this->redirectToRoute('query_builder');

    }





    /**
     * @Route("/getQueryCSV", name="getQueryCSV")
     */

    public function exportQuery(Request $request , SaveQueryRepository $saveQueryRepository)
    {


        $query=$saveQueryRepository->findOneBy(['auto'=>true]);
        $printing=$query->getQuery();
        $str1=explode(' from ',$printing)[0];
        $str2=explode("select",$str1)[1];
         $cols=explode(",",$str2);
        // dd($cols);
        // dd($printing);

        $con = $this->getDoctrine()->getConnection();

// dd($conn);
        // $con=mysqli_connect("localhost","extra","Qwerty12!@","ephi");

        // $res_built=mysqli_query($con,$printing);

        // $built_result=mysqli_fetch_all($res_built);

        $res_built=$con->query($printing);
        $built_result= $res_built->fetchAll();
// dd($built_result);

        $rows = array();
             $data=$cols;
              $rows[] = implode(',', $data);
             foreach ($built_result as $event) {
            $data1 = $event;



            $rows[] = implode(',', $data1);
        }


        $content = implode("\n", $rows);
// dd($content);
        $response = new Response($content);
        $response->headers->set('Content-Type', 'text/csv');


        return $response;


    }





}
