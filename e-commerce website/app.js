const mainImage = document.querySelector(".models>img");
const models = document.querySelectorAll(".mdls img");

models[0].addEventListener("click", () => {
    mainImage.src = "images/gallery-1.jpg"
    const imgId = models[0].getAttribute("image-id")
})

models[1].addEventListener("click", () => {
    mainImage.src = "images/gallery-2.jpg"
    const imgId = models[1].getAttribute("image-id")
})

models[2].addEventListener("click", () => {
    mainImage.src = "images/gallery-3.jpg"
    const imgId = models[2].getAttribute("image-id")
})

models[3].addEventListener("click", () => {
    mainImage.src = "images/gallery-4.jpg"
    const imgId = models[3].getAttribute("image-id")
})

const buttonCart = document.querySelector(".add button");
const numberOutfit = document.querySelector(".add input");
buttonCart.addEventListener("click", printData());

const remove1 = document.querySelector(".features .remove") 
const remove2 = document.querySelector(".features-2 .remove") 
const ft1 = document.querySelector(".features")
const ft2 = document.querySelector(".features-2")  

remove1.addEventListener("click",()=>{
    ft1.style.display = "none";
})


remove2.addEventListener("click",()=>{
    ft2.style.display = "none";
})

const arrayProducts = [];
let j = 0;

const quantity = document.querySelector(".qty")
const cost = document.querySelector(".cost")
function printData() {
    j++;
    const data = document.createElement("div")
    data.className = "features";
    arrayProducts.push(data);
    data.innerHTML = `
           <div class="image-added">
                <img style="width: 100px;object-fit:cover;" src="images/gallery-${imgId}.jpg" alt="">
                <div class="text">
                    <p>Red Printed T-Shirt</p>
                    <p>Price: $50</p>
                    <p class="remove">Remove</p>
                </div>
            </div>

            <p style="position:relative; left:-70px"  class="qty">${numberOutfit.value}</p>
            <p style="position:relative; left:-20px" class="cost">$${numberOutfit.value*50}</p>
    
    `
    quantity.textContent = `${numberOutfit.value}`
    cost.textContent = `$${numberOutfit.value*50}`

}

const register = document.querySelector(".register")
const login = ocument.querySelector(".login")

login.addEventListener("click",()=>{
    register.classList.add("move-to-left");
})

register.addEventListener("click",()=>{
    register.classList.remove("move-to-left");
})


