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

// https://stackoverflow.com/a/28392348
function changeCss () {
    console.log(scrollY)
    this.scrollY < 2450 ? hideLogin() : console.log('nope');
}
