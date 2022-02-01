<div id="preloader"></div>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{asset ('img/bg-banner02.png')}}" class="img-logo" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li></li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"> Contactanos </a>
    </ul>
  
  </div>
</nav>
<div class="mb-4"></div>


<section id="blog" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="service-title pad-bt15">Novedades</h2>
          <hr class="bottom-line">
        </div>
        @foreach ($news as $news)
        <div class="col-md-4 col-sm-6 col-xs-12 mb-4">
          <div class="blog-sec">
            
            <div class="blog-img">
              <a href="{{ route('detail',$news->id) }}">
                <img src="{{asset($news->getFile("new" , "first"))}}" class="img-responsive" alt="{{$news->title}}" >
              </a>
            </div>
            <div class="blog-info">
              <h2>{{$news->title}}</h2>
              <div class="mb-4"></div>
              <p class="p-justify">{!! Str::limit($news->body,200) !!}</p>
              <a href="{{ route('detail',$news->id) }}" class="read-more">Ver más →</a>
            </div>
           
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!---->