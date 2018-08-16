<!DOCTYPE html>
<html class="no-js" prefix="ng: https://angularjs.org"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="fragment" content="!">
    <title>Redcarpet Matrimony</title>
    <meta name="description" content="Red Carpet Matrimony" />
    <meta name="keywords" content="Red Carpet Matrimony" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="icon" href="assets/images/icons/favicon_medium.png" type="image/png">
    <script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min7b30.css" media="screen" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style2dac.css?v=21" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />

    <style>
        #slideshow-wrapper {
            position: absolute;
            z-index: 1;
            top: 60px;
            left: 40px;
            margin: 50px auto 0;
            -webkit-perspective: 1000px;
            -moz-perspective: 1000px;
            -o-perspective: 1000px;
            perspective: 1000px;
        }

        #slideshow {
            position: absolute;
            list-style-type: none;
            padding: 0px 16px;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        #slideshow > * {
            display: block;
            position: absolute;
        }

        #slideshow img {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 0 5px #ccc;
            width: 100px;
            height: 100px;
        }

        #slideshow .front {
            -webkit-transform: translateZ(50px);
            -moz-transform: translateZ( 50px);
            -o-transform: translateZ( 50px);
            transform: translateZ( 50px);
            opacity: 1;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

        #slideshow .right {
            -webkit-transform: rotateY( 90deg) translateZ( 100px);
            -moz-transform: rotateY( 90deg) translateZ( 100px);
            -o-transform: rotateY( 90deg) translateZ( 100px);
            transform: rotateY( 90deg) translateZ( 100px);
            opacity: 0;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

        #slideshow .left {
            -webkit-transform: rotateY( -90deg) translateZ( 10px) translateX(-360px);
            -moz-transform: rotateY( -90deg) translateZ( 10px) translateX(-360px);
            -o-transform: rotateY( -90deg) translateZ( 10px) translateX(-360px);
            transform: rotateY( -90deg) translateZ( 10px) translateX(-360px);
            opacity: 0;
            -webkit-transition: -webkit-transform 1s, opacity 1s;
            -moz-transition: -moz-transform 1s, opacity 1s;
            -o-transition: -o-transform 1s, opacity 1s;
            transition: transform 1s, opacity 1s;
        }

        @media (max-width:767px) {
            #slideshow-wrapper {
                display: block;
            }
            #slideshow-wrapper {
                position: absolute;
                z-index: 1;
                top: 10px;
                left: 0px;
                margin: 70px auto 0;
                -webkit-perspective: 1000px;
                -moz-perspective: 1000px;
                -o-perspective: 1000px;
                perspective: 1000px;
            }
            #slideshow img {
                width: 70px;
                height: 70px;
            }
        }
    </style>

    <style>
        #shadow {
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: #585858;
            filter: alpha(opacity=70);
            -moz-opacity: 0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 6000;
            display: none;
        }

        #dvLoading {
            background: #F7F6F6 url() no-repeat center center;
            height: 60px;
            width: 200px;
            position: fixed;
            z-index: 1000000;
            left: 50%;
            top: 27%;
            margin: -25px 0 0 -25px;
            border-radius: 8px;
            display: none;
            font-size: 15px;
        }

        #tabs {
            margin: 0;
            overflow: hidden;
            padding: 0;
            position: relative;
            top: 1px;
            z-index: 1;
            border-bottom: 1px solid #ccc;
        }

        #tabs li {
            display: block;
            float: left;
            list-style: outside none none;
            margin: 0 10px 0 0;
            padding: 0;
        }

        #tabs li a.current {
            background: #fff;
            border-bottom: 1px solid #fff;
            color: #db670b;
            font-family: "existencelight";
            font-size: 18px;
            outline: 0 none;
        }

        #tabs li a {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #f37c20 #f37c20 -moz-use-text-color;
            border-image: none;
            border-radius: 7px 7px 0 0;
            border-style: solid solid none;
            border-width: 1px 1px 0;
            color: #666666;
            display: block;
            font-family: "existencelight";
            font-size: 18px;
            outline: 0 none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
        }

        .show-left {
            left: 20%;
            float: left;
        }

        .show-right {
            float: left;
            left: 75%;
        }

        .topshow {
            width: 100%;
        }

        .checkbox ul {
            padding-left: 0px;
        }

        .checkbox ul li {
            padding-bottom: 5px;
        }

        @media (min-width: 300px) and (max-width: 420px) {
            .discover-grid h1 {
                font-size: 12px !important;
            }
        }

        @media (min-width: 420px) and (max-width: 650px) {
            .discover-grid h1 {
                font-size: 22px !important;
            }
        }

        td {
            padding-top: 10px;
            font-size: 13px;
            font-weight: 400;
            color: #fff;
            text-align: left;
        }

        input {
            border: .5px solid gray;
        }

        .well {
            background-color: #20bf42ba;
        }
    </style>

    <script type="text/javascript">
        function slideShow() {
            // '*' to work with any element, not only 'li's
            this.slides = $('#slideshow > *');
            this.count = this.slides.length - 1;
            this.initslide = 0;
            this.auto = null;

            this.selectTitles();
            this.ActivateAuto();
        };

        slideShow.prototype.selectTitles = function() {
            var that = this;
            // $('#slideshow-wrapper').append('<select></select>');
            /*  $('#slideshow > * > img').each(function(i) {
                  $('select').append('<option val="'+i+'">'+ $( this ).attr('alt') +'</option>');
                });
              $('select').change(this.onChange.bind(this));*/
        };

        slideShow.prototype.nextSlide = function() {
            this.initslide = (this.initslide++ >= this.count) ? 0 : this.initslide++;
            this.animateSlide();
            //console.log(this.initslide);
        };

        slideShow.prototype.animateSlide = function() {
            var currentSlide = this.initslide;
            var nextSlide = ((currentSlide + 1) > this.count) ? 0 : currentSlide + 1;
            var prevSlide = ((currentSlide - 1) < 0) ? this.count - 1 : currentSlide - 1;

            $('#slideshow > *').removeClass().not($('#slideshow > *').filter(function(index) {
                return index === currentSlide || index === nextSlide || index === prevSlide;
            })).addClass('left');
            $('#slideshow > *:eq(' + prevSlide + ')').addClass('left');
            $('#slideshow > *:eq(' + nextSlide + ')').addClass('right');
            $('#slideshow > *:eq(' + currentSlide + ')').addClass('front');

            //Animate Dropdown menu
            //$('select option').removeAttr("selected");
            // $('select option:eq('+currentSlide+')').prop('selected',true);
        };

        slideShow.prototype.ActivateAuto = function() {
            var that = this;
            this.animateSlide();
            this.auto = window.setInterval(function() {
                that.nextSlide();
            }, 4000);
        };
    </script>
</head>

<body>

    <!--Header Start-->
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div id="dismiss" class="dismiss"> <i class="fa fa-arrow-right"></i> </div>
        <ul class="list-unstyled CTAs">
            <li><a href="#" class="login dismiss" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</a></li>
            <li><a href="registration.html" class="register" id="HP_Banner_Register_CTA">Register Free!</a></li>
        </ul>
        <ul class="list-unstyled components">
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#" id="HP_Membership_CTA">Membership Plans</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <div class="side-feedback">
            <h3>Give Us Your Feedback</h3>
            <p> Need any help? Write to us at <a href="mailto:support@redcarpetmatrimony.com">support@redcarpetmatrimony.com</a>
                <br> Call :
                <a href="tel:+91-124-265 8600">+91-123-456 7890</a> (India)
            </p>
            <h3>Follow us</h3>
            <ul class="list-inline side-social">
                <li><a href="#!" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#!" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#!" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#!" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#!" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </nav>

    <div class="overlay"></div>
    <div class="header-v2 navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 logo">
                    <div class="navbar-brand">
                        <a href="index.html"><img src="assets/images/logo2.png" alt="" class="img-responsive" style="
    padding: 10px;
"></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-2 hidden-xs">
                    <a class="sidebar-icon btn btn-link" id="sidebarCollapse"> <i class="fa fa-bars"></i> </a>
                    <div class="header-btns">
                        <a href="registration.html">
                            <input type="submit" class="btn btn-primary " id="HP_Banner_Register_CTA" value=" Register Free!">
                        </a>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</button>
                    </div>
                </div>
                <a class="sidebar-icon btn btn-link mobile-ham" id="sidebarCollapse1"> <i class="fa fa-bars"></i> </a>
            </div>
        </div>
    </div>
    <!--Header End-->

    <div class="slider-bg">
        <!-- Banner start-->
        <div class="couple-hero-section-img" alt=""></div>

        <div class="find-section">
            <!-- Find search section-->
            <div class="container">
                <div class="row">
                    <div>
                        <h2 style="float: left;margin-top: -340px; margin-left: 700px; color: #fff">Perfect place for your perfect match!</h2>
                        <div class="col-xs-12 col-md-8 col-sm-6 box well" style="float: right; margin-top: -300px;;padding:25px 15px 30px 30px; width: 480px; border-radius: 5px;">
                            <form action="registration_1.html" method="get">

                                <h1 style="color: #ed3237">Register FREE</h1>
                                <table>
                                    <tr>
                                        <td>Profile created by</td>
                                        <td>
                                            <select name="selected" style="width: 210px;color: #000;">
                                                <option selected="selected" value="0">Select</option>
                                                <option value="1">Self</option>
                                                <option value="2">Parents</option>
                                                <option value="3">Sibling</option>
                                                <option value="4">Relative</option>
                                                <option value="5">Friend</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>
                                            <input type="text" name="" style="width: 210px;color: #000;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            <input type="radio" name="Gender">Male
                                            <input type="radio" name="Gender">Female
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Date of birth</td>
                                        <td>
                                            <select name="DD" style="color: #000">
                                                <option value="DD">DD</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name="MM" style="color: #000">
                                                <option value="MM">MM</option>
                                                <option value="JAN">JAN</option>
                                                <option value="FEB">FEB</option>
                                                <option value="MAR">MAR</option>
                                                <option value="APL">APL</option>
                                                <option value="MAY">MAY</option>
                                                <option value="JUN">JUN</option>
                                                <option value="JUL">JUL</option>
                                                <option value="AUG">AUG</option>
                                                <option value="SEP">SEP</option>
                                                <option value="OCT">OCT</option>
                                                <option value="NOV">NOV</option>
                                                <option value="DEC">DEC</option>
                                            </select>
                                            <select name="YYYY" style="color: #000">
                                                <option value="0" selected="">YYYY</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Marital status</td>
                                        <td>
                                            <input type="radio" name="status">Unmarried
                                            <input type="radio" name="status">Widow
                                            <br>
                                            <input type="radio" name="status">Divorced &nbsp;
                                            <input type="radio" name="status">Separated
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Denomination</td>
                                        <td>
                                            <select name="Select Denomination" style="width: 210px; color: #000;">
                                                <option value="0">Select Denomination</option>
                                                <option value="3">Adventist</option>
                                                <option value="4">Anglican / Episcopal</option>
                                                <option value="5">Apostolic</option>
                                                <option value="6">Assyrian</option>
                                                <option value="7">Assembly of God (AG)</option>
                                                <option value="8">Baptist</option>
                                                <option value="9">Born Again</option>
                                                <option value="10">Brethren</option>
                                                <option value="11">Calvinist</option>
                                                <option value="12">Catholic</option>
                                                <option value="13">Church of God</option>
                                                <option value="14">Church of South India (CSI)</option>
                                                <option value="45">Church of Christ</option>
                                                <option value="15">Congregational</option>
                                                <option value="16">Evangelical</option>
                                                <option value="17">Jacobite</option>
                                                <option value="18">Jehovah's Witnesses</option>
                                                <option value="20">Latin Catholic</option>
                                                <option value="21">Latter day saints</option>
                                                <option value="22">Lutheran</option>
                                                <option value="23">Malankara</option>
                                                <option value="24">Marthoma</option>
                                                <option value="25">Melkite</option>
                                                <option value="26">Mennonite</option>
                                                <option value="27">Methodist</option>
                                                <option value="28">Moravian</option>
                                                <option value="29">Orthodox</option>
                                                <option value="30">Pentecostal</option>
                                                <option value="31">Protestant</option>
                                                <option value="32">Presbyterian</option>
                                                <option value="33">Seventh-day Adventist</option>
                                                <option value="34">Syro Malabar</option>
                                                <option value="35">Syrian Catholic</option>
                                                <option value="5021">Church of North India</option>
                                                <option value="9997">Others</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Division</td>
                                        <td>
                                            <select name="Select Division" style="width: 210px; color: #000;">
                                                <option value="Select Division">Select Division</option>
                                                <option value="2">Adi Dravida</option>
                                                <option value="1007">Anglo Indian</option>
                                                <option value="1008">Cheraman</option>
                                                <option value="1009">Fernando</option>
                                                <option value="1010">Garo</option>
                                                <option value="58">Goan</option>
                                                <option value="1011">Khasi</option>
                                                <option value="506">Knanaya</option>
                                                <option value="1012">Kuki</option>
                                                <option value="109">Madiga</option>
                                                <option value="111">Mahar</option>
                                                <option value="116">Mala</option>
                                                <option value="125">Matang</option>
                                                <option value="1013">Mizo</option>
                                                <option value="1014">Mukkuvar</option>
                                                <option value="137">Nadar</option>
                                                <option value="1015">Naga</option>
                                                <option value="176">SC</option>
                                                <option value="214">ST</option>
                                                <option value="63">Intercaste</option>
                                                <option value="9997">Others</option>
                                                <option value="9998">Don't wish to specify</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Subcaste</td>
                                        <td>
                                            <input type="text" name="" style="width: 210px;color: #000;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mother tongue</td>
                                        <td>
                                            <select name="Select Mother Tongue" style="width: 210px;color: #000;font-weight: 400">
                                                <option value="0">Telugu</option>
                                                <option value="117">Angika</option>
                                                <option value="1">Arunachali</option>
                                                <option value="2">Assamese</option>
                                                <option value="3">Awadhi</option>
                                                <option value="116">Badaga</option>
                                                <option value="4">Bengali</option>
                                                <option value="5">Bhojpuri</option>
                                                <option value="6">Brij</option>
                                                <option value="7">Bihari</option>
                                                <option value="8">Chatisgarhi</option>
                                                <option value="9">Dogri</option>
                                                <option value="10">English</option>
                                                <option value="11">French</option>
                                                <option value="12">Garhwali</option>
                                                <option value="13">Garo</option>
                                                <option value="14">Gujarati</option>
                                                <option value="15">Haryanvi</option>
                                                <option value="16">Himachali/Pahari</option>
                                                <option value="17">Hindi</option>
                                                <option value="18">Kanauji</option>
                                                <option value="19">Kannada</option>
                                                <option value="20">Kashmiri</option>
                                                <option value="21">Khandesi</option>
                                                <option value="22">Khasi</option>
                                                <option value="23">Konkani</option>
                                                <option value="24">Koshali</option>
                                                <option value="25">Kumoani</option>
                                                <option value="26">Kutchi</option>
                                                <option value="27">Lepcha</option>
                                                <option value="28">Ladacki</option>
                                                <option value="29">Magahi</option>
                                                <option value="30">Maithili</option>
                                                <option value="31">Malayalam</option>
                                                <option value="32">Manipuri</option>
                                            </select>
                                    </tr>
                                    <tr>
                                        <td>Country living in</td>
                                        <td>
                                            <select name="Select Country living in" style="width: 210px; color: #000;">
                                                <option value="0">Select Country living in</option>
                                                <option value="98">India</option>
                                                <option value="222">United States of America</option>
                                                <option value="220">United Arab Emirates</option>
                                                <option value="129">Malaysia</option>
                                                <option value="221">United Kingdom</option>
                                                <option value="13">Australia</option>
                                                <option value="185">Saudi Arabia</option>
                                                <option value="39">Canada</option>
                                                <option value="189">Singapore</option>
                                                <option value="114">Kuwait</option>
                                                <option value="">-------------------------</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mobile No.</td>
                                        <td>
                                            <select style="width:53px;color: #000;">

                                                <option value="0">+91</option>
                                                <option value="98">+91 (India)</option>
                                                <option value="222">+1 (United States of America)</option>
                                                <option value="220">+971 (United Arab Emirates)</option>
                                                <option value="129">+60 (Malaysia)</option>
                                                <option value="221">+44 (United Kingdom)</option>
                                                <option value="13">+61 (Australia)</option>
                                                <option value="185">+966 (Saudi Arabia)</option>
                                                <option value="39">+1 (Canada)</option>
                                                <option value="189">+65 (Singapore)</option>
                                                <option value="114">+965 (Kuwait)</option>
                                                <option value="">-----------------------------</option>
                                                <option value="1">+93 (Afghanistan)</option>
                                                <option value="2">+355 (Albania)</option>
                                                <option value="3">+213 (Algeria)</option>
                                                <option value="4">+684 (American Samoa)</option>
                                                <option value="5">+376 (Andorra)</option>
                                                <option value="6">+244 (Angola)</option>
                                                <option value="7">+1264 (Anguilla)</option>
                                                <option value="8">+672 (Antarctica)</option>
                                                <option value="9">+1268 (Antigua and Barbuda)</option>
                                                <option value="10">+54 (Argentina)</option>
                                                <option value="11">+374 (Armenia)</option>
                                                <option value="12">+297 (Aruba)</option>
                                                <option value="13">+61 (Australia)</option>
                                                <option value="14">+43 (Austria)</option>
                                                <option value="15">+994 (Azerbaijan)</option>
                                                <option value="16">+1242 (Bahamas)</option>
                                                <option value="17">+973 (Bahrain)</option>
                                                <option value="18">+880 (Bangladesh)</option>
                                                <option value="19">+246 (Barbados)</option>
                                                <option value="20">+375 (Belarus)</option>
                                                <option value="21">+32 (Belgium)</option>
                                                <option value="22">+501 (Belize)</option>
                                                <option value="23">+229 (Benin)</option>
                                                <option value="24">+441 (Bermuda)</option>
                                                <option value="25">+975 (Bhutan)</option>
                                                <option value="26">+591 (Bolivia)</option>
                                                <option value="27">+387 (Bosnia and Herzegovina)</option>
                                                <option value="28">+267 (Botswana)</option>
                                                <option value="30">+55 (Brazil)</option>
                                                <option value="32">+284 (British Virgin Islands)</option>
                                                <option value="33">+673 (Brunei)</option>
                                                <option value="34">+359 (Bulgaria)</option>
                                                <option value="35">+226 (Burkina Faso)</option>
                                                <option value="36">+257 (Burundi)</option>
                                                <option value="37">+855 (Cambodia)</option>
                                                <option value="38">+237 (Cameroon)</option>
                                                <option value="40">+238 (Cape Verde)</option>
                                                <option value="41">+345 (Cayman Islands)</option>
                                                <option value="42">+236 (Central African Republic)</option>
                                                <option value="43">+235 (Chad)</option>
                                                <option value="44">+56 (Chile)</option>
                                                <option value="45">+86 (China)</option>
                                                <option value="46">+672 (Christmas Island)</option>
                                                <option value="47">+672 (Cocos Islands)</option>
                                                <option value="48">+57 (Colombia)</option>
                                                <option value="49">+269 (Comoros)</option>
                                                <option value="50">+242 (Congo)</option>
                                                <option value="51">+682 (Cook Islands)</option>
                                                <option value="52">+506 (Costa Rica)</option>
                                                <option value="53">+385 (Croatia)</option>
                                                <option value="54">+53 (Cuba)</option>
                                                <option value="55">+357 (Cyprus)</option>
                                                <option value="56">+420 (Czech Republic)</option>
                                                <option value="57">+45 (Denmark)</option>
                                                <option value="58">+253 (Djibouti)</option>
                                                <option value="59">+767 (Dominica)</option>
                                                <option value="60">+809 (Dominican Republic)</option>
                                                <option value="61">+670 (East Timor)</option>
                                                <option value="62">+593 (Ecuador)</option>
                                                <option value="63">+20 (Egypt)</option>
                                                <option value="64">+503 (El Salvador)</option>
                                                <option value="65">+240 (Equatorial Guinea)</option>
                                                <option value="66">+291 (Eritrea)</option>
                                                <option value="67">+372 (Estonia)</option>
                                                <option value="68">+251 (Ethiopia)</option>
                                                <option value="69">+500 (Falkland Islands)</option>
                                                <option value="70">+298 (Faroe Islands)</option>
                                                <option value="71">+679 (Fiji)</option>
                                                <option value="72">+358 (Finland)</option>
                                                <option value="73">+33 (France)</option>
                                                <option value="74">+594 (French Guiana)</option>
                                                <option value="75">+689 (French Polynesia)</option>
                                                <option value="77">+241 (Gabon)</option>
                                                <option value="78">+220 (Gambia)</option>
                                                <option value="79">+995 (Georgia)</option>
                                                <option value="80">+49 (Germany)</option>
                                                <option value="81">+223 (Ghana)</option>
                                                <option value="82">+350 (Gibraltar)</option>
                                                <option value="83">+30 (Greece)</option>
                                                <option value="84">+299 (Greenland)</option>
                                                <option value="85">+473 (Grenada)</option>
                                                <option value="86">+590 (Guadeloupe)</option>
                                                <option value="87">+671 (Guam)</option>
                                                <option value="88">+502 (Guatemala)</option>
                                                <option value="89">+224 (Guinea)</option>
                                                <option value="90">+245 (Guinea-Bissau)</option>
                                                <option value="91">+592 (Guyana)</option>
                                                <option value="92">+509 (Haiti)</option>
                                                <option value="94">+504 (Honduras)</option>
                                                <option value="95">+852 (Hong Kong)</option>
                                                <option value="96">+36 (Hungary)</option>
                                                <option value="97">+354 (Iceland)</option>
                                                <option value="98">+91 (India)</option>
                                                <option value="99">+62 (Indonesia)</option>
                                                <option value="100">+98 (Iran)</option>
                                                <option value="101">+964 (Iraq)</option>
                                                <option value="102">+353 (Ireland)</option>
                                                <option value="103">+972 (Israel)</option>
                                                <option value="104">+39 (Italy)</option>
                                                <option value="106">+876 (Jamaica)</option>
                                                <option value="107">+81 (Japan)</option>
                                                <option value="108">+962 (Jordan)</option>
                                                <option value="109">+7 (Kazakhstan)</option>
                                                <option value="110">+254 (Kenya)</option>
                                                <option value="111">+686 (Kiribati)</option>
                                                <option value="112">+82 (Korea, North)</option>
                                                <option value="113">+82 (Korea, South)</option>
                                                <option value="114">+965 (Kuwait)</option>
                                                <option value="115">+996 (Kyrgyzstan)</option>
                                                <option value="116">+856 (Laos)</option>
                                                <option value="117">+371 (Latvia)</option>
                                                <option value="118">+961 (Lebanon)</option>
                                                <option value="119">+266 (Lesotho)</option>
                                                <option value="120">+231 (Liberia)</option>
                                                <option value="121">+218 (Libya)</option>
                                                <option value="122">+423 (Liechtenstein)</option>
                                                <option value="123">+370 (Lithuania)</option>
                                                <option value="124">+352 (Luxembourg)</option>
                                                <option value="125">+853 (Macau)</option>
                                                <option value="127">+261 (Madagascar)</option>
                                                <option value="128">+265 (Malawi)</option>
                                                <option value="129">+60 (Malaysia)</option>
                                                <option value="130">+960 (Maldives)</option>
                                                <option value="131">+223 (Mali)</option>
                                                <option value="132">+356 (Malta)</option>
                                                <option value="133">+692 (Marshall Islands)</option>
                                                <option value="134">+596 (Martinique)</option>
                                                <option value="135">+222 (Mauritania)</option>
                                                <option value="136">+230 (Mauritius)</option>
                                                <option value="137">+269 (Mayotte)</option>
                                                <option value="138">+52 (Mexico)</option>
                                                <option value="139">+691 (Micronesia)</option>
                                                <option value="140">+373 (Moldova)</option>
                                                <option value="141">+377 (Monaco)</option>
                                                <option value="142">+976 (Mongolia)</option>
                                                <option value="143">+664 (Montserrat)</option>
                                                <option value="144">+212 (Morocco)</option>
                                                <option value="145">+258 (Mozambique)</option>
                                                <option value="146">+95 (Myanmar)</option>
                                                <option value="147">+264 (Namibia)</option>
                                                <option value="148">+674 (Nauru)</option>
                                                <option value="149">+977 (Nepal)</option>
                                                <option value="150">+31 (Netherlands)</option>
                                                <option value="151">+599 (Netherlands Antilles)</option>
                                                <option value="152">+687 (New Caledonia)</option>
                                                <option value="153">+64 (New Zealand)</option>
                                                <option value="154">+505 (Nicaragua)</option>
                                                <option value="155">+227 (Niger)</option>
                                                <option value="156">+234 (Nigeria)</option>
                                                <option value="157">+683 (Niue)</option>
                                                <option value="159">+1670 (Northern Mariana Islands)</option>
                                                <option value="160">+47 (Norway)</option>
                                                <option value="161">+968 (Oman)</option>
                                                <option value="162">+92 (Pakistan)</option>
                                                <option value="163">+680 (Palau)</option>
                                                <option value="164">+507 (Panama)</option>
                                                <option value="165">+675 (Papua New Guinea)</option>
                                                <option value="166">+595 (Paraguay)</option>
                                                <option value="167">+51 (Peru)</option>
                                                <option value="168">+63 (Philippines)</option>
                                                <option value="170">+48 (Poland)</option>
                                                <option value="171">+351 (Portugal)</option>
                                                <option value="172">+787 (Puerto Rico)</option>
                                                <option value="173">+974 (Qatar)</option>
                                                <option value="174">+262 (Reunion)</option>
                                                <option value="175">+40 (Romania)</option>
                                                <option value="176">+7 (Russia)</option>
                                                <option value="177">+250 (Rwanda)</option>
                                                <option value="179">+869 (Saint Kitts &amp; Nevis)</option>
                                                <option value="180">+758 (Saint Lucia)</option>
                                                <option value="181">+784 (Saint Vincent and The Grenadines)</option>
                                                <option value="182">+685 (Samoa)</option>
                                                <option value="183">+378 (San Marino)</option>
                                                <option value="184">+239 (Sao Tome and Principe)</option>
                                                <option value="185">+966 (Saudi Arabia)</option>
                                                <option value="186">+221 (Senegal)</option>
                                                <option value="187">+248 (Seychelles)</option>
                                                <option value="188">+232 (Sierra Leone)</option>
                                                <option value="189">+65 (Singapore)</option>
                                                <option value="190">+421 (Slovakia)</option>
                                                <option value="191">+386 (Slovenia)</option>
                                                <option value="192">+252 (Somalia)</option>
                                                <option value="193">+27 (South Africa)</option>
                                                <option value="194">+34 (Spain)</option>
                                                <option value="195">+94 (Sri Lanka)</option>
                                                <option value="198">+249 (Sudan)</option>
                                                <option value="199">+597 (Suriname)</option>
                                                <option value="201">+268 (Swaziland)</option>
                                                <option value="202">+46 (Sweden)</option>
                                                <option value="203">+41 (Switzerland)</option>
                                                <option value="204">+963 (Syria)</option>
                                                <option value="205">+886 (Taiwan)</option>
                                                <option value="206">+992 (Tajikistan)</option>
                                                <option value="207">+255 (Tanzania)</option>
                                                <option value="208">+66 (Thailand)</option>
                                                <option value="209">+228 (Togo)</option>
                                                <option value="210">+690 (Tokelau)</option>
                                                <option value="211">+676 (Tonga)</option>
                                                <option value="212">+868 (Trinidad and Tobago)</option>
                                                <option value="213">+216 (Tunisia)</option>
                                                <option value="214">+90 (Turkey)</option>
                                                <option value="215">+993 (Turkmenistan)</option>
                                                <option value="216">+649 (Turks and Caicos Islands)</option>
                                                <option value="217">+688 (Tuvalu)</option>
                                                <option value="218">+256 (Uganda)</option>
                                                <option value="219">+380 (Ukraine)</option>
                                                <option value="220">+971 (United Arab Emirates)</option>
                                                <option value="221">+44 (United Kingdom)</option>
                                                <option value="222">+1 (United States of America)</option>
                                                <option value="223">+598 (Uruguay)</option>
                                                <option value="224">+998 (Uzbekistan)</option>
                                                <option value="225">+678 (Vanuatu)</option>
                                                <option value="226">+379 (Vatican City)</option>
                                                <option value="227">+58 (Venezuela)</option>
                                                <option value="228">+84 (Vietnam)</option>
                                                <option value="230">+681 (Wallis and Futuna Islands)</option>
                                                <option value="232">+967 (Yemen)</option>
                                                <option value="233">+381 (Yugoslavia (Former))</option>
                                                <option value="235">+260 (Zambia)</option>
                                                <option value="236">+263 (Zimbabwe)</option>
                                                <option value="237">+243 (DR Congo)</option>
                                            </select>
                                            <input type="text" name="" style="width: 152px;color: #000;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Login Password</td>
                                        <td>
                                            <input type="Password" name="" style="width: 210px;color: #000;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="font-size: 11px;">
                                                By clicking Register Now, you agree to our <a target="_blank" href="#" class="link">Terms &amp; Conditions</a> and <a target="_blank" href="#" class="link">Privacy Policy</a></p>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <button type="submit" class="btn btn-primary " id="HP_Banner_Register_CTA">Register Now</button>
                                            </a>

                                        </td>
                                    </tr>

                                </table>
                            </form>

                        </div>
                    </div>
                </div>
                </td>

            </div>
            <!-- /.Find search section-->
        </div>

        <!-- Login Modal -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body"> <a href="javascript:void(0);" class="loginclose" data-dismiss="modal">&times;</a>
                        <div class="login-form-section">
                            <h2>Login to your account</h2>
                            <p>And begin a beautiful journey</p>
                            <form method="POST" name="loginfrm" id="loginfrm" action="#">
                                <div class="form-group mt-10">
                                    <div class="">
                                        <input type="email" name="emailid" id="loginEmail" class="common-input" placeholder="Email Address">
                                        <!--<small class="lv-alert alert-danger">Please enter a valid email address</small> --></div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="password" name="password" id="loginPass" class="common-input" placeholder="Password">
                                        <!--   <small class="lv-alert alert-danger">Wrong password. Try again.</small> --></div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" id="LoginBTN" class="btn btn-lg btn-primary btn-block ripplelink">LOGIN</button>
                                    </div>
                                </div>
                            </form>

                            <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button-->

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">User Rigistred Successfully</h4>
                                            <button type="button" style="margin-top:30px;" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="login-forgot-link">
                                <ul class="list-inline">
                                    <li><a href="#">Forgot Password ?</a></li>
                                    <li><a href="#">Resend Activation Email</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                            <div class="login-or-register"><span class="_43mh">OR</span></div>
                            <div class="login-register-section">
                                <p>Don't have an account?</p>
                                <div class="form-group">
                                    <div class="" align="center">
                                        <a href="#" id="HP_Banner_Register_CTA" class="btn btn-primary "> REGISTER FREE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo IURL ?>assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo IURL ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo IURL ?>assets/app/HomeApp7893.js"></script>
        <script src="<?php echo IURL ?>assets/js/angular.min.js"></script>
        <script src="<?php echo IURL ?>assets/js/angular-sanitize.js"></script>
        <script type="text/javascript">
            $('.download-mobile').click(function() {
                window.location.href = urlLink;
            });
            $('#Mobile_PopUp_Close, #Mobile_PopUp_Continue ').click(function() {
              var NORMALSERVER = "";
              $.ajax({
                  async: true,
                  type: "post",
                  url: NORMALSERVER + "/common_webservice_controller/download_app",
                  data: "&dwn_link= 1",
                  dataType: "json",
                  success: function(data) {

                  },
                  error: function(jqXHR, textStatus, errorThrown) {
                      console.log(textStatus, errorThrown);
                  }
              });
            });

            $(document).ready(function(ev) {
                $('#custom_carousel').on('slide.bs.carousel', function(evt) {
                    $('#custom_carousel .controls li.active').removeClass('active');
                    $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
                })
            });
            $(document).ready(function() {
                $('.tab-section').hide();
                $('#tabs a').click(function(event) {
                    $('#tabs a.current').removeClass('current');
                    $('.tab-section:visible').hide();
                    $(this.hash).show();
                    $(this).addClass('current');
                    event.preventDefault();
                }).filter(':first').click();

            });
        </script>

</body>

</html>
