<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>სოციალური სერვისები</title>
</head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="swiper-bundle.min.css" />
<link rel="stylesheet" href="swiper-bundle.min.css" />
<link rel="icon" href="img/Social Services Logo (middle).png" />
<link rel="stylesheet" href="bpg-nateli-master/css/bpg-nateli.min.css" />

<body id="contactBD">
    <!--===========================online-contact=============================-->
    <!-- 
        <div class="contact_corner_box">
            <div class="contact_corner_content active">
                <div class="contact_header">
                    <div class="contact_header_title_box">
                        <h3>contact us</h3>
                        <div>
                            <i class="fa fa-circle"></i>
                            <p>online</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-minus message_box_remove_btn"></i>
                </div>
                <div class="contact_chat_box">
                    <div class="message_box">
                   
            <h3>22:13</h3>
            <div>
              <p>hello my name is zzz</p>
            </div>
         
                    </div>
                </div>
                <div class="contact_input_box">
                    <input type="text" placeholder="type something" />
                    <i class="fa fa-paper-plane send_msg_btn"></i>
                </div>
            </div>
            <i class="fa fa-message chat_open_btn"></i>
        </div>
         -->
    <!--===========================navbar=============================-->
    <section class="navbar_container">
        <nav>
            <div class="navbar_box1" onclick="location.href='index.php'">
                <img src="img/Social Services Logo (middle).png" alt="" />
                <h1>სოციალური სერვისები</h1>
            </div>
            <div class="navbar_box2">
                <ul>
                    <li>
                        <a href="index.php">მთავარი</a>
                    </li>
                    <li>
                        <a href="services.php">სერვისები</a>
                    </li>
                    <li>
                        <a href="#">ჩვენ შესახებ</a>
                    </li>
                    <li>
                        <a href="contact.php">კონტაქტები</a>
                    </li>
                    <li>
                        <div class="navbar_search_box">
                            <input class="navbarsearch_input" type="text" placeholder="ძებნა..." />
                            <i class="fa fa-search"></i>
                        </div>
                    </li>
                    <div class="navbar_menu">
                        <span class="line1"></span>
                        <span class="line2"></span>
                        <span class="line3"></span>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="responsive_navbar_box">
            <ul>
                <li>
                    <a href="index.php">მთავარი</a>
                </li>
                <li>
                    <a href="services.php">სერვისები</a>
                </li>
                <li>
                    <a href="#">ჩვენ შესახებ</a>
                </li>
                <li>
                    <a href="#">კონტაქტები</a>
                </li>
            </ul>
        </div>
    </section>
    <br />

    <!--===========================contact=============================-->
    <section class="contact_container">
        <div class="contact_content">
            <div class="contact_left_column">
                <h1>კონტაქტი</h1>
                <form method="post">
                    <input type="name" placeholder="შეიყვანეთ სახელი" />
                    <input type="email" placeholder="mail მისამართი" />
                    <input type="text" placeholder="რა სახის მესიჯია" />

                    <textarea cols="30" rows="10" placeholder="დაწვრილებით...."></textarea>

                    <button>დაეთანხმე</button>
                </form>
            </div>
            <div class="contact_right_column">
                <div class="contact_right_column_inside">
                    <h1>დააგვიკავშირდი თუ:</h1>
                    <ul>
                        <li>
                            <p>აღმოაჩინე რაიმე ტექნიკური ხარვეზი</p>
                        </li>
                        <li>
                            <p>გსურს დაგვიტოვო უკუკავშირი</p>
                        </li>
                        <li>
                            <p>რაიმე ინფორაცია არ შეესაბამება სისწორეს</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--===========================footer=============================-->
    <section class="footer_container ftr">
        <div class="footer_content">
            <div class="footer_top_row">
                <ul>
                    <li>
                        <img src="img/Social Services Logo (middle).png" alt="#" />
                        <h3>სოციალური სერვისები</h3>
                    </li>
                    <li>
                        <a href="#">WEEBLY THEMES</a>
                        <a href="#">PRE-SALE FAQS</a>
                        <a href="#">SUBMIT A TICKET</a>
                    </li>
                    <li>
                        <a href="#">SERVICES</a>
                        <a href="#">THEME TWEAK</a>
                    </li>
                    <li>
                        <a href="#">SHOWCASE</a>
                        <a href="#">WIDGETKIT</a>
                        <a href="#">SUPPORT</a>
                    </li>
                    <li>
                        <a href="#">ABOUT US</a>
                        <a href="#">CONTACT US</a>
                        <a href="#">AFFILIATES</a>
                        <a href="#">RESOURCES</a>
                    </li>
                </ul>
            </div>
            <div class="footer_bottom_row">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-linkedin"></i>
            </div>
        </div>
    </section>
    <script src="app.js" type="module" defer></script>
</body>

</html>