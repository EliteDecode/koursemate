<?php

$cost = $_POST['total_cost'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//integrate end points
$endpoint = "https://api.flutterwave.com/v3/payments";

$request = [
       "tx_ref" => "KM_" .uniqid().uniqid(),
        "amount" => $cost,
        "currency" => "NGN",

      "redirect_url" => "http://localhost/upist/verify_payment.php",
        "customer" =>[
            "email" => $email,
            "name" => $name,
            "phone" => $phone
        ],
        "customizations" =>[
            "title" => "Koursemate, research projects made easy",
            "description" => "Payment for research project",
        ],
        "meta" => [
            "price" => $cost
        ]
        ];


$token = "FLWSECK_TEST-9267f1f0655c032e56927d136ab3cc54-X";
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.flutterwave.com/v3/payments",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($request),
	CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $token,
        "Content-Type: application/json",
    ),
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

echo $response ;