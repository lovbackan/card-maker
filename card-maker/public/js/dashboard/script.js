const createCardButton = document.querySelector(".createCardButton");
const createCardContainer = document.querySelector(".createCardContainer");
console.log(createCardButton, createCardContainer);

createCardButton.addEventListener("click", function () {
    console.log("click");

    document.querySelector(".createCardContainer").classList.toggle("active");
});
