
function check(event) { 

  var s = document.getElementById("Username").value;
  var count = 0;
  var reg_1 = /^[\w]{5,10}$/i;
  if (s != " ") {
    if (s.match(reg_1)) count++;
    else alert("Give the valid username");
  } else alert("Please fill out Username field");
  // EMAIL
  var e = document.getElementById("Email").value;
  var reg_2 = /^[\w]+@gmail.com$/i;
  if (e != "") {
    if (e.match(reg_2)) count++;
    else alert("Give the valid email address");
  } else if (s.match(reg_1) && e == "")
    alert("Please fill out Email field");
  // PASSWORD
  var n = document.getElementById("password").value;
  var reg_3 = /^.*(?=.{8,16})(?=.*[a-zA-Z])(?=.*\d)(?=.*[@#!%$]).*$/;
  if (n != "" && s.match(reg_1) && e.match(reg_2)) {
    if (n.match(reg_3)) count++;
    else alert("Enter the Valid Password");
  } else if (s.match(reg_1) && e.match(reg_2) && n == "")
    alert("Please fill out Password field");
  // RESULT
  if (count == 3) alert("Logged in Successfully....");
  else if (s.match(reg_1) && n.match(reg_3) && e.match(reg_2))
    alert("Please check out the details");
}
