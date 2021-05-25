var register_button = document.getElementById('register');
var auth_button = document.getElementById('authorization');

register_button.addEventListener('click', show_register_window);
auth_button.addEventListener('click', show_auth_window);


function show_register_window(){
    var registr_window = document.getElementsByClassName('registr')[0];
    var auth_window = document.getElementsByClassName('auth')[0];
    auth_window.style.cssText = "display: none;";
    registr_window.style.cssText= 'display: flex';
}

function show_auth_window(){
    var registr_window = document.getElementsByClassName('registr')[0];
    var auth_window = document.getElementsByClassName('auth')[0];
    auth_window.style.cssText = "display: flex;";
    registr_window.style.cssText= 'display: none';
}