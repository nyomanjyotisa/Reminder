<?php
$tdatanew_group_request = array();
$tdatanew_group_request[".searchableFields"] = array();
$tdatanew_group_request[".ShortName"] = "new_group_request";
$tdatanew_group_request[".OwnerID"] = "";
$tdatanew_group_request[".OriginalTable"] = "group";


$tdatanew_group_request[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanew_group_request[".originalPagesByType"] = $tdatanew_group_request[".pagesByType"];
$tdatanew_group_request[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanew_group_request[".originalPages"] = $tdatanew_group_request[".pages"];
$tdatanew_group_request[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanew_group_request[".originalDefaultPages"] = $tdatanew_group_request[".defaultPages"];

//	field labels
$fieldLabelsnew_group_request = array();
$fieldToolTipsnew_group_request = array();
$pageTitlesnew_group_request = array();
$placeHoldersnew_group_request = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnew_group_request["English"] = array();
	$fieldToolTipsnew_group_request["English"] = array();
	$placeHoldersnew_group_request["English"] = array();
	$pageTitlesnew_group_request["English"] = array();
	$fieldLabelsnew_group_request["English"]["group_id"] = "Group Id";
	$fieldToolTipsnew_group_request["English"]["group_id"] = "";
	$placeHoldersnew_group_request["English"]["group_id"] = "";
	$fieldLabelsnew_group_request["English"]["group_name"] = "Group Name";
	$fieldToolTipsnew_group_request["English"]["group_name"] = "";
	$placeHoldersnew_group_request["English"]["group_name"] = "";
	$fieldLabelsnew_group_request["English"]["description"] = "Description";
	$fieldToolTipsnew_group_request["English"]["description"] = "";
	$placeHoldersnew_group_request["English"]["description"] = "";
	$fieldLabelsnew_group_request["English"]["logo"] = "Logo";
	$fieldToolTipsnew_group_request["English"]["logo"] = "";
	$placeHoldersnew_group_request["English"]["logo"] = "";
	$fieldLabelsnew_group_request["English"]["token_type"] = "Token Type";
	$fieldToolTipsnew_group_request["English"]["token_type"] = "";
	$placeHoldersnew_group_request["English"]["token_type"] = "";
	$fieldLabelsnew_group_request["English"]["token_group"] = "Token Group";
	$fieldToolTipsnew_group_request["English"]["token_group"] = "";
	$placeHoldersnew_group_request["English"]["token_group"] = "";
	$fieldLabelsnew_group_request["English"]["membership_type"] = "Membership Type";
	$fieldToolTipsnew_group_request["English"]["membership_type"] = "";
	$placeHoldersnew_group_request["English"]["membership_type"] = "";
	$fieldLabelsnew_group_request["English"]["business_type"] = "Business Type";
	$fieldToolTipsnew_group_request["English"]["business_type"] = "";
	$placeHoldersnew_group_request["English"]["business_type"] = "";
	$fieldLabelsnew_group_request["English"]["open_time"] = "Open Time";
	$fieldToolTipsnew_group_request["English"]["open_time"] = "";
	$placeHoldersnew_group_request["English"]["open_time"] = "";
	$fieldLabelsnew_group_request["English"]["close_time"] = "Close Time";
	$fieldToolTipsnew_group_request["English"]["close_time"] = "";
	$placeHoldersnew_group_request["English"]["close_time"] = "";
	$fieldLabelsnew_group_request["English"]["off_day"] = "Off Day";
	$fieldToolTipsnew_group_request["English"]["off_day"] = "";
	$placeHoldersnew_group_request["English"]["off_day"] = "";
	$fieldLabelsnew_group_request["English"]["valid"] = "Valid";
	$fieldToolTipsnew_group_request["English"]["valid"] = "";
	$placeHoldersnew_group_request["English"]["valid"] = "";
	$fieldLabelsnew_group_request["English"]["member_id"] = "Member Id";
	$fieldToolTipsnew_group_request["English"]["member_id"] = "";
	$placeHoldersnew_group_request["English"]["member_id"] = "";
	if (count($fieldToolTipsnew_group_request["English"]))
		$tdatanew_group_request[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsnew_group_request["Indonesian"] = array();
	$fieldToolTipsnew_group_request["Indonesian"] = array();
	$placeHoldersnew_group_request["Indonesian"] = array();
	$pageTitlesnew_group_request["Indonesian"] = array();
	$fieldLabelsnew_group_request["Indonesian"]["group_id"] = "Id Grup";
	$fieldToolTipsnew_group_request["Indonesian"]["group_id"] = "";
	$placeHoldersnew_group_request["Indonesian"]["group_id"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["group_name"] = "Nama Group";
	$fieldToolTipsnew_group_request["Indonesian"]["group_name"] = "";
	$placeHoldersnew_group_request["Indonesian"]["group_name"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["description"] = "Deskripsi";
	$fieldToolTipsnew_group_request["Indonesian"]["description"] = "";
	$placeHoldersnew_group_request["Indonesian"]["description"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["logo"] = "Logo";
	$fieldToolTipsnew_group_request["Indonesian"]["logo"] = "";
	$placeHoldersnew_group_request["Indonesian"]["logo"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["token_type"] = "Tipe Token";
	$fieldToolTipsnew_group_request["Indonesian"]["token_type"] = "";
	$placeHoldersnew_group_request["Indonesian"]["token_type"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["token_group"] = "Token Grup";
	$fieldToolTipsnew_group_request["Indonesian"]["token_group"] = "";
	$placeHoldersnew_group_request["Indonesian"]["token_group"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["membership_type"] = "Tipe Keanggotaan";
	$fieldToolTipsnew_group_request["Indonesian"]["membership_type"] = "";
	$placeHoldersnew_group_request["Indonesian"]["membership_type"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["business_type"] = "Tipe Bisnis";
	$fieldToolTipsnew_group_request["Indonesian"]["business_type"] = "";
	$placeHoldersnew_group_request["Indonesian"]["business_type"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["open_time"] = "Waktu Buka";
	$fieldToolTipsnew_group_request["Indonesian"]["open_time"] = "";
	$placeHoldersnew_group_request["Indonesian"]["open_time"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["close_time"] = "Waktu Tutup";
	$fieldToolTipsnew_group_request["Indonesian"]["close_time"] = "";
	$placeHoldersnew_group_request["Indonesian"]["close_time"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["off_day"] = "Hari Libur";
	$fieldToolTipsnew_group_request["Indonesian"]["off_day"] = "";
	$placeHoldersnew_group_request["Indonesian"]["off_day"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["valid"] = "Valid";
	$fieldToolTipsnew_group_request["Indonesian"]["valid"] = "";
	$placeHoldersnew_group_request["Indonesian"]["valid"] = "";
	$fieldLabelsnew_group_request["Indonesian"]["member_id"] = "Member Id";
	$fieldToolTipsnew_group_request["Indonesian"]["member_id"] = "";
	$placeHoldersnew_group_request["Indonesian"]["member_id"] = "";
	if (count($fieldToolTipsnew_group_request["Indonesian"]))
		$tdatanew_group_request[".isUseToolTips"] = true;
}


	$tdatanew_group_request[".NCSearch"] = true;



$tdatanew_group_request[".shortTableName"] = "new_group_request";
$tdatanew_group_request[".nSecOptions"] = 0;

$tdatanew_group_request[".mainTableOwnerID"] = "";
$tdatanew_group_request[".entityType"] = 1;
$tdatanew_group_request[".connId"] = "notif_basic1_at_localhost";


$tdatanew_group_request[".strOriginalTableName"] = "group";

	



$tdatanew_group_request[".showAddInPopup"] = false;

$tdatanew_group_request[".showEditInPopup"] = false;

$tdatanew_group_request[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatanew_group_request[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatanew_group_request[".listAjax"] = false;
//	temporary
$tdatanew_group_request[".listAjax"] = false;

	$tdatanew_group_request[".audit"] = false;

	$tdatanew_group_request[".locking"] = false;


$pages = $tdatanew_group_request[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanew_group_request[".edit"] = true;
	$tdatanew_group_request[".afterEditAction"] = 0;
	$tdatanew_group_request[".closePopupAfterEdit"] = 1;
	$tdatanew_group_request[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanew_group_request[".add"] = true;
$tdatanew_group_request[".afterAddAction"] = 0;
$tdatanew_group_request[".closePopupAfterAdd"] = 1;
$tdatanew_group_request[".afterAddActionDetTable"] = "group_agenda";
}

if( $pages[PAGE_LIST] ) {
	$tdatanew_group_request[".list"] = true;
}



$tdatanew_group_request[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanew_group_request[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanew_group_request[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanew_group_request[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanew_group_request[".printFriendly"] = true;
}



$tdatanew_group_request[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanew_group_request[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanew_group_request[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanew_group_request[".isUseAjaxSuggest"] = true;

$tdatanew_group_request[".rowHighlite"] = true;





$tdatanew_group_request[".ajaxCodeSnippetAdded"] = false;

$tdatanew_group_request[".buttonsAdded"] = false;

$tdatanew_group_request[".addPageEvents"] = true;

// use timepicker for search panel
$tdatanew_group_request[".isUseTimeForSearch"] = true;


$tdatanew_group_request[".badgeColor"] = "E8926F";


$tdatanew_group_request[".allSearchFields"] = array();
$tdatanew_group_request[".filterFields"] = array();
$tdatanew_group_request[".requiredSearchFields"] = array();

$tdatanew_group_request[".googleLikeFields"] = array();
$tdatanew_group_request[".googleLikeFields"][] = "group_id";
$tdatanew_group_request[".googleLikeFields"][] = "group_name";
$tdatanew_group_request[".googleLikeFields"][] = "description";
$tdatanew_group_request[".googleLikeFields"][] = "logo";
$tdatanew_group_request[".googleLikeFields"][] = "token_type";
$tdatanew_group_request[".googleLikeFields"][] = "token_group";
$tdatanew_group_request[".googleLikeFields"][] = "membership_type";
$tdatanew_group_request[".googleLikeFields"][] = "business_type";
$tdatanew_group_request[".googleLikeFields"][] = "open_time";
$tdatanew_group_request[".googleLikeFields"][] = "close_time";
$tdatanew_group_request[".googleLikeFields"][] = "off_day";
$tdatanew_group_request[".googleLikeFields"][] = "valid";
$tdatanew_group_request[".googleLikeFields"][] = "member_id";



$tdatanew_group_request[".tableType"] = "list";

$tdatanew_group_request[".printerPageOrientation"] = 0;
$tdatanew_group_request[".nPrinterPageScale"] = 100;

$tdatanew_group_request[".nPrinterSplitRecords"] = 40;

$tdatanew_group_request[".geocodingEnabled"] = false;










$tdatanew_group_request[".pageSize"] = 20;

$tdatanew_group_request[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatanew_group_request[".strOrderBy"] = $tstrOrderBy;

$tdatanew_group_request[".orderindexes"] = array();


$tdatanew_group_request[".sqlHead"] = "SELECT `group`.group_id,  `group`.group_name,  `group`.description,  `group`.logo,  `group`.token_type,  `group`.token_group,  `group`.membership_type,  `group`.business_type,  `group`.open_time,  `group`.close_time,  `group`.off_day,  `group`.valid,  group_member.member_id";
$tdatanew_group_request[".sqlFrom"] = "FROM `group`  LEFT OUTER JOIN group_member ON `group`.group_id = group_member.group_id";
$tdatanew_group_request[".sqlWhereExpr"] = "";
$tdatanew_group_request[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "`group`.valid = 'not valid'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatanew_group_request[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanew_group_request[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanew_group_request[".arrGroupsPerPage"] = $arrGPP;

$tdatanew_group_request[".highlightSearchResults"] = true;

$tableKeysnew_group_request = array();
$tableKeysnew_group_request[] = "group_id";
$tdatanew_group_request[".Keys"] = $tableKeysnew_group_request;


$tdatanew_group_request[".hideMobileList"] = array();




//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","group_id");
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


	$tdatanew_group_request["group_id"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "group_id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","group_name");
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


	$tdatanew_group_request["group_name"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "group_name";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","description");
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


	$tdatanew_group_request["description"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "description";
//	logo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "logo";
	$fdata["GoodName"] = "logo";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","logo");
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


	$tdatanew_group_request["logo"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "logo";
//	token_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "token_type";
	$fdata["GoodName"] = "token_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","token_type");
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


	$tdatanew_group_request["token_type"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "token_type";
//	token_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "token_group";
	$fdata["GoodName"] = "token_group";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","token_group");
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


	$tdatanew_group_request["token_group"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "token_group";
//	membership_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "membership_type";
	$fdata["GoodName"] = "membership_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","membership_type");
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


	$tdatanew_group_request["membership_type"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "membership_type";
//	business_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_type";
	$fdata["GoodName"] = "business_type";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","business_type");
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


	$tdatanew_group_request["business_type"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "business_type";
//	open_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "open_time";
	$fdata["GoodName"] = "open_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","open_time");
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


	$tdatanew_group_request["open_time"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "open_time";
//	close_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "close_time";
	$fdata["GoodName"] = "close_time";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","close_time");
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


	$tdatanew_group_request["close_time"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "close_time";
//	off_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "off_day";
	$fdata["GoodName"] = "off_day";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","off_day");
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


	$tdatanew_group_request["off_day"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "off_day";
//	valid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "valid";
	$fdata["GoodName"] = "valid";
	$fdata["ownerTable"] = "group";
	$fdata["Label"] = GetFieldLabel("new_group_request","valid");
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
	$edata["LookupValues"][] = "not valid";
	$edata["LookupValues"][] = "valid";

	
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


	$tdatanew_group_request["valid"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "valid";
//	member_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "member_id";
	$fdata["GoodName"] = "member_id";
	$fdata["ownerTable"] = "group_member";
	$fdata["Label"] = GetFieldLabel("new_group_request","member_id");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatanew_group_request["member_id"] = $fdata;
		$tdatanew_group_request[".searchableFields"][] = "member_id";


$tables_data["new_group_request"]=&$tdatanew_group_request;
$field_labels["new_group_request"] = &$fieldLabelsnew_group_request;
$fieldToolTips["new_group_request"] = &$fieldToolTipsnew_group_request;
$placeHolders["new_group_request"] = &$placeHoldersnew_group_request;
$page_titles["new_group_request"] = &$pageTitlesnew_group_request;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["new_group_request"] = array();
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="group_id";
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


		
	$detailsTablesData["new_group_request"][$dIndex] = $detailsParam;

	
		$detailsTablesData["new_group_request"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["masterKeys"][]="group_id";

				$detailsTablesData["new_group_request"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["new_group_request"][$dIndex]["detailKeys"][]="id_group";

// tables which are master tables for current table (detail)
$masterTablesData["new_group_request"] = array();



	
				$strOriginalDetailsTable="business_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="business_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "business_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["new_group_request"][0] = $masterParams;
				$masterTablesData["new_group_request"][0]["masterKeys"] = array();
	$masterTablesData["new_group_request"][0]["masterKeys"][]="business_type_id";
				$masterTablesData["new_group_request"][0]["detailKeys"] = array();
	$masterTablesData["new_group_request"][0]["detailKeys"][]="business_type";
		
	
				$strOriginalDetailsTable="membership_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="membership_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "membership_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["new_group_request"][1] = $masterParams;
				$masterTablesData["new_group_request"][1]["masterKeys"] = array();
	$masterTablesData["new_group_request"][1]["masterKeys"][]="membership_id";
				$masterTablesData["new_group_request"][1]["detailKeys"] = array();
	$masterTablesData["new_group_request"][1]["detailKeys"][]="membership_type";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_new_group_request()
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
	"m_srcTableName" => "new_group_request"
));

$proto6["m_sql"] = "`group`.group_id";
$proto6["m_srcTableName"] = "new_group_request";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto8["m_sql"] = "`group`.group_name";
$proto8["m_srcTableName"] = "new_group_request";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto10["m_sql"] = "`group`.description";
$proto10["m_srcTableName"] = "new_group_request";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "logo",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto12["m_sql"] = "`group`.logo";
$proto12["m_srcTableName"] = "new_group_request";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "token_type",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto14["m_sql"] = "`group`.token_type";
$proto14["m_srcTableName"] = "new_group_request";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "token_group",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto16["m_sql"] = "`group`.token_group";
$proto16["m_srcTableName"] = "new_group_request";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "membership_type",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto18["m_sql"] = "`group`.membership_type";
$proto18["m_srcTableName"] = "new_group_request";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_type",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto20["m_sql"] = "`group`.business_type";
$proto20["m_srcTableName"] = "new_group_request";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "open_time",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto22["m_sql"] = "`group`.open_time";
$proto22["m_srcTableName"] = "new_group_request";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "close_time",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto24["m_sql"] = "`group`.close_time";
$proto24["m_srcTableName"] = "new_group_request";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "off_day",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto26["m_sql"] = "`group`.off_day";
$proto26["m_srcTableName"] = "new_group_request";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "valid",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
));

$proto28["m_sql"] = "`group`.valid";
$proto28["m_srcTableName"] = "new_group_request";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "member_id",
	"m_strTable" => "group_member",
	"m_srcTableName" => "new_group_request"
));

$proto30["m_sql"] = "group_member.member_id";
$proto30["m_srcTableName"] = "new_group_request";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "group";
$proto33["m_srcTableName"] = "new_group_request";
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
$proto32["m_srcTableName"] = "new_group_request";
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
$proto37["m_srcTableName"] = "new_group_request";
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
$proto36["m_srcTableName"] = "new_group_request";
$proto38=array();
$proto38["m_sql"] = "`group`.group_id = group_member.group_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "group",
	"m_srcTableName" => "new_group_request"
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
$proto0["m_srcTableName"]="new_group_request";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_new_group_request = createSqlQuery_new_group_request();


	
		;

													

$tdatanew_group_request[".sqlquery"] = $queryData_new_group_request;



include_once(getabspath("include/new_group_request_events.php"));
$tableEvents["new_group_request"] = new eventclass_new_group_request;
$tdatanew_group_request[".hasEvents"] = true;

?>