<div id="preloader"></div>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/bg-banner02.png') }}" class="img-logo"
            alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li></li>
        </ul>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Inicio <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact"> Contactanos </a>
        </ul>

    </div>
</nav>
<div class="mb-4"></div>

<section id="service" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Innocent´s Souls</h2>
                <hr class="bottom-line" text-align="center">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card z-depth-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    @foreach ($enterprise as $key => $enterprises)
                                    <ul class="nav nav-pills nav-pills-primary nav-justified">
                                        <li class="nav-item">
                                            <a  onclick="" id='tab' data-target="#formacion-{{ $enterprises->id }}"
                                                data-toggle="pill"
                                                class="nav-link {{ $key === 0 ? 'active show' : '' }}"><span
                                                    class="hidden-xs">{{ $enterprises->name }}</span></a>
                                        </li>
                                    </ul>
                                @endforeach
                                </div>

                                <div class="tab-content p-3">
                                    @foreach ($enterprise as $key => $enterprises)
                                        <div class="tab-pane {{ $key === 0 ? 'active show' : '' }}"
                                            id="formacion-{{ $enterprises->id }}">
                                            <h5 class="mb-3">{{ $enterprises->name }}</h5>
                                            <p class="p-justify">
                                                {{ $enterprises->description }}
                                            </p>
                                            <!--/row-->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script >
    $(document).on('click', '#tab' , function(){
        console.log($(this).toggleClass('active'));
    })
</script>




<!---->
<!---->
