<!-- Static navbar -->
<nav class='navbar navbar-inverse navbar-static-top'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' style='margin-left: calc(50% - 90px);display:none;' href='../index.php'>PostersASAP.com</a>
    </div>
    <div id='navbar' class='navbar-collapse collapse'>
      <ul class='nav navbar-nav navbar-right'>
<?php
            if (isset($_SESSION['userid']))
            {
              echo "<li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Welcome " . $_SESSION['username'] . " <span class='caret'></span></a>
                <ul class='dropdown-menu'>
                  <li><a href='../users/profile.php'>My Profile</a></li>
                  <li><a href='../users/logout.php''>Log Out</a></li>
                </ul>
              </li>";
            }
            else
            {
            echo "<li><a href='../users/signin.php'>Sign In</a></li>";
            }
?>
          <li><a href='../checkout/cart.php'><span class='glyphicon glyphicon-shopping-cart' style='color:white'></span></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>
