function updateSections(event){

    event.preventDefault(); // stop browser refresh after submit

    var home = document.getElementById("home-textarea").value
    var about = document.getElementById("about-textarea").value
    var projects = document.getElementById("projects-textarea").value

    $.ajax({
        url: "../php/save-sections.php",
        data: {home : home, about : about, projects : projects},
        type: "post"
    });
}