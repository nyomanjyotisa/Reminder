<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/group_events.php"));
$tableEvents["group"] = new eventclass_group;
include_once(getabspath("include/personal_channel_events.php"));
$tableEvents["personal_channel"] = new eventclass_personal_channel;
include_once(getabspath("include/personal_agenda_repeat_date_events.php"));
$tableEvents["personal_agenda_repeat_date"] = new eventclass_personal_agenda_repeat_date;
include_once(getabspath("include/personal_agenda_events.php"));
$tableEvents["personal_agenda"] = new eventclass_personal_agenda;
include_once(getabspath("include/lookup_token_events.php"));
$tableEvents["lookup_token"] = new eventclass_lookup_token;
include_once(getabspath("include/group_operation_off_events.php"));
$tableEvents["group_operation_off"] = new eventclass_group_operation_off;
include_once(getabspath("include/group_product_events.php"));
$tableEvents["group_product"] = new eventclass_group_product;
include_once(getabspath("include/group_member_order_detail_events.php"));
$tableEvents["group_member_order_detail"] = new eventclass_group_member_order_detail;
include_once(getabspath("include/group_member_order_events.php"));
$tableEvents["group_member_order"] = new eventclass_group_member_order;
include_once(getabspath("include/group_member_agenda_subscriber_events.php"));
$tableEvents["group_member_agenda_subscriber"] = new eventclass_group_member_agenda_subscriber;
include_once(getabspath("include/group_member_events.php"));
$tableEvents["group_member"] = new eventclass_group_member;
include_once(getabspath("include/group_agenda_private_events.php"));
$tableEvents["group_agenda_private"] = new eventclass_group_agenda_private;
include_once(getabspath("include/group_agenda_events.php"));
$tableEvents["group_agenda"] = new eventclass_group_agenda;
include_once(getabspath("include/group_agenda_repeat_date_events.php"));
$tableEvents["group_agenda_repeat_date"] = new eventclass_group_agenda_repeat_date;
include_once(getabspath("include/group_member_checkin_events.php"));
$tableEvents["group_member_checkin"] = new eventclass_group_member_checkin;
include_once(getabspath("include/group_agenda_type_events.php"));
$tableEvents["group_agenda_type"] = new eventclass_group_agenda_type;
include_once(getabspath("include/validate_checkin_events.php"));
$tableEvents["validate_checkin"] = new eventclass_validate_checkin;
include_once(getabspath("include/validate_order_events.php"));
$tableEvents["validate_order"] = new eventclass_validate_order;
include_once(getabspath("include/review_order_events.php"));
$tableEvents["review_order"] = new eventclass_review_order;
include_once(getabspath("include/review_checkin_events.php"));
$tableEvents["review_checkin"] = new eventclass_review_checkin;
include_once(getabspath("include/update_order_progess_events.php"));
$tableEvents["update_order_progess"] = new eventclass_update_order_progess;
include_once(getabspath("include/group_agenda1_events.php"));
$tableEvents["group_agenda1"] = new eventclass_group_agenda1;
include_once(getabspath("include/member_checkin_events.php"));
$tableEvents["member checkin"] = new eventclass_member_checkin;
include_once(getabspath("include/group4_events.php"));
$tableEvents["group4"] = new eventclass_group4;
include_once(getabspath("include/payment_events.php"));
$tableEvents["payment"] = new eventclass_payment;
include_once(getabspath("include/lookup_stok_events.php"));
$tableEvents["lookup_stok"] = new eventclass_lookup_stok;
include_once(getabspath("include/product_for_order_events.php"));
$tableEvents["product_for_order"] = new eventclass_product_for_order;
include_once(getabspath("include/your_group_events.php"));
$tableEvents["your_group"] = new eventclass_your_group;
include_once(getabspath("include/new_group_request_events.php"));
$tableEvents["new_group_request"] = new eventclass_new_group_request;
include_once(getabspath("include/group_product2_events.php"));
$tableEvents["group_product2"] = new eventclass_group_product2;
include_once(getabspath("include/group5_events.php"));
$tableEvents["group5"] = new eventclass_group5;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>