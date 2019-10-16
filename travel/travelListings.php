<?php
require 'config/config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  
    <style>

table, td, th {  
  border: 1px solid #ddd;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
    text-align: left;
}

th{
    background-color: #808080;
}

th, td {
  padding: 15px;
  
}

tr:hover {background-color:#f5f5f5;}

a{
    background-color: #a65959;
    padding: 10px;
     text-decoration: none;
     color: white;
     border-radius: 20%;
     text-align: center;
     display:inline-block;
     transition: all .3s;
}


    </style>
    
    
</head>
<body>

<body>
        <nav class="navbar">
            <a href="index.html" class="logo">AT</a>
            <ul class="main-nav">
                <li class="navLi">
                    <a href="index.html" class="nav-links">Home</a>
                </li>
                <li class="navLi">
                    <a href="adventure.html" class="nav-links">Adventure Advantages</a>
                </li>
                <li class="navLi">
                    <a href="FAQ.html" class="nav-links">FAQ</a>
                </li>
                <li class="navLi">
                    <a href="about.html" class="nav-links">About Us</a>
                </li>
                <li class="navLi">
                    <a href="contact.php" class="nav-links">Contact</a>
                </li>
            </ul>
    </nav>
        <main class="wrapper">
            <section class="banner">
              <h1>Adventure Travel</h1>
              <article>
                <p>We are the best in class, family-owned and operated boutique international adventure travel outfitter.
                <br>
                <br>
                
                </article>
                

              
            </section>

<?php $tripName = $_GET['name']; ?>

<h1><?php echo $tripName;  ?></h1>
<div>
<table>
    <thead> 
        <tr>
            <th>Trip Name</th>
            <th>Location</th>
            <th>Date</th>
            <th>Number of Days</th>
            <th>Number of Nights</th>
            <th>Description</th>
            <th>Adult Price</th>
            <th>Child Price</th>
            <th>Spots Remaining</th>
            <th></th>
        </tr>
    </thead>    
<?php
$tripId = $_GET['id'];


$sql = "SELECT * FROM tripDetails WHERE tripCode='".$tripId."'";
$results = mysqli_query($con, $sql);




if ($results->num_rows > 0) {
    
    // output data of each row
    $bookNow = " Book Now ";
    
    while($row = $results->fetch_assoc()) {
        $date55=$row['tripDate'];
        
        $formatedDate =date_create($date55);
                    $test= date_format($formatedDate,"m/d/Y");
        $spots = $row['spotsRemaining'];
        $bookingLink= "<a href='booking.php?id={$row['tripId']}'>$bookNow</a>";
        if($spots==0){
            $spots="<h3 style='color:red;'>Sold Out</h3>";
            $bookingLink="";
        }
        echo "
        <tbody>
        <tr>
        <td>{$row['tripName']}</td>
        <td>{$row['tripLocation']}</td>
        <td>$test</td>
        <td>{$row['numOfDays']}</td>
        <td>{$row['numOfNights']}</td>
        <td>{$row['description']}</td>
        <td>{$row['adultPrice']}</td>
        <td>{$row['childPrice']}</td>
        <td>$spots</td>
        <td>$bookingLink</td>
        </tr>
       
        </tbody>
        ";

    }
} else {
    echo "0 results";
}



?>

</table>

</div>
    

  
</body>
</html>


