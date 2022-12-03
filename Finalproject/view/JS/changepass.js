function isValid(pForm) {

    let err1 = document.getElementById("password_error_msg");
    let err2 = document.getElementById("password2_error_msg");
    let err3 = document.getElementById("password3_error_msg");

  err1.innerHTML = "";
  err2.innerHTML = "";
  err3.innerHTML = "";

  const password = pForm.password.value;
  const password2 = pForm.password2.value;
  const password3 = pForm.password3.value;

  let flag = true;

  if (password === "") {
    err1.innerHTML = "*Current Password cannot be empty(JS)";
    flag = false;
  }
  if (password2 === "") {
    err2.innerHTML = "*New Password cannot be empty(JS)";
    flag = false;
  }
  if (password3 === "") {
    err3.innerHTML = "*Re-type Password cannot be empty(JS)";
    flag = false;
  }

  if (!flag) return false;
	return true;

}