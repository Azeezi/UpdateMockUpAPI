<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model{
    use SoftDeletes;
    protected $table = 'positions';
    protected $fillable = ['id', 'POSN_CD', 'POSN_DSC', ];

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
     * Get the value of POSN_CD
     */
    public function getPOSN_CD()
    {
        return $this->POSN_CD;
    }


    /**
     * Set the value of POSN_CD
     *
     * @return  self
     */
    public function setPOSN_CD($POSN_CD)
    {
        $this->POSN_CD = $POSN_CD;


        return $this;
    }



    /**
     * Get the value of POSN_DSC
     */
    public function getPOSN_DSC()
    {
        return $this->POSN_DSC;
    }


    /**
     * Set the value of POSN_DSC
     *
     * @return  self
     */
    public function setPOSN_DSC($POSN_DSC)
    {
        $this->POSN_DSC = $POSN_DSC;

        return $this;
    }




   

}