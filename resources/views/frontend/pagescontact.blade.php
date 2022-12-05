

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/LOGO_low.png')}}" rel="icon">
  <link href="{{asset('assets/img/LOGO_low.png')}}" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="container-fuild">
    @include('frontend.navbar')
</div>
  <h1 style="text-align: center;">
  FYPOS
</h1>

<br>
<h1 style="text-align: center;">
  Final Year Project Online Management System
</h1>



  


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Student Registration Form</h1>
      <nav>
        
      </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-11">

          <div class="card">
            <div class="card-body">
              

              <!-- General Form Elements -->
              <form action="/registerstudent" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label"> Your Full name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="fullname">
                    
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label"> Username:</label>
                  <div class="col-sm-10">
                    
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Create Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Confirm Your Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="rpassword">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Matric ID Number</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="matricid">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Your email Address</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-4 col-form-label">Mobile Phone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="number">
                  </div>
                </div>
              
               
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Intake</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="intake">
                      
                      <option >Fall</option>
                      <option >Spring</option>
                      <option >Summer</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Programme</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="programme">
                      
                      <option >Computer Science</option>
                      <option >Software Engineering</option>
                      <option >Other</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Major</label>
                  <div class="col-sm-10" >
                    <select class="form-select" aria-label="Default select example" name="major">
                      
                      <option >Cloud Computing</option>
                      <option >Computer Network</option>
                      <option >Data Science</option>
                      
                    </select>
                  </div>
                </div>


               
                <div class="row mb-3">
                 
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-primary">Reset</button>
                  </div>
                </div>
               

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
   
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>