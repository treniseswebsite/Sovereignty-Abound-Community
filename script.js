function sendMail() {
  var tempParams = {
    from_name: document.getElementById("fromName").nodeValue,
    to_name: document.getElementById("toName").nodeValue,
    message: document.getElementById("msg").nodeValue,
  };

  emailjs
    .send("service_qzqbnkr", "template_yz9hi99", tempParams)
    .then(function (res) {
      console.log("success", res.status);
    });
}
