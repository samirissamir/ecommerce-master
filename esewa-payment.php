<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION['username']) || !isset($_POST['amount'])) {
    header('Location: cart.php');
    exit();
}
$amount = $_POST['amount'];
$product_id = 'BOLTORDER' . time(); // Unique per transaction
$merchant_code = 'EPAYTEST'; // Test merchant code
$return_url = 'http://localhost/ecommerce-master/esewa-success.php';
$fail_url = 'http://localhost/ecommerce-master/esewa-fail.php';
?>
<form id="esewaPay" action="https://rc.esewa.com.np/epay/main" method="POST">
    <input value="<?php echo $amount; ?>" name="tAmt" type="hidden">
    <input value="<?php echo $amount; ?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="<?php echo $merchant_code; ?>" name="scd" type="hidden">
    <input value="<?php echo $product_id; ?>" name="pid" type="hidden">
    <input value="<?php echo $return_url; ?>" type="hidden" name="su">
    <input value="<?php echo $fail_url; ?>" type="hidden" name="fu">
    <button type="submit">Pay with eSewa</button>
</form>
