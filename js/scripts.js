// /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById('sidebar').style.marginLeft = "0px";
    document.getElementById("content").style.marginLeft = "-250px";
  }
  
/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("sidebar").style.marginLeft = "-250px";
  document.getElementById("content").style.marginLeft = "0px";
}

/* W3.CSS dropdown script */
function DropdownContent() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

/* Picks user's local time and sets it on greeting text*/
// function GetLocalTime() {
//   const time= new Date().getHours();
//   let greeting;
//   if(time < 10) {
//     greeting = "Good morning";
//   } else if (time < 20) {
//     greeting = "Good afternoon";
//   } else {
//     greeting = "Good evening";
//   }
//   document.getElementById("greetingtxt").innerHTML = greeting;
// }
