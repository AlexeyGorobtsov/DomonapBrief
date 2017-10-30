<?php


/**
 * DesignFocus short summary.
 *
 * DesignFocus description.
 *
 * @version 1.0
 * @author Computer
 */
class DesignFocus
{

    protected $table = "br_design_focus";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {

        $this->variables = array();
        $this->variables["slogan"] = null;
        $this->variables["about"] = null;
        $this->variables["services"] = null;
        $this->variables["location"] = null;
        $this->variables["new_products"] = null;
        $this->variables["uniqueness"] = null;
        $this->variables["price"] = null;
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


    public function setSlogan($value)
    {
        $this->variables["slogan"] = $value;
    }

    public function getSlogan()
    {
        return $this->variables["slogan"];
    }

    public function setAbout($value)
    {
        $this->variables["about"] = $value;
    }

    public function getAbout()
    {
        return $this->variables["about"];
    }

    public function setServices($value)
    {
        $this->variables["services"] = $value;
    }

    public function getServices()
    {
        return $this->variables["services"];
    }

    public function setLocation($value)
    {
        $this->variables["location"] = $value;
    }

    public function getLocation()
    {
        return $this->variables["location"];
    }

    public function setNew_products($value)
    {
        $this->variables["new_products"] = $value;
    }

    public function getNew_products()
    {
        return $this->variables["new_products"];
    }

    public function setUniqueness($value)
    {
        $this->variables["uniqueness"] = $value;
    }

    public function getUniqueness()
    {
        return $this->variables["uniqueness"];
    }

    public function setPrice($value)
    {
        $this->variables["price"] = $value;
    }

    public function getPrice()
    {
        return $this->variables["price"];
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