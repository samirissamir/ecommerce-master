<?php

//url tala ko jasto aaunu oaryo hai
// Example: http://localhost/ecommerce-master/esewa-success.php?oid=...&amt=...&refId=...
if (isset($_GET['oid']) && isset($_GET['amt']) && isset($_GET['refId'])) {
    echo "<h2>Payment Successful!</h2>";
    echo "<p>Order ID: " . htmlspecialchars($_GET['oid']) . "</p>";
    echo "<p>Amount: " . htmlspecialchars($_GET['amt']) . "</p>";
    echo "<p>Reference ID: " . htmlspecialchars($_GET['refId']) . "</p>";
    //aba esma yo sab halda hunxa Save order, clear cart, etc.
} else {
    echo "<h2>Invalid payment or session.</h2>";
}
?> 