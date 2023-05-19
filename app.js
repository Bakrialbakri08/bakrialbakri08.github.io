let Navbar = document.querySelector('.navbar');
let Fabars = document.querySelector('.fa-bars');

Fabars.onclick = () => {
    Navbar.classList.toggle('active')
}

jQuery(function() {

    $(".imagestext .image").on("hover", function(){
        $(this).siblings().css("width", "10%");
    });

});