<?php
$tdataoutbox_whatsapp = array();
$tdataoutbox_whatsapp[".searchableFields"] = array();
$tdataoutbox_whatsapp[".ShortName"] = "outbox_whatsapp";
$tdataoutbox_whatsapp[".OwnerID"] = "";
$tdataoutbox_whatsapp[".OriginalTable"] = "outbox_whatsapp";


$tdataoutbox_whatsapp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoutbox_whatsapp[".originalPagesByType"] = $tdataoutbox_whatsapp[".pagesByType"];
$tdataoutbox_whatsapp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoutbox_whatsapp[".originalPages"] = $tdataoutbox_whatsapp[".pages"];
$tdataoutbox_whatsapp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoutbox_whatsapp[".originalDefaultPages"] = $tdataoutbox_whatsapp[".defaultPages"];

//	field labels
$fieldLabelsoutbox_whatsapp = array();
$fieldToolTipsoutbox_whatsapp = array();
$pageTitlesoutbox_whatsapp = array();
$placeHoldersoutbox_whatsapp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutbox_whatsapp["English"] = array();
	$fieldToolTipsoutbox_whatsapp["English"] = array();
	$placeHoldersoutbox_whatsapp["English"] = array();
	$pageTitlesoutbox_whatsapp["English"] = array();
	$fieldLabelsoutbox_whatsapp["English"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_whatsapp["English"]["id_outbox"] = "";
	$placeHoldersoutbox_whatsapp["English"]["id_outbox"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_whatsapp["English"]["chat_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["chat_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_whatsapp["English"]["out_msg"] = "";
	$placeHoldersoutbox_whatsapp["English"]["out_msg"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["type"] = "Type";
	$fieldToolTipsoutbox_whatsapp["English"]["type"] = "";
	$placeHoldersoutbox_whatsapp["English"]["type"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["flag"] = "Flag";
	$fieldToolTipsoutbox_whatsapp["English"]["flag"] = "";
	$placeHoldersoutbox_whatsapp["English"]["flag"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_whatsapp["English"]["tgl"] = "";
	$placeHoldersoutbox_whatsapp["English"]["tgl"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_whatsapp["English"]["group_agenda_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_whatsapp["English"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_whatsapp["English"]["member_agenda_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_whatsapp["English"]["group_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["group_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_whatsapp["English"]["group_member_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["group_member_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_whatsapp["English"]["member_id"] = "";
	$placeHoldersoutbox_whatsapp["English"]["member_id"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_whatsapp["English"]["id_group_repeat"] = "";
	$placeHoldersoutbox_whatsapp["English"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_whatsapp["English"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_whatsapp["English"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_whatsapp["English"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_whatsapp["English"]))
		$tdataoutbox_whatsapp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsoutbox_whatsapp["Indonesian"] = array();
	$fieldToolTipsoutbox_whatsapp["Indonesian"] = array();
	$placeHoldersoutbox_whatsapp["Indonesian"] = array();
	$pageTitlesoutbox_whatsapp["Indonesian"] = array();
	$fieldLabelsoutbox_whatsapp["Indonesian"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["id_outbox"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["id_outbox"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["chat_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["chat_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["out_msg"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["out_msg"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["type"] = "Type";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["type"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["type"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["flag"] = "Flag";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["flag"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["flag"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["tgl"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["tgl"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["group_agenda_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["member_agenda_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["group_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["group_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["group_member_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["group_member_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["member_id"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["member_id"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["id_group_repeat"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_whatsapp["Indonesian"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_whatsapp["Indonesian"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_whatsapp["Indonesian"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_whatsapp["Indonesian"]))
		$tdataoutbox_whatsapp[".isUseToolTips"] = true;
}


	$tdataoutbox_whatsapp[".NCSearch"] = true;



$tdataoutbox_whatsapp[".shortTableName"] = "outbox_whatsapp";
$tdataoutbox_whatsapp[".nSecOptions"] = 0;

$tdataoutbox_whatsapp[".mainTableOwnerID"] = "";
$tdataoutbox_whatsapp[".entityType"] = 0;
$tdataoutbox_whatsapp[".connId"] = "notif_basic1_at_localhost";


$tdataoutbox_whatsapp[".strOriginalTableName"] = "outbox_whatsapp";

	



$tdataoutbox_whatsapp[".showAddInPopup"] = false;

$tdataoutbox_whatsapp[".showEditInPopup"] = false;

$tdataoutbox_whatsapp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoutbox_whatsapp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutbox_whatsapp[".listAjax"] = false;
//	temporary
$tdataoutbox_whatsapp[".listAjax"] = false;

	$tdataoutbox_whatsapp[".audit"] = false;

	$tdataoutbox_whatsapp[".locking"] = false;


$pages = $tdataoutbox_whatsapp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutbox_whatsapp[".edit"] = true;
	$tdataoutbox_whatsapp[".afterEditAction"] = 1;
	$tdataoutbox_whatsapp[".closePopupAfterEdit"] = 1;
	$tdataoutbox_whatsapp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutbox_whatsapp[".add"] = true;
$tdataoutbox_whatsapp[".afterAddAction"] = 1;
$tdataoutbox_whatsapp[".closePopupAfterAdd"] = 1;
$tdataoutbox_whatsapp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutbox_whatsapp[".list"] = true;
}



$tdataoutbox_whatsapp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutbox_whatsapp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutbox_whatsapp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutbox_whatsapp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutbox_whatsapp[".printFriendly"] = true;
}



$tdataoutbox_whatsapp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutbox_whatsapp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutbox_whatsapp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutbox_whatsapp[".isUseAjaxSuggest"] = true;

$tdataoutbox_whatsapp[".rowHighlite"] = true;





$tdataoutbox_whatsapp[".ajaxCodeSnippetAdded"] = false;

$tdataoutbox_whatsapp[".buttonsAdded"] = false;

$tdataoutbox_whatsapp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutbox_whatsapp[".isUseTimeForSearch"] = false;


$tdataoutbox_whatsapp[".badgeColor"] = "DB7093";


$tdataoutbox_whatsapp[".allSearchFields"] = array();
$tdataoutbox_whatsapp[".filterFields"] = array();
$tdataoutbox_whatsapp[".requiredSearchFields"] = array();

$tdataoutbox_whatsapp[".googleLikeFields"] = array();
$tdataoutbox_whatsapp[".googleLikeFields"][] = "id_outbox";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "chat_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "out_msg";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "type";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "flag";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "tgl";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "group_agenda_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "group_agenda_private_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "member_agenda_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "group_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "group_member_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "member_id";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "id_group_repeat";
$tdataoutbox_whatsapp[".googleLikeFields"][] = "id_personal_repeat";



$tdataoutbox_whatsapp[".tableType"] = "list";

$tdataoutbox_whatsapp[".printerPageOrientation"] = 0;
$tdataoutbox_whatsapp[".nPrinterPageScale"] = 100;

$tdataoutbox_whatsapp[".nPrinterSplitRecords"] = 40;

$tdataoutbox_whatsapp[".geocodingEnabled"] = false;










$tdataoutbox_whatsapp[".pageSize"] = 20;

$tdataoutbox_whatsapp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutbox_whatsapp[".strOrderBy"] = $tstrOrderBy;

$tdataoutbox_whatsapp[".orderindexes"] = array();


$tdataoutbox_whatsapp[".sqlHead"] = "SELECT id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$tdataoutbox_whatsapp[".sqlFrom"] = "FROM outbox_whatsapp";
$tdataoutbox_whatsapp[".sqlWhereExpr"] = "";
$tdataoutbox_whatsapp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutbox_whatsapp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutbox_whatsapp[".arrGroupsPerPage"] = $arrGPP;

$tdataoutbox_whatsapp[".highlightSearchResults"] = true;

$tableKeysoutbox_whatsapp = array();
$tableKeysoutbox_whatsapp[] = "id_outbox";
$tdataoutbox_whatsapp[".Keys"] = $tableKeysoutbox_whatsapp;


$tdataoutbox_whatsapp[".hideMobileList"] = array();




//	id_outbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_outbox";
	$fdata["GoodName"] = "id_outbox";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","id_outbox");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_outbox";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_outbox";

	
	
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


	$tdataoutbox_whatsapp["id_outbox"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "id_outbox";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","chat_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "chat_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chat_id";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataoutbox_whatsapp["chat_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "chat_id";
//	out_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "out_msg";
	$fdata["GoodName"] = "out_msg";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","out_msg");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "out_msg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "out_msg";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataoutbox_whatsapp["out_msg"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "out_msg";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "msg";
	$edata["LookupValues"][] = "file";
	$edata["LookupValues"][] = "loc";
	$edata["LookupValues"][] = "img";

	
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


	$tdataoutbox_whatsapp["type"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "type";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","flag");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "flag";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
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


	$tdataoutbox_whatsapp["flag"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "flag";
//	tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tgl";
	$fdata["GoodName"] = "tgl";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","tgl");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "tgl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tgl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataoutbox_whatsapp["tgl"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "tgl";
//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","group_agenda_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_agenda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_agenda_id";

	
	
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
	$edata["DisplayField"] = "message_general";

	

	
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


	$tdataoutbox_whatsapp["group_agenda_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "group_agenda_id";
//	group_agenda_private_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "group_agenda_private_id";
	$fdata["GoodName"] = "group_agenda_private_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","group_agenda_private_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_agenda_private_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_agenda_private_id";

	
	
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
	$edata["LookupTable"] = "group_agenda_private";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "group_agenda_private_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "message_content";

	

	
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


	$tdataoutbox_whatsapp["group_agenda_private_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "group_agenda_private_id";
//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","member_agenda_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_agenda_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_agenda_id";

	
	
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
	$edata["LookupTable"] = "personal_agenda";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "member_agenda_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "message_content";

	

	
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


	$tdataoutbox_whatsapp["member_agenda_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "member_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","group_id");
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
	$edata["LinkFieldType"] = 20;
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


	$tdataoutbox_whatsapp["group_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "group_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","group_member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "group_member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member_id";

	
	
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
	$edata["DisplayField"] = "token_group";

	

	
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


	$tdataoutbox_whatsapp["group_member_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "member_id";

	
	
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


	$tdataoutbox_whatsapp["member_id"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "member_id";
//	id_group_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_group_repeat";
	$fdata["GoodName"] = "id_group_repeat";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","id_group_repeat");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_group_repeat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_group_repeat";

	
	
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
	$edata["LookupTable"] = "group_agenda_repeat_date";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_group_repeat";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_group_repeat";

	

	
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


	$tdataoutbox_whatsapp["id_group_repeat"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "id_group_repeat";
//	id_personal_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_personal_repeat";
	$fdata["GoodName"] = "id_personal_repeat";
	$fdata["ownerTable"] = "outbox_whatsapp";
	$fdata["Label"] = GetFieldLabel("outbox_whatsapp","id_personal_repeat");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_personal_repeat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_personal_repeat";

	
	
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
	$edata["LookupTable"] = "personal_agenda_repeat_date";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_group_repeat";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id_group_repeat";

	

	
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


	$tdataoutbox_whatsapp["id_personal_repeat"] = $fdata;
		$tdataoutbox_whatsapp[".searchableFields"][] = "id_personal_repeat";


$tables_data["outbox_whatsapp"]=&$tdataoutbox_whatsapp;
$field_labels["outbox_whatsapp"] = &$fieldLabelsoutbox_whatsapp;
$fieldToolTips["outbox_whatsapp"] = &$fieldToolTipsoutbox_whatsapp;
$placeHolders["outbox_whatsapp"] = &$placeHoldersoutbox_whatsapp;
$page_titles["outbox_whatsapp"] = &$pageTitlesoutbox_whatsapp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outbox_whatsapp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["outbox_whatsapp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outbox_whatsapp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$proto0["m_strFrom"] = "FROM outbox_whatsapp";
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
	"m_strName" => "id_outbox",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto6["m_sql"] = "id_outbox";
$proto6["m_srcTableName"] = "outbox_whatsapp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto8["m_sql"] = "chat_id";
$proto8["m_srcTableName"] = "outbox_whatsapp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "out_msg",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto10["m_sql"] = "out_msg";
$proto10["m_srcTableName"] = "outbox_whatsapp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "outbox_whatsapp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto14["m_sql"] = "flag";
$proto14["m_srcTableName"] = "outbox_whatsapp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tgl",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto16["m_sql"] = "tgl";
$proto16["m_srcTableName"] = "outbox_whatsapp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto18["m_sql"] = "group_agenda_id";
$proto18["m_srcTableName"] = "outbox_whatsapp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_private_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto20["m_sql"] = "group_agenda_private_id";
$proto20["m_srcTableName"] = "outbox_whatsapp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "member_agenda_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto22["m_sql"] = "member_agenda_id";
$proto22["m_srcTableName"] = "outbox_whatsapp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto24["m_sql"] = "group_id";
$proto24["m_srcTableName"] = "outbox_whatsapp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto26["m_sql"] = "group_member_id";
$proto26["m_srcTableName"] = "outbox_whatsapp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto28["m_sql"] = "member_id";
$proto28["m_srcTableName"] = "outbox_whatsapp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group_repeat",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto30["m_sql"] = "id_group_repeat";
$proto30["m_srcTableName"] = "outbox_whatsapp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_personal_repeat",
	"m_strTable" => "outbox_whatsapp",
	"m_srcTableName" => "outbox_whatsapp"
));

$proto32["m_sql"] = "id_personal_repeat";
$proto32["m_srcTableName"] = "outbox_whatsapp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "outbox_whatsapp";
$proto35["m_srcTableName"] = "outbox_whatsapp";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id_outbox";
$proto35["m_columns"][] = "chat_id";
$proto35["m_columns"][] = "out_msg";
$proto35["m_columns"][] = "type";
$proto35["m_columns"][] = "flag";
$proto35["m_columns"][] = "tgl";
$proto35["m_columns"][] = "group_agenda_id";
$proto35["m_columns"][] = "group_agenda_private_id";
$proto35["m_columns"][] = "member_agenda_id";
$proto35["m_columns"][] = "group_id";
$proto35["m_columns"][] = "group_member_id";
$proto35["m_columns"][] = "member_id";
$proto35["m_columns"][] = "id_group_repeat";
$proto35["m_columns"][] = "id_personal_repeat";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "outbox_whatsapp";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "outbox_whatsapp";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="outbox_whatsapp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outbox_whatsapp = createSqlQuery_outbox_whatsapp();


	
		;

														

$tdataoutbox_whatsapp[".sqlquery"] = $queryData_outbox_whatsapp;



$tableEvents["outbox_whatsapp"] = new eventsBase;
$tdataoutbox_whatsapp[".hasEvents"] = false;

?>