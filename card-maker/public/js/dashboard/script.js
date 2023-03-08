const createCardButton = document.querySelector(".createCardButton");
const createCardContainer = document.querySelector(".createCardContainer");
const showCardsButton = document.querySelector(".showCardsButton");
const editCardsButton = document.querySelector(".editCardsButton");
console.log(editCardsButton);

createCardButton.addEventListener("click", function () {
    document.querySelector(".createCardContainer").classList.toggle("active");
});

showCardsButton.addEventListener("click", function () {
    document.querySelector(".cardDisplayer").classList.toggle("active");
});

editCardsButton.addEventListener("click", function () {
    document.querySelector(".editCardContainer").classList.toggle("active");
});
