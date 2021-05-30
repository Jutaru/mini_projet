@extends('layouts.layout')

@section('content')

  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">SJE BLOG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#twitter_tweet">Testimonials</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a class="btn btn-custom" href="/">SIGN IN</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
  </nav>

    <section class="main-home" id="home">
      <div class="home-page-photo"></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <div>
            <h1 class="intro-title">Create your own Blog</h1>
            <p class="intro-text">Start now and create your own Blog and publish it<br/> So many people can read them and make a change.</p>
            <a class="btn btn-custom" href="/posts">Get started</a>
          </div><!--slide item like paragraph-->

          <div>
            <h1 class="intro-title">Best articles for your</h1>
            <p class="intro-text">Discover the latest in technology, education, sport ... <br/>  with a plenty of blog published in our website that will open your eyes.</p>
            <a class="btn btn-custom" href="/posts">See more</a>
          </div><!--slide item like paragraph-->

          <!--div>
            <h1 class="intro-title">We are expert</h1>
            <p class="intro-text">Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies <br/>  pelentesque tempor justo a scelerisque placerat sit amet magna e.</p>
            <a class="btn btn-custom" href="#">Get started</a>
          </div--><!--slide item like paragraph-->
        </div>
      </div>
    </section>
    <!-- /End HOME -->

    <!-- / SERVICES -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Best Services</h3>
            <div class="titleHR"><span></span></div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i> 
                </div>
                <h5>Creative Ideas</h5>
                <p>With the best Blogger in the world you'll only get the best ideas presented by highly skilled people.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-design-pencil-rule-streamline color-l-blue"></i> 
                </div>
                <h5>RICH CONTENT</h5>
                <p>With a plenty of different subject make sure you will find anything you're looking for with a rich content.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-4"> <!-- Service-item -->
            <div class="text-center services-item">
              <div class="col-wrapper">
                <div class="icon-border"> 
                  <i class="icon-speech-streamline-talk-user color-l-yellow"></i> 
                </div>
                <h5>Magic Touch</h5>
                <p>Our support technician and large community,<br> Will give you help whenever you ask.</p>
              </div>
            </div>
          </div>
        </div> <!--/.row -->

      </div>
    </section>
    <!-- / End services-->


    <!-- TWITTER TWEET -->
    <section class="twitter_tweet parallax" id="twitter_tweet" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div id="testi-carousel" class="owl-carousel owl-spaced">
              <div>
                <i class="fa fa-twitter"></i>
                <h5>
                  This website has the best blog ever, I found every thing I am searching
                </h5>
                <p>- Ben Slimen Aya</p>
              </div><!--testimonials item like paragraph-->
              <div>
                <i class="fa fa-linkedin"></i>
                <h5>
                  That really helped me to develop myself by the articles it's giving.<br>Also it does have highly-skilled blogger that give their bests.
                </h5>
                <p>- Ben Slimen. Aya</p>
              </div><!--testimonials item like paragraph-->
              <div>
                <i class="fa fa-facebook"></i>
                <h5>
                  This is awesome, this website has many interresting blogs
                </h5>
                <p>- Aya Ben slimen</p>
              </div><!--testimonials item like paragraph-->
            </div>
          </div> <!-- end col-md-8 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End TWITTER TWEET -->

    <!-- CONTACT -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-center">Contact Us</h3>
            <div class="titleHR"><span></span></div>

            <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
              <div class="col-xs-12">
                <div class="row">            
                  <div class="form-group col-xs-6">
                    <label for="name2">Name</label>
                    <input class="form-control" id="name2" name="name" onblur="if(this.value == '') this.value='Name'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Name">
                    <div class="error" id="err-name" style="display: none;">Please enter name</div>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="email2">Email</label>
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                  </div>
                </div>
                <div class="row">            
                  <div class="form-group col-xs-12">
                    <label for="message2">Message</label>
                    <textarea class="form-control" id="message2" name="message" onblur="if(this.value == '') this.value='Message'" onfocus="if(this.value == 'Message') this.value=''">Message</textarea>
                    <div class="error" id="err-message" style="display: none;">Please enter message</div>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <p class="text-center con_sub_text">Be sure that we will help you and give you the answers you'll ask as soon as possible.</p>
                  </div>
                </div>
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess">E-mail was successfully sent.</div>
                    <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="btn btn-custom" id="send">Submit</button>
                  </div>
                </div>
              </div>  
            </form>
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->

    <!-- FOOTER begings -->
    <footer id="footer">    
      <div class="footer-widgets-wrap">
        <div class="container text-center">    
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>KEEP IN TOUCH</h4>
                <div class="footer-socials">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>ADDRESS</h4>
                <p>Sup'com, Technopôle El-Ghazela<br>
                ERaoued, Ariana, Tunisie</p>
                <p>+216 21 221 003<br>
                <a href="#">www.sje.com</a><br>
                sje@supcom.tn</p>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>SUPPORT</h4>
                <p>You need support? Visit our support forum and open tickets for you questions.</p>
                <p><button type="button" class="btn btn-custom-sm">forum</button></p>
              </div>  <!-- end footer-content -->   
            </div> <!-- end col-sm-4 -->
          </div> <!-- end row -->
        </div> <!-- container -->
      </div>

    <!-- End footer begings -->


    <!-- Scroll top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


@endsection
