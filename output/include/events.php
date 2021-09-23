<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeProcessMenu"]=true;

		$this->events["AfterSuccessfulRegistration"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		$_SESSION["member_id"] = $data["member_id"];

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
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu(&$pageObject)
{

		$pageObject->hideItem("welcome_item63");
$pageObject->hideItem("welcome_item20");
$pageObject->hideItem("welcome_item23");
$pageObject->hideItem("welcome_item25");
$pageObject->hideItem("welcome_item28");
$pageObject->hideItem("welcome_item26");
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, &$pageObject)
{

		$data = array();
$data["mail"]  = $userdata["mail"];
$rs = DB::Select("personal", $data );
while( $record = $rs->fetchAssoc() )
{
    $member_id = $record["member_id"];
}

$data = array();
$data["channel_id"] = "2";
$data["chat_id"]  = $userdata["mail"];
$data["member_id"] = $member_id;
DB::Insert("personal_channel", $data );



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
