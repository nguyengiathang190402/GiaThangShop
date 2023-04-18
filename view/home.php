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
                  <h3 class="title"><strong>Top 10</strong> Yêu Thích</h3>
                    <?php
                  foreach ($dstop10 as $sp) {
                     extract($sp);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     $image=$image_path.$image;

                     echo '
                     
                     <div class="container">
                     <div class="row">
                     <div class="col-md-3 col-sm-6">
                     <div class="products"> 
                     <div class="thumbnail"><a href="'.$linksp.'"><img src="'.$image.'" style="max-width:63%" alt="Product Name"></a></div>
                     <div class="productname">'.$name.'</div>
                     <h4 class="price">'.$price.'</h4>
                     <input class="button add-cart" type="submit" value="Thêm Vào Giỏ">
                     <button class="button compare" type="submit"><i class="fa fa-exchange"></i></button>
                     <button class="button wishlist" type="submit"><i class="fa fa-heart-o"></i></button></div>
                     
                     </div>';
                  }
                  
                  
                  ?>
                  <!-- <?php
                  $i=0;
                  foreach ($spnew as $sp) {
                     extract($sp);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     $hinh=$image_path.$image;
                     if(($i==2) ||($i==5) || ($i==8)){
                        $row="";
                     }else{
                        $row="row";
                     }
                     echo ' <div class="container">
                     <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="products">
                        <div class="thumbnail"><a href="'.$linksp.'"><img src="'.$hinh.'" alt="Product Name"></a></div>
                           <div class="productname"><a href="'.$linksp.'">'.$name.'</div>
                           <h4 class="price">'.$price.'</h4>
                           <div class="button_group">
                           <input class="button add-cart" type="submit" value="Thêm Vào Giỏ hàng">
                           <button class="button compare" type="submit"><i class="fa fa-exchange"></i></button>
                           <button class="button wishlist" type="submit"><i class="fa fa-heart-o"></i></button></div>
                        </div>
                     </div>';
                  $i+=1;
                  }
                  
                  ?> -->
                  <!-- <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Mới</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">New</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div> -->
               <div class="clearfix"></div>
               
                <div class="featured-products">
                  <h3 class="title"><strong>Sản Phẩm </strong> Nổi Bật</h3>
                  <?php
                  $i=0;
                  foreach ($spnew as $sp) {
                     extract($sp);
                     $linksp="index.php?act=sanphamct&idsp=".$id;
                     $hinh=$image_path.$image;
                     if(($i==2) ||($i==5) || ($i==8)){
                        $row="";
                     }else{
                        $row="row";
                     }
                     echo '
                    
                     <div class="container">
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
                  <!-- <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-06.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">Mới</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-07.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="row">
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-01.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-02.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-03.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-04.png" alt="Product Name"></a></div>
                                 <div class="productname">Iphone 5s Gold 32 Gb 2013</div>
                                 <h4 class="price">450.000 VNĐ</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào Giỏ</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>  -->
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