<!doctype html>
<html lang="en">

<head>
    <title>Mustafiz eCommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css"
        integrity="sha512-v8QQ0YQ3H4K6Ic3PJkym91KoeNT5S3PnDKvqnwqFD1oiqIl653crGZplPdU5KKtHjO0QKcQ2aUlQZYjHczkmGw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <link rel="stylesheet" href="{{ asset('customers/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customers/css/style.css') }}">

</head>

<body>
    <header>
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-8">
                        <p class="mb-0 top-message text-white">Summer Sale For All Swim Suits And Free Express Delivery
                            - OFF
                            50%! <a href="#"></a></p>
                    </div>

                    <div class="dropdown show dropleft">
                        <a class="btn text-white border-0 dropdown-toggle lan-dropdown" href="#" role="button"
                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            English
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark sohoj_navbar bg-dark sohoj-navbar-light" id="sohoj-navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">Sohoj <span>Shop</span></a>
                <form action="#" class="searchform order-sm-start order-lg-last mt-3">
                    <div class="input-group ">
                        <input type="text" class="form-control header-search"
                            placeholder="What are you looking for?">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text header-search-btn" id="basic-addon2"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div>
                        <a href="" class="heart-icon">
                            <i class="far fa-heart"></i>

                        </a>
                    </div>
                    <div>
                        <a href="cartPage.html" class="cart-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <span class="cart-count">2</span>
                        </a>
                    </div>
                    <div>

                        <div class="dropdown dropleft user-dropdown">
                            <button class=" dropdown-toggle border-0  header-user-btn" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="singUp.html">
                                    <i class="far fa-user users-icon"></i> Manage My Account
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-shopping-bag users-icon"></i> My Order
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-times-circle users-icon"></i>My Cancelation
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="far fa-star users-icon"></i>My Reviews
                                </a>
                                <a class="dropdown-item" href="#">
                                    <svg class="users-icon" xmlns="http://www.w3.org/2000/svg" height="18"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                    </svg>
                                    Logout
                                </a>

                            </div>
                        </div>
                    </div>

                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sohoj-nav"
                    aria-controls="sohoj-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="sohoj-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">Page 1</a>
                                <a class="dropdown-item" href="#">Page 2</a>
                                <a class="dropdown-item" href="#">Page 3</a>
                                <a class="dropdown-item" href="#">Page 4</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Catalog</a></li>
                        <li class="nav-item"><a href="/product_details.html" class="nav-link">Product Details</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

    </header>
    <section class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="category-menu">
                    <ul class="p-0 m-0">
                        <li class="category-item" onclick="toggleSubmenu('womenFashion')">
                            Woman’s Fashion <i class="fas fa-chevron-right"></i>
                        </li>
                        <ul id="womenFashion" class="subcategory" style="display: none;">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <li class="category-item" onclick="toggleSubmenu('menFashion')">
                            Men’s Fashion <i class="fas fa-chevron-right"></i>
                        </li>
                        <ul id="menFashion" class="subcategory" style="display: none;">
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Watches</a></li>
                        </ul>

                        <li class="category-item">Electronics</li>
                        <li class="category-item">Home & Lifestyle</li>
                        <li class="category-item">Medicine</li>
                        <li class="category-item">Sports & Outdoor</li>
                        <li class="category-item">Baby’s & Toys</li>
                        <li class="category-item">Groceries & Pets</li>
                        <li class="category-item">Health & Beauty</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 p-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://ebdsolution.com/wp-content/uploads/2022/12/best-gaming-laptop-model-entry-header-opt.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://cdn.thewirecutter.com/wp-content/media/2024/09/iphone-2048px-6990.jpg?auto=webp&quality=75&width=1024" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://elchapuzasinformatico.com/wp-content/uploads/2024/11/Apple-vende-mas-iPhone-16-que-iPhone-15-en-el-mismo-periodo-de-tiempo.jpg	" alt="Third slide">
                        </div>
                    </div>
                    {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
     </a>  --}}
                </div>
            </div>
        </div>

    </section>
    <!-- flash sale -->
    <section class="container mt-5">
        <div class="sec-cat">
            <div></div>
            <p>Today's</p>

        </div>
        <div class="d-flex ">
            <h3 class="sec-title">Flash Sales</h3>

            <div class="countdown hero_count">
                <div class="running">
                    <timer class="time">
                        <div>
                            <p>Days</p>
                            <div>

                                <span class="days"></span>
                                <span class="clone">:</span>
                            </div>
                        </div>
                        <div>
                            <p>Hours</p>
                            <div>

                                <span class="hours"></span>
                                <span class="clone">:</span>
                            </div>

                        </div>
                        <div>
                            <div>

                                <p>Minutes</p>
                                <span class="seconds"></span>
                            </div>
                        </div>




                    </timer>


                </div>
            </div>
        </div>

        <div class="owl-carousel flash_sale mt-5">

            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>

        </div>


        <div class="mx-auto all-products">

            <a href="" class="btn btn-primary">View All Products</a>
        </div>

    </section>
    <!-- flash sale end -->
    <!-- category  -->
    <section class="container mt-5">
        <div class="sec-cat">
            <div></div>
            <p>Categories</p>

        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="sec-title">Browse By Category</h3>

            <div>
                <a href="" class="btn btn-primary"> View All</a>
            </div>
        </div>

        <div class="owl-carousel category mt-5">

            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWIZYNsZMfg6VBiuGdAg59JgcNkfXwOyxpIA&s" alt="Phones">
                <p>Phones</p>
            </div>
            <div class="category-box">
                <img src="https://i0.wp.com/camerabazar.net/wp-content/uploads/2024/03/Canon-eos-R100.jpeg" alt="Phones">
                <p>Camera</p>
            </div>
            <div class="category-box">
                <img src="https://sm.pcmag.com/pcmag_uk/photo/l/lenovo-leg/lenovo-legion-tower-7i-gen-8-2024_rg7h.jpg" alt="Phones">
                <p>Computer</p>
            </div>
            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjlDyhylKoZuj8DbJ-bdTaXqRxJGN3vAbSZw&s" alt="Phones">
                <p>Gamepad</p>
            </div>
            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkbbG5kD726502-oCNBAu0UyAuP9jlAFmrpg&s" alt="Phones">
                <p>Headphone</p>
            </div>
            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1jwsOYXnQxGyzSC3mIfg1pjXHa89ItYymQQ&s" alt="Phones">
                <p>SmartWatch</p>
            </div>
            <div class="category-box">
                <img src="https://www.caseking.de/dw/image/v2/BKRR_PRD/on/demandware.static/-/Sites-master-catalog-caseking/default/dwbb7609e9/images/pim/SIPC/SIPC-685/SIPC-685_7ed12945375b63141948b9f1e37cec47fa03f4cc.jpg?sw=731" alt="Phones">
                <p>PC </p>
            </div>
            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNiuOSdwV5VxNk7JlCd832wnWzFpTGzkN1ig&s" alt="Phones">
                <p>Cosmetics</p>
            </div>
            <div class="category-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEyCe7j7GA3SzDm5lK8mBaRthbU-qnKoQTag&s" alt="Phones">
                <p>Watches</p>
            </div>


        </div>


    </section>
    <!-- category end -->
    <!-- Best Selling  -->
    <section class="container mt-5">
        <div class="sec-cat">
            <div></div>
            <p>This Month</p>

        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="sec-title">Best Selling Products</h3>

            <div>
                <a href="" class="btn btn-primary"> View All</a>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-md-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- Best selling end -->

    <!-- Offer banner -->
    <div class="container  mt-5">
        <img class="offer-banner" src="images/benner/offer-banner.png" alt="">

    </div>
    <!-- Offer banner end -->

    <!-- Best Selling  -->
    <section class="container mt-5">
        <div class="sec-cat">
            <div></div>
            <p>Our Products</p>

        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="sec-title">Explore Oure Products</h3>


        </div>

        <div class="row my-5">
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3  my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card product-card">
                    <span class="badge bg-danger discount-badge">-40%</span>
                    <div class="right-icon">
                        <button>
                            <i class="far fa-heart"></i>
                        </button>
                        <button>
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                    <div class="image-container">
                        <img src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg"
                            class="card-img-top" alt="Gamepad">
                        <button class="btn btn-dark add-to-cart">Add To Cart</button>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">HAVIT HV-G92 Gamepad</h6>
                        <p class="price ">$120 <span class="old-price text-muted">$160</span></p>
                        <p class="rating text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-muted">(88)</span>

                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="mx-auto all-products">

            <a href="" class="btn btn-primary">View All Products</a>
        </div>


    </section>
    <!-- Best selling end -->

    <!-- New Arrival -->
    <section class="container mb-5">
        <div class="sec-cat">
            <div></div>
            <p>Featured</p>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="sec-title">New Arrival</h3>


        </div>

        <div class=" mt-5 new-arrival ">
            <div class="featured-image " style="background-image: url('https://hips.hearstapps.com/hmg-prod/images/esq240112-digital-ecomm-playstationps5-0305-679133a09328d.jpg?crop=0.569xw:0.853xh;0.221xw,0.0337xh&resize=1200:*');">
                <div class="text-danger">
                    <h4>PlayStation 5</h4>
                    <p>Black and White version of the PS5 coming out on sale.</p>
                    <a href="">Shop Now</a>
                </div>
            </div>

            <div class="w-50 ">

                <div class="featured-image featured-second "
                    style="background-image: url('https://thumbs.dreamstime.com/b/background-beauty-make-up-cosmetic-care-yellow-generative-ai-273600122.jpg');">
                    <div class="text-success">
                        <h4>Women’s Collections</h4>
                        <p>Featured woman collections that give you another vibe.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>


                <div class="d-flex new-arrival">
                    <div class="w-50 mt-4 featured-image featured-third"
                        style="background-image: url('https://img.joomcdn.net/0ef6267e12d4e992e4869f1283a36046d62de76f_original.jpeg');">
                        <div class="text-danger">
                            <h4>Speakers</h4>
                            <p>Amazon wireless speakers</p>
                            <a href="">Shop Now</a>
                        </div>
                    </div>

                    <div class="w-50 mt-4 featured-image featured-third ml-4"
                        style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr45MOu6f-jHjg2Ls-KLt2wiIUO3JPikaEKQ&s');">
                        <div class="text-danger">
                            <h4>Perfume</h4>
                            <p>GUCCI INTENSE OUD EDP</p>
                            <a href="">Shop Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- featured products end -->
    <!--  Info -->
    <section class="container mt-xxl">
        <div class="row">
            <div class="col-md-4 mt-5 info-item">
                <div class="ico-sec">
                    <i class="fas fa-shipping-fast icon"></i>
                </div>
                <h4>FREE AND FAST DELIVERY</h4>
                <p>Free delivery for all orders over $140</p>
            </div>
            <div class="col-md-4 mt-5 info-item">
                <div class="ico-sec">
                    <i class="fas fa-headphones-alt"></i>
                </div>
                <h4>24/7 CUSTOMER SERVICE</h4>
                <p>Friendly 24/7 customer support</p>
            </div>
            <div class="col-md-4 mt-5 info-item">
                <div class="ico-sec">
                    <svg height="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>

                </div>
                <h4>MONEY BACK GUARANTEE</h4>
                <p>We reurn money within 30 days</p>
            </div>
        </div>

    </section>

    <!-- Info end -->

    <footer class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-3 footer-item">
                    <h4>Exclusive</h4>
                    <p class="footer-item-subtitle">Subscribe</p>
                    <p>Get 10% off your first order</p>
                    <div class="col-10 p-0 mt-3 input-group subscribe mb-3">
                        <input type="text" class="form-control" placeholder="Enter your email"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <button class="input-group-text" id="basic-addon2"><img src="images/right.png"
                                alt=""></button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 footer-item">
                            <h4>Support</h4>
                            <p>111 Bijoy sarani, Dhaka, DH 1515, Bangladesh.</p>
                            <p>exclusive@gmail.com</p>
                            <p>+88015-88888-9999</p>
                        </div>
                        <div class="col-md-4 footer-item">
                            <h4>Account</h4>
                            <ul>
                                <li><a href="singUp.html">My Account</a> </li>
                                <li><a href="singUp.html">Login / Register</a> </li>
                                <li><a href="cartPage.html">Cart </a> </li>
                                <li><a href="wishlist.html">Whishlist</a> </li>
                                <li><a href="">Shop</a> </li>
                            </ul>

                        </div>
                        <div class="col-md-4 footer-item">
                            <h4>Quick Link</h4>
                            <ul>
                                <li><a href="">Privacy Policy</a> </li>
                                <li><a href="">Terms Of Use</a> </li>
                                <li><a href="">FAQ </a> </li>
                                <li><a href="">Contact</a> </li>

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 footer-item">
                    <h4>Download App</h4>
                    <p style="font-size: 10px;">Save $3 with App New User Only</p>
                    <div class="row mt-3">
                        <div class="col-md-5 p-0">
                            <img class="w-100" src="https://hexdocs.pm/qr_code/docs/qrcode.svg" alt="Our bar code">
                        </div>
                        <div class="col-md-6 mt-3">
                            <img class="w-100 "
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1280px-Google_Play_Store_badge_EN.svg.png"
                                alt="Play store logo">
                            <img class="w-100 pt-3"
                                src="https://www.proludic.com/wp-content/uploads/2024/03/logo-Apple-Store-Disponible-sur.png"
                                alt="apple store logo ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('customers/js/popper.js') }}"></script>
    <script src="{{ asset('customers/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('customers/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('customers/js/plugins/multi-countdown.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="{{ asset('customers/js/main.js') }}"></script>

    <script>
        function toggleSubmenu(id) {
            var submenu = document.getElementById(id);
            if (submenu.style.display === "block") {
                submenu.style.display = "none";
            } else {
                submenu.style.display = "block";
            }
        }
    </script>

    <script>
        /* Only for Demo proposal */
        var date = new Date(); // Now
        date.setDate(date.getDate() + 10); // Set now + 30 days as the new date
        const ye = new Intl.DateTimeFormat('en', {
            year: 'numeric'
        }).format(date);
        const mo = new Intl.DateTimeFormat('en', {
            month: 'numeric'
        }).format(date);
        const da = new Intl.DateTimeFormat('en', {
            day: '2-digit'
        }).format(date);
        const dateText = ye + '/' + mo + '/' + da;
    </script>
    <script>
        $('.hero_count').attr('data-date', dateText);
    </script>



    <script>
        $('.flash_sale').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            nav: true,
            navText: [
                '<i class="fas fa-long-arrow-alt-left"></i>',
                '<i class="fas fa-long-arrow-alt-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });
    </script>

    <script>
        $('.category').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            nav: true,
            navText: [
                '<i class="fas fa-long-arrow-alt-left"></i>',
                '<i class="fas fa-long-arrow-alt-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>

</body>

</html>
