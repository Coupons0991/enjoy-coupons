<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styl.css">
        <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
        <title>Charity</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

         <style>
             .rounded{
              float:right; 
             }
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
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="cha.php">charities</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="cha.php">charities</a></li>
                                            <li><a class="dropdown-item" href="#">Resala</a></li>
                                            <li><a class="dropdown-item" href="#">500 500</a></li>
                                            <li><a class="dropdown-item" href="#">57357</a></li>
                                            <li><a class="dropdown-item" href="#">Al-Orman</a></li>
                                        </ul>
                                      </li>
                                    <li><a href="cases.php" target="_blank">Cases</a></li>
                                    <li><a href="contact.php" target="_blank">Contact</a></li>
                                    
                                    <li><a href="logout.php">Logout</a></li>
                                   
                                </ul>
                            </nav>       
                    </div>
                                
                </header>

                <section id="zero">
                    <div class="fad"></div>
                    <div class="zero-text">
                        <h1>Give a hand</h1>
                        <p>Help poor and needy people by donating or locating cases</p><br><br>
                        Welcome, <?php echo $user_data['user_name'];?>
                    </div>
                </section>
            </div>

            
            <section id="how-it-works">
                <div class="container">
                    <h2>How It Works</h2>
                    <div class=" fel">
                        <div>
                            <span class="fas fa-home"></span>
                            <h4>Find a Charity</h4>
                            <p>First you should take a tour in the website to find your best destination or best charity to donate for.</p>
                        </div>    
                        <div>
                            <span class="fas fa-hand-holding-heart"></span>
                            <h4>Donation</h4>
                            <p>Second you should decide what you will give for people and how you will help, donation is not only money you can donate many other things.</p>
                        </div>    
                    </div>
                </div>
            </section>
<br><br>
            <div class="we">
                <div class="container">
                    <div class="first">
                        <div class="col">
                                <img src="https://img.freepik.com/free-photo/people-meeting-community-center_23-2149155312.jpg?t=st=1649256540~exp=1649257140~hmac=6a8e5ece20b9e1f5242b9cf0c4a5bd44c5d16daf31c780053f588b885c9955aa&w=1060" alt="#">
                                <div class="titles">
                                    <h3>We fight together</h3>
                                    <h5>We are humans</h5>
                                </div>
                                <div class="col-on">
                                    <p>we are all here to help needy.</p>
                                    <p>its not just a one person fight.</p>
                                </div>
                            </div>
                        </div>
                        <div class="second">
                            <div class="col">
                                <img src="https://img.freepik.com/free-photo/people-holding-rubber-heart_1150-18576.jpg?t=st=1649256445~exp=1649257045~hmac=d438b770d666216d67702646fb583008f529579471590a4190db169427679c9e&w=1060" alt="#">
                                <div class="titles">
                                    <h3>We care about others</h3>
                                    <h5>We are humans</h5>
                                </div>
                                <div class="col-on">
                                    <p>don't worry we are here to save you.</p>
                                    <p>your life is important we care about you, we are together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br><br>
        <section id="cases">
                <h2>Cases we serve</h2>
            <div class="container">
            <div class="card2">
                    <div class="n1">
                        <img src="https://img.freepik.com/free-photo/ready-back-school_1134-12.jpg?t=st=1649085122~exp=1649085722~hmac=d30c4d1bf0d8a9cfcb439748c648b869899c31731ae1ff2b917c6c75e94beed9&w=1060" alt="#">
                        <div class="sd">
                            <h4>Education</h4>
                            <p>Support chlidren to get educated and join schools.</p>
                        </div>
                    </div>         
                    <div class="n1">   
                        <img src="https://img.freepik.com/free-photo/beggars-sitting-bridge-with-cups-have-money_1150-22943.jpg?t=st=1648858318~exp=1648858918~hmac=20651a38f254be71ad40f19c0c7cf5289706b265d103f3a388aceeb6c5d0868e&w=1060" alt="#">
                        <div class="sd">
                            <h4>Homeless</h4>
                            <p>Trying to find shelters for homeless people in any age no matter if they are seniors or children</p>
                        </div>
                    </div>        
                    <div class="n1">
                        <img src="https://img.freepik.com/free-photo/young-woman-holding-elderly-woman-s-hand_1150-12496.jpg?w=1060&t=st=1648858667~exp=1648859267~hmac=d42f8140ecf9479ca5a4cb8edd0b734e00c8d4fd7fd975fb4bd797ee731c3963" alt="#">
                        <div class="sd">
                            <h4>Seniors</h4>
                            <p>Seniors life is important we cannot regret them, they are the exprince for the new generation.</p>
                        </div>
                    </div>
                    <div class="n1">   
                        <img src="https://img.freepik.com/free-photo/ketogenic-low-carbs-diet-food-selection-white-wall_155003-27728.jpg?t=st=1648860067~exp=1648860667~hmac=c0737ec809f3e7e05ed48cdc44afeece55c3d3f6ea3125ee87b1aadb4eb98303&w=1060" alt="#">
                        <div class="sd">
                            <h4>Food Support</h4>
                            <p>Support shelters and charities by food.</p>
                        </div> 
                        
                    </div>
                
                </div>
                <a href="cha.php"><button class="rounded" >Donate Now</button></a>    
            </div>        
        </section>
<br><br>
        <section class="slider">
            <div class="container">
              <h2>Destinations</h2>  
              <div class="container">
                 <section class="customer-logos slider">
                    <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Resala.png"></div>
                    <div class="slide"><img src="https://www.dar-alorman.com/imgs/ormanb-logo.png"></div>
                    <div class="slide"><img src="data:image/png;base64,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"></div>
                    <div class="slide"><img src="https://iconape.com/wp-content/png_logo_vector/500500.png"></div>
                    <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/ar/thumb/9/9a/%D9%85%D8%B3%D8%AA%D8%B4%D9%81%D9%89_57357.png/280px-%D9%85%D8%B3%D8%AA%D8%B4%D9%81%D9%89_57357.png"></div>
                    <div class="slide"><img src="https://alnas-hospital.com/storage/settings/February2020/QoQbputqzrVNxyGPXyp0.png"></div>
                    <div class="slide"><img src="https://gate.ahram.org.eg/Media/News/2020/1/31/19_2020-637160840720256479-25.png"></div>
                    <div class="slide"><img src="https://ahl-masr.ngo/wp-content/uploads/2021/02/cropped-cropped-ahl_masr_1.png"></div>
                    <div class="slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlgRZ_qLICsYQrJcynd5d4vOmUK9R3eIRieA&usqp=CAU"></div>
                 </section>
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

            $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

        </script>>
    </body>
</html>