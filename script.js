// function sendMail() {
//   var tempParams = {
//     from_name: document.getElementById("user_name").value,
//     email: document.getElementById("user_email").value,
//     message: document.getElementById("message").value,
//   };

//   emailjs
//     .send("service_qzqbnkr", "template_yz9hi99", tempParams)
//     .then(function (res) {
//       console.log("success", res.status);
//     });
// }

window.onload = function () {
  document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();
      // generate a five digit number for the contact_number variable
      this.contact_number.value = (Math.random() * 100000) | 0;
      // these IDs from the previous steps
      emailjs.sendForm("service_qzqbnkr", "template_yz9hi99", this).then(
        function () {
          console.log("SUCCESS!");
          alert("Thank you for your submission! We will be in touch.");
        },
        function (error) {
          console.log("FAILED...", error);
        }
      );
    });
};
