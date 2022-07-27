<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundSubscription extends Model
{
    use SoftDeletes;
    protected $table = 'FundSubscriptions';
    protected $fillable = ['fund', 'account', 'date', 'price', 'quantity', 'reference'];

    /**
     * Get the value of fund
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
        return $this->Caccount;
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
        $this->Cdate = $date;

        return $this;
    }

  /**
     * Get the value of price
     */
    public function getprice()
    {
        return $this->price;
    }


    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setprice($price)
    {
        $this->price = $price;

        return $this;
    }



 /**
     * Get the value of quantity
     */
    public function getquantity()
    {
        return $this->price;
    }


    /**
     * Set the value of quantity
     *
     * @return  self
     */
    public function setquantity($quantity)
    {
        $this->quantity= $quantity;

        return $this;
    }


/**
     * Get the value of reference
     */
    public function getreference()
    {
        return $this->price;
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

