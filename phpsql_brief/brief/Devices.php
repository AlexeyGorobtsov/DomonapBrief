<?php


/**
 * Devices short summary.
 *
 * Devices description.
 *
 * @version 1.0
 * @author Computer
 */
class Devices
{

    protected $table = "br_devices";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();

        $this->variables["desktop"] = null;
        $this->variables["ipad"] = null;
        $this->variables["phone"] = null;

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


    public function setDesktop($value)
    {
        $this->variables["desktop"] = $value;
    }

    public function getDesktop()
    {
        return $this->variables["desktop"];
    }

    public function setIpad($value)
    {
        $this->variables["ipad"] = $value;
    }

    public function getIpad()
    {
        return $this->variables["ipad"];
    }

    public function setPhone($value)
    {
        $this->variables["phone"] = $value;
    }

    public function getPhone()
    {
        return $this->variables["phone"];
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