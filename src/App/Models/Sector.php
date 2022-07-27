<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model{
    use SoftDeletes;
    protected $table = 'sectors';
    protected $fillable = ['id', 'SECTOR_CD', 'SECTOR_DSC', ];

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
     * Get the value of SECTOR_CD
     */
    public function getSECTOR_CD()
    {
        return $this->SECTOR_CD;
    }


    /**
     * Set the value of SECTOR_CD
     *
     * @return  self
     */
    public function setSECTOR_CD($SECTOR_CD)
    {
        $this->SECTOR_CD = $SECTOR_CD;


        return $this;
    }



    /**
     * Get the value of SECTOR_DSC
     */
    public function getSECTOR_DSC()
    {
        return $this->SECTOR_DSC;
    }


    /**
     * Set the value of SECTOR_DSC
     *
     * @return  self
     */
    public function setSECTOR_DSC($SECTOR_DSC)
    {
        $this->SECTOR_DSC = $SECTOR_DSC;

        return $this;
    }




   

}