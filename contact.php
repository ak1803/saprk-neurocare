<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Spark Nero Clinic</title>


  </head>
  <body>



  <div class="navi">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><img src="images/menu.png" alt=""></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                  About
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="about-doctor.html">Dr. Mandar Patil</a>
                    <a class="dropdown-item" href="videos.html">Videos</a>
                    <a class="dropdown-item" href="blog.html">Blogs</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Brain Treatments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="brain-trauma.html">Brain Trauma</a>
                      <a class="dropdown-item" href="brain-tumor.html">Brain Tumor</a>
                      <a class="dropdown-item" href="brain-surgery.html">Brain Surgery</a>
                      <a class="dropdown-item" href="trigeminal-neuralgia.html">Trigeminal Neuralgia</a>
                      <a class="dropdown-item" href="pitutary-tomors.html">Pitutary Tomors</a>
                      <a class="dropdown-item" href="hydrocephalus.html">Hydrocephalus</a>
                      <a class="dropdown-item" href="brain-metastasis.html">Brain Metastasis</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      Spine Treatments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="slip-disc.html">Slip Disc</a>
                      <a class="dropdown-item" href="back-pain.html">Back Pain</a>
                      <a class="dropdown-item" href="neck-pain.html">Neck Pain</a>
                      <a class="dropdown-item" href="spine-fractures.html">Spine Fracture</a>
                      <a class="dropdown-item" href="spine-tumors.html">Spine Tumors</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a href="contact.php" class="nav-link ">Contact us</a>
                </li>
              </ul>

              <div class="call">
                <p class="mb-1 head">Call us for Consultation</p>
                <a href="tel:+91-084464 10911"> <p class="mb-0 num font-weight-bold ">+91-084464 10911</p></a>
              </div>
            
              <div>
              <a href="contact.php"><button type="button" class="book">Make An <br> Appointment </button></a> 
              </div> 
            </div>
          </nav>
    </div>




    <div class="inner-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact us</h2>
                    <p class="crum"><a href="#">Home</a> &nbsp; || &nbsp; Contact us</p>
                </div>
            </div>
        </div>
    </div>




<div class="about-page">
    <div class="container">
        <div class="row">

            <div class="contact-box">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 aos-item" data-aos="fade-right" data-aos-duration="2000">  
                          <h4>Our Location</h4>
                            <div class="bg">
                              <p class="add">Office no 202, Sanskriti Arcade, opp. PCMC school, Kaspate Wasti, Wakad, Pune, Maharashtra 411057.</p>
                            <a href="tel:084464 10911"> <p class="call">+91-084464 10911</p></a> 
                              <p class="mail">xyz@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8 aos-item" data-aos="fade-left" data-aos-duration="2000">
                          <h4>Get in touch</h4>
                            <div class="form-box">
        
                            <form id="contact_us_frm" action='action.php' method="post" >
                        <input type="hidden" name="action" value="contact_us_form">
        
                                 <div class="col-md-6 pl-lg-0 pr-lg-0 float">
                                    <input type="text" class="form-control" placeholder="Full Name" name="fname" id="fname" >
                                    <small id="firstname_error" class="text-danger error_msg d-none">This Field is Required</small>
                                 </div>
                                 
                                 <div class="col-md-6 pr-lg-0 float">
                                  <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname">
                       <small id="firstname_error" class="text-danger error_msg  d-none">This Field is Required</small>
                                 </div>
        
                                 <div class="col-md-6 pl-lg-0 pr-lg-0 float">
                                  <input type="text" class="form-control" placeholder="Phone" name="mobile" id="mobile">
                                  <small id="mobile_error" class="text-danger error_msg  d-none">This Field is Required</small>
                                 </div>
        
                                 <div class="col-md-6 pr-lg-0 float">
                                  <input type="email" class="form-control" placeholder="E-mail" name="email" id="email">
                                  <small id="email_error" class="text-danger error_msg  d-none">This Field is Required</small>
                                 </div>
        
                                 <div class="col-md-12 pl-lg-0 pr-lg-0 float">
                                 <textarea class="form-control" placeholder="Message" name="message" id="message"></textarea>
                                 <small id="message_error" class="text-danger error_msg  d-none">this Field is Required</small>
                                 </div>
        
                                 <div class="clearfix"></div>
                                 
                                 <div class="col-md-12 pl-lg-0 pr-lg-0">
                                 <input type="submit" value="Submit" id="submit_contact_form" class="send-btn">
                                 </div>
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>




<div class="map">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.535388102222!2d73.77180351530886!3d18.59497377174678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf23e919bd3f%3A0x358c9a4e9673ea55!2sSpark%20Neurocare%20Brain%20and%20spine%20clinic%20%2F%20Dr%20Mandar%20Patil%2FBest%20Neurosurgeon%20in%20wakad%2C%20pimple%20saudagar%2C%20Hinjewadi%2CPune%2FNeurosurgeon%20in%20wakad%2FBest%20Neurosurgeon!5e0!3m2!1sen!2sin!4v1653712812803!5m2!1sen!2sin"
           width="100%" height="400px" style="border:0; border-radius: 20px; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
</div>



<div class="footer">
  <div class="container">
      <div class="row">
        <div class="col-md-3">
            <h3>Spark Neurocare Brain and spine clinic</h3>
            <p>Dr. Mandar Patil is a renowned brain and spine surgeon in Pune who believes in holistic and ethical approach to treat brain and spine diseases.He has overall experience of 11 years in surgery and 6 years in neurosurgery.</p>
        </div>

        <div class="col-md-3">
          <h3>Brain Treatment</h3>
          <ul>
            <li><a href="brain-trauma.html">Brain Trauma</a></li>
            <li><a href="brain-tumor.html">Brain Tumor</a></li>
            <li><a href="trigeminal-neuralgia.html">Trigeminal Neuralgia</a></li>
            <li><a href="pitutary-tomors.html">Pitutary Tomors</a></li>
            <li><a href="hydrocephalus.html">Hydrocephalus</a></li>
            <li><a href="brain-metastasis.html">Brain Metastasis</a></li>
          </ul>
        </div>


        <div class="col-md-2">
          <h3>Spine Treatment</h3>
          <ul>
            <li><a href="slip-disc.html ">Slip Disc</a></li>
            <li><a href="back-pain.html">Back Pain</a></li>
            <li><a href="neck-pain.html">Neck Pain</a></li>
            <li><a href="spine-fractures.html">Spine Fractures</a></li>
            <li><a href="spine-tumors.html">Spine Tumors</a></li>
          </ul>
        </div>

        <div class="col-md-4">
    
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.535388102222!2d73.77180351530886!3d18.59497377174678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf23e919bd3f%3A0x358c9a4e9673ea55!2sSpark%20Neurocare%20Brain%20and%20spine%20clinic%20%2F%20Dr%20Mandar%20Patil%2FBest%20Neurosurgeon%20in%20wakad%2C%20pimple%20saudagar%2C%20Hinjewadi%2CPune%2FNeurosurgeon%20in%20wakad%2FBest%20Neurosurgeon!5e0!3m2!1sen!2sin!4v1653565732212!5m2!1sen!2sin" 
          width="100%" height="270" style="border:0; border-radius: 15px;  " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
  </div>
</div>

<div class="copy">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Spark Neurocare ?? 2021-22. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>