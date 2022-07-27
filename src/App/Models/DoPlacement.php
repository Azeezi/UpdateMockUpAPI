<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoPlacement extends Model
{
    use SoftDeletes;
    protected $table = 'DoPlacements';
    protected $fillable = ['product', 'customer', 'account', 'date', 'tenor', 
    'Amount', 'rate', 'taxable',  'rollover',  'reference' ];

    /**
     * Get the value of product
     */
    public function getproduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */
    public function setproduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of customer
     */
    public function getcustomert()
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
        $this->customer= $customer;

        return $this;
    }


    /**
     * Get the value of account
     */
    public function getaccount()
    {
        return $this->daccount;
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
     * Get the value of amount
     */
    public function date()
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
        $this->date= $date;

        return $this;
    }




/**
     * Get the value of tenor
     */
    public function gettenor()
    {
        return $this->tenor;
    }


    /**
     * Set the value of tenor
     *
     * @return  self
     */
    public function settenor($tenor)
    {
        $this->tenor= $tenor;

        return $this;
    }



/**
     * Get the value of amount
     */
    public function getamount()
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
     * Get the value of rate
     */
    public function getrate()
    {
        return $this->rate;
    }


    /**
     * Set the value of rate
     *
     * @return  self
     */
    public function setrate($rate)
    {
        $this->rate= $rate;

        return $this;
    }




/**
     * Get the value of taxable
     */
    public function gettaxable()
    {
        return $this->taxable;
    }


    /**
     * Set the value of taxable
     *
     * @return  self
     */
    public function settaxable($taxable)
    {
        $this->taxable= $taxable;

        return $this;
    }




/**
     * Get the value of rollover
     */
    public function getrollover()
    {
        return $this->rollover;
    }


    /**
     * Set the value of rollover
     *
     * @return  self
     */
    public function setrollover($rollover)
    {
        $this->rollover= $rollover;

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

    

}

