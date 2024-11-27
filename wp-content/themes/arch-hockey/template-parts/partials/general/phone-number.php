<?php
/**
 * The template for displaying the main phone number
 */
?>
 
<?php
// Get Theme Options
$phone_number = get_field('phone_number', 'option');

echo $phone_number;
?>