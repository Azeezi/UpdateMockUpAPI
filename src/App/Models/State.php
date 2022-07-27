<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model{
    use SoftDeletes;
    protected $table = 'states';
    protected $fillable = ['id', 'COUNTRY_CD', 'COUNTRY_DSC', 'STATE_CD', 'STATE_DSC',];

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
     * Get the value of COUNTRY_CD
     */
    public function getCOUNTRY_CD()
    {
        return $this->COUNTRY_CD;
    }


    /**
     * Set the value of COUNTRY_CD
     *
     * @return  self
     */
    public function setCOUNTRY_CD($COUNTRY_CD)
    {
        $this->COUNTRY_CD = $COUNTRY_CD;


        return $this;
    }



    /**
     * Get the value of COUNTRY_DSC
     */
    public function getCOUNTRY_DSC()
    {
        return $this->COUNTRY_DSC;
    }


    /**
     * Set the value of COUNTRY_DSC
     *
     * @return  self
     */
    public function setCOUNTRY_DSC($COUNTRY_DSC)
    {
        $this->COUNTRY_DSC = $COUNTRY_DSC;

        return $this;
    }




    
/**
     * Get the value of STATE _CD
     */
    public function getSTATE_CD()
    {
        return $this->STATE_CD;
    }


    /**
     * Set the value of COUNTRY_CD
     *
     * @return  self
     */
    public function setSTATE($STATE)
    {
        $this->STATE = $STATE;


        return $this;
    }




     /**
     * Get the value of STATE_DSC
     */
    public function getSTATE_DSC()
    {
        return $this->STATE_DSC;
    }


    /**
     * Set the value of STATE_DSC
     *
     * @return  self
     */
    public function setSTATE_DSC($STATE_DSC)
    {
        $this->STATE_DSC = $STATE_DSC;

        return $this;
    }


   

}