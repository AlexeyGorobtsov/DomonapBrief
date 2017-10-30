<?php

require_once("Design.php");
require_once("InternetShop.php");
require_once("ExtraFeatures.php");
require_once("WebSite.php");
require_once("Audience.php");

/**
 * Brief short summary.
 *
 * Brief description.
 *
 * @version 1.0
 * @author Computer
 */
class Brief
{


    protected $table = "br_brief";
    public $objects;
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->objects = array();

        # Objects
        $this->objects["client"] = new Client();
        $this->objects["audience"] = new Audience();
        $this->objects["design"] = new Design();
        $this->objects["internetShop"] = new InternetShop();
        $this->objects["extraFeatures"] = new ExtraFeatures();
        $this->objects["webSite"] = new WebSite();

        $this->variables["task"] = null;
        $this->variables["site_type"] = null;
        $this->variables["timeframe"] = null;
        $this->variables["budget"] = null;
        $this->variables["site_support"] = null;
        $this->variables["work_activities"] = null;
        $this->variables["project_name"] = null;
        $this->variables["id"] = null;
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


    public function setTask($value)
    {
        $this->variables["task"] = $value;
    }

    public function getTask()
    {
        return $this->variables["task"];
    }

    public function setSite_type($value)
    {
        $this->variables["site_type"] = $value;
    }

    public function getSite_type()
    {
        return $this->variables["site_type"];
    }

    public function setTimeframe($value)
    {
        $this->variables["timeframe"] = $value;
    }

    public function getTimeframe()
    {
        return $this->variables["timeframe"];
    }

    public function setBudget($value)
    {
        $this->variables["budget"] = $value;
    }

    public function getBudget()
    {
        return $this->variables["budget"];
    }

    public function setSite_support($value)
    {
        $this->variables["site_support"] = $value;
    }

    public function getSite_support()
    {
        return $this->variables["site_support"];
    }

    public function setWork_activities($value)
    {
        $this->variables["work_activities"] = $value;
    }

    public function getWork_activities()
    {
        return $this->variables["work_activities"];
    }

    public function setProject_name($value)
    {
        $this->variables["project_name"] = $value;
    }

    public function getProject_name()
    {
        return $this->variables["project_name"];
    }

    public function setPk($value)
    {
        $this->variables["id"] = $value;
    }

    public function getPk()
    {
        return $this->variables["id"];
    }

    public function setVariable($key, $value)
    {
        $this->variables[$key] = $value;
    }

    public function getVariable($key)
    {
        return $this->variables[$key];
    }


    public function setClientVariables($value)
    {
        $this->objects["client"]->variables = $value;
    }

    public function setAudienceVariables($value)
    {
        $this->objects["audience"]->variables = $value;
    }

    public function setDesignVariables($value)
    {
        $this->objects["design"]->variables = $value;
    }

    public function setInternetShopVariables($value)
    {
        $this->objects["internetShop"]->variables = $value;
    }

    public function setExtraFeaturesVariables($value)
    {
        $this->objects["extraFeatures"]->variables = $value;
    }

    public function setWebSiteVariables($value)
    {
        $this->objects["webSite"]->variables = $value;
    }

    public function getClient()
    {
        return $this->objects["client"];
    }

    public function getAudience()
    {
        return $this->objects["audience"];
    }

    public function getDesign()
    {
        return $this->objects["design"];
    }

    public function getInternetShop()
    {
        return $this->objects["internetShop"];
    }

    public function getExtraFeatures()
    {
        return $this->objects["extraFeatures"];
    }

    public function getWebSite()
    {
        return $this->objects["webSite"];
    }


}















