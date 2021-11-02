// Author:    Neil Bryan Caoile
// StudentId: 817643697
var input = document.querySelectorAll("input");
var form = document.getElementById("form");
var errorElement = document.getElementById("errMsg");

form.addEventListener("submit", (e) => {
  let messages = [];
  if (input[4].value === "" || input[4].value == null || input[4].value <= 0) {
    messages.push("Number of coffee is required!");
  }
  if (input[5].value === "" || input[5].value == null || input[5].value <= 0) {
    messages.push("Number of sugar is required!");
  }
  if (input[6].value === "" || input[6].value == null || input[6].value <= 0) {
    messages.push("Number of cream is required!");
  }

  if (
    input[0].checked == false &&
    input[1].checked == false &&
    input[2].checked == false &&
    input[3].checked == false
  ) {
    messages.push("Please select a cup size!");
  }

  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerHTML = messages.join(", ");
  }
});
