function validateForm() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var shipping1 = document.getElementById("shipping1").checked;
  var shipping2 = document.getElementById("shipping2").checked;
  var shipping3 = document.getElementById("shipping3").checked;
  var cat1 = document.getElementById("cat1").value;
  var cat2 = document.getElementById("cat2").value;
  var cat3 = document.getElementById("cat3").value;

  var valid = true;
  var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (!email.match(validEmail))
  {

    if (email.length < 1)
    {
      alert("Email is empty");
    }
    else
    {
        alert("Email is invalid");
    }
    valid = false;
  }
  if (password.length < 1)
  {
    alert("Password is empty");
    valid = false;
  }
  if (!shipping1 && !shipping2 && !shipping3)
  {
    alert("Please select shipping");
    valid = false;
  }
  if (cat1 == 0 && cat2 == 0 && cat3 == 0)
  {
    alert("Must order atleast one cat");
    valid = false;
  }

  if (!valid)
  {
    return false;
  }
  else {
    return true;
  }

}
