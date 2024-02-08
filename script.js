let isHiddenBurger = true
let isHiddenNotify = true;

function burgerClick() {
    let div = document.getElementById("drop");
    if (isHiddenBurger) {
        div.style.display = "flex";
        isHiddenBurger = false;
    } else {
        div.style.display = "none";
        isHiddenBurger = true;
    }
}

function notifyClick() {
    let notifyDiv = document.getElementById("notify");
    let div = document.getElementById("drop");
    if (isHiddenNotify) {
        notifyDiv.style.display = "flex";
        div.style.top = (notifyDiv.offsetHeight + 48) + "px";
        isHiddenNotify = false;
    } else {
        notifyDiv.style.display = "none";
        div.style.top = "4em";
        isHiddenNotify = true;
    }
}
