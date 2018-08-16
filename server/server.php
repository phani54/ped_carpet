<?php 
require "../lib/config.php";
session_start();
$date = date('Y-m-d H:i:s');


// $rth = $db->query("SELECT * FROM `register`");
// if($rth->rowCount() > 0)
// {
//     while($row = $rth->fetch())
//     {
//     	$get_denotion  = $db->query("SELECT name FROM denominations WHERE guid='".$row['dnation']."'")->fetch();
//     	// $get_caste  = $db->query("SELECT name FROM caste WHERE guid=".$row['caste'])->fetch();
//     	$get_occupation  = $db->query("SELECT name FROM occupations WHERE guid=".$row['guid'])->fetch();
//     	$date = $row['txtYear'].'-'.$row['txtMonth'].'-'.$row['txtDate'];
//     	// echo $date;
//     	// exit;
//     	$db->query("INSERT INTO `profiles`(`profile_id`, `profile_for`, `name`, `gender`, `birth_date`, `birth_month`, `birth_year`, `age`, `dob`, `religion`, `denomination`, `mother_tongue`, `city`, `address`, `citizenship`, `mobile`,`email`, `password`,`marital_status`,`height`,`education`,`employed_in`, `occupation`,`otp_flag`, `approval_status`, `package`, `activation_on`,`de_active_on`, `profile_views`, `created_on`) VALUES ('".$row['user_id']."','".$row['profilefor']."','".$row['name']."','".$row['gender']."','".$row['txtDate']."','".$row['txtMonth']."','".$row['txtYear']."','".$row['txtAge']."','$date','".$row['religion']."','".$get_denotion['name']."','".$row['mtongue']."','".$row['txtCity']."','".$row['txtCaddress']."','".$row['txtPcitizenship']."','".$row['mobile']."','".$row['email']."','".$row['password']."','".$row['txtPstatus']."','".$row['txtHeight']."','".$row['txtEducation']."','".$row['txtEmployed']."','".$get_occupation['name']."',1,1,'".$row['package']."','".$row['activation']."','".$row['de_activation']."','".$row['profile_views']."','".$row['dateandtime']."')");
//     }
// }

// exit;
if(isset($_POST) && $_POST['action'] == 'login')
{
    $chk = $db->query("SELECT * FROM `register` WHERE (`user_id`='".$_POST['mobile']."' OR `mobile`='".$_POST['mobile']."') and password='".$_POST['password']."'")->fetch();
	
    if($chk['guid'] == '')
    {
        echo json_encode(array('status'=>'error')); exit; 
    } 
    else 
    {		
		$_SESSION['session_uid']=$chk['guid'];
		if($chk['gender'] == 'Male')
			$_SESSION['show_gender']='Female';
		else
			$_SESSION['show_gender']='Male';
        echo json_encode(array('status'=>'success')); exit; 
	}		

}

if(isset($_POST) && $_POST['action']== 'sent_intrest')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET interest = (interest ^ 1),interest_sent_on='$date' WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`, `interest`, `interest_sent_on`)VALUES('".$_SESSION['session_uid']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'view_mobile')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET sms = (sms ^ 1),sms_sent_on='$date' WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`,  `sms`, `sms_sent_on`)VALUES('".$_SESSION['session_uid']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'shortlist')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET shorlist = (shorlist ^ 1),shorlisted_on='$date' WHERE viewer_id='".$_SESSION['session_uid']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`, `shorlist`, `shorlisted_on`)VALUES('".$_SESSION['session_uid']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'register_step1')
{
	$digits = 6;
	$otp = rand(pow(10, $digits-1), pow(10, $digits)-1);
	$chk_qry = $db->query("SELECT guid,otp_flag,gender FROM register WHERE mobile='".$_POST['mobile']."'");
	if($chk_qry->rowCount() > 0)
	{
		$chk = $chk_qry->fetch();
		if($chk['otp_flag'] == 1)
		{
			$_SESSION['session_uid']=$chk['guid'];
			if($chk['gender'] == 'Male')
				$_SESSION['show_gender']='Female';
			else
				$_SESSION['show_gender']='Male';
			echo json_encode(array('status'=>'error','msg'=>'open_profile'));
		}
		else
		{
			$update_qry = $db->query("UPDATE register SET profilefor='".$_POST['p_created_by']."',mobile='".$_POST['mobile']."',name='".$_POST['name']."',email='".$_POST['email']."',password='".$_POST['pwd']."',otp='".$otp."' WHERE mobile='".$_POST['mobile']."'");
			if($update_qry)
			{
				//Write sent sms code here
				echo json_encode(array('status'=>'error','msg'=>'open_otp_model','pro_mobile'=>$_POST['mobile']));
			}
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO register(profilefor,mobile,name,email,password,otp) VALUES('".$_POST['p_created_by']."','".$_POST['mobile']."','".$_POST['name']."','".$_POST['email']."','".$_POST['pwd']."','".$otp."')");
		if($insert_qry)
		{
			//Write sent sms code here
			echo json_encode(array('status'=>'success','pro_mobile'=>$_POST['mobile'])); 
		}
		else
		{
			echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
		}
	}
}
if(isset($_POST) && $_POST['action'] == 'auth_otp')
{
	$chk_qry = $db->query("SELECT guid,otp_flag,gender FROM register WHERE mobile='".$_POST['hdn_mobile']."' AND otp='".$_POST['otp']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE register SET otp_flag=1 WHERE mobile='".$_POST['hdn_mobile']."'");
		if($update_qry)
		{
			$chk = $chk_qry->fetch();
			$_SESSION['session_uid']=$chk['guid'];
			if($chk['gender'] == 'Male')
				$_SESSION['show_gender']='Female';
			else
				$_SESSION['show_gender']='Male';
			echo json_encode(array('status'=>'success')); 
		}
		else
		{
			echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
		}
	}
	else
	{
		echo json_encode(array('status'=>'error','msg'=>'In-valid OTP'));
	}
}
if(isset($_POST) && $_POST['action'] == 'resend_otp')
{
	$chk_qry = $db->query("SELECT otp FROM register WHERE mobile='".$_POST['hdn_mobile']."'");
	if($chk_qry->rowCount() > 0)
	{
		$res = $chk_qry->fetch();
		$otp = $res['otp'];
		//Write sent sms code here
		echo json_encode(array('status'=>'success')); 
	}
	else
	{
		echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
	}
}

?>