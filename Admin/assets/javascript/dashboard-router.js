const addNewGuest = document.querySelector(".menu li:nth-child(2)");
const dashboardAdmin = document.querySelector(".menu li:nth-child(1)");

const dashboardAdminSection = document.querySelector(".main-dashboard");
const addNewGuestsSection = document.querySelector(".formulir-rsvp");
const activeDashboardButton = dashboardAdmin.querySelector("a");
const activeAddNewGuestButton = addNewGuest.querySelector("a");

addNewGuest.addEventListener("click", function (event) {
  event.preventDefault();
  dashboardAdminSection.classList.add("d-none");
  addNewGuestsSection.classList.remove("d-none");

  activeDashboardButton.classList.remove("active");
  activeAddNewGuestButton.classList.add("active");
});

dashboardAdmin.addEventListener("click", function (event) {
  event.preventDefault();
  dashboardAdminSection.classList.remove("d-none");
  addNewGuestsSection.classList.add("d-none");

  activeDashboardButton.classList.add("active");
  activeAddNewGuestButton.classList.remove("active");
});
