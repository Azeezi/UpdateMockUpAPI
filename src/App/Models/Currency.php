<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model{
    use SoftDeletes;
    protected $table = 'currencies';
    protected $fillable = ['id', 'CURRENCY_CD', 'CURRENCY_DSC', 'LOCAL_CURRENCY_YN'];

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
     * Get the value of CURRENCY_CD
     */
    public function getCURRENCY_CD()
    {
        return $this->CURRENCY_CD;
    }


    /**
     * Set the value of CURRENCY_CD
     *
     * @return  self
     */
    public function setCURRENCY_CD($CURRENCY_CD)
    {
        $this->CCURRENCY_CD = $CURRENCY_CD;

        return $this;
    }



    /**
     * Get the value of CURRENCY_DSC
     */
    public function getCURRENCY_DSC()
    {
        return $this->CURRENCY_DSC;
    }


    /**
     * Set the value of CURRENCY_DSC
     *
     * @return  self
     */
    public function setCURRENCY_DSC($CURRENCY_DSC)
    {
        $this->CURRENCY_DSC = $CURRENCY_DSC;

        return $this;
    }


/**
     * Get the value of LOCAL_CURRENCY_YN
     */
    public function getLOCAL_CURRENCY_YN()
    {
        return $this->LOCAL_CURRENCY_YN;
    }


    /**
     * Set the value of LOCAL_CURRENCY_YN
     *
     * @return  self
     */
    public function setLOCAL_CURRENCY_YN($LOCAL_CURRENCY_YN)
    {
        $this->LOCAL_CURRENCY_YN= $LOCAL_CURRENCY_YN;

        return $this;
    }
}




