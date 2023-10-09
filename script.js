const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
    console.log("open register")
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
    console.log("switch login")

});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
    console.log("open login")
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
    console.log("close all")
});




