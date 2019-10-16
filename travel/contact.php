<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact Us</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

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

    a {
     background-color: goldenrod;
     text-decoration: none;
     color: white;
     border-radius: 5%;
     text-align: center;
     display:inline-block;
     transition: all .3s;
   }
   
   a:hover {
     opacity: .6;
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
                    <a href="#" class="nav-links">Contact</a>
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

       
        <div class="form">
                <form class="form-group" action="contactConf.php" method="post">
                
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
                            <option value="">Select State</option>
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

                    <label for="comment">Question/Comment</label> 
                    <textarea class="form-control" rows="5" id="comment"></textarea>

                    <br>
                    <p>Contact Preference:</p>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="contact" value="email">Email
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="contact" value="phone">Phone
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="contact" value="mail" >Mail
                        </label>
                    </div>
                    <br>
                
                    
    
                
                    <input type="submit" name="contact_button" class="btn btn-warning" value="Submit Button">
                </form>
               
               
    

                
        
         
          
    </body>
    <footer>
            <p>&copy; 2019. Ty Hobbs.</p>
          </footer>
</html>