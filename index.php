<?php
    echo "I love pizza<br>";
    // Это однострочный комментарий
    /*
    Это многострочный комментарий
    */
?>
<?php
    $name = "Bro";
    $age = 21;
    $price = 4.99;
    $is_online = false;
    echo "Hello {$name}<br>";
    echo "You are {$age} years old<br>";
?>
<?php
    $x = 10;
    $y = 2;
    $z = $x + $y;
    echo $z;
    $counter = 0;
    $counter++;
    echo $counter;
?>
<?php
    $number = -5.75;
    echo abs($number);
    echo round($number);
    echo pow(2, 3);
    echo sqrt(16);
    echo rand(1, 100);
?>
<?php
    $age = 25;
    if ($age >= 18 && $age < 100) {
        echo "You may enter the site.";
    } else if ($age >= 100) {
        echo "You are too old to enter.";
    } else {
        echo "You must be 18+ to enter.";
    }
?>
<?php
    $temp = 25;
    $isSunny = true;
    if ($temp >= 0 && $temp <= 30 && $isSunny) {
        echo "The weather is good.";
    } else {
        echo "The weather is bad.";
    }
?>
<?php
$grade = 'B';
switch ($grade) {
    case 'A':
        echo "You did great!";
        break;
    case 'B':
        echo "You did good!";
        break;
    case 'C':
        echo "You did okay.";
        break;
    case 'D':
        echo "You did poorly.";
        break;
    case 'F':
        echo "You failed.";
        break;
    default:
    echo "{$grade} is not a valid grade.";
    }
?>
<?php
    for ($i = 0; $i < 5; $i++) {
        echo "Hello {$i}<br>";
    }
?>
<?php
    $seconds = 0;
    $running = true;
    while ($running) {
        $seconds++;
        echo "Seconds: {$seconds}<br>";
        if ($seconds >= 10) { // Условный выход из цикла
            $running = false;
        }
    }
?>
<?php
    $foods = array("apple", "orange", "banana", "coconut");
    $foods[0] = "pineapple";
    array_push($foods, "kiwi");
    array_pop($foods);
    foreach ($foods as $food) {
        echo $food . "<br>";
    }
    echo "Number of foods: " . count($foods);
?>
<?php
    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Kyoto",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    );
    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";
    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value}<br>";
    }
?>
<?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
    if (empty($username)) {
        echo "Username is missing.";
    } else {
        echo "Hello {$username}";
        }
    }
?>
<?php
    function happyBirthday($first_name, $age) {
        echo "Happy birthday dear {$first_name}<br>";
        echo "You are {$age} years old!<br>";
    }
    happyBirthday("SpongeBob", 30);
?>
<?php
    $username = " Bro Code ";
    $username = strtolower(trim($username));
    echo $username; // "bro code"
    $phone = "123-456-7890";
    $phone = str_replace("-", "", $phone);
    echo $phone; // "1234567890"
?>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if (empty($username)) {
            echo "Username is required.";
        }
        if ($email === false) {
            echo "Invalid email format.";
        }
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <button>Order a pizza</button>
        <form action="index.php" method="post">
            <label>Username:</label><br>
            <input type="text" name="username"><br>
            <label>Password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];
                echo "Username: {$username}<br>";
            }
        ?>
        <form action="index.php" method="post">
            <label>Radius:</label><br>
            <input type="text" name="radius"><br>
            <input type="submit" value="Calculate">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $radius = $_POST['radius'];
                $circumference = round(2 * pi() * $radius, 2);
                $area = round(pi() * pow($radius, 2), 2);
                $volume = round((4/3) * pi() * pow($radius, 3), 2);
                echo "Circumference: {$circumference} cm<br>";
                echo "Area: {$area} cm²<br>";
                echo "Volume: {$volume} cm³<br>";
            }
        ?>
        <form action="index.php" method="post">
            <label>Enter a number to count up to:</label><br>
            <input type="text" name="counter"><br>
            <input type="submit" value="Start">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $counter = $_POST['counter'];
                for ($i = 1; $i <= $counter; $i++) {
                    echo $i . "<br>";
                }
            }
        ?>
        <form action="index.php" method="post">
            <input type="radio" name="credit_card" value="Visa"> Visa<br>
            <input type="radio" name="credit_card" value="MasterCard"> MasterCard<br>
            <input type="radio" name="credit_card" value="American Express"> American Express<br>
            <input type="submit" name="confirm" value="Confirm">
        </form>

        <?php
            if (isset($_POST['confirm'])) {
                $credit_card = $_POST['credit_card'] ?? null;
                if ($credit_card != null) {
                    echo "You selected {$credit_card}.";
                } else {
                    echo "Please make a selection.";
                }
            }
        ?>
        <form action="index.php" method="post">
            <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
            <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger<br>
            <input type="checkbox" name="foods[]" value="Taco"> Taco<br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['foods'])) {
                    foreach ($_POST['foods'] as $food) {
                        echo "You like {$food}<br>";
                    }
                }
            }
        ?>

    </body>
</html>
