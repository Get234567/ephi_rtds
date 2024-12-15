<?php

namespace App\Controller;

use App\Entity\GeospatialPoints;
use App\Form\GeospatialPointsType;
use App\Repository\GeospatialPointsRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/points")
 */
class GeospatialPointsController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="geospatial_points_index", methods={"GET"})
     */
    public function index(GeospatialPointsRepository $geospatialPointsRepository): Response
    {
        return $this->render('geospatial_points/index.html.twig', [
            'geospatial_points' => $geospatialPointsRepository->findAll(),
        ]);
    }

  /**
     * @Route("/loca", name="loca")
     */
    public function locations(Request $request,GeospatialPointsRepository $georep)
    {

        if($request->query->get('id')){
        
            $id=$request->query->get('id');
            
            $data=$georep->findBy(['id'=>$id]);
        //     $data = $this->getDoctrine()
        // ->getRepository(GeospatialPoints::class)
        // ->find($id);
     
            return $this->render('dashboard/location.html.twig',[
                'datasets' =>$data,
               ]);

        }

       if($request->query->get('location')){
           $location=$request->query->get('location');
           if($location=='location'){
         $data=$georep->findAll();
           }
           else{
               
            $data= $georep->locationSearch($location);
           }
         
           return $this->render('dashboard/location.html.twig',[
             'datasets' =>$data,
            ]);
       }
    
      
       return $this->render('dashboard/home.html.twig');




    }
   

    /**
     * @Route("/new", name="geospatial_points_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $geospatialPoint = new GeospatialPoints();
        $form = $this->createForm(GeospatialPointsType::class, $geospatialPoint);
        $form->handleRequest($request);

      
        // if ($form->isSubmitted()) {
           
            
            $entityManager = $this->getDoctrine()->getManager();
         
            if($request->request->get('location_detail_f')){
                // echo "Submitted";
                // die;
                $description=$request->request->get('location_detail_f');
                $name=$request->request->get('location_name_f');
                $description=$request->request->get('location_detail_f');
                $geo_location=$request->request->get('ge_loc');
                $geospatialPoint = new GeospatialPoints();
                // $geospatialPoint->set
    
                $entityManager = $this->getDoctrine()->getManager();
                $geospatialPoint->setName($name);
                $geospatialPoint->setDescription($description);
                $geospatialPoint->setPoints($geo_location);
                $entityManager->persist($geospatialPoint);
                $entityManager->flush();
    
                dd($geospatialPoint);
               
                $entityManager->flush();
                return $this->redirectToRoute('geospatial_points_index');
            }
    
         
        // }
     

        return $this->render('geospatial_points/new.html.twig', [
            'geospatial_point' => $geospatialPoint,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="geospatial_points_show", methods={"GET"})
     */
    public function show(GeospatialPoints $geospatialPoint): Response
    {
        return $this->render('geospatial_points/show.html.twig', [
            'geospatial_point' => $geospatialPoint,
        ]);
    }




    
    /**
     * @Route("/{id}/edit", name="geospatial_points_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, GeospatialPoints $geospatialPoint): Response
    {
        $form = $this->createForm(GeospatialPointsType::class, $geospatialPoint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('geospatial_points_index');
        }

        return $this->render('geospatial_points/edit.html.twig', [
            'geospatial_point' => $geospatialPoint,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="geospatial_points_delete", methods={"DELETE"})
     */
    public function delete(Request $request, GeospatialPoints $geospatialPoint): Response
    {
        if ($this->isCsrfTokenValid('delete'.$geospatialPoint->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($geospatialPoint);
            $entityManager->flush();
        }

        return $this->redirectToRoute('geospatial_points_index');
    }






}
