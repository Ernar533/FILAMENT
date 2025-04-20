<div class="collapse navbar-collapse" id="navbarMenu">
    <ul class="navbar-nav mx-auto">

      <li class="nav-item">
        <a class="nav-link active" href="{{route('home')}}">Главная</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('article.category', 'roboty')}}">Роботы</a>
      </li>
      
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{route('article.index')}}" id="dropdown05" 
       aria-haspopup="true" aria-expanded="false">Категории</a>
        <div class="dropdown-menu" aria-labelledby="dropdown05">
            @foreach ($categories as $category)
            <a class="dropdown-item" href="{{route('article.category', $category->slug)}}">{{$category->title}}</a>
            @endforeach
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
    </ul>
    
  </div>