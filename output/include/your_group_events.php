<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_your_group  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowList"]=true;


		$this->events["BeforeDelete"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$data = array();
$data["member_id"] = $_SESSION["member_id"];
$data["group_id"] = $values["group_id"];
$data["user_type"] = 2;
$data["membership_type"] = $values['membership_type'];
$data["valid"] = 1;
DB::Insert("group_member", $data );

$data = array();
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("personal", $data );
while( $record = $rs->fetchAssoc() )
{
	$username = $record["mail"];
}

$data = array();
$data["user_type"] = 2;
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("group_member", $data );
while( $record = $rs->fetchAssoc() )
{
    $_SESSION["group_id"] = $record["group_id"];
}

$data = array();
$data["UserName"] = $username;
$data["GroupID"] = 2;
DB::Insert("project5_ugmembers", $data );

$msg = "Anda telah berhasil membuat group " . $values['group_name'];

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$_SESSION[member_id]' AND channel_id = 1");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_telegram", $data );
}
else
{
	// if dont exist do something else
}

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$_SESSION[member_id]' AND channel_id = 2");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_mail_aws", $data );
}
else
{
	// if dont exist do something else
}

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$_SESSION[member_id]' AND channel_id = 2");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_whatsapp", $data );
}
else
{
	// if dont exist do something else
}

$rs = DB::Query("select chat_id from personal_channel
where member_id = '$_SESSION[member_id]' AND channel_id = 2");
$dataChannelTele=$rs->fetchAssoc();
if($dataChannelTele)
{
	$data = array();
	$data["chat_id"] = $dataChannelTele["chat_id"];
	$data["out_msg"] = $msg;
	$data["type"] = "msg";
	$data["flag"] = 1;
	$data["tgl"] = NOW();
	DB::Insert("outbox_line", $data );
}
else
{
	// if dont exist do something else
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		$data = array();
$data["user_type"] = 2;
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("group_member", $data );
while( $record = $rs->fetchAssoc() )
{
    $_SESSION["group_id"] = $record["group_id"];
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$data6 = array();
$data6["group_id"] = $deleted_values["group_id"];
$rs6 = DB::Select("group_agenda_type", $data6 );
while( $record6 = $rs6->fetchAssoc() )
{
	$data5 = array();
	$data5["agenda_type_id"] = $record6["agenda_type_id"];

	DB::Delete("group_member_agenda_subscriber", $data5 );
}

$data = array();
$data["group_id"] = $deleted_values["group_id"];

DB::Delete("group_agenda_general_logs", $data );
DB::Delete("group_agenda_private", $data );
DB::Delete("group_member_agenda", $data );
DB::Delete("group_agenda_repeat_date", $data );
DB::Delete("group_agenda", $data );
DB::Delete("group_agenda_type", $data );
DB::Delete("group_operation_off", $data );
DB::Delete("group_product", $data );
DB::Delete("group_member_order_detail", $data );
DB::Delete("group_member_order", $data );
DB::Delete("group_member", $data );
DB::Delete("group_member_checkin", $data );
DB::Delete("lookup_stok", $data );

$data1 = array();
$data1["id_group"] = $deleted_values["group_id"];

DB::Delete("lookup_token", $data1 );

$data = array();
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("personal", $data );
while( $record = $rs->fetchAssoc() )
{
	$username = $record["mail"];
}

$data = array();
$data["UserName"] = $username;
$data["GroupID"] = 2;
DB::Delete("project5_ugmembers", $data );

$data1 = array();
$data1["group_id"] = $deleted_values["group_id"];
$data1["flag"] = '1';

DB::Delete("outbox_mail_alibaba", $data1 );
DB::Delete("outbox_mail_aws", $data1 );
DB::Delete("outbox_mail_mailchimp", $data1 );
DB::Delete("outbox_telegram", $data1 );
DB::Delete("outbox_whatsapp", $data1 );
DB::Delete("outbox_line", $data1 );

$data = array();
$data["group_id"] = null;
$data["group_agenda_id"] = null;
$data["group_agenda_private_id"] = null;
$data["group_member_id"] = null;
$data["id_group_repeat"] = null;
$keyvalues = array();
$keyvalues["group_id"] = $deleted_values["group_id"];

DB::Update("outbox_mail_alibaba", $data, $keyvalues );
DB::Update("outbox_mail_aws", $data, $keyvalues );
DB::Update("outbox_mail_mailchimp", $data, $keyvalues );
DB::Update("outbox_telegram", $data, $keyvalues );
DB::Update("outbox_whatsapp", $data, $keyvalues );
DB::Update("outbox_line", $data, $keyvalues );

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>