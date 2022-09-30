// Store references for body and pop-up button.

const popUpBody = document.querySelector("body");
const popUpBtn = document.querySelector(".pop-up-btn");
const popUpModal = document.querySelector(".pop-up-modal-wrapper");

const popUpModalCloseBtn = document.querySelector(".pop-up-icon-close");
popUpModalCloseBtn.addEventListener("click", popUpRemove);

// Display modal when clicked on button.

popUpBtn.addEventListener("click", popUpDisplay);

// Display modal function.

function popUpDisplay() {
  popUpModal.classList.add("pop-up-modal-display");
  popUpBody.classList.add("pop-up-overflow-hidden"); // Hide browser scroll when modal is shown.

  // Close modal when clicked on close icon.
}

// Remove modal function.

function popUpRemove() {
  popUpModal.classList.remove("pop-up-modal-display");
  popUpBody.classList.remove("pop-up-overflow-hidden");
}

/* Attributions

Font Awesome (https://fontawesome.com/) — Icon

*/
