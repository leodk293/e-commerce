"use strict";

var mainImage = document.querySelector(".models>img");
var models = document.querySelectorAll(".mdls img");
models[0].addEventListener("click", function () {
  mainImage.src = "images/gallery-1.jpg";
  var imgId = models[0].getAttribute("image-id");
});
models[1].addEventListener("click", function () {
  mainImage.src = "images/gallery-2.jpg";
  var imgId = models[1].getAttribute("image-id");
});
models[2].addEventListener("click", function () {
  mainImage.src = "images/gallery-3.jpg";
  var imgId = models[2].getAttribute("image-id");
});
models[3].addEventListener("click", function () {
  mainImage.src = "images/gallery-4.jpg";
  var imgId = models[3].getAttribute("image-id");
});
var buttonCart = document.querySelector(".add button");
var numberOutfit = document.querySelector(".add input");
buttonCart.addEventListener("click", printData());
var remove1 = document.querySelector(".features .remove");
var remove2 = document.querySelector(".features-2 .remove");
var ft1 = document.querySelector(".features");
var ft2 = document.querySelector(".features-2");
remove1.addEventListener("click", function () {
  ft1.style.display = "none";
});
remove2.addEventListener("click", function () {
  ft2.style.display = "none";
});
var arrayProducts = [];
var j = 0;
var quantity = document.querySelector(".qty");
var cost = document.querySelector(".cost");

function printData() {
  j++;
  var data = document.createElement("div");
  data.className = "features";
  arrayProducts.push(data);
  data.innerHTML = "\n           <div class=\"image-added\">\n                <img style=\"width: 100px;object-fit:cover;\" src=\"images/gallery-".concat(imgId, ".jpg\" alt=\"\">\n                <div class=\"text\">\n                    <p>Red Printed T-Shirt</p>\n                    <p>Price: $50</p>\n                    <p class=\"remove\">Remove</p>\n                </div>\n            </div>\n\n            <p style=\"position:relative; left:-70px\"  class=\"qty\">").concat(numberOutfit.value, "</p>\n            <p style=\"position:relative; left:-20px\" class=\"cost\">$").concat(numberOutfit.value * 50, "</p>\n    \n    ");
  quantity.textContent = "".concat(numberOutfit.value);
  cost.textContent = "$".concat(numberOutfit.value * 50);
}

var register = document.querySelector(".register");
var login = ocument.querySelector(".login");
login.addEventListener("click", function () {
  register.classList.add("move-to-left");
});
register.addEventListener("click", function () {
  register.classList.remove("move-to-left");
});