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
                                <a class="nav-link" href="/showroom.php">Cửa hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/g-shock.php">G-Shock</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/baby-g.php">Baby-G</a>
                            </li>
                            <li class="nav-item nav-item-sale-off">
                                <a class="nav-link" href="/sale.php">Sale</a>
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
                    <img id="myImg" src="../ings-product-hot/ga-110frg-7a.png" class="card-img-top" alt="...">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                    <style>
                        body {
                            font-family: Arial, Helvetica, sans-serif;
                        }
                        
                        #myImg {
                            border-radius: 5px;
                            cursor: pointer;
                            transition: 0.3s;
                        }
                        
                        #myImg:hover {
                            opacity: 0.7;
                        }
                        /* The Modal (background) */
                        
                        .modal {
                            display: none;
                            /* Hidden by default */
                            position: fixed;
                            /* Stay in place */
                            z-index: 1;
                            /* Sit on top */
                            padding-top: 100px;
                            /* Location of the box */
                            left: 0;
                            top: 0;
                            width: 100%;
                            /* Full width */
                            height: 100%;
                            /* Full height */
                            overflow: auto;
                            /* Enable scroll if needed */
                            background-color: rgb(0, 0, 0);
                            /* Fallback color */
                            background-color: rgba(0, 0, 0, 0.9);
                            /* Black w/ opacity */
                        }
                        /* Modal Content (image) */
                        
                        .modal-content {
                            margin: auto;
                            display: block;
                            width: 80%;
                            max-width: 700px;
                        }
                        /* Caption of Modal Image */
                        
                        #caption {
                            margin: auto;
                            display: block;
                            width: 80%;
                            max-width: 700px;
                            text-align: center;
                            color: #ccc;
                            padding: 10px 0;
                            height: 150px;
                        }
                        /* Add Animation */
                        
                        .modal-content,
                        #caption {
                            -webkit-animation-name: zoom;
                            -webkit-animation-duration: 0.6s;
                            animation-name: zoom;
                            animation-duration: 0.6s;
                        }
                        
                        @-webkit-keyframes zoom {
                            from {
                                -webkit-transform: scale(0)
                            }
                            to {
                                -webkit-transform: scale(1)
                            }
                        }
                        
                        @keyframes zoom {
                            from {
                                transform: scale(0)
                            }
                            to {
                                transform: scale(1)
                            }
                        }
                        /* The Close Button */
                        
                        .close {
                            position: absolute;
                            top: 10%;
                            right: 20%;
                            color: #f1f1f1;
                            font-size: 40px;
                            font-weight: bold;
                            transition: 0.3s;
                        }
                        
                        .close:hover,
                        .close:focus {
                            color: #bbb;
                            text-decoration: none;
                            cursor: pointer;
                        }
                        /* 100% Image Width on Smaller Screens */
                        
                        @media only screen and (max-width: 700px) {
                            .modal-content {
                                width: 100%;
                            }
                        }
                    </style>
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        img.onclick = function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                    </script>
                </div>
                <div class="col-sm-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="sale.html">Sản phẩm</a></li>
                            <li class="breadcrumb-item active" aria-current="page">G-Shock</li>
                            <li class="breadcrumb-item active" aria-current="page">Mặt số tiêu chuẩn</li>
                        </ol>
                    </nav>
                    <h2>Casio G-SHOCK GA-110FRG-7A</h2>
                    <span class="price">4,080,000Đ</span>
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
            <hr>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <h3>Mô tả</h3>
                </div>
                <div class="col-sm-10">
                    <h5>Video Clip Đồng hồ NAM Casio G-SHOCK GA-120-1A : ĐỒNG HỒ KIM-SỐ TIÊU CHUẨN</h5>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AEcEzHq12_U?start=13" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h6>Đặc điểm kỹ thuật</h6>
                    <p>・ Vật liệu vỏ / gờ: Nhựa</p>
                    <p>・ Dây đeo bằng nhựa</p>
                    <p>・ Mặt kính khoáng</p>
                    <p>・ Chống va đập</p>
                    <p>・ Khả năng chống nước ở độ sâu 200 mét</p>
                    <p>・ Đèn LED Công tắc đèn tự động, thời lượng chiếu sáng có thể lựa chọn, phát sáng sau</p>
                    <p>・ Giờ thế giới 29 múi giờ (48 thành phố + giờ phối hợp quốc tế), hiển thị mã thành phố, bật/tắt tiết kiệm ánh sáng ban ngày, chuyển đổi Giờ địa phương/Giờ thế giới</p>
                    <p>・ Đồng hồ bấm giờ 1/1000 giây Khả năng đo: 99:59’59.999” Chế độ đo: Thời gian đã trôi qua, thời gian vòng chạy, ngắt giờ Khác: Tốc độ (0 đến 1998 đơn vị / giờ), Nhập khoảng cách (0,0 đến 99,9)</p>
                    <p>・ Đồng hồ đếm ngược Đơn vị đo: 1 giây Khoảng đếm ngược: 24 giờ Khoảng cài đặt thời gian bắt đầu đếm ngược: 1 phút đến 24 giờ (khoảng tăng 1 phút và khoảng tăng 1 giờ) Khác: Tự động lặp lại</p>
                    <p>・ 5 chế độ báo giờ hàng ngày (với 1 chế độ báo lặp)</p>
                    <p>・ Tín hiệu thời gian hàng giờ</p>
                    <p>・ Lịch hoàn toàn tự động (đến năm 2099)</p>
                    <p>・ Định dạng giờ 12/24</p>
                    <p>・ Giờ hiện hành thông thường: Giờ, phút, giây, chiều, tháng, ngày, thứ</p>
                    <p>・ Độ chính xác: ±15 giây một tháng</p>
                    <p>・ Tuổi thọ pin xấp xỉ: 3 năm với pin CR1220</p>
                    <h6>Kích thước vỏ / Tổng trọng lượng</h6>
                    <p>・ KKích thước vỏ : 55×51,2×16,9mm</p>
                    <p>・ Tổng trọng lượng : 73g</p>

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
                            <th>NGÀY RA MẮT</th>
                            <td>
                                201108 </td>
                        </tr>
                        <tr>
                            <th>MODULE

                            </th>
                            <td>5229

                            </td>
                        </tr>
                        <tr>
                            <th>MÀU SẮC


                            </th>
                            <td>
                                Đen

                            </td>
                        </tr>
                        <tr>
                            <th>NHÓM
                            </th>
                            <td>
                                ĐỒNG HỒ KIM-SỐ TIÊU CHUẨN



                            </td>
                        </tr>
                        <tr>
                            <th>DÂY ĐEO
                            </th>
                            <td>Dây đeo bằng nhựa

                            </td>
                        </tr>
                        <tr>
                            <th>NHÓM
                            </th>
                            <td>ĐỒNG HỒ SỐ TIÊU CHUẨN

                            </td>
                        </tr>
                        <tr>
                            <th>NHÃN HIỆU

                            </th>
                            <td>G-SHOCK



                            </td>
                        </tr>
                        <tr>
                            <th>DÂY ĐEO


                            </th>
                            <td>Dây đeo bằng nhựa
                            </td>
                        </tr>
                        <tr>
                            <th>LOẠI

                            </th>
                            <td>NAM



                            </td>
                        </tr>
                        <tr>
                            <th>CHỨC NĂNG KHÁC

                            </th>
                            <td>Chức năng đèn, Đồng hồ bấm giờ, Đồng hồ đếm ngược, Giờ thế giới

                            </td>
                        </tr>
                        <tr>
                            <th>VỎ</th>
                            <td>Chống va đập

                            </td>
                        </tr>
                        <tr>
                            <th>CHỐNG NƯỚC
                            </th>
                            <td>Chống nước ở độ sâu 200 mét

                            </td>
                        </tr>
                        <tr>
                            <th>GIỜ HIỆN HÀNH
                            </th>
                            <td>Digital-Analog Combination

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