<?php


/**
 * PaymentMethods short summary.
 *
 * PaymentMethods description.
 *
 * @version 1.0
 * @author Computer
 */
class PaymentMethods
{

    protected $table = "br_payment_methods";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {

        # Properties
        $this->variables = array();
        $this->variables["cashless"] = null;
        $this->variables["cash"] = null;
        $this->variables["advance"] = null;
        $this->variables["emoney"] = null;
        $this->variables["other"] = null;


        $this->isNull = true;


    }


    public function IsNull()
    {
        return $this->isNull;
    }

    public function setVariables($value)
    {
        $this->variables = $value;
        $this->isNull = false;
    }

    public function getVariables()
    {
        return $this->variables;
    }

    public function getTable()
    {
        return $this->table;
    }


    public function setCashless($value)
    {
        $this->variables["cashless"] = $value;
    }

    public function getCashless()
    {
        return $this->variables["cashless"];
    }

    public function setCash($value)
    {
        $this->variables["cash"] = $value;
    }

    public function getCash()
    {
        return $this->variables["cash"];
    }

    public function setAdvance($value)
    {
        $this->variables["advance"] = $value;
    }

    public function getAdvance()
    {
        return $this->variables["advance"];
    }

    public function setEmoney($value)
    {
        $this->variables["emoney"] = $value;
    }

    public function getEmoney()
    {
        return $this->variables["emoney"];
    }

    public function setOther($value)
    {
        $this->variables["other"] = $value;
    }

    public function getOther()
    {
        return $this->variables["other"];
    }

    public function setVariable($key, $value)
    {
        $this->variables[$key] = $value;
    }

    public function getVariable($key)
    {
        return $this->variables[$key];
    }
}