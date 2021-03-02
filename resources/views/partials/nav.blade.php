  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <h1 class="logo"><a href="/">{{$nav1[0]->brand}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{(Route::getCurrentRoute()->uri()) === "/" ? 'active' : ''}}"><a href="{{$nav2[0]->link}}">{{$nav2[0]->name}}</a></li>
          <li class="{{(Route::getCurrentRoute()->uri()) === "about" ? 'active' : ''}}"><a href="{{$nav2[1]->link}}">{{$nav2[1]->name}}</a></li>
          <li class="{{(Route::getCurrentRoute()->uri()) === "resume" ? 'active' : ''}}"><a href="{{$nav2[2]->link}}">{{$nav2[2]->name}}</a></li>
          <li class="{{(Route::getCurrentRoute()->uri()) === "portfolio" ? 'active' : ''}}"><a href="{{$nav2[3]->link}}">{{$nav2[3]->name}}</a></li>
          <li class="{{(Route::getCurrentRoute()->uri()) === "contact" ? 'active' : ''}}"><a href="{{$nav2[4]->link}}">{{$nav2[4]->name}}</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <div class="header-social-links">
        @foreach ($nav3 as $item)
          <a href="{{$item->link}}"><i class="{{$item->icone}}"></i></a>
        @endforeach
      </div>
    </div>
  </header><!-- End Header -->