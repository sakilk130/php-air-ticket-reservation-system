function validationn() {
  var fname = document.forms["RegForm"]["fname"];
  var lname = document.forms["RegForm"]["lname"];
  var uname = document.forms["RegForm"]["uname"];
  var email = document.forms["RegForm"]["email"];
  var phone = document.forms["RegForm"]["phone"];
  var gender = document.forms["RegForm"]["gender"];
  var birthdate = document.forms["RegForm"]["birthdate"];
  var pass = document.forms["RegForm"]["pass"];
  var cpass = document.forms["RegForm"]["cpass"];

  if (fname.value == "") {
    window.alert("Please Enter First Name!");
    fname.focus();
    return false;
  }
  if (lname.value == "") {
    window.alert("Please Enter Last Name!");
    lname.focus();
    return false;
  }
  if (uname.value == "") {
    window.alert("Please Enter Username!");
    uname.focus();
    return false;
  }
  if (email.value == "") {
    window.alert("Please Enter Email Address!");
    email.focus();
    return false;
  }
  if (phone.value == "") {
    window.alert("Please Enter Phone Number!");
    phone.focus();
    return false;
  }
  if (gender.value == "") {
    window.alert("Please Enter Gender!");
    // gender.focus();
    return false;
  }
  if (birthdate.value == "") {
    window.alert("Please Enter Birthdate!");
    // birthdate.focus();
    return false;
  }
  if (pass.value == "") {
    window.alert("Please Enter Password!");
    pass.focus();
    return false;
  }
  if (cpass.value == "") {
    window.alert("Please Enter Confirm Password!");
    cpass.focus();
    return false;
  } else {
    if (pass.value == cpass.value) {
    } else {
      window.alert("Password is incorrect!");
      cpass.focus();
      return false;
    }
  }

  return true;
}
