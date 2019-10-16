<?php  

$customerName =$_POST['customerName'];
$customerEmail =$_POST['customerEmail'];
$customerSubject=$_POST['customerSubject'];
$customerMessage=$_POST['customerComments'];

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

        <style>
        div{
            padding: 50px;
        }

        header{
                background-color: green;
                padding:0px;
                margin-bottom: -4px;
                border: 0px;
                content: 100%;
                
            }

            /*Header Logo*/
                #logo {
                    width: 100%;
                    height: 100%;
                
                    
                }

             /*Changes background color*/
             body{
                    
                    font-family: 'Playfair Display', serif;
                  
                }

            /*Changes h1 background color*/
            h1{
                    background-color: green;
                    text-align: center;
                   
                }
            
            /*Navigation*/
            nav{
                padding:0px;
                margin-top: -24px;
                border: 0px;
                content: 100%;
            }

            /*Navigation Bar CSS*/

            nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: black;
            }

            nav li {
                float: left;
                
                }

            nav li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            nav li a:hover:not(.active) {
                background-color: #111;
            }

            .active {
            background-color: #4CAF50;
            }
        
        </style>
        
    </head>
    <body>

     <!--Header-->
     <header>
            <img id="logo" src="images/koala_banner_new.jpg">
            <h1>Koala Bear National Information Center</h1>
  
        </header>


        <!--Navigation-->
        <nav>
            <!--Navigation Bar-->

            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="fast_facts.html">Fun Facts</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                
            </nav>
        </nav>
        <div>
            <p>Dear <?php echo $customerName?>, <br> 
            Thanks for your inquiry into the Koala Bear National Information Center regarding 
            <?php echo $customerSubject?>.  We will return your message to <?php echo $customerEmail?> as
            quickly as possible.  Just for your confirmation the following message has been sent to our team: <br>
            <?php echo $customerMessage?><br>
            <br>
            Thanks for your interest in our orginization. <br>

            Have a Good Day,
            <br>
            <br>
            Koala Bear Admin Team

        
        </p>


        </div>
    </body>
</html>