<?php
// Disable caching headers
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// Include required Paytm configuration and encryption/decryption files
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

// Retrieve POST data
if(isset($_POST["ORDER_ID"])){

	$ORDER_ID = $con->real_escape_string($_POST['ORDER_ID']);;
	$CUST_ID =$con->real_escape_string($_POST['CUST_ID']);
	$INDUSTRY_TYPE_ID = $con->real_escape_string($_POST['INDUSTRY_TYPE_ID']);
	$CHANNEL_ID = $con->real_escape_string($_POST['CHANNEL_ID']);
	$TXN_AMOUNT = $con->real_escape_string($_POST['TXN_AMOUNT']);

}


// Create an array with the required parameters for creating the checksum
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;

// Generate the checksum
$checkSum = getChecksumFromArray($paramList, PAYTM_MERCHANT_KEY);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Merchant Check Out Page</title>
</head>
<body>
    <center><h1>Please do not refresh this page...</h1></center>
    <form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
        <table border="1">
            <tbody>
            <?php
            // Output the parameters as hidden input fields
            foreach($paramList as $name => $value) {
                echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
            }
            ?>
            <input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
            </tbody>
        </table>
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </form>
</body>
</html>
