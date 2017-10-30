<?php

/**
 * SiteSupport short summary.
 *
 * SiteSupport description.
 *
 * @version 1.0
 * @author Computer
 */
class SiteSupport
{

    protected $table = "br_site_support";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();

        $this->variables["technical"] = null;
        $this->variables["security"] = null;
        $this->variables["content"] = null;
        $this->variables["editing_site"] = null;
        $this->variables["development"] = null;
        $this->variables["consulations"] = null;
        $this->variables["maintenance"] = null;


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


    public function setTechnical($value)
    {
        $this->variables["technical"] = $value;
    }

    public function getTechnical()
    {
        return $this->variables["technical"];
    }

    public function setSecurity($value)
    {
        $this->variables["security"] = $value;
    }

    public function getSecurity()
    {
        return $this->variables["security"];
    }

    public function setContent($value)
    {
        $this->variables["content"] = $value;
    }

    public function getContent()
    {
        return $this->variables["content"];
    }

    public function setEditing_site($value)
    {
        $this->variables["editing_site"] = $value;
    }

    public function getEditing_site()
    {
        return $this->variables["editing_site"];
    }

    public function setDevelopment($value)
    {
        $this->variables["development"] = $value;
    }

    public function getDevelopment()
    {
        return $this->variables["development"];
    }

    public function setConsulations($value)
    {
        $this->variables["consulations"] = $value;
    }

    public function getConsulations()
    {
        return $this->variables["consulations"];
    }

    public function setMaintenance($value)
    {
        $this->variables["maintenance"] = $value;
    }

    public function getMaintenance()
    {
        return $this->variables["maintenance"];
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