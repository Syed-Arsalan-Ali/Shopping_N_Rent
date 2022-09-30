const popup = document.querySelector(".popup");
const popupMenu = document.querySelector(".popup-menu");

popup.addEventListener("click", (e) => {
  e.target.classList.toggle("popup-menu-visible");
});
