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
        div.style.top = (notifyDiv.offsetHeight + 96) + "px";
        isHiddenNotify = false;
    } else {
        notifyDiv.style.display = "none";
        div.style.top = "96px";
        isHiddenNotify = true;
    }
}

let currentIndex = 0;
const productList = document.getElementById('product-list');
const products = document.querySelectorAll('.product');
const totalProducts = products.length;
const productWidth = products[0].offsetWidth;

function scrollItems(direction) {
    currentIndex = (currentIndex + direction + totalProducts) % totalProducts;
    const transformValue = -currentIndex * productWidth;
    productList.style.transform = `translateX(${transformValue}px)`;
}

