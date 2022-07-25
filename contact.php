<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">  <link rel="stylesheet" href="css/styl.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="header">
        <header>
                
            <div class="flexcontainer">
            
                <a href="#" id="logo"><span>Egy</span>Funds</a>
                    <nav>
                        <ul id="nav-menu">
                            <li><a href="Index.php#" >Home</a></li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">charities</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Resala</a></li>
                                    <li><a class="dropdown-item" href="#">500 500</a></li>
                                    <li><a class="dropdown-item" href="#">57357</a></li>
                                    <li><a class="dropdown-item" href="#">Al-Orman</a></li>
                                </ul>
                              </li>
                            <li><a href="cases.php" target="_blank">Cases</a></li>
                            <li><a href="contact.php" class="active">Contact</a></li>
                            <li><a href="logout.php" >Logout</a></li>
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
    </div>  
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>

            <div class="flex">
                <div id="form-container">
                    <h3>Contact Form</h3>
                    <form>
                        <label for="name">Name</label>
                        <input type="text" id="name" />

                        <label for="email">Email</label>
                        <input type="text" id="email" />

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" />

                        <label for="message">Message</label>
                        <textarea id="message">Write your message here..</textarea>

                        <button class="rounded">Send Message</button>
                    </form>
                </div>

                <div id="address-container">
                    <label>Phone</label>
                    <a href="#">232-232-2323</a>

                    <label>Email Address</label>
                    <a href="#">ouremail@domain.com</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="flex container">
            <div class="footer-about">
                <h5>About Stated</h5>
                <p>it found to help poor, homeless and children who need to go to schools</p>
            </div>

            <div class="footer-quick-links">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
                <div class="row">
                    <h5>Contact with us</h5>
                    <div class="col1">
                        <ul class="list">
                            <li><i class="fa fa-phone"></i><a href="tel:+"> +02010800****</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:"> ourmail@mail.com</a></li>
                        </ul>
                    </div>

                    <div class="col2">
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
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