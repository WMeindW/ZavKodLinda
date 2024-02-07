let isHidden = true;

function burgerClick() {
    let div = document.getElementById("drop");
    let text = document.getElementById("banner-text");
    if (isHidden) {
        div.style.display = "flex";
        text.style.display = "none";
        isHidden = false;
    } else {
        div.style.display = "none";
        text.style.display = "flex";
        isHidden = true;
    }
}