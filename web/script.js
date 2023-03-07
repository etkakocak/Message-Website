window.onload = function() {
    document.body.style.visibility = "visible";
    document.body.style.opacity = 1;
}  

const themeToggle = document.getElementById("theme");
const toggleSwitch = document.querySelector('#theme');
const body = document.body;
function switchTheme(e) {
  if (e.target.checked) {
    body.classList.add('darkthemeon');
  } else {
    body.classList.remove('darkthemeon');
  }
}
toggleSwitch.addEventListener('change', switchTheme);
