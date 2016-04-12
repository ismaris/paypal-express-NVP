<?
// Store to session
session_start();
$site='https://paypal.scott-mann.net/paypal-express-NVP/';
if(empty($_SESSION['loggedIn'])) {
        header('Location: '.$site.'_functions/login.php');
  }
require('_include/header.html');
$_SESSION['Payment_Amount'] = "20.00";
?>
    <div class="container">
        <div class="row">
        <div class="pre_2 col_8">
            <form class="form" action='_functions/expresscheckout.php' METHOD='POST'  enctype="multipart/form-data">
				<h1 id="mainTitle">PayPal Express Checkout Demo (NVP)</h1>
				<div class="content">
					<div id="section0" >
                    <div class="field" id="usernameField"><label for="username">Username:</label><input type="text" id="username" disabled="disabled" size="15" value="<? echo $_SESSION['user'];?>"</input></div>
                    <div class="field" id="paymentDescField"><label for="paymentDesc">Payment Description:</label><input type="text" id="paymentDesc" name="paymentDesc" size="15" value="Express Checkout Sample Item Description"></input></div>
                    <div class="field"><label for="Dollar Amount">Dollar Amount:</label><input type="text" id="Payment_Amount" name="Payment_Amount" size="15"></input></div>
                    <div class="col_3">
                        <input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
                    </div>
					</div>
				</div>	
            </form>
            </div>
            <p><a href="https://github.com/ismaris/paypal-express-NVP.git">Source Code on Github</a></p><br />
        </div>
     </div> 
<?php include('./_include/footer.html'); ?>
