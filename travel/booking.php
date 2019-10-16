<?php
require 'config/config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script scr="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.js"></script>

    <style>

    .heading{
        text-align: center;
    }
    .form{
        align-content: center;
        padding: 55px;
    }


    
    </style>
    
</head>
<body>

<?php

//Get Trip ID Variable from trips page
     $tripId = $_GET['id'];
     
//Query the database for information on the selected trip. 
     $sql = "SELECT * FROM tripDetails WHERE tripId='".$tripId."'";
     $results = mysqli_query($con, $sql);
     $row = $results->fetch_assoc();
     $tripName= $row['tripName'];
     $tripDate= $row['tripDate'];
     $totalSpots = $row['spotsRemaining'];
     

if(isset($_POST['register_button'])) {
 
//Set Variables from submitted form. 
    $id = $_POST['tripId'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $credit = $_POST['credit'];
    $credit =md5($credit);
    $numOfAdults = $_POST['numOfAdults'];
    $numOfChildren = $_POST['numOfChildren'];

    $totalSpotsRequested= $numOfAdults + $numOfChildren;
//Check if there is enough spots remaining    
    if($totalSpotsRequested > $totalSpots){
        echo "There are only $totalSpots spots remaining";
    }else{
        
        //SQL Insert Statement
            $sql = "INSERT INTO guest (id, tripId, firstName, lastName, streetAddress, city, state, zip, phone, creditCard, numOfAdults, numOfChildren) 
            VALUES(NULL,'".$id."','".$firstName."','".$lastName."','".$address."','".$city."','".$state."','".$zip."','".$phone."','".$credit."','".$numOfAdults."','".$numOfChildren."')
        ";
        //Insert into Guest Table
        if(mysqli_query($con, $sql)){
            //header('Location: index.php');
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
        $spotsRemaining = $totalSpots-$totalSpotsRequested;
        //SQL Update Statement
            $sql2 = "UPDATE tripDetails SET spotsRemaining='".$spotsRemaining."'WHERE tripId='".$id."'
            ";
         //Update tripDetail Table for number of spots remaining
         if(mysqli_query($con, $sql2)){
            //header('Location: index.php');
            echo "updated";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    }//end check for total spots


}//end isset

    



    
   
?>
<div class="heading">
    <h1>Booking</h1>

    <h3>Sign Up for <?php echo $tripName ?> on <?php echo $tripDate?></h3>
</div>



<div class="form">
<form class="form-group" action="travelreciept.php?id=<?php echo $tripId?>" method="post">
    <input type="hidden" name="tripId" value="<?php echo $tripId?>" />

    <label for="firstname">First Name</label> 
    <input class="form-control form-control-lg" type="text" name="firstname"><br>

    <label for="lastname">Last Name</label> 
    <input class="form-control form-control-lg" type="text" name="lastname"><br>

    <label for="address">Address</label>
    <input class="form-control form-control-lg" type="text" name="address"><br>

    <label for="City">City</label>
    <input class="form-control form-control-lg" type="text" name="city"><br>

    <label for="state">State</label>
    <select class="form-control" id="state" name="state">
			<option value="">N/A</option>
			<option value="AK">Alaska</option>
			<option value="AL">Alabama</option>
			<option value="AR">Arkansas</option>
			<option value="AZ">Arizona</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DC">District of Columbia</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="IA">Iowa</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="MA">Massachusetts</option>
			<option value="MD">Maryland</option>
			<option value="ME">Maine</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MO">Missouri</option>
			<option value="MS">Mississippi</option>
			<option value="MT">Montana</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="NE">Nebraska</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NV">Nevada</option>
			<option value="NY">New York</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="PR">Puerto Rico</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VA">Virginia</option>
			<option value="VT">Vermont</option>
			<option value="WA">Washington</option>
			<option value="WI">Wisconsin</option>
			<option value="WV">West Virginia</option>
			<option value="WY">Wyoming</option>
		</select>
        <br>

    <label for="zip">Zip Code</label>
    <input class="form-control form-control-lg" type="text" name="zip"><br>

    <label for="phone">Phone Number</label>
    <input class="form-control form-control-lg" type="text" name="phone"><br>

    <label for="credit">Credit Card Number</label>
    <input class="form-control form-control-lg" type="password" name="credit"><br>

    <label for="numOfAdults">Number of Adults</label>
    <input class="form-control form-control-lg" type="number" name="numOfAdults"><br>

    <label for="numOfChildren">Number of Children</label>
    <input class="form-control form-control-lg" type="number" name="numOfChildren"><br>
    

<input type="submit" name="register_button" value="Register">
</form>



</div>
</body>
</html>
