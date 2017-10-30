<?php

/**
 * SiteContent short summary.
 *
 * SiteContent description.
 *
 * @version 1.0
 * @author Computer
 */

class SiteContent
{

    protected $table = "br_site_content";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {
        $this->variables = array();
        $this->variables["homepage"] = null;
        $this->variables["about"] = null;
        $this->variables["contacts"] = null;
        $this->variables["productpage"] = null;
        $this->variables["tariffs"] = null;
        $this->variables["faq"] = null;
        $this->variables["events"] = null;
        $this->variables["polls"] = null;
        $this->variables["score"] = null;


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


    public function setHomepage($value)
    {
        $this->variables["homepage"] = $value;
    }

    public function getHomepage()
    {
        return $this->variables["homepage"];
    }

    public function setAbout($value)
    {
        $this->variables["about"] = $value;
    }

    public function getAbout()
    {
        return $this->variables["about"];
    }

    public function setContacts($value)
    {
        $this->variables["contacts"] = $value;
    }

    public function getContacts()
    {
        return $this->variables["contacts"];
    }

    public function setProductpage($value)
    {
        $this->variables["productpage"] = $value;
    }

    public function getProductpage()
    {
        return $this->variables["productpage"];
    }

    public function setTariffs($value)
    {
        $this->variables["tariffs"] = $value;
    }

    public function getTariffs()
    {
        return $this->variables["tariffs"];
    }

    public function setFaq($value)
    {
        $this->variables["faq"] = $value;
    }

    public function getFaq()
    {
        return $this->variables["faq"];
    }

    public function setEvents($value)
    {
        $this->variables["events"] = $value;
    }

    public function getEvents()
    {
        return $this->variables["events"];
    }

    public function setPolls($value)
    {
        $this->variables["polls"] = $value;
    }

    public function getPolls()
    {
        return $this->variables["polls"];
    }

    public function setScore($value)
    {
        $this->variables["score"] = $value;
    }

    public function getScore()
    {
        return $this->variables["score"];
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