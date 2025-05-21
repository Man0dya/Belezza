// Get the user icon element
var userIcon = document.getElementById("userIcon");

userIcon.addEventListener("click", function(event){

    event.preventDefault();

    var isLoggedIn = document.cookie.split('; ').find(row => row.startsWith('user_logged_in'));

    if (isLoggedIn) {
        window.location.href = '/fashion%20Store/account_details.php';
    } else {
        window.location.href = '/fashion%20Store/login.php';
    }
});

function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = '/fashion%20Store/assets/php/logout.php';
    }
}
