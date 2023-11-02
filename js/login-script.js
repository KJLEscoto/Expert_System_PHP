function openModalEmail() {
  document.getElementById('loginModalEmail').style.display = 'block';
  document.getElementById('loginOverlayEmail').style.display = 'block';

  const takeTest = document.querySelectorAll("#responsive-menu button");
  takeTest.forEach(item => {
    item.addEventListener("click", closeResponsiveMenu);
  });
}

function closeModalEmail() {
  document.getElementById('loginModalEmail').style.display = 'none';
  document.getElementById('loginOverlayEmail').style.display = 'none';
}

window.onload = function () {
  var urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has("error")) {
    openModalEmail();
  }
};