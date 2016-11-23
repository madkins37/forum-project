<script>
var username = "<?php echo $_SESSION['username'] ?>";
var userMenu = document.getElementById("userMenu");

console.log(username);
if (username!="") {
  userMenu.innerHTML = 
      "<li class='dropdown'>" +
        "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>" + username + "<span class='caret'></span></a>" +
        "<ul class='dropdown-menu'>" +
          "<li><a href='#'>Profile</a></li>" +
          "<li><a href='#'>Settings</a></li>" +
          "<li role='separator' class='divider'></li>" +
          "<li><a href='<?php echo $baseUrl ?>user/logout'>Sign Out</a></li>" +
        "</ul>" +
      "</li>";
} else {
  userMenu.innerHTML = 
    "<li><a href='<?php echo $baseUrl ?>user/register'>Register</a></li>" +
    "<li><a href='<?php echo $baseUrl ?>user'>Sign In</a></li>";
}
</script>