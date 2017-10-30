<?php

require_once("SiteContent.php");

/**
 * WebSite short summary.
 *
 * WebSite description.
 *
 * @version 1.0
 * @author Computer
 */
class WebSite
{

    protected $table = "br_web_site";
    public $objects;
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->objects = array();

        $this->variables["site_goals"] = null;
        $this->variables["pages"] = null;
        $this->variables["registration"] = null;
        $this->variables["website_traffic"] = null;
        $this->variables["video_support"] = null;
        $this->variables["cms"] = null;

        $this->objects["siteContent"] = new SiteContent();

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


    public function setSite_goals($value)
    {
        $this->variables["site_goals"] = $value;
    }

    public function getSite_goals()
    {
        return $this->variables["site_goals"];
    }

    public function setPages($value)
    {
        $this->variables["pages"] = $value;
    }

    public function getPages()
    {
        return $this->variables["pages"];
    }

    public function setRegistration($value)
    {
        $this->variables["registration"] = $value;
    }

    public function getRegistration()
    {
        return $this->variables["registration"];
    }

    public function setWebsite_traffic($value)
    {
        $this->variables["website_traffic"] = $value;
    }

    public function getWebsite_traffic()
    {
        return $this->variables["website_traffic"];
    }

    public function setVideo_support($value)
    {
        $this->variables["video_support"] = $value;
    }

    public function getVideo_support()
    {
        return $this->variables["video_support"];
    }

    public function setCms($value)
    {
        $this->variables["cms"] = $value;
    }

    public function getCms()
    {
        return $this->variables["cms"];
    }

    public function getSiteContent()
    {
        return $this->objects["siteContent"];
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