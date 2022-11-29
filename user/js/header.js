var navResponsive = document.querySelector(".reponsive__menu");
var activeBtn = document.querySelector(".active__menu__button");
var isActive = false;

activeBtn.onclick = function(){
    if(!isActive) {
        navResponsive.classList.add("active");
        isActive = !isActive;
    }
    else {
        navResponsive.classList.remove("active");
        isActive = !isActive;
    }
};

