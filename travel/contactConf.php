<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

        <style>
        #letter{
            padding: 45px;
        }
        </style>
</head>


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
                <a href="tel:+1-800-123-4567" >1-800-123-4567</a>
                </article>
        </main>


        <?php   
            if(isset($_POST['contact_button'])) {

                $firstName = $_POST['firstname'];
                $lastName = $_POST['lastname'];
                $contactMethod = $_POST['contact'];

            }
        
        ?>

        <div id="letter">
        <p>Dear <?php echo $firstName?> <?php  echo $lastName?>,<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you for contacting Adventure Travel.  We will return your message via <?php echo $contactMethod ?> as soon as possible.  We
            look forward to helping you out with any needs you may have. <br>
            Sincerly, <br><br>
            Adventure Travel Team
        </p>


        </div>

        
        
         
          <footer>
            <p>&copy; 2019. Ty Hobbs.</p>
          </footer>
    </body>
</html>