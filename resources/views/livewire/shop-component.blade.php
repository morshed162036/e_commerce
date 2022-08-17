    <!--================product  Area start=================-->
    <div class="container product-page" style="margin-top: 10px">

        <div class="row">
            <!-- tittle heading -->
            <div class="menu-overly2"></div>
            <div class="side-bar col-md-3">

                <form action="https://laravel-ecommerce.xyz/product/filter" method="GET" id="form">
                    <div class="range">
                        <h3 class="title" style="padding-top: 10px;margin-bottom: 5px;">Price</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                <div id="slider-range"></div>
                                <input type="text" name="amount" id="amount"
                                    style="border: 0; color: #ffffff; font-weight: normal;" />

                            </li>
                        </ul>
                    </div>
                    <div class="left-side">
                        <h3 class="title" style="padding-top: 10px;margin-bottom: 5px;">Color</h3>
                        <ul>
                            <style>
                                .cck {
                                    width: 25px;
                                    height: 25px;
                                    border-radius: 50%;
                                    cursor: pointer;
                                    border: 2px solid white;

                                }

                                .cck input {
                                    opacity: 0;
                                }

                                .cck.active {
                                    border: 2px solid blue;
                                }
                            </style>
                            <li style="display:inline-block;">
                                <label class="cck" for="black" style="background:#000000">
                                    <input type="checkbox" id="black" name="colors[]" class="checked" value="black">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="red" style="background:#fb0007">
                                    <input type="checkbox" id="red" name="colors[]" class="checked" value="red">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="blue" style="background:#0000ff">
                                    <input type="checkbox" id="blue" name="colors[]" class="checked" value="blue">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="white" style="background:#ffffff">
                                    <input type="checkbox" id="white" name="colors[]" class="checked" value="white">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="pink" style="background:#f200fe">
                                    <input type="checkbox" id="pink" name="colors[]" class="checked" value="pink">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="green" style="background:#038104">
                                    <input type="checkbox" id="green" name="colors[]" class="checked" value="green">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="yellow" style="background:#ffff00">
                                    <input type="checkbox" id="yellow" name="colors[]" class="checked" value="yellow">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="gray" style="background:#808080">
                                    <input type="checkbox" id="gray" name="colors[]" class="checked" value="gray">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="silver" style="background:#c0c0c0">
                                    <input type="checkbox" id="silver" name="colors[]" class="checked" value="silver">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="orange" style="background:#ffa500">
                                    <input type="checkbox" id="orange" name="colors[]" class="checked" value="orange">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="purple" style="background:#800080">
                                    <input type="checkbox" id="purple" name="colors[]" class="checked" value="purple">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="maroon" style="background:#800000">
                                    <input type="checkbox" id="maroon" name="colors[]" class="checked" value="maroon">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="olive" style="background:#808000">
                                    <input type="checkbox" id="olive" name="colors[]" class="checked" value="olive">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="cream" style="background:#ffffcc">
                                    <input type="checkbox" id="cream" name="colors[]" class="checked" value="cream">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="gold" style="background:#ffd700">
                                    <input type="checkbox" id="gold" name="colors[]" class="checked" value="gold">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="nutmeg" style="background:#7f2e2e">
                                    <input type="checkbox" id="nutmeg" name="colors[]" class="checked" value="nutmeg">
                                </label>
                            </li>
                            <li style="display:inline-block;">
                                <label class="cck" for="cowboy" style="background:#532929">
                                    <input type="checkbox" id="cowboy" name="colors[]" class="checked" value="cowboy">
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="customer-rev left-side">
                        <h3 class="title" style="padding-top: 10px;margin-bottom: 5px;">Rating</h3>
                        <ul>
                            <li>
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" id="5">
                                    <label for="5">☆</label>
                                    <input type="radio" name="rating" value="4" id="4">
                                    <label for="4">☆</label>
                                    <input type="radio" name="rating" value="3" id="3">
                                    <label for="3">☆</label>
                                    <input type="radio" name="rating" value="2" id="2">
                                    <label for="2">☆</label>
                                    <input type="radio" name="rating" value="1" id="1">
                                    <label for="1">☆</label>
                                </div>
                            </li>
                        </ul>
                    </div>



                    <div class="left-side action">
                        <ul>
                            <li><input value="Filter" type="submit"></li>
                            <li> <a class="redirect"
                                    style="background: #ff5722;color: white;border: none;padding: 8px 25px;display: inline-block;"
                                    href="{{ route('shop') }}">Reset</a> </li>
                        </ul>
                    </div>
                    <style>
                        .action ul li {
                            display: inline-block;
                        }

                        .action ul li input {
                            display: block;
                            background: #2abbe8;
                            color: white;
                            padding: 8px 25px;
                            border-radius: 4px;
                            border: none;
                            font: 16px;
                        }
                    </style>
                </form>

            </div>

            <div class="products col-md-9">

                <div class="container">
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="card col-md-12">
                            <div style="padding: 10px 0px;">
                                <div class="filter">
                                    <div class="view-filter">
                                        <span id="filter-open" style="display: none;" class="filter-open"><i
                                                class="fas fa-filter"></i></span>
                                        <span class="grid active" id="grid"><i class="fas fa-th"></i></span>
                                        <span class="list" id="list"><i class="icofont icofont-listine-dots"></i></span>
                                    </div>

                                    <div class="short">
                                        Sorting By:
                                        <select style="border: 1px solid gainsboro;" id="sort">
                                            <option value="New To Old">New To Old</option>
                                            <option value="Old To New">Old To New</option>
                                            <option value="High To Low">High To Low</option>
                                            <option value="Low To High">Low To High</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row " id="grid-view">

                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/586921032993702.html">
                                            <img src="uploads/product/2022-05-21-6289517dda593.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/586921032993702.html">
                                            <h5>Baby Care 100% Natural Avocado Extract Baby Products Oil</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/586921032993702.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳71.25</strong> <del>৳75</del></h6>
                                    <div class="cbtn">
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form586921032993702">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="586921032993702">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/174491210014817.html">
                                            <img src="uploads/product/2022-05-21-6289510de0549.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/174491210014817.html">
                                            <h5>Pansari Poha Poha Chiwda</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/174491210014817.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳42.75</strong> <del>৳45</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/174491210014817"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form174491210014817">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="174491210014817">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/606426009052068.html">
                                            <img src="uploads/product/2022-05-20-6287794fc107e.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/606426009052068.html">
                                            <h5>Vivo-Y33s</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/606426009052068.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳20500</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/606426009052068"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form606426009052068">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="606426009052068">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/502249082728206.html">
                                            <img src="uploads/product/2022-05-19-6286476c10462.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/502249082728206.html">
                                            <h5>Lime Green Litchi Silk Saree</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/502249082728206.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳2700</strong> <del>৳3000</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/502249082728206"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form502249082728206">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="502249082728206">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/763535503151947.html">
                                            <img src="uploads/product/2022-05-22-628a2adf3d660.jpg" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/763535503151947.html">
                                            <h5>Lime Green color Kanchipuram Silk Saree</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">৳200 OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/763535503151947.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳2300</strong> <del>৳2500</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/763535503151947"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form763535503151947">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="763535503151947">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/498049422866684.html">
                                            <img src="uploads/product/2022-05-18-6285382d9c46b.png" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/498049422866684.html">
                                            <h5>Ready Saree with Blouse</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/498049422866684.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳1615</strong> <del>৳1700</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/498049422866684"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form498049422866684">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="498049422866684">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/743146659468725.html">
                                            <img src="uploads/product/2022-05-18-6285389c5f3f2.png" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/743146659468725.html">
                                            <h5>Ready Saree with Embroidery Work Blouse</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/743146659468725.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳2150</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/743146659468725"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form743146659468725">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="743146659468725">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/22016039388411.html">
                                            <img src="uploads/product/2022-05-18-628538b92f923.png" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/22016039388411.html">
                                            <h5>Ready Ruffle Saree With Gujrati Embroidery Work Blouse</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/22016039388411.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳1035</strong> <del>৳1150</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/22016039388411"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form22016039388411">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="22016039388411">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/417086008067390.html">
                                            <img src="uploads/product/2022-05-18-628538e6bc977.png" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/417086008067390.html">
                                            <h5>Saree With Ready Blouse</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/417086008067390.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳1755</strong> <del>৳1950</del></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/417086008067390"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form417086008067390">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="417086008067390">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/521598694944954.html">
                                            <img src="uploads/product/2022-05-10-627abbe48c705.png" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/521598694944954.html">
                                            <h5>Avonee Pants Baby Diaper 2 MiniS (4-8 KG) 5PCS</h5>
                                        </a>

                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">20% OFF</h6>
                                            <h6></h6>
                                        </span>
                                    </div>
                                    <div class="quick-view"> <a href="product/521598694944954.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳600</strong> <del>৳750</del></h6>
                                    <div class="cbtn">
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form521598694944954">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="521598694944954">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/860437608300685.html">
                                            <img src="uploads/product/2022-05-15-628154971b48d.webp"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/860437608300685.html">
                                            <h5>Himalaya Oil Powder</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/860437608300685.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳520</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/860437608300685"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form860437608300685">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="860437608300685">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/540176981583910.html">
                                            <img src="uploads/product/d2nXPiYVpxcgmkDIASKqdKDq2y0T7fymQgsM86Xq.jpg"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/540176981583910.html">
                                            <h5>Biomil 3 Follow-Up Milk Formula Powder (1-2 Years) 180gm</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/540176981583910.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳220</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/540176981583910"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form540176981583910">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="540176981583910">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/857226982585362.html">
                                            <img src="uploads/product/J4K4fsR4iutmEGF2cUnbf9z2VwHVAqQKmszq47VP.jpg"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/857226982585362.html">
                                            <h5>Biomil 3 Follow-Up Milk Formula Powder (1-2 years) 350gm</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/857226982585362.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳455</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/857226982585362"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form857226982585362">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="857226982585362">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/573305055193771.html">
                                            <img src="uploads/product/xmUwkI0g5G8pPh9zoiHgIRXfpdgTSJ8rfNrAzR8Q.jpg"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/573305055193771.html">
                                            <h5>Biomil 3 Follow-Up Milk Formula Powder (1-2 years) Tin 1kg</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/573305055193771.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳1345</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/573305055193771"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form573305055193771">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="573305055193771">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/388077239258160.html">
                                            <img src="uploads/product/d6VQoOKgo6lu4dZ3DLW5fNVCalnjkYFGKaSXienO.webp"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/388077239258160.html">
                                            <h5>Radhuni Biryani Masala</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/388077239258160.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳100</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/388077239258160"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form388077239258160">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="388077239258160">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product col-lg-3 col-md-3 col-sm-4 col-4">

                            <div class="product-wrapper" style="height: 310px;">
                                <div class="pin">
                                    <div class="thumbnail">
                                        <a href="product/275410982344695.html">
                                            <img src="uploads/product/WCWkzuE9XcbFSoDqOvvYCH5HJCorC9goe3w1a05Y.jpg"
                                                alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="details">
                                        <div class="rating1" style="font-size:12px;text-align: left;">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">(0)</span>
                                            </div>
                                        </div>

                                        <a href="product/275410982344695.html">
                                            <h5>Fortune Biryani Special Basmati Rice 1 kg</h5>
                                        </a>

                                    </div>
                                    <div class="quick-view"> <a href="product/275410982344695.html"><i
                                                class="icofont icofont-search"></i> Quick View</a></div>
                                </div>

                                <div class="home-add2">
                                    <h6><strong style="color: #108b3a">৳100</strong></h6>
                                    <div class="cbtn">
                                        <button type="submit" class="redirect" style="margin-top: 10px;"
                                            data-url="https://laravel-ecommerce.xyz/product/info/275410982344695"
                                            id="productInfo" type="submit" title="Add To Cart"><i
                                                class="fal fa-shopping-cart" aria-hidden="true"></i> </button>
                                        <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                            id="submit_payment_form275410982344695">
                                            <input type="hidden" name="_token"
                                                value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input type="hidden"
                                                name="product_id" value="275410982344695">
                                            <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                type="submit" title="Wishlist"><i class="fal fa-heart"
                                                    aria-hidden="true"></i> </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row " id="list-view" style="display: none;">
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/586921032993702.html">
                                                <img src="uploads/product/2022-05-21-6289517dda593.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/586921032993702.html">
                                            <h4><strong>Baby Care 100% Natural Avocado Extract Baby Products
                                                    Oil</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Baby Care 100% Natural Avocado Extract Baby Products Oil<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.71.25</strong>
                                                            <del>Tk.75</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 713 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form586921032993702">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="586921032993702">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/174491210014817.html">
                                                <img src="uploads/product/2022-05-21-6289510de0549.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/174491210014817.html">
                                            <h4><strong>Pansari Poha Poha Chiwda</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Pansari Poha Poha Chiwda<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.42.75</strong>
                                                            <del>Tk.45</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 428 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/174491210014817"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form174491210014817">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="174491210014817">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/606426009052068.html">
                                                <img src="uploads/product/2022-05-20-6287794fc107e.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/606426009052068.html">
                                            <h4><strong>Vivo-Y33s</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Vivo-Y33s<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.20500</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong>Black Silver </td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 205000 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/606426009052068"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form606426009052068">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="606426009052068">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/502249082728206.html">
                                                <img src="uploads/product/2022-05-19-6286476c10462.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/502249082728206.html">
                                            <h4><strong>Lime Green Litchi Silk Saree</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Lime Green Litchi Silk Saree<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.2700</strong>
                                                            <del>Tk.3000</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 27000 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/502249082728206"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form502249082728206">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="502249082728206">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/763535503151947.html">
                                                <img src="uploads/product/2022-05-22-628a2adf3d660.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/763535503151947.html">
                                            <h4><strong>Lime Green color Kanchipuram Silk Saree</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Lime Green color Kanchipuram Silk Saree<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.2300</strong>
                                                            <del>Tk.2500</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 23000 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">Tk.200 OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/763535503151947"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form763535503151947">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="763535503151947">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/498049422866684.html">
                                                <img src="uploads/product/2022-05-18-6285382d9c46b.png"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/498049422866684.html">
                                            <h4><strong>Ready Saree with Blouse</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Ready Saree with Blouse<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.1615</strong>
                                                            <del>Tk.1700</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong>Blue Green Maroon
                                                        Orange </td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 16150 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">5% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/498049422866684"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form498049422866684">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="498049422866684">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/743146659468725.html">
                                                <img src="uploads/product/2022-05-18-6285389c5f3f2.png"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/743146659468725.html">
                                            <h4><strong>Ready Saree with Embroidery Work Blouse</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p><span
                                                        style="color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;">Ready
                                                        Saree with Embroidery Work Blouse</span><br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.2150</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong>Green </td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 21500 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/743146659468725"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form743146659468725">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="743146659468725">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/22016039388411.html">
                                                <img src="uploads/product/2022-05-18-628538b92f923.png"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/22016039388411.html">
                                            <h4><strong>Ready Ruffle Saree With Gujrati Embroidery Work Blouse</strong>
                                            </h4>
                                            <p style="margin-bottom: 10px">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><span style="background-color: transparent;">Shipping In
                                                                    CIty<br></span></td>
                                                            <td>40.Tk<br></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Out<br></td>
                                                            <td>150.Tk</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span style="background-color: transparent;">Delivery
                                                                    In</span></td>
                                                            <td>72Hours<br></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.1035</strong>
                                                            <del>Tk.1150</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 10350 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/22016039388411"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form22016039388411">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="22016039388411">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/417086008067390.html">
                                                <img src="uploads/product/2022-05-18-628538e6bc977.png"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/417086008067390.html">
                                            <h4><strong>Saree With Ready Blouse</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p><span
                                                        style="color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;">Saree
                                                        With Ready Blouse</span><br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.1755</strong>
                                                            <del>Tk.1950</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 17550 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">10% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/417086008067390"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form417086008067390">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="417086008067390">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/521598694944954.html">
                                                <img src="uploads/product/2022-05-10-627abbe48c705.png"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/521598694944954.html">
                                            <h4><strong>Avonee Pants Baby Diaper 2 MiniS (4-8 KG) 5PCS</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Avonee Pants Baby Diaper 2 MiniS (4-8 KG) 5PCS<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.600</strong>
                                                            <del>Tk.750</del></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 6000 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <span style="color: #ea6721;">

                                            <h6 class="dis-label">20% OFF</h6>
                                            <h6></h6>
                                        </span>
                                        <div class="list-card">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form521598694944954">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="521598694944954">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/860437608300685.html">
                                                <img src="uploads/product/2022-05-15-628154971b48d.webp"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/860437608300685.html">
                                            <h4><strong>Himalaya Oil Powder</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Himalaya Oil Powder<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.520</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 520 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/860437608300685"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form860437608300685">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="860437608300685">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/540176981583910.html">
                                                <img src="uploads/product/d2nXPiYVpxcgmkDIASKqdKDq2y0T7fymQgsM86Xq.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/540176981583910.html">
                                            <h4><strong>Biomil 3 Follow-Up Milk Formula Powder (1-2 Years)
                                                    180gm</strong></h4>
                                            <p style="margin-bottom: 10px"></p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.220</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 220 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/540176981583910"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form540176981583910">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="540176981583910">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/857226982585362.html">
                                                <img src="uploads/product/J4K4fsR4iutmEGF2cUnbf9z2VwHVAqQKmszq47VP.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/857226982585362.html">
                                            <h4><strong>Biomil 3 Follow-Up Milk Formula Powder (1-2 years)
                                                    350gm</strong></h4>
                                            <p style="margin-bottom: 10px"></p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.455</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 455 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/857226982585362"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form857226982585362">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="857226982585362">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/573305055193771.html">
                                                <img src="uploads/product/xmUwkI0g5G8pPh9zoiHgIRXfpdgTSJ8rfNrAzR8Q.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/573305055193771.html">
                                            <h4><strong>Biomil 3 Follow-Up Milk Formula Powder (1-2 years) Tin
                                                    1kg</strong></h4>
                                            <p style="margin-bottom: 10px"></p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.1345</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 1345 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/573305055193771"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form573305055193771">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="573305055193771">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/388077239258160.html">
                                                <img src="uploads/product/d6VQoOKgo6lu4dZ3DLW5fNVCalnjkYFGKaSXienO.webp"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/388077239258160.html">
                                            <h4><strong>Radhuni Biryani Masala</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Free Home Delivery In Jhenaidah CT.<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.100</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 0 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/388077239258160"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form388077239258160">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="388077239258160">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                        <div class="product col-lg-12" style="height: initial;">
                            <div class="product-wrapper list-comp">
                                <div class="pin row">
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <a href="product/275410982344695.html">
                                                <img src="uploads/product/WCWkzuE9XcbFSoDqOvvYCH5HJCorC9goe3w1a05Y.jpg"
                                                    alt="Product Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="details col-md-8">
                                        <a href="product/275410982344695.html">
                                            <h4><strong>Fortune Biryani Special Basmati Rice 1 kg</strong></h4>
                                            <p style="margin-bottom: 10px">
                                                <p>Free Home Delivery In Jhenaidah CT.<br></p>
                                            </p>
                                        </a>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th>MRP </th>

                                                    <td>
                                                        <h6><strong style="color: #108b3a">Tk.100</strong></h6>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>Colour </th>
                                                    <td><strong style="margin: 0px 10px">:</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Point </th>
                                                    <td><strong style="margin: 0px 10px">:</strong> 0 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="rating1">
                                            <div>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span style="color: #333;display: inline-block;">0 rating</span>
                                            </div>
                                        </div>


                                        <div class="list-card">
                                            <input style="margin-top: 10px;"
                                                data-url="https://laravel-ecommerce.xyz/product/info/275410982344695"
                                                id="productInfo" type="submit" value="add to cart">
                                            <form action="https://laravel-ecommerce.xyz/wishlist/add" method="post"
                                                id="submit_payment_form275410982344695">
                                                <input type="hidden" name="_token"
                                                    value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu"> <input
                                                    type="hidden" name="product_id" value="275410982344695">
                                                <button style="margin-top: 5px;background:#a2acb5" class="redirect"
                                                    type="submit"><i class="fal fa-heart" aria-hidden="true"></i>
                                                    Wishlist</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <style>
                            .low-warning {
                                padding: 8px 30px;
                                border-radius: 5px;
                                color: white;
                                margin-top: 20px;
                            }
                        </style>
                        <style>
                            .list-card {
                                display: flex;
                                align-items: baseline;
                            }

                            .list-card input,
                            .list-card form {
                                flex: 1;
                                margin-left: 5px;
                            }

                            .list-card input {
                                margin-left: 0;
                                margin-right: 5px;
                            }
                        </style>
                    </div>
                    <div class="row">
                        <div class="load ajax-loading col-lg-3 col-md-3 col-sm-6 col-6" style="display: none;">
                            <div class="covera skeletona">
                                <img id="cover" src="#" />
                            </div>
                            <div class="contenta">
                                <h2 id="title" class="skeletona"></h2>
                                <small id="subtitle" class="skeletona"></small>
                                <small id="subtitle" class="skeletona2 skeletona"></small>
                                <div style="text-align: center;">
                                    <p id="about" class="skeletona"></p>
                                    <p id="about" class="skeletona"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================product  Area End=================-->

            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->
    <div class="modal" id="cart-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Add To Cart</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="cart-img"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="row ml-1">
                                <div class="col-12 pl-0 mb-2" id="nhide">
                                    <p><strong>Regular Price:</strong><span id="item_price"></span>tk</p>
                                </div>
                                <div class="col-12 pl-0 mb-2">
                                    <p><strong id="nprice">Discount Price:</strong><span id="del_price"></span>tk</p>
                                </div>
                            </div>
                            <div class="row ml-1">
                                <div class="col-12 pl-0 mb-2">
                                    <p><strong>Select Color:</strong></p>
                                </div>

                                <div class="btn-group btn-group-toggle btn-color-group d-block mt-n2 ml-n2"
                                    data-toggle="buttons" id="colors">

                                </div>
                            </div>
                            <div class="row ml-1 mb-2" id="attributes_all">

                            </div>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <input type="text" class="entry value" value="1">
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <form action="https://laravel-ecommerce.xyz/add/cart" method="post" id="addToCart">
                        <input type="hidden" name="_token" value="gfMciBjO1mjBfzAiUlTUWr5SBT0tfXSiV6wssCCu">
                        <fieldset>
                            <input required type="hidden" name="id" id="id">
                            <input required type="hidden" name="qty" id="qty" value="1">
                            <input required type="hidden" value="blank" name="color" id="color">
                            <div id="attr_values"></div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </div>
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
                <li><a href="index.html"><span><i class="fas fa-home" aria-hidden="true"></i></span> Home</a></li>
                <li><a href="cart.html"><span><i class="fas fa-shopping-bag" aria-hidden="true"></i></span> Cart</a>
                </li>

                <!-- <li><a href="https://laravel-ecommerce.xyz/cart"><img src="https://t4.ftcdn.net/jpg/01/36/29/27/240_F_136292799_kapdXE2Vhrk0ndKsZk8nyEvg3VwBuwwU.jpg" alt=""></a></li> -->
                <li><a href="login.html"><span><i class="fas fa-user" aria-hidden="true"></i></span> Login</a></li>



            </ul>
        </div>
    </div>