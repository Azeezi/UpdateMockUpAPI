<?php

namespace Mock\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GetCustomerFundsCustomerId extends Model
{
    use SoftDeletes;
    protected $table = 'GetCustomerFundsCustomerIds';
    protected $fillable = ['GetCustomerFundsCustomerId'];

    /**
     * Get the value of GetCustomerFundsCustomerId
     */
    public function getGetCustomerFundsCustomerId()
    {
        return $this->GetCustomerFundsCustomerId;
    }

    /**
     * Set the value of GetCustomerFundsCustomerId
     *
     * @return  self
     */
    public function setGetCustomerFundsCustomerId($GetCustomerFundsCustomerId)
    {
        $this->id = $GetCustomerFundsCustomerId;

        return $this;
    }

    
}

