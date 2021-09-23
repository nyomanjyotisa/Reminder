<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_personal_agenda  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["BeforeProcessAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeDelete"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		if($values["attachment"]){

	$parts = explode('"', $values["attachment"]);

	$length = count($parts);

	foreach ($parts as $part) {
	  if (strpos($part, 'files\/') !== false) {
			 $attach = str_replace("\/","/",$part);
				break;
		}
	}
}


//cek apakah realtime
$idm = $values["member_agenda_id"];
if($values['loop_type'] == 2)
{
 $data = array();
 $keyvalues = array();
 $data["loop_value"] = NOW();
 $keyvalues["member_agenda_id"] = $idm;
 DB::Update("personal_agenda", $data , $keyvalues);
}
//**********  Insert a record into another table  ************

$data1 = array();
//$data1["chat_id"] = $dataChannelTele["chat_id"];
$data1["out_msg"] = $values["message_content"];
$data1["type"] = "msg";
$data1["flag"] = 1;
$data1["tgl"] = NOW();
$data1["member_agenda_id"] = $idm;
$data1["member_id"] = $values['member_id'];

$data11 = array();
//$data1["chat_id"] = $dataChannelTele["chat_id"];
$data11["out_msg"] = $attach;
$data11["type"] = "file";
$data11["flag"] = 1;
$data11["tgl"] = NOW();
$data11["member_agenda_id"] = $idm;
$data11["member_id"] = $values['member_id'];

$repeat = $values["repeat"];
if($values['loop_type'] == 2)
{
	$rs1 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 1");
	$dataChannelTele=$rs1->fetchAssoc();
	if($dataChannelTele)
	{
	 $data1["chat_id"] = $dataChannelTele["chat_id"];
	 $data11["chat_id"] = $dataChannelTele["chat_id"];
	 DB::Insert("outbox_telegram", $data1 );
		if($values['attachment']){
			DB::Insert("outbox_telegram", $data11 );
		}
	}

	$rs2 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 2");
	$dataChannelAws=$rs2->fetchAssoc();
	if($dataChannelAws)
	{
	 $data1["chat_id"] = $dataChannelAws["chat_id"];
	 $data11["chat_id"] = $dataChannelAws["chat_id"];
	 DB::Insert("outbox_mail_aws", $data1 );
	 DB::Insert("outbox_mail_alibaba", $data1 );
	 DB::Insert("outbox_mail_mailchimp", $data1 );
		if($values['attachment']){
		 DB::Insert("outbox_mail_aws", $data11 );
		 DB::Insert("outbox_mail_alibaba", $data11 );
		 DB::Insert("outbox_mail_mailchimp", $data11 );
		}
	}

	$rs3 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 3");
	$dataChannelWa=$rs3->fetchAssoc();
	if($dataChannelWa)
	{
	 $data1["chat_id"] = $dataChannelWa["chat_id"];
	 $data11["chat_id"] = $dataChannelWa["chat_id"];
	 DB::Insert("outbox_whatsapp", $data1 );
		if($values['attachment']){
			DB::Insert("outbox_whatsapp", $data11 );
		}
	}

	$rs4 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 4");
	$dataChannelLine=$rs4->fetchAssoc();
	if($dataChannelLine)
	{
	 $data1["chat_id"] = $dataChannelLine["chat_id"];
	 $data11["chat_id"] = $dataChannelLine["chat_id"];
	 DB::Insert("outbox_line", $data1 );
		if($values['attachment']){
			 DB::Insert("outbox_line", $data11 );
		}
	}
}
else if($repeat == 0 || $repeat == null)
{
	$tgl = $values["loop_value"];
	$data1["tgl"] = $tgl;
	$data11["tgl"] = $tgl;
	$rs1 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 1");
	$dataChannelTele=$rs1->fetchAssoc();
	if($dataChannelTele)
	{
	 $data1["chat_id"] = $dataChannelTele["chat_id"];
	 $data11["chat_id"] = $dataChannelTele["chat_id"];
	 DB::Insert("outbox_telegram", $data1 );
		if($values['attachment']){
			 DB::Insert("outbox_telegram", $data11 );
		}
	}

	$rs2 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 2");
	$dataChannelAws=$rs2->fetchAssoc();
	if($dataChannelAws)
	{
	 $data1["chat_id"] = $dataChannelAws["chat_id"];
	 $data11["chat_id"] = $dataChannelAws["chat_id"];
	 DB::Insert("outbox_mail_aws", $data1 );
	 DB::Insert("outbox_mail_alibaba", $data1 );
	 DB::Insert("outbox_mail_mailchimp", $data1 );
		if($values['attachment']){
			 DB::Insert("outbox_mail_aws", $data11 );
			 DB::Insert("outbox_mail_alibaba", $data11 );
			 DB::Insert("outbox_mail_mailchimp", $data11 );
		}
	}

	$rs3 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 3");
	$dataChannelWa=$rs3->fetchAssoc();
	if($dataChannelWa)
	{
	 $data1["chat_id"] = $dataChannelWa["chat_id"];
	 $data11["chat_id"] = $dataChannelWa["chat_id"];
	 DB::Insert("outbox_whatsapp", $data1 );
		if($values['attachment']){
			 DB::Insert("outbox_whatsapp", $data11 );
		}
	}

	$rs4 = DB::Query("select chat_id from personal_channel
	where member_id = '$values[member_id]' AND channel_id = 4");
	$dataChannelLine=$rs4->fetchAssoc();
	if($dataChannelLine)
	{
	 $data1["chat_id"] = $dataChannelLine["chat_id"];
	 $data11["chat_id"] = $dataChannelLine["chat_id"];
	 DB::Insert("outbox_line", $data1 );
		if($values['attachment']){
			 DB::Insert("outbox_line", $data11 );
		}
	}
}
else
{
	$i = 0;
	$data2 = array();
	//$data1["chat_id"] = $dataChannelTele["chat_id"];
	$id = $values["member_id"];
	$data2["out_msg"] = $values["message_content"];
	$data2["type"] = "msg";
	$data2["flag"] = 1;
	$tgl = $values["loop_value"];
	$data2["tgl"] = $tgl;
	$data2["member_agenda_id"] = $idm;
	$data2["member_id"] = $values['member_id'];

	$data21 = array();
	$data21["out_msg"] = $attach;
	$data21["type"] = "file";
	$data21["flag"] = 1;
	$data21["tgl"] = $tgl;
	$data21["member_agenda_id"] = $idm;
	$data21["member_id"] = $values['member_id'];

	while($i <= $repeat)
	{
		$rep = $values["repeat_type"];
		if($rep == "bydate")
		{
			if($i == 0)
			{
				$data2["tgl"] = $tgl;
				$rs1 = DB::Query("select chat_id from personal_channel
				where member_id = '$values[member_id]' AND channel_id = 1");
				$dataChannelTele=$rs1->fetchAssoc();
				if($dataChannelTele)
				{
				 $data2["chat_id"] = $dataChannelTele["chat_id"];
				 $data21["chat_id"] = $dataChannelTele["chat_id"];
				 DB::Insert("outbox_telegram", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_telegram", $data21 );
					}
				}

				$rs2 = DB::Query("select chat_id from personal_channel
				where member_id = '$values[member_id]' AND channel_id = 2");
				$dataChannelAws=$rs2->fetchAssoc();
				if($dataChannelAws)
				{
				 $data2["chat_id"] = $dataChannelAws["chat_id"];
				 $data21["chat_id"] = $dataChannelAws["chat_id"];
				 DB::Insert("outbox_mail_aws", $data2 );
				 DB::Insert("outbox_mail_alibaba", $data2 );
				 DB::Insert("outbox_mail_mailchimp", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_mail_aws", $data21 );
						 DB::Insert("outbox_mail_alibaba", $data21 );
						 DB::Insert("outbox_mail_mailchimp", $data21 );
					}
				}

				$rs3 = DB::Query("select chat_id from personal_channel
				where member_id = '$values[member_id]' AND channel_id = 3");
				$dataChannelWa=$rs3->fetchAssoc();
				if($dataChannelWa)
				{
				 $data2["chat_id"] = $dataChannelWa["chat_id"];
				 $data21["chat_id"] = $dataChannelWa["chat_id"];
				 DB::Insert("outbox_whatsapp", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_whatsapp", $data21 );
					}
				}

				$rs4 = DB::Query("select chat_id from personal_channel
				where member_id = '$values[member_id]' AND channel_id = 4");
				$dataChannelLine=$rs4->fetchAssoc();
				if($dataChannelLine)
				{
				 $data2["chat_id"] = $dataChannelLine["chat_id"];
				 $data21["chat_id"] = $dataChannelLine["chat_id"];
				 DB::Insert("outbox_line", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_line", $data21 );
					}
				}
      }
      else
			{
				//$data2["member_agenda_id"] = $idm;
				//$data2["dodate"] = now();
				//DB::Insert("personal_agenda_repeat_date", $data2 );
			}
    }
    else
		{
			if($i == 0)
			{
				$data2["tgl"] = $tgl;
				$data21["tgl"] = $tgl;
			}else if($i > 0)
			{
				
				if($values["repeat_type"] == "daily")
				{
					$tgl2 = $data2["tgl"];
					$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 day' ));
					$data2["tgl"] = $tgl3;
					$data21["tgl"] = $tgl3;
				}else if($rep == "weekly")
				{
					$tgl2 = $data2["tgl"];
					$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 week' ));
					$data2["tgl"] = $tgl3;
					$data21["tgl"] = $tgl3;
				}else if($rep == "monthly")
				{
					$tgl2 = $data2["tgl"];
					$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 month' ));
					$data2["tgl"] = $tgl3;
					$data21["tgl"] = $tgl3;
				}else if($rep == "yearly")
				{
					$tgl2 = $data2["tgl"];
					$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 year' ));
					$data2["tgl"] = $tgl3;
					$data21["tgl"] = $tgl3;
				}
			}

			$rs1 = DB::Query("select chat_id from personal_channel
			where member_id = '$id' AND channel_id = 1");
			$dataChannelTele=$rs1->fetchAssoc();
			if($dataChannelTele)
			{
			 $data2["chat_id"] = $dataChannelTele["chat_id"];
			 $data21["chat_id"] = $dataChannelTele["chat_id"];
			 DB::Insert("outbox_telegram", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_telegram", $data21 );
					}
			}

			$rs2 = DB::Query("select chat_id from personal_channel
			where member_id = '$id' AND channel_id = 2");
			$dataChannelAws=$rs2->fetchAssoc();
			if($dataChannelAws)
			{
			 $data2["chat_id"] = $dataChannelAws["chat_id"];
			 $data21["chat_id"] = $dataChannelAws["chat_id"];
			 DB::Insert("outbox_mail_aws", $data2 );
			 DB::Insert("outbox_mail_alibaba", $data2 );
			 DB::Insert("outbox_mail_mailchimp", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_mail_aws", $data21 );
						 DB::Insert("outbox_mail_alibaba", $data21 );
						 DB::Insert("outbox_mail_mailchimp", $data21 );
					}
			}

			$rs3 = DB::Query("select chat_id from personal_channel
			where member_id = '$id' AND channel_id = 3");
			$dataChannelWa=$rs3->fetchAssoc();
			if($dataChannelWa)
			{
			 $data2["chat_id"] = $dataChannelWa["chat_id"];
			 $data21["chat_id"] = $dataChannelWa["chat_id"];
			 DB::Insert("outbox_whatsapp", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_whatsapp", $data21 );
					}
			}

			$rs4 = DB::Query("select chat_id from personal_channel
			where member_id = '$id' AND channel_id = 4");
			$dataChannelLine=$rs4->fetchAssoc();
			if($dataChannelLine)
			{
			 $data2["chat_id"] = $dataChannelLine["chat_id"];
			 $data21["chat_id"] = $dataChannelLine["chat_id"];
			 DB::Insert("outbox_line", $data2 );
					if($values['attachment']){
						 DB::Insert("outbox_line", $data21 );
					}
			}
		}
	$i += 1;
	}
}

  
if($values['repeat_type']!='bydate'){
	header("Location: personal_agenda_list.php");
	exit();
}
//**********  Check if specific record exists  ************







// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Add page: Before process
function BeforeProcessAdd(&$pageObject)
{

		$data = array();
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("personal_channel", $data );

if($rs->fetchAssoc()){
	return true;
}else{
	return false;
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$data = array();
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("personal_channel", $data );

if($rs->fetchAssoc()){
	echo now();
	return true;
}else{
	$message = "Silahkan Masukkan Personal Channel Terlebbih Dahulu";
	return false;
}

// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		$data = array();
$data["member_id"] = $_SESSION["member_id"];
$rs = DB::Select("personal_channel", $data );

if($rs->fetchAssoc()){
	$pageObject->hideField("repeat");
	$pageObject->hideField("repeat_type");
	$pageObject->hideField("loop_value");
	return true;
}else{

	//echo(now());
	//$dd = date('Y-m-d H:i:s', strtotime(now() . ' +1 month' ));
	//echo($dd);

	$message = "Silahkan Masukkan Personal Channel Terlebih Dahulu";
	$xt->assign("message",$message);
	$pageObject->hideField("loop_type");
	$pageObject->hideField("message_content");
	$pageObject->hideField("attachment");
	$pageObject->hideField("repeat");
	$pageObject->hideField("repeat_type");
	$pageObject->hideField("loop_value");
	$new_variable = "Silahkan Masukkan Personal Channel Terlebih Dahulu";
	$xt->assign("msg_variable",$new_variable);
	$pageObject->hideItem("add_save");
}


// Place event code here.
// Use "Add Action" button to add code snippets.

//**********  Display a message on the Web page  ************



;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$data = array();
$data["member_agenda_id"] = $deleted_values['member_agenda_id'];
$data["flag"] = '1';

DB::Delete("outbox_mail_alibaba", $data );
DB::Delete("outbox_mail_aws", $data );
DB::Delete("outbox_mail_mailchimp", $data );
DB::Delete("outbox_telegram", $data );
DB::Delete("outbox_whatsapp", $data );
DB::Delete("outbox_line", $data );
DB::Delete("personal_agenda_repeat_date", $data );

$data = array();
$keyvalues = array();
$data["member_agenda_id"] = null;
$keyvalues["member_agenda_id"] = $deleted_values['member_agenda_id'];

DB::Update("outbox_mail_alibaba", $data, $keyvalues );
DB::Update("outbox_mail_aws", $data, $keyvalues );
DB::Update("outbox_mail_mailchimp", $data, $keyvalues );
DB::Update("outbox_telegram", $data, $keyvalues );
DB::Update("outbox_whatsapp", $data, $keyvalues );
DB::Update("outbox_line", $data, $keyvalues );
DB::Update("personal_agenda_repeat_date", $data, $keyvalues );



// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		if($values["attachment"]){

	$parts = explode('"', $values["attachment"]);

	$length = count($parts);

	foreach ($parts as $part) {
	  if (strpos($part, 'files\/') !== false) {
			 $attach = str_replace("\/","/",$part);
				break;
		}
	}
}

if($oldvalues['loop_type'] == '1' && $oldvalues['repeat'] != '0' && ($values['repeat'] != $oldvalues['repeat'] || $values['repeat_type'] != $oldvalues['repeat_type']  || $values['loop_value'] != $oldvalues['loop_value'])){

	$datax = array();
	$datax["member_agenda_id"] = $values['member_agenda_id'];
	DB::Delete("outbox_line", $datax );
	DB::Delete("outbox_mail_alibaba", $datax );
	DB::Delete("outbox_mail_aws", $datax );
	DB::Delete("outbox_mail_mailchimp", $datax );
	DB::Delete("outbox_telegram", $datax );
	DB::Delete("outbox_whatsapp", $datax );


	$repeat = $values["repeat"];

	if($repeat == 0 || $repeat == null)
	{
		$tgl = $values["loop_value"];
		$data1["tgl"] = $tgl;
		$rs1 = DB::Query("select chat_id from personal_channel
		where member_id = '$values[member_id]' AND channel_id = 1");
		$dataChannelTele=$rs1->fetchAssoc();
		if($dataChannelTele)
		{
		 $data1["chat_id"] = $dataChannelTele["chat_id"];
		 DB::Insert("outbox_telegram", $data1 );
		}

		$rs2 = DB::Query("select chat_id from personal_channel
		where member_id = '$values[member_id]' AND channel_id = 2");
		$dataChannelAws=$rs2->fetchAssoc();
		if($dataChannelAws)
		{
		 $data1["chat_id"] = $dataChannelAws["chat_id"];
		 DB::Insert("outbox_mail_aws", $data1 );
		 DB::Insert("outbox_mail_alibaba", $data1 );
		 DB::Insert("outbox_mail_mailchimp", $data1 );
		}

		$rs3 = DB::Query("select chat_id from personal_channel
		where member_id = '$values[member_id]' AND channel_id = 3");
		$dataChannelWa=$rs3->fetchAssoc();
		if($dataChannelWa)
		{
		 $data1["chat_id"] = $dataChannelWa["chat_id"];
		 DB::Insert("outbox_whatsapp", $data1 );
		}

		$rs4 = DB::Query("select chat_id from personal_channel
		where member_id = '$values[member_id]' AND channel_id = 4");
		$dataChannelLine=$rs4->fetchAssoc();
		if($dataChannelLine)
		{
		 $data1["chat_id"] = $dataChannelLine["chat_id"];
		 DB::Insert("outbox_line", $data1 );
		}
	}
	else
	{
		$i = 0;
		$data2 = array();
		//$data1["chat_id"] = $dataChannelTele["chat_id"];
		$id = $values["member_id"];
		$data2["out_msg"] = $values["message_content"];
		$data2["type"] = "msg";
		$data2["flag"] = 1;
		$tgl = $values["loop_value"];
		$data2["tgl"] = $tgl;
		$data2["member_agenda_id"] = $values['member_agenda_id'];
		$data2["member_id"] = $values['member_id'];

		$data21["out_msg"] = $attach;
		$data21["type"] = "file";
		$data21["flag"] = 1;
		$data21["tgl"] = $tgl;
		$data21["member_agenda_id"] = $values['member_agenda_id'];
		$data21["member_id"] = $values['member_id'];
		while($i <= $repeat)
		{
			$rep = $values["repeat_type"];
			if($rep == "bydate")
			{
				if($i == 0)
				{
					$data2["tgl"] = $tgl;
					$data21["tgl"] = $tgl;
					$rs1 = DB::Query("select chat_id from personal_channel
					where member_id = '$values[member_id]' AND channel_id = 1");
					$dataChannelTele=$rs1->fetchAssoc();
					if($dataChannelTele)
					{
					 $data2["chat_id"] = $dataChannelTele["chat_id"];
					 $data21["chat_id"] = $dataChannelTele["chat_id"];
					 DB::Insert("outbox_telegram", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_telegram", $data21 );
						}
					}

					$rs2 = DB::Query("select chat_id from personal_channel
					where member_id = '$values[member_id]' AND channel_id = 2");
					$dataChannelAws=$rs2->fetchAssoc();
					if($dataChannelAws)
					{
					 $data2["chat_id"] = $dataChannelAws["chat_id"];
					 $data21["chat_id"] = $dataChannelAws["chat_id"];
					 DB::Insert("outbox_mail_aws", $data2 );
					 DB::Insert("outbox_mail_alibaba", $data2 );
					 DB::Insert("outbox_mail_mailchimp", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_mail_aws", $data21 );
							DB::Insert("outbox_mail_alibaba", $data21 );
							DB::Insert("outbox_mail_mailchimp", $data21 );
						}
					}

					$rs3 = DB::Query("select chat_id from personal_channel
					where member_id = '$values[member_id]' AND channel_id = 3");
					$dataChannelWa=$rs3->fetchAssoc();
					if($dataChannelWa)
					{
					 $data2["chat_id"] = $dataChannelWa["chat_id"];
					 $data21["chat_id"] = $dataChannelWa["chat_id"];
					 DB::Insert("outbox_whatsapp", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_whatsapp", $data21 );
						}
					}

					$rs4 = DB::Query("select chat_id from personal_channel
					where member_id = '$values[member_id]' AND channel_id = 4");
					$dataChannelLine=$rs4->fetchAssoc();
					if($dataChannelLine)
					{
					 $data2["chat_id"] = $dataChannelLine["chat_id"];
					 $data21["chat_id"] = $dataChannelLine["chat_id"];
					 DB::Insert("outbox_line", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_line", $data21 );
						}
					}
			}
			else
				{
					//$data2["member_agenda_id"] = $idm;
					//$data2["dodate"] = now();
					//DB::Insert("personal_agenda_repeat_date", $data2 );
				}
		 }
		 else
			{
				if($i == 0)
				{
					$data2["tgl"] = $tgl;
					$data21["tgl"] = $tgl;
				}else if($i > 0)
				{
					
					if($values["repeat_type"] == "daily")
					{
						$tgl2 = $data2["tgl"];
						$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 day' ));
						$data2["tgl"] = $tgl3;
						$data21["tgl"] = $tgl3;
					}else if($rep == "weekly")
					{
						$tgl2 = $data2["tgl"];
						$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 week' ));
						$data2["tgl"] = $tgl3;
						$data21["tgl"] = $tgl3;
					}else if($rep == "monthly")
					{
						$tgl2 = $data2["tgl"];
						$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 month' ));
						$data2["tgl"] = $tgl3;
						$data21["tgl"] = $tgl3;
					}else if($rep == "yearly")
					{
						$tgl2 = $data2["tgl"];
						$tgl3 = date('Y-m-d H:i:s', strtotime($tgl2 . ' +1 year' ));
						$data2["tgl"] = $tgl3;
						$data21["tgl"] = $tgl3;
					}
				}

				$rs1 = DB::Query("select chat_id from personal_channel
				where member_id = '$id' AND channel_id = 1");
				$dataChannelTele=$rs1->fetchAssoc();
				if($dataChannelTele)
				{
				 $data2["chat_id"] = $dataChannelTele["chat_id"];
				 $data21["chat_id"] = $dataChannelTele["chat_id"];
				 DB::Insert("outbox_telegram", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_telegram", $data21 );
						}
				}

				$rs2 = DB::Query("select chat_id from personal_channel
				where member_id = '$id' AND channel_id = 2");
				$dataChannelAws=$rs2->fetchAssoc();
				if($dataChannelAws)
				{
				 $data2["chat_id"] = $dataChannelAws["chat_id"];
				 $data21["chat_id"] = $dataChannelAws["chat_id"];
				 DB::Insert("outbox_mail_aws", $data2 );
				 DB::Insert("outbox_mail_alibaba", $data2 );
				 DB::Insert("outbox_mail_mailchimp", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_mail_aws", $data21 );
							DB::Insert("outbox_mail_alibaba", $data21 );
							DB::Insert("outbox_mail_mailchimp", $data21 );
						}
				}

				$rs3 = DB::Query("select chat_id from personal_channel
				where member_id = '$id' AND channel_id = 3");
				$dataChannelWa=$rs3->fetchAssoc();
				if($dataChannelWa)
				{
				 $data2["chat_id"] = $dataChannelWa["chat_id"];
				 $data21["chat_id"] = $dataChannelWa["chat_id"];
				 DB::Insert("outbox_whatsapp", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_whatsapp", $data21 );
						}
				}

				$rs4 = DB::Query("select chat_id from personal_channel
				where member_id = '$id' AND channel_id = 4");
				$dataChannelLine=$rs4->fetchAssoc();
				if($dataChannelLine)
				{
				 $data2["chat_id"] = $dataChannelLine["chat_id"];
				 $data21["chat_id"] = $dataChannelLine["chat_id"];
				 DB::Insert("outbox_line", $data2 );
						if($values['attachment']){
							DB::Insert("outbox_line", $data21 );
						}
				}
			}
		$i += 1;
		}
	}
}else{
	$data31 = array();
	$data31["out_msg"]  = $values['message_content'];
	if($values['repeat'] == 0 || $values['repeat'] == null){
		$data31["tgl"] = $values['loop_value'];
	}

	$keyvalues = array();
	$keyvalues["member_agenda_id"] = $values['member_agenda_id'];
	$keyvalues["flag"] = '1';
	$keyvalues["type"] = 'msg';

	DB::Update("outbox_telegram", $data31, $keyvalues );
	DB::Update("outbox_mail_alibaba", $data31, $keyvalues );
	DB::Update("outbox_mail_aws", $data31, $keyvalues );
	DB::Update("outbox_mail_mailchimp", $data31, $keyvalues );
	DB::Update("outbox_whatsapp", $data31, $keyvalues );
	DB::Update("outbox_line", $data31, $keyvalues );



	$data311 = array();
	$data311["out_msg"]  = $attach;
	if($values['repeat'] == 0 || $values['repeat'] == null){
		$data311["tgl"] = $values['loop_value'];
	}

	if(!$oldvalues['attachment'] && $values['attachment']){
		$data311["flag"]  = "1";
		$data311["type"] = 'file';
		$data311["member_agenda_id"] = $values['member_agenda_id'];
		$data311["member_id"] = $values['member_id'];

		$data = array();
		$data["member_agenda_id"] = $values['member_agenda_id'];
		$data["flag"]  = "1";
		$rs4 = DB::Select("outbox_mail_aws", $data );
		while( $record4 = $rs4->fetchAssoc() )
		{
			$data4 = array();
			$data4["out_msg"] = $attach;
			$data4["type"] = 'file';
			$data4["flag"] = $record4["flag"];
			$data4["tgl"] = $record4["tgl"];
			$data4["member_agenda_id"] = $record4["member_agenda_id"];
			$data4["member_id"] = $record4["member_id"];			
			$data4["id_personal_repeat"] = $record4["id_personal_repeat"];	

		  $data2 = array();
			$data2["member_id"] = $values['member_id'];
			$rs1 = DB::Select("personal_channel", $data2 );
			while( $record2 = $rs1->fetchAssoc() )
			{
				$data4["chat_id"] = $record2["chat_id"];

				if($record2["channel_id"]==1){
					DB::Insert("outbox_telegram", $data4 );
				}else if($record2["channel_id"]==2){
					DB::Insert("outbox_mail_alibaba", $data4 );
					DB::Insert("outbox_mail_aws", $data4 );
					DB::Insert("outbox_mail_mailchimp", $data4 );
				}else if($record2["channel_id"]==3){
					DB::Insert("outbox_whatsapp", $data4 );
				}else if($record2["channel_id"]==4){
					DB::Insert("outbox_line", $data4 );
				}
			}
		}
	}
	
	$keyvalues2 = array();
	$keyvalues2["member_agenda_id"] = $values['member_agenda_id'];
	$keyvalues2["flag"] = '1';
	$keyvalues2["type"] = 'file';

	DB::Update("outbox_telegram", $data311, $keyvalues2 );
	DB::Update("outbox_mail_alibaba", $data311, $keyvalues2 );
	DB::Update("outbox_mail_aws", $data311, $keyvalues2 );
	DB::Update("outbox_mail_mailchimp", $data311, $keyvalues2 );
	DB::Update("outbox_whatsapp", $data311, $keyvalues2 );
	DB::Update("outbox_line", $data311, $keyvalues2 );

	if($oldvalues['attachment'] && !$values['attachment']){
		DB::Delete("outbox_telegram", $keyvalues2 );
		DB::Delete("outbox_mail_alibaba", $keyvalues2 );
		DB::Delete("outbox_mail_aws", $keyvalues2 );
		DB::Delete("outbox_mail_mailchimp", $keyvalues2 );
		DB::Delete("outbox_whatsapp", $keyvalues2 );
		DB::Delete("outbox_line", $keyvalues2 );
	}
}

  
if($values['repeat_type']!='bydate'){
	header("Location: personal_agenda_list.php");
	exit();
}
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$pageObject->hideField("loop_type");
$pageObject->hideField("message_content");
$pageObject->hideField("attachment");
$pageObject->hideField("repeat");
$pageObject->hideField("repeat_type");
$pageObject->hideField("loop_value");

if($values['loop_type'] == '1'){	
	$data = array();
	$data["member_agenda_id"] = $values['member_agenda_id'];
	$data["flag"] = '2';
	$rs = DB::Select("outbox_line", $data );
	$rs1 = DB::Select("outbox_mail_alibaba", $data );
	$rs2 = DB::Select("outbox_mail_aws", $data );
	$rs3 = DB::Select("outbox_mail_mailchimp", $data );
	$rs4 = DB::Select("outbox_telegram", $data );
	$rs5 = DB::Select("outbox_whatsapp", $data );

	$i = 1;
	while( $record = $rs->fetchAssoc() )
	{
			$i = 2;
	}
	while( $record = $rs1->fetchAssoc() )
	{
			$i = 2;
	}
	while( $record = $rs2->fetchAssoc() )
	{
			$i = 2;
	}
	while( $record = $rs3->fetchAssoc() )
	{
			$i = 2;
	}
	while( $record = $rs4->fetchAssoc() )
	{
			$i = 2;
	}
	while( $record = $rs5->fetchAssoc() )
	{
			$i = 2;
	}

	if($i == 2){
		if($values['repeat'] > 0){
			$pageObject->showField("message_content");
			$pageObject->showField("attachment");

			$data2 = array();
			$data2["member_agenda_id"] = $values['member_agenda_id'];
			$rsa = DB::Select("outbox_line", $data2 );
			$rs1a = DB::Select("outbox_mail_alibaba", $data2 );
			$rs2a = DB::Select("outbox_mail_aws", $data2 );
			$rs3a = DB::Select("outbox_mail_mailchimp", $data2 );
			$rs4a = DB::Select("outbox_telegram", $data2 );
			$rs5a = DB::Select("outbox_whatsapp", $data2 );

			$data1 = array();
			$data1["member_agenda_id"] = $values['member_agenda_id'];
			$data1["flag"] = '1';
			$rs = DB::Select("outbox_line", $data1 );
			$rs1 = DB::Select("outbox_mail_alibaba", $data1 );
			$rs2 = DB::Select("outbox_mail_aws", $data1 );
			$rs3 = DB::Select("outbox_mail_mailchimp", $data1 );
			$rs4 = DB::Select("outbox_telegram", $data1 );
			$rs5 = DB::Select("outbox_whatsapp", $data1 );
			
			$a = 0;
			$b = 0;
			$c = 0;
			$d = 0;
			$e = 0;
			$f = 0;
			if($rsa->fetchAssoc()){
				if($rs->fetchAssoc()){
					$a = 1;
				}
			}else{
				$a = 1;
			}
			
			if($rs1a->fetchAssoc()){
				if($rs1->fetchAssoc()){
					$b = 1;
				}
			}else{
				$b = 1;
			}

			if($rs2a->fetchAssoc()){
				if($rs2->fetchAssoc()){
					$c = 1;
				}
			}else{
				$c = 1;
			}

			if($rs3a->fetchAssoc()){
				if($rs3->fetchAssoc()){
					$d = 1;
				}
			}else{
				$d = 1;
			}

			if($rs4a->fetchAssoc()){
				if($rs4->fetchAssoc()){
					$e = 1;
				}
			}else{
				$e = 1;
			}

			if($rs5a->fetchAssoc()){
				if($rs5->fetchAssoc()){
					$f = 1;
				}
			}else{
				$f = 1;
			}

			if($a == 0 || $b == 0 || $c == 0 || $d == 0 || $e == 0 || $f == 0){
				$pageObject->hideField("message_content");
				$pageObject->hideField("attachment");
			}
		}
	}else{
		$pageObject->showField("loop_value");
		$pageObject->showField("message_content");
		$pageObject->showField("attachment");
		if($values['repeat'] > 0){
			$pageObject->showField("repeat");
			$pageObject->showField("repeat_type");
		}
	}
}
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
