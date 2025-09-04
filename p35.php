<?php
$countries = ["India" => "New Delhi", "USA" => "Washington", "Germany" => "Berlin"];
$search = "Berlin";
$country = array_search($search, $countries);

if ($country !== false) {
    echo "$search is the capital of $country.";
} else {
    echo "Capital not found.";
}
?>

