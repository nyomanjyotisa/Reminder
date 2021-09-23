<?php
$dalTableoutbox_line = array();
$dalTableoutbox_line["id_outbox"] = array("type"=>20,"varname"=>"id_outbox", "name" => "id_outbox");
$dalTableoutbox_line["chat_id"] = array("type"=>200,"varname"=>"chat_id", "name" => "chat_id");
$dalTableoutbox_line["out_msg"] = array("type"=>201,"varname"=>"out_msg", "name" => "out_msg");
$dalTableoutbox_line["type"] = array("type"=>129,"varname"=>"type", "name" => "type");
$dalTableoutbox_line["flag"] = array("type"=>129,"varname"=>"flag", "name" => "flag");
$dalTableoutbox_line["tgl"] = array("type"=>135,"varname"=>"tgl", "name" => "tgl");
$dalTableoutbox_line["group_agenda_id"] = array("type"=>20,"varname"=>"group_agenda_id", "name" => "group_agenda_id");
$dalTableoutbox_line["group_agenda_private_id"] = array("type"=>20,"varname"=>"group_agenda_private_id", "name" => "group_agenda_private_id");
$dalTableoutbox_line["member_agenda_id"] = array("type"=>20,"varname"=>"member_agenda_id", "name" => "member_agenda_id");
$dalTableoutbox_line["group_id"] = array("type"=>20,"varname"=>"group_id", "name" => "group_id");
$dalTableoutbox_line["group_member_id"] = array("type"=>20,"varname"=>"group_member_id", "name" => "group_member_id");
$dalTableoutbox_line["member_id"] = array("type"=>20,"varname"=>"member_id", "name" => "member_id");
$dalTableoutbox_line["id_group_repeat"] = array("type"=>20,"varname"=>"id_group_repeat", "name" => "id_group_repeat");
$dalTableoutbox_line["id_personal_repeat"] = array("type"=>20,"varname"=>"id_personal_repeat", "name" => "id_personal_repeat");
	$dalTableoutbox_line["id_outbox"]["key"]=true;

$dal_info["notif_basic1_at_localhost__outbox_line"] = &$dalTableoutbox_line;
?>