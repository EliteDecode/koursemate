<script src="lib/js/jquery-1.12.4.min.js"></script>

<?php
include('admin/includes/database/db_controllers.php');




$status;
$tx_ref;
$transaction_id;
if(isset($_GET['status']) && isset($_GET['tx_ref']) && isset($_GET['transaction_id'])){
     $status = $_GET['status'];
     $tx_ref = $_GET['tx_ref'];
     $transaction_id = $_GET['transaction_id'];
  
}


$url =  "https://api.flutterwave.com/v3/transactions/".$transaction_id."/verify";

$token = "FLWSECK_TEST-9267f1f0655c032e56927d136ab3cc54-X";
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => $url,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $token,
        "Content-Type: Application/json",
       
    ),
]);

$response = curl_exec($curl);

if($response){


$res = json_decode($response);
$err = curl_error($curl);
curl_close($curl);




if ($err) {
	echo "cURL Error #:" . $err;
}elseif($res->message == 'No transaction was found for this id') {
   echo "
   <script>
    window.location.replace(`failed_payment.php`)

    </script>";
}
elseif($res->message == "Transaction fetched successfully") {
   
     $getTransc = selectAll('transactions', ['Transaction_ref' => $res->data->tx_ref]);

     $result = count($getTransc);
     if($result > 0){
        echo "<script>alert('Duplicate transaction not allowed')</script>";
     }else{
        
        $total_cost = $res->data->amount;
        $name = $res->data->customer->name;
        $email =  $res->data->customer->email;

         $data = [
            "Transaction_id" => $res->data->id,
            "Status" => $res->status,
            "Transaction_ref" => $res->data->tx_ref,
            "Fullname" => $res->data->customer->name,
            "Email" =>  $res->data->customer->email,
            "Phone" =>  $res->data->customer->phone_number,
            "Total_cost" => $res->data->amount,
            "Transaction_message" => $res->message,
            "Processor_response" => $res->data->processor_response,
            "Transaction_time" => $res->data->created_at,
            "Transaction_type" => $res->data->payment_type,
            "Transaction_currency" => $res->data->currency,
            "First_6digits" => $res->data->card->first_6digits,
            "Last_4digits" => $res->data->card->last_4digits,
            "Card_issuer" => $res->data->card->issuer,
            "Card_country" => $res->data->card->country,
            "Card_type" => $res->data->card->type,
            "Card_expiry" => $res->data->card->expiry,
         ];
    
      $result = insert('transactions', $data);

      if($result){
        
         echo "
         <script>
        window.location.replace(`sendPayment.php?transaction_id=$transaction_id&name=$name&email=$email&total_cost=$total_cost`)
   </script>
   ";

}


}

}
}


?>


<script src="lib/js/jquery-1.12.4.min.js"></script>