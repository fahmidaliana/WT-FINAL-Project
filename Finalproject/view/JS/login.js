function isValid(pForm) {

    let err1 = document.getElementById("email_error_msg");
    let err2 = document.getElementById("password_error_msg");

  err1.innerHTML = "";
  err2.innerHTML = "";

  const email = pForm.email.value;
  const password = pForm.password.value;

  let flag = true;

  if (email === "") {
    err1.innerHTML = "*Email cannot be empty(JS)";
    flag = false;
  }
  if (password === "") {
    err2.innerHTML = "*Password cannot be empty(JS)";
    flag = false;
  }

  if (!flag) return false;
	return true;

}