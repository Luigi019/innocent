<section id="contact" class="section-padding wow fadeInUp delay-05s color-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center white">
          <h2 class="service-title pad-bt15">Contactanos</h2>
          
          <hr class="bottom-line white-bg background-white">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="loction-info white">
            <p><i class="fas fa-map-marked-alt"></i> Qta Anna. 2da Avda. Campo <br>Claro, Los Cortijos, Caracas</p>
            <p><i class="far fa-envelope"></i><a href="mailto:IScomunicaciones@gmail.com" title="glorythemes" class="color-white"> IScomunicaciones@gmail.com</a></p>
            <p><i class="fas fa-phone-square"></i> (212) 232 22 11</p>
            <a class="color-white" href="https://instagram.com/formacionIS?utm_medium=copy_link" target="_blank"><i class="bi-instagram fs-3"></i> @formacionIS</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="contact-form">
            <form id="contactForm" action="{{ route('sendMail') }}" method="post" role="form" class="contactForm form-responsive">
              @csrf
              <div class="col-md-6 padding-right-zero">
                <div class="form-group">
                  <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Tu nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Tu correo electronico" data-rule="email" data-msg="Please enter a valid email" required/>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="number" class="form-control" name="inputPhone" id="inputPhone" placeholder="Tu Número celular" data-rule="email" data-msg="Please enter a valid phone-number" required/>
                  
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="inputMessage" id="inputMessage" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                  
                </div>
                <button type="submit" class="btn btn-primary btn-submit">CONTACTAR</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>