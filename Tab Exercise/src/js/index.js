function tabs(evt, tabname) {
  var i, tabcontent, tabButton;

   tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabButton = document.getElementsByClassName("tabButton");
  for (i = 0; i < tabButton.length; i++) {
    tabButton[i].className = tabButton[i].className.replace
    (" active", " ");
  }
  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " active";
}