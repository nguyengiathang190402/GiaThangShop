<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="view/images/favicon.png">
      <title>Welcome to GiaThangShop</title>
      <link href="view/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="view/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="view/css/flexslider.css" type="text/css" media="screen"/>
      <link href="view/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="view/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="view/css/anh.css">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="view/images/logo2.png" alt=""></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <li class="dorpdown">
                                    <a href="#">VN</a>
                                    <ul class="subnav">
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li>
                                 <li class="dorpdown">
                                    <a href="#">VND</a>
                                    <ul class="subnav">
                                       <li><a href="#">USD</a></li>
                                       <li><a href="#">UKD</a></li>
                                       <li><a href="#">VND</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-6">
                              <ul class="topmenu">
                                 <li><a href="index.php">Trang chủ</a></li>
                                 <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                                 <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                                 <li><a href="index.php?act=gopy">Góp ý</a></li>
                                 <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="index.php?act=dangnhap" class="log">Đăng Nhập</a></li>
                                 <li><a href="index.php?act=dangky" class="reg">Đăng ký</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="#" class="cart-icon">Giỏ hàng <span class="cart_no">02</span></a>
                              <ul class="option-cart-item">
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="images/products/thum/products-01.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Giá: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">300.000 VNĐ</p>
                                          <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="cart-item">
                                       <div class="image"><img src="images/products/thum/products-02.png" alt=""></div>
                                       <div class="item-description">
                                          <p class="name">Lincoln chair</p>
                                          <p>Size: <span class="light-red">One size</span><br>Giá: <span class="light-red">01</span></p>
                                       </div>
                                       <div class="right">
                                          <p class="price">300.000 VNĐ</p>
                                          <a href="#" class="remove"><img src="images/remove.png" alt="remove"></a>
                                       </div>
                                    </div>
                                 </li>
                                 <li><span class="total">Tổng <strong>600.000 VNĐ</strong></span><button class="checkout" onClick="location.href='checkout.html'">Thanh Toán</button></li>
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh Mục</a>
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
                                     
                  
                                       <!-- <li><a href="index.html">home</a></li>
                                       <li><a href="home2.html">home2</a></li>
                                       <li><a href="home3.html">home3</a></li>
                                       <li><a href="productlitst.html">Productlitst</a></li>
                                       <li><a href="productgird.html">Productgird</a></li>
                                       <li><a href="details.html">Details</a></li>
                                       <li><a href="cart.html">Giỏ hàng</a></li>
                                       <li><a href="checkout.html">CheckOut</a></li>
                                       <li><a href="checkout2.html">CheckOut2</a></li>
                                       <li><a href="contact.html">contact</a></li> -->
                                    </ul>
                                 </div>
                              </li>
                              <li><a href="productgird.html">Nam</a></li>
                              <li><a href="productlitst.html">Nữ</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thời Trang</a>
                                 
                                 <!-- <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div> -->
                              </li>
                              <li><a href="productgird.html">Quà Tặng</a></li>
                              <li><a href="productgird.html">blog</a></li>
                              <li><a href="productgird.html">Trang sức</a></li>
                              <!-- <li><a href="contact.html">Liên hệ với chúng tôi</a></li> -->
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <link rel="stylesheet" href="view/css/anh.css">
<div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Shop Gia Thắng</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Bộ sưu tập Thời Trang</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Để không ai có thể thay thế, bạn phải luôn luôn <br>khác biệt.</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Chi tiết</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="view/images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>Bộ sưu tập Thời Trang</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Thời trang có thể phai tàn nhưng phong cách sẽ <br>tồn tại mãi mãi</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">Chi tiết</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="view/images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Thời Trang 2021</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Phong cách chính là một cách đơn giản để nói lên những điều <br>phức tạp</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">Chi tiết</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="view/images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="view/images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
               
                  <h3 class="title"><strong>Sản phẩm ></strong> <strong><?=$tendm?></strong></h3>
                  <?php
                  $i=0;
                  foreach ($dssp as $sp) {
                     extract($sp);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     $hinh=$image_path.$image;
                     if(($i==2) ||($i==5) || ($i==8) || ($i==11)){
                        $row="";
                     }else{
                        $row="row";
                     }
                     echo ' <div class="container">
                     <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="products">
                        <div class="thumbnail"><a href="'.$linksp.'"><img src="'.$hinh.'" style="max-width:63%" alt="Product Name"></a></div>
                           <div class="productname"><a href="'.$linksp.'">'.$name.'</div>
                           <h4 class="price">'.$price.'</h4>
                           <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                        </div>
                     </div>';
                  $i+=1;
                  }
                  
                  ?>
                  
                  
               <div class="clearfix"></div>
               
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Nhãn hiệu </strong> </h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="view/images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>