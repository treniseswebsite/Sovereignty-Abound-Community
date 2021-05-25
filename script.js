function sendMail() {
  var tempParams = {
    from_name: document.getElementById("user_name").value,
    email: document.getElementById("user_email").value,
    message: document.getElementById("message").value,
  };

  emailjs.send("service_qzqbnkr", "template_yz9hi99").then(function (res) {
    console.log("success", res.status);
  });
}
