<?php

//za arangements
$titles = array("Sunset", "Beach", "Mountain", "Cityscape", "Forest");
$from_dates = array("2022-05-01", "2022-05-03", "2022-05-05", "2022-05-06", "2022-05-07");
$to_dates = array("2022-05-08", "2022-05-09", "2022-05-10");
$transTypes = array("autobus", "voz", "avion", "brod", "automobil");

$file = fopen('destinations.txt', 'r');

$destinations = array();
while (!feof($file)) {
    $destination = fgets($file);
    $destinations[] = $destination;
}

fclose($file);

//za accomodation
$internet_connections = array("ima Wi-Fi", "nema Wi-Fi");
$room_refriginators = array("ima sobni frižider", "nema sobni frižider");


// Connect to the database
$db = new mysqli("localhost", "root", "", "fin_travel");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//broj podataka generisanih u tabele arangements i accomodation
$numRecordsInserted = 0;
$numRecordsInserted2 = 0;

//
$queries = array();
$queries2 = array();

//petlja za arangements
foreach ($titles as $title) {
    foreach ($destinations as $destination){
        
        if(trim($destination) == "") {
            break;
        }

        foreach ($from_dates as $from_date) {
            foreach ($to_dates as $to_date) {
                foreach ($transTypes as $transType) {
                    $numDays = rand(2, 10);
                    $priceOffer = round(rand(70, 300) * 10, -1);
                    $sql = "INSERT INTO arangements (title, destination, from_date, to_date, num_days, price_offer, trans_type) VALUES ('$title', '$destination', '$from_date', '$to_date', '$numDays', '$priceOffer', '$transType')";
                    array_push($queries, $sql);
                }  
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

//petlja za accomodation
foreach ($internet_connections as $internet_connection) {
    foreach ($room_refriginators as $room_refriginator){
        $category = rand(1,5);
        $sql2 = "INSERT INTO accomodation (category, internet_connection, room_refriginator) VALUES ('$category','$internet_connection','$room_refriginator');";
        array_push($queries2, $sql2);
    }
}

shuffle($queries2);

foreach($queries2 as $query2){
    if ($db->query($query2) === TRUE) {
        $numRecordsInserted2++;
    } else {
        echo "Error inserting record: " . $db->error;
    }
}


//ukupan broj inicijalizovanih podataka
echo "Total number of records inserted in arangements: " . $numRecordsInserted;
echo "<br>";
echo "Total number of records inserted in accomodation: " . $numRecordsInserted2;

$db->close();

?>
