//Functions for image gallery
function enlargeImage(inImage)	{
  //alert("inside enlargeImage()" );
  document.getElementById(inImage).style.transform = "scale(2,2)";

}

function originalSizeImage(inImage)	{
  //alert("inside originalSizeImage()");
  document.getElementById(inImage).style.transform = "scale(1,1)";

}

//Create New Date Object
  let dateObj = new Date();
//Create an array to hold written days of the week.
  let weekday = new Array(7);
    weekday[0] =  "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
//Create a list to hold written months of the year.
  const monthNames = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

//Creates a month variable to hold a month object
  let month = monthNames[dateObj.getMonth()]

//Creates a weekday variable to hold a day of the week object
  let n = weekday[dateObj.getDay()];

//Creates a day variable to hold a day object
  let day = dateObj.getUTCDate();

//Creates a year variable to hold a year object
  let year = dateObj.getUTCFullYear();


//Variable to store customer Name
  let customerName = "Please Sign In";

//When called this function will prompt the user for their name then display it on the screen.
function displayName(){
  customerName = prompt("Enter your name");
  document.getElementById("nameVariable").innerHTML = customerName.toUpperCase();
}

//This function will change the background color when selected on radio button.
function changeColor(obj) {
  console.log(obj);
  document.body.style.backgroundColor=obj;
}
