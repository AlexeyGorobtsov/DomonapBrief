<?php

require_once("PaymentMethods.php");

/**
 * InternetShop short summary.
 *
 * InternetShop description.
 *
 * @version 1.0
 * @author Computer
 */
class InternetShop
{

    protected $table = "br_internet_shop";
    public $objects;
    protected $variables;

    /**
     *   Default Constructor
     */
    public function __construct()
    {

        $this->variables = array();
        $this->objects = array();


        $this->objects["paymentMethods"] = new PaymentMethods();

        $this->variables["product"] = null;
        $this->variables["categories"] = null;
        $this->variables["nesting_levels"] = null;
        $this->variables["total_items"] = null;
        $this->variables["client_registration"] = null;
        $this->variables["open_basket"] = null;
        $this->variables["client_history"] = null;
        $this->variables["discounts"] = null;
        $this->variables["discounts_flyers"] = null;
        $this->variables["currencies"] = null;
        $this->variables["site_traffic"] = null;
        $this->variables["orders_receive"] = null;
        $this->variables["inventory"] = null;


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


    public function setProduct($value)
    {
        $this->variables["product"] = $value;
    }

    public function getProduct()
    {
        return $this->variables["product"];
    }

    public function setCategories($value)
    {
        $this->variables["categories"] = $value;
    }

    public function getCategories()
    {
        return $this->variables["categories"];
    }

    public function setNesting_levels($value)
    {
        $this->variables["nesting_levels"] = $value;
    }

    public function getNesting_levels()
    {
        return $this->variables["nesting_levels"];
    }

    public function setTotal_items($value)
    {
        $this->variables["total_items"] = $value;
    }

    public function getTotal_items()
    {
        return $this->variables["total_items"];
    }

    public function setClient_registration($value)
    {
        $this->variables["client_registration"] = $value;
    }

    public function getClient_registration()
    {
        return $this->variables["client_registration"];
    }

    public function setOpen_basket($value)
    {
        $this->variables["open_basket"] = $value;
    }

    public function getOpen_basket()
    {
        return $this->variables["open_basket"];
    }

    public function setClient_history($value)
    {
        $this->variables["client_history"] = $value;
    }

    public function getClient_history()
    {
        return $this->variables["client_history"];
    }

    public function setDiscounts($value)
    {
        $this->variables["discounts"] = $value;
    }

    public function getDiscounts()
    {
        return $this->variables["discounts"];
    }

    public function setDiscounts_flyers($value)
    {
        $this->variables["discounts_flyers"] = $value;
    }

    public function getDiscounts_flyers()
    {
        return $this->variables["discounts_flyers"];
    }

    public function setCurrencies($value)
    {
        $this->variables["currencies"] = $value;
    }

    public function getCurrencies()
    {
        return $this->variables["currencies"];
    }

    public function setSite_traffic($value)
    {
        $this->variables["site_traffic"] = $value;
    }

    public function getSite_traffic()
    {
        return $this->variables["site_traffic"];
    }

    public function setOrders_receive($value)
    {
        $this->variables["orders_receive"] = $value;
    }

    public function getOrders_receivet()
    {
        return $this->variables["orders_receive"];
    }

    public function setInventory($value)
    {
        $this->variables["inventory"] = $value;
    }

    public function getInventory()
    {
        return $this->variables["inventory"];
    }


    public function getPaymentMethods()
    {
        return $this->objects["paymentMethods"];
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