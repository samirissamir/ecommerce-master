<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<h2>Payment Failed</h2>
<p>Your eSewa payment was not successful or was cancelled.</p>
<a href="cart.php">Return to Cart</a> 