const username = document.getElementById("username");
const l_username = document.getElementById("l_username");
username.addEventListener("input", () => {
  if (username.value != "") {
    l_username.style.top = "0";
    l_username.style.fontSize = "0.7em";
  } else {
    l_username.style.top = "";
    l_username.style.fontSize = "";
  }
});

const password = document.getElementById("password");
const l_password = document.getElementById("l_password");
password.addEventListener("input", () => {
  if (password.value != "") {
    l_password.style.top = "0";
    l_password.style.fontSize = "0.7em";
  } else {
    l_password.style.top = "";
    l_password.style.fontSize = "";
  }
});
