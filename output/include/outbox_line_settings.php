<?php
$tdataoutbox_line = array();
$tdataoutbox_line[".searchableFields"] = array();
$tdataoutbox_line[".ShortName"] = "outbox_line";
$tdataoutbox_line[".OwnerID"] = "";
$tdataoutbox_line[".OriginalTable"] = "outbox_line";


$tdataoutbox_line[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataoutbox_line[".originalPagesByType"] = $tdataoutbox_line[".pagesByType"];
$tdataoutbox_line[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataoutbox_line[".originalPages"] = $tdataoutbox_line[".pages"];
$tdataoutbox_line[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataoutbox_line[".originalDefaultPages"] = $tdataoutbox_line[".defaultPages"];

//	field labels
$fieldLabelsoutbox_line = array();
$fieldToolTipsoutbox_line = array();
$pageTitlesoutbox_line = array();
$placeHoldersoutbox_line = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutbox_line["English"] = array();
	$fieldToolTipsoutbox_line["English"] = array();
	$placeHoldersoutbox_line["English"] = array();
	$pageTitlesoutbox_line["English"] = array();
	$fieldLabelsoutbox_line["English"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_line["English"]["id_outbox"] = "";
	$placeHoldersoutbox_line["English"]["id_outbox"] = "";
	$fieldLabelsoutbox_line["English"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_line["English"]["chat_id"] = "";
	$placeHoldersoutbox_line["English"]["chat_id"] = "";
	$fieldLabelsoutbox_line["English"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_line["English"]["out_msg"] = "";
	$placeHoldersoutbox_line["English"]["out_msg"] = "";
	$fieldLabelsoutbox_line["English"]["type"] = "Type";
	$fieldToolTipsoutbox_line["English"]["type"] = "";
	$placeHoldersoutbox_line["English"]["type"] = "";
	$fieldLabelsoutbox_line["English"]["flag"] = "Flag";
	$fieldToolTipsoutbox_line["English"]["flag"] = "";
	$placeHoldersoutbox_line["English"]["flag"] = "";
	$fieldLabelsoutbox_line["English"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_line["English"]["tgl"] = "";
	$placeHoldersoutbox_line["English"]["tgl"] = "";
	$fieldLabelsoutbox_line["English"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_line["English"]["group_agenda_id"] = "";
	$placeHoldersoutbox_line["English"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_line["English"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_line["English"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_line["English"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_line["English"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_line["English"]["member_agenda_id"] = "";
	$placeHoldersoutbox_line["English"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_line["English"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_line["English"]["group_id"] = "";
	$placeHoldersoutbox_line["English"]["group_id"] = "";
	$fieldLabelsoutbox_line["English"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_line["English"]["group_member_id"] = "";
	$placeHoldersoutbox_line["English"]["group_member_id"] = "";
	$fieldLabelsoutbox_line["English"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_line["English"]["member_id"] = "";
	$placeHoldersoutbox_line["English"]["member_id"] = "";
	$fieldLabelsoutbox_line["English"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_line["English"]["id_group_repeat"] = "";
	$placeHoldersoutbox_line["English"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_line["English"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_line["English"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_line["English"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_line["English"]))
		$tdataoutbox_line[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsoutbox_line["Indonesian"] = array();
	$fieldToolTipsoutbox_line["Indonesian"] = array();
	$placeHoldersoutbox_line["Indonesian"] = array();
	$pageTitlesoutbox_line["Indonesian"] = array();
	$fieldLabelsoutbox_line["Indonesian"]["id_outbox"] = "Id Outbox";
	$fieldToolTipsoutbox_line["Indonesian"]["id_outbox"] = "";
	$placeHoldersoutbox_line["Indonesian"]["id_outbox"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["chat_id"] = "Chat Id";
	$fieldToolTipsoutbox_line["Indonesian"]["chat_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["chat_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["out_msg"] = "Out Msg";
	$fieldToolTipsoutbox_line["Indonesian"]["out_msg"] = "";
	$placeHoldersoutbox_line["Indonesian"]["out_msg"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["type"] = "Type";
	$fieldToolTipsoutbox_line["Indonesian"]["type"] = "";
	$placeHoldersoutbox_line["Indonesian"]["type"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["flag"] = "Flag";
	$fieldToolTipsoutbox_line["Indonesian"]["flag"] = "";
	$placeHoldersoutbox_line["Indonesian"]["flag"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["tgl"] = "Tgl";
	$fieldToolTipsoutbox_line["Indonesian"]["tgl"] = "";
	$placeHoldersoutbox_line["Indonesian"]["tgl"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["group_agenda_id"] = "Group Agenda Id";
	$fieldToolTipsoutbox_line["Indonesian"]["group_agenda_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["group_agenda_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["group_agenda_private_id"] = "Group Agenda Private Id";
	$fieldToolTipsoutbox_line["Indonesian"]["group_agenda_private_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["group_agenda_private_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["member_agenda_id"] = "Member Agenda Id";
	$fieldToolTipsoutbox_line["Indonesian"]["member_agenda_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["member_agenda_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsoutbox_line["Indonesian"]["group_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["group_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["group_member_id"] = "Group Member Id";
	$fieldToolTipsoutbox_line["Indonesian"]["group_member_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["group_member_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsoutbox_line["Indonesian"]["member_id"] = "";
	$placeHoldersoutbox_line["Indonesian"]["member_id"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["id_group_repeat"] = "Id Group Repeat";
	$fieldToolTipsoutbox_line["Indonesian"]["id_group_repeat"] = "";
	$placeHoldersoutbox_line["Indonesian"]["id_group_repeat"] = "";
	$fieldLabelsoutbox_line["Indonesian"]["id_personal_repeat"] = "Id Personal Repeat";
	$fieldToolTipsoutbox_line["Indonesian"]["id_personal_repeat"] = "";
	$placeHoldersoutbox_line["Indonesian"]["id_personal_repeat"] = "";
	if (count($fieldToolTipsoutbox_line["Indonesian"]))
		$tdataoutbox_line[".isUseToolTips"] = true;
}


	$tdataoutbox_line[".NCSearch"] = true;



$tdataoutbox_line[".shortTableName"] = "outbox_line";
$tdataoutbox_line[".nSecOptions"] = 0;

$tdataoutbox_line[".mainTableOwnerID"] = "";
$tdataoutbox_line[".entityType"] = 0;
$tdataoutbox_line[".connId"] = "notif_basic1_at_localhost";


$tdataoutbox_line[".strOriginalTableName"] = "outbox_line";

	



$tdataoutbox_line[".showAddInPopup"] = false;

$tdataoutbox_line[".showEditInPopup"] = false;

$tdataoutbox_line[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataoutbox_line[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutbox_line[".listAjax"] = false;
//	temporary
$tdataoutbox_line[".listAjax"] = false;

	$tdataoutbox_line[".audit"] = false;

	$tdataoutbox_line[".locking"] = false;


$pages = $tdataoutbox_line[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutbox_line[".edit"] = true;
	$tdataoutbox_line[".afterEditAction"] = 1;
	$tdataoutbox_line[".closePopupAfterEdit"] = 1;
	$tdataoutbox_line[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutbox_line[".add"] = true;
$tdataoutbox_line[".afterAddAction"] = 1;
$tdataoutbox_line[".closePopupAfterAdd"] = 1;
$tdataoutbox_line[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutbox_line[".list"] = true;
}



$tdataoutbox_line[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutbox_line[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutbox_line[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutbox_line[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutbox_line[".printFriendly"] = true;
}



$tdataoutbox_line[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutbox_line[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutbox_line[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutbox_line[".isUseAjaxSuggest"] = true;

$tdataoutbox_line[".rowHighlite"] = true;





$tdataoutbox_line[".ajaxCodeSnippetAdded"] = false;

$tdataoutbox_line[".buttonsAdded"] = false;

$tdataoutbox_line[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutbox_line[".isUseTimeForSearch"] = false;


$tdataoutbox_line[".badgeColor"] = "CFAE83";


$tdataoutbox_line[".allSearchFields"] = array();
$tdataoutbox_line[".filterFields"] = array();
$tdataoutbox_line[".requiredSearchFields"] = array();

$tdataoutbox_line[".googleLikeFields"] = array();
$tdataoutbox_line[".googleLikeFields"][] = "id_outbox";
$tdataoutbox_line[".googleLikeFields"][] = "chat_id";
$tdataoutbox_line[".googleLikeFields"][] = "out_msg";
$tdataoutbox_line[".googleLikeFields"][] = "type";
$tdataoutbox_line[".googleLikeFields"][] = "flag";
$tdataoutbox_line[".googleLikeFields"][] = "tgl";
$tdataoutbox_line[".googleLikeFields"][] = "group_agenda_id";
$tdataoutbox_line[".googleLikeFields"][] = "group_agenda_private_id";
$tdataoutbox_line[".googleLikeFields"][] = "member_agenda_id";
$tdataoutbox_line[".googleLikeFields"][] = "group_id";
$tdataoutbox_line[".googleLikeFields"][] = "group_member_id";
$tdataoutbox_line[".googleLikeFields"][] = "member_id";
$tdataoutbox_line[".googleLikeFields"][] = "id_group_repeat";
$tdataoutbox_line[".googleLikeFields"][] = "id_personal_repeat";



$tdataoutbox_line[".tableType"] = "list";

$tdataoutbox_line[".printerPageOrientation"] = 0;
$tdataoutbox_line[".nPrinterPageScale"] = 100;

$tdataoutbox_line[".nPrinterSplitRecords"] = 40;

$tdataoutbox_line[".geocodingEnabled"] = false;










$tdataoutbox_line[".pageSize"] = 20;

$tdataoutbox_line[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutbox_line[".strOrderBy"] = $tstrOrderBy;

$tdataoutbox_line[".orderindexes"] = array();


$tdataoutbox_line[".sqlHead"] = "SELECT id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$tdataoutbox_line[".sqlFrom"] = "FROM outbox_line";
$tdataoutbox_line[".sqlWhereExpr"] = "";
$tdataoutbox_line[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutbox_line[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutbox_line[".arrGroupsPerPage"] = $arrGPP;

$tdataoutbox_line[".highlightSearchResults"] = true;

$tableKeysoutbox_line = array();
$tableKeysoutbox_line[] = "id_outbox";
$tdataoutbox_line[".Keys"] = $tableKeysoutbox_line;


$tdataoutbox_line[".hideMobileList"] = array();




//	id_outbox
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_outbox";
	$fdata["GoodName"] = "id_outbox";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","id_outbox");
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


	$tdataoutbox_line["id_outbox"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "id_outbox";
//	chat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chat_id";
	$fdata["GoodName"] = "chat_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","chat_id");
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


	$tdataoutbox_line["chat_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "chat_id";
//	out_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "out_msg";
	$fdata["GoodName"] = "out_msg";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","out_msg");
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


	$tdataoutbox_line["out_msg"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "out_msg";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","type");
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


	$tdataoutbox_line["type"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "type";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","flag");
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


	$tdataoutbox_line["flag"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "flag";
//	tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tgl";
	$fdata["GoodName"] = "tgl";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","tgl");
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


	$tdataoutbox_line["tgl"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "tgl";
//	group_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_agenda_id";
	$fdata["GoodName"] = "group_agenda_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","group_agenda_id");
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


	$tdataoutbox_line["group_agenda_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "group_agenda_id";
//	group_agenda_private_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "group_agenda_private_id";
	$fdata["GoodName"] = "group_agenda_private_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","group_agenda_private_id");
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


	$tdataoutbox_line["group_agenda_private_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "group_agenda_private_id";
//	member_agenda_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "member_agenda_id";
	$fdata["GoodName"] = "member_agenda_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","member_agenda_id");
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


	$tdataoutbox_line["member_agenda_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "member_agenda_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","group_id");
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


	$tdataoutbox_line["group_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "group_id";
//	group_member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "group_member_id";
	$fdata["GoodName"] = "group_member_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","group_member_id");
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


	$tdataoutbox_line["group_member_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "group_member_id";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","member_id");
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


	$tdataoutbox_line["member_id"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "member_id";
//	id_group_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_group_repeat";
	$fdata["GoodName"] = "id_group_repeat";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","id_group_repeat");
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


	$tdataoutbox_line["id_group_repeat"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "id_group_repeat";
//	id_personal_repeat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_personal_repeat";
	$fdata["GoodName"] = "id_personal_repeat";
	$fdata["ownerTable"] = "outbox_line";
	$fdata["Label"] = GetFieldLabel("outbox_line","id_personal_repeat");
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


	$tdataoutbox_line["id_personal_repeat"] = $fdata;
		$tdataoutbox_line[".searchableFields"][] = "id_personal_repeat";


$tables_data["outbox_line"]=&$tdataoutbox_line;
$field_labels["outbox_line"] = &$fieldLabelsoutbox_line;
$fieldToolTips["outbox_line"] = &$fieldToolTipsoutbox_line;
$placeHolders["outbox_line"] = &$placeHoldersoutbox_line;
$page_titles["outbox_line"] = &$pageTitlesoutbox_line;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outbox_line"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["outbox_line"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outbox_line()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_outbox,  	chat_id,  	out_msg,  	`type`,  	flag,  	tgl,  	group_agenda_id,  	group_agenda_private_id,  	member_agenda_id,  	group_id,  	group_member_id,  	member_id,  	id_group_repeat,  	id_personal_repeat";
$proto0["m_strFrom"] = "FROM outbox_line";
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
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto6["m_sql"] = "id_outbox";
$proto6["m_srcTableName"] = "outbox_line";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chat_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto8["m_sql"] = "chat_id";
$proto8["m_srcTableName"] = "outbox_line";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "out_msg",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto10["m_sql"] = "out_msg";
$proto10["m_srcTableName"] = "outbox_line";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto12["m_sql"] = "`type`";
$proto12["m_srcTableName"] = "outbox_line";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto14["m_sql"] = "flag";
$proto14["m_srcTableName"] = "outbox_line";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tgl",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto16["m_sql"] = "tgl";
$proto16["m_srcTableName"] = "outbox_line";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto18["m_sql"] = "group_agenda_id";
$proto18["m_srcTableName"] = "outbox_line";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "group_agenda_private_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto20["m_sql"] = "group_agenda_private_id";
$proto20["m_srcTableName"] = "outbox_line";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "member_agenda_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto22["m_sql"] = "member_agenda_id";
$proto22["m_srcTableName"] = "outbox_line";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto24["m_sql"] = "group_id";
$proto24["m_srcTableName"] = "outbox_line";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "group_member_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto26["m_sql"] = "group_member_id";
$proto26["m_srcTableName"] = "outbox_line";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto28["m_sql"] = "member_id";
$proto28["m_srcTableName"] = "outbox_line";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_group_repeat",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto30["m_sql"] = "id_group_repeat";
$proto30["m_srcTableName"] = "outbox_line";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "id_personal_repeat",
	"m_strTable" => "outbox_line",
	"m_srcTableName" => "outbox_line"
));

$proto32["m_sql"] = "id_personal_repeat";
$proto32["m_srcTableName"] = "outbox_line";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "outbox_line";
$proto35["m_srcTableName"] = "outbox_line";
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
$proto34["m_sql"] = "outbox_line";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "outbox_line";
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
$proto0["m_srcTableName"]="outbox_line";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outbox_line = createSqlQuery_outbox_line();


	
		;

														

$tdataoutbox_line[".sqlquery"] = $queryData_outbox_line;



$tableEvents["outbox_line"] = new eventsBase;
$tdataoutbox_line[".hasEvents"] = false;

?>