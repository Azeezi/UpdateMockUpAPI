<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model{
    use SoftDeletes;
    protected $table = 'Locations';
    protected $fillable = ['id', 'LOCATION_CD', 'LOCATION_DSC' ];

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
     * Get the value of LOCATION_CD
     */
    public function getLOCATION_CD()
    {
        return $this->LOCATION_CD;
    }


    /**
     * Set the value of LOCATION_CD
     *
     * @return  self
     */
    public function setLOCATION_CD($LOCATION_CD)
    {
        $this->LOCATION_CD = $LOCATION_CD;


        return $this;
    }



    /**
     * Get the value of LOCATION_DSC
     */
    public function getLOCATION_DSC()
    {
        return $this->LOCATION_DSC;
    }


    /**
     * Set the value of LOCATION_DSC
     *
     * @return  self
     */
    public function setLOCATION_DSC($LOCATION_DSC)
    {
        $this->LOCATION_DSC = $LOCATION_DSC;

        return $this;
    }

}