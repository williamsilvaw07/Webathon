
// phone navbar toggle 

const toggleButton = document.querySelector('.toggle-menu');
const navBar = document.querySelector('.nav-bar');
toggleButton.addEventListener('click', () => {
    navBar.classList.toggle('toggle');
});



//end



//fixed header



$(window).scroll(function () {
    if ($(window).scrollTop() > 1) {

        $("header").addClass('header_fixed')
        $(".navbar li").addClass("nav_fiexed")
        $(".logo ").addClass('logo_fixed')
        $(".toggle-menu").addClass('toogle_fixed')

    }
})

$(window).scroll(function () {
    if ($(window).scrollTop() < 1) {

        $("header").removeClass('header_fixed')
        $(".navbar li").removeClass("nav_fiexed")
        $(".logo ").removeClass('logo_fixed');
        $(".toggle-menu").removeClass('toogle_fixed')

    }
})


///end
