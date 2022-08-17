<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from laravel-ecommerce.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 06:02:22 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="627" />
    <meta
      name="csrf-token"
      content="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"
    />
    <meta name="author" content="Laravel Ecommerce- by Finva Soft Limited" />
    <meta property="og:image" content="uploads/setting/auth_logo.jpg" />
    <!--meta start-->

    <!--meta end-->

    <title>Laravel Ecommerce- by Finva Soft Limited</title>

    <link
      rel="shortcut icon"
      type="image/jpg"
      href="uploads/setting/favicon.jpg"
    />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/toast.min.css')}}" />

    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/mckenziearts/laravel-notify/css/notify.css"
    />

    <!-- <link rel="stylesheet" href="https://laravel-ecommerce.xyz/'assets/frontend/css/all.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/icofont.css')}}" />
    <link
      rel="stylesheet"
      href="../kit-pro.fontawesome.com/releases/latest/css/pro.min.css"
      media="all"
    />
    @livewireStyles
    <!--chat code here-->

    <!--chat code here-->
  </head>
  <body>
    <style>
      .fb_dialog_content iframe {
        bottom: 105px !important;
      }
    </style>
    <!--================header  Area start=================-->
    <style>
      @font-face {
        font-family: muli;
        src: url("assets/frontend/font/Muli/Muli-VariableFont_wght.ttf");
      }
    </style>
    <!-- <header class="home"> -->
    <header class="not-home">
      <div
        class="upper-header"
        style="background: #096629; border-bottom: 1px solid #dcdcdc4a">
        <div class="containe">
          <div style="display: flex">
            <div class="dvts" style="flex: 1">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fal fa-phone-alt" aria-hidden="true"></i> +88
                    01925 015919</a
                  >
                </li>
                <li style="margin-left: 10px">
                  <a href="#"
                    ><i class="fal fa-envelope" aria-hidden="true"></i>
                    info@bogurashop.com</a
                  >
                </li>
              </ul>
            </div>
            <div class="dvts">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fal fa-mobile" aria-hidden="true"></i> Download
                    Apps!</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="top-header header_area">
        <div class="containe">
          <div class="mobile-menu-openar">
            <div class="bars">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="logo-area">
            <a href="index.html">
              <img src="uploads/setting/logo.png" alt="Application Logo" />
            </a>
          </div>
          <div class="mobi-comp top-menu" style="display: none">
            <ul>
              <li>
                <a href="cart.html"><i class="fal fa-shopping-cart"></i></a>
              </li>
              <li>
                <a href="login.html"><i class="fas fa-user"></i> </a>
              </li>

              ba
            </ul>
          </div>
          <div class="wrap" style="width: 30px"></div>
          <div class="search-box" id="search-box-open">
            <form
              action="https://laravel-ecommerce.xyz/product/search"
              method="GET"
            >
              <div class="input-group">
                <input
                  readonly
                  placeholder="Search Products"
                  class="sear"
                  type="search"
                  name="keyword"
                />
                <button class="input-group-addon" type="submit" name="go">
                  <i class="icofont icofont-search"></i>
                </button>
              </div>
            </form>
            <i
              style="display: none"
              class="other-search icofont icofont-search"
            ></i>
          </div>

          <div class="wrap" style="width: 30px"></div>
          <div class="top-menu">
            <ul>
              <li>
                <a href="login.html">
                  <i class="fal fa-heart" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="{{ route('cart') }}"
                  ><i class="fal fa-shopping-cart"></i> tk
                  <span id="total-cart-amount">0.00</span>
                </a>
              </li>
              <li><a href="login.html">Sign in</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="menu-overly"></div>

      <div class="main-menu">
        <div class="containe">
          <div class="back">
            <i class="fas fa-long-arrow-alt-left"></i> back
          </div>
          <div class="collpase-menu-open" style="display: none">
            <a id="menu" class="active" href="#">MENU</a>
            <a id="cat" href="#">CATEGORIES</a>
          </div>
          <div class="nav-bar">
            <div class="header-category-wrap">
              <div style="display: none" class="header-category-nav">
                <span><i class="icofont icofont-navigation-menu"></i></span>
                Categories
                <span class="arrow"></span>
                <section class="hero-area">
                  <div class="containe">
                    <div class="row">
                      <div class="category-side col-lg-2.5">
                        <div class="hero-categories">
                          <ul class="big-cat">
                            <li class="components-bg-wo">
                              <i
                                class="fas fa-bars"
                                style="margin-right: 10px"
                              ></i
                              >Categories
                            </li>
                            <li>
                              <a href="category/raint-tools.html"
                                ><img
                                  src="uploads/category/default.html"
                                  alt=""
                                />Raint &amp;Tools</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/enamel-paint.html"
                                    >Enamel Paint</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/men-fashion.html"
                                ><img
                                  src="uploads/category/2022-05-13-627e7f355f339.png"
                                  alt=""
                                />Men Fashion</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/t-shirt.html"
                                    >T-Shirt</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/polo-shirt.html"
                                    >Polo Shirt</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/pant.html">Pant</a>
                                </li>
                                <li>
                                  <a href="sub-category/suits.html">Suits</a>
                                </li>
                                <li>
                                  <a href="sub-category/accessories.html"
                                    >Accessories</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/belt-for-men.html"
                                        >Belt For Men</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/wallet-for-men.html"
                                        >Wallet For Men</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Glass-For-Men-5dVsV.html"
                                        >Glass For Men</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Shoe-For-Men-L08nX.html"
                                        >Shoe For Men</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Other-For-Men-JjXHL.html"
                                        >Other For Men</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Watch-For-Men-swaMx.html"
                                        >Watch For Men</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/women-fashion.html"
                                ><img
                                  src="uploads/category/2022-03-19-623597bde6a42.png"
                                  alt=""
                                />Women Fashion</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/saree.html">Saree</a>
                                </li>
                                <li>
                                  <a href="sub-category/lehenga-gown.html"
                                    >Lehenga &amp; Gown</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/ladies-t-shirt-shirt.html"
                                    >Ladies T-Shirt &amp; Shirt</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/ladies-pant-leggings.html"
                                    >Ladies Pant &amp; Leggings</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/unstitch-salwar-kamiz.html"
                                    >Unstitch Salwar Kamiz</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/borka-hijab.html"
                                    >Borka &amp; Hijab</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/lawn-dress.html"
                                    >Lawn Dress</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/lingerie-sleep-wear.html"
                                    >Lingerie &amp; Sleep Wear</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/women-accessories.html"
                                    >Women Accessories</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Ladies-Bags-ihYis.html"
                                        >Ladies Bags</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Ladies-Shoe-9CrEH.html"
                                        >Ladies Shoe</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/ladies-glass.html"
                                        >Ladies Glass</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/winter-collection.html"
                                    >Winter Collection</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/dupatta-shawls.html"
                                    >Dupatta &amp; Shawls</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/tops-koti.html"
                                    >Tops &amp; Koti</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/women-kurtis-fotua.html"
                                    >Kurtis &amp; Fotua</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/women-party-wear.html"
                                    >Party Wear</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/baby-toy.html"
                                ><img
                                  src="uploads/category/2022-03-19-62359e5d3bbae.png"
                                  alt=""
                                />Baby &amp; Toy</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/Baby-Food-MNY3E.html"
                                    >Baby Food</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Follow-On-6-12-months-KSpU8.html"
                                        >Follow On 6-12 months</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Growing-Up-Milk-3-qrad5.html"
                                        >Growing Up Milk 3+</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Infant-0-6-months-aKDfM.html"
                                        >Infant 0-6 months</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Maternal-Milk-Dp1AX.html"
                                        >Maternal Milk</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Toddler-Food-ii5dh.html"
                                        >Toddler Food</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Toddler-Milk-1-3yr-0Gq1B.html"
                                        >Toddler Milk 1-3yr</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/baby-feeding-tools-fqrwv.html"
                                    >Baby Care</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Feeding-Tools-TLLdP.html"
                                        >Feeding Tools</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/baby-cream-lotion.html"
                                        >Baby Cream &amp; Lotion</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/bath--body-wash-rdjcj.html"
                                        >Bath &amp; Body Wash Baby</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Diaper--Wipes-R9kOt.html"
                                        >Diaper &amp; Wipes</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/potty.html"
                                        >Potty</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/baby-care.html"
                                        >Baby Care</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/Baby-Fashion-hUS7v.html"
                                    >Baby Fashion</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Baby-Dress-0-23-months-RTpwi.html"
                                        >Baby Dress 0-23 months</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Boys-Dress--2-12-yr-XBwpm.html"
                                        >Boys Dress 2-12 yr</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Girls-Dress-2-12-yr-rdHB5.html"
                                        >Girls Dress 2-12 yr</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/kids-shoe.html"
                                        >Kids Shoe</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Winter-Fashion-Baby-NucaX.html"
                                        >Winter Fashion Baby</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Summer-Fashion-Baby-4dRCA.html"
                                        >Summer Fashion Baby</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Kids-Toy--Play-BsmPx.html"
                                    >Kids Toy &amp; Play</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/New-Born-Baby-88miJ.html"
                                    >New Born Baby</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Baby-Accessories-7lsdp.html"
                                    >Baby Accessories</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Maternity-ELBEf.html"
                                    >Maternity</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/jewelry.html"
                                ><img
                                  src="uploads/category/2022-03-19-6235a03a096f4.png"
                                  alt=""
                                />Jewelry</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/Anklet-zCWeZ.html"
                                    >Anklet</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Bangles-9bazU.html"
                                    >Bangles</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Chains-SVqkJ.html"
                                    >Chains</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Earrings-j7KBh.html"
                                    >Earrings</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Full-set-BtVkz.html"
                                    >Full set</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Locket-ZWuXT.html"
                                    >Locket</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Necklace-24Bq4.html"
                                    >Necklace</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Nose-Pin-wKOlb.html"
                                    >Nose Pin</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Pendants-Set-556Tk.html"
                                    >Pendants Set</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Rings-Vn9xg.html"
                                    >Rings</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Jewelry-Box-Ks9zZ.html"
                                    >Jewelry Box</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Hand-Made-Jewelry-naYLb.html"
                                    >Hand Made Jewelry</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Tikli-x31JW.html"
                                    >Tikli</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/daily-bazar.html"
                                ><img
                                  src="uploads/category/2022-04-18-625d2509a96be.png"
                                  alt=""
                                />Daily Bazar</a
                              >
                            </li>
                            <li>
                              <a href="category/groceries.html"
                                ><img
                                  src="uploads/category/2022-03-19-62358f77d86c8.png"
                                  alt=""
                                />Groceries</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a
                                    href="sub-category/fruits--vegetable-ehy1e.html"
                                    >Fresh Produce</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Vegetable-Gu3M4.html"
                                        >Vegetable</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Fruits-sVEMp.html"
                                        >Fruits</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Fish-143WQ.html"
                                        >Fish</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Meat-NX3E9.html"
                                        >Meat</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Dry-Fish-SOKqZ.html"
                                        >Dry Fish</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/Breakfast-Q8zSK.html"
                                    >Breakfast</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Honey--Spreads-B9Cry.html"
                                        >Honey &amp; Spreads</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Breakfast-Cereals-anWjn.html"
                                        >Breakfast Cereals</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Oatmeal-KwxyJ.html"
                                        >Oatmeal</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/Beverage-gdOLn.html"
                                    >Beverage</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Coffee--Tea-FzeUu.html"
                                        >Coffee &amp; Tea</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Energy-Drink-Fk3L7.html"
                                        >Energy Drink</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Juice--Flavoring-Syrups-NoGdB.html"
                                        >Juice &amp; Flavoring Syrups</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Soft-Drinks-MnZrY.html"
                                        >Soft Drinks</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Hot-Chocolate--Nutrition-Drinks-EQP2X.html"
                                        >Hot Chocolate &amp; Nutrition Drinks</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Powdered-Drink-Mixes-vQXQq.html"
                                        >Powdered Drink Mixes</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Drinking-Water-cq3ir.html"
                                        >Drinking Water</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/snakes-s2vz4.html"
                                    >Snakes</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/Bread-24NUC.html"
                                        >Bread</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Chips--Crisps-Tm733.html"
                                        >Chips &amp; Crisps</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Popcorn-9SeO8.html"
                                        >Popcorn</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Soups-vdSgX.html"
                                        >Soups</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Chanachur-Muri--Chira-tTNK1.html"
                                        >Chanachur, Muri &amp; Chira</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Noodles--Pasta-SUmrq.html"
                                        >Noodles &amp; Pasta</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Bread--Bakery-Xjj24.html"
                                    >Bread &amp; Bakery</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/cake--pastry-xec0k.html"
                                        >Cake &amp; Pastry</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Chocolate-Biscuits-K0y7b.html"
                                        >Chocolate Biscuits</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Toast-2On2q.html"
                                        >Toast</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Biscuits-MoIFw.html"
                                        >Biscuits</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/cooking-needs-ds8zf.html"
                                    >Cooking &amp; Baking Needs</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/baking-sjnup.html"
                                        >Flour</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Rice-4ovdY.html"
                                        >Rice</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Oil-uMjyg.html"
                                        >Oil</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Dal-Lvp6E.html"
                                        >Dal</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Spices-RRiWa.html"
                                        >Spices</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Pickles-BRXi0.html"
                                        >Pickles</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Shemai--Suji-IdnKM.html"
                                        >Shemai &amp; Suji</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Salt--Sugar-J5MAm.html"
                                        >Salt &amp; Sugar</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Ready-Mix-Edhy3.html"
                                        >Ready Mix</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Ghee-hknz1.html"
                                        >Ghee</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Mixer--Flavor-SfbcX.html"
                                        >Mixer &amp; Flavor</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/Frozen-WxxA7.html"
                                    >Frozen</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Ice-Cream-usUK7.html"
                                        >Ice Cream</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Convenience-Food-llPOC.html"
                                        >Convenience Food</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Dairy-Product-RfJOn.html"
                                    >Dairy Product</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Cheese--Yoghurt-1o39f.html"
                                        >Cheese &amp; Yoghurt</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Milk-pp1aq.html"
                                        >Milk</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Butter-eu0Fd.html"
                                        >Butter</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Desserts-1zoe8.html"
                                        >Desserts</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/laundry--house-hold-pdvxi.html"
                                    >Home &amp; Laundry</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/home--laundry-rzwgs.html"
                                        >Accessories</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Air-Care-kYt91.html"
                                        >Air Care</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Cleaning-Material-m1Dra.html"
                                        >Cleaning Material</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Detergent-Z1GEQ.html"
                                        >Detergent</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Dishwasher-GWgFA.html"
                                        >Dishwasher</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Insecticides-Lt1wh.html"
                                        >Insecticides</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Tissues-UXpC6.html"
                                        >Tissues</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Diabetic-Food-CrnCd.html"
                                    >Diabetic Food</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/confectionary.html"
                                    >Confectionary</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/organic.html"
                                    >Organic</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/masala.html">Masala</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/health-beauty.html"
                                ><img
                                  src="uploads/category/2022-04-17-625c3f790267c.png"
                                  alt=""
                                />Health &amp; Beauty</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a href="sub-category/fragrance.html"
                                    >Fragrance</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/women-care-d6x9x.html"
                                    >Feminine Care</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Mack-up-3LTA4.html"
                                    >Mack up</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/Lips-0U7eq.html"
                                        >Lips</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Nails-rKJdQ.html"
                                        >Nails</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Serums-QxZIq.html"
                                        >Serums</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Remover--Toner-FJyJX.html"
                                        >Remover &amp; Toner</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Eye-sUdTG.html"
                                        >Eye</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Face-rbkEZ.html"
                                        >Face</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Body-AKOYE.html"
                                        >Body</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Palettes--Sets-v1UKp.html"
                                        >Palettes &amp; Sets</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Make-Up-Accessories-5WaA0.html"
                                        >Make Up Accessories</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/Safety-Care-JWoFx.html"
                                    >Safety Care</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/hair%20care.html"
                                    >Hair Care</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/skin%20care.html"
                                    >Skin Care</a
                                  >
                                </li>
                                <li>
                                  <a
                                    href="sub-category/Face-Wash--Carve-0oqch.html"
                                    >Face Wash &amp; Carve</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Hair-Style-qfZey.html"
                                    >Hair Style</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/Beauty-Tools-O5wcR.html"
                                    >Beauty Tools</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="category/electronic-devices.html"
                                ><img
                                  src="uploads/category/2022-03-19-62358f95b41f1.png"
                                  alt=""
                                />Electronic Devices</a
                              >
                              <ul class="sub-cat">
                                <li>
                                  <a
                                    href="sub-category/mobile--gadgets-skcuk.html"
                                    >Mobile &amp; Gadgets</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/smart-phone-hlxeq.html"
                                        >Smart Phone</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a href="extra-category/vivo.html"
                                            >Vivo</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/oppo.html"
                                            >Oppo</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/walton.html"
                                            >Walton</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/xiaomi.html"
                                            >Xiaomi</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/realme.html"
                                            >Realme</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/nokia.html"
                                            >Nokia</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/iphone.html"
                                            >iPhone</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/maximus.html"
                                            >Maximus</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/symphony.html"
                                            >Symphony</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/tecno.html"
                                            >Tecno</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/infinix.html"
                                            >Infinix</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/featured-phone-w2zue.html"
                                        >Featured Phone</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/mobile-accessories-bkekg.html"
                                        >Mobile Accessories</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/laptop--computer-8jcwn.html"
                                    >Computer</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/laptop-2uf6q.html"
                                        >Laptop</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a
                                            href="extra-category/laptop-accessories.html"
                                            >Laptop Accessories</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/used-laptop.html"
                                            >Used Laptop</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/computer-dhkrq.html"
                                        >Desktop PC</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a
                                            href="extra-category/desktop-pc.html"
                                            >Desktop PC</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/gaming-pc.html"
                                            >Gaming PC</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/brand-pc.html"
                                            >Brand PC</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/mini-pc.html"
                                            >Mini PC</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/tablet-pc.html"
                                            >Tablet PC</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/all-in-one-pc.html"
                                            >All In One PC</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/pc%20component.html"
                                        >PC Component</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a
                                            href="extra-category/pc-casing.html"
                                            >Pc Casing</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/ssdhdd.html"
                                            >SSD/HDD</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/motherboard.html"
                                            >MotherBoard</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/processor.html"
                                            >Processor</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/monitor.html"
                                            >Monitor</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/mouse-keyboard.html"
                                            >Mouse &amp; Keyboard</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/ram.html"
                                            >Ram</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/cables--connector-vrnsq.html"
                                        >Cables &amp; Connector</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/sound-system-rnsff.html"
                                    >Sound System</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/networking.html"
                                    >Networking</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/Router-51Vga.html"
                                        >Router</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Wireless-Access-Point-CkeNV.html"
                                        >Wireless Access Point</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Radio-Link-N9IMD.html"
                                        >Radio Link</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/wifi-repeater-psrsf.html"
                                        >WiFi Repeater</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Network-Switch-83J0Z.html"
                                        >Network Switch</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/WiFi-Adapter-b2vkB.html"
                                        >WiFi Adapter</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Network-Storage-4Q3FX.html"
                                        >Network Storage</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Patch-Panel-8Vrht.html"
                                        >Patch Panel</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Network-Cable-P1GvK.html"
                                        >Network Cable</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/HDMI-Extender-PonfY.html"
                                        >HDMI Extender</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Networking-Accessories-L1HZw.html"
                                        >Networking Accessories</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/RJ45-Connector-xG0lV.html"
                                        >RJ45 Connector</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/software-8a30n.html"
                                    >Software</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a
                                        href="mini-category/Antivirus-o08tg.html"
                                        >Antivirus</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a href="extra-category/escan.html"
                                            >eScan</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/eset.html"
                                            >Eset</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/kaspersky.html"
                                            >Kaspersky</a
                                          >
                                        </li>
                                        <li>
                                          <a
                                            href="extra-category/bitdefender.html"
                                            >Bitdefender</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/panda.html"
                                            >Panda</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/mcafee.html"
                                            >McAfee</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/norton.html"
                                            >Norton</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a
                                    href="sub-category/cctv--security-9du4q.html"
                                    >CCTV &amp; Security</a
                                  >
                                </li>
                                <li>
                                  <a href="sub-category/print%20%26%20scan.html"
                                    >Print &amp; Scan</a
                                  >
                                  <ul class="sub-cat">
                                    <li>
                                      <a href="mini-category/Scanner-hVO8x.html"
                                        >Scanner</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/POS-Printer-CCVIA.html"
                                        >POS Printer</a
                                      >
                                      <ul class="sub-cat">
                                        <li>
                                          <a href="extra-category/motorola.html"
                                            >Motorola</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/huawei.html"
                                            >Huawei</a
                                          >
                                        </li>
                                        <li>
                                          <a href="extra-category/samsung.html"
                                            >Samsung</a
                                          >
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Barcode-Printer-sj4Tp.html"
                                        >Barcode Printer</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Barcode-Scanner-OGei7.html"
                                        >Barcode Scanner</a
                                      >
                                    </li>
                                    <li>
                                      <a href="mini-category/Toner-pviRy.html"
                                        >Toner</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Printer-Cartridge-VKiNJ.html"
                                        >Printer Cartridge</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Printer-Drum-bvWJF.html"
                                        >Printer Drum</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Printing-Accessories-bRL4W.html"
                                        >Printing Accessories</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Photocopier-yGyfO.html"
                                        >Photocopier</a
                                      >
                                    </li>
                                    <li>
                                      <a
                                        href="mini-category/Photo-Printer-SJcVW.html"
                                        >Photo Printer</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="sub-category/projection-hx1ks.html"
                                    >Projection</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>

              <div class="header-category-menu" style="float: left">
                <ul class="mega">
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/default.html"
                        alt=""
                      />Raint &amp;Tools</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/enamel-paint.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Enamel Paint
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-05-13-627e7f355f339.png"
                        alt=""
                      />Men Fashion</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/t-shirt.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-625ff96254499.jpg"
                            alt=""
                          />T-Shirt
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/polo-shirt.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-625ff9b0b2791.jpg"
                            alt=""
                          />Polo Shirt
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/pant.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-625ffa2c7d315.jpg"
                            alt=""
                          />Pant
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/suits.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-625fffa7419bb.jpg"
                            alt=""
                          />Suits
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-62600227e5c5c.html"
                            alt=""
                          />Accessories
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Men Fashion</p>
                          <li>
                            <a href="mini-category/belt-for-men.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Belt For Men
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/wallet-for-men.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Wallet For Men
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Glass-For-Men-5dVsV.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Glass For Men
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Shoe-For-Men-L08nX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Shoe For Men
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Other-For-Men-JjXHL.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Other For Men
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Watch-For-Men-swaMx.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Watch For Men
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-623597bde6a42.png"
                        alt=""
                      />Women Fashion</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/saree.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-05-13-627ead42dd37c.html"
                            alt=""
                          />Saree
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/lehenga-gown.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626002a738785.jpg"
                            alt=""
                          />Lehenga &amp; Gown
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/ladies-t-shirt-shirt.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626002cc4bcf8.jpg"
                            alt=""
                          />Ladies T-Shirt &amp; Shirt
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/ladies-pant-leggings.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626002feea11b.jpg"
                            alt=""
                          />Ladies Pant &amp; Leggings
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/unstitch-salwar-kamiz.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-6260032bedca0.jpg"
                            alt=""
                          />Unstitch Salwar Kamiz
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/borka-hijab.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-62600354e47be.jpg"
                            alt=""
                          />Borka &amp; Hijab
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/lawn-dress.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626003a97ab7a.jpg"
                            alt=""
                          />Lawn Dress
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/lingerie-sleep-wear.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626003e5927d6.jpg"
                            alt=""
                          />Lingerie &amp; Sleep Wear
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-62600437044e7.jpg"
                            alt=""
                          />Women Accessories
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Women Fashion</p>
                          <li>
                            <a href="mini-category/Ladies-Bags-ihYis.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ladies Bags
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Ladies-Shoe-9CrEH.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ladies Shoe
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/ladies-glass.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ladies Glass
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/winter-collection.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-6260045c03237.jpg"
                            alt=""
                          />Winter Collection
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/dupatta-shawls.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-20-626004d52e4a6.jpg"
                            alt=""
                          />Dupatta &amp; Shawls
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/tops-koti.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Tops &amp; Koti
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/women-kurtis-fotua.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Kurtis &amp; Fotua
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/women-party-wear.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Party Wear
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62359e5d3bbae.png"
                        alt=""
                      />Baby &amp; Toy</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Baby Food
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Baby &amp; Toy</p>
                          <li>
                            <a
                              href="mini-category/Follow-On-6-12-months-KSpU8.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Follow On 6-12 months
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Growing-Up-Milk-3-qrad5.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Growing Up Milk 3+
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Infant-0-6-months-aKDfM.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Infant 0-6 months
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Maternal-Milk-Dp1AX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Maternal Milk
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Toddler-Food-ii5dh.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Toddler Food
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Toddler-Milk-1-3yr-0Gq1B.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Toddler Milk 1-3yr
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Baby Care
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Baby &amp; Toy</p>
                          <li>
                            <a href="mini-category/Feeding-Tools-TLLdP.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Feeding Tools
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/baby-cream-lotion.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Baby Cream &amp; Lotion
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/bath--body-wash-rdjcj.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Bath &amp; Body Wash Baby
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Diaper--Wipes-R9kOt.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Diaper &amp; Wipes
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/potty.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Potty
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/baby-care.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Baby Care
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Baby Fashion
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Baby &amp; Toy</p>
                          <li>
                            <a
                              href="mini-category/Baby-Dress-0-23-months-RTpwi.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Baby Dress 0-23 months
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Boys-Dress--2-12-yr-XBwpm.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Boys Dress 2-12 yr
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Girls-Dress-2-12-yr-rdHB5.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Girls Dress 2-12 yr
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/kids-shoe.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Kids Shoe
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Winter-Fashion-Baby-NucaX.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Winter Fashion Baby
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Summer-Fashion-Baby-4dRCA.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Summer Fashion Baby
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/Kids-Toy--Play-BsmPx.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Kids Toy &amp; Play
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/New-Born-Baby-88miJ.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />New Born Baby
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Baby-Accessories-7lsdp.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Baby Accessories
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Maternity-ELBEf.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Maternity
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-6235a03a096f4.png"
                        alt=""
                      />Jewelry</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/Anklet-zCWeZ.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Anklet
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Bangles-9bazU.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Bangles
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Chains-SVqkJ.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Chains
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Earrings-j7KBh.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Earrings
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Full-set-BtVkz.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Full set
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Locket-ZWuXT.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Locket
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Necklace-24Bq4.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Necklace
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Nose-Pin-wKOlb.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Nose Pin
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Pendants-Set-556Tk.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Pendants Set
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Rings-Vn9xg.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Rings
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Jewelry-Box-Ks9zZ.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Jewelry Box
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Hand-Made-Jewelry-naYLb.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Hand Made Jewelry
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Tikli-x31JW.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Tikli
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="category/daily-bazar.html">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-04-18-625d2509a96be.png"
                        alt=""
                      />Daily Bazar</a
                    >
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62358f77d86c8.png"
                        alt=""
                      />Groceries</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Fresh Produce
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Vegetable-Gu3M4.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Vegetable
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Fruits-sVEMp.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Fruits
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Fish-143WQ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Fish
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Meat-NX3E9.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Meat
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Dry-Fish-SOKqZ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Dry Fish
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Breakfast
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Honey--Spreads-B9Cry.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Honey &amp; Spreads
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Breakfast-Cereals-anWjn.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Breakfast Cereals
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Oatmeal-KwxyJ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Oatmeal
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Beverage
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Coffee--Tea-FzeUu.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Coffee &amp; Tea
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Energy-Drink-Fk3L7.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Energy Drink
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Juice--Flavoring-Syrups-NoGdB.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Juice &amp; Flavoring Syrups
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Soft-Drinks-MnZrY.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Soft Drinks
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Hot-Chocolate--Nutrition-Drinks-EQP2X.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Hot Chocolate &amp; Nutrition Drinks
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Powdered-Drink-Mixes-vQXQq.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Powdered Drink Mixes
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Drinking-Water-cq3ir.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Drinking Water
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Snakes
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Bread-24NUC.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Bread
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Chips--Crisps-Tm733.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Chips &amp; Crisps
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Popcorn-9SeO8.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Popcorn
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Soups-vdSgX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Soups
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Chanachur-Muri--Chira-tTNK1.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Chanachur, Muri &amp; Chira
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Noodles--Pasta-SUmrq.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Noodles &amp; Pasta
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Bread &amp; Bakery
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/cake--pastry-xec0k.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cake &amp; Pastry
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Chocolate-Biscuits-K0y7b.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Chocolate Biscuits
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Toast-2On2q.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Toast
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Biscuits-MoIFw.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Biscuits
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Cooking &amp; Baking Needs
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/baking-sjnup.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Flour
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Rice-4ovdY.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Rice
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Oil-uMjyg.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Oil
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Dal-Lvp6E.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Dal
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Spices-RRiWa.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Spices
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Pickles-BRXi0.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Pickles
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Shemai--Suji-IdnKM.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Shemai &amp; Suji
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Salt--Sugar-J5MAm.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Salt &amp; Sugar
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Ready-Mix-Edhy3.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ready Mix
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Ghee-hknz1.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ghee
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Mixer--Flavor-SfbcX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Mixer &amp; Flavor
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Frozen
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Ice-Cream-usUK7.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Ice Cream
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Convenience-Food-llPOC.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Convenience Food
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Dairy Product
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/Cheese--Yoghurt-1o39f.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cheese &amp; Yoghurt
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Milk-pp1aq.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Milk
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Butter-eu0Fd.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Butter
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Desserts-1zoe8.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Desserts
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Home &amp; Laundry
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Groceries</p>
                          <li>
                            <a href="mini-category/home--laundry-rzwgs.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Accessories
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Air-Care-kYt91.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Air Care
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Cleaning-Material-m1Dra.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cleaning Material
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Detergent-Z1GEQ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Detergent
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Dishwasher-GWgFA.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Dishwasher
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Insecticides-Lt1wh.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Insecticides
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Tissues-UXpC6.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Tissues
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/Diabetic-Food-CrnCd.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Diabetic Food
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/confectionary.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Confectionary
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/organic.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Organic
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/masala.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Masala
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-04-17-625c3f790267c.png"
                        alt=""
                      />Health &amp; Beauty</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/fragrance.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Fragrance
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/women-care-d6x9x.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Feminine Care
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Mack up
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">
                            Health &amp; Beauty
                          </p>
                          <li>
                            <a href="mini-category/Lips-0U7eq.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Lips
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Nails-rKJdQ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Nails
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Serums-QxZIq.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Serums
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Remover--Toner-FJyJX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Remover &amp; Toner
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Eye-sUdTG.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Eye
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Face-rbkEZ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Face
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Body-AKOYE.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Body
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Palettes--Sets-v1UKp.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Palettes &amp; Sets
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Make-Up-Accessories-5WaA0.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Make Up Accessories
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/Safety-Care-JWoFx.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Safety Care
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/hair%20care.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Hair Care
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/skin%20care.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Skin Care
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Face-Wash--Carve-0oqch.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Face Wash &amp; Carve
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Hair-Style-qfZey.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Hair Style
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Beauty-Tools-O5wcR.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Beauty Tools
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62358f95b41f1.png"
                        alt=""
                      />Electronic Devices</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Mobile &amp; Gadgets
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Electronic Devices</p>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Smart Phone
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Mobile &amp;
                                  Gadgets</span
                                >
                              </p>
                              <li>
                                <a href="extra-category/vivo.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625fe3ebd165b.jpg"
                                    alt=""
                                  />

                                  Vivo
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/oppo.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625feaa01aaa8.jpg"
                                    alt=""
                                  />

                                  Oppo
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/walton.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625feb14cdd03.jpg"
                                    alt=""
                                  />

                                  Walton
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/xiaomi.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625feb56e577f.png"
                                    alt=""
                                  />

                                  Xiaomi
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/realme.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625fee95ad802.jpg"
                                    alt=""
                                  />

                                  Realme
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/nokia.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625feed155cb8.jpg"
                                    alt=""
                                  />

                                  Nokia
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/iphone.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625fef1b4f4ba.jpg"
                                    alt=""
                                  />

                                  iPhone
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/maximus.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625fef6de70ac.jpg"
                                    alt=""
                                  />

                                  Maximus
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/symphony.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625fefbb407cd.png"
                                    alt=""
                                  />

                                  Symphony
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/tecno.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625feff29b58b.png"
                                    alt=""
                                  />

                                  Tecno
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/infinix.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff02b0bfb6.png"
                                    alt=""
                                  />

                                  Infinix
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="mini-category/featured-phone-w2zue.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Featured Phone
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/mobile-accessories-bkekg.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Mobile Accessories
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Computer
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Electronic Devices</p>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Laptop
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Computer</span
                                >
                              </p>
                              <li>
                                <a
                                  href="extra-category/laptop-accessories.html"
                                >
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff14605ce9.png"
                                    alt=""
                                  />

                                  Laptop Accessories
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/used-laptop.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff17a5b30a.jpg"
                                    alt=""
                                  />

                                  Used Laptop
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Desktop PC
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Computer</span
                                >
                              </p>
                              <li>
                                <a href="extra-category/desktop-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff1a96aa1a.jpg"
                                    alt=""
                                  />

                                  Desktop PC
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/gaming-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-05-09-62794630367a8.jpg"
                                    alt=""
                                  />

                                  Gaming PC
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/brand-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff1ebd1127.jpg"
                                    alt=""
                                  />

                                  Brand PC
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/mini-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff22ddcf46.png"
                                    alt=""
                                  />

                                  Mini PC
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/tablet-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff25f3c38d.jpg"
                                    alt=""
                                  />

                                  Tablet PC
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/all-in-one-pc.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-05-09-627943bcc3680.jpg"
                                    alt=""
                                  />

                                  All In One PC
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              PC Component
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Computer</span
                                >
                              </p>
                              <li>
                                <a href="extra-category/pc-casing.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff51212ccf.jpg"
                                    alt=""
                                  />

                                  Pc Casing
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/ssdhdd.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff54a0443a.jpg"
                                    alt=""
                                  />

                                  SSD/HDD
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/motherboard.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff6520c627.jpg"
                                    alt=""
                                  />

                                  MotherBoard
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/processor.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff69b6112b.jpg"
                                    alt=""
                                  />

                                  Processor
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/monitor.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff6e1d0352.jpg"
                                    alt=""
                                  />

                                  Monitor
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/mouse-keyboard.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff71947e4f.jpg"
                                    alt=""
                                  />

                                  Mouse &amp; Keyboard
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/ram.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff748bd259.png"
                                    alt=""
                                  />

                                  Ram
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a
                              href="mini-category/cables--connector-vrnsq.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cables &amp; Connector
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/sound-system-rnsff.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Sound System
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/2022-04-17-625c4df370930.png"
                            alt=""
                          />Networking
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Electronic Devices</p>
                          <li>
                            <a href="mini-category/Router-51Vga.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Router
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Wireless-Access-Point-CkeNV.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Wireless Access Point
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Radio-Link-N9IMD.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Radio Link
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/wifi-repeater-psrsf.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              WiFi Repeater
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Network-Switch-83J0Z.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Network Switch
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/WiFi-Adapter-b2vkB.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              WiFi Adapter
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Network-Storage-4Q3FX.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Network Storage
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Patch-Panel-8Vrht.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Patch Panel
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Network-Cable-P1GvK.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Network Cable
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/HDMI-Extender-PonfY.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              HDMI Extender
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Networking-Accessories-L1HZw.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Networking Accessories
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/RJ45-Connector-xG0lV.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              RJ45 Connector
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Software
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Electronic Devices</p>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Antivirus
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Software</span
                                >
                              </p>
                              <li>
                                <a href="extra-category/escan.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff7795b3a5.jpg"
                                    alt=""
                                  />

                                  eScan
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/eset.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff7ac0e57f.jpg"
                                    alt=""
                                  />

                                  Eset
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/kaspersky.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff7d141e3e.jpg"
                                    alt=""
                                  />

                                  Kaspersky
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/bitdefender.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff82b6b2c8.jpg"
                                    alt=""
                                  />

                                  Bitdefender
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/panda.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff855724dc.jpg"
                                    alt=""
                                  />

                                  Panda
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/mcafee.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff88321be0.jpg"
                                    alt=""
                                  />

                                  McAfee
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/norton.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff8a463029.png"
                                    alt=""
                                  />

                                  Norton
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/cctv--security-9du4q.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />CCTV &amp; Security
                        </a>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Print &amp; Scan
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Electronic Devices</p>
                          <li>
                            <a href="mini-category/Scanner-hVO8x.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Scanner
                            </a>
                          </li>
                          <li>
                            <a href="javascript:void(0)">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              POS Printer
                            </a>
                            <ul class="sub-cat mcat">
                              <p class="cback">
                                <span id="sub-close"
                                  >Electronic Devices/ Print &amp; Scan</span
                                >
                              </p>
                              <li>
                                <a href="extra-category/motorola.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff074a2557.png"
                                    alt=""
                                  />

                                  Motorola
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/huawei.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff0a72a234.png"
                                    alt=""
                                  />

                                  Huawei
                                </a>
                              </li>
                              <li>
                                <a href="extra-category/samsung.html">
                                  <img
                                    style="
                                      width: 22px;
                                      height: 22px;
                                      margin-right: 10px;
                                      display: inline-block;
                                    "
                                    src="uploads/extra-category/2022-04-20-625ff0f1282ad.png"
                                    alt=""
                                  />

                                  Samsung
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="mini-category/Barcode-Printer-sj4Tp.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Barcode Printer
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Barcode-Scanner-OGei7.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Barcode Scanner
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Toner-pviRy.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Toner
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Printer-Cartridge-VKiNJ.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Printer Cartridge
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Printer-Drum-bvWJF.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Printer Drum
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Printing-Accessories-bRL4W.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Printing Accessories
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Photocopier-yGyfO.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Photocopier
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Photo-Printer-SJcVW.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Photo Printer
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="sub-category/projection-hx1ks.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Projection
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62358f876869a.png"
                        alt=""
                      />Home Appliance</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Small Appliances
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Home Appliance</p>
                          <li>
                            <a href="mini-category/Iron-53EGA.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Iron
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Vacuum-Cleaner-YyW85.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Vacuum Cleaner
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Fan-69LAT.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Fan
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Large Appliance
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Home Appliance</p>
                          <li>
                            <a href="mini-category/television-ajnkb.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Television
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Air-Conditioner-ueIgN.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Air Conditioner
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Washing-Machines-gNsHv.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Washing Machines
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Freezers-FVug8.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Freezers
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Refrigerators-Mg4xg.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Refrigerators
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="javascript:void(0)">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Kitchen Appliance
                        </a>

                        <ul class="sub-cat scat" style="background: #dcdcdc">
                          <p class="cback" id="sub-close">Home Appliance</p>
                          <li>
                            <a href="mini-category/Rice-Cooker-VJWae.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Rice Cooker
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Blender--Mixer-LcjeS.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Blender &amp; Mixer
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Electric-Kettle-00ypJ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Electric Kettle
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Fryer-0otTC.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Fryer
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Pressure-Cooker-DocUn.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Pressure Cooker
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Cooker--Gas-Stoves-ZYQOs.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cooker &amp; Gas Stoves
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/cook-wear-wgfwz.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Cook Ware
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Dine-Ware-RsmCQ.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Dine Ware
                            </a>
                          </li>
                          <li>
                            <a href="mini-category/Coffee-Machine-eNKsz.html">
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Coffee Machine
                            </a>
                          </li>
                          <li>
                            <a
                              href="mini-category/Kitchen-Accessories-RbY3a.html"
                            >
                              <img
                                style="
                                  width: 22px;
                                  height: 22px;
                                  margin-right: 10px;
                                  display: inline-block;
                                "
                                src="uploads/mini-category/default.html"
                                alt=""
                              />
                              Kitchen Accessories
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62358f63a2188.png"
                        alt=""
                      />Stationary &amp; Office</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/Paper--Notebooks-SMLKT.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Paper &amp; Notebooks
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Writing-Supplies-3bQxe.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Writing Supplies
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Desk-Organizer-p03nw.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Desk Organizer
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/File--Folder-MrTNY.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />File &amp; Folder
                        </a>
                      </li>
                      <li>
                        <a href="sub-category/Other-Stationary-jlaYa.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Other Stationary
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="javascript:void(0)">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-03-19-62358f4fab4a0.png"
                        alt=""
                      />Service</a
                    >
                    <ul class="pro">
                      <li>
                        <a href="sub-category/Scanner-hVO8x.html">
                          <img
                            style="
                              width: 22px;
                              height: 22px;
                              margin-right: 10px;
                              display: inline-block;
                            "
                            src="uploads/sub%20category/default.html"
                            alt=""
                          />Scanner
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="f-li">
                    <a href="category/books.html">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-04-18-625d33d3cec93.png"
                        alt=""
                      />Books</a
                    >
                  </li>
                  <li class="f-li">
                    <a href="category/electronics-accessories.html">
                      <img
                        style="
                          width: 22px;
                          height: 22px;
                          margin-right: 10px;
                          display: inline-block;
                        "
                        src="uploads/category/2022-05-13-627e7e1c8cfa2.png"
                        alt=""
                      />Electronics Accessories</a
                    >
                  </li>
                </ul>
              </div>
              <style>
                .mo-f-category {
                  position: absolute;
                  top: 0 !important;
                  width: 80% !important;
                  background: transparent !important;
                  left: 90px;
                  z-index: 99;
                  text-align: left;
                }
                .shop-category.tf .cat-row .cat-item {
                  width: 30%;
                  display: inline-block !important;
                  text-align: center;
                  background: #fff;
                  text-align: center;
                  padding: 15px 0;
                  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                  margin: 1% 1% 0 0;
                  border-radius: 5px;
                  text-decoration: none;
                  float: none;
                }
              </style>
              <div
                class="shop-category mo-f-category tf"
                style="padding-bottom: 20px; text-align: center"
              >
                <div class="" style="padding-right: 10px">
                  <div class="cat-row">
                    <a
                      href="sub-category/print%20%26%20scan.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Print &amp; Scan</h3>
                      </div>
                    </a>

                    <a href="sub-category/Chains-SVqkJ.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Chains</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/cooking-needs-ds8zf.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">
                          Cooking &amp; Baking Needs
                        </h3>
                      </div>
                    </a>

                    <a href="sub-category/lawn-dress.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img
                            src="uploads/category/2022-04-20-626003a97ab7a.html"
                            alt=""
                          />
                        </div>
                        <h3 style="font-size: 13px">Lawn Dress</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/fruits--vegetable-ehy1e.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Fresh Produce</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/cctv--security-9du4q.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">CCTV &amp; Security</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Dairy-Product-RfJOn.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Dairy Product</h3>
                      </div>
                    </a>

                    <a href="sub-category/t-shirt.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img
                            src="uploads/category/2022-04-20-625ff96254499.html"
                            alt=""
                          />
                        </div>
                        <h3 style="font-size: 13px">T-Shirt</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/ladies-t-shirt-shirt.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img
                            src="uploads/category/2022-04-20-626002cc4bcf8.html"
                            alt=""
                          />
                        </div>
                        <h3 style="font-size: 13px">
                          Ladies T-Shirt &amp; Shirt
                        </h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Bread--Bakery-Xjj24.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Bread &amp; Bakery</h3>
                      </div>
                    </a>

                    <a href="sub-category/Mack-up-3LTA4.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Mack up</h3>
                      </div>
                    </a>

                    <a href="sub-category/Earrings-j7KBh.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Earrings</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Baby-Accessories-7lsdp.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Baby Accessories</h3>
                      </div>
                    </a>

                    <a href="sub-category/snakes-s2vz4.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Snakes</h3>
                      </div>
                    </a>

                    <a href="sub-category/borka-hijab.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img
                            src="uploads/category/2022-04-20-62600354e47be.html"
                            alt=""
                          />
                        </div>
                        <h3 style="font-size: 13px">Borka &amp; Hijab</h3>
                      </div>
                    </a>

                    <a href="sub-category/Nose-Pin-wKOlb.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Nose Pin</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Pendants-Set-556Tk.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Pendants Set</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/women-kurtis-fotua.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Kurtis &amp; Fotua</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Beauty-Tools-O5wcR.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Beauty Tools</h3>
                      </div>
                    </a>

                    <a
                      href="sub-category/Large-Appliance-iRraJ.html"
                      class="cat-item"
                    >
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Large Appliance</h3>
                      </div>
                    </a>

                    <a href="sub-category/organic.html" class="cat-item">
                      <div class="">
                        <div class="thumbnail">
                          <img src="uploads/category/default.html" alt="" />
                        </div>
                        <h3 style="font-size: 13px">Organic</h3>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <style>
              .submenu:hover ul {
                display: block;
                left: 0;
                top: 45px;
                border: none;
              }
              @media (max-width: 1000px) {
                .authpro {
                  text-align: center;
                  display: block;
                  border-bottom: 1px solid gainsboro;
                  padding-top: 15px;
                }
              }
            </style>
            <div class="nav-menus">
              <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('shop') }}" class="">Shop</a></li>
                {{-- <li class="submenu" style="position: relative !important">
                  <a href="blogs.html">News feed</a>
                </li> --}}

                <li><a href="{{ route('order-track') }}" class="">Order Track</a></li>
                <!-- <li><a href="https://laravel-ecommerce.xyz/categories" class="">All Category</a></li> -->

                {{-- <li><a href="contact/form.html" class="">Easy Bazar</a></li> --}}
                <!--  <li><a href="https://laravel-ecommerce.xyz/sheba/list" class=""><i class="icofont icofont-live-support"></i> Sheba</a></li>  -->
                <!-- <li><a href="https://laravel-ecommerce.xyz/service/form" class=""><i class="icofont icofont-live-support"></i> Sheba</a></li> -->

                <li><a href="{{ route('about-us') }}">About Us</a></li>
                <li>
                  <div
                    class="side-menu-footer"
                    style="
                      display: none;
                      position: absolute;
                      bottom: 0;
                      text-align: center;
                      width: 100%;
                    "
                  >
                    <img
                      src="uploads/setting/logo.png"
                      alt="Application Logo"
                      style="padding: 0px 40px; width: 200px"
                    />
                    <p>MT Studio Ltd. 2022</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="advance-search" id="advance-search">
      <div class="search-box">
        <span id="advance-search-hide">
          <i class="fas fa-long-arrow-alt-left"></i> back</span
        >
        <form
          action="https://laravel-ecommerce.xyz/product/search"
          method="GET"
        >
          <div class="input-group">
            <input
              placeholder="Search Products"
              class="sear"
              type="search"
              name="keyword"
              id="keyword"
              required
            />
            <button class="input-group-addon" type="submit" name="go">
              <i class="icofont icofont-search"></i>
            </button>
          </div>
        </form>
      </div>
      <div id="search-view"></div>
    </section>

    <!--================header  Area end=================-->
    {{ $slot }}
    <!--================footer  Area start=================-->
    <style>
        .fixed-cart {
            width: 50px;
            text-align: center;
            background: #096629;
            color: white;
            display: block;
            height: 50px;
            border-radius: 5px;
            position: fixed;
            bottom: 100px;
            right: 30px;
            line-height: 17px;
            z-index: 999;
        }
    </style>
    <li class="fixed-cart d-none"><a href="cart.html"><span style="padding-top: 7px;display:block"><i
                    class="fas fa-shopping-bag" aria-hidden="true"></i></span> x 0 </a></li>
    <div class="footer-menu">
      <div class="container">
        <ul>
          <li>
            <a href="index.html"
              ><span><i class="fas fa-home" aria-hidden="true"></i></span>
              Home</a
            >
          </li>
          <li>
            <a href="cart.html"
              ><span
                ><i class="fas fa-shopping-bag" aria-hidden="true"></i
              ></span>
              Cart</a
            >
          </li>

          <li>
            <a href="login.html"
              ><span><i class="fas fa-user" aria-hidden="true"></i></span>
              Login</a
            >
          </li>
        </ul>
      </div>
    </div>
    <footer>
      <div class="containe">
        <div class="row">
          <!-- <div class="footer-item  col-lg-3 col-md-3 col-sm-12">
                <li id="nav_menu-2" class="widget widget_nav_menu"> 
                    <div style="margin-bottom: 20px;" class="apps footer-logo">
                     <a href="https://laravel-ecommerce.xyz">
                    <img src="https://laravel-ecommerce.xyz/uploads/setting/logo.png" alt="Application Logo" style="width: 150px">
                </a>
                </div>
                    <div class="item-content ic2">
                        <div class="menu-main-container">
                            <ul id="menu-main-18" class="menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </li>
            </div> -->
          <div class="footer-item col-lg-3 col-md-3 col-sm-12">
            <li id="nav_menu-2" class="widget widget_nav_menu">
              <div class="title t1">
                <span>Info</span>
                <span class="footer-sub-icon"
                  ><i class="icofont icofont-simple-right"></i
                ></span>
              </div>
              <div class="item-content ic1">
                <div class="menu-main-container">
                  <ul id="menu-main-18" class="menu">
                    <li><a href="Return%20Policy.html">Return Policy</a></li>
                    <li>
                      <a href="Support%20%26%20Policy.html"
                        >Support &amp; Policy</a
                      >
                    </li>
                    <li>
                      <a href="Term%20%26%20Conditions.html"
                        >Term &amp; Conditions</a
                      >
                    </li>
                    <li>
                      <a href="Privacy%20%26%20Policy.html"
                        >Privacy &amp; Policy</a
                      >
                    </li>
                    <li><a href="About%20Us.html">About Us</a></li>
                    <li><a href="login.html" class="">Live Chat</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </div>
          <div class="footer-item col-lg-3 col-md-3 col-sm-12">
            <li id="nav_menu-2" class="widget widget_nav_menu">
              <div class="title t3">
                <span>Menu</span>
                <span class="footer-sub-icon"
                  ><i class="icofont icofont-simple-right"></i
                ></span>
              </div>
              <div class="item-content ic3">
                <div class="menu-main-container">
                  <ul id="menu-main-18" class="menu">
                    <li
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"
                    >
                      <a href="cart.html">Cart</a>
                    </li>

                    <li
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"
                    >
                      <a href="login.html">Login</a>
                    </li>
                    <li
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"
                    >
                      <a href="register.html">Registration</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </div>

          <div class="footer-item col-lg-3 col-md-3 col-sm-12">
            <li id="nav_menu-2" class="widget widget_nav_menu">
              <div class="title t2">
                <span>Conatct US</span>
                <span class="footer-sub-icon"
                  ><i class="icofont icofont-simple-right"></i
                ></span>
              </div>
              <div class="item-content ic2">
                <div class="menu-main-container">
                  <ul style="opacity: 0.8" id="menu-main-18" class="menu">
                    <li style="line-height: 22px">
                      Shakpala, Near Baitus Saalam jame Moszid, Bogura, 745
                      Beparypara Rd
                    </li>
                    <li>Email: info@bogurashop.com</li>
                    <li>Contact no: +88 01718 996269</li>
                  </ul>
                </div>
              </div>
            </li>
          </div>
          <div class="footer-item col-lg-3 col-md-3 col-sm-12">
            <style>
              #nav_menu-2 .aroow2 {
                display: none;
              }
            </style>
            <li id="nav_menu-2" class="widget widget_nav_menu">
              <div class="title t4">
                <span>Get In Touch</span>
                <span class="footer-sub-icon"
                  ><i class="icofont icofont-simple-right"></i
                ></span>
              </div>

              <ul style="margin-top: 0" class="item-content ic4">
                <li class="s-l-i-3">
                  <a href="https://www.facebook.com/"
                    ><i
                      style="background: #3b5997"
                      class="icofont icofont-social-facebook"
                    ></i
                  ></a>
                </li>
                <li class="s-l-i-3">
                  <a href="https://www.instagram.com/"
                    ><i style="background: #e24667" class="fab fa-instagram"></i
                  ></a>
                </li>

                <li class="s-l-i-3">
                  <a href="https://chat.whatsapp.com/"
                    ><i
                      style="background: #439665"
                      class="icofont icofont-social-whatsapp"
                    ></i
                  ></a>
                </li>
                <li class="s-l-i-3">
                  <a href="https://twitter.com/"
                    ><i
                      style="background: #21a1f0"
                      class="icofont icofont-social-twitter"
                    ></i
                  ></a>
                </li>
                <li class="s-l-i-3">
                  <a href="https://bd.linkedin.com/companyname"
                    ><i
                      style="background: #21a1f0"
                      class="icofont icofont-social-linkedin"
                    ></i
                  ></a>
                </li>
              </ul>
              <div class="platform item-content ic4" style="margin-top: 20px">
                <div class="title t1" style="margin-bottom: 8px !important">
                  <span>Download Now!</span>
                </div>
                <ul style="margin-top: 0">
                  <li class="s-l-i-3">
                    <a style="opacity: 1" href="#"
                      ><img
                        style="
                          width: 165px;
                          border-radius: 5px;
                          border: 1px solid gainsboro;
                        "
                        src="assets/uploads/images/google-play-png-logo-3799.png"
                        alt=""
                    /></a>
                  </li>
                </ul>
              </div>
            </li>
          </div>
        </div>
      </div>
      <br />
      <div class="copy" style="background: #096629">
        <div class="containe">
          <div class="copy-rihgt-1 row">
            <p class="col-md-6" style="margin: 0 0px; color: white">
              © Bogura Shop 2022 || Laravel Ecommerce system by: Finva Soft
              Limited.
            </p>
            <p class="col-md-6" style="color: white; text-align: left"></p>
          </div>
        </div>
      </div>
    </footer>
    <!--================footer  Area end=================-->
    <script src="{{ asset('assets/frontend/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/slick.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/moment.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/toast.min.js')}}"></script>
    <script src="{{ asset('assets/frontend/js/Font-Awesome.js')}}"></script>

    <script
      type="text/javascript"
      src="{{ asset('vendor/mckenziearts/laravel-notify/js/notify.js') }}"
    ></script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form586921032993702",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form174491210014817",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form606426009052068",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form502249082728206",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form763535503151947",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form498049422866684",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form417086008067390",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form22016039388411",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form743146659468725",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form498049422866684",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form763535503151947",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form502249082728206",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form256375586968935",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form366439666907535",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form774014782991068",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form223093365286577",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form404818781288504",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form606426009052068",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form324362235328436",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form355001876363797",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form974028687836365",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form275410982344695",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form388077239258160",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form174491210014817",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form417086008067390",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form22016039388411",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form743146659468725",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form498049422866684",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form763535503151947",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form502249082728206",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form573305055193771",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form857226982585362",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form540176981583910",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form860437608300685",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form521598694944954",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form586921032993702",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form502249082728206",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form22016039388411",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form606426009052068",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form366439666907535",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form498049422866684",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form256375586968935",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form417086008067390",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form404818781288504",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form223093365286577",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form743146659468725",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form860437608300685",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      // form submit
      $(document).on(
        "submit",
        "#submit_payment_form521598694944954",
        function (e) {
          e.preventDefault();

          let action = $(this).attr("action");
          var formData = $(this).serialize();
          $.ajax({
            type: "POST",
            url: action,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              loader(true);
            },
            success: function (response) {
              responseMessage(
                response.alert,
                response.message,
                response.alert.toLowerCase()
              );
            },
            complete: function () {
              loader(false);
            },
            error: function (xhr) {
              if (xhr.status == 422) {
                if (typeof xhr.responseJSON.errors !== "undefined") {
                  $.each(xhr.responseJSON.errors, function (key, error) {
                    $("small." + key + "").text(error);
                    $("#" + key + "").addClass("is-invalid");
                  });
                  responseMessage("Error", xhr.responseJSON.message, "error");
                }
              } else if (xhr.status == 401) {
                alert("please login");
                window.location = "login.html";
              } else {
                responseMessage(xhr.status, xhr.statusText, "error");
              }
            },
          });
        }
      );

      // response message hande
      function responseMessage(heading, message, icon) {
        $.toast({
          heading: heading,
          text: message,
          icon: icon,
          position: "top-right",
          stack: false,
        });
      }

      // loader handle this function
      function loader(status) {
        if (status == true) {
          $("#loading-image").removeClass("d-none").addClass("d-block");
        } else {
          $("#loading-image").addClass("d-none").removeClass("d-block");
        }
      }
    </script>
    <script>
      $(document).on("click", "#productInfo", function (e) {
        let url = $(this).data("url");
        $.ajax({
          type: "GET",
          url: url,
          dataType: "JSON",
          success: function (response) {
            var result = response;

            if (result[0].discount_price > 0) {
              $("#nhide").show();
              $("#nprice").text("Discount Price :");
              $("span#item_price").text(" " + result[0].regular_price);
              $("span#del_price").text(" " + result[0].discount_price);
            } else {
              $("#nhide").hide();
              $("#nprice").text("Regular Price :");
              $("span#del_price").text(" " + result[0].regular_price);
            }

            let colors = "";
            let sizes = "";
            $.each(result[0].colors, function (key, color) {
              colors +=
                '<label class="btn rounded-circle p-3 m-1 color" style="background: ' +
                color.code +
                '">';
              colors +=
                '<input type="radio" name="color" autocomplete="off" value="' +
                color.slug +
                '">';
              colors += "</label>";
            });

            sizes += '<div class="col-12 pl-0">';
            sizes += "<p><strong>Select Size:</strong></p>";
            sizes += "</div>";
            $.each(result[0].sizes, function (key, size) {
              sizes += '<div class="form-check col-2 col-sm-1">';
              sizes +=
                '<input class="form-check-input" type="radio" name="size" value="' +
                size.name +
                '">';
              sizes +=
                '<label class="form-check-label" for="flexRadioDefault2">' +
                size.name +
                "</label>";
              sizes += "</div>";
            });
            let image =
              '<img src="/uploads/product/' +
              result[0].image +
              '" class="img-responsive img-fluid"/>';

            $("#cart-img").html(image);
            $("#colors").html(colors);
            $("#attributes_all").html(result[1]);
            $("#attr_values").html(result[2]);
            $("input#id").val(result[0].id);
          },
          complete: function () {
            $("#cart-modal").modal("show");
          },
          error: function (xhr) {
            $.toast({
              heading: xhr.status,
              text: xhr.responseJSON.message,
              icon: "error",
              position: "top-right",
              stack: false,
            });
          },
        });
      });
      $(document).on("click", "#productInfo1", function (e) {
        let url = $(this).data("url");
        $.ajax({
          type: "GET",
          url: url,
          dataType: "JSON",
          success: function (response) {
            var result = response;
            $("span#item_price").text(" " + result[0].regular_price);
            $("span#del_price").text(" " + result[3].price);

            let colors = "";
            let sizes = "";
            $.each(result[0].colors, function (key, color) {
              colors +=
                '<label class="btn rounded-circle p-3 m-1 color" style="background: ' +
                color.code +
                '">';
              colors +=
                '<input type="radio" name="color" autocomplete="off" value="' +
                color.slug +
                '">';
              colors += "</label>";
            });

            sizes += '<div class="col-12 pl-0">';
            sizes += "<p><strong>Select Size:</strong></p>";
            sizes += "</div>";
            $.each(result[0].sizes, function (key, size) {
              sizes += '<div class="form-check col-2 col-sm-1">';
              sizes +=
                '<input class="form-check-input" type="radio" name="size" value="' +
                size.name +
                '">';
              sizes +=
                '<label class="form-check-label" for="flexRadioDefault2">' +
                size.name +
                "</label>";
              sizes += "</div>";
            });
            let image =
              '<img src="/uploads/product/' +
              result[0].image +
              '" class="img-responsive img-fluid"/>';
            let camp =
              ' <input type="hidden" name="camp" id="camp" value="' +
              result[3].id +
              '">';

            $("#cart-img").html(image);
            $("#colors").html(colors);
            $("#attributes_all").html(result[1]);
            $("#attr_values").html(result[2]);
            $("#attr_values").append(camp);
            $("input#id").val(result[0].id);
          },
          complete: function () {
            $("#cart-modal").modal("show");
          },
          error: function (xhr) {
            $.toast({
              heading: xhr.status,
              text: xhr.responseJSON.message,
              icon: "error",
              position: "top-right",
              stack: false,
            });
          },
        });
      });
      $(document).on("click", ".color", function (e) {
        $(".color").removeClass("active");
        $(this).addClass("active");
        let value = $(this).children('input[name="color"]').val();
        $("input#color").val(value);
        let product = $("input#id").val();
        let dynamic_price = $("input.dynamic_price").val();
        let formData = $("#addToCart").serialize();
        $.ajax({
          type: "POST",
          url: "/get/color/price",
          data: formData,
          dataType: "JSON",
          success: function (response) {
            $("#del_price").html(response);
            $(".dynamic_price").val(response);
          },
        });
      });
      $(document).on("click", ".get_attri_price", function (e) {
        let formData = $("#addToCart").serialize();
        $.ajax({
          type: "POST",
          url: "/get/attr/price",
          data: formData,
          dataType: "JSON",
          success: function (response) {
            $("#del_price").html(response);
            $(".dynamic_price").val(response);
          },
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $(".value-plus").on("click", function () {
          var divUpd = $(this).parent().find(".value"),
            newVal = parseInt(divUpd.val(), 10) + 1;
          divUpd.val(newVal);
          $("input#qty").val(newVal);
        });

        $(".value-minus").on("click", function () {
          var divUpd = $(this).parent().find(".value"),
            newVal = parseInt(divUpd.val(), 10) - 1;
          if (newVal >= 1) {
            divUpd.val(newVal);
            $("input#qty").val(newVal);
          }
        });

        $(document).on("submit", "#addToCart", function (e) {
          e.preventDefault();

          let url = $(this).attr("action");
          let type = $(this).attr("method");
          let btn = $(this);
          let formData = $(this).serialize();

          $.ajax({
            type: type,
            url: url,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              $(btn).attr("disabled", true);
            },
            success: function (response) {
              if (response.alert != "Congratulations") {
                $.toast({
                  heading: "Warning",
                  text: response.message,
                  icon: "warning",
                  position: "top-right",
                  stack: false,
                });
              } else {
                $("span#total-cart-amount").text(response.subtotal);

                $.toast({
                  heading: "Congratulations",
                  text: response.message,
                  icon: "success",
                  position: "top-right",
                  stack: false,
                });

                $("#cart-modal").modal("hide");
              }
            },
            complete: function () {
              $(btn).attr("disabled", false);
            },
            error: function (xhr) {
              $.toast({
                heading: xhr.status,
                text: xhr.responseJSON.message,
                icon: "error",
                position: "top-right",
                stack: false,
              });
            },
          });
        });
        $(document).on("submit", "#subs", function (e) {
          e.preventDefault();

          let url = $(this).attr("action");
          let type = $(this).attr("method");
          let btn = $(this);
          let formData = $(this).serialize();

          $.ajax({
            type: type,
            url: url,
            data: formData,
            dataType: "JSON",
            beforeSend: function () {
              $(btn).attr("disabled", true);
            },
            success: function (response) {
              if (response.alert != "Congratulations") {
                $.toast({
                  heading: "Warning",
                  text: response.message,
                  icon: "warning",
                  position: "top-right",
                  stack: false,
                });
              } else {
                $("span#total-cart-amount").text(response.subtotal);

                $.toast({
                  heading: "Congratulations",
                  text: response.message,
                  icon: "success",
                  position: "top-right",
                  stack: false,
                });

                $("#cart-modal").modal("hide");
              }
            },
            complete: function () {
              $(btn).attr("disabled", false);
            },
            error: function (xhr) {
              $.toast({
                heading: xhr.status,
                text: xhr.responseJSON.message,
                icon: "error",
                position: "top-right",
                stack: false,
              });
            },
          });
        });
      });

      $(".slider").slick({
        draggable: true,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        dots: true,
        fade: true,
        speed: 500,
        infinite: true,
        cssEase: "ease-in-out",
        touchThreshold: 100,
      });
      $(".autoplay2").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        arrows: false,
        speed: 500,
        infinite: true,
        cssEase: "ease-in-out",
        touchThreshold: 100,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
            },
          },
        ],
      });
    </script>

    <script src="../www.gstatic.com/firebasejs/8.2.0/firebase.js"></script>
    <script>
      var firebaseConfig = {
        apiKey: "AIzaSyBWkcZFIoW0b-jfstIQG9RpiYrAFVbK8nA",
        authDomain: "demon-ca45b.firebaseapp.com",
        projectId: "demon-ca45b",
        storageBucket: "demon-ca45b.appspot.com",
        messagingSenderId: "1049200760757",
        appId: "1:1049200760757:web:0f17e9a2a7ae51a697ebfc",
      };

      firebase.initializeApp(firebaseConfig);
      const messaging = firebase.messaging();

      messaging
        .requestPermission()
        .then(function () {
          return messaging.getToken();
        })
        .then(function (token) {
          console.log(token);

          $.ajaxSetup({
            headers: {
              "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
          });

          $.ajax({
            url: "https://laravel-ecommerce.xyz/save-token",
            type: "POST",
            data: {
              token: token,
            },
            dataType: "JSON",
            success: function (response) {
              alert("Token saved successfully.");
            },
            error: function (err) {
              console.log("User Chat Token Error" + err);
            },
          });
        })
        .catch(function (err) {
          console.log("User Chat Token Error" + err);
        });

      messaging.onMessage(function (payload) {
        const noteTitle = payload.notification.title;
        const noteOptions = {
          body: payload.notification.body,
          icon: payload.notification.icon,
        };
        new Notification(noteTitle, noteOptions);
      });
    </script>
    <script type="text/javascript">
      $(window).on("load", function () {
        $("#myModal").modal("show");
      });
    </script>

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <input
      type="hidden"
      value="https://laravel-ecommerce.xyz/product/advance-search"
      id="aurl"
      name=""
    />
    <script>
      $(document).on("keyup", "#keyword", function (e) {
        let key = $(this).val();
        let url = $("#aurl").val();
        $.ajax({
          type: "POST",
          url: url,
          data: {
            key: key,
            _token: $('meta[name="csrf-token"]').attr("content"),
          },
          dataType: "JSON",
          success: function (response) {
            $("#search-view").html(response);
          },
          error: function (xhr) {
            console.log(xhr.statusText);
          },
        });
      });
    </script>
    @livewireScripts
  </body>

  <!-- Mirrored from laravel-ecommerce.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 06:06:06 GMT -->
</html>
