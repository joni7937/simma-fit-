<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/photo_2024-09-23_15-48-40.jpg" type="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Simma Fit</title>
</head>
<body>

    <div class="contentBlock Header">
        <div class="menu">
            <div class="logo-container me-4">
                <a href="index.html">
                    <img class="logo" src="./img/logo.png" alt="Logo">
                </a>
            </div>
        
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="about.html">About us</a>
                <a href="classes.php">Classes</a>
                <a href="contacts.html">Contact</a>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
            </div>

            <div class="container-fluid p-0 mb-5">
                <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 carousel-image" src="img/karusel.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 600px;">
                                    <h5 class="text-white text-uppercase">Best Gym Center</h5>
                                    <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Simma Fit</h1>
                                
                                    <a href="contacts.html" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 carousel-image" src="img/karusel 2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 600px;">
                                    <h5 class="text-white text-uppercase">Best Gym Center</h5>
                                    <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our Trainers</h1>
                            
                                    <a href="contacts.html" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <img class="w-100 carousel-image" src="img/лфкгыуд 3.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 600px;">
                                    <h5 class="text-white text-uppercase">Achieve Your Fitness Goals</h5>
                                    <h1 class="display-2 text-white text-uppercase mb-md-4">Join Our Fitness Journey Today</h1>
                                
                                    <a href="contacts.html" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="contentBlock transfering" id="multiCurrency">
                <div class="about-transfering">
                    <h2>Real time currency check and easier tracking system</h2>
                    <p>The Simma Fit fitness club chain in Tashkent is
                        a harmonious combination of innovative fitness technologies with impeccable service and design. The company is divided into segmentation of clubs: luxury, premium and business class.</p>    
                    <a class="desktop" href="about.html">About us</a>
                </div>
                <div class="img-transfering mobile" style="margin-top: 50px;">
                    <img src="./img/tarining.jpg" alt="">
                </div>    
            </div>
            
            <div class="container-fluid p-5" style="background-color: white;">
                <div class="mb-5 text-center">
                    <h5 class="text-primary text-uppercase">Class Schedule</h5>
                    <h1 class="display-3 text-uppercase mb-0">Working Hours</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Monday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Tuesday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Wednesday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-4">Thursday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-5">Friday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-6">Saturday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-7">Sunday</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade p-0">
                            <div class="row g-5">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                        <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                        <h5 class="text-uppercase text-primary">Body Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Alina Sergeevna</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                        <p class="text-uppercase text-secondary mb-0">Anastasia Vovk</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucinda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Lucia Mikusova</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                        <p class="text-uppercase text-secondary mb-0">Svein Falzon</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="bg-dark rounded text-center py-5 px-3">
                                        <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                        <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                        <p class="text-uppercase text-secondary mb-0">Shahlo White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h1>Meet our top trainers</h1>
                <div class="trainer-grid">
                 
                  <div class="trainer-card">
                    <img src="./img/trainer.jpg" alt="Trainer 1" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Anastasia Vovk</p>
                      <p class="trainer-speciality">Cardio Coach</p>
                      <p class="trainer-rate">Session Rate: $30/hr</p>
                    </div>
                  </div>
            
               
                  <div class="trainer-card">
                    <img src="./img/trainer 2.jpg" alt="Trainer 2" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Svein Falzon</p>
                      <p class="trainer-speciality">Strength Training Expert</p>
                      <p class="trainer-rate">Session Rate: $40/hr</p>
                    </div>
                  </div>
            
             
                  <div class="trainer-card">
                    <img src="./img/trainer 3.jpg" alt="Trainer 3" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Alina Sergeevna</p>
                      <p class="trainer-speciality">Yoga Instructor</p>
                      <p class="trainer-rate">Session Rate: $50/hr</p>
                    </div>
                  </div>
            
                  <div class="trainer-card">
                    <img src="./img/trainer 4.jpg" alt="Trainer 4" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Annabel Lucinda</p>
                      <p class="trainer-speciality">CrossFit Trainer</p>
                      <p class="trainer-rate">Session Rate: $85/hr</p>
                    </div>
                  </div>

                  <div class="trainer-card">
                    <img src="./img/trainer 5.jpg" alt="Trainer 5" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Shahlo White</p>
                      <p class="trainer-speciality">Yoga Instructor</p>
                      <p class="trainer-rate">Session Rate: $185/hr</p>
                    </div>
                  </div>

                  <div class="trainer-card">
                    <img src="./img/trainer 6.jpg" alt="Trainer 6" class="trainer-photo">
                    <div class="trainer-info">
                      <p class="trainer-name">Lucia Mikusova</p>
                      <p class="trainer-speciality">CrossFit Trainer</p>
                      <p class="trainer-rate">Session Rate: $65/hr</p>
                    </div>
                  </div>
                </div>
              </div>
           

<div class="container" style="margin-top: 80px">
    <h2 class="text-center mb-4" style="color: white;">Request a Callback</h2>
    
    <?php if (isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success text-center" role="alert">
            <?php echo $_SESSION['success_message']; ?>
        </div>
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>
    
    <form id="callbackForm" action="submit_callback.php" method="POST" class="p-4 rounded shadow" style="background-color: white;">
        <div class="mb-3">
            <label for="firstName" class="form-label" style="color: #333;">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Enter your first name" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label" style="color: #333;">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Enter your last name" required>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label" style="color: #333;">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
      
        <div class="mb-3">
            <label for="email" class="form-label" style="color: #333;">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
        </div>
    
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
            <label class="form-check-label" for="terms" style="color: #333;">I agree to the terms and conditions</label>
        </div>
    
        <button type="submit" class="btn w-100" style="background-color: #e247bb; color: white;">Submit</button>
    </form>
</div>

              <footer style="margin-top: 80px;">
                <p>© 2024 SIMMA FIT. Все права защищены.</p>
            </footer>

        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>