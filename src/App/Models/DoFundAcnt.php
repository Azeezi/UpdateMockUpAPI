<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoFundAcnt extends Model{
    use SoftDeletes;
    protected $table = 'DoFundAcnts';
    protected $fillable = ['customer', 'fund', 'account', 'accountname', 'registrar', 'externalref', 'reinvest', 'reinvestpct',];

 /**
     * Get the value of customer
     */
    public function customer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */
    public function setcustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }


/**
     * Get the value of fund'
     */
    public function fund()
    {
        return $this->fund;
    }


    /**
     * Set the value of fund
     *
     * @return  self
     */
    public function setfund($fund)
    {
        $this->fund = $fund;

        return $this;
    }



    /**
     * Get the value of account
     */
    public function getaccount()
    {
        return $this->account;
    }


    /**
     * Set the value of account
     *
     * @return  self
     */
    public function setaccount($account)
    {
        $this->account = $account;

        return $this;
    }


/**
     * Get the value of accountname
     */
    public function getaccountname()
    {
        return $this->accountname;
    }


    /**
     * Set the value of accountname
     *
     * @return  self
     */
    public function setaccountname($accountname)
    {
        $this->accountname= $accountname;

        return $this;
    }


/**
     * Get the value of registrar
     */
    public function getregistrar()
    {
        return $this->registrar;
    }


    /**
     * Set the value of registrar
     *
     * @return  self
     */
    public function setregistrar($registrar)
    {
        $this->registrar= $registrar;

        return $this;
    }




/**
     * Get the value of externalref
     */
    public function getexternalref()
    {
        return $this->registrar;
    }


    /**
     * Set the value of externalref
     *
     * @return  self
     */
    public function setexternalref($externalref)
    {
        $this->rexternalref= $externalref;

        return $this;
    }




    /**
     * Get the value ofreinvest
     */
    public function getreinvest()
    {
        return $this->reinvest;
    }


    /**
     * Set the value of reinvest
     *
     * @return  self
     */
    public function setreinvest($reinvest)
    {
        $this->reinvest= $reinvest;

        return $this;
    }


/**
     * Get the value ofreinvestpct
     */
    public function getreinvestpct()
    {
        return $this->reinvestpct;
    }


    /**
     * Set the value of reinvestpct
     *
     * @return  self
     */
    public function setreinvestpct($reinvestpct)
    {
        $this->reinvestpct= $reinvestpct;

        return $this;
    }





}




