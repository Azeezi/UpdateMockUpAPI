<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GetCustomerId extends Model
{
    use SoftDeletes;
    protected $table = 'GetCustomerIds';
    protected $fillable = ['CUSTOMER_ID', 'CREATED_ON', 'CUSTOMER_TYPE', 'IS_MINOR', 'IS_STAFF', 
    'KYC_COMPLETED', 'IS_BLACKLISTED', 'BLACKLISTED_ON', 'CUSTOMER_NAME', 'FIRST_NAME',
     'LAST_NAME', 'BIRTH_DATE', 'CURRENT_AGE', 'NATIONALITY', 'CUSTOMER_ADDRESS',
       'EMAIL_ADDRESS', 'PHONE_NUMBERS'];

    /**
     * Get the value of CUSTOMER_ID
     */
    public function getCUSTOMER_ID()
    {
        return $this->CUSTOMER_ID;
    }

    /**
     * Set the value of CUSTOMER_ID
     *
     * @return  self
     */
    public function setCUSTOMER_ID($CUSTOMER_ID)
    {
        $this->CUSTOMER_ID = $CUSTOMER_ID;

        return $this;
    }

    /**
     * Get the value of CREATED_ON
     */
    public function getCREATED_ON()
    {
        return $this->CREATED_ON;
    }


    /**
     * Set the value of CREATED_ON
     *
     * @return  self
     */
    public function setCREATED_ON($CREATED_ON)
    {
        $this->CREATED_ON = $CREATED_ON;

        return $this;
    }


    /**
     * Get the value of CUSTOMER_TYPE
     */
    public function getCUSTOMER_TYPE()
    {
        return $this->CUSTOMER_TYPE;
    }


    /**
     * Set the value of CUSTOMER_TYPE
     *
     * @return  self
     */
    public function setCUSTOMER_TYPE($CUSTOMER_TYPE)
    {
        $this->CUSTOMER_TYPE = $CUSTOMER_TYPE;

        return $this;
    }

  /**
     * Get the value of IS_MINOR
     */
    public function getIS_MINOR()
    {
        return $this->IS_MINOR;
    }


    /**
     * Set the value of IS_MINOR
     *
     * @return  self
     */
    public function setIS_MINOR($IS_MINOR)
    {
        $this->IS_MINOR= $IS_MINOR;

        return $this;
    }




/**
     * Get the value of IS_STAFF
     */
    public function getIS_STAFF()
    {
        return $this->IS_STAFF;
    }


    /**
     * Set the value of IS_STAFF
     *
     * @return  self
     */
    public function setIS_STAFF($IS_STAFF)
    {
        $this->IS_STAFF= $IS_STAFF;

        return $this;
    }



/**
     * Get the value of KYC_COMPLETED
     */
    public function getKYC_COMPLETED()
    {
        return $this->KYC_COMPLETED;
    }


    /**
     * Set the value of KYC_COMPLETED
     *
     * @return  self
     */
    public function setKYC_COMPLETED($KYC_COMPLETED)
    {
        $this->KYC_COMPLETED= $KYC_COMPLETED;

        return $this;
    }




/**
     * Get the value of IS_BLACKLISTED
     */
    public function getIS_BLACKLISTED()
    {
        return $this->IS_BLACKLISTED;
    }


    /**
     * Set the value of IS_BLACKLISTED
     *
     * @return  self
     */
    public function setIS_BLACKLISTED($IS_BLACKLISTED)
    {
        $this->IS_BLACKLISTED= $IS_BLACKLISTED;

        return $this;
    }



/**
     * Get the value of BLACKLISTED_ON
     */
    public function getBLACKLISTED_ON()
    {
        return $this->BLACKLISTED_ON;
    }


    /**
     * Set the value of BLACKLISTED_ON
     *
     * @return  self
     */
    public function setBLACKLISTED_ON($BLACKLISTED_ON)
    {
        $this->BLACKLISTED_ON= $BLACKLISTED_ON;

        return $this;
    }




/**
     * Get the value of CUSTOMER_NAME
     */
    public function getCUSTOMER_NAME()
    {
        return $this->CUSTOMER_NAME;
    }


    /**
     * Set the value of CUSTOMER_NAME
     *
     * @return  self
     */
    public function setCUSTOMER_NAME($CUSTOMER_NAME)
    {
        $this->CUSTOMER_NAME= $CUSTOMER_NAME;

        return $this;
    }



/**
     * Get the value of FIRST_NAME
     */
    public function getFIRST_NAME()
    {
        return $this->FIRST_NAME;
    }


    /**
     * Set the value of FIRST_NAME
     *
     * @return  self
     */
    public function setFIRST_NAME($FIRST_NAME)
    {
        $this->FIRST_NAME= $FIRST_NAME;

        return $this;
    }






/**
     * Get the value of LAST_NAME
     */
    public function getLAST_NAME()
    {
        return $this->LAST_NAME;
    }


    /**
     * Set the value of LAST_NAME
     *
     * @return  self
     */
    public function setLAST_NAME($LAST_NAME)
    {
        $this->LAST_NAME= $LAST_NAME;

        return $this;
    }




/**
     * Get the value of BIRTH_DATE
     */
    public function getBIRTH_DATE()
    {
        return $this->BIRTH_DATE;
    }


    /**
     * Set the value of BIRTH_DATE
     *
     * @return  self
     */
    public function setBIRTH_DATE($BIRTH_DATE)
    {
        $this->BIRTH_DATE= $BIRTH_DATE;

        return $this;
    }





/**
     * Get the value of CURRENT_AGE
     */
    public function getCURRENT_AGE()
    {
        return $this->CURRENT_AGE;
    }


    /**
     * Set the value of CURRENT_AGE
     *
     * @return  self
     */
    public function setCURRENT_AGE($CURRENT_AGE)
    {
        $this->CURRENT_AGE= $CURRENT_AGE;

        return $this;
    }



  /**
     * Get the value of NATIONALITY
     */
    public function getNATIONALITY()
    {
        return $this->NATIONALITY;
    }


    /**
     * Set the value of NATIONALITY
     *
     * @return  self
     */
    public function setNATIONALITY($NATIONALITY)
    {
        $this->NATIONALITY= $NATIONALITY;

        return $this;
    } 
    


  /**
     * Get the value of CUSTOMER_ADDRESS
     */
    public function getCUSTOMER_ADDRESS()
    {
        return $this->CUSTOMER_ADDRESS;
    }


    /**
     * Set the value of CUSTOMER_ADDRESS
     *
     * @return  self
     */
    public function setCUSTOMER_ADDRESS($CUSTOMER_ADDRESS)
    {
        $this->CUSTOMER_ADDRESS= $CUSTOMER_ADDRESS;

        return $this;
    }  



    /**
     * Get the value of EMAIL_ADDRESS
     */
    public function getEMAIL_ADDRESS()
    {
        return $this->EMAIL_ADDRESS;
    }


    /**
     * Set the value of EMAIL_ADDRESS
     *
     * @return  self
     */
    public function setEMAIL_ADDRESS($EMAIL_ADDRESS)
    {
        $this->EMAIL_ADDRESS= $EMAIL_ADDRESS;

        return $this;
    }  



/**
     * Get the value of PHONE_NUMBERS
     */
    public function getPHONE_NUMBERS()
    {
        return $this->PHONE_NUMBERS;
    }


    /**
     * Set the value of PHONE_NUMBERS
     *
     * @return  self
     */
    public function setPHONE_NUMBERS($PHONE_NUMBERS)
    {
        $this->PHONE_NUMBERS= $PHONE_NUMBERS;

        return $this;
    }




}

