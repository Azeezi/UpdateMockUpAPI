<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GetFund extends Model{
    use SoftDeletes;
    protected $table = 'GetFunds';
    protected $fillable = ['id', 'FUND_DESCRIPTION', 'FUND_CURRENCY', 'FUND_TYPE', 'DATE_OPENED'];

 /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


/**
     * Get the value of FUND_DESCRIPTION'
     */
    public function getFUND_DESCRIPTION()
    {
        return $this->FUND_DESCRIPTION;
    }


    /**
     * Set the value of FUND_DESCRIPTION
     *
     * @return  self
     */
    public function setFUND_DESCRIPTION($FUND_DESCRIPTION)
    {
        $this->FUND_DESCRIPTION = $FUND_DESCRIPTION;

        return $this;
    }



    /**
     * Get the value of FUND_CURRENCY
     */
    public function getFUND_CURRENCY()
    {
        return $this->FUND_CURRENCY;
    }


    /**
     * Set the value of FUND_CURRENCY
     *
     * @return  self
     */
    public function setFUND_CURRENCY($FUND_CURRENCY)
    {
        $this->FUND_CURRENCY = $FUND_CURRENCY;

        return $this;
    }


/**
     * Get the value of FUND_TYPE
     */
    public function getFUND_TYPE()
    {
        return $this->FUND_TYPE;
    }


    /**
     * Set the value of FUND_TYPE
     *
     * @return  self
     */
    public function setFUND_TYPE($FUND_TYPE)
    {
        $this->FUND_TYPE= $FUND_TYPE;

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

}




