<?php

namespace App\Services;
use App\Repository\DatasetRepository;
use  App\Repository\WorkUnitRepository;
use App\Entity\WorkUnit;
use  App\Repository\DatasetAttachmentRepository;
 class MobileService{

    public function getAllDirectorates()
    {
        # code...
        $data=array();
        for ($i=0; $i < 3; $i++) { 
            # code...
            $row['id']=$i;
            $row['name']="Bacteria";
            $row['parent']=$i-1;
            $row['description']="description";
            array_push($data,$row);

        }
        return $data;
    }
    public function login($username,$password,FosUserRepository $fosuserrepo)
    {
        # code...
    }
    
    public function serachDataset($key, DatasetRepository $dsrepo,DatasetAttachmentRepository $attachmentRepo  ){
       
        $alldata=$dsrepo->namedSearch($key)->getQuery()->getResult();
        // die;
        

        
        
       
        // id,name,label,format,coverageLocation,coverageAge,
        $reponse=array();
        foreach ($alldata as $key => $data) {
            # code...
            // echo $data;
            // die;
            // dd($dsrepo->findBy(['id'=>$data->getId()]));

        //    dd($data->getDatasetAttachments());
        $attachemnts=array();
        $arrayAttachments=$attachmentRepo->findBy(['dataset'=>$data->getId()]);
        foreach ($arrayAttachments as $key => $attachement) {
            
            $current=[
                'id'=>$attachement->getId(),
                'label'=>$attachement->getLabel(),
                'attachment'=>$attachement->getAttachment()
            ];
            // dd($current);

            array_push($attachemnts,$current);

          

            # code...
        }
          
            $row=[
                'id'=>$data->getId(),
                'name'=>$data->getName(),
                'label'=>$data->getLabel(),
                'format'=>$data->getFormat()."",
                'coverageLocation'=>$data->getCoverageLocation(),
                'coverageSex'=>$data->getCoverageSex(),
                'coverageAge'=>$data->getCoverageAge(),
                'size'=>$data->getSize(),
                'summary'=>$data->getSummary(),
                'codeBook'=>$data->getCodeBook(),
                'codeBookFileName'=>$data->getCodeBookFileName(),
                'disagregationLevel'=>$data->getDisagregationLevel(),
                'keywords'=>$data->getKeywords(),
                'recommended'=>$data->getRecommended(),
                'timePeriodCoverageEnd'=>$data->getTimePeriodCoverageEnd(),
                'treatment'=>$data->getTreatment(),
                'timePeriodCoverageStart'=>$data->getTimePeriodCoverageStart(),
                'publicationYear'=>$data->getPublicationYear(),
                'sugestedCitation'=>$data->getSugestedCitation(),
                'otherIdType'=>$data->getOtherIdType(),
                'description'=>$data->getDescription(),
                'recievedDate'=>$data->getRecievedDate(),
                'catalogCompletedDate'=>$data->getCatalogCompletedDate(),
                'numberOfUnits'=>$data->getNumberOfUnits(),
                'confidentiality'=>$data->getConfidentiality()."",
                'dataType'=>$data->getDataType()."",
                'studyDesign'=>$data->getStudyDesign()."",
                'coverageType'=>$data->getCoverageType()."",
                'datasetCategory'=>$data->getDatasetCategory()."",
                'demographicGroup'=>$data->getDemographicGroup()."",
                'geospatial'=>$data->getGeospatial()."",
                'microdataTabulationStatus'=>$data->getMicrodataTabulationStatus()."",
                'publicationStatus'=>$data->getPublicationStatus()."",
                'publisher'=>$data->getPublisher(),
                'FileUrl'=>$data->getFileUrl(),
                'Status'=>$data->getStatus(),
                'type'=>"dataset",
                'title'=>$data->getTitle(),
                'availablity'=>$data->getAvaliablity(),
                'downloadCount'=>$data->getDownloadCount(),
                'workunit'=>$data->getWorkUnit()."",
                'attachemnts'=>$attachemnts,
                
               ];
             array_push($reponse,$row);
    
       
        }
        // if($data->getAvaliablity()=="Private"){
            // dd( $attachement=$data->getAttachements());

        // }
        // dd($reponse);
        return $reponse;
    
    
    }
    public function getDirectoryDataset($directory,DatasetRepository $dsrepo)
    {
        # code...
        $alldata=$dsrepo->findBy(['']);
   
        // id,name,label,format,coverageLocation,coverageAge,coverageSex
        $reponse=array();
        foreach ($alldata as $key => $data) {
            # code...
           
            $row=[
                'size'=>$data->getSize(),
                'codeBook'=>$data->getCodeBook(),
                'codeBookFileName'=>$data->getCodeBookFileName(),
                'disagregationLevel'=>$data->getDisagregationLevel(),
                'keywords'=>$data->getKeywords(),
                'recommended'=>$data->getRecommended(),
                'timePeriodCoverageEnd'=>$data->getTimePeriodCoverageEnd(),
                'treatment'=>$data->getTreatment(),
                'timePeriodCoverageStart'=>$data->getTimePeriodCoverageStart(),
                'publicationYear'=>$data->getPublicationYear(),
                'sugestedCitation'=>$data->getSugestedCitation(),
                'otherIdType'=>$data->getOtherIdType(),
                'description'=>$data->getDescription(),
                'recievedDate'=>$data->getRecievedDate(),
                'catalogCompletedDate'=>$data->getCatalogCompletedDate(),
                'numberOfUnits'=>$data->getNumberOfUnits(),
                'confidentiality'=>$data->getConfidentiality(),
                'dataType'=>$data->getDataType(),
                'studyDesign'=>$data->getStudyDesign(),
                'coverageType'=>$data->getCoverageType(),
                'datasetCategory'=>$data->getDatasetCategory(),
                'demographicGroup'=>$data->getDemographicGroup(),
                'geospatial'=>$data->getGeospatial(),
                'microdataTabulationStatus'=>$data->getMicrodataTabulationStatus(),
                'publicationStatus'=>$data->getPublicationStatus(),
                'publisher'=>$data->getPublisher(),
                'FileUrl'=>$data->getFileUrl(),
                'Status'=>$data->getStatus(),
                'type'=>"dataset",
                'title'=>$data->getTitle(),
                'downloadCount'=>$data->getDownloadCount(),
                'workunit'=>$data->getWorkUnit()."",
               ];
               array_push($reponse,$row);
    
       
        }
        return $reponse;
    }

    public function getDirectorates(WorkUnitRepository $workunitrepo)
    {
        # code...
        $allwork_units=$workunitrepo->findAll();
        // dd($allwork_units);
        $allworkUnits=array();
        foreach ($allwork_units as $key => $workunit) {
            echo $key;
            die;
            $row=[
                'id'=>$workunit->getId(),
                'name'=>$workunit->getName(),
                'parent'=>$workunit->getParent(),
                'description'=>$workunit->getDescription(),

            ];
           array_push($allworkUnits,$row);
        }
        return $allworkUnits;
    }
    public function getNews($last_seen)
    {
        # code...
        //fetch news starting from 
        $announcement=array();
        for ($i=0; $i < 5; $i++) { 
            # code...
            $current=array(
                'id'=>$i,
                'title'=>"title",
                
                'body'=>"body",
                'post_at'=>date(time()),
                'image_loc'=>"image_location",
                
            )
            ;
            array_push($announcement,$current);
        }
        return $announcement;
       
    }
    public function getHistory($userid,$last_seen)
    {
        # code...
        //fetch news starting from 
        $history=array();
        for ($i=0; $i < 5; $i++) { 
            # code...
            $current=array(
                'id'=>$i,
                'request_type'=>"title",
                'item'=>"item",
                'item_type'=>"itemType",
                'requested_date'=>date(time()),
                'response_date'=>date(time()),
                'item_type'=>"itemType",
                'status'=>$i,
                'remark'=>"remark",
                
            )
            ;
            array_push($history,$current);
        }
        return $history;
       
    }
}
?>