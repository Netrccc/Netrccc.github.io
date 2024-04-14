let check1 = document.getElementById("check1");
let check2 = document.getElementById("check2");
let proceed_btn = document.getElementById("proceed");
let amt_form = document.getElementById("amt-form");

proceed_btn.style.visibility = "hidden";

check1.addEventListener("click", () => {
  if (check1.checked == 1) {
    proceed_btn.style.visibility = "visible";
  } else {
    proceed_btn.style.visibility = "hidden";
  }
});

proceed_btn.addEventListener("click", () => {
  amt_form.submit();
});
