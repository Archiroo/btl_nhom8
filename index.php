<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Fun Food Website</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<!-- header section starts  -->
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-utensils"></i> 4FF </a>
    
    <nav class="navbar">
        <a href="index.php">Trang chủ</a>
        <a href="#popular">Phổ biến</a>
        <a href="#menu">Thực đơn</a>
        <a href="#order">Đặt món</a>
        <a href="#about">Giới thiệu</a>
        <a href="#blogs">Thảo luận</a>
    </nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
        <div id="login-btn" class="fas fa-user"></div>
    </div>
    
</header>
<!-- header section ends  -->
<!-- search-form  -->
<section class="search-form-container">
    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</section>
<!-- shopping-cart section  -->
<section class="shopping-cart-container">
    <div class="products-container">
        <h3 class="title">Giỏ hàng</h3>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>Bánh mỳ kẹp</h3>
                    <span> Quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> Price : </span>
                    <span class="price"> 40.000 VND </span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/food-3.png" alt="">
                <div class="content">
                    <h3>Pizza hải sản</h3>
                    <span> Quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> Price : </span>
                    <span class="price"> 149.000 VND </span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>Khoai tây chiên</h3>
                    <span> Quantity : </span>
                    <input type="number" name="" value="3" id="">
                    <br>
                    <span> Price : </span>
                    <span class="price"> 90.000 VND </span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/food-2.png" alt="">
                <div class="content">
                    <h3>Bánh mỳ kẹp bò</h3>
                    <span> Quantity : </span>
                    <input type="number" name="" value="2" id="">
                    <br>
                    <span> Price : </span>
                    <span class="price"> 110.000 VND </span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="image/food-5.png" alt="">
                <div class="content">
                    <h3>Pizza bò khô</h3>
                    <span> Quantity : </span>
                    <input type="number" name="" value="1" id="">
                    <br>
                    <span> Price : </span>
                    <span class="price"> 99.000 VND </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login-form  -->
<div class="login-form-container">
    <form action="">
        <h3>login form</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="password" name="" placeholder="enter your password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="login now" class="btn">
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="#">create one</a></p>
    </form>
</div>
<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <span>Chào mừng đến với cửa hàng!</span>
        <h3>Các loại gia vị khác nhau mang đến khẩu vị khác nhau.</h3>
        <a href="#" class="btn">Đặt ngay</a>
    </div>
    <div class="image">
        <img src="image/home-img.png" alt="" class="home-img">
        <img src="image/home-parallax-img.png" alt="" class="home-parallax-img">
    </div>
</section>
<!-- home section ends  -->
<!-- category section starts  -->
<section class="category">
    <a href="#" class="box">
        <img src="image/cat-1.png" alt="">
        <h3>Combo</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-2.png" alt="">
        <h3>Pizza</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-3.png" alt="">
        <h3>Bánh mỳ kẹp</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-4.png" alt="">
        <h3>Gà chiên</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-5.png" alt="">
        <h3>Bữa tối</h3>
    </a>
    <a href="#" class="box">
        <img src="image/cat-6.png" alt="">
        <h3>Cafe</h3>
    </a>
</section>
<!-- category section ends -->
<!-- about section starts  -->
<section class="about" id="about">
    <div class="image">
        <img src="image/about-img.png" alt="">
    </div>
    <div class="content">
        <span>Tại sao chọn chúng tôi ?</span>
        <h3 class="title">Điều gì làm cho món ăn của chúng tôi trở nên ngon hơn!</h3>
        <p>Là công ty tiên phong lĩnh vực đồ ăn, chúng tôi cung cấp thức ăn ngon cho mọi người. Với hơn 14 năm phát triển, 4FF đã tích lũy và có kinh nghiệm trong các lĩnh vực khác nhau. Ngoài việc cung cấp đồ ăn, chúng tôi cũng đang theo đuổi mô hình kinh doanh tối ưu nhằm cung cấp đồ ăn ổn định và lợi ích chi phí.</p>
        <a href="#" class="btn">Đọc thêm</a>
        <div class="icons-container">
            <div class="icons">
                <img src="image/serv-1.png" alt="">
                <h3>Giao hàng nhanh</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-2.png" alt="">
                <h3>Thực phẩm sạch</h3>
            </div>   
            <div class="icons">
                <img src="image/serv-3.png" alt="">
                <h3>Chất lượng tốt</h3>
            </div>  
            <div class="icons">
                <img src="image/serv-4.png" alt="">
                <h3>Hỗ trợ 24/7</h3>
            </div>           
        </div>
    </div>
</section>
<!-- about section ends -->
<!-- popular section starts  -->
<section class="popular" id="popular">
    <div class="heading">
        <span>Món ăn phổ biến</span>
    </div>
    <div class="box-container">
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-1.png" alt="">
            </div>
            <div class="content">
                <h3>Há cảo chiên</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (124) </span>
                </div>
                <div class="price">90.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-2.png" alt="">
            </div>
            <div class="content">
                <h3>Bánh mỳ kẹp bò</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span> (180) </span>
                </div>
                <div class="price">55.000 VND</span></div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-3.png" alt="">
            </div>
            <div class="content">
                <h3>Pizza hải sản</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (50) </span>
                </div>
                <div class="price">149.999 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-4.png" alt="">
            </div>
            <div class="content">
                <h3>Bánh mỳ cháy cạnh</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span> (50) </span>
                </div>
                <div class="price">49.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-5.png" alt="">
            </div>
            <div class="content">
                <h3>Pizza bò khô</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">99.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-6.png" alt="">
            </div>
            <div class="content">
                <h3>Pizza cà chua</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">80.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-7.png" alt="">
            </div>
            <div class="content">
                <h3>Bánh mỳ kẹp gà</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">55.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <div class="image">
                <img src="image/food-8.png" alt="">
            </div>
            <div class="content">
                <h3>Pizza thập cẩm</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (50) </span>
                </div>
                <div class="price">130.000 VND</div>
                <a href="#" class="btn">Thêm vào giỏ hàng</a>
            </div>
        </div>
    </div>
</section>
<!-- popular section ends -->
<!-- banner section starts  -->
<section class="banner">
    <div class="row-banner">
        <div class="content">
            <span>Gấp đôi phô mai</span>
            <h3>Bánh mỳ</h3>
            <p>Với coca và khoai tây chiên</p>
            <a href="#" class="btn">Đặt ngay</a>
        </div>
    </div>
    <div class="grid-banner">
        <div class="grid">
            <img src="image/banner-1.png" alt="">
            <div class="content">
                <span>Giảm giá</span>
                <h3>Lên đến 50%</h3>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>
        <div class="grid">
            <img src="image/banner-2.png" alt="">
            <div class="content center">
                <span>Giảm giá</span>
                <h3>Lên đến 50%</h3>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>
        <div class="grid">        
            <img src="image/banner-3.png" alt="">
            <div class="content">
                <span>Đặc biệt</span>
                <h3>Hoàn tiền 100%</h3>
                <a href="#" class="btn">Đặt ngay</a>
            </div>
        </div>
    </div>
</section>
<!-- banner section ends -->
<!-- menu section starts  -->
<section class="menu" id="menu">
    <div class="heading">
        <span>Thực đơn của chúng tôi</span>
    </div>
    <div class="box-container">
        <a href="#" class="box">
            <img src="image/menu-1.png" alt="">
            <div class="content">
                <h3>Bánh mỳ kẹp</h3>
                <div class="price">40.000 VND</div>
            </div>
        </a>
        <a href="#" class="box">
            <img src="image/menu-2.png" alt="">
            <div class="content">
                <h3>Pizza đậu cay</h3>
                <div class="price">40.000 VND</div>
            </div>
        </a>
        <a href="#" class="box">
            <img src="image/menu-3.png" alt="">
            <div class="content">
                <h3>Bánh mỳ bơ sữa</h3>
                <div class="price">40.000 VND</div>
            </div>
        </a>
        <a href="#" class="box">
            <img src="image/menu-4.png" alt="">
            <div class="content">
                <h3>Bánh mỳ kẹp pate</h3>
                <div class="price">40.000 VND</div>
            </div>
        </a>
        <a href="#" class="box">
            <img src="image/menu-5.png" alt="">
            <div class="content">
                <h3>Khoai tây chiên</h3>
                <div class="price">30.000 VND</div>
            </div>
        </a>
        <a href="#" class="box">
            <img src="image/menu-6.png" alt="">
            <div class="content">
                <h3>Pizza trứng sốt</h3>
                <div class="price">40.000 VND</div>
            </div>
        </a>
    </div>
</section>
<!-- menu section ends -->
<!-- order section starts  -->
<section class="order" id="order">
    <div class="heading">
        <span>Đặt ngay</span>
        <h3>Giao hàng tận nơi</h3>
    </div>
    <div class="icons-container">
        <div class="icons">
            <img src="image/icon-1.png" alt="">
            <h3>7:00 đến 22:30</h3>
        </div>
        <div class="icons">
            <img src="image/icon-2.png" alt="">
            <h3>096 5269 082</h3>
        </div>
        <div class="icons">
            <img src="image/icon-3.png" alt="">
            <h3>57, Thái Hà - Đống Đa - Hà Nội</h3>
        </div>
    </div>
    <form action="">
        <div class="flex">
            <div class="inputBox">
                <span>Họ và tên</span>
                <input type="text" placeholder="4 Funn Food" name="" id="">
            </div>
            <div class="inputBox">
                <span>Số điện thoại</span>
                <input type="number" placeholder="096 5269 082" name="" id="">
            </div>
        </div>
        <div class="flex">
            <div class="inputBox">
                <span>Lưu ý cho cửa hàng</span>
                <input type="text" placeholder="Lưu ý..." name="" id="">
            </div>
            <div class="inputBox">
                <span>Chọn thời gian</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="flex">
            <div class="inputBox">
                <textarea placeholder="Địa chỉ nhận hàng" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBox">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.525305593949!2d105.81907701493239!3d21.01165718600766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7dbe014e0b%3A0x741128e73301c5ff!2zNTcgUC4gVGjDoWkgSMOgLCBUcnVuZyBMaeG7h3QsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1641206928270!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <input type="submit" value="Xác nhận đặt món" class="btn">
    </form>
</section>
<!-- order section ends -->
<!-- blogs section starts  -->
<section class="blogs" id="blogs">
    <div class="heading">
        <span>Thảo luận</span>
        <h3>Những bài viết hàng ngày</h3>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>Hamburger</h3>
                <p>Hamburgers ở Úc và New Zealand thường có cà chua, rau diếp, pho mát và một ít thịt (có tẩm nước sốt BBQ hoặc nước sốt cà chua), và thường có củ cải đường, hành tây, trứng, thịt hun khói và dứa (còn gọi là "burger with the lot). "BLT" có nghĩa là hamburger dùng kèm với thịt hun khói, rau diếp, và cà chua. Đây chắc chắn là một món bánh ngon mà bạn nên thử.
</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>Burrito</h3>
                <p>Burrito là gì? Burrito là một món bánh truyền thống của Mexico, có hai thành phần chính đó là vỏ bánh và nhân bánh. Sự kết hợp giữa các thành phần trong món bánh Burrito này mang đến cho người thưởng thức cảm giác thích thú, ngon miệng và bị cuốn hút bởi độ dai giòn của vỏ bánh kết hợp với phần nhân bánh thơm ngon. Đây chắc chắn là một món bánh ngon mà bạn nên thử.
</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <h3> <i class="fas fa-calendar"></i> 21st may, 2021 </h3>
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="tags">
                    <a href="#"> <i class="fas fa-tag"></i> food / </a>
                    <a href="#"> <i class="fas fa-tag"></i> burger / </a>
                    <a href="#"> <i class="fas fa-tag"></i> pizza  </a>
                </div>
                <h3>Hamburger Đặc Biệt</h3>
                <p>Hamburgers có cà chua, rau diếp, pho mát và một ít thịt (có tẩm nước sốt BBQ hoặc nước sốt cà chua), và thường có củ cải đường, hành tây, trứng, thịt hun khói và dứa (còn gọi là "burger with the lot). "BLT" có nghĩa là hamburger dùng kèm với thịt hun khói, rau diếp, và cà chua. Và đặc biệt là có khoai tây chiên. Đây chắc chắn là một món bánh ngon mà bạn nên thử.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>
<!-- blogs section ends -->
<!-- footer section starts  -->
<section class="footer">
    <div class="newsletter">
        <h3>Nhận thông tin mới nhất từ chúng tôi</h3>
        <form action="">
            <input type="email" name="" placeholder="Nhập email của bạn" id="">
            <input type="submit" value="Đăng ký">
        </form>
    </div>
    <div class="box-container">
        <div class="box">
            <h3>Thực đơn</h3>
            <a href="#"><i class="fas fa-arrow-right"></i> Pizza</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Bánh mỳ</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Gà chiên</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Mỳ ý</a>
            <a href="#"><i class="fas fa-arrow-right"></i> Nhiều hơn nữa...</a>
        </div>
        <div class="box">
            <h3>Đường dẫn</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Trang chủ</a>
            <a href="#popular"> <i class="fas fa-arrow-right"></i> Phổ biến</a>
            <a href="#menu"> <i class="fas fa-arrow-right"></i> Thực đơn</a>
            <a href="#order"> <i class="fas fa-arrow-right"></i> Đặt món</a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> Giới thiệu</a>
            <a href="#blogs"> <i class="fas fa-arrow-right"></i> Thảo luận</a>
        </div>
        <div class="box">
            <h3>Đường dẫn phụ</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Hóa đơn</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Tài khoản</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Món ăn yêu thích</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Điều khoản sử dụng</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Chính sách</a>
        </div>
        <div class="box">
            <h3>Giờ mở cửa</h3>
            <p>Thứ 2: 7:00 đến 22:30</p>
            <p>Thứ 3: 7:00 đến 22:30</p>
            <p>Thứ 4: 7:00 đến 22:30</p>
            <p>Thứ 5: 7:00 đến 22:30</p>
            <p>Thứ 6: 7:00 đến 22:30</p>
            <p>Thứ 7: 8:00 đến 22:00</p>
            <p>Chủ nhật: 8:00 đến 22:00</p>
        </div>
    </div>
    <div class="bottom">
        <div class="share">
            <a href="https://www.facebook.com/ArChir0/" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/ar_chiroo/" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
        <div class="credit"> Được làm bởi <span>nhóm 8</span> | Đã đăng ký bản quyền! </div>
        
    </div>
</section>
<!-- footer section ends -->
<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/scripts.js"></script>
</body>
</html>