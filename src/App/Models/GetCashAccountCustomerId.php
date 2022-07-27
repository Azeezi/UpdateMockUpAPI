<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GetCashAccountCustomerId extends Model
{
    use SoftDeletes;
    protected $table = 'GetCashAccountCustomerIds';
    protected $fillable = ['CUSTOMER_NO', 'ACCOUNT_NO', 'ACCOUNT_NAME', 'AVAILABLE_BALANCE', 'CURRENT_BALANCE', 
    'ACCRUED_CREDIT_INTEREST', 'ACCRUED_DEBIT_INTEREST', 'CURRENCY_ID', 'CURRENCY_NAME', 'PRODUCT_ID',
     'PRODUCT_NAME', 'DATE_OPENED', 'LAST_DEBIT_DATE', 'LAST_CREDIT_DATE'];
     
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
     * Get the value of ACCOUNT_NO
     */
    public function getACCOUNT_NO()
    {
        return $this->ACCOUNT_NO;
    }


    /**
     * Set the value of ACCOUNT_NO
     *
     * @return  self
     */
    public function setACCOUNT_NO($ACCOUNT_NO)
    {
        $this->ACCOUNT_NO = $ACCOUNT_NO;

        return $this;
    }


    /**
     * Get the value of ACCOUNT_NAME
     */
    public function getACCOUNT_NAME()
    {
        return $this->ACCOUNT_NAME;
    }


    /**
     * Set the value of ACCOUNT_NAME
     *
     * @return  self
     */
    public function setACCOUNT_NAME($ACCOUNT_NAME)
    {
        $this->ACCOUNT_NAME = $ACCOUNT_NAME;

        return $this;
    }

  /**
     * Get the value of AVAILABLE_BALANCE
     */
    public function getAVAILABLE_BALANCE()
    {
        return $this->AVAILABLE_BALANCE;
    }


    /**
     * Set the value of AVAILABLE_BALANCE
     *
     * @return  self
     */
    public function setAVAILABLE_BALANCE($AVAILABLE_BALANCE)
    {
        $this->AVAILABLE_BALANCE= $AVAILABLE_BALANCE;

        return $this;
    }




/**
     * Get the value of CURRENT_BALANCE
     */
    public function getCURRENT_BALANCE()
    {
        return $this->CURRENT_BALANCE;
    }


    /**
     * Set the value of CURRENT_BALANCE
     *
     * @return  self
     */
    public function setCURRENT_BALANCE($CURRENT_BALANCE)
    {
        $this->CURRENT_BALANCE= $CURRENT_BALANCE;

        return $this;
    }



/**
     * Get the value of ACCRUED_CREDIT_INTEREST
     */
    public function getACCRUED_CREDIT_INTEREST()
    {
        return $this->ACCRUED_CREDIT_INTEREST;
    }


    /**
     * Set the value of ACCRUED_CREDIT_INTEREST
     *
     * @return  self
     */
    public function setACCRUED_CREDIT_INTEREST($ACCRUED_CREDIT_INTEREST)
    {
        $this->ACCRUED_CREDIT_INTEREST= $ACCRUED_CREDIT_INTEREST;

        return $this;
    }




/**
     * Get the value of ACCRUED_DEBIT_INTEREST
     */
    public function getACCRUED_DEBIT_INTEREST()
    {
        return $this->ACCRUED_DEBIT_INTEREST;
    }


    /**
     * Set the value of ACCRUED_DEBIT_INTEREST
     *
     * @return  self
     */
    public function setACCRUED_DEBIT_INTEREST($ACCRUED_DEBIT_INTEREST)
    {
        $this->ACCRUED_DEBIT_INTEREST= $ACCRUED_DEBIT_INTEREST;

        return $this;
    }



/**
     * Get the value of CURRENCY_ID
     */
    public function getCURRENCY_ID()
    {
        return $this->CURRENCY_ID;
    }


    /**
     * Set the value of CURRENCY_ID
     *
     * @return  self
     */
    public function setCURRENCY_ID($CURRENCY_ID)
    {
        $this->CURRENCY_ID= $CURRENCY_ID;

        return $this;
    }




/**
     * Get the value of CURRENCY_NAME
     */
    public function getCURRENCY_NAME()
    {
        return $this->CURRENCY_NAME;
    }


    /**
     * Set the value of CURRENCY_NAME
     *
     * @return  self
     */
    public function setCURRENCY_NAME($CURRENCY_NAME)
    {
        $this->CURRENCY_NAME= $CURRENCY_NAME;

        return $this;
    }



/**
     * Get the value of PRODUCT_ID
     */
    public function getPRODUCT_ID()
    {
        return $this->PRODUCT_ID;
    }


    /**
     * Set the value of PRODUCT_ID
     *
     * @return  self
     */
    public function setPRODUCT_ID($PRODUCT_ID)
    {
        $this->PRODUCT_ID= $PRODUCT_ID;

        return $this;
    }






/**
     * Get the value of PRODUCT_NAME
     */
    public function getPRODUCT_NAME()
    {
        return $this->PRODUCT_NAME;
    }


    /**
     * Set the value of PRODUCT_NAME
     *
     * @return  self
     */
    public function setPRODUCT_NAME($PRODUCT_NAME)
    {
        $this->PRODUCT_NAME= $PRODUCT_NAME;

        return $this;
    }




/**
     * Get the value of DATE_OPENED
     */
    public function getDATE_OPENED()
    {
        return $this->DATE_OPENED;
    }


    /**
     * Set the value of DATE_OPENED
     *
     * @return  self
     */
    public function setDATE_OPENED($DATE_OPENED)
    {
        $this->DATE_OPENED= $DATE_OPENED;

        return $this;
    }





/**
     * Get the value of LAST_DEBIT_DATE
     */
    public function getLAST_DEBIT_DATE()
    {
        return $this->LAST_DEBIT_DATE;
    }


    /**
     * Set the value of LAST_DEBIT_DATE
     *
     * @return  self
     */
    public function setLAST_DEBIT_DATE($LAST_DEBIT_DATE)
    {
        $this->LAST_DEBIT_DATE= $LAST_DEBIT_DATE;

        return $this;
    }



 
    
/**
     * Get the value of LAST_CREDIT_DATE
     */
    public function getLAST_CREDIT_DATE()
    {
        return $this->LAST_CREDIT_DATE;
    }


    /**
     * Set the value of LAST_CREDIT_DATE
     *
     * @return  self
     */
    public function setLAST_CREDIT_DATE($LAST_CREDIT_DATE)
    {
        $this->LAST_CREDIT_DATE= $LAST_CREDIT_DATE;

        return $this;
    }


}

