<footer class="footer contact-indicator">
      <div class="container">
        <div class="row">
          <div class=" col-lg-2 col-order-2  col-lg-order-1 first-column">
            <ul class="menu">
              <li id="0">
                <a href="https://www.davidarmstrongfuneralservices.co.uk/"> Home </a>
              </li>
              <li id="1">
                <a href="https://www.davidarmstrongfuneralservices.co.uk/services.html"> Services </a>
              </li>
              <li id="2">
                <a href="https://www.davidarmstrongfuneralservices.co.uk/gallery.html"> Gallery </a>
              </li>
              <li id="3">
                <a href="https://www.davidarmstrongfuneralservices.co.uk/testimonials.html"> Testimonials </a>
              </li>
              <li id="4">
                <a href="https://www.davidarmstrongfuneralservices.co.uk/contact.html"> Contact </a>
              </li>
            </ul>
            <div class="areas">
              <h3>Areas we cover</h3>
              <ul class=" double-col  ">
                <li id="0"> Sheffield </li>
                <li id="1"> Rotherham </li>
                <li id="2"> Barnsley </li>
                <li id="3"> Chesterfield </li>
                <li id="4"> Doncaster </li>
                <li id="5"> Pontefract </li>
                <li id="6"> Deepcar </li>
                <li id="7"> Stocksbridge </li>
                <li id="8"> Penistone </li>
                <li id="9"> And Surrounding Areas </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 col-order-1 col-md-order-1 col-sm-order-1 border left-md right-md form">
            <div class="wrapper-contact-footer">
              <p> Get in touch with us on <a href="tel:07860 466860">07860 466860</a>
              </p>
              <p> Or email us at: <a href="mailto:info@davidarmstrongfuneralservices.co.uk">info@davidarmstrongfuneralservices.co.uk</a>
              </p>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2 class="heading">Request a callback</h2>
                <p>Enter your details below and we'll aim to call you back as soon as possible.</p>
                <div class="callback form-wrapper">
                  <form id="callback-footer-form" action="./mail.php" method="POST">
                    <div class="input-group field-wrap">
                      <input type="text" name="name" id="callback-name" required/>
                      <label for="callback-name">Your Name</label>
                    </div>
                    <div class="input-group field-wrap">
                      <input type="number" name="telephone" id="callback-telephone" required />
                      <label for="callback-telephone">Phone Number</label>
                    </div>
                    <div class="input-group field-wrap select-wrapper">
                      <select id="callback-service" name="service">
                        <option class="placeholder" value="" selected disabled hidden></option>
                        <option value="471">Bespoke &amp; Themed Funerals</option>
                        <option value="2039">Wheelchair Accessible Vehicles</option>
                        <option value="6639">Ceremony Guidance</option>
                        <option value="6640">Pre-Arranged Funerals</option>
                        <option value="6641">Pre-Paid Funerals</option>
                        <option value="2038">Printing</option>
                      </select>
                      <label for="service" class="select-label">Subject</label>
                    </div>
                    <input type="hidden" id="type" name="type" value="phone" />
                    <input type="hidden" id="type" name="page" value="index" />
                    <input type="submit" id="callback-submit-button" class="btn" value="Send my message">
                    <div class="response alert"></div>
                  </form>
                  <div class="lds-css ng-scope hidden">
                    <div class="lds-spinner">
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                    <style type="text/css">
                      @keyframes lds-spinner {
                        0% {
                          opacity: 1;
                        }

                        100% {
                          opacity: 0;
                        }
                      }

                      @-webkit-keyframes lds-spinner {
                        0% {
                          opacity: 1;
                        }

                        100% {
                          opacity: 0;
                        }
                      }

                      .lds-spinner {
                        position: relative;
                      }

                      .lds-spinner div {
                        left: 94px;
                        top: 48px;
                        position: absolute;
                        -webkit-animation: lds-spinner linear 1s infinite;
                        animation: lds-spinner linear 1s infinite;
                        background: #a8a8a8;
                        width: 12px;
                        height: 24px;
                        border-radius: 40%;
                        -webkit-transform-origin: 6px 52px;
                        transform-origin: 6px 52px;
                      }

                      .lds-spinner div:nth-child(1) {
                        -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
                        -webkit-animation-delay: -0.916666666666667s;
                        animation-delay: -0.916666666666667s;
                      }

                      .lds-spinner div:nth-child(2) {
                        -webkit-transform: rotate(30deg);
                        transform: rotate(30deg);
                        -webkit-animation-delay: -0.833333333333333s;
                        animation-delay: -0.833333333333333s;
                      }

                      .lds-spinner div:nth-child(3) {
                        -webkit-transform: rotate(60deg);
                        transform: rotate(60deg);
                        -webkit-animation-delay: -0.75s;
                        animation-delay: -0.75s;
                      }

                      .lds-spinner div:nth-child(4) {
                        -webkit-transform: rotate(90deg);
                        transform: rotate(90deg);
                        -webkit-animation-delay: -0.666666666666667s;
                        animation-delay: -0.666666666666667s;
                      }

                      .lds-spinner div:nth-child(5) {
                        -webkit-transform: rotate(120deg);
                        transform: rotate(120deg);
                        -webkit-animation-delay: -0.583333333333333s;
                        animation-delay: -0.583333333333333s;
                      }

                      .lds-spinner div:nth-child(6) {
                        -webkit-transform: rotate(150deg);
                        transform: rotate(150deg);
                        -webkit-animation-delay: -0.5s;
                        animation-delay: -0.5s;
                      }

                      .lds-spinner div:nth-child(7) {
                        -webkit-transform: rotate(180deg);
                        transform: rotate(180deg);
                        -webkit-animation-delay: -0.416666666666667s;
                        animation-delay: -0.416666666666667s;
                      }

                      .lds-spinner div:nth-child(8) {
                        -webkit-transform: rotate(210deg);
                        transform: rotate(210deg);
                        -webkit-animation-delay: -0.333333333333333s;
                        animation-delay: -0.333333333333333s;
                      }

                      .lds-spinner div:nth-child(9) {
                        -webkit-transform: rotate(240deg);
                        transform: rotate(240deg);
                        -webkit-animation-delay: -0.25s;
                        animation-delay: -0.25s;
                      }

                      .lds-spinner div:nth-child(10) {
                        -webkit-transform: rotate(270deg);
                        transform: rotate(270deg);
                        -webkit-animation-delay: -0.166666666666667s;
                        animation-delay: -0.166666666666667s;
                      }

                      .lds-spinner div:nth-child(11) {
                        -webkit-transform: rotate(300deg);
                        transform: rotate(300deg);
                        -webkit-animation-delay: -0.083333333333333s;
                        animation-delay: -0.083333333333333s;
                      }

                      .lds-spinner div:nth-child(12) {
                        -webkit-transform: rotate(330deg);
                        transform: rotate(330deg);
                        -webkit-animation-delay: 0s;
                        animation-delay: 0s;
                      }

                      .lds-spinner {
                        width: 200px;
                        height: 200px;
                        -webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
                        transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 col-lg-4 col-order-3 col-md-order-3 col-lg-order-3 social-one">
            <div id="social-feed" class="feed facebook">
            <iframe name="f333e157e48b484" width="500px" height="510px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.12/plugins/page.php?adapt_container_width=true&amp;app_id=527161374024923&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df8db10624029%26domain%3Dwww.davidarmstrongfuneralservices.co.uk%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.davidarmstrongfuneralservices.co.uk%252Ff4c1595050a71c%26relation%3Dparent.parent&amp;container_width=325&amp;height=510&amp;hide_cover=true&amp;href=https%3A%2F%2Ffacebook.com%2FFMS-Funeral-Carriages-183751575771092%2F&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=500" style="border: none; visibility: visible; width: 325px; height: 510px;" class=""></iframe>
            </div>
            <div class="follow-wrapper">
              <h3 class="follow-us">Follow us</h3>
              <ul class="socials">
                <li>
                  <a href="https://facebook.com/FMS-Funeral-Carriages-183751575771092/" target="_blank" rel="noopener noreferrer">
                    <i class="fa fa-facebook-official"></i>
                    <span>Facebook</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 footer-line-builder">
            <div class="info border-top" role="contentinfo">
              <p>
                <span>Copyright &copy; 2021 FMS</span>
              </p>
            </div>
            <script>
              window.onload = function() {
                baguetteBox.run('.slideshow', {
                  animation: 'slideIn',
                  noScrollbars: true
                });
              };
            </script>
          </div>
        </div>
      </div>
    </footer>
    <ul class="social-banner">
      <li>
        <a href="https://facebook.com/FMS-Funeral-Carriages-183751575771092/" target="_blank" rel="noopener noreferrer">
          <span class="fa fa-facebook-official" aria-hidden="true"></span>
        </a>
      </li>
    </ul>
    <script>
      
$( "#toggle" ).on( "click", function() {
  var links = $('ul.links')
  if (links.hasClass("toggled")){
    links.removeClass("toggled")
  }else{  links.addClass("toggled")
}} );
      $('#callback-service').selectric({
        disableOnMobile: false,
        nativeOnMobile: false
      });
      $('#callback-service').on('selectric-open', function() {
        $('#callback-footer-form .selectric-items').slideDown(300, function() {
          $('#callback-footer-form .selectric-scroll').addClass('scroll');
        });
      });
      $('#callback-service').on('selectric-close', function() {
        $('#callback-footer-form .selectric-items').slideUp(300);
        $('#callback-footer-form .selectric-scroll').removeClass('scroll');
      });
      $('#callback-service').on('selectric-select', function() {
        document.querySelector('#callback-footer-form .select-wrapper').classList.add('selected')
        document.querySelector('#callback-footer-form .select-wrapper').classList.remove('error-is')
      });
      $("#callback-footer-form").on('click', '.btn-ok', function() {
        $('#callback-service').prop('selectedIndex', 0).selectric('refresh');
      });
      $('#callback-footer-form').validate({
        invalidHandler: function(event, validator) {
          if (validator.invalid.service) {
            $('#callback-footer-form .select-wrapper').addClass('error-is');
          }
        },
        submitHandler: function(form) {
          document.querySelector('#callback-footer-form .trigger-btn').click();
          document.querySelector('#callback-footer-form + .lds-css').classList.remove('hidden');
          $('#callback-footer-form').ajaxSubmit();
        },
        rules: {
          name: {
            minlength: 2,
            required: true,
          },
          email: {
            pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
            require_from_group: [1, ".checkField"]
          },
          telephone: {
            required: true,
            minlength: 5,
          },
          service: {
            required: true,
          }
        },
        messages: {
          name: {
            required: "Your name is required",
            minlength: "Please enter at least 2 letters"
          },
          telephone: {
            required: "Phone number is required",
            minlength: "Phone number is invalid"
          },
          service: {
            required: "Subject is required"
          },
        },
        errorPlacement: function(error, element) {
          element.closest('.field-wrap').append(error);
        },
      })
    </script>