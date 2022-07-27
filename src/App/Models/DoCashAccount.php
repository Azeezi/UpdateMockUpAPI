<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DoCashAccount extends Model
{
    use SoftDeletes;
    protected $table = 'DoCashAccounts';
    protected $fillable = ['customer', 'plan', 'description', 'mandate', 'officer', 
    'reference'];

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
     * Get the value of plan
     */
    public function getplan()
    {
        return $this->plan;
    }


    /**
     * Set the value of plan
     *
     * @return  self
     */
    public function setplan($plan)
    {
        $this->plan = $plan;

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
        $this->description = $description;

        return $this;
    }

  /**
     * Get the value of mandate
     */
    public function mandate()
    {
        return $this->mandate;
    }


    /**
     * Set the value of mandate
     *
     * @return  self
     */
    public function setmandate($mandate)
    {
        $this->mandate= $mandate;

        return $this;
    }




/**
     * Get the value of officer
     */
    public function getofficer()
    {
        return $this->officer;
    }


    /**
     * Set the value of officer
     *
     * @return  self
     */
    public function setofficer($officer)
    {
        $this->officer= $officer;

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

