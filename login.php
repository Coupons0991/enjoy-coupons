<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
   $user_name= $_POST['user_name'];
   $password= $_POST['password'];
   if(!empty($user_name)&& !empty($password) && !is_numeric($user_name))
    {
  
        $query ="select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password']=== $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Please enter some valid information!" ;
    }
   else
   {
        echo "Please enter some valid information!" ;
   }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/styl.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

</style>
</head>
<body>
    <div id="header">
        <header>
        
            <div class="flexcontainer">
            
              <a href="#" id="logo"><span>Egy</span>Funds</a>
                    <nav>

                        <ul id="nav-menu">
                            <li><a href="#" class="active">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" >charities</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="file:///D:/Model0/charities.html"target="_blank">Resala</a></li>
                                  <li><a class="dropdown-item" href="#">500 500</a></li>
                                  <li><a class="dropdown-item" href="#">57357</a></li>
                                  <li><a class="dropdown-item" href="#">Al-Orman</a></li>
                                </ul>
                              </li>
                            <li><a href="file:///D:/Model0/cases.html#myCarousel" target="_blank">Cases</a></li>
                            <li><a href="file:///D:/Model0/contact.html" target="_blank">Contact</a></li>
                            <li><a href="signup.php" target="_blank">Signup</a></li>
                           
                        </ul>
                    </nav>       
            </div>
                        
        </header>

        <section id="zero">
            <div class="fad"></div>
            <div class="zero-text">
                <h1>Give a hand</h1>
                <p>Help poor and needy people by donating or locating cases</p>
            </div>
        </section>

    </div>
        
<h2 style="text-align: center;">Login Form</h2>

<form method = "post">
  </div>

  <div class="container">
    <label for="user_name"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user_name" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button class="btnlog" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <a href="signup.php"><button class="btnlog" type="button"> SignUp</button></a>
  </div>
 
</form>

   
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }

    $(function () {
            let headerElem = $('header');
            let logo = $('#logo');
            let navMenu = $('#nav-menu');
            let navToggle = $('#nav-toggle');

        

        $('#close-flyout').on('click', () => {
                navMenu.css('right', '-100%');
        });

        $(document).on('click', (e) => {
            let target = $(e.target);
            if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                navMenu.css('right', '-100%');
            }
        });

        $(document).scroll(() => {
            let scrollTop = $(document).scrollTop();

            if (scrollTop > 0) {
                navMenu.addClass('is-sticky');
                logo.css('color', '#000');
                headerElem.css('background', '#fff');
                navToggle.css('border-color', '#000');
                navToggle.find('.strip').css('background-color', '#000');
            } else {
                navMenu.removeClass('is-sticky');
                logo.css('color', '#fff');
                headerElem.css('background', 'transparent');
                navToggle.css('border-color', '#fff');
                navToggle.find('.strip').css('background-color', '#fff');
            }

            headerElem.css(scrollTop >= 200 ? {'padding': '0.2rem', 'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '.5rem 0', 'box-shadow': 'none' });
        });

        $(document).trigger('scroll');
        });
    </script>
    
     

</body>
</html>