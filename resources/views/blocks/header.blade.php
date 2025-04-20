<header role="banner">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-9 social">
            <a href="/assets/#"><span class="fa fa-twitter"></span></a>
            <a href="/assets/#"><span class="fa fa-facebook"></span></a>
            <a href="/assets/#"><span class="fa fa-instagram"></span></a>
            <a href="/assets/#"><span class="fa fa-youtube-play"></span></a>
          </div>
          <div class="col-3 search-top">
            <form action="{{route('article.search')}}" class="search-top-form" method="GET">
              <span class="icon fa fa-search"></span>
              <input type="text" name="query" placeholder="Поиск...">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container logo-wrap">
      <div class="row pt-5">
        <div class="col-12 text-center">
          <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="/assets/#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
          <h1 class="site-logo"><a href="{{route('home')}}">Learn blog</a></h1>
        </div>
      </div>
    </div>
    
    <nav class="navbar navbar-expand-md  navbar-light bg-light">
      <div class="container">
        
       @include('blocks.menu')
       
      </div>
    </nav>
  </header>