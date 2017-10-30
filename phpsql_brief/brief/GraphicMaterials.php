<?php


/**
 * GraphicMaterials short summary.
 *
 * GraphicMaterials description.
 *
 * @version 1.0
 * @author Computer
 */
class GraphicMaterials
{

    protected $table = "br_graphic_materials";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {

        $this->variables = array();
        $this->variables["free"] = null;
        $this->variables["paid"] = null;
        $this->variables["photo_session"] = null;
        $this->variables["creation_unique"] = null;


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


    public function setFree($value)
    {
        $this->variables["free"] = $value;
    }

    public function getFree()
    {
        return $this->variables["free"];
    }

    public function setPaid($value)
    {
        $this->variables["paid"] = $value;
    }

    public function getPaid()
    {
        return $this->variables["paid"];
    }

    public function setPhoto_session($value)
    {
        $this->variables["photo_session"] = $value;
    }

    public function getPhoto_session()
    {
        return $this->variables["photo_session"];
    }

    public function setCreation_unique($value)
    {
        $this->variables["creation_unique"] = $value;
    }

    public function getCreation_unique()
    {
        return $this->variables["creation_unique"];
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