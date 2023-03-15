const createCardButton = document.querySelector(".createCardButton");
const createCardContainer = document.querySelector(".createCardContainer");
const showCardsButton = document.querySelector(".showCardsButton");
const showCardsContainer = document.querySelector(".cardDisplayer");

const showCardsSection = document.querySelector(".cardDisplayerSection");
const editCardsButton = document.querySelector(".editCardsButton");
const editCardsContainer = document.querySelector(".editCardContainer");
const deleteCardButton = document.querySelector(".deleteCardButton");
const deleteCardContainer = document.querySelector(".deleteCardContainer");
const sortCategoryMenu = document.querySelector("#cardSort");

function toggleButton(button, container, section = null) {
    container.classList.toggle("active");
    if (container.classList.contains("active")) {
        button.style.backgroundColor = "green";
        if (section !== null) {
            section.classList.toggle("active");
        }
    } else {
        button.style.backgroundColor = "";
        if (section !== null) {
            section.classList.toggle("active");
        }
    }
}

createCardButton.addEventListener("click", function () {
    toggleButton(createCardButton, createCardContainer);

    if (deleteCardContainer.classList.contains("active")) {
        toggleButton(deleteCardButton, deleteCardContainer);
    } else if (editCardsContainer.classList.contains("active")) {
        toggleButton(editCardsButton, editCardsContainer);
    }
});

showCardsButton.addEventListener("click", function () {
    toggleButton(showCardsButton, showCardsContainer, showCardsSection);
});

editCardsButton.addEventListener("click", function () {
    toggleButton(editCardsButton, editCardsContainer);

    if (createCardContainer.classList.contains("active")) {
        toggleButton(createCardButton, createCardContainer);
    } else if (deleteCardContainer.classList.contains("active")) {
        toggleButton(deleteCardButton, deleteCardContainer);
    }
});

deleteCardButton.addEventListener("click", function () {
    toggleButton(deleteCardButton, deleteCardContainer);

    if (createCardContainer.classList.contains("active")) {
        toggleButton(createCardButton, createCardContainer);
    } else if (editCardsContainer.classList.contains("active")) {
        toggleButton(editCardsButton, editCardsContainer);
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
const cardContainer = document.querySelectorAll(".cardContainer");

const categoryContainers = {
    Character: document.querySelectorAll(".cardContainer.Character"),
    Country: document.querySelectorAll(".cardContainer.Country"),
    Technology: document.querySelectorAll(".cardContainer.Technology"),
};

console.log(document.querySelectorAll(".cardContainer.Technology"));

sortCategoryMenu.addEventListener("change", function () {
    const selectedCategoryValue = sortCategoryMenu.value;
    if (selectedCategoryValue === "All") {
        cardContainer.forEach((element) => {
            element.classList.remove("hide");
        });
    } else {
        Object.entries(categoryContainers).forEach(([category, container]) => {
            container.forEach((element) => {
                const shouldHide = category !== selectedCategoryValue;
                element.classList.toggle("hide", shouldHide);
            });
        });
    }
});
