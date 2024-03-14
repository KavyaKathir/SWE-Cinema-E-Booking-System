oldPwdView = document.getElementById('oldPwdView');

function toggleOldPwdView() {
    var x = document.getElementById("oldPwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

oldPwdView.addEventListener('change', toggleOldPwdView);


newPwdView = document.getElementById('newPwdView');

function toggleNewPwdView() {
    var x = document.getElementById("newPwd");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

newPwdView.addEventListener('change', toggleNewPwdView);