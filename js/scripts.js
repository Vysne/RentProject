// /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("wrapper").style.width = "250px";
    document.getElementById("content").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("wrapper").style.width = "0";
    document.getElementById("content").style.marginLeft = "0";
  }

// let wrapper = document.getElementById('wrapper');
// let content = document.getElementById('content');

// let opneBtn = document.getElementById('openBtn');
// let closeBtn = document.getElementById('closeBtn');

// opneBtn.addEventListener('click', () => {
//   openNav(wrapper, content);
//   console.log('open');
// });

// closeBtn.addEventListener('click', () => {
//   closeNav(wrapper, content);
//   console.log('close');
// });


// function openNav(wrapper, content) {
//   wrapper.style.width = '250px';
//   content.style.marginLeft = '250px';
// }

// function closeNav(wrapper, content) {
//   wrapper.style.width = '0px';
//   content.style.marginLeft = '0px';
// }