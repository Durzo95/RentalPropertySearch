<?php

use Base\Amenity as BaseAmenity;

/**
 * Skeleton subclass for representing a row from the 'amenity' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Amenity extends BaseAmenity
{
    public function getId(){
        return $this->getAmenitynumberid();
    }
    
    public function getAmenity(){
        $amenity = AmenitytypeQuery::create()->findPK($this->getAmenitytypeid());
        $name = $amenity->getName();
        $details = $this->getDetails();
        // sets the outputed format to {applianceName} | {details}
        if ($details){
            return $name . ' | ' . $details;
        }
        // if there is no details, then the outputed format is just {applianceName}
        return $name;
    }

    public function setTypeIDByName($name){
        $amenityType = AmenitytypeQuery::create()->findOneByName($name);
        $this->setAmenitytypeid($amenityType->getId());
    }
}
