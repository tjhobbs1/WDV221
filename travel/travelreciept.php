<?php
require 'config/config.php';

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Confirmation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>

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
   header('Location: tripFull.html');
}else{
   
   //SQL Insert Statement
       $sql = "INSERT INTO guest (id2, tripId, firstName, lastName, streetAddress, city, state, zip, phone, creditCard, numOfAdults, numOfChildren) 
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
       //echo "updated";
   } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
   }
}//end check for total spots


}//end isset


$sql = "SELECT * FROM tripDetails WHERE tripId='".$id."'";
     $results = mysqli_query($con, $sql);
     $row = $results->fetch_assoc();
     $tripName= $row['tripName'];
     $tripDate= $row['tripDate'];
     $adultCost = $row['adultPrice'];
     $childCost= $row['childPrice'];
    

?>

<div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="assets/images/Adventure Travel.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: 34590<br>
                                Created: <?php echo  date("m/d/Y")  ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Adventure Travel<br>
                                12345 Sunny Road<br>
                                Sunnyville, CA 12345
                            </td>
                            
                            
                            <td>
                                <?php echo $firstName .' ' .$lastName ?><br>
                                <?php echo $address ?><br>
                                <?php echo $city. ' '.$state. ' '.$zip; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Trip Name
                </td>
                <td>
                    
                </td>
                
                <td>
                   Trip Date
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php echo $tripName ?>
                </td>
                
                <td></td>
                <td>
                    <?php $formatedDate =date_create($tripDate);
                    echo date_format($formatedDate,"m/d/Y"); ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Cost
                </td>
                <td>
                    QTY
                </td>
                <td>
                    Subtotal
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Number of Adults
                </td>
                    
                <td>
                    $<?php echo $adultCost ?>
                </td>
                <td>
                    <?php echo $numOfAdults ?>  
                </td>
                <td>
                    $<?php $adultTotal = $adultCost * $numOfAdults;  
                    echo $adultTotal;
                    ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Number of Children
                </td>
                    
                <td>
                    $<?php echo $childCost ?>
                </td>
                <td>
                    <?php echo $numOfChildren ?>  
                </td>
                <td>
                $<?php $childTotal = $childCost * $numOfChildren;  
                    echo $childTotal;
                    ?>
                </td>
            </tr>
            
           
            
            <tr class="total">
                <td>Total</td>
                <td></td>
                <td></td>
                
                <td>
                   $<?php echo $adultTotal + $childTotal  ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

