<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shapping D Night</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"><span>Shapping D</span>Night</a>
        <div id="menu-bars" class="fas fa-bars"></div>

        <nav class="nav navbar-nav">
            <a href="#home">home</a>
            <a href="#service">service</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#price">price</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<a href="includes/logout.inc.php" ><button class="btn btn-outline-dark">Sign Out</button></a>';
                } else {
                    echo '<a href="login.php" ><button class="btn btn-outline-dark">Login</button></a>';
                }
                ?>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Shapping D Night...!! <span> The event organizers </span></h3>
            <h2><span><b>Let's Celebrate with Friends & Family</b></span></h2>
            <a href="#" class="btn">contact us</a>
        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
                <!-- <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div> -->
            </div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>venue selection</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>invitation card</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-music"></i>
                <h3>entertainment</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3>photos and videos</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

            <div class="box">
                <i class="fas fa-birthday-cake"></i>
                <h3>custom food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
            </div>

        </div>

    </section>

    <!-- service section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>we will give a very special celebration for you</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam labore fugiat ut esse perferendis
                    perspiciatis provident dolores fuga in facilis culpa possimus, quia praesentium itaque, sapiente
                    quasi harum rem asperiores.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero expedita incidunt provident
                    quibusdam aut odit, numquam nesciunt similique nisi.</p>
                <a href="#" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/gallery-1.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery-2.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery-3.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery-4.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery-7.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/gallery-8.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- price section starts  -->

    <section class="price" id="price">

        <h1 class="heading"> our <span>price</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">RS.75000/-</h3>
                <ul>
                    <li> <i class="fas fa-check"></i> decorations and photo-booth </li>
                    <li> <i class="fas fa-check"></i> dance and DJ </li>
                    <li> <i class="fas fa-check"></i> food and fun </li>
                    <li> <i class="fas fa-check"></i> ambience & vibes </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for weddings</h3>
                <h3 class="amount">Rs.557659/-</h3>
                <ul>
                    <li> <i class="fas fa-check"></i> decorations and photo-booth </li>
                    <li> <i class="fas fa-check"></i> dance and DJ </li>
                    <li> <i class="fas fa-check"></i> food and fun </li>
                    <li> <i class="fas fa-check"></i> ambience & vibes </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">Rs.66,038.37/-</h3>
                <ul>
                    <li> <i class="fas fa-check"></i> decorations and photo-booth </li>
                    <li> <i class="fas fa-check"></i> dance and DJ </li>
                    <li> <i class="fas fa-check"></i> food and fun </li>
                    <li> <i class="fas fa-check"></i> ambience & vibes </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for others</h3>
                <h3 class="amount">Rs.87599/-</h3>
                <ul>
                    <li> <i class="fas fa-check"></i> decorations and photo-booth </li>
                    <li> <i class="fas fa-check"></i> dance and DJ </li>
                    <li> <i class="fas fa-check"></i> food and fun </li>
                    <li> <i class="fas fa-check"></i> ambience & vibes </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

        </div>


    </section>

    <!-- price section ends -->

    <!-- review section starts  -->

    <section class="reivew" id="review">

        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider swiper-container">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/face1.jpg" alt="">
                        <div class="user-info">
                            <h3>Michael Hensley</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Thank you so much for such a fun-filled event and for playing a big role in connecting our whole
                        company together while we are apart!.</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/face2.jpg" alt="">
                        <div class="user-info">
                            <h3>Jennifer Johnson</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>The best event planning company around! I was able to witness first hand their attention to
                        detail. The location, food, DJ, host, theme, photo booth and other vendors were amazing! The
                        crowd must have been at least 300 people and the overall consensus from the company was very
                        very impressed. </p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/face3.jpg" alt="">
                        <div class="user-info">
                            <h3>Natalie Robbinson</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p> I specifically like the way they transitioned from one segment/portion of the evening into the
                        next, keeping us engaged with entertainment and not having any hiccups.. highly recommend! The
                        flow of the event is paramount and Event Solutions ran the show smoothly and professionally from
                        beginning to end!..</p>
                </div>

                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/face4.jpg" alt="">
                        <div class="user-info">
                            <h3>john deo</h3>
                            <span>happy clients</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae
                        eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis
                        voluptatibus nihil.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branches</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> delhi </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> noida </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> kolkata </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> patna </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reivew </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 6299072384 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 9135698638 </a>
                <a href="#"> <i class="fas fa-envelope"></i> prachisinha@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> vatslakumari@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Jharkhand, india - 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>Team Shapping DNight</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->

    <!-- theme toggler  -->

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #FC427B;"></div>
        </div>

    </div>





















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>