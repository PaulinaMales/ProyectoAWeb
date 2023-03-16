@extends('layouts.app')

@section('content')

  <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                      form Part start
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <section id="form" class="padding">
    <div class="container px-lg-0">
      <div class="row ">
        <div class="col-lg-6 col-md-12">
          <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.094046222608!2d-78.53712064338954!3d-0.2715457892475052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59892672bcc2b%3A0xffef830d9292d639!2sSan%20Bartolo%2C%20Quito!5e0!3m2!1ses-419!2sec!4v1677113729200!5m2!1ses-419!2sec" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="form-col">
            <div data-wow-duration="1s" class="wow fadeInRightBig common-head text-start" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRightBig;">
              <h2>Get In Touch</h2>
              <h3>Contact Us</h3>
            </div>
            <div class="mb-3">
              <input type="email" data-wow-duration="1s" class="wow fadeInRightBig form-control" id="exampleFormControlInput1" placeholder="Nombre" style="visibility: visible; animation-duration: 1s; animation-name: fadeInRightBig;">
            </div>
            <div class="mb-3">
              <input type="tex" data-wow-duration="2s" class="wow fadeInRightBig form-control" id="exampleFormControlInput2" placeholder="Email" style="visibility: visible; animation-duration: 2s; animation-name: fadeInRightBig;">
            </div>
            <div class="mb-3">
              <input type="text" data-wow-duration="3s" class="wow fadeInRightBig form-control" id="exampleFormControlInput3" placeholder="Celular" style="visibility: visible; animation-duration: 3s; animation-name: fadeInRightBig;">
            </div>
            <div class="mb-3">
              <textarea data-wow-duration="4s" class="wow fadeInRightBig form-control" placeholder="Escriba sus comentarios" id="exampleFormControlTextarea1" rows="3" style="visibility: visible; animation-duration: 4s; animation-name: fadeInRightBig;"></textarea>
            </div>
            <a data-wow-duration="1s" data-wow-iteration="10000" class="wow pulse form-btn animated" href="https://scoreup.hifive03.com/contact.html#" style="visibility: visible; animation-duration: 1s; animation-iteration-count: 10000; animation-name: pulse;">Enviar</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                      form us Part end
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
@endsection