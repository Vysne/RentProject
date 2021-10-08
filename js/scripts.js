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