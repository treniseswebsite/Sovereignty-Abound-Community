function sendMail() {
  var tempParams = {
    from_name: document.getElementById("user_name").nodeValue,
    email: document.getElementById("user_email").nodeValue,
    message: document.getElementById("message").nodeValue,
  };

  emailjs
    .send("service_qzqbnkr", "template_yz9hi99", tempParams)
    .then(function (res) {
      console.log("success", res.status);
    });
}
