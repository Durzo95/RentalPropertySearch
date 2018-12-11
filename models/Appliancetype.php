<?php

use Base\Appliancetype as BaseAppliancetype;

/**
 * Skeleton subclass for representing a row from the 'appliancetype' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Appliancetype extends BaseAppliancetype
{
    /**
     * Function to retrieve a singular rows from Appliance table that has a specific property ID and applianceTypeId
     */
    
    public function getApplianceRow($propertyID){
        $applianceType = $this->getId();
        $appliance = ApplianceQuery::create()->filterByPropertyid($propertyID)->findOneByAppliancetypeid($applianceType);
        return $appliance;
    }
    

}
