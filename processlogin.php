<?php 
session_start();
include_once "load.php";
$string=encrypt_decrypt('decrypt',$_GET['key']);
$data=explode(",", $string);
if (verify_password($data[0],$data[1])) {
	$member=getPaymentStatus($data[0]) ;
	if($member->status <> "active")
	{
	ob_start();
	header( 'Location: /?q=new_user_payment_method_selection&id='.$member->id ); 
exit;	
	}
	
ob_start();
$_SESSION['id'] = session_id();
$_SESSION['user_name'] =$data[0];
$_SESSION['member_id'] =$member->member_id;
$_SESSION['role'] ="member";
			//	$u=$this->getMemberDetailsByLogin($user_name);
			  //   $_SESSION['member_id'] = $member_id;
				$_SESSION['is_logged'] = true;
				header( 'Location: secure.php' ); exit;
 }

 function verify_password($user_name,$password) { global $db;
$query  = 'SELECT * FROM member_master '
				. 'WHERE user_name = "' . $user_name . '" '
				. 'AND password = md5("' . $password . '")';

				
return ($db->query($query));


	}


 function getPaymentStatus($user_name) {
	 global $db;
$query  = 'SELECT * FROM member_master '
				. 'WHERE user_name = "' . $user_name . '" ';
 
$row=$db->get_row($query);
	return $row;
		
	 



	}

	
	
	
	
	?>