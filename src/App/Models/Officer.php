<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model{
    use SoftDeletes;
    protected $table = 'officers';
    protected $fillable = ['id', 'OFFICER_ID', 'OFFICER_NAME', ];

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
     * Get the value of OFFICER_ID
     */
    public function getOFFICER_ID()
    {
        return $this->OFFICER_ID;
    }


    /**
     * Set the value of OFFICER_ID
     *
     * @return  self
     */
    public function setOFFICER_ID($OFFICER_ID)
    {
        $this->OFFICER_ID = $OFFICER_ID;


        return $this;
    }



    /**
     * Get the value of OFFICER_NAME
     */
    public function getOFFICER_NAME()
    {
        return $this->OFFICER_NAME;
    }


    /**
     * Set the value of OFFICER_NAME
     *
     * @return  self
     */
    public function setOFFICER_NAME($OFFICER_NAME)
    {
        $this->OFFICER_NAME = $OFFICER_NAME;

        return $this;
    }




   

}