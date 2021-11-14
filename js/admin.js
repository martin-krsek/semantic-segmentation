$('#edit').click(function() {
    document.querySelector('html').style.scrollBehavior = 'smooth'
    window.scrollBy(document.querySelector('#preview-part').offsetWidth * -1 - 20,0)
    document.querySelector('html').style.scrollBehavior = 'auto'
}); //20 scrollbar

$('#preview').click(function() {
    document.querySelector('html').style.scrollBehavior = 'smooth'
    window.scrollBy(document.querySelector('#editing-part').offsetWidth + 20,0) //20 scrollbar
    document.querySelector('html').style.scrollBehavior = 'auto'
});

console.log()
console.log(document.getElementById("home").style.height)




function updateHomePreview(){
    document.getElementById('home-preview').innerHTML = document.getElementById('home-textarea').value
    updateEditElementSizes()
}

function updateAboutPreview(){
    document.getElementById('about-preview').innerHTML = document.getElementById('about-textarea').value
    updateEditElementSizes()
}

function updateProjectsPreview(){
    document.getElementById('projects-preview').innerHTML = document.getElementById('projects-textarea').value
    updateEditElementSizes()
}

function updateEditElementSizes(){
    document.getElementById("home-edit").style.height = document.querySelector('#home').clientHeight + "px"
    document.getElementById("about-edit").style.height = document.querySelector('#about').clientHeight + "px"
    document.getElementById("projects-edit").style.height = document.querySelector('#projects').clientHeight + "px"
}

updateEditElementSizes()

// var xmlString = document.getElementById('home-textarea').innerHTML;
// var doc = new DOMParser().parseFromString(xmlString, "text/xml");
// console.log(doc.firstChild.innerHTML); // => <a href="#">Link...
// console.log(document.getElementById('home-preview').innerHTML = doc); // => Link