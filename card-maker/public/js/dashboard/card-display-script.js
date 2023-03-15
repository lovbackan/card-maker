const slider = document.querySelector(".cardDisplayer");
let isDown = false;
let startX;
let scrolledLeft;

slider.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrolledLeft = slider.scrollLeft;
    slider.style.cursor = "grabbing";
});

slider.addEventListener("mouseleave", () => {
    isDown = false;
    slider.style.cursor = "";
});

slider.addEventListener("mouseup", () => {
    isDown = false;
    slider.style.cursor = "";
});

slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const move = x - startX;
    slider.scrollLeft = scrolledLeft - move;
});
