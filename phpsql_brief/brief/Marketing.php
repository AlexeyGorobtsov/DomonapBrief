<?php

/**
 * Marketing short summary.
 *
 * Marketing description.
 *
 * @version 1.0
 * @author Computer
 */
class Marketing
{

    protected $table = "br_marketing";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {


        $this->variables = array();
        $this->variables["install"] = null;
        $this->variables["configure"] = null;
        $this->variables["emailing"] = null;
        $this->variables["sms"] = null;
        $this->variables["promotion"] = null;
        $this->variables["integration"] = null;


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


    public function setInstall($value)
    {
        $this->variables["install"] = $value;
    }

    public function getInstall()
    {
        return $this->variables["install"];
    }

    public function setConfigure($value)
    {
        $this->variables["configure"] = $value;
    }

    public function geConfiguret()
    {
        return $this->variables["configure"];
    }

    public function setEmailing($value)
    {
        $this->variables["emailing"] = $value;
    }

    public function getEmailing()
    {
        return $this->variables["emailing"];
    }

    public function setSms($value)
    {
        $this->variables["sms"] = $value;
    }

    public function getSms()
    {
        return $this->variables["sms"];
    }

    public function setPromotion($value)
    {
        $this->variables["promotion"] = $value;
    }

    public function getPromotion()
    {
        return $this->variables["promotion"];
    }

    public function setIntegration($value)
    {
        $this->variables["integration"] = $value;
    }

    public function getIntegration()
    {
        return $this->variables["integration"];
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