function openTab(evt, tabName, id) {
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    if (tabcontent[i].id.includes(id)) {
      tabcontent[i].style.display = "none";
    }
  }

  var tablinks = document.getElementsByClassName("tablinks");
  for (var i = 0; i < tablinks.length; i++) {
    if (tablinks[i].id.includes(id)) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  }

  document.getElementById(tabName).style.display = "block";
  evt.className += " active";
}
