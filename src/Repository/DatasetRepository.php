<?php

namespace App\Repository;

use App\Entity\Dataset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dataset|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dataset|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dataset[]    findAll()
 * @method Dataset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatasetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dataset::class);
    }


    public function findDataset($type=null,$name){

        $qb= $this->createQueryBuilder('d');
        if($type)
        $qb->andWhere('d.confidentiality = :type')
        ->setParameter('type',$type);

      if($name){  $qb
        ->orwhere("d.name LIKE '%". $name."%' ")
        ->orWhere("d.title LIKE '%". $name."%' ")
        ->orWhere("d.location LIKE '%". $name."%' ");

    }



        return $qb
            ->orderBy('d.id', 'DESC');
    }




    public function findYourDataset($user,$search){


       $qb= $this->createQueryBuilder('d');
       if($search){
            $qb
        ->where("d.name LIKE '%". $search."%' ")
        ->orWhere("d.title LIKE '%". $search."%' ")
        ->orWhere("d.location LIKE '%". $search."%' ");

    }
    // $qb
    // // -> select('d')
    // ->leftJoin('App:FosUser', 'a', 'WITH', 'd.id = a.id')
    // // ->andwhere("a.ItemType ='Dataset'")
    // // ->andwhere('a.fosUser = :user ')
    // ->setParameter('user', $user);
    // //   dd($qb);
    return $qb->orderBy('d.id', 'DESC');


    }


    public function findYourDatasetResult($user){

        $qb= $this->createQueryBuilder('d');

         $qb->select('d')
         ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.id = a.ItemID')
         ->andwhere("a.ItemType ='Dataset'")
         ->andwhere('a.Sender = :user ')
         ->setParameter('user', $user)

         ;
        // ->leftJoin('App:ItemType', 'i', 'WITH', 'i.id = a.ItemType')

     return $qb->orderBy('d.id', 'DESC')->getQuery()
     ->getResult();

     }
    public function findYourDatasetResult2($user){

        $qb= $this->createQueryBuilder('d');

         $qb->select('d')
         ->leftJoin('App:ActivityLog', 'a', 'WITH', 'd.id = a.ItemID')
         ->andwhere("a.ItemType ='Dataset'")
         ->andwhere('a.Sender = :user ')
         ->setParameter('user', $user)
         ->getQuery()
         ->getResult();
        // ->leftJoin('App:ItemType', 'i', 'WITH', 'i.id = a.ItemType')



     }
    // /**
    //  * @return Dataset[] Returns an array of Dataset objects
    //  */
   //
    public function filterDataset($coveragelocation=null,$coverageage=null,$coveragesex=null,$keyword=null,$location=null,$publicationyear=null,$confidential=1,$datatype=null){
       $qb= $this->createQueryBuilder('d')
           ->orderBy('d.id', 'ASC');

                if($coveragelocation){
                    $qb=$qb->andWhere('d.coveragelocation = :coveragelocation')
                    ->setParameter('coveragelocation', $coveragelocation);
                }
                if($coverageage){
                    $qb=$qb->andWhere('d.coverageAge = :coverageage')
                    ->setParameter('coverageage', $coverageage);
                }
                if($coveragesex){
                    $qb=$qb->andWhere('d.coverageSex = :coveragesex')
                    ->setParameter('coveragesex', $coveragesex);
                }
                if($keyword){
                    $qb=$qb->andWhere('d.keyword = :keyword')
                    ->setParameter('keyword', $keyword);
                }
                if($location){
                    $qb=$qb->andWhere('d.location = :location')
                    ->setParameter('location', $location);
                }

                if($datatype){

                    $qb=$qb->andWhere('d.dataType = :datatype')
                    ->setParameter('datatype', $datatype);
                }
                if($publicationyear){

                    $qb=$qb->andWhere("d.publicationYear LIKE '". $publicationyear."%' ");

                }

                $qb=$qb->andWhere("d.confidentiality= :confidentiality ")
                ->setParameter('confidentiality', array('id'=>$confidential));
                //->setMaxResults(10)

                return $qb;
    }


    public function keywordFilter($keys)
    {

        $qb= $this->createQueryBuilder('d')


         ->andWhere("d.keywords LIKE '". $keys."%' ");


        return $qb->getQuery()
        ->getResult();


    }


    public function advancedSearch($keywords=null,$datatype=null,$studydesign=null,$coveragesex=null,$yearstart=null, $yearend=null,$is_restricted=null,$is_cleaned=null)
    {

        // if($yearend==null)
        // $yearend=+date('Y');
        // if($yearstart==null)
        // $yearstart=+date('Y');

     //   dd($yearstart, $yearend);
        $qb= $this->createQueryBuilder('d');



            if($keywords)
            $qb=$qb->andWhere("d.keywords LIKE '%".$keywords."%' ");
            if($coveragesex)
            $qb=$qb->andWhere("d.coverageSex LIKE '". $coveragesex."%' ");

            if($datatype)
            $qb =$qb->andWhere("d.dataType = ". $datatype." ");
            if($studydesign)
            $qb =$qb->andWhere("d.studyDesign = ". $studydesign." ");

            if($is_restricted)
            $qb =$qb->andWhere("d.isRestricted = ". $is_restricted." ");

            if($is_cleaned)
            $qb =$qb->andWhere("d.cleaned = ". $is_cleaned." ");

            if( $yearstart){
            $qb =$qb->andWhere("d.publicationYear  > :startyear")
            ->setParameter('startyear', $yearstart.'-01-01');

            }
            if( $yearend){
                $qb =$qb->andWhere("d.publicationYear  < :endyear")
                ->setParameter('endyear', $yearend.'-12-30');

                }

                // $qb
                // ->andwhere("d.avaliablity = 'Public' ")
                // ->andwhere("d.approved = 1");



       //  $data= $qb->getQuery()->getResult();
   //dd($data);
   return $qb;

    }


    public function namedSearch($name=null,$sortby='name',$type='ASC')
    {


        $qb= $this->createQueryBuilder('d');



         $qb
            ->andwhere("d.name LIKE '%". $name."%' ")
            ->orWhere("d.title LIKE '%". $name."%' ")
            ->orWhere("d.keywords LIKE '%". $name."%' ")
            ->orWhere("d.remark LIKE '%". $name."%' ")
            ->orWhere("d.description LIKE '%". $name."%' ")
            ->orWhere("d.abstract LIKE '%". $name."%' ")
            ->orWhere("d.location LIKE '%". $name."%' ")
            // ->andwhere("d.avaliablity = 'Public' ")
            //  ->andwhere("d.approved = 1")
            ->orderBy('d.'.$sortby, $type);



    //    dd($qb->getQuery());
        $data= $qb->getQuery()->getResult();

   return $qb;

    }

    public function findBySomething($keywords,$dataType){

        $qb= $this->createQueryBuilder('d')
        ->andwhere("d.avaliablity = 'Public' ");

        if($keywords)
        $qb->where("d.keywords LIKE '%". $keywords."%' ");


        if($dataType)
        $qb->where("d.dataType = ". $dataType." ");

        return $qb;
    }


    public function locationSearch($name=null)
    {

        $qb= $this->createQueryBuilder('d');


            $qb
            ->where("d.location LIKE '". $name."%' ");




        $data= $qb->getQuery()->getResult();

   return $data;

    }


    public function studydesignSearch($name=null)
    {

        $qb= $this->createQueryBuilder('d');


            $qb
            ->where("d.studyDesign = ". $name." ");




        $data= $qb->getQuery()->getResult();

   return $data;

    }


    public function searchByDirectorate($directorate=null)
    {

        $qb= $this->createQueryBuilder('d');


            $qb
            ->where("d.workunit = ". $directorate->getId()." ");




        return $qb;



    }



    /*
    public function findOneBySomeField($value): ?Dataset
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
