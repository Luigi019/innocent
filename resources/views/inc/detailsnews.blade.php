<div id="preloader"></div>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{asset ('img/bg-banner02.png')}}" alt="logo" class="img-logo"></a>
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
        <div class="row">
          <div class="col-md-8">
        <div class="card-body">
                  <div class="form-group">
                    <img src="{{asset($new->getFile("new" , "first"))}}" class="img-responsive w-100" alt="{{$new->title}}" >
                </div>
                <div class="col-md-12 text-center">
                  <h2 class="service-title pad-bt15">{{ $new->title }}</h2>
                  <hr class="bottom-line">
                </div>
                  <div class="form-group">
                      {!! $new->body !!}
                  </div>
                  <div class="form-group float-right">
                    {{date("l, d/m/Y" , strtotime($new->created_at))  }}
                </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="col-md-12 text-center">
              <h5>Novedades Recientes</h5>
              <hr class="bottom-line">
            </div>
            @foreach ($news as $news)
            <div class="w-100">
              <div class="blog-sec">
                
                <div class="blog-img">
                  <a href="{{ route('detail',$news->id) }}">
                    <img src="{{asset($news->getFile("new" , "first"))}}" class="img-responsive" alt="{{$news->title}}" >
                  </a>
                </div>
                <div class="blog-info">
                  <h2>{{$news->title}}</h2>
                  <div class="mb-4"></div>
                  <p class="p-justify">{!! Str::limit($news->body,100) !!}</p>
                  <a href="{{ route('detail',$news->id) }}" class="read-more mb-4">Ver más →</a>
                </div>
               
              </div>
            </div>
            @endforeach
            <div class="mt-4">
              <a href="{{route('news')}}" class="btn btn-primary btn-block btn-submit justify-content-center blue-white">Ver Más Novedades</a>
           </div>
          </div>
        </div>
        
      

      </div>
    </div>
  </section>
  <!---->