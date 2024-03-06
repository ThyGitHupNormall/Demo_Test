


  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index" class="logo">
                        <img src="{{ asset('front') }}/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index" class="{{ 'index' == request()-> path() ? 'active' : ''}}">Home</a></li>
                        <li><a href="explore" class="  {{ 'explore' == request()-> path() ? 'active' : ''}}">Explore</a></li>
                        <li><a href="details" class=" {{ 'details' == request()-> path() ? 'active' : ''}}">Item Details</a></li>
                        <li><a href="author" class=" {{ 'author' == request()-> path() ? 'active' : ''}}">Author</a></li>
                        <li><a href="create" class=" {{ 'create' == request()-> path() ? 'active' : ''}}">Create Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
