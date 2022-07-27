<?php
namespace Mock\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FundAccountId extends Model{
    use SoftDeletes;
    protected $table = 'FundAccountIds';
    protected $fillable = ['id', 'FUND_DESCRIPTION', 'FUND_CURRENCY', 'IS_MONEY_MARKET_FUND', 'CUSTOMER_ID',
                           'CUSTOMER_NAME',  'ACCOUNT_ID',   'ACCOUNT_DESCRIPTION',    'REGISTRAR_ACCOUNT_ID', 'BALANCE_DATE',
                           'TOTAL_PURCHASE_QUANTITY', 'TOTAL_SALE_QUANTITY',  'TOTAL_BONUS_QUANTITY',  'BALANCE_QUANTITY',  'TOTAL_PURCHASE_AMOUNT',
                           'TOTAL_SALE_AMOUNT', 'TOTAL_DIVIDEND_AMOUNT', 'TOTAL_ACCRUED_INTEREST', 'OUTSTANDING_ACCRUED_INTEREST', 'COST_PRICE',
                            'COST_VALUE', 'CURRENT_BID_PRICE', 'CURRENT_VALUE',  'GAIN_LOSS_AMOUNT', 'CASH_ACCOUNT_ID','CASH_ACCOUNT_DESCRIPTION'];

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
     * Get the value of FUND_DESCRIPTION'
     */
    public function getFUND_DESCRIPTION()
    {
        return $this->FUND_DESCRIPTION;
    }


    /**
     * Set the value of FUND_DESCRIPTION
     *
     * @return  self
     */
    public function setFUND_DESCRIPTION($FUND_DESCRIPTION)
    {
        $this->FUND_DESCRIPTION = $FUND_DESCRIPTION;

        return $this;
    }



    /**
     * Get the value of FUND_CURRENCY
     */
    public function getFUND_CURRENCY()
    {
        return $this->FUND_CURRENCY;
    }


    /**
     * Set the value of FUND_CURRENCY
     *
     * @return  self
     */
    public function setFUND_CURRENCY($FUND_CURRENCY)
    {
        $this->FUND_CURRENCY = $FUND_CURRENCY;

        return $this;
    }


/**
     * Get the value of IS_MONEY_MARKET_FUND
     */
    public function getIS_MONEY_MARKET_FUND()
    {
        return $this->IS_MONEY_MARKET_FUND;
    }


    /**
     * Set the value of IS_MONEY_MARKET_FUND
     *
     * @return  self
     */
    public function setIS_MONEY_MARKET_FUND($IS_MONEY_MARKET_FUND)
    {
        $this->FIS_MONEY_MARKET_FUND= $IS_MONEY_MARKET_FUND;

        return $this;
    }


/**
     * Get the value of CUSTOMER_ID
     */
    public function getCUSTOMER_ID()
    {
        return $this->CUSTOMER_ID;
    }


    /**
     * Set the value of CUSTOMER_ID
     *
     * @return  self
     */
    public function setCUSTOMER_ID($CUSTOMER_ID)
    {
        $this->CUSTOMER_ID= $CUSTOMER_ID;

        return $this;
    }





/**
     * Get the value of CUSTOMER_NAME
     */
    public function getCUSTOMER_NAME()
    {
        return $this->CUSTOMER_NAME;
    }


    /**
     * Set the value of CUSTOMER_NAME
     *
     * @return  self
     */
    public function setCUSTOMER_NAME($CUSTOMER_NAME)
    {
        $this->CUSTOMER_NAME= $CUSTOMER_NAME;

        return $this;
    }





/**
     * Get the value of ACCOUNT_ID
     */
    public function getACCOUNT_ID()
    {
        return $this->ACCOUNT_ID;
    }


    /**
     * Set the value of ACCOUNT_ID
     *
     * @return  self
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
        $this->ACCOUNT_ID= $ACCOUNT_ID;

        return $this;
    }






/**
     * Get the value of ACCOUNT_DESCRIPTION
     */
    public function getACCOUNT_DESCRIPTION()
    {
        return $this->ACCOUNT_DESCRIPTION;
    }


    /**
     * Set the value of ACCOUNT_DESCRIPTION
     *
     * @return  self
     */
    public function setACCOUNT_DESCRIPTION($ACCOUNT_DESCRIPTION)
    {
        $this->ACCOUNT_DESCRIPTION= $ACCOUNT_DESCRIPTION;

        return $this;
    }





/**
     * Get the value of REGISTRAR_ACCOUNT_ID
     */
    public function getREGISTRAR_ACCOUNT_ID()
    {
        return $this->REGISTRAR_ACCOUNT_ID;
    }


    /**
     * Set the value of REGISTRAR_ACCOUNT_ID
     *
     * @return  self
     */
    public function setREGISTRAR_ACCOUNT_ID($REGISTRAR_ACCOUNT_ID)
    {
        $this->REGISTRAR_ACCOUNT_ID= $REGISTRAR_ACCOUNT_ID;

        return $this;
    }





/**
     * Get the value of BALANCE_DATE
     */
    public function getBALANCE_DATE()
    {
        return $this->BALANCE_DATE;
    }


    /**
     * Set the value of BALANCE_DATE
     *
     * @return  self
     */
    public function setBALANCE_DATE($BALANCE_DATE)
    {
        $this->BALANCE_DATE= $BALANCE_DATE;

        return $this;
    }



/**
     * Get the value of TOTAL_PURCHASE_QUANTITY
     */
    public function getTOTAL_PURCHASE_QUANTITY()
    {
        return $this->TOTAL_PURCHASE_QUANTITY;
    }


    /**
     * Set the value of TOTAL_PURCHASE_QUANTITY
     *
     * @return  self
     */
    public function setTOTAL_PURCHASE_QUANTITY($TOTAL_PURCHASE_QUANTITY)
    {
        $this->TOTAL_PURCHASE_QUANTITY= $TOTAL_PURCHASE_QUANTITY;

        return $this;
    }




/**
     * Get the value of TOTAL_SALE_QUANTITY
     */
    public function getTOTAL_SALE_QUANTITY()
    {
        return $this->TOTAL_SALE_QUANTITY;
    }


    /**
     * Set the value of TOTAL_SALE_QUANTITY
     *
     * @return  self
     */
    public function setTOTAL_SALE_QUANTITY($TOTAL_SALE_QUANTITY)
    {
        $this->TOTAL_SALE_QUANTITY= $TOTAL_SALE_QUANTITY;

        return $this;
    }




/**
     * Get the value of TOTAL_BONUS_QUANTITY
     */
    public function getTOTAL_BONUS_QUANTITY()
    {
        return $this->TOTAL_BONUS_QUANTITY;
    }


    /**
     * Set the value of TOTAL_BONUS_QUANTITY
     *
     * @return  self
     */
    public function setTOTAL_BONUS_QUANTITY($TOTAL_BONUS_QUANTITY)
    {
        $this->TOTAL_BONUS_QUANTITY= $TOTAL_BONUS_QUANTITY;

        return $this;
    }



/**
     * Get the value of BALANCE_QUANTITY
     */
    public function getBALANCE_QUANTITY()
    {
        return $this->BALANCE_QUANTITY;
    }


    /**
     * Set the value of BALANCE_QUANTITY
     *
     * @return  self
     */
    public function setBALANCE_QUANTITY($BALANCE_QUANTITY)
    {
        $this->BALANCE_QUANTITY= $BALANCE_QUANTITY;

        return $this;
    }



    /**
     * Get the value of TOTAL_PURCHASE_AMOUNT
     */
    public function getTOTAL_PURCHASE_AMOUNT()
    {
        return $this->TOTAL_PURCHASE_AMOUNT;
    }


    /**
     * Set the value of TOTAL_PURCHASE_AMOUNT
     *
     * @return  self
     */
    public function setTOTAL_PURCHASE_AMOUNT($TOTAL_PURCHASE_AMOUNT)
    {
        $this->TOTAL_PURCHASE_AMOUNT= $TOTAL_PURCHASE_AMOUNT;

        return $this;
    }




/**
     * Get the value of TOTAL_SALE_AMOUNT
     */
    public function getTOTAL_SALE_AMOUNT()
    {
        return $this->TOTAL_SALE_AMOUNT;
    }


    /**
     * Set the value of TOTAL_SALE_AMOUNT
     *
     * @return  self
     */
    public function setTOTAL_SALE_AMOUNT($TOTAL_SALE_AMOUNT)
    {
        $this->TOTAL_SALE_AMOUNT= $TOTAL_SALE_AMOUNT;

        return $this;
    }



/**
     * Get the value of TOTAL_DIVIDEND_AMOUNT
     */
    public function getTOTAL_DIVIDEND_AMOUNT()
    {
        return $this->TOTAL_DIVIDEND_AMOUNT;
    }


    /**
     * Set the value of TOTAL_DIVIDEND_AMOUNT
     *
     * @return  self
     */
    public function setTOTAL_DIVIDEND_AMOUNT($TOTAL_DIVIDEND_AMOUNT)
    {
        $this->TOTAL_DIVIDEND_AMOUNT= $TOTAL_DIVIDEND_AMOUNT;

        return $this;
    }



/**
     * Get the value of TOTAL_ACCRUED_INTEREST
     */
    public function getTOTAL_ACCRUED_INTEREST()
    {
        return $this->TOTAL_ACCRUED_INTEREST;
    }


    /**
     * Set the value of TOTAL_ACCRUED_INTEREST
     *
     * @return  self
     */
    public function setTOTAL_ACCRUED_INTEREST($TOTAL_ACCRUED_INTEREST)
    {
        $this->TOTAL_ACCRUED_INTEREST= $TOTAL_ACCRUED_INTEREST;

        return $this;
    }


/**
     * Get the value of OUTSTANDING_ACCRUED_INTEREST
     */
    public function getOUTSTANDING_ACCRUED_INTEREST()
    {
        return $this->OUTSTANDING_ACCRUED_INTEREST;
    }


    /**
     * Set the value of OUTSTANDING_ACCRUED_INTEREST
     *
     * @return  self
     */
    public function setOUTSTANDING_ACCRUED_INTEREST($OUTSTANDING_ACCRUED_INTEREST)
    {
        $this->OUTSTANDING_ACCRUED_INTEREST= $OUTSTANDING_ACCRUED_INTEREST;

        return $this;
    }



/**
     * Get the value of COST_PRICE
     */
    public function getCOST_PRICE()
    {
        return $this->COST_PRICE;
    }


    /**
     * Set the value of COST_PRICE
     *
     * @return  self
     */
    public function setCOST_PRICE($COST_PRICE)
    {
        $this->COST_PRICE= $COST_PRICE;

        return $this;
    }




    /**
     * Get the value of COST_VALUE
     */
    public function getCOST_VALUE()
    {
        return $this->COST_VALUE;
    }


    /**
     * Set the value of COST_VALUE
     *
     * @return  self
     */
    public function setCOST_VALUE($COST_VALUE)
    {
        $this->COST_VALUE= $COST_VALUE;

        return $this;
    }




/**
     * Get the value of CURRENT_BID_PRICE
     */
    public function getCURRENT_BID_PRICE()
    {
        return $this->CURRENT_BID_PRICE;
    }


    /**
     * Set the value of CURRENT_BID_PRICE
     *
     * @return  self
     */
    public function setCURRENT_BID_PRICE($CURRENT_BID_PRICE)
    {
        $this->CURRENT_BID_PRICE= $CURRENT_BID_PRICE;

        return $this;
    }


 /**
     * Get the value of CURRENT_VALUE
     */
    public function getCURRENT_VALUE()
    {
        return $this->CURRENT_VALUE;
    }


    /**
     * Set the value of CURRENT_VALUE
     *
     * @return  self
     */
    public function setCURRENT_VALUE($CURRENT_VALUE)
    {
        $this->CURRENT_VALUE= $CURRENT_VALUE;

        return $this;
    }


 
   


/**
     * Get the value of GAIN_LOSS_AMOUNT
     */
    public function getGAIN_LOSS_AMOUNT()
    {
        return $this->GAIN_LOSS_AMOUNT;
    }


    /**
     * Set the value of GAIN_LOSS_AMOUNT
     *
     * @return  self
     */
    public function setGAIN_LOSS_AMOUNT($GAIN_LOSS_AMOUNT)
    {
        $this->GAIN_LOSS_AMOUNT= $GAIN_LOSS_AMOUNT;

        return $this;
    }



/**
     * Get the value of CASH_ACCOUNT_ID
     */
    public function getCASH_ACCOUNT_ID()
    {
        return $this->CASH_ACCOUNT_ID;
    }


    /**
     * Set the value of CASH_ACCOUNT_ID
     *
     * @return  self
     */
    public function setCASH_ACCOUNT_ID($CASH_ACCOUNT_ID)
    {
        $this->CASH_ACCOUNT_ID= $CASH_ACCOUNT_ID;

        return $this;
    }



/**
     * Get the value of CASH_ACCOUNT_DESCRIPTION
     */
    public function getCASH_ACCOUNT_DESCRIPTION()
    {
        return $this->CASH_ACCOUNT_DESCRIPTION;
    }


    /**
     * Set the value of CASH_ACCOUNT_DESCRIPTION
     *
     * @return  self
     */
    public function setCASH_ACCOUNT_DESCRIPTION($CASH_ACCOUNT_DESCRIPTION)
    {
        $this->CASH_ACCOUNT_DESCRIPTION= $CASH_ACCOUNT_DESCRIPTION;

        return $this;

}


}







