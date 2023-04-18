<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="view/images/favicon.png">
    <title>
      GiaThangShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2">
              <div class="logo">
                <a href="index.php">
                  <img src="view/images/logo2.png" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="header_top">
                <div class="row">
                  <div class="col-md-3">
                    <ul class="option_nav">
                      <li class="dorpdown">
                        <a href="#">
                          VNS
                        </a>
                        <ul class="subnav">
                          <li>
                            <a href="#">
                              Eng
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              Vns
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              Fer
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              Gem
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="dorpdown">
                        <a href="#">
                          VNĐ
                        </a>
                        <ul class="subnav">
                          <li>
                            <a href="#">
                              USD
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              UKD
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              FER
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="topmenu">
                      <li>
                        <a href="index.php">
                          Trang chủ
                        </a>
                      </li>
                      <li>
                        <a href="index.php?act=gioithieu">
                          Giới Thiệu
                        </a>
                      </li>
                      <li>
                        <a href="index.php?act=lienhe">
                        Liên Hệ
                        </a>
                      </li>
                      <li>
                        <a href="index.php?act=gopy">
                        Góp ý
                        </a>
                      </li>
                      <li>
                        <a href="index.php?act=hoidap">
                        Hỏi đáp
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="usermenu">
                      <li>
                        <a href="index.php?act=dangnhap" class="log">
                          Đăng nhập
                        </a>
                      </li>
                      <li>
                        <a href="index.php?act=dangky" class="reg">
                          Đăng ký
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="header_bottom">
                <ul class="option">
                  <li id="search" class="search">
                  <form action="index.php?act=sanpham" method="post">
                      <input class="search-submit" type="submit" value="">
                      <input class="search-input" placeholder="Nhập từ khoá tìm kiếm" type="text" value="" name="search">
                    </form>
                  </li>
                  <li class="option-cart">
                    <a href="#" class="cart-icon">
                    Giỏ hàng 
                      <span class="cart_no">
                        02
                      </span>
                    </a>
                    <ul class="option-cart-item">
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="view/images/products/thum/products-01.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Giá: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              300.000 VNĐ
                            </p>
                            <a href="#" class="remove">
                              <img src="view/images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="view/images/products/thum/products-02.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Giá: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              300.000 VNĐ
                            </p>
                            <a href="#" class="remove">
                              <img src="view/images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="total">
                          Tổng 
                          <strong>
                            600.000 VNĐ
                          </strong>
                        </span>
                        <button class="checkout" onClick="location.href='checkout.html'">
                          Thanh Toán
                        </button>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                      Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                  </button>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Danh Mục
                      </a>
                      <div class="dropdown-menu">
                        <ul class="mega-menu-links">
                        <?php
                        foreach ($dsdm as $dm ) {
                            extract($dm);
                            $linkdm ="index.php?act=sanpham&iddm=".$id;
                            echo 
                            '<li>
                            <a href="'.$linkdm.'">'.$name.'</a>
                            </li>';

                        }
                        ?>
                          <!-- <li>
                            <a href="index.html">
                              home
                            </a>
                          </li>
                          <li>
                            <a href="home2.html">
                              home2
                            </a>
                          </li>
                          <li>
                            <a href="home3.html">
                              home3
                            </a>
                          </li>
                          <li>
                            <a href="productlitst.html">
                              Productlitst
                            </a>
                          </li>
                          <li>
                            <a href="productgird.html">
                              Productgird
                            </a>
                          </li>
                          <li>
                            <a href="details.html">
                              Details
                            </a>
                          </li>
                          <li>
                            <a href="cart.html">
                              Cart
                            </a>
                          </li>
                          <li>
                            <a href="checkout.html">
                              CheckOut
                            </a>
                          </li>
                          <li>
                            <a href="checkout2.html">
                              CheckOut2
                            </a>
                          </li>
                          <li>
                            <a href="contact.html">
                              contact
                            </a>
                          </li> -->
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="productgird.html">
                        Nam
                      </a>
                    </li>
                    <li>
                      <a href="productlitst.html">
                        Nữ
                      </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Thời Trang
                      </a>
                      <div class="dropdown-menu mega-menu">
                        <div class="row">
                          <!-- <div class="col-md-6 col-sm-6">
                            <ul class="mega-menu-links">
                              <li>
                                <a href="productgird.html">
                                  New Collection
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Shirts & tops
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Laptop & Brie
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Dresses
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Blazers & Jackets
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Shoulder Bags
                                </a>
                              </li>
                            </ul>
                          </div> -->
                          <!-- <div class="col-md-6 col-sm-6">
                            <ul class="mega-menu-links">
                              <li>
                                <a href="productgird.html">
                                  New Collection
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Shirts & tops
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Laptop & Brie
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Dresses
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Blazers & Jackets
                                </a>
                              </li>
                              <li>
                                <a href="productgird.html">
                                  Shoulder Bags
                                </a>
                              </li>
                            </ul>
                          </div> -->
                        </div>
                      </div>
                    </li>
                    <li>
                      <a href="productgird.html">
                        Quà Tặng
                      </a>
                    </li>
                    <li>
                      <a href="productgird.html">
                        blog
                      </a>
                    </li>
                    <li>
                      <a href="productgird.html">
                        Trang Sức
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <div class="clearfix">
        </div>
        <div class="page-index">
          <div class="container">
            <p>
              Trang chủ - Đăng ký
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="special-deal leftbar" style="margin-top:0;">
                <h4 class="title">
                  Ưu Đãi
                  <strong>
                    Đặc Biệt
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="view/images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      300.000 VNĐ
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="view/images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      300.000 VNĐ
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="details.html">
                      <img src="view/images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      <a href="details.html">
                        Licoln Corner Unit
                      </a>
                    </p>
                    <h5 class="price">
                      300.000 VNĐ
                    </h5>
                  </div>
                </div>
              </div>
              <div class="product-tag leftbar">
                <h3 class="title">
                  Thẻ 
                  <strong>
                    Sản Phẩm
                  </strong>
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Lincoln us
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      SDress for Girl
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Corner
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Window
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PG
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Oscar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Bath room
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      PSD
                    </a>
                  </li>
                </ul>
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Nhận
                  <strong>
                    bẢn tin
                  </strong>
                </h3>
                <p>
                Mặt đồng hồ kỹ thuật số Casio G Shock màu đen.                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Email của bạn...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                12k người thích GiaThangShop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook xã hội plugin
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps">
                    <div class="step-title">
                      01. Lựa chọn thanh toán
                    </div>
                  </li>
                  <li class="steps active">
                    
                    <a href="checkout.html" class="step-title">
                      02. Thông tin thanh toán
                    </a>
                    <div class="step-description">
                        <?php
                        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);

                        }
                        
                        ?>
                      <form action="index.php?act=quenmk" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Quên mật khẩu
                              </h5>
                              <!-- <div class="form-row">
                                <label class="lebel-abs">
                                  Tên đăng nhập
                                  <strong class="red">
                                    * :
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="user" value="<?=$user?>">
                              </div> -->
                             
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    * :
                                  </strong>
                                </label>
                                <input type="email" class="input namefild" name="email" value="<?=$email?>">
                              </div>
                            
                              <p class="privacy">
                                <span class="input-radio">
                                  <input type="radio" name="user">
                                </span>
                                <span class="text">
                                   Tôi đã đọc và đồng ý với 
                                  <a href="#" class="red">
                                  Chính sách quyền riêng tư
                                  </a>
                                </span>
                              </p>
                              <input type="submit" value="Gửi" name="guiemail"> <br>
                              
                              
                              
                              
                               
                              
                            </div>
                          </div>
                        </div>
                      </form>
                       <h5 class="thongbao" >
                       <strong class="red">
                      <?php
                      if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                      }
                      
                      ?>
                      </h5>
                    </div>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      03. Thông Tin Vận Chuyển 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      04. Phương Thức Vận Chuyển 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      05. Thông Tin Thanh Toán 
                    </a>
                  </li>
                  <li class="steps">
                    <a href="#" class="step-title">
                      06. Đánh Giá
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Thương hiệu
              </strong>
              Của Chúng Tôi
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="view/images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      