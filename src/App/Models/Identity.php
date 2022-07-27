<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identity extends Model{
    use SoftDeletes;
    protected $table = 'identities';
    protected $fillable = ['id', 'IDENTIFICATION_CD', 'IDENTIFICATION_DSC'];

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
     * Get the value of IDENTIFICATION_CD
     */
    public function getIDENTIFICATION_CD()
    {
        return $this->IDENTIFICATION_CD;
    }


    /**
     * Set the value of IDENTIFICATION_CD
     *
     * @return  self
     */
    public function setIDENTIFICATION_CD($IDENTIFICATION_CD)
    {
        $this->CIDENTIFICATION_CD = $IDENTIFICATION_CD;

        return $this;
    }



    /**
     * Get the value of IDENTIFICATION_DSC
     */
    public function getIDENTIFICATION_DSC()
    {
        return $this->IDENTIFICATION_DSC;
    }


    /**
     * Set the value of IDENTIFICATION_DSC
     *
     * @return  self
     */
    public function setIDENTIFICATION_DSC($IDENTIFICATION_DSC)
    {
        $this->IDENTIFICATION_DSC = $IDENTIFICATION_DSC;

        return $this;
    }
}



