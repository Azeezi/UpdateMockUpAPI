<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relationship extends Model{
    use SoftDeletes;
    protected $table = 'relationship';
    protected $fillable = ['id', 'RELATIONSHIP_CD', 'RELATIONSHIP_DSC', ];

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
     * Get the value of RELATIONSHIP_CD
     */
    public function getRELATIONSHIP_CD()
    {
        return $this->RELATIONSHIP_CD;
    }


    /**
     * Set the value of RELATIONSHIP_CD
     *
     * @return  self
     */
    public function setRELATIONSHIP_CD($RELATIONSHIP_CD)
    {
        $this->RELATIONSHIP_CD = $RELATIONSHIP_CD;


        return $this;
    }



    /**
     * Get the value of RELATIONSHIP_DSC
     */
    public function getRELATIONSHIP_DSC()
    {
        return $this->RELATIONSHIP_DSC;
    }


    /**
     * Set the value of RELATIONSHIP_DSC
     *
     * @return  self
     */
    public function setRELATIONSHIP_DSC($RELATIONSHIP_DSC)
    {
        $this->RELATIONSHIP_DSC = $RELATIONSHIP_DSC;

        return $this;
    }




   

}