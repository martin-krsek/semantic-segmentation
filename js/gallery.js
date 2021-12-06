// let length = 0;
// setTimeout(function () {
//     // if (document.getElementById("gallery1").getElementsByTagName("span").length > 0) {
//     //     document.getElementById("gallery1").getElementsByTagName("span")[0].style.display = "none";
//     // } else {
//     //     length = document.getElementById("gallery1").getElementsByTagName("div").length;
//     //     for (let i = 0; i < length; i++) {
//     //         if (document.getElementById("gallery1").getElementsByTagName("div")[i].className === "")
//     //             document.getElementById("gallery1").getElementsByTagName("div")[i].setAttribute("style", "display:none");
//     //     }
//     // }
//
//     if (document.getElementById("gallery2").getElementsByTagName("span").length > 0) {
//         document.getElementById("gallery2").getElementsByTagName("span")[0].style.display = "none";
//     } else {
//         length = document.getElementById("gallery2").getElementsByTagName("div").length;
//         for (let i = 0; i < length; i++) {
//             if (document.getElementById("gallery2").getElementsByTagName("div")[i].className === "")
//                 document.getElementById("gallery2").getElementsByTagName("div")[i].setAttribute("style", "display:none");
//         }
//     }
//
// }, 1500);
//
// var modal = document.getElementById("myModal");
//
// var btn = document.getElementById("img1");
// console.log(btn);
// btn.onmouseover = function() {
//     modal.style.display = "block";
// }
// btn.onmouseout = function() {
//     modal.style.display = "none";
// }

// $(document).ready(function(){
//     $( "#img1" ).hover(function() {
//         $('.modal').modal({
//             show: true
//         });
//     });
// });
//
// var modal = document.getElementById("myModal");
//
// var btn = document.getElementById("myBtn");
//
// var span = document.getElementsByClassName("close")[0];

// btn.onmouseover = function() {
//     modal.style.display = "block";
// }
// btn.onmouseout = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }


const listener = (element) => {
    element.setAttribute('hidden', true);

    element.removeEventListener('transitionend', listener);
};

function hide(element) {
    element.addEventListener('transitionend', listener(element));

    element.classList.remove('is-open');
}

const start = [40, 40, 40, 0];
const end = [255, 255, 255, 1];

function hover(id){
    let modal = document.getElementById("myModal");
    let classes_img_id = id.substr(4,1);
    console.log(classes_img_id)
    classes_img_id = classes_img_id + "classes.png";
    let btn = document.getElementById(id);


    btn.onmouseover = function() {
        modal.innerHTML="<img style='margin-left: 30%' src=\"images/eyes/"+classes_img_id+"\" height='500' width='500'/>";
        modal.style.visibility = "visible";
    };

    btn.onmouseout = function() {
        modal.style.visibility = "hidden";
        modal.innerHTML="";
    }

}