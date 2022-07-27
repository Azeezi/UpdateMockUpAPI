<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nationality extends Model{
    use SoftDeletes;
    protected $table = 'nationalities';
    protected $fillable = ['id', 'NATIONALITY_CD', 'NATIONALITY_DSC', 'HOME_YN' ];

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
     * Get the value of NATIONALITY_CD
     */
    public function getNATIONALITY_CD()
    {
        return $this->NATIONALITY_CD;
    }


    /**
     * Set the value of NATIONALITY_CD
     *
     * @return  self
     */
    public function setNATIONALITY_CD($NATIONALITY_CD)
    {
        $this->NATIONALITY_CD = $NATIONALITY_CD;


        return $this;
    }



    /**
     * Get the value of NATIONALITY_DSC
     */
    public function getNATIONALITY_DSC()
    {
        return $this->NATIONALITY_DSC;
    }


    /**
     * Set the value of NATIONALITY_DSC
     *
     * @return  self
     */
    public function setNATIONALITY_DSC($NATIONALITY_DSC)
    {
        $this->NATIONALITY_DSC = $NATIONALITY_DSC;

        return $this;
    }




    /**
     * Get the value of HOME_YN
     */
    public function getHOME_YN()
    {
        return $this->HOME_YN;
    }


    /**
     * Set the value of HOME_YN
     *
     * @return  self
     */
    public function setHOME_YN($HOME_YN)
    {
        $this->HOME_YN = $HOME_YN;

        return $this;
    }

}