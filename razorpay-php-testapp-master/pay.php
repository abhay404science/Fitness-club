    <?php
    
    require("../component/comon.php");
    require('config.php');
    require('razorpay-php/Razorpay.php');


    // Get the value from the session variable

    $r = 5;
    $ro = ' <input type = "" style="border:none;width:90px" id ="psss" name="total-itm" value=568>';
    $sql = "SELECT * FROM users_items" ;
      
    $result = $con->query($sql);

    $row_count = mysqli_num_rows($result);

   
    if (isset($_POST['total-itm']) ) {
        $price = $con->real_escape_string($_POST['total-itm']);
       
    }
    else{


        echo $r."kdfjkdjhkhdgjklsdhfgljkdshgjkldsfhgjklsdfhgkljsdfhgjklsdhgjsdfhjklbsdrhuilg";

    }

    // Create the Razorpay Order

    use Razorpay\Api\Api;

    $api = new Api('rzp_test_z5JIuW5yG7f2l9', 'eQOeQMycueyzHbhAkPxGtm1i');

    //
    // We create an razorpay order using orders api
    // Docs: https://docs.razorpay.com/docs/orders
    //
    $unique_order_id = 'ORDER_' . uniqid();

    $orderData = [
        'receipt'         =>  $unique_order_id,
        'amount'          => $price* 100, // 2000 rupees in paise
        'currency'        => 'INR',
        'payment_capture' => 1 // auto capture
    ];

    $razorpayOrder = $api->order->create($orderData);

    $razorpayOrderId = $razorpayOrder['id'];

    $_SESSION['razorpay_order_id'] = $razorpayOrderId;

    $displayAmount = $amount = $orderData['amount'];

    if ($displayCurrency !== 'INR')
    {
        $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
        $exchange = json_decode(file_get_contents($url), true);

        $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
    }

    $checkout = 'automatic';

    if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
    {
        $checkout = $_GET['checkout'];
    }

  

    $sql = "SELECT * FROM users WHERE email = '" . $_SESSION['email'] . "'";
      
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
     $full_name = $row['name'];
     $name_parts = explode(" ", $full_name);

     // Extract the first name and last name
     $first_name = $name_parts[0];
     $last_name = $name_parts[1];
     $phoneo = $row['contact'];
     $email = $row['email'];

$address = $row['address'];
$random_number = rand(10000, 99999);
$timestamp = time();

$unique_id = $random_number . $timestamp;

    $data = [
        "key"               => 'rzp_test_z5JIuW5yG7f2l9',
        "amount"            => $amount,
        "name"              =>  "Fitness Club",
        "description"       => "Tron Legacy",
        "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
        "prefill"           => [
        "name"              => $full_name,
        "email"             => $email,
        "contact"           => $phoneo
        ],
        "notes"             => [
        "address"           => $address,
        "merchant_order_id" => $unique_id,
        ],
        "theme"             => [
        "color"             => "#F37254"
        ],
        "order_id"          => $razorpayOrderId,
    ];

    if ($displayCurrency !== 'INR')
    {
        $data['display_currency']  = $displayCurrency;
        $data['display_amount']    = $displayAmount;
    }

    $json = json_encode($data);
    

    require("checkout/{$checkout}.php");
?>
