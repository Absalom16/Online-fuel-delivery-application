<?php


if(isset($_POST['submit'])){

  $amount = $_POST['amount_paid']; //Amount to transact 
  $phonenumber = $_POST['phone_number']; // Phone number paying
  
  $Account_no = 'COMRADE MARKET'; // Enter account number optional
  $url = 'https://tinypesa.com/api/v1/express/initialize';
  $data = array(
      'amount' => $amount,
      'msisdn' => $phonenumber,
      'account_no'=>$Account_no
  );
  $headers = array(
      'Content-Type: application/x-www-form-urlencoded',
      'ApiKey: CVd6KJd4b8w' // Replace with your api key
   );
  $info = http_build_query($data);
  
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $resp = curl_exec($curl);
  $msg_resp = json_decode($resp);
  
  
  if ($msg_resp ->success == 'true') {
      echo " ";
    } else {
      echo "Transaction Failed";
     
    }
}

 
  ?>

