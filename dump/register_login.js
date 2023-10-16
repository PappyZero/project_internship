const registerBtn_link = document.querySelector(".registerBtn_link");
const loginBtn_link = document.querySelector(".loginBtn_link");
const wrapper = document.querySelector(".wrapper");

registerBtn_link.addEventListener("click", () => {
    wrapper.classList.toggle("active");
    wrapper.style.height= "800px";
})

loginBtn_link.addEventListener("click", () => {
    wrapper.classList.toggle("active");
    wrapper.style.height= "500px";
})