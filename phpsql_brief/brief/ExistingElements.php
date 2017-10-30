<?php


/**
 * ExistingElements short summary.
 *
 * ExistingElements description.
 *
 * @version 1.0
 * @author Computer
 */
class ExistingElements
{

    protected $table = "br_existing_elements";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->variables["domain"] = null;
        $this->variables["brandbook"] = null;
        $this->variables["logotype"] = null;
        $this->variables["images"] = null;
        $this->variables["information_materials"] = null;
        $this->variables["media"] = null;

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

    public function setDomain($value)
    {
        $this->variables["domain"] = $value;
    }

    public function getDomain()
    {
        return $this->variables["domain"];
    }

    public function setBrandbook($value)
    {
        $this->variables["brandbook"] = $value;
    }

    public function getBrandbook()
    {
        return $this->variables["brandbook"];
    }

    public function setLogotype($value)
    {
        $this->variables["logotype"] = $value;
    }

    public function getLogotype()
    {
        return $this->variables["logotype"];
    }

    public function setImages($value)
    {
        $this->variables["images"] = $value;
    }

    public function getImages()
    {
        return $this->variables["images"];
    }

    public function setInformation_materials($value)
    {
        $this->variables["information_materials"] = $value;
    }

    public function getInformation_materials()
    {
        return $this->variables["information_materials"];
    }

    public function setMedia($value)
    {
        $this->variables["media"] = $value;
    }

    public function getMedia()
    {
        return $this->variables["media"];
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