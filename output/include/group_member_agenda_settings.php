<?php
$tdatagroup_member_agenda = array();
$tdatagroup_member_agenda[".searchableFields"] = array();
$tdatagroup_member_agenda[".ShortName"] = "group_member_agenda";
$tdatagroup_member_agenda[".OwnerID"] = "member_id";
$tdatagroup_member_agenda[".OriginalTable"] = "group_member_agenda";


$tdatagroup_member_agenda[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup_member_agenda[".originalPagesByType"] = $tdatagroup_member_agenda[".pagesByType"];
$tdatagroup_member_agenda[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup_member_agenda[".originalPages"] = $tdatagroup_member_agenda[".pages"];
$tdatagroup_member_agenda[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup_member_agenda[".originalDefaultPages"] = $tdatagroup_member_agenda[".defaultPages"];

//	field labels
$fieldLabelsgroup_member_agenda = array();
$fieldToolTipsgroup_member_agenda = array();
$pageTitlesgroup_member_agenda = array();
$placeHoldersgroup_member_agenda = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup_member_agenda["English"] = array();
	$fieldToolTipsgroup_member_agenda["English"] = array();
	$placeHoldersgroup_member_agenda["English"] = array();
	$pageTitlesgroup_member_agenda["English"] = array();
	$fieldLabelsgroup_member_agenda["English"]["group_member_agenda_id"] = "Group Member Agenda Id";
	$fieldToolTipsgroup_member_agenda["English"]["group_member_agenda_id"] = "";
	$placeHoldersgroup_member_agenda["English"]["group_member_agenda_id"] = "";
	$fieldLabelsgroup_member_agenda["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsgroup_member_agenda["English"]["group_member_id"] = "";
	$placeHoldersgroup_member_agenda["English"]["group_member_id"] = "";
	$fieldLabelsgroup_member_agenda["English"]["member_id"] = "Member Name";
	$fieldToolTipsgroup_member_agenda["English"]["member_id"] = "";
	$placeHoldersgroup_member_agenda["English"]["member_id"] = "";
	$fieldLabelsgroup_member_agenda["English"]["group_agenda_id"] = "Group Agenda";
	$fieldToolTipsgroup_member_agenda["English"]["group_agenda_id"] = "";
	$placeHoldersgroup_member_agenda["English"]["group_agenda_id"] = "";
	$fieldLabelsgroup_member_agenda["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_agenda["English"]["group_id"] = "";
	$placeHoldersgroup_member_agenda["English"]["group_id"] = "";
	$fieldLabelsgroup_member_agenda["English"]["group_id1"] = "Group Id1";
	$fieldToolTipsgroup_member_agenda["English"]["group_id1"] = "";
	$placeHoldersgroup_member_agenda["English"]["group_id1"] = "";
	$pageTitlesgroup_member_agenda["English"]["edit"] = "Edit Group Member Agenda {%member_id}";
	$pageTitlesgroup_member_agenda["English"]["view"] = "Group Member Agenda {%member_id}";
	if (count($fieldToolTipsgroup_member_agenda["English"]))
		$tdatagroup_member_agenda[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup_member_agenda["Indonesian"] = array();
	$fieldToolTipsgroup_member_agenda["Indonesian"] = array();
	$placeHoldersgroup_member_agenda["Indonesian"] = array();
	$pageTitlesgroup_member_agenda["Indonesian"] = array();
	$fieldLabelsgroup_member_agenda["Indonesian"]["group_member_agenda_id"] = "Id Agenda Member Group ";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["group_member_agenda_id"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["group_member_agenda_id"] = "";
	$fieldLabelsgroup_member_agenda["Indonesian"]["group_member_id"] = "Id Member Group ";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["group_member_id"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["group_member_id"] = "";
	$fieldLabelsgroup_member_agenda["Indonesian"]["member_id"] = "Nama Member";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["member_id"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["member_id"] = "";
	$fieldLabelsgroup_member_agenda["Indonesian"]["group_agenda_id"] = "Agenda Group ";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["group_agenda_id"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["group_agenda_id"] = "";
	$fieldLabelsgroup_member_agenda["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["group_id"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup_member_agenda["Indonesian"]["group_id1"] = "Group Id1";
	$fieldToolTipsgroup_member_agenda["Indonesian"]["group_id1"] = "";
	$placeHoldersgroup_member_agenda["Indonesian"]["group_id1"] = "";
	if (count($fieldToolTipsgroup_member_agenda["Indonesian"]))
		$tdatagroup_member_agenda[".isUseToolTips"] = true;
}


	$tdatagroup_member_agenda[".NCSearch"] = true;



$tdatagroup_member_agenda[".shortTableName"] = "group_member_agenda";
$tdatagroup_member_agenda[".nSecOptions"] = 2;

$tdatagroup_member_agenda[".mainTableOwnerID"] = "member_id";
$tdatagroup_member_agenda[".entityType"] = 0;
$tdatagroup_member_agenda[".connId"] = "notif_basic1_at_localhost";


$tdatagroup_member_agenda[".strOriginalTableName"] = "group_member_agenda";

	



$tdatagroup_member_agenda[".showAddInPopup"] = false;

$tdatagroup_member_agenda[".showEditInPopup"] = false;

$tdatagroup_member_agenda[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup_member_agenda[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup_member_agenda[".listAjax"] = false;
//	temporary
$tdatagroup_member_agenda[".listAjax"] = false;

	$tdatagroup_member_agenda[".audit"] = false;

	$tdatagroup_member_agenda[".locking"] = false;


$pages = $tdatagroup_member_agenda[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup_member_agenda[".edit"] = true;
	$tdatagroup_member_agenda[".afterEditAction"] = 0;
	$tdatagroup_member_agenda[".closePopupAfterEdit"] = 1;
	$tdatagroup_member_agenda[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup_member_agenda[".add"] = true;
$tdatagroup_member_agenda[".afterAddAction"] = 0;
$tdatagroup_member_agenda[".closePopupAfterAdd"] = 1;
$tdatagroup_member_agenda[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup_member_agenda[".list"] = true;
}



$tdatagroup_member_agenda[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup_member_agenda[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup_member_agenda[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup_member_agenda[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup_member_agenda[".printFriendly"] = true;
}



$tdatagroup_member_agenda[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup_member_agenda[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup_member_agenda[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup_member_agenda[".isUseAjaxSuggest"] = true;

$tdatagroup_member_agenda[".rowHighlite"] = true;





$tdatagroup_member_agenda[".ajaxCodeSnippetAdded"] = false;

$tdatagroup_member_agenda[".buttonsAdded"] = false;

$tdatagroup_member_agenda[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagroup_member_agenda[".isUseTimeForSearch"] = false;


$tdatagroup_member_agenda[".badgeColor"] = "CD5C5C";


$tdatagroup_member_agenda[".allSearchFields"] = array();
$tdatagroup_member_agenda[".filterFields"] = array();
$tdatagroup_member_agenda[".requiredSearchFields"] = array();

$tdatagroup_member_agenda[".googleLikeFields"] = array();
$tdatagroup_member_agenda[".googleLikeFields"][] = "group_member_agenda_id";
$tdatagroup_member_agenda[".googleLikeFields"][] = "group_member_id";
$tdatagroup_member_agenda[".googleLikeFields"][] = "member_id";
$tdatagroup_member_agenda[".googleLikeFields"][] = "group_agenda_id";
$tdatagroup_member_agenda[".googleLikeFields"][] = "group_id";
$tdatagroup_member_agenda[".googleLikeFields"][] = "group_id1";



$tdatagroup_member_agenda[".tableType"] = "list";

$tdatagroup_member_agenda[".printerPageOrientation"] = 0;
$tdatagroup_member_agenda[".nPrinterPageScale"] = 100;

$tdatagroup_member_agenda[".nPrinterSplitRecords"] = 40;

$tdatagroup_member_agenda[".geocodingEnabled"] = false;










$tdatagroup_member_agenda[".pageSize"] = 20;

$tdatagroup_member_agenda[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup_member_agenda[".strOrderBy"] = $tstrOrderBy;

$tdatagroup_member_agenda[".orderindexes"] = array();


$tdatagroup_member_agenda[".sqlHead"] = "SELECT group_member_agenda.group_member_agenda_id,  group_member_agenda.group_member_id,  group_member_agenda.member_id,  group_member_agenda.group_agenda_id,  group_member.group_id,  group_member_agenda.group_id AS group_id1";
$tdatagroup_member_agenda[".sqlFrom"] = "FROM group_member_agenda  INNER JOIN group_member ON group_member_agenda.group_member_id = group_member.group_member_id";
$tdatagroup_member_agenda[".sqlWhereExpr"] = "";
$tdatagroup_member_agenda[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "group_member.group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup_member_agenda[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup_member_agenda[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup_member_agenda[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup_member_agenda[".highlightSearchResults"] = true;

$tableKeysgroup_member_agenda = array();
$tableKeysgroup_member_agenda[] = "group_member_agenda_id";
$tdatagroup_member_agenda[".Keys"] = $tableKeysgroup_member_agenda;


$tdatagroup_member_agenda[".hideMobileList"] = array();




//	group_member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_member_agenda_id";
	$fdata["GoodName"] = "group_member_agenda_id";
	$fdata["ownerTable"] = "group_member_agenda";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","group_member_agenda_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_member_agenda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_agenda.group_member_agenda_id";

	
	
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


	$tdatagroup_member_agenda["group_member_agenda_id"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "group_member_agenda_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "group_member_agenda";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_agenda.group_member_id";

	
	
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
	$edata["LookupTable"] = "group_member";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "group_member_id";

	

	
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


	$tdatagroup_member_agenda["group_member_id"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member_agenda";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_agenda.member_id";

	
	
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
	$edata["LookupTable"] = "personal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatagroup_member_agenda["member_id"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "member_id";
//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "group_member_agenda";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","group_agenda_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_agenda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_agenda.group_agenda_id";

	
	
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
	$edata["LookupTable"] = "group_agenda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_agenda_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "agenda_name";

	

	
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


	$tdatagroup_member_agenda["group_agenda_id"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "group_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","group_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member.group_id";

	
	
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


	$tdatagroup_member_agenda["group_id"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "group_id";
//	group_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "group_id1";
	$fdata["GoodName"] = "group_id1";
	$fdata["ownerTable"] = "group_member_agenda";
	$fdata["Label"] = GetFieldLabel("group_member_agenda","group_id1");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_agenda.group_id";

	
	
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


	$tdatagroup_member_agenda["group_id1"] = $fdata;
		$tdatagroup_member_agenda[".searchableFields"][] = "group_id1";


$tables_data["group_member_agenda"]=&$tdatagroup_member_agenda;
$field_labels["group_member_agenda"] = &$fieldLabelsgroup_member_agenda;
$fieldToolTips["group_member_agenda"] = &$fieldToolTipsgroup_member_agenda;
$placeHolders["group_member_agenda"] = &$placeHoldersgroup_member_agenda;
$page_titles["group_member_agenda"] = &$pageTitlesgroup_member_agenda;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group_member_agenda"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group_member_agenda"] = array();



	
				$strOriginalDetailsTable="personal";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personal";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_agenda"][0] = $masterParams;
				$masterTablesData["group_member_agenda"][0]["masterKeys"] = array();
	$masterTablesData["group_member_agenda"][0]["masterKeys"][]="member_id";
				$masterTablesData["group_member_agenda"][0]["detailKeys"] = array();
	$masterTablesData["group_member_agenda"][0]["detailKeys"][]="member_id";
		
	
				$strOriginalDetailsTable="group_member";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_member";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_member";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_agenda"][1] = $masterParams;
				$masterTablesData["group_member_agenda"][1]["masterKeys"] = array();
	$masterTablesData["group_member_agenda"][1]["masterKeys"][]="group_member_id";
				$masterTablesData["group_member_agenda"][1]["detailKeys"] = array();
	$masterTablesData["group_member_agenda"][1]["detailKeys"][]="group_member_id";
		
	
				$strOriginalDetailsTable="group_agenda";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="group_agenda";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "group_agenda";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["group_member_agenda"][2] = $masterParams;
				$masterTablesData["group_member_agenda"][2]["masterKeys"] = array();
	$masterTablesData["group_member_agenda"][2]["masterKeys"][]="group_agenda_id";
				$masterTablesData["group_member_agenda"][2]["detailKeys"] = array();
	$masterTablesData["group_member_agenda"][2]["detailKeys"][]="group_agenda_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group_member_agenda()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "group_member_agenda.group_member_agenda_id,  group_member_agenda.group_member_id,  group_member_agenda.member_id,  group_member_agenda.group_agenda_id,  group_member.group_id,  group_member_agenda.group_id AS group_id1";
$proto0["m_strFrom"] = "FROM group_member_agenda  INNER JOIN group_member ON group_member_agenda.group_member_id = group_member.group_member_id";
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
	"m_strName" => "group_member_agenda_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto6["m_sql"] = "group_member_agenda.group_member_agenda_id";
$proto6["m_srcTableName"] = "group_member_agenda";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto8["m_sql"] = "group_member_agenda.group_member_id";
$proto8["m_srcTableName"] = "group_member_agenda";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto10["m_sql"] = "group_member_agenda.member_id";
$proto10["m_srcTableName"] = "group_member_agenda";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto12["m_sql"] = "group_member_agenda.group_agenda_id";
$proto12["m_srcTableName"] = "group_member_agenda";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group_member_agenda"
));

$proto14["m_sql"] = "group_member.group_id";
$proto14["m_srcTableName"] = "group_member_agenda";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto16["m_sql"] = "group_member_agenda.group_id";
$proto16["m_srcTableName"] = "group_member_agenda";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "group_id1";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "group_member_agenda";
$proto19["m_srcTableName"] = "group_member_agenda";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "group_member_agenda_id";
$proto19["m_columns"][] = "group_member_id";
$proto19["m_columns"][] = "member_id";
$proto19["m_columns"][] = "group_agenda_id";
$proto19["m_columns"][] = "group_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "group_member_agenda";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "group_member_agenda";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "group_member";
$proto23["m_srcTableName"] = "group_member_agenda";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "group_member_id";
$proto23["m_columns"][] = "member_id";
$proto23["m_columns"][] = "group_id";
$proto23["m_columns"][] = "user_type";
$proto23["m_columns"][] = "token_group";
$proto23["m_columns"][] = "identifier_group";
$proto23["m_columns"][] = "token_personal";
$proto23["m_columns"][] = "membership_type";
$proto23["m_columns"][] = "valid";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN group_member ON group_member_agenda.group_member_id = group_member.group_member_id";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "group_member_agenda";
$proto24=array();
$proto24["m_sql"] = "group_member_agenda.group_member_id = group_member.group_member_id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "group_member_agenda",
	"m_srcTableName" => "group_member_agenda"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= group_member.group_member_id";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group_member_agenda";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group_member_agenda = createSqlQuery_group_member_agenda();


	
		;

						

$tdatagroup_member_agenda[".sqlquery"] = $queryData_group_member_agenda;



$tableEvents["group_member_agenda"] = new eventsBase;
$tdatagroup_member_agenda[".hasEvents"] = false;

?>