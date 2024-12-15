<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Dompdf\Options;
use Dompdf\Dompdf;

class PrintDocumentController extends AbstractController
{
    /**
     * @Route("/print_document", name="print_document")
     */
    public function index(Request $request)
    {
      $name="".rand(100000,999999);

      
   
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->set_option('isHtml5ParserEnabled', true);
      //  if($request->query->get('template'))
        // $template=$request->query->get('template');
        // $dataset=$request->query->get('dataset');
       
        $html  =$request->query->get('data');
       
        dd($html);
        
        $dompdf->loadHtml($html);
        
        
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();


        if($request->query->get('name')){
     $name=$request->query->get('name');
        }
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($name.".pdf", [
            "Attachment" => 0
        ]);    }

    }

