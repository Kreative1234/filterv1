<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="https://mdbootstrap.com/previews/ecommerce-demo/css/mdb.ecommerce.min.css">
  <!-- Your custom styles (optional) -->

  <style>
      .loader-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        z-index: 998;
      }
      .loader-overlay .preloader-wrapper {
        position: fixed;
        top: 50%;
      }
  </style>

</head>

<body class="skin-light">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar navbar-transparent">

      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="https://mdbecommerce.com/">
          <i class="fab fa-mdb fa-3x" alt="mdb logo"></i>
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Right -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#!" class="nav-link navbar-link-2 waves-effect">
                <span class="badge badge-pill red">1</span>
                <i class="fas fa-shopping-cart pl-0"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true">
                <i class="united kingdom flag m-0"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#!">Action</a>
                <a class="dropdown-item" href="#!">Another action</a>
                <a class="dropdown-item" href="#!">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link waves-effect">
                Shop
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link waves-effect">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link waves-effect">
                Sign in
              </a>
            </li>
            <li class="nav-item pl-2 mb-2 mb-md-0">
              <a href="#!" type="button"
                class="btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign
                up</a>
            </li>
          </ul>

        </div>
        <!-- Links -->
      </div>

    </nav>
    <!-- Navbar -->

    <div class="jumbotron jumbotron-image color-grey-light"
      style="background-image: url('https://mdbootstrap.com/img/Photos/Others/clothes(5)-crop.jpg'); height: 400px;">
      <div class="mask rgba-black-strong d-flex align-items-center h-100">
        <div class="container text-center white-text py-5">
          <h1 class="mb-0">Shop</h1>
        </div>
      </div>
    </div>

  </header>
  <!--Main Navigation-->



<!--Main layout-->
  <main>
    <div class="container">

      <!--Grid row-->
      <div class="row mt-5">

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Section: Sidebar -->
          <section>

            <!--
            <section>

              <h5>Subcategories</h5>

              <div class="text-muted small text-uppercase mb-5">
                <p class="mb-4">return to <a href="#!" class="card-link-secondary"><strong>Clothing, Shoes,
                      Accessories</strong></a></p>

                <p class="mb-3"><a href="#!" class="card-link-secondary">Dresses</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary">Tops, Tees & Blouses</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary">Sweaters</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary">Fashion Hoodies & Sweatshirts</a></p>
                <p class="mb-3"><a href="#!" class="card-link-secondary">Jeans</a></p>
              </div>

            </section>
			
			-->

            <!-- Section: Filters -->
            <section class="filters">
              <h5>Filters</h5>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			          <div id="filters">
					  
					  
       <section filter="condition" class="mb-4">
                <h6 class="font-weight-bold mb-3">Country</h6>

            <select
              id="country"
              class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            >
              <option value="">-- Country --</option>
              <option value="turkey">Turkey</option>
              <option value="china">China</option>
              <option value="france">France</option>
              <option value="italy">Italy</option>
            </select>
         
		  </section>
		  
		  
              <!-- Section: Condition -->
              <section filter="size" class="mb-4">
                <h6 class="font-weight-bold mb-3">Size</h6>
<!--

          <div class="size">
            <div id="size">
			
			
			
			  <div class="form-check pl-0 mb-3">
                  <input
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    condition="new"
                    id="S" value="S"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="S"
                    >S</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    condition="used"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="M" value="M"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="M"
                    >M</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    condition="collectible"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="L" value="L"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="L"
                    >L</label
                  >
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input
                    condition="renewed"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="XL" value="XL"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="XL"
                    >XL</label
                  >
                </div>
				
           
            </div>
          </div>
		  
		  
		  
		  -->
		  
		  
		  
		  
		            <div class="size">
            <legend class="text-base font-medium text-gray-900 my-3">Size</legend>
            <div id="size">
			
			
			
			  <div class="form-check pl-0 mb-3">
                  <input
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    condition="new"
                    id="S" value="S"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="S"
                    >S</label
                  >
                </div>
			
						  <div class="form-check pl-0 mb-3">
                  <input
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    condition="new"
                    id="M" value="M"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="M"
                    >M</label
                  >
                </div>
				
				
				
							  <div class="form-check pl-0 mb-3">
                  <input
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    condition="new"
                    id="L" value="L"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="L"
                    >L</label
                  >
                </div>
			
			
			
				
							  <div class="form-check pl-0 mb-3">
                  <input
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    condition="new"
                    id="XL" value="XL"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="XL"
                    >XL</label
                  >
                </div>
			
			
			
			
			
			
            </div>
          </div>

          <div class="price">
		  
                       <h6 class="font-weight-bold mb-3">Price</h6>
<div class="flex">
            <div class="price-input">
              <input
                
                class="mt-1 focus:ring-indigo-500 p-2 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                type="text"
                value=""
                id="price-min" placeholder="Minimum price &euro;"
              />
            </div>
            <div class="py-2">&nbsp;-&nbsp;</div>
            <div class="price-input">
              <input
                
                class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                type="text"
                value=""
                id="price-max" placeholder="Maximum price &euro;"
              />
            </div>
          </div>
        </div>
        </div>
		  
				</section>

   
       
	   

	   
	    <!-- 
              <section class="mb-4" filter="price">
                <h6 class="font-weight-bold mb-3">Price</h6>

                <div class="form-check pl-0 mb-3">
                  <input
                    price="0-500"
                    type="radio"
                    class="filter-option form-check-input"
                    id="price"
                    name="materialExampleRadios" value="0-500"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="price"
                    >Under $500</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="500-1000"
                    type="radio"
                    class="filter-option form-check-input"
                    id="price"
                    name="materialExampleRadios" value="500-1000"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="price"
                    >$500 to $1000</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="1000-1500"
                    type="radio"
                    class="filter-option form-check-input"
                    id="price" value="1000-1500" id="price"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="price"
                    >$1000 to $1500</label
                  >
                </div>
               
             
              </section>
            
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
		

              <section class="mb-4" filter="price">
                <h6 class="font-weight-bold mb-3">Price</h6>

                <div class="form-check pl-0 mb-3">
                  <input
                    price="0-25"
                    type="radio"
                    class="filter-option form-check-input"
                    id="under25"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="under25"
                    >Under $25</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="25-50"
                    type="radio"
                    class="filter-option form-check-input"
                    id="2550"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="2550"
                    >$25 to $50</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="50-100"
                    type="radio"
                    class="filter-option form-check-input"
                    id="50100"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="50100"
                    >$50 to $100</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="100-200"
                    type="radio"
                    class="filter-option form-check-input"
                    id="100200"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="100200"
                    >$100 to $200</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    price="200-*"
                    type="radio"
                    class="filter-option form-check-input"
                    id="200above"
                    name="materialExampleRadios"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="200above"
                    >$200 & Above</label
                  >
                </div>
              </section>
            Section: Price -->
			  
			  
		

              <!-- 
              <section class="mb-4" filter="size">
                <h6 class="font-weight-bold mb-3">Size</h6>

                <div class="form-check pl-0 mb-3">
                  <input
                    size="34"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="34"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="34"
                    >34</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    size="36"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="36"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="36"
                    >36</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    size="38"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="38"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="38"
                    >38</label
                  >
                </div>
                <div class="form-check pl-0 mb-3">
                  <input
                    size="40"
                    type="checkbox"
                    class="filter-option form-check-input filled-in"
                    id="40"
                  />
                  <label
                    class="form-check-label small text-uppercase card-link-secondary"
                    for="40"
                    >40</label
                  >
                </div>
                <a
                  class="btn btn-link text-muted p-0"
                  data-toggle="collapse"
                  href="#collapseExample"
                  aria-expanded="false"
                  aria-controls="collapseExample"
                >
                  More
                </a>
                <div class="collapse pt-3" id="collapseExample">
                  <div class="form-check pl-0 mb-3">
                    <input
                      size="42"
                      type="checkbox"
                      class="filter-option form-check-input filled-in"
                      id="42"
                    />
                    <label
                      class="form-check-label small text-uppercase card-link-secondary"
                      for="42"
                      >42</label
                    >
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input
                      size="44"
                      type="checkbox"
                      class="filter-option form-check-input filled-in"
                      id="44"
                    />
                    <label
                      class="form-check-label small text-uppercase card-link-secondary"
                      for="44"
                      >44</label
                    >
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input
                      size="46"
                      type="checkbox"
                      class="filter-option form-check-input filled-in"
                      id="46"
                    />
                    <label
                      class="form-check-label small text-uppercase card-link-secondary"
                      for="46"
                      >46</label
                    >
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input
                      size="50"
                      type="checkbox"
                      class="filter-option form-check-input filled-in"
                      id="50"
                    />
                    <label
                      class="form-check-label small text-uppercase card-link-secondary"
                      for="50"
                      >50</label
                    >
                  </div>
                </div>
              </section>
               -->

              <!-- Section: Color -->
              <section class="mb-4" filter="color">
                <h6 class="font-weight-bold mb-3">Color</h6>

                <div
                  class="btn-group btn-group-toggle btn-color-group d-block mt-n2 ml-n2"
                  data-toggle="buttons"
                >
                  <label
                    for="color-1"
                    class="btn rounded-circle white border-inset-grey p-3 m-2"
                  >
                    <input
                      id="color-1"
                      class="filter-option"
                      type="checkbox"
                      color="white"
                    />
                  </label>
                  <label for="color-2" class="btn rounded-circle grey p-3 m-2">
                    <input
                      id="color-2"
                      class="filter-option"
                      type="checkbox"
                      color="grey"
                    />
                  </label>
                  <label for="color-3" class="btn rounded-circle black p-3 m-2">
                    <input
                      id="color-3"
                      class="filter-option"
                      type="checkbox"
                      color="black"
                    />
                  </label>
                  <label for="color-4" class="btn rounded-circle green p-3 m-2">
                    <input
                      id="color-4"
                      class="filter-option"
                      type="checkbox"
                      color="green"
                    />
                  </label>
                  <label for="color-5" class="btn rounded-circle blue p-3 m-2">
                    <input
                      id="color-5"
                      class="filter-option"
                      type="checkbox"
                      color="blue"
                    />
                  </label>
                  <label for="color-6" class="btn rounded-circle purple p-3 m-2">
                    <input
                      id="color-6"
                      class="filter-option"
                      type="checkbox"
                      color="purple"
                    />
                  </label>
                  <label for="color-7" class="btn rounded-circle yellow p-3 m-2">
                    <input
                      id="color-7"
                      class="filter-option"
                      type="checkbox"
                      color="yellow"
                    />
                  </label>
                  <label for="color-8" class="btn rounded-circle indigo p-3 m-2">
                    <input
                      id="color-8"
                      class="filter-option"
                      type="checkbox"
                      color="indigo"
                    />
                  </label>
                  <label for="color-9" class="btn rounded-circle red p-3 m-2">
                    <input
                      id="color-9"
                      class="filter-option"
                      type="checkbox"
                      color="red"
                    />
                  </label>
                  <label for="color-10" class="btn rounded-circle orange p-3 m-2">
                    <input
                      id="color-10"
                      class="filter-option"
                      type="checkbox"
                      color="orange"
                    />
                  </label>
                </div>
              </section>
              <!-- Section: Color -->
            </section>
            <!-- Section: Filters -->

          </section>
          <!-- Section: Sidebar -->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!-- Section: Block Content -->
		  <!--
          <section class="mb-3">

            <div class="row d-flex justify-content-around align-items-center">
              <div class="col-12 col-md-3 text-center text-md-left">
                <a href="#!" class="text-reset"><i class="fas fa-th-list fa-lg mr-1"></i></a href="#!">
                <a href="#!" class="text-reset"><i class="fas fa-th-large fa-lg"></i></a href="#!">
              </div>
              <div class="col-12 col-md-5">
                <div class="d-flex flex-wrap">
-->
                  <!-- Sorting -->
<!--

                  <div class="select-outline position-relative w-100">
                    <select id="sort" class="mdb-select md-form md-outline">
                      <option value="1">Best rating</option>
                      <option value="2">Lowest price first</option>
                      <option value="3">Highest price first</option>
                    </select>
                    <label>Sort</label>
                  </div>
-->
                  <!-- Sorting -->
                  <!--
                </div>
              </div>
              <div class="col-12 col-md-4 text-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-circle justify-content-center float-md-right mb-0">
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>

          </section>
		  
		  -->
          <!-- Section: Block Content -->

          <!--Section: Block Content-->

          <section>

            <!-- Loader -->
    
            <!-- Grid row -->
            <div class="row" id="products">
            </div>
            <!-- Grid row -->

          </section>
          <!--Section: Block Content-->

          <!-- Section: Block Content -->
		  <!--
		  
          <section>

            <div class="row d-flex justify-content-around align-items-center">
              <div class="col-12 col-md-3 text-center text-md-left">
                <a href="#!" class="text-reset"><i class="fas fa-th-list fa-lg mr-1"></i></a href="#!">
                <a href="#!" class="text-reset"><i class="fas fa-th-large fa-lg"></i></a href="#!">
              </div>
              <div class="col-12 col-md-5">
                <div class="d-flex flex-wrap">
                  <div class="select-outline position-relative w-100">
                    <select class="mdb-select md-outline md-form" searchable="Search here..">
                      <option value="" disabled selected>Choose category</option>
                      <option value="1">Category 1</option>
                      <option value="2">Category 2</option>
                      <option value="3">Category 3</option>
                      <option value="4">Category 4</option>
                      <option value="5">Category 5</option>
                    </select>
                    <label>Label example</label>
                    <button class="btn-save btn btn-primary btn-sm mt-2">Save</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 text-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination pagination-circle justify-content-center float-md-right mb-0">
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link"><i class="fas fa-chevron-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>

          </section>
		  
		  -->
          <!-- Section: Block Content -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
  
  
  
  
  
  
  


    <div class="container mx-auto py-4">
      <div class="grid grid-cols-1 md:grid-cols-12 h-screen">


        <div
          id="goods"
          class="col-span-9 px-3 relative grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-2"
        ></div>
      </div>
    </div>
    <script src="filter.js"></script>
	
	
	
	
	
	
	
  <!-- Footer -->
  <footer class="page-footer font-small elegant-color">

    <div class="color-primary">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">

      <!-- Grid row -->
      <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>About me</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <p class="foot-desc mb-0">Here you can use rows and columns to organize your footer content. Lorem
            ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Products</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="list-unstyled foot-desc">
            <li class="mb-2">
              <a href="#!">MDBootstrap</a>
            </li>
            <li class="mb-2">
              <a href="#!">MDWordPress</a>
            </li>
            <li class="mb-2">
              <a href="#!">BrandFlow</a>
            </li>
            <li class="mb-2">
              <a href="#!">Bootstrap Angular</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Useful links</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="list-unstyled foot-desc">
            <li class="mb-2">
              <a href="#!">Your Account</a>
            </li>
            <li class="mb-2">
              <a href="#!">Become an Affiliate</a>
            </li>
            <li class="mb-2">
              <a href="#!">Shipping Rates</a>
            </li>
            <li class="mb-2">
              <a href="#!">Help</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

          <!-- Links -->
          <h5>Contacts</h5>
          <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

          <ul class="fa-ul foot-desc ml-4">
            <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>New York, Avenue Street 10
            </li>
            <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>042 876 836 908</li>
            <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>company@example.com</li>
            <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">?? 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->




  </body>
</html>