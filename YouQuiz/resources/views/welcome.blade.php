@extends ('layouts.main')
@section('title','Accueil')
@section('content')

     <section class="second-section">
            <div class="second-section__description">
              <h2>Hello,we are YouQuiz</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem error atque perspiciatis quia repellendus voluptatem, alias delectus rem. Magni corrupti a vel aliquid vitae repellendus sequi debitis tempora ducimus. Optio quisquam debitis dicta est ex?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt neque nulla explicabo accusamus! Similique fuga, eligendi exercitationem quaerat odio labore ratione sint nulla quod numquam beatae tenetur, eos veritatis iusto atque! Incidunt totam veritatis reprehenderit nam distinctio sunt repellendus aliquid?</p>
            </div>
            <div class="second-section__images">
                <div class="second-section__mary">
                <img src="{{ asset('img/undraw_team_spirit_hrr4.svg') }}" alt="">
                 
            </div>
               
          </div>
         </section>
    <!--end the section second-section-->

    
   
    <section class="third-section">

         <div class="containerclass">
            <h6 class="texteh5">Get A Perfect Body</h6>
            <h2 class="texteh2">Our Training Classes</h2>
   
            <div class="class">
   
                  <div class="classimg">
                     <img src="{{ asset('img/laravel_and_vue_59tp.svg') }}" alt="erreur">
                     <h3> Laravel </h3>
                     <P>
                      <span><strong>Add by</strong> - Bella</span>
                      <br> Lorem ipsum dolor sit amet,
                      <br> consectetur adipiscing 
                     </P>
                  </div>
          
                  <div class="classimg">
                      <img src="{{ asset('img/button_style_70y7.svg') }}" alt="erreur">
                      <h3> Styling </h3>
                      <P>
                       <span><strong>Add by</strong> - Mary</span>
                       <br> Lorem ipsum dolor sit amet,
                       <br> consectetur adipiscing 
                      </P>
                  </div>
          
                  <div class="classimg">
                      <img src="{{ asset('img/erver_cluster_jwwq.svg') }}" alt="erreur">
                      <h3>servre</h3>
                      <P>
                       <span><strong>Add by</strong> - Cathe</span>
                       <br> Lorem ipsum dolor sit amet,
                       <br> consectetur adipiscing
                      </P>
                  </div>
               </div>
         </div>
         
    </section>
    
    <!--start section contact-->
    <section  class="fifht-section">
        <div class="fifht-section__contact_us">
            <h2>Feel free to ask anything</h2>
            <input class="fifht-section__contact_us--input" type="text"  placeholder="      Name">
            <input class="fifht-section__contact_us--input" type="email" placeholder="      Email">
            <textarea class="fifht-section__contact_us--input"  placeholder="   Message" style="margin: 0px; height: 122px; width: 453px;" ></textarea> 
            <button class="fifht-section__contact_us--input" type="submit">Send Message</button>
        </div>
           <div class="fifht-section__find_us">
                    <h2>Where you can find us</h2>
                <p>
                     <i class="fa fa-map-marker" ></i>
                Boulevard moulay youssef, Youssoufia, Maroc
                </p>
            <div class="fifht-section__location">
                <iframe src="https://embed.waze.com/iframe?zoom=16&lat=32.247715&lon=-8.521813&ct=livemap" width="400" height="300" allowfullscreen></iframe>
            </div>
        </div>
    </section> <!--End contact section-->

    <footer class="site-footer">
      <div class="row">
          <div class="copyright">
            <p> Copyright &copy 2021 YouQuiz.<br>Design:<a href="https://youcode.ma/" >YOUCODE</a></p>
          </div>
          <div class="email-phone">
             <p>
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="http://127.0.0.1:5501/index.html">mohammedkabli53@gmail.com</a>
                <i class="fa fa-phone"></i> O767145184
                 
             </p>
          </div>
      </div>  
  </footer>

    {{-- <link href="assets/css/theme.css" rel="stylesheet" />
    <section class="py-0" id="home">
        <div class="bg-holder d-none d-md-block" style="background-image:url(img/home.png);background-position:right bottom;background-size:50%;margin-top:-5.4rem;">
        </div>
        <div class="container">
          <div class="row align-items-center min-vh-md-75 mt-7">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="mt-6 mb-sm-4 display-4 fw-light lh-sm fs-4 fs-lg-6 fs-xxl-7">We Help to <span class="text-primary">Build</span><br class="d-block d-lg-none d-xl-block" />Your Dream </h1>
              <p class="mb-5 fs-1 lh-lg">We are always availed to consult on taking your higher education to the next level so you can stay competitive in the global world.</p>
              <a class="btn btn-lg btn-primary hover-top btn-glow" href="#">Get Started
                </a>
            </div>
          </div>
        </div>
        
      </section>
    
    

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html> --}}
@endsection