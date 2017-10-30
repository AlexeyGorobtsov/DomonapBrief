<?php

/**
 * Audience short summary.
 *
 * Audience description.
 *
 * @version 1.0
 * @author Computer
 */
class Audience
{
    # CheckBox

    protected $table = "br_audience";


    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->variables["consumers"] = null;
        $this->variables["representatives"] = null;
        $this->variables["organizations"] = null;
        $this->variables["fields"] = null;
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


    public function setConsumers($value)
    {
        $this->variables["consumers"] = $value;
    }

    public function getConsumers()
    {
        return $this->variables["consumers"];
    }

    public function setRepresentatives($value)
    {
        $this->variables["representatives"] = $value;
    }

    public function getRepresentatives()
    {
        return $this->variables["representatives"];
    }

    public function setOrganizations($value)
    {
        $this->variables["organizations"] = $value;
    }

    public function getOrganizations()
    {
        return $this->variables["organizations"];
    }

    public function setFields($value)
    {
        $this->variables["fields"] = $value;
    }

    public function getFields()
    {
        return $this->variables["fields"];
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