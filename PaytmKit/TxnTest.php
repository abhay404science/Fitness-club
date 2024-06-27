<?php
session_start();
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
require("../component/comon.php");
if (isset($_POST['total-itm'])) {
	$totalitem = $con->real_escape_string($_POST['total-itm']);
	// echo $totalitem;

}
else{
	echo "noo";
}
$sql = "SELECT name, email FROM users WHERE email = '{$_SESSION['email']}'";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$name = $row['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
           <script src="bootstrap/js/jquery-3.6.0.min.js" type="text/javascript"></script>
  
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  
  <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap Core CSS -->
          <link href="../css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
         

   <link rel = "stylesheet" href = "../css/style.css?v=<?php    echo time(); ?>">

        <!-- jQuery -->
        
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>


</head>
<body>
	<?php require("../header.php"); ?>
    <center><h1>CHECK OUT</h1></center>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		
	<div class="card-body" style="margin-left:400px;width:1000px;">
                <table class="table table-bordered"  style="width:;">
                  <thead>
				  <tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Detail</th>
				</tr>
                  </thead>
               <tbody>
			   <tr>
					<td>1</td>
					<td><label>ORDER ID</label></td>
					<td><input style="border:none" disabled id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUST ID </label></td>
					<td><input style="border:none"disabled readonly id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY TYPE ID</label></td>
					<td><input style="border:none" 	 disabled id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value=retail></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel</label></td>
					<td><input style="border:none" disabled id="CHANNEL_ID" tabindex="4" maxlength="12" readonly
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Amount</label></td>
					<td><input style="border:none" disabled title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT" readonly
						value= '<?php 
						 echo $totalitem;


						?>' > 
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit"	onclick=""></td>
				</tr>
			</tbody>
  
   
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix" style="width:1230px">
              
              </div>

<?php require("../footer.php"); ?>

	</form>
</body>
</html>