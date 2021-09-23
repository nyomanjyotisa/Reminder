<?php
$tdataproduct_for_order = array();
$tdataproduct_for_order[".searchableFields"] = array();
$tdataproduct_for_order[".ShortName"] = "product_for_order";
$tdataproduct_for_order[".OwnerID"] = "";
$tdataproduct_for_order[".OriginalTable"] = "product_for_order";


$tdataproduct_for_order[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataproduct_for_order[".originalPagesByType"] = $tdataproduct_for_order[".pagesByType"];
$tdataproduct_for_order[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataproduct_for_order[".originalPages"] = $tdataproduct_for_order[".pages"];
$tdataproduct_for_order[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataproduct_for_order[".originalDefaultPages"] = $tdataproduct_for_order[".defaultPages"];

//	field labels
$fieldLabelsproduct_for_order = array();
$fieldToolTipsproduct_for_order = array();
$pageTitlesproduct_for_order = array();
$placeHoldersproduct_for_order = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct_for_order["English"] = array();
	$fieldToolTipsproduct_for_order["English"] = array();
	$placeHoldersproduct_for_order["English"] = array();
	$pageTitlesproduct_for_order["English"] = array();
	$fieldLabelsproduct_for_order["English"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsproduct_for_order["English"]["group_product_id"] = "";
	$placeHoldersproduct_for_order["English"]["group_product_id"] = "";
	$fieldLabelsproduct_for_order["English"]["group_id"] = "Group Id";
	$fieldToolTipsproduct_for_order["English"]["group_id"] = "";
	$placeHoldersproduct_for_order["English"]["group_id"] = "";
	$fieldLabelsproduct_for_order["English"]["product_type"] = "Product Type";
	$fieldToolTipsproduct_for_order["English"]["product_type"] = "";
	$placeHoldersproduct_for_order["English"]["product_type"] = "";
	$fieldLabelsproduct_for_order["English"]["product_name"] = "Product Name";
	$fieldToolTipsproduct_for_order["English"]["product_name"] = "";
	$placeHoldersproduct_for_order["English"]["product_name"] = "";
	$fieldLabelsproduct_for_order["English"]["stock_type"] = "Stock Type";
	$fieldToolTipsproduct_for_order["English"]["stock_type"] = "";
	$placeHoldersproduct_for_order["English"]["stock_type"] = "";
	$fieldLabelsproduct_for_order["English"]["stock"] = "Stock";
	$fieldToolTipsproduct_for_order["English"]["stock"] = "";
	$placeHoldersproduct_for_order["English"]["stock"] = "";
	$fieldLabelsproduct_for_order["English"]["order_type"] = "Order Type";
	$fieldToolTipsproduct_for_order["English"]["order_type"] = "";
	$placeHoldersproduct_for_order["English"]["order_type"] = "";
	$fieldLabelsproduct_for_order["English"]["price"] = "Price";
	$fieldToolTipsproduct_for_order["English"]["price"] = "";
	$placeHoldersproduct_for_order["English"]["price"] = "";
	$fieldLabelsproduct_for_order["English"]["curency"] = "Curency";
	$fieldToolTipsproduct_for_order["English"]["curency"] = "";
	$placeHoldersproduct_for_order["English"]["curency"] = "";
	$fieldLabelsproduct_for_order["English"]["image"] = "Image";
	$fieldToolTipsproduct_for_order["English"]["image"] = "";
	$placeHoldersproduct_for_order["English"]["image"] = "";
	$fieldLabelsproduct_for_order["English"]["group_member_order"] = "Group Member Order";
	$fieldToolTipsproduct_for_order["English"]["group_member_order"] = "";
	$placeHoldersproduct_for_order["English"]["group_member_order"] = "";
	if (count($fieldToolTipsproduct_for_order["English"]))
		$tdataproduct_for_order[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsproduct_for_order["Indonesian"] = array();
	$fieldToolTipsproduct_for_order["Indonesian"] = array();
	$placeHoldersproduct_for_order["Indonesian"] = array();
	$pageTitlesproduct_for_order["Indonesian"] = array();
	$fieldLabelsproduct_for_order["Indonesian"]["group_product_id"] = "Group Product Id";
	$fieldToolTipsproduct_for_order["Indonesian"]["group_product_id"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["group_product_id"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsproduct_for_order["Indonesian"]["group_id"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["group_id"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["product_type"] = "Product Type";
	$fieldToolTipsproduct_for_order["Indonesian"]["product_type"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["product_type"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["product_name"] = "Product Name";
	$fieldToolTipsproduct_for_order["Indonesian"]["product_name"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["product_name"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["stock_type"] = "Stock Type";
	$fieldToolTipsproduct_for_order["Indonesian"]["stock_type"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["stock_type"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["stock"] = "Stock";
	$fieldToolTipsproduct_for_order["Indonesian"]["stock"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["stock"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["order_type"] = "Order Type";
	$fieldToolTipsproduct_for_order["Indonesian"]["order_type"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["order_type"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["price"] = "Price";
	$fieldToolTipsproduct_for_order["Indonesian"]["price"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["price"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["curency"] = "Curency";
	$fieldToolTipsproduct_for_order["Indonesian"]["curency"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["curency"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["image"] = "Image";
	$fieldToolTipsproduct_for_order["Indonesian"]["image"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["image"] = "";
	$fieldLabelsproduct_for_order["Indonesian"]["group_member_order"] = "Group Member Order";
	$fieldToolTipsproduct_for_order["Indonesian"]["group_member_order"] = "";
	$placeHoldersproduct_for_order["Indonesian"]["group_member_order"] = "";
	if (count($fieldToolTipsproduct_for_order["Indonesian"]))
		$tdataproduct_for_order[".isUseToolTips"] = true;
}


	$tdataproduct_for_order[".NCSearch"] = true;



$tdataproduct_for_order[".shortTableName"] = "product_for_order";
$tdataproduct_for_order[".nSecOptions"] = 0;

$tdataproduct_for_order[".mainTableOwnerID"] = "";
$tdataproduct_for_order[".entityType"] = 6;
$tdataproduct_for_order[".connId"] = "notif_basic1_at_localhost";


$tdataproduct_for_order[".strOriginalTableName"] = "product_for_order";

	



$tdataproduct_for_order[".showAddInPopup"] = false;

$tdataproduct_for_order[".showEditInPopup"] = false;

$tdataproduct_for_order[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproduct_for_order[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproduct_for_order[".listAjax"] = false;
//	temporary
$tdataproduct_for_order[".listAjax"] = false;

	$tdataproduct_for_order[".audit"] = false;

	$tdataproduct_for_order[".locking"] = false;


$pages = $tdataproduct_for_order[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproduct_for_order[".edit"] = true;
	$tdataproduct_for_order[".afterEditAction"] = 1;
	$tdataproduct_for_order[".closePopupAfterEdit"] = 1;
	$tdataproduct_for_order[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproduct_for_order[".add"] = true;
$tdataproduct_for_order[".afterAddAction"] = 1;
$tdataproduct_for_order[".closePopupAfterAdd"] = 1;
$tdataproduct_for_order[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproduct_for_order[".list"] = true;
}



$tdataproduct_for_order[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproduct_for_order[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproduct_for_order[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproduct_for_order[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproduct_for_order[".printFriendly"] = true;
}



$tdataproduct_for_order[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproduct_for_order[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproduct_for_order[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproduct_for_order[".isUseAjaxSuggest"] = true;

$tdataproduct_for_order[".rowHighlite"] = true;





$tdataproduct_for_order[".ajaxCodeSnippetAdded"] = false;

$tdataproduct_for_order[".buttonsAdded"] = false;

$tdataproduct_for_order[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct_for_order[".isUseTimeForSearch"] = false;


$tdataproduct_for_order[".badgeColor"] = "7B68EE";


$tdataproduct_for_order[".allSearchFields"] = array();
$tdataproduct_for_order[".filterFields"] = array();
$tdataproduct_for_order[".requiredSearchFields"] = array();

$tdataproduct_for_order[".googleLikeFields"] = array();
$tdataproduct_for_order[".googleLikeFields"][] = "group_product_id";
$tdataproduct_for_order[".googleLikeFields"][] = "group_id";
$tdataproduct_for_order[".googleLikeFields"][] = "product_type";
$tdataproduct_for_order[".googleLikeFields"][] = "product_name";
$tdataproduct_for_order[".googleLikeFields"][] = "stock_type";
$tdataproduct_for_order[".googleLikeFields"][] = "stock";
$tdataproduct_for_order[".googleLikeFields"][] = "order_type";
$tdataproduct_for_order[".googleLikeFields"][] = "price";
$tdataproduct_for_order[".googleLikeFields"][] = "curency";
$tdataproduct_for_order[".googleLikeFields"][] = "image";
$tdataproduct_for_order[".googleLikeFields"][] = "group_member_order";




$tdataproduct_for_order[".printerPageOrientation"] = 0;
$tdataproduct_for_order[".nPrinterPageScale"] = 100;

$tdataproduct_for_order[".nPrinterSplitRecords"] = 40;

$tdataproduct_for_order[".geocodingEnabled"] = false;










$tdataproduct_for_order[".pageSize"] = 20;

$tdataproduct_for_order[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduct_for_order[".strOrderBy"] = $tstrOrderBy;

$tdataproduct_for_order[".orderindexes"] = array();


$tdataproduct_for_order[".sqlHead"] = "";
$tdataproduct_for_order[".sqlFrom"] = "";
$tdataproduct_for_order[".sqlWhereExpr"] = "";
$tdataproduct_for_order[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct_for_order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct_for_order[".arrGroupsPerPage"] = $arrGPP;

$tdataproduct_for_order[".highlightSearchResults"] = true;

$tableKeysproduct_for_order = array();
$tdataproduct_for_order[".Keys"] = $tableKeysproduct_for_order;


$tdataproduct_for_order[".hideMobileList"] = array();




//	group_product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_product_id";
	$fdata["GoodName"] = "group_product_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","group_product_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_product_id";

	
		$fdata["FullName"] = "group_product_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["group_product_id"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "group_product_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["FullName"] = "group_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["group_id"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "group_id";
//	product_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_type";
	$fdata["GoodName"] = "product_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","product_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "product_type";

	
		$fdata["FullName"] = "product_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["product_type"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "product_type";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["FullName"] = "product_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["product_name"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "product_name";
//	stock_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "stock_type";
	$fdata["GoodName"] = "stock_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","stock_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "stock_type";

	
		$fdata["FullName"] = "stock_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["stock_type"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "stock_type";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","stock");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stock";

	
		$fdata["FullName"] = "stock";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["stock"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "stock";
//	order_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order_type";
	$fdata["GoodName"] = "order_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","order_type");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "order_type";

	
		$fdata["FullName"] = "order_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["order_type"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "order_type";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","price");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "price";

	
		$fdata["FullName"] = "price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["price"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "price";
//	curency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "curency";
	$fdata["GoodName"] = "curency";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","curency");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "curency";

	
		$fdata["FullName"] = "curency";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["curency"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "curency";
//	image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "image";
	$fdata["GoodName"] = "image";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","image");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "image";

	
		$fdata["FullName"] = "image";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["image"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "image";
//	group_member_order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group_member_order";
	$fdata["GoodName"] = "group_member_order";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("product_for_order","group_member_order");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "group_member_order";

	
		$fdata["FullName"] = "group_member_order";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproduct_for_order["group_member_order"] = $fdata;
		$tdataproduct_for_order[".searchableFields"][] = "group_member_order";


$tables_data["product_for_order"]=&$tdataproduct_for_order;
$field_labels["product_for_order"] = &$fieldLabelsproduct_for_order;
$fieldToolTips["product_for_order"] = &$fieldToolTipsproduct_for_order;
$placeHolders["product_for_order"] = &$placeHoldersproduct_for_order;
$page_titles["product_for_order"] = &$pageTitlesproduct_for_order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["product_for_order"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["product_for_order"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/product_for_order_ops.php" ) );



	
		;

											

$tdataproduct_for_order[".sqlquery"] = $queryData_product_for_order;



include_once(getabspath("include/product_for_order_events.php"));
$tableEvents["product_for_order"] = new eventclass_product_for_order;
$tdataproduct_for_order[".hasEvents"] = true;

?>