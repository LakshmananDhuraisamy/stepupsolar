<?php include 'header.php';?>
<?php 


$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   if (empty($name)) {
       $errors[] = 'Name is empty';
   }

   if (empty($email)) {
       $errors[] = 'Email is empty';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = 'Email is invalid';
   }

   if (empty($message)) {
       $errors[] = 'Message is empty';
   }

   if (empty($errors)) {
       $toEmail = 'info@stepupsolarsolutions.com';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) 

           header('Location: thank-you.html');
       } else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
   }


?>
<!-- SOCIAL ICONS -->
    <div class="left_icons float-left d-table" data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li>
                    <a target="_blank" href="https://www.facebook.com/people/Step-Up-Solar-Solutions/100089231964986"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                </li>
				<li>
                    <a target="_blank" href="https://wa.link/c1cxcp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                </li>
				
                <li class="p-0">
                    <a target="_blank" href="https://www.instagram.com/annamalai_boss/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                </li>
				
				
				
				
				
            </ul>
        </div>
    </div>
<!-- BANNER SECTION -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <h1 data-aos="fade-up" style="color:#28a745">Innovative Solutions in the Field of Solar Energy</h1>
                    <h5 data-aos="fade-right">Welcome to Stepupsolar Solutions - Your Path to a Sustainable Future!.</h5>
                    <div class="btn_wrapper" data-aos="fade-left">
                        <a class="text-decoration-none text-white offer_btn" href="#whatweoffer">WHAT WE OFFER</a>
                        <a class="text-decoration-none learn_btn" href="#">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 p-0"></div>
            </div>
        </div>
    </section>
</div>
<!-- SERVICE SECTION -->
<section class="services_provide main-box center-style">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="services_logo">
                    <figure class="mb-4"><img src="assets/images/services_provide_logo.png" alt="" data-aos="fade-down"></figure>
                </div>
                <h6 class="mb-0" data-aos="fade-left">SERVICES WE PROVIDE</h6>
                <h2 style="color:#f8f9fa" data-aos="fade-right">Building & Maintaining The Energy Throughout The World</h2>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 service_padding">
                    <div class="services_provider_content">
                        <div class="upper_portion">
                            <figure class="mb-0 position-relative"><img style="width:350px;height:280px;" src="assets/images/panels/panelweb.png"  alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4>Solar Power System</h4>
                                <p>Quis nostrum exercitationem ullam coraoris suscirit.</p>
                                <div class="learn_more_wrapper">
                                    <a class="learn_btn_yellow text-decoration-none" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 service_padding">
                    <div class="services_provider_content">
                        <div class="upper_portion">
                            <figure class="mb-0 position-relative"><img style="width:350px;height:280px;" src="assets/images/panels/panel1.jpeg" lt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4>Solar Installation</h4>
                                <p>Debitis aut rerum necessitar saereu eveniet voluta.</p>
                                <div class="learn_more_wrapper">
                                    <a class="learn_btn_yellow text-decoration-none" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 service_padding">
                    <div class="services_provider_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0 position-relative"><img style="width:350px;height:280px;" src="assets/images/work/work4.jpeg" alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper_residentialsolar">
                            <div class="lower_portion">
                                <h4 class="resi_solar">Residential Solar</h4>
                                <p>Maiores alias conseruatuo aut perferendis eoloribus.</p>
                                <div class="learn_more_wrapper_resi_solar">
                                    <a class="learn_btn_yellow text-decoration-none" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <figure class="shape mb-0 position-absolute"><img src="assets/images/services_provide_icons.png" alt="" data-aos="flip-up"></figure>
        </div>
    </div>
</section>
<!-- SUSTAINABLE SECTION -->
<section class="about_us" id="about_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="aboutus_image" data-aos="fade-right">
                    <figure class="mb-0"><img src="/assets/images/pump/pump8.jpeg" style="width:540px;height:540px" alt=""></figure>
                    <div class="yellow_box center-style" data-aos="flip-up">
                        <i class="fa fa-quote-left"></i>
                        <h4 class="text-white mb-0">Our Mission is to
                            Bring the Energy
                            Transition all Over
                            the World.</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="aboutus_content">
                    <h6 class="mb-1" data-aos="fade-down">ABOUT US</h6>
                    <h2 class="mb-2 text-left" data-aos="fade-right">Driving The Future of
                        Sustainable Energy</h2>
                    <p class="about_us_paragraph mb-2" data-aos="fade-right">At Stepupsolar Solutions, we're at the forefront of innovation in the dynamic realm of solar energy. Our mission is clear: to revolutionize the way the world harnesses and benefits from the power of the sun. With a strong commitment to sustainability, cutting-edge technology, and unmatched expertise, we're your trusted partner in realizing the full potential of solar energy.

</p>
                </div>
                <div class="box_wrapper" data-aos="flip-down">
                    <div class="box box_oneth center-style">
                        <figure><img src="assets/images/energy_around_world.png" alt=""></figure>
                        <p class="aboutus_box_content mb-0">Energy Around
                            World</p>
                    </div>
                    <div class="box box_two center-style mb-0">
                        <figure><img src="assets/images/residential_solutions.png" alt=""></figure>
                        <p class="aboutus_box_content mb-0">Residential
                            Solutions</p>
                    </div>
                    <div class="box box_oneth center-style mr-0 mb-0">
                        <figure><img src="assets/images/get_energy_forest.png" alt=""></figure>
                        <p class="aboutus_box_content mb-0">Get Energy
                            Forests</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PROJECTS SECTION -->
<section class="recent_projects" id="recent_projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h6 class="center-style">RECENT PROJECTS</h6>
                <h2 class="center-style">Latest Projects, Solutions And Energy Supplies</h2>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="images_content_wrapper">
                    <figure class="mb-0"><img style="height:403px;" src="assets/images/work/work2.jpeg" alt=""></figure>
                    <div class="projects_content_wrapper">
                        <h4 class="text-white mb-2">Solar System</h4>
                        <p class="project_paragraph mb-0">Duis aute irure dolor in rearehenderit.</p>
                    </div>
                    <div class="project_icon_wrapper">
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="images_content_wrapper">
                    <figure class="mb-0"><img style="height:403px;" src="assets/images/panels/panel6.jpeg" alt=""></figure>
                    <div class="projects_content_wrapper">
                        <h4 class="text-white mb-2" >Hybrid Energy</h4>
                        <p class="project_paragraph mb-0">Rui officia deserunt moi.</p>
                    </div>
                    <div class="project_icon_wrapper_hybrid">
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <figure class="shape mb-0 position-absolute"><img src="assets/images/projects_blueyellow_icon.png" alt="" data-aos="flip-down"></figure>
        </div>
        <div class="row"></div>
        <div class="row second_row_projects" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="images_content_wrapper">
                    <figure class="mb-0"><img style="height:403px;" src="assets/images/pump/pump6.jpeg"  alt=""></figure>
                    <div class="projects_content_wrapper">
                        <h4 class="text-white mb-2">Titan Windimidal</h4>
                        <p class="project_paragraph mb-0">Sui officia deserunt moi.</p>
                    </div>
                    <div class="project_icon_wrapper_hybrid">
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="images_content_wrapper">
                    <figure class="mb-0"><img style="height:403px;" src="assets/images/work/work4.jpeg" alt=""></figure>
                    <div class="projects_content_wrapper">
                        <h4 class="text-white mb-2">Hydro Plant</h4>
                        <p class="project_paragraph mb-0">Tui officia deserunt moi.</p>
                    </div>
                    <div class="project_icon_wrapper_hybrid">
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="images_content_wrapper">
                    <figure class="mb-0"><img  style="height:403px;" src="assets/images/work/work1.jpeg" alt=""></figure>
                    <div class="projects_content_wrapper">
                        <h4 class="text-white mb-2">Parci Eolico</h4>
                        <p class="project_paragraph mb-0">Mui officia deserunt moi.</p>
                    </div>
                    <div class="project_icon_wrapper_hybrid">
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn_wrapper_projects"> 
            <a class="text-decoration-none viewall_btn" href="#">VIEW ALL</a>
        </div>
    </div>
</section>
<!-- APPOINTMENT SECTION -->
<section class="make_an_appointment float-left w-100" id="make_an_appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="appointment-content center-style">
                    <h6 class="text-white mb-0" data-aos="fade-up">MAKE AN APPOINTMENT</h6>
                    <h2 class="text-white" data-aos="fade-right">Our Vision</h2>
                    <p class="appointment_paragraph text-white" data-aos="fade-left">Imagine a world where clean, renewable energy powers every facet of our lives. At Stepupsolar Solutions, we're dedicated to turning this vision into reality. By providing innovative solar solutions, we aim to reduce our collective carbon footprint, drive down energy costs, and create a sustainable future for generations to come.

</p>
                    <div class="appoinment_phone_icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h3 class="mb-0"><a href="tel:+61383766284" class="text-decoration-none text-white">+91 613 8376 6284</a></h3>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>
<!-- STATS SECTION -->
<section class="company_statistics float-left w-100" id="company_statistics">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="company_stats_content">
                    <h6 class="mb-1">COMPANY STATISTICS</h6>
                    <h2 class="mb-2 text-left">Who We Are:</h2>
                    <p class="company_stats_paragraph mb-2">Stepupsolar Solutions is a pioneering force in the field of solar energy solutions. We specialize in designing, implementing, and managing top-tier solar installations for a diverse range of sectors, including agriculture, industry, commercial enterprises, and residential communities.</p>
                    <p class="company_stats_paragraph mb-4"> Our team of seasoned experts brings a wealth of experience and passion to every project we undertake.</p>
                        <div class="company_btn_wrapper"> 
                            <a class="text-decoration-none learn_btn_company_stats" href="#about_us">LEARN MORE</a>
                        </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up">
                <div class="row position-relative">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="company_box_wrapper center-style">
                            <div class="box box1 mb-0 mr-0">
                                <figure><img src="assets/images/company_project_completed.png" alt=""></figure>
                                <p class="companystatsnumbers_content">30+</p>
                                <p class="companybox_content mb-0">Projects Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="company_box_wrapper center-style">
                            <div class="box mb-0 mr-0">
                                <figure><img src="assets/images/company_happycustomer.png" alt=""></figure>
                                <p class="companystatsnumbers_content">45+</p>
                                <p class="companybox_content mb-0">Happy Customers</p>
                            </div>
                        </div>
                    </div>    
                    <figure class="shape mb-0 position-absolute"><img src="assets/images/company_blue_yellow_icon.png" alt="" data-aos="flip-up"></figure>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="company_box_wrapper center-style">
                            <div class="box box2 mr-0 mb-0">
                                <figure><img src="assets/images/company_award.png" alt="" class="company_box_thirdimg"></figure>
                                <p class="companystatsnumbers_content">200</p>
                                <p class="companybox_content mb-0">Awards Milestones</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="company_box_wrapper center-style">
                            <div class="box box3 mr-0 mb-0">
                                <figure><img src="assets/images/company_worldwide.png" alt="" class="company_box_forthimg"></figure>
                                <p class="companystatsnumbers_content">3</p>
                                <p class="companybox_content mb-0">Franchise</p>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TEAM SECTION -->
<section class="team_members center-style float-left w-100" id="team_members" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h6 class="mb-0 text-center">TEAM MEMBERS</h6>
                <h2>Meet Our Industry Experts</h2>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding_bottom">
                    <div class="team_members_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/izek.jpg" alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <a href="#" class="text-decoration-none"><p class="team_member_name">Izek Reuthe</p></a>
                                <p class="team_member_designation">Field Officer</p>
                                <div class="socialmedia_icons_wrapper">
                                    <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding_bottom">
                    <div class="team_members_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/alina.jpg" alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <a href="#" class="text-decoration-none"><p class="team_member_name">Alina Mareha</p></a>
                                <p class="team_member_designation">Assitant Manager</p>
                                <div class="socialmedia_icons_wrapper">
                                    <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding_bottom">
                    <div class="team_members_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/zack.jpg" alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <a href="#" class="text-decoration-none"><p class="team_member_name">Zack Clark</p></a>
                                <p class="team_member_designation">Marketing Manager</p>
                                <div class="socialmedia_icons_wrapper">
                                    <a href="https://www.facebook.com/people/Step-Up-Solar-Solutions/100089231964986"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/annamalai_boss/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding_bottom">
                    <div class="team_members_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/kene.jpg" alt=""></figure>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <a href="#" class="text-decoration-none"><p class="team_member_name">Kene Castellon</p></a>
                                <p class="team_member_designation">Team Director</p>
                                <div class="socialmedia_icons_wrapper">
                                    <a href="#"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <figure class="shape mb-0 position-absolute"><img src="assets/images/team_members_blue_yellow_icon.png" alt="" data-aos="flip-down"></figure>
        </div>
    </div>
</section>
<style>
	.accordian-section {
    text-align: center;
    margin-top: 0px !important;
    padding-bottom: 110px;
}
</style>
<section class="accordian-section" id="whatweoffer">
    <div class="container">
		 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                 
                <h2 data-aos="fade-right">What we offer</h2>
            </div>
        </div>
		
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2" data-aos="fade-right"> 
                <div class="about-service-section-text accordian-section-inner-text position-relative">
                    <div class="accordian-inner">
                        <div id="accordion1">
                            <div class="accordion-card">
                                <div class="card-header" id="headingFour">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Solar Installation:
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" style="">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">Our expertise in solar installation is second to none. Whether you're an agricultural business looking to enhance your energy self-sufficiency or an industrial complex seeking to optimize your operations, our tailored solar solutions have you covered.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingFive">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Agricultural Solar: 
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">We recognize the unique energy demands of the agricultural sector. Our solar installations seamlessly integrate with agricultural landscapes, providing reliable power to irrigation systems, livestock operations, and more.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSix">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                       Industrial Solar:
                                    </button>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">Industries require robust and efficient energy solutions. Our industrial solar installations not only reduce operational costs but also contribute to your company's sustainability goals.</p>
                                </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2" data-aos="fade-left">
                <div class="about-service-section-text position-relative">
                    <div class="accordian-inner">
                        <div id="accordion2">
							  <div class="accordion-card">
                                <div class="card-header" id="headingTen">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                       Commercial Solar:
                                    </button>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">We cater to the energy needs of businesses of all sizes. Our commercial solar solutions help lower electricity bills, enhance corporate social responsibility, and position your brand as a leader in environmental stewardship.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingSeven">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                       Residential Solar: 
                                    </button>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">Step into a greener future with residential solar installations. Power your home using clean energy, reduce your reliance on traditional power sources, and enjoy long-term savings.</p>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="card-header" id="headingEight">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                       Battery Solutions: 
                                    </button>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                                <div class="card-body">
                                    <p class="text-left mb-0 p-0">We offer cutting-edge battery storage solutions that enable you to store excess solar energy for use during non-sunlight hours. This technology ensures uninterrupted power supply and maximizes the benefits of your solar installation.</p>
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

<!-- BLOGS SECTION -->
<section class="our_articles float-left w-100 center-style" id="our_articles" style="display:none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h6 class="mb-0">OUR ARTICLES</h6>
                <h2>Latest Blog & News</h2>
            </div>
        </div>
        <div class="row position-relative" data-aos="fade-up">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="articles_content">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/articles_power_supplies.jpg" class="article_img" alt=""></figure>
                            <div class="image_content" data-aos="zoom-in">
                                <span class="month_name">May</span>
                                <span class="month_date">30</span>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4>Power Supplies and 
                                    Harsh Environments</h4>
                                <p>Suspendisse vulputate nibh ege
                                    ros darde rhoncus, id scelerisque 
                                    libero reade aluam.</p>
                                <div class="learn_more_wrapper">
                                    <a class="text-decoration-none article_learn_btn_yellow" href="#" data-toggle="modal" data-target="#blog-model-1">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="articles_content">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/articles_highly_promotion.jpg" class="article_img" alt=""></figure>
                            <div class="image_content" data-aos="zoom-in">
                                <span class="month_name">Jun</span>
                                <span class="month_date">15</span>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4>Highly Promotion and
                                    Secure Energetic</h4>
                                <p>Quspendisse vulputate nibh ege
                                    ros darde rhoncus, id scelerisque 
                                    libero reade aluam. </p>
                                <div class="learn_more_wrapper">
                                    <a class="text-decoration-none article_learn_btn_yellow" href="#" data-toggle="modal" data-target="#blog-model-2">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 article_padding">
                    <div class="articles_content mb-0">
                        <div class="upper_portion">
                            <figure class="mb-0"><img src="assets/images/article_cromptics_notation.jpg" class="article_img" alt=""></figure>
                            <div class="image_content" data-aos="zoom-in">
                                <span class="month_name">Feb</span>
                                <span class="month_date">28</span>
                            </div>
                        </div>
                        <div class="lower_portion_wrapper">
                            <div class="lower_portion">
                                <h4>Cromptics Notations will
                                    Base Electrodes</h4>
                                <p>Ruspendisse vulputate nibh ege
                                    ros darde rhoncus, id scelerisque 
                                    libero reade aluam.</p>
                                <div class="learn_more_wrapper">
                                    <a class="text-decoration-none article_learn_btn_yellow" href="#" data-toggle="modal" data-target="#blog-model-3">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <figure class="shape mb-0 position-absolute"><img src="assets/images/article_blue_yellow_icon.png" alt="" data-aos="flip-down"></figure>
        </div>
    </div>
</section>
<!-- MESSAGE SECTION -->
<section class="send_message center-style float-left w-100" data-aos="fade-up" id="send_message">
    <div class="container">
        <div class="send_message_content">
            <h6 class="text-white text-center mb-0">SEND A MESSAGE</h6>
            <h2 class="text-white">Get in Touch With us Today!</h2>
	 <?php echo((!empty($errorMessage)) ? $errorMessage : '----') ?>
            <form id= "contactpage" method="POST" action="">
                <div class="form-row pb-3">
                    <div class="col">
                        <input type="text" name="name" id="name" class="form-control upper_layer_name" placeholder="Name:" required>
                    </div>
                    <div class="col">
                        <input type="email" name="email" id="email" class="form-control upper_layer" placeholder="Email:" >
                    </div>
                    <div class="col">
                        <input type="tel" name="phone" id="phone" class="form-control upper_layer" placeholder="Phone:" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                      <input type="text" name="message" id="message" class="form-control lower_message" placeholder="Message:">
                    </div>
                </div>

                <div class="form_button_wrapper text-center">
                    <button type="submit" name="btnsubmit" id="submitbutton" class="button_style">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title text-center w-100" id="myModalLabel"> Business opportunity with solar energy </h4>
      </div>
      <div class="modal-body">
         <img src="opportunity.jpg" style="width:100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
 <script>

setTimeout(function() {
    $('#myModal').modal();
}, 2000);
	 
     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>
 

<?php include 'footer.php';?>