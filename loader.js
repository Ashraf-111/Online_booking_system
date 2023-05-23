window.addEventListener("load", function () {
  var loader = document.createElement("iframe");
  loader.style.display = "none";
  loader.src = "index.php";
  document.body.appendChild(loader);

  setTimeout(function () {
    window.location.href = "home.php";
  }, 3500);
});
