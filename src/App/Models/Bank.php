<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model{
    use SoftDeletes;
    protected $table = 'banks';
    protected $fillable = ['id', 'BANK_CD', 'BANK_DSC', 'BANK_TYPE_DSC'];

    

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
     * Get the value of BANK_CD
     */ 
    public function getBANK_CD()
    {
        return $this->BANK_CD;
    }

    

    /**
     * Get the value of BANK_DSC
     */ 
    public function getBANK_DSC()
    {
        return $this->BANK_DSC;
    }

    /**
     * Set the value of BANK_DSC
     *
     * @return  self
     */ 
    public function setBANK_DSC($BANK_DSC)
    {
        $this->BANK_DSC = $BANK_DSC;

        return $this;
    }

    /**
     * Get the value of BANK_TYPE_DSC
     */ 
    public function getBANK_TYPE_DSC()
    {
        return $this->BANK_TYPE_DSC;
    }

    /**
     * Set the value of BANK_TYPE_DSC
     *
     * @return  self
     */ 
    public function setBANK_TYPE_DSC($BANK_TYPE_DSC)
    {
        $this->BANK_TYPE_DSC = $BANK_TYPE_DSC;

        return $this;
    }

}

