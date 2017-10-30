<?php


require_once("Modules.php");
require_once("Marketing.php");
require_once("SiteSupport.php");

/**
 * ExtraFeatures short summary.
 *
 * ExtraFeatures description.
 *
 * @version 1.0
 * @author Computer
 */
class ExtraFeatures
{

    protected $table = "br_extra_features";
    public $objects;
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {


        $this->variables = array();
        $this->objects = array();

        $this->variables["brandbook"] = null;
        $this->variables["logotype"] = null;
        $this->variables["content_managment"] = null;
        $this->variables["copywriting"] = null;
        $this->variables["seo"] = null;
        $this->variables["language"] = null;


        $this->objects["modules"] = new Modules();
        $this->objects["marketing"] = new Marketing();
        $this->objects["siteSupport"] = new SiteSupport();

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

    public function setContent_managment($value)
    {
        $this->variables["content_managment"] = $value;
    }

    public function getContent_managment()
    {
        return $this->variables["content_managment"];
    }

    public function setCopywriting($value)
    {
        $this->variables["copywriting"] = $value;
    }

    public function getCopywriting()
    {
        return $this->variables["copywriting"];
    }

    public function setSeo($value)
    {
        $this->variables["seo"] = $value;
    }

    public function getSeo()
    {
        return $this->variables["seo"];
    }

    public function setLanguage($value)
    {
        $this->variables["language"] = $value;
    }

    public function getLanguage()
    {
        return $this->variables["language"];
    }


    public function getModules()
    {
        return $this->objects["modules"];
    }

    public function getMarketing()
    {
        return $this->objects["marketing"];
    }

    public function getSiteSupport()
    {
        return $this->objects["siteSupport"];
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