window.navbarMobile = function navbarMobile() {
    var nav = document.getElementById("navbarMobile");
    if (nav.className === "w-full hidden flex-grow lg:flex lg:items-center lg:w-auto") {
        nav.className = "w-full block flex-grow lg:flex lg:items-center lg:w-auto";
    } else {
        nav.className = "w-full hidden flex-grow lg:flex lg:items-center lg:w-auto";
    }
}

window.checkboxHighlight = function checkboxHighlight(checkbox) {
    var checkboxDiv = document.getElementById(checkbox).parentElement;
    if (checkboxDiv.className === "flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white") {
        checkboxDiv.className = "flex opacity-95 border rounded border-green-400 hover:bg-white hover:bg-opacity-20 w-14 items-center text-green-400";
    } else {
        checkboxDiv.className = "flex opacity-95 border rounded border-white hover:bg-white hover:bg-opacity-20 w-14 items-center text-white";
    }
}

window.toggleDark = function toggleDark() {
    var html = document.documentElement;
    if (html.className === "") {
        html.className = "dark";
    } else {
        html.className = "";
    }
}