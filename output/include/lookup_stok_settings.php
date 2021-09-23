<?php
$tdatalookup_stok = array();
$tdatalookup_stok[".searchableFields"] = array();
$tdatalookup_stok[".ShortName"] = "lookup_stok";
$tdatalookup_stok[".OwnerID"] = "";
$tdatalookup_stok[".OriginalTable"] = "lookup_stok";


$tdatalookup_stok[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalookup_stok[".originalPagesByType"] = $tdatalookup_stok[".pagesByType"];
$tdatalookup_stok[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalookup_stok[".originalPages"] = $tdatalookup_stok[".pages"];
$tdatalookup_stok[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalookup_stok[".originalDefaultPages"] = $tdatalookup_stok[".defaultPages"];

//	field labels
$fieldLabelslookup_stok = array();
$fieldToolTipslookup_stok = array();
$pageTitleslookup_stok = array();
$placeHolderslookup_stok = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslookup_stok["English"] = array();
	$fieldToolTipslookup_stok["English"] = array();
	$placeHolderslookup_stok["English"] = array();
	$pageTitleslookup_stok["English"] = array();
	$fieldLabelslookup_stok["English"]["lookup_stok_id"] = "Lookup Stok Id";
	$fieldToolTipslookup_stok["English"]["lookup_stok_id"] = "";
	$placeHolderslookup_stok["English"]["lookup_stok_id"] = "";
	$fieldLabelslookup_stok["English"]["group_id"] = "Group Id";
	$fieldToolTipslookup_stok["English"]["group_id"] = "";
	$placeHolderslookup_stok["English"]["group_id"] = "";
	$fieldLabelslookup_stok["English"]["product_name"] = "Product Name";
	$fieldToolTipslookup_stok["English"]["product_name"] = "";
	$placeHolderslookup_stok["English"]["product_name"] = "";
	$fieldLabelslookup_stok["English"]["stock"] = "Stock";
	$fieldToolTipslookup_stok["English"]["stock"] = "";
	$placeHolderslookup_stok["English"]["stock"] = "";
	if (count($fieldToolTipslookup_stok["English"]))
		$tdatalookup_stok[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelslookup_stok["Indonesian"] = array();
	$fieldToolTipslookup_stok["Indonesian"] = array();
	$placeHolderslookup_stok["Indonesian"] = array();
	$pageTitleslookup_stok["Indonesian"] = array();
	$fieldLabelslookup_stok["Indonesian"]["lookup_stok_id"] = "Lookup Stok Id";
	$fieldToolTipslookup_stok["Indonesian"]["lookup_stok_id"] = "";
	$placeHolderslookup_stok["Indonesian"]["lookup_stok_id"] = "";
	$fieldLabelslookup_stok["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipslookup_stok["Indonesian"]["group_id"] = "";
	$placeHolderslookup_stok["Indonesian"]["group_id"] = "";
	$fieldLabelslookup_stok["Indonesian"]["product_name"] = "Product Name";
	$fieldToolTipslookup_stok["Indonesian"]["product_name"] = "";
	$placeHolderslookup_stok["Indonesian"]["product_name"] = "";
	$fieldLabelslookup_stok["Indonesian"]["stock"] = "Stock";
	$fieldToolTipslookup_stok["Indonesian"]["stock"] = "";
	$placeHolderslookup_stok["Indonesian"]["stock"] = "";
	if (count($fieldToolTipslookup_stok["Indonesian"]))
		$tdatalookup_stok[".isUseToolTips"] = true;
}


	$tdatalookup_stok[".NCSearch"] = true;



$tdatalookup_stok[".shortTableName"] = "lookup_stok";
$tdatalookup_stok[".nSecOptions"] = 0;

$tdatalookup_stok[".mainTableOwnerID"] = "";
$tdatalookup_stok[".entityType"] = 0;
$tdatalookup_stok[".connId"] = "notif_basic1_at_localhost";


$tdatalookup_stok[".strOriginalTableName"] = "lookup_stok";

	



$tdatalookup_stok[".showAddInPopup"] = false;

$tdatalookup_stok[".showEditInPopup"] = false;

$tdatalookup_stok[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalookup_stok[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalookup_stok[".listAjax"] = false;
//	temporary
$tdatalookup_stok[".listAjax"] = false;

	$tdatalookup_stok[".audit"] = false;

	$tdatalookup_stok[".locking"] = false;


$pages = $tdatalookup_stok[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalookup_stok[".edit"] = true;
	$tdatalookup_stok[".afterEditAction"] = 0;
	$tdatalookup_stok[".closePopupAfterEdit"] = 1;
	$tdatalookup_stok[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatalookup_stok[".add"] = true;
$tdatalookup_stok[".afterAddAction"] = 0;
$tdatalookup_stok[".closePopupAfterAdd"] = 1;
$tdatalookup_stok[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatalookup_stok[".list"] = true;
}



$tdatalookup_stok[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalookup_stok[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalookup_stok[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalookup_stok[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalookup_stok[".printFriendly"] = true;
}



$tdatalookup_stok[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalookup_stok[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalookup_stok[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalookup_stok[".isUseAjaxSuggest"] = true;

$tdatalookup_stok[".rowHighlite"] = true;





$tdatalookup_stok[".ajaxCodeSnippetAdded"] = false;

$tdatalookup_stok[".buttonsAdded"] = false;

$tdatalookup_stok[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalookup_stok[".isUseTimeForSearch"] = false;


$tdatalookup_stok[".badgeColor"] = "CFAE83";


$tdatalookup_stok[".allSearchFields"] = array();
$tdatalookup_stok[".filterFields"] = array();
$tdatalookup_stok[".requiredSearchFields"] = array();

$tdatalookup_stok[".googleLikeFields"] = array();
$tdatalookup_stok[".googleLikeFields"][] = "lookup_stok_id";
$tdatalookup_stok[".googleLikeFields"][] = "group_id";
$tdatalookup_stok[".googleLikeFields"][] = "product_name";
$tdatalookup_stok[".googleLikeFields"][] = "stock";



$tdatalookup_stok[".tableType"] = "list";

$tdatalookup_stok[".printerPageOrientation"] = 0;
$tdatalookup_stok[".nPrinterPageScale"] = 100;

$tdatalookup_stok[".nPrinterSplitRecords"] = 40;

$tdatalookup_stok[".geocodingEnabled"] = false;










$tdatalookup_stok[".pageSize"] = 20;

$tdatalookup_stok[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalookup_stok[".strOrderBy"] = $tstrOrderBy;

$tdatalookup_stok[".orderindexes"] = array();


$tdatalookup_stok[".sqlHead"] = "SELECT lookup_stok_id,  	group_id,  	product_name,  	stock";
$tdatalookup_stok[".sqlFrom"] = "FROM lookup_stok";
$tdatalookup_stok[".sqlWhereExpr"] = "";
$tdatalookup_stok[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatalookup_stok[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalookup_stok[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalookup_stok[".arrGroupsPerPage"] = $arrGPP;

$tdatalookup_stok[".highlightSearchResults"] = true;

$tableKeyslookup_stok = array();
$tableKeyslookup_stok[] = "lookup_stok_id";
$tdatalookup_stok[".Keys"] = $tableKeyslookup_stok;


$tdatalookup_stok[".hideMobileList"] = array();




//	lookup_stok_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lookup_stok_id";
	$fdata["GoodName"] = "lookup_stok_id";
	$fdata["ownerTable"] = "lookup_stok";
	$fdata["Label"] = GetFieldLabel("lookup_stok","lookup_stok_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "lookup_stok_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lookup_stok_id";

	
	
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


	$tdatalookup_stok["lookup_stok_id"] = $fdata;
		$tdatalookup_stok[".searchableFields"][] = "lookup_stok_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "lookup_stok";
	$fdata["Label"] = GetFieldLabel("lookup_stok","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "group";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "group_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatalookup_stok["group_id"] = $fdata;
		$tdatalookup_stok[".searchableFields"][] = "group_id";
//	product_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_name";
	$fdata["GoodName"] = "product_name";
	$fdata["ownerTable"] = "lookup_stok";
	$fdata["Label"] = GetFieldLabel("lookup_stok","product_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "product_name";

	
		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatalookup_stok["product_name"] = $fdata;
		$tdatalookup_stok[".searchableFields"][] = "product_name";
//	stock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "stock";
	$fdata["GoodName"] = "stock";
	$fdata["ownerTable"] = "lookup_stok";
	$fdata["Label"] = GetFieldLabel("lookup_stok","stock");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "stock";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatalookup_stok["stock"] = $fdata;
		$tdatalookup_stok[".searchableFields"][] = "stock";


$tables_data["lookup_stok"]=&$tdatalookup_stok;
$field_labels["lookup_stok"] = &$fieldLabelslookup_stok;
$fieldToolTips["lookup_stok"] = &$fieldToolTipslookup_stok;
$placeHolders["lookup_stok"] = &$placeHolderslookup_stok;
$page_titles["lookup_stok"] = &$pageTitleslookup_stok;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lookup_stok"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lookup_stok"] = array();



	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="your_group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "your_group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["lookup_stok"][0] = $masterParams;
				$masterTablesData["lookup_stok"][0]["masterKeys"] = array();
	$masterTablesData["lookup_stok"][0]["masterKeys"][]="group_id";
				$masterTablesData["lookup_stok"][0]["detailKeys"] = array();
	$masterTablesData["lookup_stok"][0]["detailKeys"][]="group_id";
		
	
				$strOriginalDetailsTable="group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="new_group_request";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "new_group_request";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["lookup_stok"][1] = $masterParams;
				$masterTablesData["lookup_stok"][1]["masterKeys"] = array();
	$masterTablesData["lookup_stok"][1]["masterKeys"][]="group_id";
				$masterTablesData["lookup_stok"][1]["detailKeys"] = array();
	$masterTablesData["lookup_stok"][1]["detailKeys"][]="group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lookup_stok()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lookup_stok_id,  	group_id,  	product_name,  	stock";
$proto0["m_strFrom"] = "FROM lookup_stok";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "lookup_stok_id",
	"m_strTable" => "lookup_stok",
	"m_srcTableName" => "lookup_stok"
));

$proto6["m_sql"] = "lookup_stok_id";
$proto6["m_srcTableName"] = "lookup_stok";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "lookup_stok",
	"m_srcTableName" => "lookup_stok"
));

$proto8["m_sql"] = "group_id";
$proto8["m_srcTableName"] = "lookup_stok";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_name",
	"m_strTable" => "lookup_stok",
	"m_srcTableName" => "lookup_stok"
));

$proto10["m_sql"] = "product_name";
$proto10["m_srcTableName"] = "lookup_stok";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "stock",
	"m_strTable" => "lookup_stok",
	"m_srcTableName" => "lookup_stok"
));

$proto12["m_sql"] = "stock";
$proto12["m_srcTableName"] = "lookup_stok";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "lookup_stok";
$proto15["m_srcTableName"] = "lookup_stok";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "lookup_stok_id";
$proto15["m_columns"][] = "group_id";
$proto15["m_columns"][] = "product_name";
$proto15["m_columns"][] = "stock";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "lookup_stok";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "lookup_stok";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lookup_stok";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lookup_stok = createSqlQuery_lookup_stok();


	
		;

				

$tdatalookup_stok[".sqlquery"] = $queryData_lookup_stok;



include_once(getabspath("include/lookup_stok_events.php"));
$tableEvents["lookup_stok"] = new eventclass_lookup_stok;
$tdatalookup_stok[".hasEvents"] = true;

?>