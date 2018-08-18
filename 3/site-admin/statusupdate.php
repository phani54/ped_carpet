<?php ob_start(); error_reporting(0);

require "lib/path.php";

require "lib/config.php";

require "lib/title.php";

require "lib/secure.php";

extract($_GET);

extract($_POST);

$date = date('Y-m-d');

if(isset($_POST) && $_POST['Submit']=="updatestatus") {
  
	$sth = $db->query("UPDATE `orderdetails` SET `status`='$status' WHERE `guid`='$guid'");
        if($status=='OutforDelivery') {
          $user = $db->query("SELECT * FROM `orderdetails` WHERE `guid`='$guid'");
          $us = $user->fetch();
		   $order = $db->query("SELECT * FROM `order` WHERE `orderid`='".$us['orderid']."'");
		   $pname ='';
		   while($prow = $order->fetch()) {
			   $pn = $db->query("SELECT * FROM `products` WHERE `guid`='".$prow['pid']."'");
			   $pnn = $pn->fetch();
			   $pname.=$pnn['item_name'].", ";
			   
		   }
		   $pnnn = substr($pname,0,-2);
           $userp = $db->query("SELECT * FROM `register` WHERE `guid`='".$us['loginid']."'");
           $usp = $userp->fetch();
		   $amount = $us['amount'];
         if($us['paymentmethod']=='COD') {
              $message="Hi Your Order Items ".$pnnn." with Order ID ".$us['orderid']." will be delivered today. Please keep ready Rs.".$amount." in cash for order.Thank you Bake My Wish";
              $sms=str_replace(" ","%20",$message); 
			//echo $sms; exit;
			  $phone = $usp['phone'];
              $url = "http://api.smscountry.com/SMSCwebservice_bulk.aspx?User=catchway&passwd=sanju100&mobilenumber=$phone&message=$sms&sid=BMWISH&mtype=N&DR=Y";
             //echo $url; exit;
			 //fopen($url, "r");
				if(fopen($url, "r")) { 
				  $sdb1 = $db->query("SELECT * FROM `smscount`");
				  $sr1 = $sdb1->fetch();
				  $count1 = $sr1[1]+1;
				  $cth1 = $db->query("UPDATE `smscount` SET `count`='$count1'");
				  
				}
           } else if($us['paymentmethod']=='PayUMoney') {
             $pmessage="Hi Your Order Items ".$pnnn." with Order ID ".$us['orderid']." will be delivered today.Thank you Bake My Wish";
             $psms=str_replace(" ","%20",$pmessage); 
			 $pphone = $usp['phone'];
             $purl = "http://api.smscountry.com/SMSCwebservice_bulk.aspx?User=catchway&passwd=sanju100&mobilenumber=$pphone&message=$psms&sid=BMWISH&mtype=N&DR=Y";        //echo $purl; exit;
				if(fopen($purl, "r")) {
				  $sdb2 = $db->query("SELECT * FROM `smscount`");
				  $sr2 = $sdb2->fetch();
				  $count2 = $sr2[1]+1;
				  $cth2 = $db->query("UPDATE `smscount` SET `count`='$count2'");
				  
				}
          }


        }
		  else if($status=='Delivered') {
          $user = $db->query("SELECT * FROM `orderdetails` WHERE `guid`='$guid'");
          $us = $user->fetch();
		   $order = $db->query("SELECT * FROM `order` WHERE `orderid`='".$us['orderid']."'");
		   $pname ='';
		   while($prow = $order->fetch()) {
			   $pn = $db->query("SELECT * FROM `products` WHERE `guid`='".$prow['pid']."'");
			   $pnn = $pn->fetch();
			   $pname.=$pnn['item_name'].", ";
			   
		   }
			   $pnnn = substr($pname,0,-2);
			   $userp = $db->query("SELECT * FROM `register` WHERE `guid`='".$us['loginid']."'");
			   $usp = $userp->fetch();
             $dmessage="Hi,Your Order Items ".$pnnn." have been successfully delivered. Thank you Bake My Wish";
             $dsms=str_replace(" ","%20",$dmessage); 
			 $dphone = $usp['phone'];
             $durl = "http://api.smscountry.com/SMSCwebservice_bulk.aspx?User=catchway&passwd=sanju100&mobilenumber=$dphone&message=$dsms&sid=BMWISH&mtype=N&DR=Y";        //echo $durl; exit;
				if(fopen($durl, "r")) {
				  $sdb3 = $db->query("SELECT * FROM `smscount`");
				  $sr3 = $sdb3->fetch();
				  $count3 = $sr3[1]+1;
				  $cth3 = $db->query("UPDATE `smscount` SET `count`='$count3'");
				  
				}

        }
} 
