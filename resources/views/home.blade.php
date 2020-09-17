@extends('layout/main')

@section('title', 'Wisata Goa Lauk')

@section('content')
  <!-- //banner -->
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 abut-img-two my-3">
          <img src="images/wisata.jpg" alt="" class="img-fluid float-left">
        </div>   
        <div class="col-lg-6 col-md-6 col-sm-6 left-abut-txt my-3">
          <h3 class="title mb-2">About Us</h3>
          <div class="title-w3ls-text mb-lg-4 mb-md-4 mb-sm-3 mb-3">
            <h6>Some Words About Us
            </h6>
          </div>
          <div class="about-right-grid">
            <p>Goa Lauk kaya akan ornamen. Menurut cerita penduduk, dahulunya di goa ini terdapat banyak ikan, sehingga masyarakat menyebutnya goa ini dengan Goa Lauk.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 abut-img-two my-3">
          <img src="images/goa.jpg" alt="" class="img-fluid float-right">
        </div>
      </div>
    </div>
  </section>
  <!--//about -->
  <!-- tour-info -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2 clr">Find An Adventure</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <h6>Adventure Tour Type</h6>
      </div>
      <div class="row text-center">
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-ship" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Cruises</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-shopping-bag" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Hiking</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-sun-o" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Nature</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-fire" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Fire Camp</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-map" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Explore</h4>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 my-3 booking-choose">
          <div class="adventure-tour-wthree">
            <span class="fa fa-paper-plane-o" aria-hidden="true"></span>
            <h4 class="mt-lg-3 mt-2">Fun</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//tour-info -->
  <!-- service -->
  <section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Services</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <h6>Adventure Offer</h6>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon my-3">
          <div class="grid-wthree-service">
            <span class="fa fa-money" aria-hidden="true"></span>
            <div class="ser-text-wthree mt-3">
              <h4>
                Value
              </h4>
              <p class="mt-2">Selain keindahan ornamen-ornamennya, Goa Lauk juga memiliki keragaman biota goa. 
			  Ada beberapa jenis biota/fauna yang terdapat di Goa Lauk, sepeti jenis-jenis anthropoda (serangga atau jangkrik gua) dan udang-udangan (crustacea). 
			  Pada umumnya, indera penglihatan biota goa tidak berfungsi karena merupakan proses adaptasi gua yang gelap.
			  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon my-3">
          <div class="grid-wthree-service">
            <span class="fa fa-globe" aria-hidden="true"></span>
            <div class="ser-text-wthree mt-3">
              <h4>
                Passionate Travel
              </h4>
              <p class="mt-2">Untuk mencapai Goa Lauk dari Pantai Sawarna, hanya membutuhkan waktu 
			  ± 30 menit dengan menggunakan kendaraan roda empat ataupun roda dua, sedangkan 
			  apabila berjalan kaki membutuhkan waktu sekitar ± 60 menit dari Pantai Sawarna.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon my-3">
          <div class="grid-wthree-service">
            <span class="fa fa-map" aria-hidden="true"></span>
            <div class="ser-text-wthree mt-3">
              <h4>
                Diverse Destinations
              </h4>
              <p class="mt-2">Selain terkenal karena keindahan pantai-pantainya, Desa Sawarna yang terletak di 
			  Kecamatan Bayah sebelah barat Pelabuhan Ratu, Kabupaten Lebak, Banten ini terkenal pula karena goa-goanya. 
			  Sehingga tidak salah apabila Desa Sawarna dijuluki juga dengan “Desa Seribu Goa.” Salah satu goa yang terkenal adalah Goa Lauk.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//service -->
  <!-- some-text -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0 text-information">
        </div>
        <div class="col-lg-6 position-relative left-grid-tour">
          <div class="right-position-two">
          </div>
          <h2 class="mb-lg-4 mb-3">Your Special Tour Today</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem
            ipsum
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--//some-text -->
  <!-- gallery -->
  <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Gallery </h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <h6>Adventure Portfolio</h6>
      </div>
      <div class="row gallery-info no-gutters">
        <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/1.jpeg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/12.jpeg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/4.jpeg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/15.jpeg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/6.jpeg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 gallery-img-grid ">
            <img src="images/8.jpeg" alt="news image" class="img-fluid">
        </div>
    </div>
  </section>
  <!--//gallery -->
  <!-- blog -->
  <section class="blog" id="blog">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 blog-two-two p-0">
          <div class="blog-wthree-list">
            <div class="blog-date-time mb-2">
              <ul>
                <li>
                  <a href="#contact">July 2020/7</a>
                </li>
                <li>
                  <a href="#contact">Comments 5</a>
                </li>
              </ul>
            </div>
            <h4 class="mb-3">
              <a href="#contact">Lorem ipsum dolor</a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur
              adipiscing elit.Vestibulum nibh urna</p>
            <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
              <a href="#contact" class="btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 p-0 blog-img-one">
          <div class="blog-wthree-list">
            <div class="blog-date-time mb-2">
              <ul>
                <li>
                  <a href="#contact">July 2020/7</a>
                </li>
                <li>
                  <a href="#contact">Comments 5</a>
                </li>
              </ul>
            </div>
            <h4 class="mb-3">
              <a href="#contact">Lorem ipsum dolor</a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur
              adipiscing elit.Vestibulum nibh urna</p>
            <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
              <a href="#contact" class="btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 p-0 blog-img-two">
          <div class="blog-wthree-list">
            <div class="blog-date-time mb-2">
              <ul>
                <li>
                  <a href="#contact">July 2020/7</a>
                </li>
                <li>
                  <a href="#contact">Comments 5</a>
                </li>
              </ul>
            </div>
            <h4 class="mb-3">
              <a href="#contact">Lorem ipsum dolor</a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur
              adipiscing elit.Vestibulum nibh urna</p>
            <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
              <a href="#contact" class="btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 blog-two-two p-0">
          <div class="blog-wthree-list">
            <div class="blog-date-time mb-2">
              <ul>
                <li>
                  <a href="#contact">July 2020/7</a>
                </li>
                <li>
                  <a href="#contact">Comments 5</a>
                </li>
              </ul>
            </div>
            <h4 class="mb-3">
              <a href="#contact">Lorem ipsum dolor</a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum nibh urna Lorem ipsum dolor sit amet, consectetur
              adipiscing elit.Vestibulum nibh urna</p>
            <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
              <a href="#contact" class="btn">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//blog -->
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Contact</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <h6>Get in Touch</h6>
      </div>
      <div class="row">
        <div class="col-lg-6 container-fulid">
          <div class="address_mail_footer_grids">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22403.466742725344!2d106.32334459371383!3d-6.9607699944372134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e428fecd3666f83%3A0x6f9b87d2e5acbaea!2sGoa%20Lauk!5e0!3m2!1sen!2sid!4v1594735232837!5m2!1sen!2sid"></iframe>
          </div>
        </div>
        <div class="col-lg-6 contact-form">
          <form action="#" method="post">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                <input type="text" class="form-control" placeholder="First Name" required="">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                <input type="text" class="form-control" placeholder="Last Name" required="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                <input type="text" class="form-control" placeholder="Phone" required="">

              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group contact-forms">
              <textarea class="form-control" placeholder="Meassage" required=""></textarea>
            </div>
            <button type="submit" class="btn sent-butnn btn-lg">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection