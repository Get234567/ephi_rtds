<?php

namespace App\Controller;
use App\Entity\Keyword;
use App\Entity\Dataset;
use Doctrine\DBAL\Query;
use Doctrine\DBAL\Tools\Console\Command\RunSqlCommand;
use App\Form\KeywordType;
use AppBundle\Rss\Xml;
use App\Form\DatasetType;
use App\Repository\KeywordRepository;
use App\Repository\DatasetRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\DBAL\ParameterType;
use Doctrine\DBAL\Query\Expression\CompositeExpression;
use Doctrine\DBAL\Query\Expression\ExpressionBuilder;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Query\QueryBuilder;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\SaveQuery;
use App\Repository\SaveQueryRepository;


/**
 * @Route("/keyword")
 */
class KeywordController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }
    /**
     * @Route("/ab", name="keyword_index", methods={"GET"})
     */
    public function galo(KeywordRepository $keywordRepository): Response
    {
        return $this->render('keyword/index.html.twig', [
            'keywords' => $keywordRepository->findAll(),
        ]);
    }

    /**
     * @Route("/addkeywords", name="addkeywords", methods={"GET","POST"})
     */
    public function addkeywords(Request $request, EntityManagerInterface $em): Response
    {

        $keyword="";
        if ($request->query->get('keystore')) {
            $keywords=$request->query->get('keystore');
            $keys=explode(',', $keywords);
            $id=$request->query->get('keyid');

            // $entityManager = $em->getDoctrine()->getManager();
            $dataset = $em->getRepository(Dataset::class)->find($id);



            if (!$dataset) {
                throw $this->createNotFoundException(
                    'No dataset found for id '.$id
                );
            }
        $oldkey=$dataset->getKeywords();
      if(!$oldkey){
        $oldkey[]="";
      }
        //dd($oldkey);
        $save=array_merge($oldkey , $keys);
            $dataset->setKeywords($save);

            $em->flush();

            return $this->redirectToRoute('dataset_show',['id'=>$dataset->getId()]);

        }

        return $this->redirectToRoute('dataset_show',['id'=>$dataset->getId()]);

    }

    /**
     * @Route("/new", name="keyword_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $keyword = new Keyword();
        $form = $this->createForm(KeywordType::class, $keyword);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($keyword);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('keyword/new.html.twig', [
            'keyword' => $keyword,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/", name="keyword_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $em,Request $request,PaginatorInterface $paginator, SaveQueryRepository $saveQueryRepository, KeywordRepository $keywordRepository, DatasetRepository $DatasetRepository): Response
    {

    // $con =$em->getConfiguration();
       //$con=mysql_connect("localhost","galom","123456","ephi");
          //  $conn = $this->getDoctrine()->getConnection();

  $con = $this->getDoctrine()->getConnection();
if($request->query->get('letter')){
  $letter=$request->query->get('letter');
  $table_sql="SELECT Distinct keyword.name, keyword.description FROM keyword WHERE keyword.name lIKE '$letter%'";
  $res_table=$con->query($table_sql);

  $table= $res_table->fetchAll();
  $keyword= $paginator->paginate(
      $table, /* query NOT result */
      $request->query->getInt('page', 1)/*page number*/,
      20/*limit per page*/
  );

}
else {
  $keyword='';
}

if ($request->query->get('name')) {
    // code...
$name=$request->query->get('name');

  $tabl_sql="SELECT DISTINCT dataset.name, dataset.id FROM keyword, dataset WHERE keyword.name LIKE '%$name%' and dataset.keywords LIKE '%$name%'";
  $res_tabl=$con->query($tabl_sql);
  $tables= $res_tabl->fetchAll();
    $dataset= $paginator->paginate(
        $tables, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        20/*limit per page*/
    );

}
else {
  $dataset='';
}




return $this->render('keyword/index.html.twig', [
    'Keyword' => $keyword,
    'dataset' => $dataset,
]);



   }

    /**
     * @Route("/{id}", name="keyword_show", methods={"GET"})
     */
    public function show(Keyword $keyword): Response
    {
        return $this->render('keyword/show.html.twig', [
            'keyword' => $keyword,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="keyword_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Keyword $keyword): Response
    {
        $form = $this->createForm(KeywordType::class, $keyword);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('keyword_index');
        }

        return $this->render('keyword/edit.html.twig', [
            'keyword' => $keyword,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="keyword_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Keyword $keyword): Response
    {
        if ($this->isCsrfTokenValid('delete'.$keyword->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($keyword);
            $entityManager->flush();
        }

        return $this->redirectToRoute('keyword_index');
    }
    /**
     * @Route("/rssAction", name="test_index", methods={"GET"})
     */
    public function rssAction(KeywordRepository $keywordRepository,  DatasetRepository $DatasetRepository): Response
  {
      return $this->render('keyword/rss.html.twig', [
          'keyword' => $keywordRepository->findAll(),
          'dataset' => $DatasetRepository->findAll(),
      ]);

  }
  /**
     * @Route("/rss", name="rss",
     *      options={"sitemap" = true}
     *     )
     */
    public function rss(){
        $rss = simplexml_load_file('https://somesite.wordpress.com/feed');

        return $this->render('default/rss.html.twig', array(
            'rss' => $rss,
        ));
    }




}
