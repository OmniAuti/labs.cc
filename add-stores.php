<?php
if (($handle = fopen(get_template_directory_uri() . "/csv/AZ_distribution_list.csv", "r")) !== FALSE) {
  // Read the CSV file line by line
  $i=0
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  // Create a new post object and set its properties
  $option_dispensary1 = "options_dispensaries_" . $i . "_dispensary_name";
  $option_dispensary2 = "_options_dispensaries_" . $i . "_dispensary_name";
  $option_license1 = "options_dispensaries_" . $i ."_license_number";
  $option_license2 = "_options_dispensaries_" . $i . "_license_number";
  $option_dispensary2_value = "field_659ecc5f91659";
  $options_license2_value = "field_659ecc679165a";
    add_option($option_dispensary1, $data[0]);
    add_option($option_dispensary2, $option_dispensary2_value);
    add_option($option_license1, $data[1]);
    add_option($option_license2, $options_license2_value);
    $i++;
  }
  fclose($handle);
  }


?>
