<?php


/**
 * Client short summary.
 *
 * Client description.
 *
 * @version 1.0
 * @author Computer
 */
class Client
{

    protected $table = "br_client";


    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();

        $this->variables["company"] = null;
        $this->variables["firstname"] = null;
        $this->variables["lastname"] = null;
        $this->variables["middlename"] = null;
        $this->variables["phone"] = null;
        $this->variables["email"] = null;
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


    public function setCompany($value)
    {
        $this->variables["company"] = $value;
    }

    public function getCompany()
    {
        return $this->variables["company"];
    }

    public function setFirstname($value)
    {
        $this->variables["firstname"] = $value;
    }

    public function getFirstname()
    {
        return $this->variables["firstname"];
    }

    public function setLastname($value)
    {
        $this->variables["lastname"] = $value;
    }

    public function getLastname()
    {
        return $this->variables["lastname"];
    }

    public function setMiddlename($value)
    {
        $this->variables["middlename"] = $value;
    }

    public function getMiddlename()
    {
        return $this->variables["middlename"];
    }

    public function setPhone($value)
    {
        $this->variables["phone"] = $value;
    }

    public function getPhone()
    {
        return $this->variables["phone"];
    }

    public function setEmail($value)
    {
        $this->variables["email"] = $value;
    }

    public function getEmail()
    {
        return $this->variables["email"];
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