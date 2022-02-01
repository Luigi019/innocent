
 <!-- Footer-->
 <footer class="footer bg-light">
  <div class="container">
      <div class="row">
          <div class="h-100 text-center text-lg-start my-auto">
              <p class="mb-4 mb-lg-0">Innocent´s souls (IS). Todos los derechos reservados. &copy; {{ date('Y') }} -</p>
          </div>
      </div>
  </div>

  </footer>
  <footer>
  <div>
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
              <hr class="divider divider-light" /> 
              <p class="text-white-75 mb-4"><i><b>Sitio Web diseñado por  <a href="https://funnywebs.xyz/" target="_blank">Funny Webs</a></b></i></p>
             
          </div>
      </div>
  </div>
</footer>
 
<!-- Bootstrap core JS-->
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>



  @yield("js")