<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../Imgs/G-Shock_Casio-logo-940AFB8F09-seeklogo.com (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../Boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="../CSS/animate.css">
    <link rel="stylesheet" href="../lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../lib/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../JS/jquery-3.5.0.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../JS/animation.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        .contaienr-fuild {
            padding: 10px !important;
        }
    </style>

</head>

<body>
    <!-- barnav -->
    <div class="container-fluid  bg-dark pb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="/index.php"><img src="./Imgs/logo.png" alt="" width="100"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/index.php">Trang Chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/introduce.php">Giới Thiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="assm_weddongho/showroom.php" >Cửa hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/g-shock.php">G-Shock</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/baby-g.php">Baby-G</a>
                            </li>
                            <li class="nav-item nav-item-sale-off">
                                <a class="nav-link" href="/sale.html">Sale</a>
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
        <div class="contaier-fluid">
            <div class="row mt-3">
                <div class="col-sm-4">
                    <style>
                        /* Position the image container (needed to position the left and right arrows) */
                        
                        .container {
                            position: relative;
                        }
                        /* Hide the images by default */
                        
                        .mySlides {
                            display: none;
                        }
                        /* Add a pointer when hovering over the thumbnail images */
                        
                        .cursor {
                            cursor: pointer;
                        }
                        /* Next & previous buttons */
                        
                        .prev,
                        .next {
                            cursor: pointer;
                            position: absolute;
                            top: 40%;
                            width: auto;
                            padding: 16px;
                            margin-top: -50px;
                            color: white;
                            font-weight: bold;
                            font-size: 20px;
                            border-radius: 0 3px 3px 0;
                            user-select: none;
                            -webkit-user-select: none;
                        }
                        /* Position the "next button" to the right */
                        
                        .next {
                            right: 0;
                            border-radius: 3px 0 0 3px;
                        }
                        /* On hover, add a black background color with a little bit see-through */
                        /* Number text (1/3 etc) */
                        /* Container for image text */
                        
                        .caption-container {
                            text-align: center;
                            background-color: #222;
                            padding: 2px 16px;
                            color: white;
                        }
                        
                        .column {
                            float: left;
                            width: 16.66%;
                        }
                        /* Add a transparency effect for thumnbail images */
                        
                        .demo {
                            opacity: 0.6;
                        }
                        
                        .active,
                        .demo:hover {
                            opacity: 1;
                        }
                    </style>

                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 3</div>
                            <img src="../Imgs/sp1/1.png" style="width:100%" height="500px">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 3</div>
                            <img src="../Imgs/sp1/2.jpg" style="width:100%" height="500px">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">3 / 3</div>
                            <img src="../Imgs/sp1/6.jpg" style="width:100%" height="500px">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="../Imgs/sp1/1.png" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="../Imgs/sp1/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="../Imgs/sp1/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
                            </div>
                        </div>
                    </div>

                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("demo");
                            if (n > slides.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = slides.length
                            }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            captionText.innerHTML = dots[slideIndex - 1].alt;
                        }
                    </script>
                </div>
                <div class="col-sm-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sale.html">Sản phẩm</a></li>
                            <li class="breadcrumb-item active" aria-current="page">G-Shock</li>
                            <li class="breadcrumb-item active" aria-current="page">G-Steel</li>
                        </ol>
                    </nav>
                    <h2>Casio G-SHOCK GST-B100-1A</h2>
                    <span class="price">8,890,000Đ</span>
                    <span class="price-sale">11,116,000Đ</span>
                    <p>(Bạn có thể tiết kiệm được : <b>2,226,000Đ</b>)</p>
                    <p>Bộ sản phẩm chính hãng gồm:</p>
                    <p><i class="fas fa-check"></i>1 đồng hồ + 1 hộp giấy + 1 hộp thiếc (tùy sản phẩm).</p>
                    <p><i class="fas fa-check"></i>Thẻ bảo hành chính hãng Casio</p>
                    <p><i class="fas fa-check"></i>Tem vàng chống hãng giả CASIO sau nắp lưng đồng hồ.</p>
                    <p><i class="fas fa-check"></i>Sách hướng dẫn sử dụng.</p>
                    <p> <i class="fas fa-check"></i><b>Quà tắng: </b> Thẻ MRG thay pin miễn phí trọn đời cho sản phẩm trị giá 500.000đ</p>
                    <form action="" method="post">
                        <input type="number" min="1" required> <input type="submit" value="Mua">
                    </form>
                    <p>Gọi đặt mua: <b>0356056593</b> (Tư vấn miễn phí)</p>
                    <style>
                        .price {
                            font-size: 26px;
                        }
                        
                        .dathang .btn-outline-danger {
                            width: 100%;
                        }
                        
                        .dangky {
                            position: relative;
                            background: url(../Imgs/letter-bg.png) bottom center no-repeat;
                            padding: 6px 6px 7px;
                            margin-top: 10px;
                            background-size: 100% 68%;
                        }
                        
                        .dathang {
                            background-color: #eaeaea;
                            padding: 10px;
                            box-shadow: 0 0 10px gray;
                        }
                    </style>
                    <div class="dangky">
                        <form class="dathang">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" id="email" placeholder="Họ và tên" name="email" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="pswd" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Số điện thoại" name="pswd" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" id="email" placeholder="Ghi chú ...." name="email" required>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger ">Gửi</button>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h3>Mô tả</h3>
                </div>
                <div class="col-sm-8">
                    <h6>các tính năng</h6>
                    <p>Tuổi thọ pin 10 năm</p>
                    <p>・ Đồng hồ bấm giờ 1/100 giây</p>
                    <p>・ Bản đồ thế giới cho Giờ thế giới
                    </p>
                    <p>・ 5 chế độ báo</p>
                    <p>・ Đèn LED</p>
                    <p>・ Khả năng chống nước ở độ sâu 100 mét</p>
                    <p>・ Dây đeo bằng vải</p>
                    <h6>Đặc điểm ký thuật</h6>
                    <li>Vật liệu vỏ / vành bezel: Nhựa</li>
                    <li>Dây đeo bằng vải</li>
                    <li>Mặt kính nhựa</li>
                    <li>Khả năng chống nước ở độ sâu 100 mét</li>
                    <li>Đèn LED Thời lượng chiếu sáng có thể lựa chọn, phát sáng sau</li>
                    <li>Nhiều múi giờ (4 thành phố khác nhau)</li>
                    <li>Giờ thế giới 31 múi giờ (48 thành phố + giờ phối hợp quốc tế), bật/tắt tiết kiệm ánh sáng ban ngày, chuyển đổi thành phố Giờ chuẩn/Giờ thế giới</li>
                    <li>Đồng hồ bấm giờ 1/100 giây Khả năng đo: 23:59’59,99” Chế độ đo: Thời gian đã trôi qua, ngắt giờ, thời gian về đích thứ nhất-thứ hai</li>
                    <li>Đồng hồ đếm ngược Đơn vị đo: 1/10 giây Khoảng nhập: 1 giây đến 24 giờ (khoảng tăng 1 giây, khoảng tăng 1 phút và khoảng tăng 1 giờ)</li>
                    <li>5 chế độ báo hàng ngày hoặc một lần</li>
                    <li>Tín hiệu thời gian hàng giờ</li>
                    <li>Lịch hoàn toàn tự động (đến năm 2099)</li>
                    <li>Định dạng giờ 12/24</li>
                    <li>Bật/tắt âm nhấn nút</li>
                    <li>Giờ hiện hành thông thường: Giờ, phút, giây, chiều, tháng, ngày, thứ
                    </li>
                    <li>Độ chính xác: ±30 giây một tháng
                    </li>
                    <li>Tuổi thọ pin xấp xỉ: 10 năm với pin CR2025
                    </li>
                    <h6>Kích thước vỏ / Tổng trọng lượng</h6>
                    <li>Kích thước vỏ : 45×42,1×12,5mm</li>
                    <li>Tổng trọng lượng : 39g</li>

                </div>

            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-2">

                    <h6>THÔNG TIN BỔ SUNG</h6>
                </div>
                <div class="col-sm-10">
                    <table>
                        <tr>
                            <th>GIỜ HIỆN HÀNH
                            </th>
                            <td>Kỹ thuật số</td>
                        </tr>
                        <tr>
                            <th>LOẠI
                            </th>
                            <td>Nam</td>
                        </tr>
                        <tr>
                            <th>CHỨC NĂNG KHÁC

                            </th>
                            <td>
                                Bật/tắt âm nhấn nút, Chức năng đèn, Đồng hồ bấm giờ, Đồng hồ đếm ngược, Giờ thế giới</td>
                        </tr>
                        <tr>
                            <th>CHỐNG NƯỚC
                            </th>
                            <td>Khả năng chống nước ở độ sâu 100 mét

                            </td>
                        </tr>
                        <tr>
                            <th>DÂY ĐEO
                            </th>
                            <td>Dây đeo bằng vải

                            </td>
                        </tr>
                        <tr>
                            <th>NHÃN HIỆU
                            </th>
                            <td>STANDARD

                            </td>
                        </tr>
                        <tr>
                            <th>NGÀY RA MẮT
                            </th>
                            <td>201302

                            </td>
                        </tr>
                        <tr>
                            <th>MODULE
                            </th>
                            <td>3299

                            </td>
                        </tr>
                        <tr>
                            <th>MÀU SẮC
                            </th>
                            <td>Đen, Xanh lục

                            </td>
                        </tr>
                        <tr>
                            <th>NHÓM
                            </th>
                            <td>TUỔI THỌ PIN 10 NĂM

                            </td>
                        </tr>
                    </table>
                    <style>
                        th,
                        td {
                            padding: .5em;
                            text-align: left;
                            border-bottom: 1px solid #ececec;
                            line-height: 1.3;
                            font-size: .9em;
                        }
                    </style>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h6>Bảo hành</h6>

                </div>
                <div class="col-sm-10">
                    <p>Đồng hồ CASIO chính hãng thường được bảo hành 1 năm cho máy và 18 tháng cho pin. Đặc biệt dòng G-SHOCK và BABY-G được bảo hành lên tới 5 năm Mọi hư hỏng do hỏa hoạn, thiên tai hay sử dụng bất cẩn hoặc sử dụng sai hướng dẫn, bấm các
                        nút điều chỉnh khi đang ở dưới nước và những tổn hại trầy xước của dây, vỏ, mặt kính đều không được bảo hành. Mọi hư hỏng do sửa chữa không đúng cách từ những dịch vụ khác không phải do TTBH chính hãng cũng không được bảo hành.</p>
                    <p>Ngoài ra bạn có thể mang đồng hồ ra các đại lý đồng hồ Casio để nhận được sự tư vấn và bảo hành tại trung tâm bảo hành của Casio.</p>
                    <p>Quý khách vui lòng đọc kỹ điều khoản bảo hành tại đây: Chính sách bảo hành</p>
                    <div class="dangky">
                        <form class="dathang">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" id="email" placeholder="Họ và tên" name="email" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="pswd" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Số điện thoại" name="pswd" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" id="email" placeholder="Ghi chú ...." name="email" required>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-danger ">Gửi</button>
                                </div>
                            </div>
                            <br>

                        </form>
                    </div>
                </div>
            </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="container ">
                <div class="row">
                    <div class="col-sm-3 mt-5">
                        <img src="./Imgs/logo.png" class="logo-footer" alt="" width="210px" height="65px">
                        <div class="icon" style="opacity: 1;">
                            <p><i class="fas fa-map-marker-alt mt-5"></i>288 Đường Nguyễn Văn Linh, Hưng Lợi, Ninh Kiều, Cần Thơ</p>
                            <p><i class="fas fa-phone-volume"></i>0356056593</p>
                            <p><i class="fas fa-envelope"></i>huynhkinhao@gmail.com</p>
                            <p><i class="fab fa-skype"></i>domenhutuep</p>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer" style="opacity: 1;">
                        <h3 class="title-menu mt-4">Menu</h3>
                        <div class="menu-footer mt-5" style="opacity: 1;">
                            <li> <a href="index.html"><i class="fas fa-caret-right"></i>Trang chủ</a></li>
                            <li> <a href="introduce.html"><i class="fas fa-caret-right"></i>Giới thiệu</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Tin tức</a></li>
                            <li> <a href="showroom.html"><i class="fas fa-caret-right"></i>Liện hệ</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Kiểm tra đơn hàng</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Đăng ký affilicate</a></li>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer2" style="opacity: 1;">
                        <h3 class="menu-product mt-4">Sản phẩm</h3>
                        <div class="menu-footer  mt-5" style="opacity: 1;">
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Aviator</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Baby-G</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Edifice</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>G-Shock</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>G-Steel</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Gravity Master</a></li>
                            <li> <a href="#"><i class="fas fa-caret-right"></i>Mudmaster</a></li>
                        </div>
                    </div>
                    <div class="col-sm-3 mt-5 menu-footer3" style="opacity: 1;">
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
    <!-- -------------------------- -->

    <script src="./Boostrap/js/popper.min.js"></script>
    <script src="./Boostrap/js/bootstrap.js"></script>
</body>

</html>