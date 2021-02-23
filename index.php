<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Qunit CSS -->
    <link href="assets/css/qunit.css" rel="stylesheet">
    <!-- Remix Icon CSS -->
    <link href="assets/fonts/remixicon/remixicon.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="wrapper">
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark navbar-transparent">
        <div class="container w-75">
          <a class="navbar-brand fw-bold" href="#">SimpCALC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end flex-grow-0 animate__animated" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link" aria-current="true" href="#calculate">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="true" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="true" href="#contact"><span class="btn btn-sm btn-info btn-text-light btn-contact">Contact</span></a>
              </li>
              <li class="nav-item nav-iconed">
                <a class="nav-link" class="m-0" href="https://github.com/ukrenzz" tabindex="-1" aria-disabled="true"><i class="ri-github-fill fs-3"></i></a>
              </li>
              <li class="nav-item nav-iconed">
                <a class="nav-link" class="m-0" href="https://www.linkedin.com/in/richy-r-b18625105/" tabindex="-1" aria-disabled="true"><i class="ri-linkedin-box-fill fs-3"></i></a>
              </li>
              <li class="nav-item nav-iconed">
                <a class="nav-link" class="m-0" href="https://www.instagram.com/richy.saragih/" tabindex="-1" aria-disabled="true"><i class="ri-instagram-line fs-3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="first-page parallax-img" data-stellar-background-ratio="0.5" data-width="1024" data-height="768">
        <div class="bg-overlay w-100">
          <div class="container d-table h-100">
            <div class="d-table-cell align-middle text-center ">
              <h1 class="text-light">Simple Calculator</h1>
              <h4 class="text-light">Based on PHP Language and faster</h4>
              <a href="#calculate" class="btn btn-lg btn-info mt-3 fw-bold border-2 rounded-pill btn-try btn-text-light">Let's Try</a>
            </div>
          </div>
        </div>

      </section>
      <section class="project-section pb-5 bg-light pt-5 min-vh-100"  id="calculate">
        <div class="container w-75">
          <h1 class="mt-5 mb-5 text-info text-center" >Basic Calculator</h1>
          <div class="row ">
            <div class="col-sm-12 col-md-3 col-lg-3">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link text-right active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Modified</a>
                <a class="nav-link text-right" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Normal</a>
              </div>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9">
              <div class="d-flex align-items-start">
                <div class="tab-content w-100 " id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="card w-100">
                      <div class="card-body">
                        <form class="" action="" id="form_calculator" name="form_calculator" method="post">
                          <div class="row">

                            <div class="col-sm-12 col-md-7 col-lg-7">
                              <div class="card border-0">
                                <div class="card-header border-0">
                                  Result : <span class="fw-bold text-danger" id="span-result"></span>
                                </div>
                                <div class="card-body p-0 border-0">
                                  <input type="text" class="form-control" name="txt-calculate" value="" id="txt-calculator" placeholder="Calculate here">
                                </div>
                              </div>

                              <div class="row my-2">
                                <div class="col-6">
                                  <button type="button" class="btn btn-lg btn-warning w-100" id="btn-functional" data-function="backspace"><i class="ri-delete-back-2-line"></i></button>
                                </div>
                                <div class="col-6">
                                  <button type="button" class="btn btn-lg btn-danger w-100" id="btn-functional" data-function="clear"><i class="ri-delete-bin-6-line "></i> Clear</button>
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="7"><i class="ri-number-7"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="8"><i class="ri-number-8"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="9"><i class="ri-number-9"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-operator" data-operator="/"><i class="ri-divide-fill"></i></button>
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="4"><i class="ri-number-4"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="5"><i class="ri-number-5"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="6"><i class="ri-number-6"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-operator" data-operator="*"><i class="ri-close-fill"></i></button>
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="1"><i class="ri-number-1"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="2"><i class="ri-number-2"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="3"><i class="ri-number-3"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-operator" data-operator="-"><i class="ri-subtract-fill"></i></button>
                                </div>
                              </div>
                              <div class="row my-3">
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-number" data-number="0"><i class="ri-number-0"></i></button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-operator" data-operator=".">.</button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-info w-100" id="btn-operator" data-operator="=">=</button>
                                </div>
                                <div class="col-3">
                                  <button type="button" class="btn btn-lg btn-secondary w-100" id="btn-operator" data-operator="+"><i class="ri-add-fill"></i></button>
                                </div>
                              </div>
                              <div class="mt-5">
                                <h5 class="text-info">How to Use</h5>
                                <ul>
                                  <li>You can use button in display for add number or operator to textbox</li>
                                  <li>Not only button, you can manually write textbox. But, you must look at warning section below.</li>
                                  <li>Result just get after button equals ('=') has clicked.</li>
                                  <li>History calculate will save to history box and just as temporary.</li>
                                </ul>
                                <h6 class="text-warning fw-bold mt-4">Warning</h6>
                                <ul>
                                  <li>Program can use to add, subtract, divide and multiple some number like scientific calculator.</li>
                                  <li>Limitation for using operator just like at point 1 (+, -, *, /).</li>
                                  <li>Bracket symbol can't use cause some problem and need development</li>
                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-5 ">
                              <div class="card calcHistory" >
                                <div class="card-header bg-dark text-light">
                                  History
                                </div>
                                <ul class="list-group list-group-flush overflow-auto" id="historyList" style="height:auto !important;max-height:50vh!important;">
                                </ul>
                              </div>
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card w-100">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-12 col-md-7 col-lg-7">
                            <form class="" action="" method="post" id="formSimpleCalc">
                              <div class="mb-3 row">
                                <label for="first-number" class="col-sm-3 col-form-label">First Number</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="first-number" placeholder="Please input number..." required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="second-number" class="col-sm-3 col-form-label">Second Number</label>
                                <div class="col-sm-9">
                                  <input type="number" class="form-control" id="second-number" placeholder="Please input number..." required>
                                </div>
                              </div>
                              <div class="mt-3 text-end">
                                <button type="submit" name="submit" class="btn btn-md btn-info" id="submitSimpleCalc"><i class="ri-calculator-line"></i> Count me</button>
                              </div>
                            </form>
                            <div class="mt-5">
                              <h5 class="text-info">How to Use</h5>
                              <ul>
                                <li>You just manually input first number and second number into textbox</li>
                                <li>Don't panic about what the result.</li>
                                <li>All result that's addition, subtraction, multiplication and division will come at result section.</li>
                                <li>Result will show after you click "<i class="ri-calculator-line"></i> Count Me" button.</li>
                              </ul>
                              <h6 class="text-warning fw-bold mt-4">Warning</h6>
                              <ul>
                                <li>Program can use to add, subtract, divide and multiple just two number.</li>
                                <li>Don't input operator except negative or subtract in the textbox.</li>
                              </ul>
                            </div>
                          </div>
                          <col-sm-12 class="col-md-5 col-lg-5">
                          <div class="card" >
                            <div class="card-header bg-dark text-light">
                              Result
                            </div>
                            <ul class="list-group list-group-flush overflow-auto" id="simpleHistoryList">

                            </ul>
                          </div>
                          </col-sm-12>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="about-section parallax-img" id="about" data-stellar-background-ratio="0.5" data-width="1024" data-height="768">
        <div class="bg-overlay w-100">
          <div class="container d-table h-100">
            <div class="d-table-cell align-middle position-relative text-start">
              <div class="p-5 position-absolute top-50 end-0 translate-middle-y box-about ">
                <h5 class="text-light mb-4 fw-normal">This is me!</h5>
                <h1 class="text-info mb-0">I'm Richy Rotuahta Saragih</h1>
                <h4 class="text-light ">Collage Stundent</h4>
                <p class="text-light mt-4 mb-3">Try to build web projects portofolio. PHP language is my basic and learn to use some Web Framework like Laravel and CodeIgniter. Need team?</p>

                <a href="#calculate" class="btn btn-lg btn-outline-info fw-bold border-2 rounded-pill btn-try btn-text-light">Call Me</a>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section class="contact-section pt-5 bg-dark">
        <div class="container pt-5 w-75" id="contact">
          <div class="row mt-5" >
            <div class="col-sm-12 col-md-5 col-lg-5 text-center">
              <div class="row mt-5">
                <div class="col-12 mt-5">
                  <span class="contact-icon-box"><i class="ri-contacts-fill p-5 border border-5 rounded-circle border-light text-info icon-contact"></i></span>
                </div>
              </div>
              <div class="row text-light w-50 mx-auto mt-5 link-sosmed">
                <div class="col-12 "><h4 class="text-info">Social Media</h4></div>
                <div class="col-3"><a href="https://github.com/ukrenzz" class="text-decoration-none link-light"><i class="ri-github-fill fs-3"></i></a></div>
                <div class="col-3"><a href="https://www.linkedin.com/in/richy-r-b18625105/" class="text-decoration-none link-light"><i class="ri-linkedin-box-fill fs-3"></i></a></div>
                <div class="col-3"><a href="https://twitter.com/evil_ukrenzz" class="text-decoration-none link-light"><i class="ri-twitter-line fs-3"></i></a></div>
                <div class="col-3"><a href="https://www.instagram.com/richy.saragih/" class="text-decoration-none link-light"><i class="ri-instagram-line fs-3"></i></a></div>
              </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7 text-light">
              <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 mx-auto text-info mail-box">
                  <h2 class="text-center mb-5">Send a message for me</h2>
                  <form class="" action="mailto:richy.rotuahta15@gmail.com" method="post">
                    <div class="my-5 row">
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="Your Full name" required>
                      </div>
                    </div>
                    <div class="my-5 row">
                      <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="Your E-Mail" required>
                      </div>
                    </div>
                    <div class="my-5 row">
                      <div class="col-sm-12">
                        <textarea name="message" rows="4" class="form-control w-100"  id="message" placeholder="Your message" required></textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <div class="col-sm-12 text-end mt-3">
                        <button type="submit" name="button" class="btn btn-md btn-outline-info w-auto">Mail Me</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="footer-section bg-dark border-top border-1">
        <div class="container w-75 ">
          <footer class="text-light p-0">
            <div class="row mw-100 py-4">
              <div class="col-6"><span class="text-info">Simple Calculator</span> <i class="ri-copyright-line"></i> <span class="fw-bold">2021</span>.</div>
              <div class="col-6 text-end">All right reserved by <a href="https://www.linkedin.com/in/richy-r-b18625105/" class="link-info text-decoration-none author">Richy R. Saragih</a>.</div>
            </div>
          </footer>
        </div>
      </section>
    </div>

    <!-- jQuery Script -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.0.min.js" integrity="sha256-f6DVw/U4x2+HjgEqw5BZf67Kq/5vudRZuRkljnbF344=" crossorigin="anonymous"></script>
    <!-- Bootstrap Script -->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- Sweat Alert Script -->
    <script src="assets/js/sweetalert.min.js"></script>
    <!-- Qunit Script -->
    <script src="assets/js/qunit.js"></script>
    <!-- Parallax Script -->
    <script src="assets/js/jquery.stellar.js"></script>

    <!-- Initial Script -->
    <script type="text/javascript">
    $(document).ready(function(){
        $.stellar();
        xScroll = -1;
        yScroll = -1;
        textBoxId = "#txt-calculator";
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            var element = document.querySelector('.navbar');
            // alert(scroll);

            if(scroll > 100)
              xScroll = 0;
            else
              xScroll = 1;

            if(xScroll == 0){

              $('.navbar').removeClass("navbar-transparent");
              $('.navbar').addClass("bg-dark shadow sticky-top");

              element.classList.add('animate__animated', 'animate__fadeInDown');
            } else if(xScroll == 1){
              $('.navbar').removeClass("sticky-top bg-dark shadow animate__animated animate__fadeInDown");
              $('.navbar').addClass("navbar-transparent sticky-top");
            }
        });

        function writeTextBox(elementId, text) {
          var elements = $(elementId);
          var lastChar = elements.val().slice(-1);
          var regExpOperator = /([\*\/\+\-]+)$/g;
          var regExpNumber = /([0-9\.]+)/g;

          if(regExpOperator.test(lastChar) && regExpNumber.test(text) == false){
            var changeString = elements.val();
            changeString = changeString.replace(/([\*\/\+\-]+$)/g, text)
            // var changeString = elements.val().slice(0,-1);
            // changeString += text;
            elements.val(changeString);

          }
          else if(regExpOperator.test(text) || (regExpNumber.test(text) || (regExpNumber.test(text) && regExpOperator.test(lastChar))))
          {
            elements.val(elements.val() + text);
          }
        }
        function characterValidation(string) {
          var res = "";
          var regExp = /^([\-\+]?[0-9]*\.?[0-9]+)+([\-\+\*\/]?[0-9]*\.?[0-9]+)*([0-9]+[\-\+\*\/]?)*([0-9]+[\-\+\*\/]?)*([0-9]*)$/g;

          if(regExp.test(string)){
            return true;
          }
          else {
            return false;
          }

        }
        function stringToURI(string) {
          var result = "";
          for (var i = 0; i < string.length; i++) {
            if(string[i] == '+' || string[i] == '-' || string[i] == '*' || string[i] == '/')
              result += encodeURIComponent(string[i]);
            else
              result += string[i]
          }
          return result;
        }
        function writeHistory(elementId, string, result, clicked = true) {
          clickId = clicked == true ? "id = 'historyItem'" : "";
          $(elementId).append("<li class='list-group-item text-end' data-string='" + string + "' data-result='" + result + "' " + clickId + "><div class='fs-6 fw-bold text-dark'>" + result + "</div><div class='fs-6 text-black-50'><small>" + string + "</small></div></li>");
        }

        $(document).on('click', '#btn-number',function(){
          var number = $(this).data('number');
          writeTextBox(textBoxId, number);
        })
        $(document).on('click', '#btn-operator',function(e){

          var operator = $(this).data('operator');
          var plus = encodeURIComponent('+');
          var data;

          if(operator == '='){
            e.preventDefault();

            string = $(textBoxId).val();

            if(characterValidation(string)){
              var result;
              var uriString = stringToURI(string);
              var dataCalc = 'textvalue='+uriString+'&submit=true'
              $.ajax({
                type: 'POST',
                url: 'func.php',
                data: dataCalc,
                success: function(data)
                {
                  $('#span-result').text(data.result);
                  writeHistory('#historyList', string, data.result);
                }
              });
            } else {
              swal({
                "title" : "Wrong input!",
                "text"  : "Your input has not valid, please try again!",
                "icon"  : "warning",
                "timer" : 2000,
              });
            }
          } else {
            writeTextBox(textBoxId, operator);
          }
        })
        $(document).on('click', '#btn-functional', function() {
          var action = $(this).data('function');
          var element = $(textBoxId);
          if(action == "backspace" && element.val().length > 1)
          {
            element.val(element.val().substr(0, element.val().length - 1));
          }
          else if (action == "clear" || (action == "backspace" && element.val().length == 1)) {
            element.val('');
          }
        })
        $(document).on('click', '#historyItem', function(e) {
          e.preventDefault();

          string = $(this).data('string');
          result = $(this).data('result');

          $(textBoxId).val(string);
          $('#span-result').text(result);
        })
        $(document).on('click', '#submitSimpleCalc', function(e) {
          e.preventDefault();

          var first_number = $("#first-number").val();
          var second_number = $("#second-number").val();
          var submit = true;

          $.post("simpleFunc.php",
            { firstNumber: first_number, secondNumber: second_number, submit: submit},
            function(data) {
              writeHistory('#simpleHistoryList', first_number + '+' + second_number, data.add, false);
              writeHistory('#simpleHistoryList', first_number + '-' + second_number, data.subtract, false);
              writeHistory('#simpleHistoryList', first_number + '*' + second_number, data.multiple, false);
              writeHistory('#simpleHistoryList', first_number + '/' + second_number, data.divide, false);
          	 $('#formSimpleCalc')[0].reset();
            });


        })
    })

    </script>
  </body>
</html>
