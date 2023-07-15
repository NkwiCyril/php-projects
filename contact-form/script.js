const form = document.querySelector("form"),
  statusTxt = form.querySelector("#message");

form.onsubmit = (e) => {
  e.preventDefault(); //preventing form from submitting

  statusTxt.style.display = "inline-block";

  let xhr = new XMLHttpRequest(); // creating a new xml object

  xhr.open("POST", "message.php", true); // sending post request to message.php file
  xhr.onload = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // this means if there is no error
      let response = xhr.response; // storing xhr response in a variable
      console.log(response);
      statusTxt.innerHTML = response;
    }
  };

  let formData = new FormData(form); // creating the formData object to get form data. Used to send form data

  xhr.send(formData ); // sending form data
};
