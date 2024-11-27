<?php
/**
 * The template for displaying the main email address
 */
?>

<?php 
// Get Theme Options
$email_address = get_field('email_address', 'option');

echo $email_address;
?>
