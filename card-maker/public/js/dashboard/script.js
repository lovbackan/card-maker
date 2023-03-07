const createCardButton = document.querySelector(".createCardButton");
const createCardContainer = document.querySelector(".createCardContainer");
const showCardsButton = document.querySelector(".showCardsButton");
console.log(showCardsButton);

createCardButton.addEventListener("click", function () {
    console.log("click");

    document.querySelector(".createCardContainer").classList.toggle("active");
});

showCardsButton.addEventListener("click", function () {
    console.log("click");

    document.querySelector(".cardDisplayer").classList.toggle("active");
});
