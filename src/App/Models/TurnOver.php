<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TurnOver extends Model{
    use SoftDeletes;
    protected $table = 'turnOver';
    protected $fillable = ['id', 'TURNOVER_CD', 'TURNOVER_DSC', ];

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
     * Get the value of TURNOVER_CD
     */
    public function getTURNOVER_CD()
    {
        return $this->TURNOVER_CD;
    }


    /**
     * Set the value of TURNOVER_CD
     *
     * @return  self
     */
    public function setTURNOVER($TURNOVER_CD)
    {
        $this-> TURNOVER_CD = $TURNOVER_CD ;


        return $this;
    }



    /**
     * Get the value of TURNOVER_DSC
     */
    public function getTURNOVER_DSC()
    {
        return $this->TURNOVER_DSC;
    }


    /**
     * Set the value of TURNOVER_DSC
     *
     * @return  self
     */
    public function setTURNOVER_DSC($TURNOVER_DSC)
    {
        $this->TURNOVER_DSC = $TURNOVER_DSC;

        return $this;
    }




   

}