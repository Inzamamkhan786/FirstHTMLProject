<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a Delivery Address</title>
    <link rel="stylesheet" href="Address.css">
    <script type="text/javascript" src="Address.js"></script>
</head>
<body>
    <div class="container">
        <header> 
            <img src="amazon.png" alt="Amazon Logo"><br>
            <h1>Select a Delivery Address</h1>
            <p>Is the address you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button. Or you can <span style="color: aqua;">enter a new delivery address.</span></p>
            <hr>
            <div>
                <h3>Md Inzamamul Haque</h3>
                <p id="Add">Dia Hospitality Wing A building ensara metro park pipla fata<br>Ensara Metro park pipla fata Hudkeshwar road<br>NAGPUR, MAHARASHTRA 440034<br>India<br><span style="color: aqua;">Add delivery instructions.</span></p>
                <div>
                    <a href="Delivery_option.html"><button id="del">Deliver to this Address</button></a>
                </div>
            </div>
            <br>
            
            <h2>Add a New Address<hr></h2>
        </header>
        <form name="form1" action="Address.php" method="post" onsubmit="return validate()">
            <label for="country">Country/Region</label><br>
            <select id="country" name="Country">
                <option value="India">India</option>
                <option value="USA">USA</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="France">France</option>
                <option value="China">China</option>
                <option value="Russia">Russia</option>
            </select><br><br>
            <label for="fname">Full Name (First and Last Name)</label><br>
            <input type="text" id="fname" name="Fullname" class="inp"><br><br>

            <label for="phone"><b>Mobile number</b></label><br>
            <input type="number" id="phone" name="Mobilenumber" class="inp"><br><br>

            <label for="pincode"><b>Pincode<b></b><br></label>
            <input type="number" id="pincode" class="inp" name="Pincode" placeholder="6 digits[0-9]PIN code"><br><br>

            <label for="house"><b>Flat,House no.,Building,Company,Apartment</b><br></label>
            <input type="text" id="house" class="inp" name="Flatnumber"><br><br>

            <label for="area"><b>Area,Street,Sector,Village</b><br></label>
            <input type="text" id="area" name="Area"class="inp"><br><br>

            <label for="Landmark"><b>Landmark</b><br></label>
            <input type="text" id="Landmark" name="Landmark" class="inp" placeholder="E.g. near apollo hospital"><br><br>

            <label for="town"><b>Town/City</b><br></label>
            <input type="text" id="town" name="Town">
            
            <label for="state"><b>State</b></label>
            <select id="state" name="State">
                <option id="Mumbai">Mumbai</option>
                <option id="Kolkata">Kolkata</option>
                <option id="Delhi">Delhi</option>
                <option id="Bihar">Bihar</option>
                <option id="Chennai">Chennai</option>
                <option id="Kerala">Kerala</option>
                <option id="Telangana">Telangana</option>
            </select><br><br>

            <input type="checkbox" value="Default" name="default" id="check">
            <label for="check" style="font-weight: lighter;">Make this my default address.</label>
          
            <h3 style="font-weight: 550;">Delivery instructions (optional)</h3>
            <p><span style="color: blue; font-weight: lighter; font-size: 15px;">Add preferences,notes,access codes and more</span></p>
            <br>
            <br>
            <button type="submit">Use this Address</button>
        </form>
    </div>
    <footer>
        <p>Conditions of use | Privacy Notice &copy; 2011-2023, Amazon.com, Inc. and its affiliates</p>
    </footer>
</body>
</html>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "address_detail";

$con = mysqli_connect($server, $username, $password, $database);

if(!$con)
{
    die("Error". mysqli_connect_error());
}

if(isset($_POST["Country"],$_POST["Fullname"],$_POST["Mobilenumber"],$_POST["Pincode"],$_POST["Flatnumber"],$_POST["Area"],$_POST["Landmark"],$_POST["Town"],$_POST["State"],$_POST["default"]))
{

    $Country = $_POST["Country"];
    $Fullname = $_POST["Fullname"];
    $Mobilenumber = $_POST["Mobilenumber"];
    $Pincode = $_POST["Pincode"];
    $Flatnumber = $_POST["Flatnumber"];
    $Area = $_POST["Area"];
    $Landmark =  $_POST["Landmark"];
    $Town = $_POST["Town"];
    $State = $_POST["State"];
    $Default = $_POST["default"];

    $sql = "INSERT INTO `address_detail`.`address_detail` ( `country`, `Full Name`, `Mobile Number`, `pincode`, `Flat,House number...`, `Area...`, `landmark`, `Town/city`, `State`, `Default or off`) VALUES ( '$Country', ' $Fullname', '$Mobilenumber', '  $Pincode', '$Flatnumber', ' $Area', ' $Landmark', '$Town', ' $State', '$Default');";

    if($con->query($sql) == true)
    {
    
        echo "<script>window.location.href = 'Delivery_option.html';</script>";
        exit();
    }
    else{
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>
