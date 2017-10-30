<?php

require_once("Devices.php");
require_once("GraphicMaterials.php");
require_once("DesignFocus.php");
require_once("ExistingElements.php");


/**
 * Design short summary.
 *
 * Design description.
 *
 * @version 1.0
 * @author Computer
 */
class Design
{

    protected $table = "br_design";
    public $objects;
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->objects = array();


        $this->objects["devices"] = new Devices();
        $this->objects["graphicMaterials"] = new GraphicMaterials();
        $this->objects["designFocus"] = new DesignFocus();
        $this->objects["existingElements"] = new ExistingElements();

        $this->variables["corporate_identity"] = null;
        $this->variables["require_design"] = null;
        $this->variables["markup"] = null;
        $this->variables["site_style"] = null;
        $this->variables["page_differents"] = null;

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


    public function setCorporate_identity($value)
    {
        $this->variables["corporate_identity"] = $value;
    }

    public function getCorporate_identity()
    {
        return $this->variables["corporate_identity"];
    }

    public function setRequire_design($value)
    {
        $this->variables["require_design"] = $value;
    }

    public function getRequire_design()
    {
        return $this->variables["require_design"];
    }

    public function setMarkup($value)
    {
        $this->variables["markup"] = $value;
    }

    public function getMarkup()
    {
        return $this->variables["markup"];
    }

    public function setSite_style($value)
    {
        $this->variables["site_style"] = $value;
    }

    public function getSite_style()
    {
        return $this->variables["site_style"];
    }

    public function setPage_differents($value)
    {
        $this->variables["page_differents"] = $value;
    }

    public function getPage_differents()
    {
        return $this->variables["page_differents"];
    }


    public function getDevices()
    {
        return $this->objects["devices"];
    }

    public function getGraphicMaterials()
    {
        return $this->objects["graphicMaterials"];
    }

    public function getDesignFocus()
    {
        return $this->objects["designFocus"];
    }

    public function getExistingElements()
    {
        return $this->objects["existingElements"];
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