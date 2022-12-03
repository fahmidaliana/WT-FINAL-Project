function isValid(pForm) {

    let err1 = document.getElementById("fname_error_msg");
    let err2 = document.getElementById("lname_error_msg");
    let err3 = document.getElementById("dob_error_msg");
    let err4 = document.getElementById("weddate_error_msg");
    let err5 = document.getElementById("budget_error_msg");
    let err6 = document.getElementById("gender_error_msg");
    let err7 = document.getElementById("phone_error_msg");
    let err8 = document.getElementById("password_error_msg");
    let err9 = document.getElementById("email_error_msg");
    let err10 = document.getElementById("cpassword_error_msg");



  err1.innerHTML = "";
  err2.innerHTML = "";
  err3.innerHTML = "";
  err4.innerHTML = "";
  err5.innerHTML = "";
  err6.innerHTML = "";
  err7.innerHTML = "";
  err8.innerHTML = "";
  err9.innerHTML = "";
  err10.innerHTML = "";

  const fname = pForm.fname.value;
  const lname = pForm.lname.value;
  const dob = pForm.dob.value;
  const weddate = pForm.weddate.value;
  const budget = pForm.budget.value;
  const gender = pForm.gender.value;
  const phone = pForm.phone.value;
  const email = pForm.email.value;
  const password = pForm.password.value;
  const cpassword = pForm.cpassword.value;


  let flag = true;

  if (fname === "") {
    err1.innerHTML = "*First name cannot be empty(JS)";
    flag = false;
  }
  if (lname === "") {
    err2.innerHTML = "*Last name cannot be empty(JS)";
    flag = false;
  }
  if (dob === "") {
    err3.innerHTML = "*Date of bith cannot be empty(JS)";
    flag = false;
  }
  if (weddate === "") {
    err4.innerHTML = "*Wedding date cannot be empty(JS)";
    flag = false;
  }
  if (budget === "") {
    err5.innerHTML = "*Budget cannot be empty(JS)";
    flag = false;
  }
  if (gender === "") {
    err6.innerHTML = "*Gender cannot be empty(JS)";
    flag = false;
  }
  if (phone === "") {
    err7.innerHTML = "*Phone number cannot be empty(JS)";
    flag = false;
  }
  if (password === "") {
    err8.innerHTML = "*Password cannot be empty(JS)";
    flag = false;
  }
  if (email === "") {
    err9.innerHTML = "*Email cannot be empty(JS)";
    flag = false;
  }
  if (cpassword === "") {
    err10.innerHTML = "*Confirm Password cannot be empty(JS)";
    flag = false;
  }

  if (!flag) return false;
	return true;

}