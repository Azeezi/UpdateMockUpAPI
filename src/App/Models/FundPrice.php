<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundPrice extends Model{
    use SoftDeletes;
    protected $table = 'FundPrices';
    protected $fillable = ['id', 'FUND_DESCRIPTION', 'VALUE_DATE', 'BID_PRICE', 'OFFER_PRICE'];

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
     * Get the value of VALUE_DATE
     */
    public function getVALUE_DATE()
    {
        return $this->VALUE_DATE;
    }


    /**
     * Set the value of VALUE_DATE
     *
     * @return  self
     */
    public function setVALUE_DATE($VALUE_DATE)
    {
        $this->VALUE_DATE = $VALUE_DATE;

        return $this;
    }


/**
     * Get the value of BID_PRICE
     */
    public function getBID_PRICE()
    {
        return $this->BID_PRICE;
    }


    /**
     * Set the value of BID_PRICE
     *
     * @return  self
     */
    public function setBID_PRICE($BID_PRICE)
    {
        $this->BID_PRICEE= $BID_PRICE;

        return $this;
    }


/**
     * Get the value of OFFER_PRICE
     */
    public function getOFFER_PRICE()
    {
        return $this->OFFER_PRICE;
    }


    /**
     * Set the value of OFFER_PRICE
     *
     * @return  self
     */
    public function setOFFER_PRICE($OFFER_PRICE)
    {
        $this->OFFER_PRICE= $OFFER_PRICE;

        return $this;
    }

}




