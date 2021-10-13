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

function setGreeting() {
  const time = new Date().getHours();
  let greeting;
  if(time < 10) greeting = "Good Morning";
  else if(time < 20) greeting = "Good Afternoon";
  else greeting = "Good Evening";

  document.getElementById('greetingsTitle').innerHTML = greeting;
}

setGreeting();