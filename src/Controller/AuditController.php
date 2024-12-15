<?php

namespace App\Controller;

use App\Entity\FosUser;
use App\Services\AuditReader;
use App\Services\EPHISecurity;
use DH\DoctrineAuditBundle\Helper\AuditHelper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuditController extends AbstractController
{

    private $reader;
    private $security;

    public function __construct(AuditReader $reader,EPHISecurity $ePHISecurity)
    {
        $this->reader = $reader;
        $this->security=$ePHISecurity;
    }
    /**
     * @Route("/audit", name="dh_doctrine_audit_list_audits")
     */
    public function listAuditsAction(Request $request): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_actvty");
        $enttt=$this->reader->getEntities() ;
        foreach( $enttt as $key => $value) {
            $key=explode("\\",$key)[2];
            if($key=="FosUser"){
                $key="User";
            }
            $tabs[$key]=$key;
        }
        $form = $this->createFormBuilder()
            ->add('Name' ,TextType::class)
            ->add('Table',  ChoiceType::class, [
                'choices' => $tabs
                ])
            ->add('operation',ChoiceType::class, [
                'choices' => [
                    'all' => 'all',
                    'insert' => 'insert',
                    'update' => 'update',
                    'delete' => 'delete',
                ]])
            ->add('Search', SubmitType::class)
            ->getForm();
            $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $user=$data['Name'];
        $table=$data['Table'];
        $ops=$data['operation'];
        return $this->redirectToRoute('audit_search',["u"=>$user,'t'=>$table,'o'=>$ops]);
       return $this->search($request,null,$user,$table,$ops);
    }

        return $this->render('DHDoctrineAudit/Audit/audits.html.twig', [
            'audited' => $this->reader->getEntities(),
            'reader' => $this->reader,
            'form' => $form->createview(),
        ]);
    }
    /**
     * @Route("/user/activity", name="dsgdf", methods={"GET"})
     */
    public function userActivity(): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_actvty");
        return $this->render('DHDoctrineAudit/Audit/audits.html.twig', [
            'audited' => $this->reader->getEntities(),
            'reader' => $this->reader,
            'empty'=>''
        ]);
    }

    

    /**
     * @Route("/audit/{entity}/{id}", name="dh_doctrine_audit_show_entity_history", methods={"GET"})
     *
     * @param Request    $request
     * @param string     $entity
     * @param int|string $id
     *
     * @return Response
     */
    public function showEntityHistoryAction(Request $request, string $entity, $id = null): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_actvty");
        
    

        $pos = strpos($entity,"-");
    if ($pos === false) {
       
    }
    else $entity=explode("-",''.$entity)[2];
        $page = (int) $request->query->get('page', 1);
        $entity = AuditHelper::paramToNamespace("App\\Entity\\".$entity);
        
        $reader = $this->reader;;
        $entries = $reader->getAuditsPager($entity, $id, $page, AuditReader::PAGE_SIZE);
        $entity=explode("\\",''.$entity)[2];
        return $this->render('DHDoctrineAudit/Audit/entity_history.html.twig', [
            'id' => $id,
            'entity' => $entity,
            'entries' => $entries,
            'empty'=>''
        ]);
    }


    












    /**
     * @Route("/search", name="audit_search", methods={"GET"})
     *
     * @param Request    $request
     * @param string     $entity
     * @param int|string $id
     *
     * @return Response
     */
    public function search(Request $request,$id = null,$user=null,$table=null,$ops=null): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_actvty");
         if($request->query->get('u')){
            $user=$request->query->get('u');
         }
         if($request->query->get('t')){
            $table=$request->query->get('t');
        }
        if($request->query->get('o')){
            $ops=$request->query->get('o');
        }
         
        $entity=$table;
        if($entity=="User")
            $entity="FosUser";
        $page = (int) $request->query->get('page', 1);
        $entity = AuditHelper::paramToNamespace("App\\Entity\\".$entity);
        $reader = $this->reader;
        $enttt=$reader->getEntities() ;
        foreach( $enttt as $key => $value) {
            $key=explode("\\",$key)[2];
            $tabs[$key]=$key;
        }
        if(array_key_exists($entity,$enttt)){
        $entries = $reader->getAuditsPagerSearch($entity,$id,  $page, AuditReader::PAGE_SIZE,$user,$ops);
        $entity=explode("\\",''.$entity)[2];
        return $this->render('@DHDoctrineAudit/Audit/entity_history.html.twig', [
            'id' => $id,
            'entity' => $entity,
            'entries' => $entries,
            'entities'=> $tabs,
            'empty'=>'',
        ]);
    }
    else {

        return $this->render('DHDoctrineAudit/Audit/entity_history.html.twig', [
            'empty'=>'fgd',
            'entities'=> $tabs,
        ]);
    }
}

}
