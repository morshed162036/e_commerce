    <style>
        .product-image {
            float: left;
            width: 150px;
        }

        .product-details {
            float: left;
            width: 25%;
        }

        .product-price {
            float: left;
            width: 12%;
        }

        .product-quantity {
            float: left;
            width: 20%;
        }

        .product-removal {
            float: left;
            width: 60px;
        }

        .product-line-price {
            float: left;
            width: 12%;
            text-align: right;
        }

        .shopping-cart {
            margin-top: 20px;
        }

        /* This is used as the traditional .clearfix class */
        .group:before,
        .shopping-cart:before,
        .column-labels:before,
        .product:before,
        .totals-item:before,
        .group:after,
        .shopping-cart:after,
        .column-labels:after,
        .product:after,
        .totals-item:after {
            content: "";
            display: table;
        }

        .group:after,
        .shopping-cart:after,
        .column-labels:after,
        .product:after,
        .totals-item:after {
            clear: both;
        }

        .group,
        .shopping-cart,
        .column-labels,
        .product,
        .totals-item {
            zoom: 1;
        }




        label {
            color: #aaa;
        }


        /* Column headers */
        .column-labels label {
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
        }


        /* Product entries */
        .product {
            border-bottom: 1px solid #eee;
        }

        .product .product-image {
            text-align: center;
        }

        .product .product-image img {
            width: 100px;
        }

        .product .product-details .product-title {
            margin-right: 20px;
        }

        .product .product-details .product-description {
            margin: 5px 20px 5px 0;
            line-height: 1.4em;
        }

        .product .product-quantity input {
            width: 40px;
        }

        .product .remove-product {
            border: 0;
            padding: 4px 8px;
            background-color: #c66;
            color: #fff;
            font-size: 12px;
            border-radius: 3px;
            text-align: center;
            width: 50px;
        }

        .product .remove-product:hover {
            background-color: #a44;
        }

        /* Totals section */
        .totals .totals-item {
            float: right;
            clear: both;
            width: 100%;
            margin-bottom: 10px;
        }

        .totals .totals-item label {
            float: left;
            clear: both;
            width: 79%;
            text-align: right;
        }

        .totals .totals-item .totals-value {
            float: right;
            width: 21%;
            text-align: right;
        }


        .checkout {
            float: right;
            border: 0;
            margin-top: 20px;
            padding: 6px 25px;
            background-color: #6b6;
            color: #fff;
            font-size: 25px;
            border-radius: 3px;
        }

        .checkout:hover {
            background-color: #494;
        }

        .product-all .product {
            background: white;
            padding: 5px !important;
        }

        /* Make adjustments for tablet */
        @media screen and (max-width: 767px) {

            .shopping-cart {
                margin: 0;
                padding-top: 20px;
                border-top: 1px solid #eee;
            }

            .column-labels {
                display: none;
            }

            .product-image {
                width: auto;
            }

            .m-price {
                display: block !important;
            }

            .product-details {
                float: none;
                margin-bottom: 10px;
                width: auto;
            }

            .product-price {
                clear: both;
                line-height: 20px;
                width: 100px;
            }

            .product-quantity {
                width: 140px;
            }


            .product-removal {
                width: auto;
                line-height: 32px;
            }

            .product-line-price {
                width: 70px;
                line-height: 20px;
                margin-left: 10px;
            }

            .btn-primary {
                width: 100%;
            }
        }

        /* Make more adjustments for phone */
        @media screen and (max-width: 450px) {
            .product-removal {
                float: right;
            }

            .product-line-price {
                float: left;
                clear: left;
                width: auto;
                margin-top: 10px;
                text-align: left;
                margin-left: 0;
            }

            .product .product-line-price:before {
                content: "Item Total: $";
            }

            .totals .totals-item label {
                width: 60%;
            }

            .totals .totals-item .totals-value {
                width: 40%;
            }
        }
    </style>


    <div class="checkout-right">
        <div class="containe">
            <div class="shopping-cart">
                <div class="column-labels">
                    <label class="product-image">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>


                <div class="product-all">





                </div>

            </div>
            <div class="text-right mt-2">
                <a href="javascript:void(0)" class="btn btn-primary disabled">
                    <i class="icofont icofont-shopping-cart"></i>
                    Checkout Now
                </a>
            </div>

        </div>
    </div>