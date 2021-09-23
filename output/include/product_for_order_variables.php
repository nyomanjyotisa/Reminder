<?php
$strTableName="product_for_order";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="product_for_order";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("product_for_order");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["product_for_order"];

$reportCaseSensitiveGroupFields = false;

?>