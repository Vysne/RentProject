/* Getting user's local time when opening web and depending on time, the text prints */
function setGreeting() {
  const time = new Date().getHours();
  let greeting;
  if(time < 10) greeting = "Good Morning";
  else if(time < 20) greeting = "Good Afternoon";
  else greeting = "Good Evening";

  document.getElementById('greetingsTitle').innerHTML = greeting;
}

setGreeting();