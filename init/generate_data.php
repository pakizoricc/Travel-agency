<?php

// Define an array of data for each column
$titles = array("Sunset", "Beach", "Mountain", "Cityscape", "Forest");
$travelDates = array("2022-05-01", "2022-06-15", "2022-07-10", "2022-08-20", "2022-09-05");
$transTypes = array("bus", "train", "plane", "boat", "car");

// Open the file in read mode
$file = fopen('destinations.txt', 'r');

$destinations = array();
while (!feof($file)) {
    $destination = fgets($file);
    $destinations[] = $destination;
}

fclose($file);

// Connect to the database
$db = new mysqli("localhost", "root", "", "fin_travel");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Initialize a counter for the number of records inserted
$numRecordsInserted = 0;

$queries = array();

// Loop through all combinations of data and insert into the table
foreach ($titles as $title) {
    foreach ($destinations as $destination){
        
        if(trim($destination) == "") {
            break;
        }

        foreach ($travelDates as $travelDate) {
            foreach ($transTypes as $transType) {
                $numDays = rand(2, 10);
                $priceOffer = round(rand(70, 300) * 10, -1);
                $sql = "INSERT INTO arangements (title, destination, travel_date, num_days, price_offer, trans_type) VALUES ('$title', '$destination', '$travelDate', $numDays, $priceOffer, '$transType')";
                array_push($queries, $sql);
            }       
        }
    }    
}

shuffle($queries);

foreach($queries as $query){
    if ($db->query($query) === TRUE) {
        $numRecordsInserted++;
    } else {
        echo "Error inserting record: " . $db->error;
    }
}



// Print the total number of records inserted
echo "Total number of records inserted: " . $numRecordsInserted;

// Close the database connection
$db->close();

?>
