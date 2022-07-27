<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Title extends Model{
    use SoftDeletes;
    protected $table = 'titles';
    protected $fillable = ['id', 'TITTLE_CD', 'TITTLE_DSC', ];

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
     * Get the value of TITTLE_CD
     */
    public function getTITTLE_CD()
    {
        return $this->TITTLE_CD;
    }


    /**
     * Set the value of TITTLE_CD
     *
     * @return  self
     */
    public function setTITTLE_CD($TITTLE_CD)
    {
        $this->TITTLE_CD = $TITTLE_CD;


        return $this;
    }



    /**
     * Get the value of TITTLE_DSC
     */
    public function getTITTLE_DSC()
    {
        return $this->TITTLE_DSC;
    }


    /**
     * Set the value of TITTLE_DSC
     *
     * @return  self
     */
    public function setTITTLE_DSC($TITTLE_DSC)
    {
        $this->TITTLE_DSC = $TITTLE_DSC;

        return $this;
    }




   

}