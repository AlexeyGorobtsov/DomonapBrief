<?php


//require_once("Log.class.php");
require_once("Brief.php");
require_once("Audience.php");
require_once("Client.php");
require_once("Design.php");
require_once("DesignFocus.php");
require_once("Devices.php");
require_once("ExistingElements.php");
require_once("ExtraFeatures.php");
require_once("GraphicMaterials.php");
require_once("InternetShop.php");
require_once("Marketing.php");
require_once("Modules.php");
require_once("PaymentMethods.php");
require_once("SiteContent.php");
require_once("SiteSupport.php");
require_once("WebSite.php");


/**
 * BriefManager short summary.
 *
 * BriefManager description.
 *
 * @version 1.0
 * @author Computer
 */
class BriefManager
{

    public $brief;
    protected $db;

    # @object, Object for logging exceptions
    private $log;

    public function __construct($db)
    {
        $this->brief = new Brief();
        $this->db = $db;
        $this->log = new Log();
    }

    public function setBriefPage($brief, $client, $audience)
    {
        $this->setBrief($brief);
        $this->setClient($client);
        $this->setAudience($audience);
    }

    public function setDesignPage($design, $devices, $graphicmaterials, $designfocus, $existingelements)
    {
        $this->setDesign($design);
        $this->setDevices($devices);
        $this->setGraphicmaterials($graphicmaterials);
        $this->setDesignfocus($designfocus);
        $this->setExistingelements($existingelements);
    }

    public function setInternetShopPage($internetshop, $paymentmethods)
    {

        $this->setInternetShop($internetshop);
        $this->setPaymentmethods($paymentmethods);

    }

    public function setExtraFeaturesPage($extrafeatures, $sitesupport, $marketing, $modules)
    {

        $this->setExtraFeatures($extrafeatures);
        $this->setSitesupport($sitesupport);
        $this->setMarketing($marketing);
        $this->setModules($modules);

    }


    public function setBrief($brief)
    {
        $this->brief->setVariables($brief);
    }

    public function setClient($client)
    {
        $this->brief->getClient()->setVariables($client);
    }

    public function setAudience($audience)
    {
        $this->brief->getAudience()->setVariables($audience);
    }

    public function setDesign($design)
    {
        $this->brief->getDesign()->setVariables($design);
    }

    public function setDevices($devices)
    {
        $this->brief->getDesign()->getDevices()->setVariables($devices);
    }

    public function setGraphicmaterials($graphicmaterials)
    {
        $this->brief->getDesign()->getGraphicMaterials()->setVariables($graphicmaterials);
    }

    public function setDesignfocus($designfocus)
    {
        $this->brief->getDesign()->getDesignFocus()->setVariables($designfocus);
    }

    public function setExistingelements($existingelements)
    {
        $this->brief->getDesign()->getExistingElements()->setVariables($existingelements);
    }

    public function setInternetShop($internetshop)
    {
        $this->brief->getInternetShop()->setVariables($internetshop);
    }

    public function setPaymentmethods($paymentmethods)
    {
        $this->brief->getInternetShop()->getPaymentMethods()->setVariables($paymentmethods);
    }

    public function setWebSitePage($website, $sitecontent)
    {
        $this->setWebSite($website);
        $this->setSitecontent($sitecontent);
    }

    public function setWebSite($website)
    {
        $this->brief->getWebSite()->setVariables($website);

    }

    public function setSitecontent($sitecontent)
    {
        $this->brief->getWebSite()->getSiteContent()->setVariables($sitecontent);

    }

    public function setExtraFeatures($extrafeatures)
    {
        $this->brief->getExtraFeatures()->setVariables($extrafeatures);

    }

    public function setSitesupport($sitesupport)
    {
        $this->brief->getExtraFeatures()->getSiteSupport()->setVariables($sitesupport);
    }

    public function setMarketing($marketing)
    {
        $this->brief->getExtraFeatures()->getMarketing()->setVariables($marketing);

    }

    public function setModules($modules)
    {
        $this->brief->getExtraFeatures()->getModules()->setVariables($modules);
    }


    private function CreateInsert($tableClass)
    {
        $data = $tableClass->getVariables();
        $query = "INSERT INTO " . $tableClass->getTable() . " (";


        foreach ($data as $key => $value)
            $query .= " {$key},";


        //Removes the unwanted ,
        $query .= ")";
        $query = str_replace(",)", ",id) VALUES(", $query);


        foreach ($data as $value)
            $query .= is_string($value) ? "\"{$value}\"," : "{$value},";


        $query .= ")";
        $query = str_replace(",)", ",LAST_INSERT_ID())", $query);


        return $query;
    }

    private function CreateSelect($id, $tableClass)
    {
        $data = $tableClass->getVariables();

        $query = "SELECT";

        foreach ($data as $key => $value)
            $query .= " {$key},";

        //Removes the unwanted ,
        $query .= "FROM";
        $query = str_replace(",FROM", " FROM " . $tableClass->getTable(), $query);
        $query .= " WHERE id = " . $id;


        $data = $this->db->query($query)[0];

        return $data;
    }

    private function CreateUpdate($id, $tableClass)
    {
        $data = $tableClass->getVariables();


        $query = "UPDATE " . $tableClass->getTable() . " SET ";


        foreach ($data as $key => $value)
            $query .= " {$key} = " . (is_string($value) ? "\"{$value}\"," : "{$value},");


        //Removes the unwanted ,
        $query .= " WHERE";
        $query = str_replace(", WHERE", " WHERE id=" . $id, $query);

        return $query;
    }

    public function DELETE($project_name, $email)
    {


        $client_id = $this->db->query("SELECT id FROM br_client where email =  \"" . $email . "\"");

        if ($client_id != null) {

            $query = "DELETE FROM br_brief WHERE project_name = \"" . $project_name
                . "\" AND br_brief.id  = " . $client_id[0]['id'];

            $this->db->query($query);

        } else {
            return "The email " . $email . " is not in database.";
        }

        return "Succes";
    }

    public function INSERT()
    {

        $this->db->query($this->CreateInsert($this->brief));

        foreach ($this->brief->objects as $key => $value) {
            if (!$value->isNull()) {

                $this->db->query($this->CreateInsert($value));

                if (property_exists(get_class($value), "objects")) {
                    foreach ($value->objects as $k => $v) {
                        if (!$v->isNull())
                            $this->db->query($this->CreateInsert($v));

                    }
                }
            }
        }


    }

    public function UPDATE($project_name, $email)
    {

        $client_id = $this->db->query("SELECT id FROM br_client where email =  \"" . $email . "\"");

        if ($client_id != null) {

            $query = "SELECT  id, project_name FROM br_brief where br_brief.project_name = \"" . $project_name .
                "\" AND id  = " . $client_id[0]['id'];


            $data = $this->db->query($query);

            if ($data != null) {
                $brief_id = $data[0]['id'];


                $this->db->query($this->CreateUpdate($brief_id, $this->brief));

                foreach ($this->brief->objects as $key => $value) {
                    if (!$value->isNull()) {
                        $this->db->query($this->CreateUpdate($brief_id, $value));

                        if (property_exists(get_class($value), "objects")) {
                            foreach ($value->objects as $k => $v) {
                                if (!$v->isNull())
                                    $this->db->query($this->CreateUpdate($brief_id, $v));
                            }
                        }
                    }
                }


            } else {
                return "The project " . $project_name . " is not in database.";
            }

        } else {
            return "The email " . $email . " is not in database.";
        }

        return "Succes";

    }

    public function SELECT_BRIEF($project_name, $email)
    {

        $client_id = $this->db->query("SELECT id FROM br_client where email =  \"" . $email . "\"");

        if ($client_id != null) {

            $query = "SELECT  id, task, site_type, timeframe, budget, site_support, work_activities, project_name
                 FROM br_brief  where br_brief.project_name = \"" . $project_name .
                "\" AND id  = " . $client_id[0]['id'];

            $data = $this->db->query($query);

            if ($data != null) {

                $this->brief->setVariables($data[0]);
                $brief_id = $this->brief->getVariable('id');

                foreach ($this->brief->objects as $key => $value) {

                    $this->brief->objects[$key]->setVariables($this->CreateSelect($brief_id, $value));

                    if (property_exists(get_class($value), "objects")) {
                        foreach ($value->objects as $k => $v) {
                            $v->setVariables($this->CreateSelect($brief_id, $v));

                        }
                    }

                }


            } else {
                return "The project " . $project_name . " is not in database.";
            }

        } else {
            return "The email " . $email . " is not in database.";
        }

        return "Succes";

    }

}