// Flipping cards (jQuery)

$(document).ready(function() {
    $(".card").each(function() {
        $(this).flip();
    });
});

//Javascript

window.onload = function() {
    var dropdownButton = document.querySelector(".dropbutton");
    var SourcesDD = document.getElementById("SourcesDropdown");
    var moreInfoButton = document.querySelectorAll(".moreinfo-button");
    var carInfoModal = document.querySelectorAll(".carinfo-modal");
    var wrapper = document.getElementById("wrapper");
    
    function openDropdown() {
        SourcesDD.classList.toggle("show");
        dropdownButton.classList.toggle("dropbutton-focus");
    }

    function closeDropdown() {
        if (SourcesDD.classList.contains("show")) {
            SourcesDD.classList.remove("show");
            dropdownButton.classList.remove("dropbutton-focus");
        }
    }

    function showMoreInfo(event) {
        var modal = document.getElementById(event.target.dataset.modal);
        modal.style.display = "block";
    }

    function closeMoreInfo(event) {
        var clickedElement = event.target.className;
        var modal = event.target.closest(".carinfo-modal");
        if (clickedElement === "carinfo-modal" || clickedElement === "close") {
            modal.style.display = "none";
        }
    }
    
    dropdownButton.addEventListener("click", openDropdown);
    wrapper.addEventListener("click", closeDropdown);
    
    for (var i = 0; i < moreInfoButton.length; i++) {
        moreInfoButton[i].addEventListener("click", showMoreInfo);
    }
    
    for (var i = 0; i < carInfoModal.length; i++) {
        carInfoModal[i].addEventListener("click", closeMoreInfo);
    }
}