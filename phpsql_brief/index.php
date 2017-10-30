<?php
require("Db.class.php");
require_once("brief/BriefManager.php");
require_once("brief/Brief.php");
require_once("brief/Audience.php");
require_once("brief/Client.php");
require_once("brief/Design.php");
require_once("brief/DesignFocus.php");
require_once("brief/Devices.php");
require_once("brief/ExistingElements.php");
require_once("brief/ExtraFeatures.php");
require_once("brief/GraphicMaterials.php");
require_once("brief/InternetShop.php");
require_once("brief/Marketing.php");
require_once("brief/Modules.php");
require_once("brief/PaymentMethods.php");
require_once("brief/SiteContent.php");
require_once("brief/SiteSupport.php");
require_once("brief/WebSite.php");


echo 'Started';

// Creates the instance
$db = new DB();

$briefManager = new BriefManager($db);


$brief = array('task' => 1, 'site_type' => 1, 'timeframe' => 1, 'budget' => 1, 'site_support' => 1,
    'work_activities' => "Type of work", 'project_name' => "C");
$client = array('company' => "SEB", 'firstname' => "Tomas", 'lastname' => "Lindel", 'middlename' => "andersson",
    'phone' => "+46726459874", 'email' => "me@domonap.se");
$audience = array('consumers' => 1, 'representatives' => 1, 'organizations' => 1, 'fields' => 1, 'other' => 1);
$briefManager->setBriefPage($brief, $client, $audience);


$design = array('corporate_identity' => 1, 'require_design' => 1, 'markup' => 1, 'site_style' => "Text", 'page_differents' => "Text");
$devices = array('desktop' => 1, 'ipad' => 1, 'phone' => 1);
$graphicmaterials = array('free' => 1, 'paid' => 1, 'photo_session' => 1, 'creation_unique' => 1);
$designfocus = array('slogan' => 1, 'about' => 1, 'services' => 1, 'location' => 1, 'new_products' => 1, 'uniqueness' => 1, 'price' => 1, 'other' => 4);
$existingelements = array('domain' => 1, 'brandbook' => 1, 'logotype' => 1, 'images' => 1, 'information_materials' => 1, 'media' => 1);
$briefManager->setDesignPage($design, $devices, $graphicmaterials, $designfocus, $existingelements);


$internetshop = array('product' => 1, 'categories' => 1, 'nesting_levels' => 1, 'total_items' => 1, 'client_registration' => 1,
    'open_basket' => 1, 'client_history' => 1, 'discounts' => 1, 'discounts_flyers' => 1,
    'currencies' => 1, 'site_traffic' => 1, 'orders_receive' => "Text", 'inventory' => "Text");
$paymentmethods = array('cashless' => 1, 'cash' => 1, 'advance' => 1, 'emoney' => 1, 'other' => 1);

$briefManager->setInternetShopPage($internetshop, $paymentmethods);

$website = array('site_goals' => 1, 'pages' => 1, 'registration' => 1, 'website_traffic' => 1, 'video_support' => 1, 'cms' => "Text");
$sitecontent = array('homepage' => 1, 'about' => 1, 'contacts' => 1, 'productpage' => 1, 'tariffs' => 1, 'faq' => 1
, 'events' => 1, 'polls' => 1, 'score' => 1);
$briefManager->setWebSitePage($website, $sitecontent);


$extrafeatures = array('brandbook' => 1, 'logotype' => 1, 'content_managment' => 1, 'copywriting' => 1, 'seo' => 1, 'language' => 1);
$sitesupport = array('technical' => 1, 'security' => 1, 'content' => 1, 'editing_site' => 1, 'development' => 1, 'consulations' => 1, 'maintenance' => 1);
$marketing = array('install' => 1, 'configure' => 1, 'emailing' => 1, 'sms' => 1, 'promotion' => 1, 'integration' => 1);
$modules = array('callback' => 1, 'smm' => 1, 'form' => 1, 'countdown' => 1, 'feedback' => 1, 'fillable_forms' => 1,
    'forum' => 1, 'gallery' => 1, 'chat' => 1, 'videogallery' => 1, 'search' => 1, 'blog' => 1
, 'subscription' => 1, 'catalog' => 1, 'reviews' => 1, 'portfolio' => 1, 'news' => 1);
$briefManager->setExtraFeaturesPage($extrafeatures, $sitesupport, $marketing, $modules);


//Delete old brief with same project name and email
$briefManager->DELETE("Onsdag 2", "me@domonap.se");
$briefManager->INSERT();


$briefManager->SELECT_BRIEF("C", "me@domonap.se");

$brief = array('task' => 1, 'site_type' => 1, 'timeframe' => 1, 'budget' => 1, 'site_support' => 1,
    'work_activities' => "Some work", 'project_name' => "A");
$client = array('company' => "DOMONAP", 'firstname' => "MADONA", 'lastname' => "Kvaratskheliya", 'middlename' => "Aleksandrova",
    'phone' => "+465555555555", 'email' => "gia80@live.se");
$audience = array('consumers' => 0, 'representatives' => 0, 'organizations' => 0, 'fields' => 0, 'other' => 0);
$briefManager->setBriefPage($brief, $client, $audience);

$briefManager->UPDATE("A", "gia80@live.se");

echo '<br />';
echo 'Finnish';


print_brief($briefManager->brief);

function print_brief($brief)
{

    head(get_class($brief));

    foreach ($brief->getVariables() as $kp1 => $vp1) {
        text($kp1, $vp1);
    }


    foreach ($brief->objects as $key => $value) {
        if (!$value->isNull()) {
            head(get_class($value));

            foreach ($value->getVariables() as $kp1 => $vp1) {
                text($kp1, $vp1);
            }


            if (property_exists(get_class($value), "objects")) {
                foreach ($value->objects as $k => $v) {
                    if (!$v->isNull()) {
                        head(get_class($v));
                        foreach ($v->getVariables() as $kp => $vp)
                            text($kp, $vp);
                    }

                }
            }
        }
    }

}

function head($header = "")
{
    echo '<pre>';
    echo '<h1>' . $header . '</h1>';

}

function text($key, $value)
{
    echo '<br />';
    echo $key . " = " . $value;
    echo '<br />';
}


?>
