<!DOCTYPE html>
<html lang="en">
<head>

     <title>One Million Euros</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo base_url('site_onemillion/css/bootstrap.min.css'); ?>">
     <link rel="stylesheet" href="<?php echo base_url('site_onemillion/css/font-awesome.min.css'); ?>">
     <link rel="stylesheet" href="<?php echo base_url('site_onemillion/css/aos.css'); ?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url('site_onemillion/css/tooplate-gymso-style.css'); ?>">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="#home">One Million Euros</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#feature" class="nav-link smoothScroll">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a href="#presentation" class="nav-link smoothScroll">Présentation</a>
                    </li>

                    <li class="nav-item">
                        <a href="#price" class="nav-link smoothScroll">Prix</a>
                    </li>

                    <li class="nav-item">
                        <a href="#team" class="nav-link smoothScroll">A propos de nous</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

               <!--  <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul> -->
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">Bienvenue sur notre site </h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">One Million Euros</h1>

                                   <!-- <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>-->

                                  <!--   <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">En savoir plus</a> -->
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">Vous êtes nouveau ?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Inscrivez-vous et abonnez-vous à la formule Premium à un tarif spécial !</h6>

                   <!--  <p data-aos="fade-up" data-aos-delay="200">Gymso is free HTML template by <a rel="nofollow" href="https://www.tooplate.com" target="_parent">Tooplate</a> for your commercial website. Bootstrap v4.2.1 Layout. Feel free to use it.</p> -->

                    <a href="<?php echo base_url('login/signin'); ?>" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"  data-target="#membershipForm">Devenez un membre dès aujourd'hui</a>
                </div>
                <!-- data-toggle="modal" -->
                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Voir les tarifs</h2>

                                <a href="#price" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Voir</a>
<!-- 
                               <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p> -->
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- presentation -->
     <section class="about section" id="presentation">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Présentation du site</h2>

                                <p data-aos="fade-up" data-aos-delay="400">Nous avons créé ce site pour vendre les pixels aux entreprises pour afficher leurs marques et publicités. Le but est de récolter assez d'argent et verser à une association caritative Les microfermes.</p>
                                
                                <a href="<?php echo base_url('Assospage'); ?>" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-target="#membershipForm">En savoir plus</a>
                                <!-- <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p> -->

                            </div>

                           <!--  <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Mary Yan</h3>
                                        <span>Yoga Instructor</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Catherina</h3>
                                        <span>Body trainer</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->

                    </div>
               </div>
     </section>


     <!-- price -->
     <section class="class section" id="price">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                               <!--  <h6 data-aos="fade-up">Abonnement</h6> -->

                                <h2 data-aos="fade-up" data-aos-delay="200">Nos offres du moment</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="<?php echo base_url('site_onemillion/images/class/basic.jpg'); ?>" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Basic</h3>
                                        
                                        <!-- <span><strong>Trained by</strong> - Bella</span> -->

                                        <span class="class-price" style="margin-top: -25px;">20€</span>

                                        <p class="mt-3" style="text-align: center;">Achat 1 case de 10 pixels <br> <h3 style="color: rgb(255, 94, 0); text-align: center;">+</h3></p> <p class="mt-3" style="text-align: center;">10€ verser à l'association</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="<?php echo base_url('site_onemillion/images/class/pro.jpg'); ?>" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Pro</h3>

                                       <!--  <span><strong>Trained by</strong> - Mary</span> -->

                                        <span class="class-price" style="margin-top: -25px;">50€</span>

                                        <p class="mt-3" style="text-align: center;">Achat 3 cases de 10 pixels<br> <h3 style="color: rgb(255, 94, 0); text-align: center;">+</h3></p> <p class="mt-3" style="text-align: center;">20€ verser à l'association</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="<?php echo base_url('site_onemillion/images/class/premium.jpg'); ?>" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Premium</h3>

                                        <!-- <span><strong>Trained by</strong> - Cathe</span> -->
                                        
                                        <span class="class-price" style="margin-top: -25px;"><del style="font-size: 81%; color:black;"> 80€ </del> 60€</span>

                                        <p class="mt-3" style="text-align: center;">Achat 5 cases de 10 pixels<br> <h3 style="color: rgb(255, 94, 0); text-align: center;">+</h3></p> <p class="mt-3" style="text-align: center;">30€ verser à l'association</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- Team -->
        <section class="schedule section" id="team">
            <div class="container">
                <div class="row">
                    <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                        <h2 class="mb-4" style="color: white;" data-aos="fade-up" data-aos-delay="300">A propos de nous</h2>

                        <p data-aos="fade-up" data-aos-delay="400">Nous sommes en formation concepteur et developpeur d'application réalisant ce projet de fin d'année. Nous sommes une équipe de 6 développeurs.</p>
                        
                       <!--  <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p> -->

                    </div>
                </div>
            </div>
                        <div class="container">
                            <div class="row">

                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/antoine.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5>Antoine LENOBLE</h5>
                                            <span>Responsable projet</span>
                                            
                                            <!-- <ul class="social-icon mt-3">
                                                <li><a href="#" class="fa fa-linkedin "></a></li>
                                            </ul><br> -->
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/kurunchi.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5>Kurunchi CHANDRA</h5>
                                            <span>Développeur web</span>

                                          <!--   <ul class="social-icon mt-3">

                                                <li><a href="#" class="fa fa-linkedin "></a></li>

                                            </ul> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/chriss.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5>Chriss BELLAY</h5>
                                            <span>Développeur web</span>
                                            
                                           <!--  <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-linkedin "></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/kevin.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5>Kevin CHEUNG</h5>
                                            <span>Développeur web</span>

                                            <!-- <ul class="social-icon mt-3">
                                                <li><a href="#" class="fa fa-linkedin "></a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/nicolas.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5 >Nicolas AJINCA</h5>
                                            <span>Développeur web</span>

                                           <!--  <ul class="social-icon mt-3">

                                                <li><a href="#" class="fa fa-linkedin "></a></li>

                                            </ul> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                    <div class="team-thumb">
                                        <img src="<?php echo base_url('site_onemillion/images/team/alexandre.jpg'); ?>" class="img-fluid" alt="Trainer">

                                        <div class="team-info d-flex flex-column">

                                            <h5 style="font-size: 100%;">Alexandre FREIRE CARVALHO</h5>
                                            <span>Développeur web</span>

                                            <!-- <ul class="social-icon mt-3">

                                                <li><a href="#" class="fa fa-linkedin "></a></li>

                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>    
                         </div>
            
        </section>
    <!-- emploi du temps -->                <!-- <div class="row">

                            <div class="col-lg-12 col-12 text-center">
                                <h6 data-aos="fade-up">our weekly GYM schedules</h6>

                                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>
                             </div>

                             <div class="col-lg-12 py-5 col-md-12 col-12">
                                 <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                                     <thead class="thead-light">
                                         <th><i class="fa fa-calendar"></i></th>
                                         <th>Mon</th>
                                         <th>Tue</th>
                                         <th>Wed</th>
                                         <th>Thu</th>
                                         <th>Fri</th>
                                         <th>Sat</th>
                                     </thead>

                                     <tbody>
                                         <tr>
                                            <td><small>7:00 am</small></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Power Fitness</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Yoga Section</strong>
                                                <span>7:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>9:00 am</small></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>8:00 am - 9:00 am</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>11:00 am</small></td>
                                            <td></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>11:00 am - 2:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Areobic</strong>
                                                <span>11:30 am - 3:30 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Body work</strong>
                                                <span>11:50 am - 5:20 pm</span>
                                            </td>
                                         </tr>

                                         <tr>
                                            <td><small>2:00 pm</small></td>
                                            <td>
                                                <strong>Boxing</strong>
                                                <span>2:00 pm - 4:00 pm</span>
                                            </td>
                                            <td>
                                                <strong>Power lifting</strong>
                                                <span>3:00 pm - 6:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Cardio</strong>
                                                <span>6:00 pm - 9:00 pm</span>
                                            </td>
                                            <td></td>
                                            <td>
                                                <strong>Crossfit</strong>
                                                <span>5:00 pm - 7:00 pm</span>
                                            </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                    </div> 
               </div>
     </section>-->
 

     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Contactez-nous</h2>

                        <form action="<?php echo base_url('ContactController/form') ?>" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                            <input type="text" class="form-control" name="Nom" placeholder="Nom">

                            <input type="email" class="form-control" name="Email" placeholder="Email">

                            <textarea class="form-control" rows="5" name="Message" placeholder="Message"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Envoyer</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Où vous pouvez nous trouvez</h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 67 69 Avenue du Général de Gaulle, 77420 Champs-sur-Marne</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10501.555110355217!2d2.5903113!3d48.8507964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86124a9f1a778682!2sAFPA!5e0!3m2!1sfr!2sfr!4v1611249059575!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                          
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2021 1M€.
                        
                        <br>Design: <a>KB</a></p>
                    </div>

                    <div class="col-sm-12 col-md-6">
                        <div class="contact-item">
                          <a rel="nofollow" href="mailto:onemillionseuros@gmail.com" class="item-link">
                              <i class="fa fa fa-envelope"></i>
                              <span class="mb-0">onemillionseuros@gmail.com</span>
                          </a>              
                        </div>
                        
                      <!--   <div class="contact-item">
                          <a rel="nofollow" href="https://www.google.com/maps/d/viewer?mid=1fy6Fta6qnNkzLroBSTNCggzIVXY&ll=47.1990930955535%2C2.01160292922657&z=7" class="item-link">
                              <i class="fa fa fa-location-arrow"></i>
                              <span class="mb-0">Localisations des Micro fermes</span>
                          </a>              
                        </div>
                         -->
                        <div class="contact-item">
                          <a rel="nofollow" href="tel:0100200340" class="item-link">
                              <i class="fa fa fa-phone"></i>
                              <span class="mb-0">0123456789</span>
                          </a>              
                        </div>
                        
                        <div class="contact-item">&nbsp;</div>
      
                  </div>
               </div>
          </div>
     </footer>

    <!-- Modal -->
   <!-- <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form method="post" class="membership-form webform" role="form" action="<?php echo base_url('ContactAssosController/form') ?>">
                <input type="text" class="form-control" name="Nom" placeholder="John Doe">

                <input type="email" class="form-control" name="Email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="<?php echo base_url('site_onemillion/js/jquery.min.js'); ?>"></script>
     <script src="<?php echo base_url('site_onemillion/js/bootstrap.min.js'); ?>"></script>
     <script src="<?php echo base_url('site_onemillion/js/aos.js'); ?>"></script>
     <script src="<?php echo base_url('site_onemillion/js/smoothscroll.js'); ?>"></script>
     <script src="<?php echo base_url('site_onemillion/js/custom.js'); ?>"></script>

</body>
</html>