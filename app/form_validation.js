function validateForm() {
  var x = document.forms["tyrones_form"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
