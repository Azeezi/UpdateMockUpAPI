<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $table = 'countries';
    protected $fillable = ['id', 'COUNTRY_CD', 'COUNTRY_DSC', 'HOME_YN'];

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
     * Get the value of COUNTRY_CD
     */
    public function getCOUNTRY_CD()
    {
        return $this->COUNTRY_CD;
    }


    /**
     * Set the value of COUNTRY_CD
     *
     * @return  self
     */
    public function setCOUNTRY_CD($COUNTRY_CD)
    {
        $this->COUNTRY_CD = $COUNTRY_CD;

        return $this;
    }


    /**
     * Get the value of COUNTRY_DSC
     */
    public function getCOUNTRY_DSC()
    {
        return $this->COUNTRY_DSC;
    }


    /**
     * Set the value of COUNTRY_DSC
     *
     * @return  self
     */
    public function setCOUNTRY_DSC($COUNTRY_DSC)
    {
        $this->COUNTRY_DSC = $COUNTRY_DSC;

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

