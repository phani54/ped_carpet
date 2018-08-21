<?php 
require "../lib/config.php";
session_start();
$date = date('Y-m-d H:i:s');

// $dob = date('Y-m-d', strtotime('1989-11-27'));
// // echo $dob;
//    $r =  $db->query("SELECT TIMESTAMPDIFF(YEAR, '".$dob."', CURDATE()) AS age")->fetch();
// echo $r['age'];
// exit;
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
    $chk = $db->query("SELECT id,gender FROM `profiles` WHERE (`profile_id`='".$_POST['mobile']."' OR `mobile`='".$_POST['mobile']."') and password='".$_POST['password']."'")->fetch();
	
    if($chk['id'] == '')
    {
        echo json_encode(array('status'=>'error')); exit; 
    } 
    else 
    {		
		$_SESSION['id']=$chk['id'];
		if($chk['gender'] == 'Male')
			$_SESSION['show_gender']='Female';
		else
			$_SESSION['show_gender']='Male';
        echo json_encode(array('status'=>'success')); exit; 
	}		

}

if(isset($_POST) && $_POST['action']== 'sent_intrest')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET interest = (interest ^ 1),interest_sent_on='$date' WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`, `interest`, `interest_sent_on`)VALUES('".$_SESSION['id']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'view_mobile')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET sms = (sms ^ 1),sms_sent_on='$date' WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`,`sms`, `sms_sent_on`)VALUES('".$_SESSION['id']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'shortlist')
{
	$chk_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profile_interests SET shorlist = (shorlist ^ 1),shorlisted_on='$date' WHERE viewer_id='".$_SESSION['id']."' AND profile_id='".$_POST['profile_id']."'");
		if($update_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profile_interests (`viewer_id`, `profile_id`, `shorlist`, `shorlisted_on`)VALUES('".$_SESSION['id']."','".$_POST['profile_id']."',1,'$date')");
		if($insert_qry)
		{
			echo json_encode(array('status'=>'success')); 
		}
	}
}

if(isset($_POST) && $_POST['action']== 'register_step1')
{
	$dob = date('Y-m-d', strtotime($_POST['dob']));
	$birth_year = date('Y', strtotime($_POST['dob']));
	$birth_month = date('m', strtotime($_POST['dob']));
	$birth_date = date('d', strtotime($_POST['dob']));
	$age =  (date('Y') - date('Y',strtotime($_POST['dob'])));
	$digits = 6;
	$otp = rand(pow(10, $digits-1), pow(10, $digits)-1);
	$profile_id ="RCM".rand(pow(10, $digits-1), pow(10, $digits)-1);
	$chk_qry = $db->query("SELECT `id`,`otp_flag`,`gender`,`country` FROM `profiles` WHERE `mobile`='".$_POST['mobile']."'");
	if($chk_qry->rowCount() > 0)
	{
		$chk = $chk_qry->fetch();
		if($chk['otp_flag'] == 1)
		{
			$_SESSION['id']=$chk['id'];
			$_SESSION['country']=$chk['country'];
			if($chk['gender'] == 'Male')
				$_SESSION['show_gender']='Female';
			else
				$_SESSION['show_gender']='Male';
			echo json_encode(array('status'=>'error','msg'=>'open_profile'));
		}
		else
		{
			$update_qry = $db->query("UPDATE profiles SET profile_for='".$_POST['profile_for']."',mobile='".$_POST['mobile']."',name='".$_POST['name']."',password='".$_POST['pwd']."',otp='".$otp."',security_key='".md5($_POST['pwd'])."',marital_status='".$_POST['m_status']."',religion='".$_POST['religion']."',denomination='".$_POST['denomination']."',sub_caste='".$_POST['caste']."',mother_tongue='".$_POST['mother_tongue']."',country='".$_POST['country']."',country_code='".$_POST['country_code']."',dob='".$dob."',`gender`='".$_POST['gender']."',`birth_date`='".$birth_date."',`birth_year`='".$birth_year."',`birth_month`='".$birth_month."',`age`='".$age."' WHERE mobile='".$_POST['mobile']."'");
			if($update_qry)
			{
				// Sent sms code here
				$msg = 'Redcarpet OTP: '.$otp;
				$url = "http://smslogin.mobi/spanelv2/api.php?username=redcarpetevents&password=2klikes&to=".$_POST['mobile']."&from=RCEMMS&message=".urlencode($msg); 
				$ret = file($url);
				if($ret[0])
				{
					echo json_encode(array('status'=>'error','msg'=>'open_otp_model','pro_mobile'=>$_POST['mobile']));
				}
				else
				{
					echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
				}
			}
		}
	}
	else
	{
		$insert_qry = $db->query("INSERT INTO profiles(`profile_for`,`mobile`,`name`,`password`,`otp`,`profile_id`,`marital_status`,`religion`,`denomination`,`sub_caste`,`mother_tongue`,`country`,`country_code`,`dob`,`security_key`,`gender`,`birth_year`,`birth_month`,`birth_date`,`age`) VALUES('".$_POST['profile_for']."','".$_POST['mobile']."','".$_POST['name']."','".$_POST['pwd']."','".$otp."','".$profile_id."','".$_POST['m_status']."','".$_POST['religion']."','".$_POST['denomination']."','".$_POST['caste']."','".$_POST['mother_tongue']."','".$_POST['country']."','".$_POST['country_code']."','".$dob."','".md5($_POST['pwd'])."','".$_POST['gender']."','".$birth_year."','".$birth_month."','".$birth_date."','".$age."')");
		if($insert_qry)
		{
			//Sent sms code here
			$msg = 'Redcarpet OTP: '.$otp;
			$url = "http://smslogin.mobi/spanelv2/api.php?username=redcarpetevents&password=2klikes&to=".$_POST['mobile']."&from=RCEMMS&message=".urlencode($msg); 
			$ret = file($url);
			if($ret[0])
			{
				echo json_encode(array('status'=>'success','pro_mobile'=>$_POST['mobile'])); 
			}
			else
			{
				echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
			}
		}
		else
		{
			echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
		}
	}
}
if(isset($_POST) && $_POST['action'] == 'auth_otp')
{
	$chk_qry = $db->query("SELECT id,otp_flag,gender,country FROM profiles WHERE mobile='".$_POST['hdn_mobile']."' AND otp='".$_POST['otp']."'");
	if($chk_qry->rowCount() > 0)
	{
		$update_qry = $db->query("UPDATE profiles SET otp_flag=1 WHERE mobile='".$_POST['hdn_mobile']."'");
		if($update_qry)
		{
			$chk = $chk_qry->fetch();
			$_SESSION['id']=$chk['id'];
			$_SESSION['country']=$chk['country'];
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
	$chk_qry = $db->query("SELECT otp FROM profiles WHERE mobile='".$_POST['hdn_mobile']."'");
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

if(isset($_POST) && $_POST['action'] == 'complete_profile')
{
	$languages_known= "";
	$interests = "";
	$hobbies = "";
	$music = "";
	$sports = "";
	$food = "";
	if(isset($_POST['languages_known']))
		$languages_known = implode (", ", $_POST['languages_known']);

	if(isset($_POST['interests']))
		$interests = implode (", ", $_POST['interests']);

	if(isset($_POST['hobbies']))
		$hobbies = implode (", ", $_POST['hobbies']);

	if(isset($_POST['music']))
		$music = implode (", ", $_POST['music']);

	if(isset($_POST['sports']))
		$sports = implode (", ", $_POST['sports']);

	if(isset($_POST['food']))
		$food = implode (", ", $_POST['food']);

	$data = array();
	parse_str($_POST['form_data'], $data);

	$update_data['email'] = $data['register_email'];
	$update_data['height'] = $data['height'];
	$update_data['weight'] = $data['weight'];
	$update_data['body_type'] = $data['body_type'];
	$update_data['complexion'] = $data['complexion'];
	$update_data['physical_status'] = $data['physical_status'];
	$update_data['country'] = $data['country'];
	$update_data['state'] = $data['state'];
	$update_data['city'] = $data['city'];
	$update_data['citizenship'] = $data['citizenship'];
	$update_data['division'] = $data['division'];
	$update_data['willing_to_marry_other'] = $data['marry_from_other'];
	$update_data['religious_values'] = $data['reg_values'];
	$update_data['education'] = $data['education'];
	$update_data['languages_known'] = $languages_known;
	$update_data['employed_in'] = $data['employed_in'];
	$update_data['occupation'] = $data['occupation'];
	$update_data['annual_income'] = $data['annual_income'];
	$update_data['alt_number'] = $data['pr_contact_num'];
	$update_data['family_value'] = $data['family_value'];
	$update_data['family_type'] = $data['family_type'];
	$update_data['family_status'] = $data['family_status'];
	$update_data['ethnicity'] = $data['ethnicity'];
	$update_data['father_occupation'] = $data['fr_occupation'];
	$update_data['mother_occupation'] = $data['mr_occupation'];
	$update_data['no_of_brothers'] = $data['no_brothers'];
	$update_data['no_of_sisters'] = $data['no_sisters'];
	$update_data['eating_habits'] = $data['eating_habits'];
	$update_data['drinking_habits'] = $data['drinking_habits'];
	$update_data['interests'] = $interests;
	$update_data['hobbies'] = $hobbies;
	$update_data['music'] = $music;
	$update_data['sports'] = $sports;
	$update_data['food'] = $food;
	$update_data['about'] = $data['about'];
	$update_data['approval_status'] = 0;
 	$res= update('profiles',$update_data,array('id',110),$db);
 	if($res)
 	{
 		echo json_encode(array('status'=>'success'));
 	}
 	else
 	{
 		echo json_encode(array('status'=>'error','msg'=>'Something went wrong, Please try again!!'));
 	}
}

if(isset($_POST) && $_POST['action'] == 'get_cities')
{
	$state = $_POST['state'];
	$get_state_id = $db->query("SELECT id FROM states WHERE name LIKE '%$state%'")->fetch();
	$state_id = $get_state_id['id'];
	$get_cities = $db->query("SELECT * FROM cities WHERE state_id=".$state_id);
	$data = array();
	while($row = $get_cities->fetch())
	{
		$r['id']=$row['id'];
		$r['name']=$row['name'];
		array_push($data,$r);
	}
	echo json_encode(array('status'=>'success','data'=>$data));
}

function insert($tab_name,$field =array())
{
	$key = array_keys($field);
	$keys = implode(",",$key);
	$value = array_values($field);
	$values = implode("','",$value);
	$insert = "insert into $tab_name(".$keys.") values ('". $values."')";
	return $insert;
	
}
	
//Update
function update($tab_name , $field = array() ,$cond ,$db)
{
	// require "../lib/config.php";
	$i = 0; 
	foreach($field as $key => $value)
	{
		$update ="update $tab_name set $key = '$value' where {$cond[0]} = '{$cond[1]}'";
		if($db->query($update))
		{
			$i++;
		}	
	}
	if($i == count($field))
	{
		return true;
	}else
	{
		return mysql_error();
	}
}
?>