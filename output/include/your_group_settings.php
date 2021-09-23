<?php
$tdatayour_group = array();
$tdatayour_group[".searchableFields"] = array();
$tdatayour_group[".ShortName"] = "your_group";
$tdatayour_group[".OwnerID"] = "";
$tdatayour_group[".OriginalTable"] = "group";


$tdatayour_group[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatayour_group[".originalPagesByType"] = $tdatayour_group[".pagesByType"];
$tdatayour_group[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatayour_group[".originalPages"] = $tdatayour_group[".pages"];
$tdatayour_group[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatayour_group[".originalDefaultPages"] = $tdatayour_group[".defaultPages"];

//	field labels
$fieldLabelsyour_group = array();
$fieldToolTipsyour_group = array();
$pageTitlesyour_group = array();
$placeHoldersyour_group = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsyour_group["English"] = array();
	$fieldToolTipsyour_group["English"] = array();
	$placeHoldersyour_group["English"] = array();
	$pageTitlesyour_group["English"] = array();
	$fieldLabelsyour_group["English"]["group_id"] = "Group Id";
	$fieldToolTipsyour_group["English"]["group_id"] = "";
	$placeHoldersyour_group["English"]["group_id"] = "";
	$fieldLabelsyour_group["English"]["group_name"] = "Group Name";
	$fieldToolTipsyour_group["English"]["group_name"] = "";
	$placeHoldersyour_group["English"]["group_name"] = "";
	$fieldLabelsyour_group["English"]["description"] = "Description";
	$fieldToolTipsyour_group["English"]["description"] = "";
	$placeHoldersyour_group["English"]["description"] = "";
	$fieldLabelsyour_group["English"]["logo"] = "Logo";
	$fieldToolTipsyour_group["English"]["logo"] = "";
	$placeHoldersyour_group["English"]["logo"] = "";
	$fieldLabelsyour_group["English"]["token_type"] = "Token Type";
	$fieldToolTipsyour_group["English"]["token_type"] = "";
	$placeHoldersyour_group["English"]["token_type"] = "";
	$fieldLabelsyour_group["English"]["token_group"] = "Token Group";
	$fieldToolTipsyour_group["English"]["token_group"] = "";
	$placeHoldersyour_group["English"]["token_group"] = "";
	$fieldLabelsyour_group["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsyour_group["English"]["membership_type"] = "";
	$placeHoldersyour_group["English"]["membership_type"] = "";
	$fieldLabelsyour_group["English"]["business_type"] = "Business Type";
	$fieldToolTipsyour_group["English"]["business_type"] = "";
	$placeHoldersyour_group["English"]["business_type"] = "";
	$fieldLabelsyour_group["English"]["open_time"] = "Open Time";
	$fieldToolTipsyour_group["English"]["open_time"] = "";
	$placeHoldersyour_group["English"]["open_time"] = "";
	$fieldLabelsyour_group["English"]["close_time"] = "Close Time";
	$fieldToolTipsyour_group["English"]["close_time"] = "";
	$placeHoldersyour_group["English"]["close_time"] = "";
	$fieldLabelsyour_group["English"]["off_day"] = "Off Day";
	$fieldToolTipsyour_group["English"]["off_day"] = "";
	$placeHoldersyour_group["English"]["off_day"] = "";
	$fieldLabelsyour_group["English"]["valid"] = "Valid";
	$fieldToolTipsyour_group["English"]["valid"] = "";
	$placeHoldersyour_group["English"]["valid"] = "";
	if (count($fieldToolTipsyour_group["English"]))
		$tdatayour_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsyour_group["Indonesian"] = array();
	$fieldToolTipsyour_group["Indonesian"] = array();
	$placeHoldersyour_group["Indonesian"] = array();
	$pageTitlesyour_group["Indonesian"] = array();
	$fieldLabelsyour_group["Indonesian"]["group_id"] = "Group Id";
	$fieldToolTipsyour_group["Indonesian"]["group_id"] = "";
	$placeHoldersyour_group["Indonesian"]["group_id"] = "";
	$fieldLabelsyour_group["Indonesian"]["group_name"] = "Group Name";
	$fieldToolTipsyour_group["Indonesian"]["group_name"] = "";
	$placeHoldersyour_group["Indonesian"]["group_name"] = "";
	$fieldLabelsyour_group["Indonesian"]["description"] = "Description";
	$fieldToolTipsyour_group["Indonesian"]["description"] = "";
	$placeHoldersyour_group["Indonesian"]["description"] = "";
	$fieldLabelsyour_group["Indonesian"]["logo"] = "Logo";
	$fieldToolTipsyour_group["Indonesian"]["logo"] = "";
	$placeHoldersyour_group["Indonesian"]["logo"] = "";
	$fieldLabelsyour_group["Indonesian"]["token_type"] = "Token Type";
	$fieldToolTipsyour_group["Indonesian"]["token_type"] = "";
	$placeHoldersyour_group["Indonesian"]["token_type"] = "";
	$fieldLabelsyour_group["Indonesian"]["token_group"] = "Token Group";
	$fieldToolTipsyour_group["Indonesian"]["token_group"] = "";
	$placeHoldersyour_group["Indonesian"]["token_group"] = "";
	$fieldLabelsyour_group["Indonesian"]["membership_type"] = "Membership Type";
	$fieldToolTipsyour_group["Indonesian"]["membership_type"] = "";
	$placeHoldersyour_group["Indonesian"]["membership_type"] = "";
	$fieldLabelsyour_group["Indonesian"]["business_type"] = "Business Type";
	$fieldToolTipsyour_group["Indonesian"]["business_type"] = "";
	$placeHoldersyour_group["Indonesian"]["business_type"] = "";
	$fieldLabelsyour_group["Indonesian"]["open_time"] = "Open Time";
	$fieldToolTipsyour_group["Indonesian"]["open_time"] = "";
	$placeHoldersyour_group["Indonesian"]["open_time"] = "";
	$fieldLabelsyour_group["Indonesian"]["close_time"] = "Close Time";
	$fieldToolTipsyour_group["Indonesian"]["close_time"] = "";
	$placeHoldersyour_group["Indonesian"]["close_time"] = "";
	$fieldLabelsyour_group["Indonesian"]["off_day"] = "Off Day";
	$fieldToolTipsyour_group["Indonesian"]["off_day"] = "";
	$placeHoldersyour_group["Indonesian"]["off_day"] = "";
	$fieldLabelsyour_group["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsyour_group["Indonesian"]["valid"] = "";
	$placeHoldersyour_group["Indonesian"]["valid"] = "";
	if (count($fieldToolTipsyour_group["Indonesian"]))
		$tdatayour_group[".isUseToolTips"] = true;
}


	$tdatayour_group[".NCSearch"] = true;



$tdatayour_group[".shortTableName"] = "your_group";
$tdatayour_group[".nSecOptions"] = 0;

$tdatayour_group[".mainTableOwnerID"] = "";
$tdatayour_group[".entityType"] = 1;
$tdatayour_group[".connId"] = "notif_basic1_at_localhost";


$tdatayour_group[".strOriginalTableName"] = "group";

	



$tdatayour_group[".showAddInPopup"] = false;

$tdatayour_group[".showEditInPopup"] = false;

$tdatayour_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatayour_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatayour_group[".listAjax"] = false;
//	temporary
$tdatayour_group[".listAjax"] = false;

	$tdatayour_group[".audit"] = false;

	$tdatayour_group[".locking"] = false;


$pages = $tdatayour_group[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatayour_group[".edit"] = true;
	$tdatayour_group[".afterEditAction"] = 0;
	$tdatayour_group[".closePopupAfterEdit"] = 1;
	$tdatayour_group[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatayour_group[".add"] = true;
$tdatayour_group[".afterAddAction"] = 0;
$tdatayour_group[".closePopupAfterAdd"] = 1;
$tdatayour_group[".afterAddActionDetTable"] = "group_agenda";
}

if( $pages[PAGE_LIST] ) {
	$tdatayour_group[".list"] = true;
}



$tdatayour_group[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatayour_group[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatayour_group[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatayour_group[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatayour_group[".printFriendly"] = true;
}



$tdatayour_group[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatayour_group[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatayour_group[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatayour_group[".isUseAjaxSuggest"] = true;

$tdatayour_group[".rowHighlite"] = true;





$tdatayour_group[".ajaxCodeSnippetAdded"] = false;

$tdatayour_group[".buttonsAdded"] = false;

$tdatayour_group[".addPageEvents"] = true;

// use timepicker for search panel
$tdatayour_group[".isUseTimeForSearch"] = true;


$tdatayour_group[".badgeColor"] = "6DA5C8";


$tdatayour_group[".allSearchFields"] = array();
$tdatayour_group[".filterFields"] = array();
$tdatayour_group[".requiredSearchFields"] = array();

$tdatayour_group[".googleLikeFields"] = array();
$tdatayour_group[".googleLikeFields"][] = "group_id";
$tdatayour_group[".googleLikeFields"][] = "group_name";
$tdatayour_group[".googleLikeFields"][] = "description";
$tdatayour_group[".googleLikeFields"][] = "logo";
$tdatayour_group[".googleLikeFields"][] = "token_type";
$tdatayour_group[".googleLikeFields"][] = "token_group";
$tdatayour_group[".googleLikeFields"][] = "membership_type";
$tdatayour_group[".googleLikeFields"][] = "business_type";
$tdatayour_group[".googleLikeFields"][] = "open_time";
$tdatayour_group[".googleLikeFields"][] = "close_time";
$tdatayour_group[".googleLikeFields"][] = "off_day";
$tdatayour_group[".googleLikeFields"][] = "valid";



$tdatayour_group[".tableType"] = "list";

$tdatayour_group[".printerPageOrientation"] = 0;
$tdatayour_group[".nPrinterPageScale"] = 100;

$tdatayour_group[".nPrinterSplitRecords"] = 40;

$tdatayour_group[".geocodingEnabled"] = false;










$tdatayour_group[".pageSize"] = 20;

$tdatayour_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatayour_group[".strOrderBy"] = $tstrOrderBy;

$tdatayour_group[".orderindexes"] = array();


$tdatayour_group[".sqlHead"] = "SELECT Distinct `group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  `group`.valid";
$tdatayour_group[".sqlFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$tdatayour_group[".sqlWhereExpr"] = "";
$tdatayour_group[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "",
	'nameType' => 'Text',
	'where' => "`group`.group_id = ':session.group_id'",
	'showRowCount' => 0,
	'hideEmpty' => 1,
);
$tdatayour_group[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatayour_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatayour_group[".arrGroupsPerPage"] = $arrGPP;

$tdatayour_group[".highlightSearchResults"] = true;

$tableKeysyour_group = array();
$tableKeysyour_group[] = "group_id";
$tdatayour_group[".Keys"] = $tableKeysyour_group;


$tdatayour_group[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","group_id");
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


	$tdatayour_group["group_id"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","group_name");
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


	$tdatayour_group["group_name"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","description");
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


	$tdatayour_group["description"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","logo");
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


	$tdatayour_group["logo"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","token_type");
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


	$tdatayour_group["token_type"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","token_group");
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


	$tdatayour_group["token_group"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","membership_type");
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


	$tdatayour_group["membership_type"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","business_type");
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


	$tdatayour_group["business_type"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","open_time");
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


	$tdatayour_group["open_time"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","close_time");
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


	$tdatayour_group["close_time"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","off_day");
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


	$tdatayour_group["off_day"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "off_day";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("your_group","valid");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";

	
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


	$tdatayour_group["valid"] = $fdata;
		$tdatayour_group[".searchableFields"][] = "valid";


$tables_data["your_group"]=&$tdatayour_group;
$field_labels["your_group"] = &$fieldLabelsyour_group;
$fieldToolTips["your_group"] = &$fieldToolTipsyour_group;
$placeHolders["your_group"] = &$placeHoldersyour_group;
$page_titles["your_group"] = &$pageTitlesyour_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["your_group"] = array();
//	group_agenda
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda";
		$detailsParam["dOriginalTable"] = "group_agenda";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_agenda_type
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_agenda_type";
		$detailsParam["dOriginalTable"] = "group_agenda_type";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_agenda_type";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_agenda_type");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_member
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member";
		$detailsParam["dOriginalTable"] = "group_member";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_checkin
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_checkin";
		$detailsParam["dOriginalTable"] = "group_member_checkin";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_checkin";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_checkin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_order
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order";
		$detailsParam["dOriginalTable"] = "group_member_order";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_member_order_detail
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_member_order_detail";
		$detailsParam["dOriginalTable"] = "group_member_order_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_member_order_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_member_order_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_operation_off
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_operation_off";
		$detailsParam["dOriginalTable"] = "group_operation_off";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_operation_off";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_operation_off");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	group_product
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="group_product";
		$detailsParam["dOriginalTable"] = "group_product";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "group_product";
	$detailsParam["dCaptionTable"] = GetTableCaption("group_product");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	lookup_stok
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lookup_stok";
		$detailsParam["dOriginalTable"] = "lookup_stok";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lookup_stok";
	$detailsParam["dCaptionTable"] = GetTableCaption("lookup_stok");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="group_id";
//	lookup_token
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="lookup_token";
		$detailsParam["dOriginalTable"] = "lookup_token";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "lookup_token";
	$detailsParam["dCaptionTable"] = GetTableCaption("lookup_token");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["your_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["your_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["your_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["your_group"][$dIndex]["detailKeys"][]="id_group";

// tables which are master tables for current table (detail)
$masterTablesData["your_group"] = array();



	
				$strOriginalDetailsTable="business_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="business_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "business_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["your_group"][0] = $masterParams;
				$masterTablesData["your_group"][0]["masterKeys"] = array();
	$masterTablesData["your_group"][0]["masterKeys"][]="business_type_id";
				$masterTablesData["your_group"][0]["detailKeys"] = array();
	$masterTablesData["your_group"][0]["detailKeys"][]="business_type";
		
	
				$strOriginalDetailsTable="membership_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="membership_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "membership_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["your_group"][1] = $masterParams;
				$masterTablesData["your_group"][1]["masterKeys"] = array();
	$masterTablesData["your_group"][1]["masterKeys"][]="membership_id";
				$masterTablesData["your_group"][1]["detailKeys"] = array();
	$masterTablesData["your_group"][1]["detailKeys"][]="membership_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_your_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT Distinct";
$proto0["m_strFieldList"] = "`group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  `group`.valid";
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
	"m_srcTableName" => "your_group"
));

$proto6["m_sql"] = "`group`.group_id";
$proto6["m_srcTableName"] = "your_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto8["m_sql"] = "`group`.group_name";
$proto8["m_srcTableName"] = "your_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto10["m_sql"] = "`group`.description";
$proto10["m_srcTableName"] = "your_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto12["m_sql"] = "`group`.logo";
$proto12["m_srcTableName"] = "your_group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_type",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto14["m_sql"] = "`group`.token_type";
$proto14["m_srcTableName"] = "your_group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto16["m_sql"] = "`group`.token_group";
$proto16["m_srcTableName"] = "your_group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto18["m_sql"] = "`group`.membership_type";
$proto18["m_srcTableName"] = "your_group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto20["m_sql"] = "`group`.business_type";
$proto20["m_srcTableName"] = "your_group";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "open_time",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto22["m_sql"] = "`group`.open_time";
$proto22["m_srcTableName"] = "your_group";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_time",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto24["m_sql"] = "`group`.close_time";
$proto24["m_srcTableName"] = "your_group";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "off_day",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto26["m_sql"] = "`group`.off_day";
$proto26["m_srcTableName"] = "your_group";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto28["m_sql"] = "`group`.valid";
$proto28["m_srcTableName"] = "your_group";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "group";
$proto31["m_srcTableName"] = "your_group";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "group_id";
$proto31["m_columns"][] = "group_name";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "logo";
$proto31["m_columns"][] = "token_type";
$proto31["m_columns"][] = "token_group";
$proto31["m_columns"][] = "membership_type";
$proto31["m_columns"][] = "business_type";
$proto31["m_columns"][] = "open_time";
$proto31["m_columns"][] = "close_time";
$proto31["m_columns"][] = "off_day";
$proto31["m_columns"][] = "valid";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`group`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "your_group";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "group_member";
$proto35["m_srcTableName"] = "your_group";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "group_member_id";
$proto35["m_columns"][] = "member_id";
$proto35["m_columns"][] = "group_id";
$proto35["m_columns"][] = "user_type";
$proto35["m_columns"][] = "token_group";
$proto35["m_columns"][] = "identifier_group";
$proto35["m_columns"][] = "token_personal";
$proto35["m_columns"][] = "membership_type";
$proto35["m_columns"][] = "valid";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "your_group";
$proto36=array();
$proto36["m_sql"] = "`group`.group_id = group_member.group_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "your_group"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= group_member.group_id";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="your_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_your_group = createSqlQuery_your_group();


	
		;

												

$tdatayour_group[".sqlquery"] = $queryData_your_group;



include_once(getabspath("include/your_group_events.php"));
$tableEvents["your_group"] = new eventclass_your_group;
$tdatayour_group[".hasEvents"] = true;

?>