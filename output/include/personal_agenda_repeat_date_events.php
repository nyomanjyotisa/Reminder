<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_personal_agenda_repeat_date  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeDelete"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeShowEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$data1 = array();
$data1["member_agenda_id"] = $values['member_agenda_id'];
$rs = DB::Select("personal_agenda", $data1 );
while( $record = $rs->fetchAssoc() )
{
	  $data2 = array();
		$data2["member_id"] = $record['member_id'];
		$rs1 = DB::Select("personal_channel", $data2 );
		while( $record2 = $rs1->fetchAssoc() )
		{
				$data3 = array();
				$data3["chat_id"] = $record2["chat_id"];
				$data3["out_msg"]  = $record["message_content"];
				$data3["flag"] = '1';
				$data3["tgl"] = $values['dodate'];
			  $data3["member_id"] = $record['member_id'];
			  $data3["member_agenda_id"] = $values['member_agenda_id'];
			  $data3["id_personal_repeat"] = $values['id_group_repeat'];

				$data31 = array();
				$data31["chat_id"] = $record2["chat_id"];
				$data31["out_msg"]  = $record["attachment"];
				$data31["type"]  = 'file';
				$data31["flag"] = '1';
				$data31["tgl"] = $values['dodate'];
			  $data31["member_id"] = $record['member_id'];
			  $data31["member_agenda_id"] = $values['member_agenda_id'];
			  $data31["id_personal_repeat"] = $values['id_group_repeat'];

				if($record2["channel_id"]==1)
				{
					DB::Insert("outbox_telegram", $data3 );
					if($record["attachment"]){
						DB::Insert("outbox_telegram", $data31 );
					}
				}

				else if($record2["channel_id"]==2)
				{
					DB::Insert("outbox_mail_alibaba", $data3 );
					DB::Insert("outbox_mail_aws", $data3 );
					DB::Insert("outbox_mail_mailchimp", $data3 );
					if($record["attachment"]){
						DB::Insert("outbox_mail_alibaba", $data31 );
						DB::Insert("outbox_mail_aws", $data31 );
						DB::Insert("outbox_mail_mailchimp", $data31 );
					}
				}

				else if($record2["channel_id"]==3)
				{
					DB::Insert("outbox_whatsapp", $data3 );
					if($record["attachment"]){
						DB::Insert("outbox_whatsapp", $data31 );
					}
				}

				else if($record2["channel_id"]==4)
				{
					DB::Insert("outbox_line", $data3 );
					if($record["attachment"]){
						DB::Insert("outbox_line", $data31 );
					}
				}
		}
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where, &$deleted_values, &$message, &$pageObject)
{

		$data = array();
$data["id_personal_repeat"] = $deleted_values['id_group_repeat'];
$data["flag"]  = "2";
$rs = DB::Select("outbox_line", $data );
$rs1 = DB::Select("outbox_mail_alibaba", $data );
$rs2 = DB::Select("outbox_mail_aws", $data );
$rs3 = DB::Select("outbox_mail_mailchimp", $data );
$rs4 = DB::Select("outbox_telegram", $data );
$rs5 = DB::Select("outbox_whatsapp", $data );

if($rs->fetchAssoc() || $rs1->fetchAssoc() || $rs2->fetchAssoc() || $rs3->fetchAssoc() || $rs4->fetchAssoc() || $rs5->fetchAssoc()){
	$message = "Reminder sudah dikirim, tidak dapat diubah lagi";
	return false;
}else{
	$data1 = array();
	$data1["id_personal_repeat"] = $deleted_values['id_group_repeat'];
	DB::Delete("outbox_line", $data1 );
	DB::Delete("outbox_mail_alibaba", $data1 );
	DB::Delete("outbox_mail_aws", $data1 );
	DB::Delete("outbox_mail_mailchimp", $data1 );
	DB::Delete("outbox_telegram", $data1 );
	DB::Delete("outbox_whatsapp", $data1 );
}

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		$data = array();
$keyvalues = array();
$data["tgl"] = $values['dodate'];
$keyvalues["id_personal_repeat"] = $values['id_group_repeat'];
DB::Update("outbox_line", $data, $keyvalues );
DB::Update("outbox_mail_alibaba", $data, $keyvalues );
DB::Update("outbox_mail_aws", $data, $keyvalues );
DB::Update("outbox_mail_mailchimp", $data, $keyvalues );
DB::Update("outbox_telegram", $data, $keyvalues );
DB::Update("outbox_whatsapp", $data, $keyvalues );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$data = array();
$data["id_personal_repeat"] = $values['id_group_repeat'];
$data["flag"]  = "2";
$rs = DB::Select("outbox_line", $data );
$rs1 = DB::Select("outbox_mail_alibaba", $data );
$rs2 = DB::Select("outbox_mail_aws", $data );
$rs3 = DB::Select("outbox_mail_mailchimp", $data );
$rs4 = DB::Select("outbox_telegram", $data );
$rs5 = DB::Select("outbox_whatsapp", $data );

if($rs->fetchAssoc() || $rs1->fetchAssoc() || $rs2->fetchAssoc() || $rs3->fetchAssoc() || $rs4->fetchAssoc() || $rs5->fetchAssoc()){
	$pageObject->hideField("id_group_repeat");
	$pageObject->hideField("member_agenda_id");
	$pageObject->hideField("dodate");
}




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
