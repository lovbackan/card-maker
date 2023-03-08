const createCardButton = document.querySelector(".createCardButton");
const createCardContainer = document.querySelector(".createCardContainer");
const showCardsButton = document.querySelector(".showCardsButton");
const showCardsContainer = document.querySelector(".cardDisplayer");
const editCardsButton = document.querySelector(".editCardsButton");
const editCardsContainer = document.querySelector(".editCardContainer");
const deleteCardButton = document.querySelector(".deleteCardButton");
const deleteCardContainer = document.querySelector(".deleteCardContainer");

createCardButton.addEventListener("click", function () {
    createCardContainer.classList.toggle("active");
    if (createCardContainer.classList.contains("active")) {
        createCardButton.style.backgroundColor = "green"; // set button color to green
    } else {
        createCardButton.style.backgroundColor = ""; // remove button color
    }
});

showCardsButton.addEventListener("click", function () {
    showCardsContainer.classList.toggle("active");
    if (showCardsContainer.classList.contains("active")) {
        showCardsButton.style.backgroundColor = "green"; // set button color to green
    } else {
        showCardsButton.style.backgroundColor = ""; // remove button color
    }
});

editCardsButton.addEventListener("click", function () {
    editCardsContainer.classList.toggle("active");
    if (editCardsContainer.classList.contains("active")) {
        editCardsButton.style.backgroundColor = "green"; // set button color to green
    } else {
        editCardsButton.style.backgroundColor = ""; // remove button color
    }
});

deleteCardButton.addEventListener("click", function () {
    deleteCardContainer.classList.toggle("active");
    if (deleteCardContainer.classList.contains("active")) {
        deleteCardButton.style.backgroundColor = "green"; // set button color to green
    } else {
        deleteCardButton.style.backgroundColor = ""; // remove button color
    }
});

const cardSelector = document.querySelector("#cardSelector");
const editCategory = document.querySelector("#editCategory");
const editTitle = document.querySelector("#editTitle");
const editBody = document.querySelector("#editTextBody");

cardSelector.addEventListener("change", function () {
    let selectedOption = cardSelector.options[cardSelector.selectedIndex].value;
    // Call your function with the selected option
    if (selectedOption.includes(" ")) {
        selectedOption = selectedOption.replace(/ /g, "_");
    }

    fillForm(selectedOption);
    console.log(selectedOption);
    console.log(editCategory);
});

function fillForm(selectedOption) {
    const selectedOptionContainer = document.querySelector(
        "#" + selectedOption
    );
    console.log(selectedOptionContainer);
    if (selectedOptionContainer) {
        // Get the title, category, and body from the selected card container
        const title = selectedOptionContainer
            .querySelector(".title h2")
            .textContent.trim();
        const category = selectedOptionContainer
            .querySelector(".category h3")
            .textContent.trim();
        const body = selectedOptionContainer
            .querySelector(".textBody p")
            .textContent.trim();
        console.log(category);

        // Set the form field values to the values from the selected card
        editCategory.value = category;
        editTitle.value = title;
        editBody.value = body;
    }
}
