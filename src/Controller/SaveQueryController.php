<?php

namespace App\Controller;

use App\Entity\SaveQuery;
use App\Form\SaveQueryType;
use App\Repository\SaveQueryRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/save/query")
 */
class SaveQueryController extends AbstractController
{
    /**
     * @Route("/", name="save_query_index", methods={"GET"})
     */
    public function index(SaveQueryRepository $saveQueryRepository): Response
    {
        return $this->render('save_query/index.html.twig', [
            'save_queries' => $saveQueryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="save_query_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $saveQuery = new SaveQuery();
        $form = $this->createForm(SaveQueryType::class, $saveQuery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($saveQuery);
            $entityManager->flush();

            return $this->redirectToRoute('save_query_index');
        }

        return $this->render('save_query/new.html.twig', [
            'save_query' => $saveQuery,
            'form' => $form->createView(),
        ]);
    }

    // /**
    //  * @Route("/{id}", name="save_query_show", methods={"GET"})
    //  */
    // public function show(SaveQuery $saveQuery): Response
    // {
    //     return $this->render('save_query/show.html.twig', [
    //         'save_query' => $saveQuery,
    //     ]);
    // }

    /**
     * @Route("/show_saved/{id}", name="show_saved_query",methods={"GET","POST"})
     */
    public function showSaved(SaveQuery $saveQuery,Request $request  )
    {


            $printing=$saveQuery->getQuery();


            $str1=explode(' from ',$printing)[0];
            $str2=explode("select",$str1)[1];
             $cols=explode(",",$str2);
             // dd($cols);
            //  dd($printing);
            // $con=mysqli_connect("localhost","extra","Qwerty12!@","ephi");

            // $res_built=mysqli_query($con,$printing);
            // $built_result=mysqli_fetch_all($res_built);

            $con = $this->getDoctrine()->getConnection();

          
                    $res_built=$con->query($printing);
                    $built_result= $res_built->fetchAll();
   
            // $this->security->isAllowed($this->getUser(),"srch_res_exprt_pdf");

          $html="";

   

          return $this->render('save_query/execute.saved.html.twig', [
            // 'tables'=>$tables,
            // 'columns' =>$columns
            // 'table_columns'=>$table_columns,
            'built_result'=>$built_result,
            'selected_columns'=>$cols
            
        ]);
      


        }











    /**
     * @Route("/print/{id}", name="saved_query_print",methods={"GET","POST"})
     */
    public function printSaved(SaveQuery $saveQuery,Request $request  )
    {


            $printing=$saveQuery->getQuery();


            $str1=explode(' from ',$printing)[0];
            $str2=explode("select",$str1)[1];
             $cols=explode(",",$str2);
             // dd($cols);
            //  dd($printing);
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
 


       return $this->redirectToRoute('save_query_index'); 



        }




    /**
     * @Route("/export_my_query{id}", name="export_my_query")
     */

    public function exportMyQuery(Request $request , SaveQuery $saveQuery)
    {

 
        $printing=$saveQuery->getQuery();
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










    /**
     * @Route("/{id}/edit", name="save_query_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SaveQuery $saveQuery): Response
    {
        $form = $this->createForm(SaveQueryType::class, $saveQuery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('save_query_index');
        }

        return $this->render('save_query/edit.html.twig', [
            'save_query' => $saveQuery,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="save_query_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SaveQuery $saveQuery): Response
    {
        if ($this->isCsrfTokenValid('delete'.$saveQuery->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($saveQuery);
            $entityManager->flush();
        }

        return $this->redirectToRoute('save_query_index');
    }
}
