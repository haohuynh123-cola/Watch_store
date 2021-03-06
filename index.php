<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHK</title>
    <link rel="shortcut icon" href="./Imgs/G-Shock_Casio-logo-940AFB8F09-seeklogo.com (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./Boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="./CSS/animate.css">
    <link rel="stylesheet" href="./lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./lib/owlcarousel/assets/owl.theme.default.min.css">
    <script src="./JS/jquery-3.5.0.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./JS/animation.js"></script>

</head>

<body>
    <!-- barnav -->
    <div class="container-fluid ">
        <div class="container">
            <nav class="navbar navbar-expand-lg  navbar-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="./Imgs/logo.png" alt="" width="100"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:1px solid #fff !important">
                    <span class="navbar-toggler-icon" ></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Trang Chủ </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="introduce.php">Giới Thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="showroom.php">Cửa hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="g-shock.php">G-Shock</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="baby-g.php">Baby-G</a>
                            </li>
                            <li class="nav-item nav-item-sale-off">
                                <a class="nav-link" href="sale.php">Sale Off</a>
                            </li>
                            <!-- <li class="nav-item dropdown ">
                                <a class="nav-link" href="#">
                                G-Shock
                                </a>
                                 <div class="dropdown-content">
                                    <a class="dropdown-item" href="aviator.html">Aviator</a>
                                    <a class="dropdown-item" href="#">Baby-G</a>
                                    <a class="dropdown-item" href="#">Edifice</a>
                                    <a class="dropdown-item" href="#">G-Shock</a>
                                    <a class="dropdown-item" href="#">G-Steel</a>
                                    <a class="dropdown-item" href="#">Gravity Master</a>
                                    <a class="dropdown-item" href="#">Mudmaster</a>
                                </div>
                            </li> -->
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" required type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- barnav -->
    <main>
        <!-- slide show -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Imgs/banner-01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Imgs/banner-02.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slide show -->
        <!-- service-->
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-4 service">
                    <img class="image-service" src="./Imgs/icon3.png" alt="">
                    <p class="mt-3">Phục vụ 24/7</p>
                </div>
                <div class="col-sm-4 service ">
                    <img class="image-service" src="./Imgs/icon.png" alt="">
                    <p class="mt-3 ">Giao hàng tận nơi</p>
                </div>
                <div class="col-sm-4 service">
                    <img class="image-service" src="./Imgs/icon2.png" alt="">
                    <p class="mt-4">Miễn phí vận chuyển</p>
                </div>
            </div>
        </div>

        <!-- service -->
        <!--sale -->
        <!-- đồng hồ đếm thồi gian -->
        <style type="text/css">
            #clockdiv h2 {
                font-family: 'Roboto';
                font-weight: 100;
                color: #111111;
                text-align: center;
                font-size: 40px;
                margin: 0 0 16px;
                text-transform: uppercase;
                font-weight: 600;
            }
            
            #clockdiv {
                font-family: sans-serif;
                color: #fff;
                background: rgba(255, 255, 255, 0.63);
                display: inline-block;
                font-weight: 100;
                text-align: center;
                font-size: 30px;
                margin: 20px auto;
                padding: 20px;
                width: 100%
            }
            
            #clockdiv>div {
                padding: 10px 35px;
                border-radius: 10px;
                background: #f31010;
                display: inline-block
            }
            
            #clockdiv div>span {
                padding: 0;
                border-radius: 3px;
                font-size: 3rem;
                display: inline-block
            }
            
            #clockdiv .smalltext {
                padding-top: 5px;
                font-size: 16px
            }
        </style>

        <div id="clockdiv">
            <h2>Đang Giảm giá</h2>
            <div>
                <span class="days"></span>
                <div class="smalltext">Ngày</div>
            </div>
            <div>
                <span class="hours"></span>
                <div class="smalltext">Giờ</div>
            </div>
            <div>
                <span class="minutes"></span>
                <div class="smalltext">Phút</div>
            </div>
            <div>
                <span class="seconds"></span>
                <div class="smalltext">Giây</div>
            </div>
        </div>

        <script type='text/javascript'>
            //<![CDATA[
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 300));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector('.days');
                var hoursSpan = clock.querySelector('.hours');
                var minutesSpan = clock.querySelector('.minutes');
                var secondsSpan = clock.querySelector('.seconds');

                function updateClock() {
                    var t = getTimeRemaining(endtime);

                    daysSpan.innerHTML = t.days;
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = new Date(Date.parse(new Date()) + 20 * 24 * 60 * 60 * 1000);
            initializeClock('clockdiv', deadline);
            //]]>
        </script>

        <!-- đồng hồ đếm thòi gian -->
        <div class="container mt-5">
            <div class="sale-title">
                <h3>Sản phẩm giảm giá</h3>
                <i class="far fa-clock"></i>
            </div>
            <div class="row mb-2">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham2.php"> <img src="./Imgs/dw-5600e-1vq.png" class="card-img-top hinh1" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"> DW-5600E-1V</h5>
                                <span class="price-sale">1,904,000Đ</span>
                                <span class="price">1,520,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham1.php"> <img src="./Imgs/gst-b100-1a.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">GST-B100-1A</h5>
                                <span class="price-sale">11,116,000Đ</span>
                                <span class="price">8,890,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham3.php"><img src="./Imgs/ga-120-1a.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">GA-120-1A</h5>
                                <span class="price-sale">3,549,000Đ</span>
                                <span class="price">2,849,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham4.php"><img src="./Imgs/ga-110-1b.png" class="card-img-top" alt="..."></a>

                            <div class="card-body">
                                <h5 class="card-title">GA-110-1B</h5>
                                <span class="price-sale">3,549,000Đ</span>
                                <span class="price">2,840,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham5.php"> <img src="./Imgs/ga-110gb-1a.png" class="card-img-top" alt="..."></a>

                            <div class="card-body">
                                <h5 class="card-title">GA-110GB-1A</h5>
                                <span class="price-sale">4,841,000Đ</span>
                                <span class="price">3,800,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham6.php"> <img src="./Imgs/ga-100-1a4.png" class="card-img-top" alt="..."></a>

                            <div class="card-body">
                                <h5 class="card-title">GA-100-1A4</h5>
                                <span class="price-sale">8,999,000Đ</span>
                                <span class="price">6,590,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham7.php"> <img src="./Imgs/ga-100-1a1.png" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">GA-100-1A1</h5>
                                <span class="price-sale">3,032,000Đ</span>
                                <span class="price">2,240,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card card-product">
                            <a href="./chitietsanphamsale/chitietsanpham8.php"><img src="./Imgs/ga-710gb-1a.png" class="card-img-top" alt="..."></a>

                            <div class="card-body">
                                <h5 class="card-title">GA-710GB-1A</h5>
                                <span class="price-sale">4,771,000Đ</span>
                                <span class="price">3,820,000Đ</span>
                                <div class="sale">
                                    -20%
                                </div>
                                <div class="heart">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="giohang">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
            });
        </script>
        <!-- sale -->
        <!-- hot product -->
        <div class="container-fluid">
            <div class="container mt-5">
                <div class="hot-product-title">
                    <h3>Sản phẩm nổi bật</h3>
                    <i class="far fa-clock"></i>
                </div>
                <div class="row mb-2">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot1.php"><img src="./ings-product-hot/ga-100-1a2.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-100-1A2</h5>
                                    <span class="price">3,032,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot2.php"><img src="./ings-product-hot/ga-2100-1a1.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-2100-1A1</h5>
                                    <span class="price">3,290,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot3.php"> <img src="./ings-product-hot/ga-1000-1b.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-1000-1B</h5>
                                    <span class="price">6,220,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot4.php"> <img src="./ings-product-hot/gas-100g-1a.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GAS-100G-1A</h5>
                                    <span class="price">3,890,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot5.php"><img src="./ings-product-hot/ga-700-7a.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-1100-2BDR</h5>
                                    <span class="price">2,560,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot6.php"><img src="./ings-product-hot/ga-100cb-1a.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-100CB-1A</h5>
                                    <span class="price">3,310,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot7.php"> <img src="./ings-product-hot/ga-110frg-7a.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GA-110FRG-7A</h5>
                                    <span class="price">4,080,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card card-product">
                                <a href="./sanphamhot/sanphamhot8.php"> <img src="./ings-product-hot/gst-b100tfb-1a.png" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title">GST-B100TFB-1A</h5>
                                    <span class="price">19,080,000Đ</span>
                                    <div class="heart">
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="giohang">
                                        <i class="fas fa-cart-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- hot product -->
        <!-- news , evens -->
        <div class="container mt-5">
            <div class="new-even-title">
                <h3>Tin tức sự kiện</h3>
                <i class="far fa-clock"></i>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-new-even mb-2">
                        <img src="./Imgs/banner-01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Duis luctus elit nisi, et ecursus magna pellentsque non.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus, massa non viverra consequat, tellus ligula scelerisque nisi, at viverra erat risus ut orci. Morbi odio lacus, pellentesque ut tincidunt ...</p>
                            Xem thêm <i class="fas fa-caret-right"></i>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-new-even card-new-even2 mb-2">
                        <img src="./Imgs/banner-01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Duis luctus elit nisi, et ecursus magna pellentsque non.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus, massa non viverra consequat, tellus ligula scelerisque nisi, at viverra erat risus ut orci. Morbi odio lacus, pellentesque ut tincidunt ...</p>
                            Xem thêm <i class="fas fa-caret-right"></i>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-new-even  card-new-even3 mb-2">
                        <img src="./Imgs/banner-01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Duis luctus elit nisi, et ecursus magna pellentsque non.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus, massa non viverra consequat, tellus ligula scelerisque nisi, at viverra erat risus ut orci. Morbi odio lacus, pellentesque ut tincidunt ...</p>
                            Xem thêm <i class="fas fa-caret-right"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- news , evens -->
        <!-- feedback -->
        <div class="container mt-5">
            <div class="feedback-title">
                <h3>feedback từ khách hàng</h3>
                <i class="far fa-clock"></i>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-feedback mb-2">
                        <img src="./Imgs/minhduong.jpg" width="50%" style="border-radius: 50%;">
                        <div class="card-body">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p class="card-text">Sản phẩm màu đen rất ngầu và cá tính, thích hợp với các bạn có cổ tay nhỏ, các tính năng giống như mô tả. </p>
                            <h5 class="card-title">Minh Đường / Sinh viên</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-feedback mb-2">
                        <img src="./Imgs/phu.jpg" width="50%" style="border-radius: 50%;">
                        <div class="card-body">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p class="card-text">Sản phẩm màu đen rất ngầu và cá tính, thích hợp với các bạn có cổ tay nhỏ, các tính năng giống như mô tả. </p>
                            <h5 class="card-title">Hào Phú / Sinh viên</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-feedback mb-2">
                        <img src="./Imgs/toan.jpg" width="50%" style="border-radius: 50%;">
                        <div class="card-body">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p class="card-text">Sản phẩm màu đen rất ngầu và cá tính, thích hợp với các bạn có cổ tay nhỏ, các tính năng giống như mô tả. </p>
                            <h5 class="card-title">Quốc Toản / Sinh viên</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feedback -->
    </main>
    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-3 mt-5">
                        <img src="./Imgs/logo.png" class="logo-footer" alt="" width="210px" height="65px">
                        <div class="icon">
                            <p><i class="fas fa-map-marker-alt mt-5"></i>288 Đường Nguyễn Văn Linh, Hưng Lợi, Ninh Kiều, Cần Thơ</p>
                            <p><i class="fas fa-phone-volume"></i>0356056593</p>
                            <p><i class="fas fa-envelope"></i>huynhkinhao@gmail.com</p>
                            <p><i class="fab fa-skype"></i>domenhutuep</p>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer">
                        <h3 class="title-menu mt-4">Menu</h3>
                        <div class="menu-footer mt-5">
                            <li> <a href="index.html"><i class="fas fa-caret-right"></i>Trang chủ</a></li>
                            <li> <a href="introduce.html"><i class="fas fa-caret-right"></i>Giới thiệu</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Tin tức</a></li>
                            <li> <a href="showroom.html"><i class="fas fa-caret-right"></i>Liện hệ</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Kiểm tra đơn hàng</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Đăng ký affilicate</a></li>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer2">
                        <h3 class="menu-product mt-4">Sản phẩm</h3>
                        <div class="menu-footer  mt-5">
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Aviator</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Baby-G</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Edifice</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>G-Shock</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>G-Steel</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Gravity Master</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Mudmaster</a></li>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer3">
                        <h3 class="dangky mt-4">Đăng ký</h3>
                        <p class="mt-5">Đăng ký để nhận được thông tin từ chúng tôi</p>
                        <form action="" method="post">
                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-paper-plane"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            </div>
                        </form>
                        <h4 class="connect mt-4">Kết nối với chúng tôi</h4>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class='lentop'>
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    <!-- footer -->
    <!-- -------------------------- -->

    <script src="./Boostrap/js/popper.min.js"></script>
    <script src="./Boostrap/js/bootstrap.js"></script>
</body>

</html>