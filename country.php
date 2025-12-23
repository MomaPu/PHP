<form action="index.php" method="post">
    <label>Enter a country:</label><br>
    <input type="text" name="country"><br>
    <input type="submit" value="Submit">
</form>

<?php
    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "India" => "New Delhi",
        "China" => "Beijing",
        "Russia" => "Moscow",
        "Germany" => "Berlin",
        "France" => "Paris",
        "United Kingdom" => "London",
        "Italy" => "Rome",
        "Spain" => "Madrid",
        "Canada" => "Ottawa",
        "Australia" => "Canberra",
        "Brazil" => "Brasília",
        "Mexico" => "Mexico City",
        "Argentina" => "Buenos Aires",
        "Egypt" => "Cairo",
        "South Africa" => "Pretoria",
        "Nigeria" => "Abuja",
        "Kenya" => "Nairobi",
        "Turkey" => "Ankara",
        "Saudi Arabia" => "Riyadh",
        "Iran" => "Tehran",
        "Israel" => "Jerusalem",
        "Pakistan" => "Islamabad",
        "Bangladesh" => "Dhaka",
        "Indonesia" => "Jakarta",
        "Thailand" => "Bangkok",
        "Vietnam" => "Hanoi",
        "Philippines" => "Manila",
        "Malaysia" => "Kuala Lumpur",
        "Singapore" => "Singapore",
        "Poland" => "Warsaw",
        "Ukraine" => "Kyiv",
        "Netherlands" => "Amsterdam",
        "Belgium" => "Brussels",
        "Switzerland" => "Bern",
        "Sweden" => "Stockholm",
        "Norway" => "Oslo",
        "Denmark" => "Copenhagen",
        "Finland" => "Helsinki",
        "Portugal" => "Lisbon",
        "Greece" => "Athens",
        "Czech Republic" => "Prague",
        "Austria" => "Vienna",
        "Hungary" => "Budapest",
        "Romania" => "Bucharest",
        "Bulgaria" => "Sofia",
        "Serbia" => "Belgrade",
        "Croatia" => "Zagreb"
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $country = $_POST['country'];
        $capital = $capitals[$country] ?? "Capital not found.";
        echo "The capital of {$country} is {$capital}.";
    }
?>