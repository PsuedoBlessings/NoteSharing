

//settings 
var SettingsMenu = document.querySelector(".settings-menu");


//darkmode 
var DarkButton = document.getElementbyId("dark-btn");


function SettingsMenuToggle() {
    SettingsMenu.classList.toggle("settings-menu-height");
}
DarkButton.onclick = function () {

    DarkButton.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");

    if (localStorage.getItem("theme") == "light") {
        localStorage.setItem("theme", "dark");
    }
    else {
        localStorage.setItem("theme", "light");
    }
    
}


if (localStorage.getItem("theme") == "light") {
    DarkButton.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
}
else if (localStorage.getItem("theme") == "dark") {
    DarkButton.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
}
else {
    localStorage.setItem("theme", "light");
}

// like function
function increaseLike()
{
    var curLikes = document.getElementById('number');
    var value = curLikes.innerHTML;

    ++value;

    console.log(value);
    document.getElementById('number').innerHTML = value;
    
}



