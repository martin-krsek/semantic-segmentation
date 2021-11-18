let length = 0;
setTimeout(function () {
    if (document.getElementById("gallery1").getElementsByTagName("span").length > 0) {
        document.getElementById("gallery1").getElementsByTagName("span")[0].style.display = "none";
    } else {
        length = document.getElementById("gallery1").getElementsByTagName("div").length;
        for (let i = 0; i < length; i++) {
            if (document.getElementById("gallery1").getElementsByTagName("div")[i].className === "")
                document.getElementById("gallery1").getElementsByTagName("div")[i].setAttribute("style", "display:none");
        }
    }

    if (document.getElementById("gallery2").getElementsByTagName("span").length > 0) {
        document.getElementById("gallery2").getElementsByTagName("span")[0].style.display = "none";
    } else {
        length = document.getElementById("gallery2").getElementsByTagName("div").length;
        for (let i = 0; i < length; i++) {
            if (document.getElementById("gallery2").getElementsByTagName("div")[i].className === "")
                document.getElementById("gallery2").getElementsByTagName("div")[i].setAttribute("style", "display:none");
        }
    }

}, 1500);