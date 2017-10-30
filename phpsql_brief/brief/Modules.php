<?php


/**
 * Modules short summary.
 *
 * Modules description.
 *
 * @version 1.0
 * @author Computer
 */
class Modules
{

    protected $table = "br_modules";
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {

        $this->variables = array();
        $this->variables["callback"] = null;
        $this->variables["smm"] = null;
        $this->variables["form"] = null;
        $this->variables["countdown"] = null;
        $this->variables["feedback"] = null;
        $this->variables["fillable_forms"] = null;
        $this->variables["forum"] = null;
        $this->variables["gallery"] = null;
        $this->variables["chat"] = null;
        $this->variables["videogallery"] = null;
        $this->variables["search"] = null;
        $this->variables["blog"] = null;
        $this->variables["subscription"] = null;
        $this->variables["catalog"] = null;
        $this->variables["reviews"] = null;
        $this->variables["portfolio"] = null;
        $this->variables["news"] = null;


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


    public function setCallback($value)
    {
        $this->variables["callback"] = $value;
    }

    public function getCallback()
    {
        return $this->variables["callback"];
    }

    public function setSmm($value)
    {
        $this->variables["smm"] = $value;
    }

    public function getSmm()
    {
        return $this->variables["smm"];
    }

    public function setForm($value)
    {
        $this->variables["form"] = $value;
    }

    public function getForm()
    {
        return $this->variables["form"];
    }

    public function setCountdown($value)
    {
        $this->variables["countdown"] = $value;
    }

    public function getCountdown()
    {
        return $this->variables["countdown"];
    }

    public function setFeedback($value)
    {
        $this->variables["feedback"] = $value;
    }

    public function getFeedback()
    {
        return $this->variables["feedback"];
    }

    public function setFillable_forms($value)
    {
        $this->variables["fillable_forms"] = $value;
    }

    public function getFillable_forms()
    {
        return $this->variables["fillable_forms"];
    }

    public function setForum($value)
    {
        $this->variables["forum"] = $value;
    }

    public function getForum()
    {
        return $this->variables["forum"];
    }

    public function setGallery($value)
    {
        $this->variables["gallery"] = $value;
    }

    public function getGallery()
    {
        return $this->variables["gallery"];
    }

    public function setChat($value)
    {
        $this->variables["chat"] = $value;
    }

    public function getChat()
    {
        return $this->variables["chat"];
    }

    public function setVideogallery($value)
    {
        $this->variables["videogallery"] = $value;
    }

    public function getVideogallery()
    {
        return $this->variables["videogallery"];
    }

    public function setSearch($value)
    {
        $this->variables["search"] = $value;
    }

    public function getSearch()
    {
        return $this->variables["search"];
    }

    public function setBlog($value)
    {
        $this->variables["blog"] = $value;
    }

    public function getBlog()
    {
        return $this->variables["blog"];
    }

    public function setSubscription($value)
    {
        $this->variables["subscription"] = $value;
    }

    public function getSubscription()
    {
        return $this->variables["subscription"];
    }

    public function setCatalog($value)
    {
        $this->variables["catalog"] = $value;
    }

    public function getCatalog()
    {
        return $this->variables["catalog"];
    }

    public function setReviews($value)
    {
        $this->variables["reviews"] = $value;
    }

    public function getReviews()
    {
        return $this->variables["reviews"];
    }

    public function setPortfolio($value)
    {
        $this->variables["portfolio"] = $value;
    }

    public function getPortfolio()
    {
        return $this->variables["portfolio"];
    }

    public function setNews($value)
    {
        $this->variables["news"] = $value;
    }

    public function getNews()
    {
        return $this->variables["news"];
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