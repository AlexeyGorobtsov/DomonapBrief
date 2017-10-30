<?php
require("Db.class.php");
require("easyCRUD/Brief.class.php");

// Creates the instance
$db = new DB();

//    SELECT id, company, firstname, lastname, middlename, phone, email
//FROM `domonap`.`client`;


// Instantiate the person class
$brief = new Brief();


$brief->setWork_activities("?????????/??????????/?????????? ??????");
$brief->setTask("??????? ????? ???");
$brief->setSite_type("???? ???????? ????????");
$brief->setTimeframe("1 -3 ??????");
$brief->setBudget("100.000 - 200.000 ??????");
$brief->setSite_support("??????? ?? ???? ???? ???????????");

/************************************************/
$client = new Client();
$client->setCompany("DOMONAP");
$client->setEmail("info@domonap.ru");
$client->variables["company"] = "info2@domonap.ru";
$client->setFirstname("Gia");
$client->setLastname("Kvaratskheliya");
$client->setMiddlename("Elgudjaevich");
$client->setPhone("+79859818816");
$brief->setClient($client);
/************************************************/
$audience = new Audience();
$audience->setConsumers(1);
$audience->setRepresentatives(0);
$audience->setOrganizations(0);
$audience->setFields(1);
$audience->setOther(0);
$brief->setAudience($audience);
/************************************************/
$design = new Design();
$design->setCorporate_identity("????? ??????????? ? ????");
$design->setSite_style("??????? ????????????? ??????");
$design->setRequire_design("? ??? ??? ??????? ??????? ???????");
$design->setMarkup("?????????? ???????");
$design->setPage_differents("??, ????????, ??????? ?????????? ???????????? ??????-?????? ??? ???????, ??? ? ?????????? ??????? ?????");

$device = new Devices();
$device->setDesktop(1);
$device->setIpad(0);
$device->setPhone(1);
$design->setDevices($device);


$graphicMaterials = new GraphicMaterials();
$graphicMaterials->setFree(1);
$graphicMaterials->setPaid(0);
$graphicMaterials->setPhoto_session(0);
$graphicMaterials->setCreation_unique(1);
$design->setGaphicMaterials($graphicMaterials);

$designFocus = new DesignFocus();
$designFocus->setSlogan(1);
$designFocus->setAbout(0);
$designFocus->setServices(1);
$designFocus->setLocation(1);
$designFocus->setNew_products(0);
$designFocus->setUniqueness(0);
$designFocus->setPrice(1);
$designFocus->setOther(1);
$design->setDesignFocus($designFocus);

$existingElements = new ExistingElements();
$existingElements->setDomain(1);
$existingElements->setBrandbook(1);
$existingElements->setLogotype(0);
$existingElements->setImages(0);
$existingElements->setInformation_materials(0);
$existingElements->setMedia(1);
$design->setExistingElements($existingElements);
$brief->setDesign($design);

/************************************************/

$internetShop = new InternetShop();
$internetShop->setProduct("???????? ??????");
$internetShop->setCategories("?? 20 ?? 50");
$internetShop->setNesting_levels("?? 1 ?? 10");
$internetShop->setTotal_items("????? 500 ???????");
$internetShop->setClient_registration("");
$internetShop->setOpen_basket("?????????");
$internetShop->setClient_history("??");
$internetShop->setDiscounts("???");
$internetShop->setDiscounts_flyers("???");
$internetShop->setCurrencies("?????????? ?????");
$internetShop->setOrders_receive("?? E-mail ????????? ????????? ???????????, ? ????????? ??????? ??????? ?? ?????");
$internetShop->setInventory("???? ????? ??????? ?????? ??????????????? ????? ??????? ????????-????????");
$internetShop->setSite_traffic("?? 300 ???????");

$paymentMethods = new PaymentMethods();
$paymentMethods->setCshless(1);
$paymentMethods->setCash(0);
$paymentMethods->setAdvance(1);
$paymentMethods->setEmoney(1);
$paymentMethods->setOther(0);
$internetShop->setPaymentMethods($paymentMethods);

$brief->setInternetShop($internetShop);

$webSite = new WebSite();
$webSite->setSite_goals("???????? ??????????");
$webSite->setCms("WordPress");
$webSite->setPages("?? 10 ?? 20");
$webSite->setRegistration("?????");
$webSite->setWebsite_traffic("?? 50 ?? 100 ???????;");
$webSite->setVideo_support("?? ?????");

$siteContent = new SiteContent();
$siteContent->setHomepage(1);
$siteContent->setAbout(0);
$siteContent->setContacts(1);
$siteContent->setProductpage(1);
$siteContent->setTariffs(0);
$siteContent->setFaq(0);
$siteContent->setEvents(1);
$siteContent->setPolls(1);
$siteContent->setScore(0);
$webSite->setSiteContent($siteContent);

$brief->setWebSite($webSite);


$extraFeatures = new ExtraFeatures();
$extraFeatures->setBrandbook(1);
$extraFeatures->setLogotype("???????? ?????????????");
$extraFeatures->setContent_managment("???? ???????? ???? ???????????");
$extraFeatures->setCopywriting(0);
$extraFeatures->setSeo("SEO \"??? ????\" ?? ???????");

$modules = new Modules();
$modules->setCallback(1);
$modules->setSmm(1);
$modules->setForm(1);
$modules->setCountdown(1);
$modules->setFeedback(1);
$modules->setFillable_forms(1);
$modules->setForum(1);
$modules->setGallery(1);
$modules->setChat(1);
$modules->setVideogallery(1);
$modules->setSearch(1);
$modules->setBlog(1);
$modules->setSubscription(1);
$modules->setCatalog(1);
$modules->setReviews(1);
$modules->setPortfolio(1);
$modules->setNews(1);
$extraFeatures->setModules($modules);


$marketing = new Marketing(1);
$marketing->setInstall(0);
$marketing->setConfigure(1);
$marketing->setEmailing(1);
$marketing->setSms(0);
$marketing->setPromotion(1);
$marketing->setIntegration(1);
$extraFeatures->setMarketing($marketing);

$siteSupport = new SiteSupport(0);
$siteSupport->setTechnical(1);
$siteSupport->setSecurity(1);
$siteSupport->setContent(0);
$siteSupport->setEditing_site(0);
$siteSupport->setDevelopment(0);
$siteSupport->setConsulations(1);
$siteSupport->setMaintenance(1);
$extraFeatures->setSiteSupport($siteSupport);
$brief->setExtraFeatures($extraFeatures);


$data = $db->query("SELECT * FROM `domonap`.`client`");

//$brief	 =     $db->query("SELECT * FROM brief");


foreach ($data as $d) {
    echo $d["id"] . ' ' . $d["company"] . ' ' . $d["firstname"] . ' ' . $d["lastname"] . ' ' . $d["middlename"] . ' ' . $d["phone"] . ' ' . $d["email"];
    echo '<br />';
}


//$db->query("SELECT * FROM client WHERE idClient = 1", array("firstname"=>"John","age"=>"19"));


//$res = "SELECT email FROM domonap.client WHERE idClient = 1";
//        $data = $this->db->row($res);
//        foreach($data as $name)
//        {
//            echo $name["email"];

//        }


//    // 3 ways to bind parameters :

//    // 1. Read friendly method
//    $db->bind("firstname","John");
//    $db->bind("age","19");

//    // 2. Bind more parameters
//    $db->bindMore(array("firstname"=>"John","age"=>"19"));

//    // 3. Or just give the parameters to the method
//    $db->query("SELECT * FROM Persons WHERE firstname = :firstname AND age = :age", array("firstname"=>"John","age"=>"19"));

//    //  Fetching data
//    $person 	 =     $db->query("SELECT * FROM Persons");

//    // If you want another fetchmode just give it as parameter
//    $persons_num =     $db->query("SELECT * FROM Persons", null, PDO::FETCH_NUM);

//    // Fetching single value
//    $firstname	 =     $db->single("SELECT firstname FROM Persons WHERE Id = :id ", array('id' => '3' ) );

//    // Single Row
//    $id_age 	 =     $db->row("SELECT Id, Age FROM Persons WHERE firstname = :f", array("f"=>"Zoe"));

//    // Single Row with numeric index
//    $id_age_num  =     $db->row("SELECT Id, Age FROM Persons WHERE firstname = :f", array("f"=>"Zoe"),PDO::FETCH_NUM);

//    // Column, numeric index
//    $ages  		 =     $db->column("SELECT age FROM Persons");

//    // The following statemens will return the affected rows

//    // Update statement
//    $update		=  $db->query("UPDATE Persons SET firstname = :f WHERE Id = :id",array("f"=>"Johny","id"=>"1"));

//    // Insert statement
////	$insert	 	=  $db->query("INSERT INTO Persons(Firstname,Age) 	VALUES(:f,:age)",array("f"=>"Vivek","age"=>"20"));

//    // Delete statement
////	$delete	 	=  $db->query("DELETE FROM Persons WHERE Id = :id",array("id"=>"6"));

//    function d($v, $t = "")
//    {
//        echo '<pre>';
//        echo '<h1>' . $t. '</h1>';
//        var_dump($v);
//        echo '</pre>';
//    }
//    //d($person, "All persons");
//    d($id_age, "Single Row, Id and Age");
//    d($firstname, "Fetch Single value, The firstname");
//    d($ages, "Fetch Column, Numeric Index");

?>
