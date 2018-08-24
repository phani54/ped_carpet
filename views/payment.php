<?php 

include 'instamojo-php-master/src/Instamojo.php';

// $payment_request = array();
//     $payment_request['id'] = 'a78ab73df2bb4e78bc06a32adfse59a';
//     $payment_request['phone'] = '+919701339351';
//     $payment_request['email'] = 'phanikumar.allanki@gmail.com';
//     $payment_request['buyer_name'] = 'mool';
//     $payment_request['amount'] = '105.75';
//     $payment_request['purpose'] = 'Test'; 
//     $payment_request['status'] = 'Pending';
//     $payment_request['send_sms'] = '';
//     $payment_request['send_email'] = '1';
//     $payment_request['sms_status'] = '';
//     $payment_request['email_status'] = 'Pending';
//     $payment_request['shorturl'] = '';
//     $payment_request['longurl'] = 'https://test.instamojo.com/@instamojousername/a78ab73df2bb4e78bc06a32a264ae59a';
//     $payment_request['redirect_url'] = 'http://demo.test.com/instamojo/thankyou.php';
//     $payment_request['webhook'] = 'http://demo.test.com/instamojo/webhook.php';
//     $payment_request['created_at'] = '2016-08-19T14:44:10.679557Z';
//     $payment_request['modified_at'] = '2016-08-19T14:44:10.679582Z';
//     $payment_request['allow_repeated_payments'] = '';

// $instamojo = new Instamojo();
// // print_r($obj);
// // exit;
// // print_r($payment_request);
// $r = $instamojo->paymentRequestCreate($payment_request);
// print_r($r);

$product_name = 'test';//$_POST["product_name"];
$price = 100;//$_POST["product_price"];
$name = 'Phani';//$_POST["name"];
$phone = '+919701339351';//$_POST["phone"];
$email = 'phanikumar.allanki@gmail.com';//$_POST["email"];


// include 'src/instamojo.php';

$api = new Instamojo\Instamojo('74c9e8bfc704194ca3fafbf4657fc6ee', 'f705481a78ff07f7fb08563811cc9a15','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "http://YOUR_WEBSITE.COM/thankyou.php",
        "webhook" => "http://YOUR_WEBSITE.COM/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
} 
?>

