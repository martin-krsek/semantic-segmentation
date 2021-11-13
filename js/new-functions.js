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
function changeCss () { //TODO set scroll to dynapic value -> prevent bugs after editing page
    console.log(scrollY)
    this.scrollY < 2450 ? hideLogin() : console.log('nope');
}

$('#edit').click(function() {
    window.scrollBy(document.querySelector('#preview-part').offsetWidth * -1 - 20,0)}); //20 scrollbar

$('#preview').click(function() {
    window.scrollBy(document.querySelector('#editing-part').offsetWidth + 20,0) //20 scrollbar
});

console.log()
console.log(document.getElementById("home").style.height)


setTimeout(function(){
    document.getElementById("home-edit").style.height = document.querySelector('#home').clientHeight + "px"
}, 500);

document.getElementById("about-edit").style.height = document.querySelector('#about').clientHeight + "px"
document.getElementById("projects-edit").style.height = document.querySelector('#projects').clientHeight + "px"


// home
// about
// projects