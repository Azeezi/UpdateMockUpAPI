<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoCashDeposit extends Model
{
    use SoftDeletes;
    protected $table = 'DoCashDeposits';
    protected $fillable = ['customer', 'account', 'date', 'amount', 'description', 
    'reference', 'contra'];

    /**
     * Get the value of customer
     */
    public function getcustomer()
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
        $this->account= $account;

        return $this;
    }


    /**
     * Get the value of date
     */
    public function getdate()
    {
        return $this->date;
    }


    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setdate($date)
    {
        $this->date = $date;

        return $this;
    }

  /**
     * Get the value of amount
     */
    public function amount()
    {
        return $this->amount;
    }


    /**
     * Set the value of amount
     *
     * @return  self
     */
    public function setamount($amount)
    {
        $this->amount= $amount;

        return $this;
    }




/**
     * Get the value of description
     */
    public function getdescription()
    {
        return $this->description;
    }


    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setdescription($description)
    {
        $this->description= $description;

        return $this;
    }



/**
     * Get the value of reference
     */
    public function getreference()
    {
        return $this->reference;
    }


    /**
     * Set the value of reference
     *
     * @return  self
     */
    public function setreference($reference)
    {
        $this->reference= $reference;

        return $this;
    }




/**
     * Get the value of contra
     */
    public function getcontra()
    {
        return $this->contra;
    }


    /**
     * Set the value of contra
     *
     * @return  self
     */
    public function setcontra($contra)
    {
        $this->contra= $contra;

        return $this;
    }



}

