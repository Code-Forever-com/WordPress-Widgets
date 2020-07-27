const clouds = document.querySelectorAll(".wg-cloud-item");

for (let i = 0; i < clouds.length; i++) {
    const element = clouds[i];
    let count = element.getAttribute("data-count");
    element.style.fontSize = count*1.5 + 10 + "px";
}