<?php

namespace App\Twig;

use App\Entity\Dataset;
use App\Entity\FosUser;
use App\Entity\Site;
use App\Entity\Study;
use App\Repository\SiteRepository;
use App\Repository\StudyResearcherRepository;
use App\Services\EPHISecurity;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Symfony\Component\Form\FormView;
use Twig_SimpleFilter;

class AppExtension extends AbstractExtension
{

    private $security;
    private $researchTeam;
    private $siteRepository;
    private $em;
    public function __construct(EPHISecurity $sec,StudyResearcherRepository $studyResearcherRepository,SiteRepository $siteRepository,EntityManagerInterface $em)
    {
        $this->security = $sec;
        $this->researchTeam=$studyResearcherRepository;
        $this->siteRepository=$siteRepository;
        $this->em=$em;
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('filter_name', [$this, 'doSomething']),
            new TwigFilter('cast_to_array', [$this, 'objectFilter']),

        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('formview_prop', [$this, 'getFormViewProperty']),
            new TwigFunction('is_allowed', [$this, 'is_allowed']),
            new TwigFunction('my_json', [$this, 'my_json']),
            new TwigFunction('is_study_owner', [$this, 'is_study_owner']),
            new TwigFunction('is_reviewer', [$this, 'is_reviewer']),
            new TwigFunction('is_dataset_owner', [$this, 'is_dataset_owner']),
            new TwigFunction('getYears', [$this, 'getYears']),
            new TwigFunction('sitename', [$this, 'sitename']),
            new TwigFunction('site_visit_count', [$this, 'site_visit_count']),
            new TwigFunction('get_terrms_of_reference', [$this, 'get_terrms_of_reference']),
            //new TwigFunction('mul', [$this, 'calculateArea']),
        ];
    }

    public function getFormViewProperty(FormView $formView,string $prop)
    {
        return $formView->{$prop};
    }

    /*public function objectFilter($stdClassObject) {
        // Just typecast it to an array
        $arr=array();
        $response = (array)$stdClassObject;
        foreach($response as $key => $value)
        {
            $arr[ $key]=$value;
        }
        return $arr;
    }*/

    public function sitename(){
        $site=$this->siteRepository->findAll();
        if(array_key_exists(0,$site)){

        return $site[0]->getSiteName();
    }
         return "[ Configure site name ]";
    }
    public function calculateArea(int $width, int $length)
    {
        return $width * $length;
    }
    public function my_json($data)
    {
        return json_encode( json_decode($data));
    }
    public function is_allowed(FosUser $usr=null,$action){

        if(!$usr)return false;
        return $this->security->isAllowedTwig($usr,$action);

    }

    public function is_reviewer(FosUser $user,Study $study){
       return  $study->getReviewer() == $user;

    }

    public function is_study_owner(FosUser $user,Study $study,$action=null)
    {


       // if($user->hasRole('ROLE_ADMIN'))return true;
       if(!$action)
      return $user->getStudies()->contains($study);
        $permission=array();
      $permission["Co-PI"]=["add_tags","add_f_","add_task","add_s_d","add_l_d","add_f_s","send_fd","sbmt_task"];
      $permission["RESEARCHER"]=["add_tags","sbmt_task","SFSF","SDFSDFC"];
       if($study->getCreator() == $user)return true;
     //  return true;
      $st= $this->researchTeam->findOneBy(["user"=>$user,"study"=>$study,'status'=>true]);
      if($st){
        $inv=$st->getInvolvement();
        if(!array_key_exists($inv,$permission))return false;
        if(array_search($action,$permission[$inv]))return true;

      }

    return false;
    }

    public function is_dataset_owner(FosUser $user,Dataset $dataset)
    {
       // if($user->hasRole('ROLE_ADMIN'))return true;
        $datasets=$user->getStudies();
        return $datasets->contains($dataset);


    return false;
    }

    public function getYears($from,$to)
    {
   // use this to set an option as selected (ie you are pulling existing values out of the database)
        $already_selected_value = 1900;
        $earliest_year = 2030;
        $list="";
        $list = '<select name="dataset[timePeriodCoverageStart]">';
        foreach (range(date('Y'), $earliest_year) as $x) {
            $list = $list . '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
        }
        $list = $list . '</select>';;


    return $list;
    }
    public function site_visit_count(){
        $site=$this->em->getRepository(Site::class)->findAll();
        if(array_key_exists(0,$site)){


         $site[0]->setVisitCount($site[0]->getVisitCount()+1);
        //  dd($site[0]->getVisitCount());
         $this->em->flush();
         return $site[0]->getVisitCount();
    }

    return null;
    }

    public function get_terrms_of_reference(){
        $site=$this->em->getRepository(Site::class)->findAll();
        if(array_key_exists(0,$site)){


         return $site[0]->getTermsOfReference();
    }

    return null;
    }
}
