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


$.ajax({
    url: "https://formsubmit.co/ajax/your@email.com",
    method: "POST",
    data: {
        name: "FormSubmit",
        message: "I'm from Devro LABS"
    },
    dataType: "json"
});