<?php
$index=$_GET['index'];
require_once 'memberAge.php';

$members= array(
//Nick Vennemann
	array(
		"name" => "Nick Vennemann",
		"tab-name" => "Nick Vennemann's Resume",
		"role"=>"IT Systems Administrator",
		"image" => "assets/images/myprofilepic-Nick.jpg",
		"email"=>"vennemannn1@nku.edu",
		"phone" => "513-412-8760",
		"linkedin" => "https://www.linkedin.com/in/nick-vennemann/",
		"github" => "https://github.com/Wowser-on-discord",
		"website" => "index.php",
		"dob" => "2003-05-01",
		"summary" => "I am a student within the College of Informatics with a growing knowledge for network and system administration. I am currently gaining experience in a Computer Information Technology career to further my learning within a professional environment and have more hands-on experience. One fun fact about me is that I love dogs and I have one dog whose name is Shadow.",
			"work-experience" => array(
				"title" => "Intern Desktop Technician",
				"company" => "Great American Insurance Group",
				"date" => "November 2022 - Present",
				"description" => "Provides support to anyone within the company who needs technological assistance, performs maintenance to hardware such as laptops, monitors, docking stations, and printers, prepares equipment for new hires, and tests all of the conference rooms in the Tower weekly.",
				"achievements-desc" => "I have had a few achievements over my short, yet growing career.",
				"achievements" => array(
						"Runs Desktop Support for Great American Tower.",
						"In charge of all of the loaner laptops in the Tower.",
				),
				"technology-used" => array(
					"AD",
					"MECM",
					"ServiceNow",
					"VPNs",
					"VMs",
					"PXE",
				)
			),
			"skills-tools" => array(
				"progress-bar" => array(
					"Python",
					"Java",
					"Javascript",
					"SQL",
					"HTML/CSS",
				),

				"others" => array(
					"Research & Development",
					"Code Review",
					"Linux",
					"National Honors Society",
				)
			),
			"education" => array(
				"degree" => "BSc in Computer Information Technology",
				"school" =>  "Northern Kentucky University",
				"years-attending" => "2021 - 2025",
			),
			"awards" => array(
				"award-1" => array(
					"award-title" => "First Honors",
					"award-desc" => "An award given to students with a numerical average of at least 90% with no numerical grade of less than 80%.",
				),
				"award-2" => array(
					"award-title" => "Eagle Scout",
					"award-desc" => "Fundraised, bought, packaged, and gave two hundred care packages to the Cincinnati VA Medical Center for our veterans. These care packages included a toothbrush, toothpaste, socks, and much more.",
				)
			),
			"languages" => array(
				"language-1" => array(
					"lang-name" => "English",
					"lang-desc" => "(Native)",
				),
				"language-2" => array(
					"lang-name" => "Spanish",
					"lang-desc" => "(Novice)",
				),
				"language-3" => array(
					"lang-name" => "Japanese",
					"lang-desc" => "(Novice)",
				)
			),
			"interests" => array(
				"Biking",
				"Swimming",
				"Listening to Music",
			),
			"projects" => array(
				"project-1-name" => "The Farley Vans",
				"project-1-desc" => "I was the head of a group that turned a bad looking website into a great looking one, while still keeping the same information.",
				"project-1-image" => "Project 1/image/originalvan.png",
				"project-1-link" => "Project 1/index.html",
			),
			"footer-names" => array(
				"name-1" => "Nick Vennemann",
				"name-2" => "Noah Conley",
				"name-3" => "Michael Clark",
			)

	),

//Noah Conley
	array(
		"name" => "Noah Conley",
		"tab-name" => "Noah Conley\"s Resume",
		"role"=>"Database Administrator",
		"image" => "assets/images/myprofilepic-Noah.jpg",
		"email"=>"conleyn1@nku.edu",
		"phone" => "859-814-9904",
		"linkedin" => "https://www.linkedin.com/in/noah-conley/",
		"github" => "https://github.com/NoahC",
		"website" => "index.php",
		"dob" => "2003-04-08",
		"summary" => "Hello, my name is Noah Conley and I am a student in the College of Informatics at NKU. I am studying Computer Information Technology with a minor in Information Security. I am currently a junior working towards growing my work experience within this field. Some things I enjoy are hiking, swimming and days on the lake. I also enjoy video games and spending time with my dog Bentley.",
			"work-experience" => array(
				"title" => "AV - Technician",
				"company" => "Church",
				"date" => "June 2018 - Present",
				"description" => "Responsible for audio/video connections, operations and dynamic changes. Also in-charge of handling various devices such as computers, monitors, projectors, amplifiers, etc.",
				"achievements-desc" => "My list of achievements is small at this stage in my work experience however I have a few notable mentions.",
				"achievements" => array(
						"Have outreached to other individuals for various events such as weddings, etc.",
						"Entrusted to lead on a solo part as opposed to being monitored.",
				),
				"technology-used" => array(
					"Windows",
					"MAC OS",
					"Various Device Hardware",
					
				)
			),
			"skills-tools" => array(
				"progress-bar" => array(
					"Python",
					"SQL",
					"Java",
					"Windows Admin",
					"HTML/CSS/JS",
				),

				"others" => array(
					"Network Management",
					"Code Review",
					"Linux",
					"Unix",
				)
			),
			"education" => array(
				"degree" => "BSc in Computer Information Technology",
				"school" =>  "Northern Kentucky University",
				"years-attending" => "2021 - 2024",
			),
			"awards" => array(
				"award-1" => array(
					"award-title" => "Dean List",
					"award-desc" => "Maintained grades to meet the COI Dean's List.",
				),
				"award-2" => array(
					"award-title" => "Founders Scholarship",
					"award-desc" => "Heavily rewarding Scholarship for tuition achieved through a good standing GPA.",
				)
			),
			"languages" => array(
				"language-1" => array(
					"lang-name" => "English",
					"lang-desc" => "(Native)",
				),
				"language-2" => array(
					"lang-name" => "Spanish",
					"lang-desc" => "(Novice)",
				),
				"language-3" => array(
					"lang-name" => "Arabic",
					"lang-desc" => "(Fluent)",
				)
			),
			"interests" => array(
				"Hiking",
				"Swimming",
				"Photography",
				"Underwater basket weaving",
			),
			"projects" => array(
				"project-1-name" => "The Farley Vans",
				"project-1-desc" => "This project was with a group of 3 others in which we found a bad looking website and redesigned it to look better while retaining all the information.",
				"project-1-image" => "Project 1/image/originalvan.png",
				"project-1-link" => "Project 1/index.html",
			),
			"footer-names" => array(
				"name-1" => "Nick Vennemann",
				"name-2" => "Noah Conley",
				"name-3" => "Michael Clark",
			)

	),


//Michael Clark
	array(
		"name" => "Michael Clark",
		"tab-name" => "Michael Clark\"s Resume",
		"role"=>"Web Developer",
		"image" => "assets/images/myprofilepic-Michael.jpg",
		"email"=>"CLARKM30@mymail.nku.edu",
		"phone" => "123-456-7890",
		"linkedin" => "https://www.linkedin.com/in/michaeldwightclark/",
		"github" => "https://github.com/BIGMike080702",
		"website" => "index.php",
		"dob" => "2002-08-07",
		"summary" => "I have attended college at NKU for 2 years pursuing a degree in Cybersecurity. During my two years, I have learned pretty much anything regarding Web-Develpment, Python, and Java. I used these 3 skills to create many projects such as creating a password manager program to help users store and recieve passwords effeciantly. A couple fun facts about me is that I am a drummer and I used to be a boxer.",
			"work-experience" => array(
				"title" => "Food Service Distribution Engineer",
				"company" => "Papa John's Pizza",
				"date" => "May 2022 - August 2023",
				"description" => "I was able to go from delivering produce to making the produce on the makeline.",
				"achievements-desc" => "I have had a few achievements over my short, yet growing career.",
				"achievements" => array(
						"I used the POS terminals to dispatch delevery personal to clientele.",
						"I used the POS terminals to create produce based on the request of the client(s).",
						"I set up a fresh moniter to connect to the applications used by Papa John's."
				),
				"technology-used" => array(
					"Java",
					"Hardware Repair",
				)
			),
			"skills-tools" => array(
				"progress-bar" => array(
					"Hardware Repair",
					"PHP",
					"Python",
					"Java",
					"HTML/CSS/JavaScript",
				),

				"others" => array(
					"Kali",
					"Linux",
					"Unix",
				)
			),
			"education" => array(
				"degree" => "BSc in Cybersecurity",
				"school" =>  "Northern Kentucky University",
				"years-attending" => "2021 - 2025",
			),
			"awards" => array(
				"award-1" => array(
					"award-title" => "Dean List",
					"award-desc" => "Maintained grades to meet the COI Dean's List.",
				)
			),
			"languages" => array(
				"language-1" => array(
					"lang-name" => "English",
					"lang-desc" => "(Native)",
				),
				"language-2" => array(
					"lang-name" => "Spanish",
					"lang-desc" => "(Novice)",
				)
			),
			"interests" => array(
				"Boxing",
				"Drumming",
			),
			"projects" => array(
				"project-1-name" => "ATM simulaton",
				"project-1-desc" => "I created an ATM simulator using Java that allows users to create a bank account with a savings and a checkings account to freely move their money with a spending limit.",
				"project-1-image" => "assets/image/project1.jpg",
				"project-1-link" => "assets/atm_project.zip",
			),
			"footer-names" => array(
				"name-1" => "Nick Vennemann",
				"name-2" => "Noah Conley",
				"name-3" => "Michael Clark",
			)
	)

);


	if ($index >= 0 && $index < count($members)) {
    	$member = $members[$index]; 
	} else {
    	echo "Invalid index provided.";
	}

	function displayWorkExperience($workExperience) {
        echo "<div class='primary-info col-auto'><h3 class='resume-position-title font-weight-bold mb-1'>" . $workExperience['title'] . "</h3>";
		echo "<span style='font-weight: normal;'><div class='resume-company-name ms-auto'>" . $workExperience['company'] . "</div>";
        echo "<div class='resume-position-time'>" . $workExperience['date'] . "</div><br>";
        echo "<div class='resume-timeline-item-desc'><p>" . $workExperience['description'] . "<p></div>";
        echo "<h4 class='resume-timeline-item-desc-heading font-weight-bold'>Achievements: </h4>";
		echo "<p>" . $workExperience['achievements-desc'] . "<p>";
		foreach ($workExperience['achievements'] as $achievement) {

			"<ul>";
			echo "<li>" . $achievement . "</li>";
			"</ul>";
		}
		echo "<br><h4 class='resume-timeline-item-desc-heading font-weight-bold'>Technologies used: </h4>";
		foreach ($workExperience['technology-used'] as $technology) {
			"<ul class='list-inline'>";
			echo "<li class='list-inline-item'><span class='badge bg-secondary badge-pill'>" . $technology . "</span></li>";
			"</ul>";
		}

}


?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $members[$index]['tab-name']; ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">

</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $members[$index]['image']; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $members[$index]['name']; ?></h1>
								<h5><?php echo 'Age: ' . memberAge($members[$index]['dob']); ?></h5>
							    <div class="title mb-3"><?= $members[$index]['role'] ?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="mailto:<?php echo $members[$index]['email']; ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $members[$index]['email']; ?></a></li>
								    <li><a class="text-link" href="tel:<?php echo $members[$index]['phone']; ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $members[$index]['phone']; ?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]['linkedin']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>www.linkedin.com</a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $members[$index]['github']; ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>www.github.com</a></li>
					                <li><a class="text-link" href="<?php echo $members[$index]['website']; ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>www.MainWebsite.com</a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $members[$index]['summary']; ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php displayWorkExperience($members[$index]['work-experience']); ?></h3>
										        <div class="resume-company-name ms-auto"></div>
										    </div>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
							    </div><!--//resume-timeline-->
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
									<ul class="list-unstyled mb-4">
										<?php  
											foreach ($members[$index]['skills-tools']['progress-bar'] as $progress_bar) {
										?>
										<div class="mb-2"></div>										
										<?php echo $progress_bar; ?>
											<div class="resume-skill-name">											
												<div class="progress resume-progress">
													<div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: 94%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										<?php
											}
										?>
							        </ul>
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold">Others</h4>
						            <ul class="list-inline">
										<?php  
											foreach ($members[$index]['skills-tools']['others'] as $others) {
										?>
							            <li class="list-inline-item">
											<span class="badge badge-light">
												<?php echo $others; ?>
											</span>
										</li>
										<?php
											}
										?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $members[$index]['education']['degree']; ?></div>
								        <div class="resume-degree-org"><?php echo $members[$index]['education']['school']; ?></div>
								        <div class="resume-degree-time"><?php echo $members[$index]['education']['years-attending']; ?></div>
								    </li>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Awards</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php  
										foreach ($members[$index]['awards'] as $awards) {
									?>
								    <li class="mb-0 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $awards['award-title']; ?></div>
								        <div class="resume-award-desc"><?php echo $awards['award-desc']; ?></div>
								    </li>
									<?php
										}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php  
										foreach ($members[$index]['languages'] as $languages) {
									?>
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $languages['lang-name']; ?></span> <small class="text-muted font-weight-normal"><?php echo $languages['lang-desc']; ?></small></li>
									<?php
										}
									?>
								</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php  
										foreach ($members[$index]['interests'] as $interests) {
									?>
								    <li class="mb-1"><?php echo $interests; ?></li>
									<?php
										}
									?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="<?php echo $members[$index]['projects']['project-1-image']; ?>" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"><?php echo $members[$index]['projects']['project-1-name']; ?></h5>
									<p class="card-text"><?php echo $members[$index]['projects']['project-1-desc']; ?></p>
									<a href="<?php echo $members[$index]['projects']['project-1-link']; ?>">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by <?php echo $members[$index]['footer-names']['name-1']; ?>, <?php echo $members[$index]['footer-names']['name-2']; ?>, and <?php echo $members[$index]['footer-names']['name-3']; ?></small>
    </footer>

    

</body>
</html> 

