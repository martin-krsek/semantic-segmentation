$('#admin-login-link').click(function() {
    $('#admin-login').css({
        'visibility': 'visible',
        'display': 'block'
    });



    setTimeout(function(){
        window.addEventListener("scroll", changeCss , false);
    }, 500);
});

function hideLogin() {
    $('#admin-login').css({
        'visibility': 'hidden',
        'display': 'none'
    });
    window.removeEventListener("scroll", changeCss , false);
}

function changeCss () { //hide login section after scrolling out of section visibility
    let rect = document.getElementById('admin-login').getBoundingClientRect();
    let intViewportHeight = window.innerHeight;
    0 < rect.top - intViewportHeight ? hideLogin() : null;
}