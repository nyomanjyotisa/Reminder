<?php
$tdataoutbox_telegram = array();
$tdataoutbox_telegram[".searchableFields"] = array();
$tdataoutbox_telegram[".ShortName"] = "outbox_telegram";
$tdataoutbox_telegram[".OwnerID"] = "";
$tdataoutbox_telegram[".OriginalTable"] = "outbox_telegram";


$tdataoutbox_telegram[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoutbox_telegram[".originalPagesByType"] = $tdataoutbox_telegram[".pagesByType"];
$tdataoutbox_telegram[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoutbox_telegram[".originalPages"] = $tdataoutbox_telegram[".pages"];
$tdataoutbox_telegram[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoutbox_telegram[".originalDefaultPages"] = $tdataoutbox_telegram[".defaultPages"];

//	field labels
$fieldLabelsoutbox_telegram = array();
$fieldToolTipsoutbox_telegram = array();
$pageTitlesoutbox_telegram = array();
$placeHoldersoutbox_telegram = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutbox_telegram["English"] = array();
	$fieldToolTipsoutbox_telegram["English"] = array();
	$placeHoldersoutbox_telegram["English"] = array();
	$pageTitlesoutbox_telegram["English"] = array();
	$fieldLabelsoutbox_telegram["English"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_telegram["English"]["id_outbox"] = "";
	$placeHoldersoutbox_telegram["English"]["id_outbox"] = "";
	$fieldLabelsoutbox_telegram["English"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_telegram["English"]["chat_id"] = "";
	$placeHoldersoutbox_telegram["English"]["chat_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_telegram["English"]["out_msg"] = "";
	$placeHoldersoutbox_telegram["English"]["out_msg"] = "";
	$fieldLabelsoutbox_telegram["English"]["type"] = "Type";
	$fieldToolTipsoutbox_telegram["English"]["type"] = "";
	$placeHoldersoutbox_telegram["English"]["type"] = "";
	$fieldLabelsoutbox_telegram["English"]["flag"] = "Flag";
	$fieldToolTipsoutbox_telegram["English"]["flag"] = "";
	$placeHoldersoutbox_telegram["English"]["flag"] = "";
	$fieldLabelsoutbox_telegram["English"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_telegram["English"]["tgl"] = "";
	$placeHoldersoutbox_telegram["English"]["tgl"] = "";
	$fieldLabelsoutbox_telegram["English"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_telegram["English"]["group_agenda_id"] = "";
	$placeHoldersoutbox_telegram["English"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_telegram["English"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_telegram["English"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_telegram["English"]["member_agenda_id"] = "";
	$placeHoldersoutbox_telegram["English"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_telegram["English"]["group_id"] = "";
	$placeHoldersoutbox_telegram["English"]["group_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_telegram["English"]["group_member_id"] = "";
	$placeHoldersoutbox_telegram["English"]["group_member_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_telegram["English"]["member_id"] = "";
	$placeHoldersoutbox_telegram["English"]["member_id"] = "";
	$fieldLabelsoutbox_telegram["English"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_telegram["English"]["id_group_repeat"] = "";
	$placeHoldersoutbox_telegram["English"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_telegram["English"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_telegram["English"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_telegram["English"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_telegram["English"]))
		$tdataoutbox_telegram[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsoutbox_telegram["Indonesian"] = array();
	$fieldToolTipsoutbox_telegram["Indonesian"] = array();
	$placeHoldersoutbox_telegram["Indonesian"] = array();
	$pageTitlesoutbox_telegram["Indonesian"] = array();
	$fieldLabelsoutbox_telegram["Indonesian"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_telegram["Indonesian"]["id_outbox"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["id_outbox"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["chat_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["chat_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_telegram["Indonesian"]["out_msg"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["out_msg"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["type"] = "Type";
	$fieldToolTipsoutbox_telegram["Indonesian"]["type"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["type"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["flag"] = "Flag";
	$fieldToolTipsoutbox_telegram["Indonesian"]["flag"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["flag"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_telegram["Indonesian"]["tgl"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["tgl"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["group_agenda_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["member_agenda_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["group_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["group_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["group_member_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["group_member_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_telegram["Indonesian"]["member_id"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["member_id"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_telegram["Indonesian"]["id_group_repeat"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_telegram["Indonesian"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_telegram["Indonesian"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_telegram["Indonesian"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_telegram["Indonesian"]))
		$tdataoutbox_telegram[".isUseToolTips"] = true;
}


	$tdataoutbox_telegram[".NCSearch"] = true;



$tdataoutbox_telegram[".shortTableName"] = "outbox_telegram";
$tdataoutbox_telegram[".nSecOptions"] = 0;

$tdataoutbox_telegram[".mainTableOwnerID"] = "";
$tdataoutbox_telegram[".entityType"] = 0;
$tdataoutbox_telegram[".connId"] = "notif_basic1_at_localhost";


$tdataoutbox_telegram[".strOriginalTableName"] = "outbox_telegram";

	



$tdataoutbox_telegram[".showAddInPopup"] = false;

$tdataoutbox_telegram[".showEditInPopup"] = false;

$tdataoutbox_telegram[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoutbox_telegram[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutbox_telegram[".listAjax"] = false;
//	temporary
$tdataoutbox_telegram[".listAjax"] = false;

	$tdataoutbox_telegram[".audit"] = false;

	$tdataoutbox_telegram[".locking"] = false;


$pages = $tdataoutbox_telegram[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutbox_telegram[".edit"] = true;
	$tdataoutbox_telegram[".afterEditAction"] = 0;
	$tdataoutbox_telegram[".closePopupAfterEdit"] = 1;
	$tdataoutbox_telegram[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutbox_telegram[".add"] = true;
$tdataoutbox_telegram[".afterAddAction"] = 0;
$tdataoutbox_telegram[".closePopupAfterAdd"] = 1;
$tdataoutbox_telegram[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutbox_telegram[".list"] = true;
}



$tdataoutbox_telegram[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutbox_telegram[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutbox_telegram[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutbox_telegram[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutbox_telegram[".printFriendly"] = true;
}



$tdataoutbox_telegram[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutbox_telegram[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutbox_telegram[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutbox_telegram[".isUseAjaxSuggest"] = true;

$tdataoutbox_telegram[".rowHighlite"] = true;





$tdataoutbox_telegram[".ajaxCodeSnippetAdded"] = false;

$tdataoutbox_telegram[".buttonsAdded"] = false;

$tdataoutbox_telegram[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutbox_telegram[".isUseTimeForSearch"] = false;


$tdataoutbox_telegram[".badgeColor"] = "BC8F8F";


$tdataoutbox_telegram[".allSearchFields"] = array();
$tdataoutbox_telegram[".filterFields"] = array();
$tdataoutbox_telegram[".requiredSearchFields"] = array();

$tdataoutbox_telegram[".googleLikeFields"] = array();
$tdataoutbox_telegram[".googleLikeFields"][] = "id_outbox";
$tdataoutbox_telegram[".googleLikeFields"][] = "chat_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "out_msg";
$tdataoutbox_telegram[".googleLikeFields"][] = "type";
$tdataoutbox_telegram[".googleLikeFields"][] = "flag";
$tdataoutbox_telegram[".googleLikeFields"][] = "tgl";
$tdataoutbox_telegram[".googleLikeFields"][] = "group_agenda_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "group_agenda_private_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "member_agenda_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "group_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "group_member_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "member_id";
$tdataoutbox_telegram[".googleLikeFields"][] = "id_group_repeat";
$tdataoutbox_telegram[".googleLikeFields"][] = "id_personal_repeat";



$tdataoutbox_telegram[".tableType"] = "list";

$tdataoutbox_telegram[".printerPageOrientation"] = 0;
$tdataoutbox_telegram[".nPrinterPageScale"] = 100;

$tdataoutbox_telegram[".nPrinterSplitRecords"] = 40;

$tdataoutbox_telegram[".geocodingEnabled"] = false;










$tdataoutbox_telegram[".pageSize"] = 20;

$tdataoutbox_telegram[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutbox_telegram[".strOrderBy"] = $tstrOrderBy;

$tdataoutbox_telegram[".orderindexes"] = array();


$tdataoutbox_telegram[".sqlHead"] = "SELECT id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$tdataoutbox_telegram[".sqlFrom"] = "FROM outbox_telegram";
$tdataoutbox_telegram[".sqlWhereExpr"] = "";
$tdataoutbox_telegram[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutbox_telegram[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutbox_telegram[".arrGroupsPerPage"] = $arrGPP;

$tdataoutbox_telegram[".highlightSearchResults"] = true;

$tableKeysoutbox_telegram = array();
$tableKeysoutbox_telegram[] = "id_outbox";
$tdataoutbox_telegram[".Keys"] = $tableKeysoutbox_telegram;


$tdataoutbox_telegram[".hideMobileList"] = array();




//	id_outbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_outbox";
	$fdata["GoodName"] = "id_outbox";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","id_outbox");
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


	$tdataoutbox_telegram["id_outbox"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "id_outbox";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","chat_id");
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


	$tdataoutbox_telegram["chat_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "chat_id";
//	out_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "out_msg";
	$fdata["GoodName"] = "out_msg";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","out_msg");
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


	$tdataoutbox_telegram["out_msg"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "out_msg";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","type");
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


	$tdataoutbox_telegram["type"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "type";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","flag");
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


	$tdataoutbox_telegram["flag"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "flag";
//	tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tgl";
	$fdata["GoodName"] = "tgl";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","tgl");
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


	$tdataoutbox_telegram["tgl"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "tgl";
//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","group_agenda_id");
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


	$tdataoutbox_telegram["group_agenda_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "group_agenda_id";
//	group_agenda_private_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "group_agenda_private_id";
	$fdata["GoodName"] = "group_agenda_private_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","group_agenda_private_id");
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


	$tdataoutbox_telegram["group_agenda_private_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "group_agenda_private_id";
//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","member_agenda_id");
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


	$tdataoutbox_telegram["member_agenda_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "member_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","group_id");
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


	$tdataoutbox_telegram["group_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "group_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","group_member_id");
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


	$tdataoutbox_telegram["group_member_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","member_id");
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


	$tdataoutbox_telegram["member_id"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "member_id";
//	id_group_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_group_repeat";
	$fdata["GoodName"] = "id_group_repeat";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","id_group_repeat");
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


	$tdataoutbox_telegram["id_group_repeat"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "id_group_repeat";
//	id_personal_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_personal_repeat";
	$fdata["GoodName"] = "id_personal_repeat";
	$fdata["ownerTable"] = "outbox_telegram";
	$fdata["Label"] = GetFieldLabel("outbox_telegram","id_personal_repeat");
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


	$tdataoutbox_telegram["id_personal_repeat"] = $fdata;
		$tdataoutbox_telegram[".searchableFields"][] = "id_personal_repeat";


$tables_data["outbox_telegram"]=&$tdataoutbox_telegram;
$field_labels["outbox_telegram"] = &$fieldLabelsoutbox_telegram;
$fieldToolTips["outbox_telegram"] = &$fieldToolTipsoutbox_telegram;
$placeHolders["outbox_telegram"] = &$placeHoldersoutbox_telegram;
$page_titles["outbox_telegram"] = &$pageTitlesoutbox_telegram;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outbox_telegram"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["outbox_telegram"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outbox_telegram()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$proto0["m_strFrom"] = "FROM outbox_telegram";
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
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto6["m_sql"] = "id_outbox";
$proto6["m_srcTableName"] = "outbox_telegram";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto8["m_sql"] = "chat_id";
$proto8["m_srcTableName"] = "outbox_telegram";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "out_msg",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto10["m_sql"] = "out_msg";
$proto10["m_srcTableName"] = "outbox_telegram";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "outbox_telegram";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto14["m_sql"] = "flag";
$proto14["m_srcTableName"] = "outbox_telegram";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tgl",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto16["m_sql"] = "tgl";
$proto16["m_srcTableName"] = "outbox_telegram";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto18["m_sql"] = "group_agenda_id";
$proto18["m_srcTableName"] = "outbox_telegram";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_private_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto20["m_sql"] = "group_agenda_private_id";
$proto20["m_srcTableName"] = "outbox_telegram";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "member_agenda_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto22["m_sql"] = "member_agenda_id";
$proto22["m_srcTableName"] = "outbox_telegram";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto24["m_sql"] = "group_id";
$proto24["m_srcTableName"] = "outbox_telegram";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto26["m_sql"] = "group_member_id";
$proto26["m_srcTableName"] = "outbox_telegram";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto28["m_sql"] = "member_id";
$proto28["m_srcTableName"] = "outbox_telegram";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group_repeat",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto30["m_sql"] = "id_group_repeat";
$proto30["m_srcTableName"] = "outbox_telegram";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_personal_repeat",
	"m_strTable" => "outbox_telegram",
	"m_srcTableName" => "outbox_telegram"
));

$proto32["m_sql"] = "id_personal_repeat";
$proto32["m_srcTableName"] = "outbox_telegram";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "outbox_telegram";
$proto35["m_srcTableName"] = "outbox_telegram";
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
$proto34["m_sql"] = "outbox_telegram";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "outbox_telegram";
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
$proto0["m_srcTableName"]="outbox_telegram";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outbox_telegram = createSqlQuery_outbox_telegram();


	
		;

														

$tdataoutbox_telegram[".sqlquery"] = $queryData_outbox_telegram;



$tableEvents["outbox_telegram"] = new eventsBase;
$tdataoutbox_telegram[".hasEvents"] = false;

?>