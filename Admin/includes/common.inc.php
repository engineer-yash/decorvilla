<?php session_start();

//-------------------------------------------------------------------------------------------//
//-- (C) AISOMEX CONSULTANCY SERVICES PVT. LTD. ---------------------------------------------//		
//-------------------------------------------------------------------------------------------//


//-- SETUP TIMEZONE -------------------------------------------------------------------------//		
	
	date_default_timezone_set("Asia/Calcutta") or die("Failed to setup TimeZone");

	
//-- AUTOLOAD CLASSES -----------------------------------------------------------------------//	

	function __autoload($className)
	{
		require_once "classes/{$className}.class.php";
	}
	
//-- FILTER REQUEST -------------------------------------------------------------------------//	

	if($_SERVER['REQUEST_METHOD']=="POST")		{ pre_process($_POST); }
	else if($_SERVER['REQUEST_METHOD']=="GET")	{ pre_process($_GET); }
	
//-- COMMON FUNCTIONS -----------------------------------------------------------------------//
	
	function pre_process(& $dump, $allow_html='')
	{
		$magic_q = get_magic_quotes_gpc();
		
		if(is_array(($dump)))
		{
			foreach($dump as $x=>$y)
			{
				if(is_array($y))
					pre_process($y,$allow_html);
				else
				{
					if($magic_q)
						$dump[$x] = stripslashes($y);
					$dump[$x] = trim($y);
					$dump[$x] = strip_tags($y,$allow_html);
					$dump[$x] = escape_str($y);
				}
			}    
		}
		else
		{
			if($magic_q)
				$dump[$x] = stripslashes($y);
			$dump = trim($dump);
			$dump = strip_tags($dump,$allow_html);
			$dump = escape_str($dump);
		}
	}
	
	function escape_str($inp)
	{
		if(!empty($inp) && is_string($inp))
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
		else
			return $inp;
	}

//-- APP SPECIFIC FUNCTIONS -----------------------------------------------------------------//
	
	
?>