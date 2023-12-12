<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/contact.css">
    <title> Liên hệ - Lê Minh Tuấn </title>
</head>
<body class="preloading">
    <div class="wrapper">
        <header>
             c<divlass="header-wrapper">
                <div class="box-logo_mail flex-row">
                    <div class="logo">
                        <img src="../image/logo.png" alt="">
                    </div>
                    <div class="phone-mail">
                        <div class="phone">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="title">
                                <span>Tư vấn bán hàng</span>
                                <p> Lê Tuấn : 0852435431 </p>
                            </div>
                        </div>
                        <div class="mail">
                            <div class="icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="title">
                                <span>Gửi email liên hệ</span>
                                <p>tuanleminh298@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-menu">
                    <div class="menu-wrapper">
                        <ul>
                            <li id="trangchu"><a href="index.php">Trang Chủ</a></li>
                            <li id="gioithieu"><a href="introduce.php">Giới Thiệu</a></li>
                            <li id="sanpham"><a href="product.php">Sản Phẩm</a></li>
                            <li><a href="#">Phụ Kiện</a></li>
                            <li id="installment"><a href="installment.php">Mua xe trả góp</a></li>
                            <li id="newcar"><a href="newsinformation.php">Giá xe mới</a></li>
                            <li><a href="newcarprice.php">Giá xe cũ</a></li>
                            <li id="news"><a href="news.php">Tin tức</a></li>
                            <li id="contact"><a href="contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="body-contact">
            <div class="wrapper-contact">
                <section class="section">
                    <div class="information">
                        <form action="" id="form">
                            <h1>Gửi thông tin</h1>
                            <div class="box-information">
                                <div class="enter-information">
                                    <label for="fullname" class="label">Họ tên: <sup>*</sup></label>
                                    <input id="fullname" name="fullname" type="text" placeholder="Nhập Họ và tên">
                                    <span class="message"></span>
                                </div>
                                <div class="enter-information">
                                    <label for="phone" class="label">Điện thoại: <sup>*</sup></label>
                                    <input id="phone" name="phone" type="text" placeholder="Nhập số điện thoại">
                                    <span class="message"></span>
                                </div>
                                <div class="enter-information">
                                    <label for="email" class="label">Địa chỉ email: <sup>*</sup></label>
                                    <input id="email" name="email" type="text" placeholder="Nhập địa chỉ email">
                                    <span class="message"></span>
                                </div>
                                <div class="enter-information">
                                    <label for="noidung" class="label">Nội dung <sup>*</sup></label>
                                    <textarea name="noidung" id="noidung" cols="30" rows="10">
                                    </textarea>
                                </div>
                            </div>
                            <button type="submit">Gửi đi</button>
                        </form>
                    </div>
                    <div class="map">
                        <h1>Vị trí trên google map</h1>
                        <iframe src="https://www.google.com/maps/dir/21.342531,105.3718857/21.3405408,105.3802364/"></iframe>
                        <p>Địa chỉ: Đại học Hùng Vương - Phú Thọ</p>
                        <strong>Hotline: 0852435431</strong>
                        <br>
                        <strong>Email: tuanleminh298@gmail.com</strong>
                    </div>
                </section>
            </div>
        </div>

        <footer>
            <div class="footer1">
                <div class="footer1-left">
                    <h1>
                        Xí Nghiệp Toyota Nông Trang, Việt trì 
                    </h1>
                    <h3>
                        <b>Xí Nghiệp Toyota Nông Trang, Việt Trì </b> <br>
                        Địa chỉ: phường Nông Trang ,thành phố Việt Trì 
                    </h3>
                    <p>Hotline Lê Minh Tuấn : 0988937058</p>
                </div>
                <div class="footer1-right">
                    <div class="left">
                        <h2>giới thiệu</h2>
                        <ul>
                            <li id="gioithieuFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                                </svg>
                              <a href="#">Giới thiệu</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Sản phẩm</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Bảng giá</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Tin tức</a></li>
                        </ul>
                    </div>  
                    <div class="right">
                        <h2>chính sách</h2>
                        <ul>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Chính sách bán hàng</a></li>
                            <li id="installmentFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Mua xe trả góp</a></li>
                            <li id="newcarFooter"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Giá xe mới</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                              </svg>
                              <a href="#">Tài chính bảo hiểm</a></li>
                        </ul>
                    </div>                    
                </div>
            </div>
            <div class="footer2">
                <div class="footer2-content">
                    <p><i class="fa-solid fa-house-chimney"></i> Lê Minh Tuấn </p>
                    <p><i class="fa-solid fa-phone"></i>Hotline: 0988937058</p>
                    <p><i class="fa-solid fa-gear"></i>Cùng sáng tạo - Cùng phát triển</p>
                </div>
            </div>
        </footer>
    </div>
    <div class="loader-wrapper">
        <div class="loader">
            <div class="inner one" style="--i:1;"></div>
            <div class="inner two" style="--i:1;"></div>
            <div class="inner three" style="--i:1;"></div>
            <div class="box-heart">
                <div class="heart"></div>
            </div>
        </div>
    </div>
</body>
<script src="../js/contact.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(window).on('load', function(event){
        $('body').removeClass('preloading');
        $('.loader-wrapper').delay(1000).fadeOut('fast');
    });
    </script>
<script>
    checkForm({
        form: '#form',
        rules: [
            checkForm.isFullname('#fullname'),
            checkForm.isPhone('#phone'),
            checkForm.isEmail('#email'),
        ]
    })
</script>
</html>