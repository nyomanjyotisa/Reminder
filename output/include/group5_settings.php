<?php
$tdatagroup5 = array();
$tdatagroup5[".searchableFields"] = array();
$tdatagroup5[".ShortName"] = "group5";
$tdatagroup5[".OwnerID"] = "";
$tdatagroup5[".OriginalTable"] = "group";


$tdatagroup5[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagroup5[".originalPagesByType"] = $tdatagroup5[".pagesByType"];
$tdatagroup5[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagroup5[".originalPages"] = $tdatagroup5[".pages"];
$tdatagroup5[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagroup5[".originalDefaultPages"] = $tdatagroup5[".defaultPages"];

//	field labels
$fieldLabelsgroup5 = array();
$fieldToolTipsgroup5 = array();
$pageTitlesgroup5 = array();
$placeHoldersgroup5 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgroup5["English"] = array();
	$fieldToolTipsgroup5["English"] = array();
	$placeHoldersgroup5["English"] = array();
	$pageTitlesgroup5["English"] = array();
	$fieldLabelsgroup5["English"]["group_id"] = "Group Id";
	$fieldToolTipsgroup5["English"]["group_id"] = "";
	$placeHoldersgroup5["English"]["group_id"] = "";
	$fieldLabelsgroup5["English"]["group_name"] = "Group Name";
	$fieldToolTipsgroup5["English"]["group_name"] = "";
	$placeHoldersgroup5["English"]["group_name"] = "";
	$fieldLabelsgroup5["English"]["description"] = "Description";
	$fieldToolTipsgroup5["English"]["description"] = "";
	$placeHoldersgroup5["English"]["description"] = "";
	$fieldLabelsgroup5["English"]["logo"] = "Logo";
	$fieldToolTipsgroup5["English"]["logo"] = "";
	$placeHoldersgroup5["English"]["logo"] = "";
	$fieldLabelsgroup5["English"]["token_type"] = "Token Type";
	$fieldToolTipsgroup5["English"]["token_type"] = "";
	$placeHoldersgroup5["English"]["token_type"] = "";
	$fieldLabelsgroup5["English"]["token_group"] = "Token Group";
	$fieldToolTipsgroup5["English"]["token_group"] = "";
	$placeHoldersgroup5["English"]["token_group"] = "";
	$fieldLabelsgroup5["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup5["English"]["membership_type"] = "";
	$placeHoldersgroup5["English"]["membership_type"] = "";
	$fieldLabelsgroup5["English"]["business_type"] = "Business Type";
	$fieldToolTipsgroup5["English"]["business_type"] = "";
	$placeHoldersgroup5["English"]["business_type"] = "";
	$fieldLabelsgroup5["English"]["open_time"] = "Open Time";
	$fieldToolTipsgroup5["English"]["open_time"] = "";
	$placeHoldersgroup5["English"]["open_time"] = "";
	$fieldLabelsgroup5["English"]["close_time"] = "Close Time";
	$fieldToolTipsgroup5["English"]["close_time"] = "";
	$placeHoldersgroup5["English"]["close_time"] = "";
	$fieldLabelsgroup5["English"]["off_day"] = "Off Day";
	$fieldToolTipsgroup5["English"]["off_day"] = "";
	$placeHoldersgroup5["English"]["off_day"] = "";
	$fieldLabelsgroup5["English"]["valid"] = "Valid";
	$fieldToolTipsgroup5["English"]["valid"] = "";
	$placeHoldersgroup5["English"]["valid"] = "";
	$fieldLabelsgroup5["English"]["member_id"] = "Member Id";
	$fieldToolTipsgroup5["English"]["member_id"] = "";
	$placeHoldersgroup5["English"]["member_id"] = "";
	if (count($fieldToolTipsgroup5["English"]))
		$tdatagroup5[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgroup5["Indonesian"] = array();
	$fieldToolTipsgroup5["Indonesian"] = array();
	$placeHoldersgroup5["Indonesian"] = array();
	$pageTitlesgroup5["Indonesian"] = array();
	$fieldLabelsgroup5["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsgroup5["Indonesian"]["group_id"] = "";
	$placeHoldersgroup5["Indonesian"]["group_id"] = "";
	$fieldLabelsgroup5["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipsgroup5["Indonesian"]["group_name"] = "";
	$placeHoldersgroup5["Indonesian"]["group_name"] = "";
	$fieldLabelsgroup5["Indonesian"]["description"] = "Description";
	$fieldToolTipsgroup5["Indonesian"]["description"] = "";
	$placeHoldersgroup5["Indonesian"]["description"] = "";
	$fieldLabelsgroup5["Indonesian"]["logo"] = "Logo";
	$fieldToolTipsgroup5["Indonesian"]["logo"] = "";
	$placeHoldersgroup5["Indonesian"]["logo"] = "";
	$fieldLabelsgroup5["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipsgroup5["Indonesian"]["token_type"] = "";
	$placeHoldersgroup5["Indonesian"]["token_type"] = "";
	$fieldLabelsgroup5["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipsgroup5["Indonesian"]["token_group"] = "";
	$placeHoldersgroup5["Indonesian"]["token_group"] = "";
	$fieldLabelsgroup5["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipsgroup5["Indonesian"]["membership_type"] = "";
	$placeHoldersgroup5["Indonesian"]["membership_type"] = "";
	$fieldLabelsgroup5["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipsgroup5["Indonesian"]["business_type"] = "";
	$placeHoldersgroup5["Indonesian"]["business_type"] = "";
	$fieldLabelsgroup5["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipsgroup5["Indonesian"]["open_time"] = "";
	$placeHoldersgroup5["Indonesian"]["open_time"] = "";
	$fieldLabelsgroup5["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipsgroup5["Indonesian"]["close_time"] = "";
	$placeHoldersgroup5["Indonesian"]["close_time"] = "";
	$fieldLabelsgroup5["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipsgroup5["Indonesian"]["off_day"] = "";
	$placeHoldersgroup5["Indonesian"]["off_day"] = "";
	$fieldLabelsgroup5["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsgroup5["Indonesian"]["valid"] = "";
	$placeHoldersgroup5["Indonesian"]["valid"] = "";
	$fieldLabelsgroup5["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsgroup5["Indonesian"]["member_id"] = "";
	$placeHoldersgroup5["Indonesian"]["member_id"] = "";
	if (count($fieldToolTipsgroup5["Indonesian"]))
		$tdatagroup5[".isUseToolTips"] = true;
}


	$tdatagroup5[".NCSearch"] = true;



$tdatagroup5[".shortTableName"] = "group5";
$tdatagroup5[".nSecOptions"] = 0;

$tdatagroup5[".mainTableOwnerID"] = "";
$tdatagroup5[".entityType"] = 1;
$tdatagroup5[".connId"] = "notif_basic1_at_localhost";


$tdatagroup5[".strOriginalTableName"] = "group";

	



$tdatagroup5[".showAddInPopup"] = false;

$tdatagroup5[".showEditInPopup"] = false;

$tdatagroup5[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagroup5[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagroup5[".listAjax"] = false;
//	temporary
$tdatagroup5[".listAjax"] = false;

	$tdatagroup5[".audit"] = false;

	$tdatagroup5[".locking"] = false;


$pages = $tdatagroup5[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagroup5[".edit"] = true;
	$tdatagroup5[".afterEditAction"] = 0;
	$tdatagroup5[".closePopupAfterEdit"] = 1;
	$tdatagroup5[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagroup5[".add"] = true;
$tdatagroup5[".afterAddAction"] = 0;
$tdatagroup5[".closePopupAfterAdd"] = 1;
$tdatagroup5[".afterAddActionDetTable"] = "group_agenda";
}

if( $pages[PAGE_LIST] ) {
	$tdatagroup5[".list"] = true;
}



$tdatagroup5[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagroup5[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagroup5[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagroup5[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagroup5[".printFriendly"] = true;
}



$tdatagroup5[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagroup5[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagroup5[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagroup5[".isUseAjaxSuggest"] = true;

$tdatagroup5[".rowHighlite"] = true;





$tdatagroup5[".ajaxCodeSnippetAdded"] = false;

$tdatagroup5[".buttonsAdded"] = false;

$tdatagroup5[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagroup5[".isUseTimeForSearch"] = true;


$tdatagroup5[".badgeColor"] = "DB7093";


$tdatagroup5[".allSearchFields"] = array();
$tdatagroup5[".filterFields"] = array();
$tdatagroup5[".requiredSearchFields"] = array();

$tdatagroup5[".googleLikeFields"] = array();
$tdatagroup5[".googleLikeFields"][] = "group_id";
$tdatagroup5[".googleLikeFields"][] = "group_name";
$tdatagroup5[".googleLikeFields"][] = "description";
$tdatagroup5[".googleLikeFields"][] = "logo";
$tdatagroup5[".googleLikeFields"][] = "token_type";
$tdatagroup5[".googleLikeFields"][] = "token_group";
$tdatagroup5[".googleLikeFields"][] = "membership_type";
$tdatagroup5[".googleLikeFields"][] = "business_type";
$tdatagroup5[".googleLikeFields"][] = "open_time";
$tdatagroup5[".googleLikeFields"][] = "close_time";
$tdatagroup5[".googleLikeFields"][] = "off_day";
$tdatagroup5[".googleLikeFields"][] = "valid";
$tdatagroup5[".googleLikeFields"][] = "member_id";



$tdatagroup5[".tableType"] = "list";

$tdatagroup5[".printerPageOrientation"] = 0;
$tdatagroup5[".nPrinterPageScale"] = 100;

$tdatagroup5[".nPrinterSplitRecords"] = 40;

$tdatagroup5[".geocodingEnabled"] = false;










$tdatagroup5[".pageSize"] = 20;

$tdatagroup5[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagroup5[".strOrderBy"] = $tstrOrderBy;

$tdatagroup5[".orderindexes"] = array();


$tdatagroup5[".sqlHead"] = "SELECT `group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  `group`.valid,  group_member.member_id";
$tdatagroup5[".sqlFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$tdatagroup5[".sqlWhereExpr"] = "";
$tdatagroup5[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "valid = 'valid'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatagroup5[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagroup5[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagroup5[".arrGroupsPerPage"] = $arrGPP;

$tdatagroup5[".highlightSearchResults"] = true;

$tableKeysgroup5 = array();
$tableKeysgroup5[] = "group_id";
$tdatagroup5[".Keys"] = $tableKeysgroup5;


$tdatagroup5[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","group_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "group_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.group_id";

	
	
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


	$tdatagroup5["group_id"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "group_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.group_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatagroup5["group_name"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.description";

	
	
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


	$tdatagroup5["description"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","logo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "logo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.logo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 150;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatagroup5["logo"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","token_type");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "token_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.token_type";

	
	
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
	$edata["LookupValues"][] = "public";
	$edata["LookupValues"][] = "token";
	$edata["LookupValues"][] = "lookup";
	$edata["LookupValues"][] = "API";

	
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


	$tdatagroup5["token_type"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","token_group");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "token_group";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.token_group";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatagroup5["token_group"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","membership_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "membership_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.membership_type";

	
	
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
	$edata["LookupTable"] = "membership_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "membership_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "membership_type";

	

	
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


	$tdatagroup5["membership_type"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","business_type");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "business_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.business_type";

	
	
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
	$edata["LookupTable"] = "business_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "business_type_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "business_type";

	

	
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


	$tdatagroup5["business_type"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","open_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "open_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.open_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatagroup5["open_time"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","close_time");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "close_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.close_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatagroup5["close_time"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","off_day");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "off_day";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.off_day";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatagroup5["off_day"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "off_day";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("group5","valid");
	$fdata["FieldType"] = 129;

	
	
	
			

		$fdata["strField"] = "valid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`.valid";

	
	
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


	$tdatagroup5["valid"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "valid";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("group5","member_id");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "member_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_member.member_id";

	
	
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


	$tdatagroup5["member_id"] = $fdata;
		$tdatagroup5[".searchableFields"][] = "member_id";


$tables_data["group5"]=&$tdatagroup5;
$field_labels["group5"] = &$fieldLabelsgroup5;
$fieldToolTips["group5"] = &$fieldToolTipsgroup5;
$placeHolders["group5"] = &$placeHoldersgroup5;
$page_titles["group5"] = &$pageTitlesgroup5;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["group5"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["group5"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_group5()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  `group`.valid,  group_member.member_id";
$proto0["m_strFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
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
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto6["m_sql"] = "`group`.group_id";
$proto6["m_srcTableName"] = "group5";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto8["m_sql"] = "`group`.group_name";
$proto8["m_srcTableName"] = "group5";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto10["m_sql"] = "`group`.description";
$proto10["m_srcTableName"] = "group5";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto12["m_sql"] = "`group`.logo";
$proto12["m_srcTableName"] = "group5";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto14["m_sql"] = "`group`.token_type";
$proto14["m_srcTableName"] = "group5";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto16["m_sql"] = "`group`.token_group";
$proto16["m_srcTableName"] = "group5";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto18["m_sql"] = "`group`.membership_type";
$proto18["m_srcTableName"] = "group5";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto20["m_sql"] = "`group`.business_type";
$proto20["m_srcTableName"] = "group5";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "open_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto22["m_sql"] = "`group`.open_time";
$proto22["m_srcTableName"] = "group5";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_time",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto24["m_sql"] = "`group`.close_time";
$proto24["m_srcTableName"] = "group5";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "off_day",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto26["m_sql"] = "`group`.off_day";
$proto26["m_srcTableName"] = "group5";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto28["m_sql"] = "`group`.valid";
$proto28["m_srcTableName"] = "group5";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "group5"
));

$proto30["m_sql"] = "group_member.member_id";
$proto30["m_srcTableName"] = "group5";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "group";
$proto33["m_srcTableName"] = "group5";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "group_id";
$proto33["m_columns"][] = "group_name";
$proto33["m_columns"][] = "description";
$proto33["m_columns"][] = "logo";
$proto33["m_columns"][] = "token_type";
$proto33["m_columns"][] = "token_group";
$proto33["m_columns"][] = "membership_type";
$proto33["m_columns"][] = "business_type";
$proto33["m_columns"][] = "open_time";
$proto33["m_columns"][] = "close_time";
$proto33["m_columns"][] = "off_day";
$proto33["m_columns"][] = "valid";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`group`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "group5";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "group_member";
$proto37["m_srcTableName"] = "group5";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "group_member_id";
$proto37["m_columns"][] = "member_id";
$proto37["m_columns"][] = "group_id";
$proto37["m_columns"][] = "user_type";
$proto37["m_columns"][] = "token_group";
$proto37["m_columns"][] = "identifier_group";
$proto37["m_columns"][] = "token_personal";
$proto37["m_columns"][] = "membership_type";
$proto37["m_columns"][] = "valid";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "group5";
$proto38=array();
$proto38["m_sql"] = "`group`.group_id = group_member.group_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "group5"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= group_member.group_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="group5";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_group5 = createSqlQuery_group5();


	
		;

													

$tdatagroup5[".sqlquery"] = $queryData_group5;



include_once(getabspath("include/group5_events.php"));
$tableEvents["group5"] = new eventclass_group5;
$tdatagroup5[".hasEvents"] = true;

?>