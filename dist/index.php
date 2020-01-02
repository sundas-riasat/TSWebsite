<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
        name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="./main.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="images/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Technology Spirits</title>
</head>

<body>
    <div id="menu" class="nav">
        <div class="nav-container">
            <div class="row ">
                <div class="col m4 l4 xl6 ">
                    <a href="index.php"><img class="logo" src="images/logo.png" alt="Logo"></a>
                </div>
                <div class="menu col m8 l8 xl6">
                    <div class="row flex valign-wrapper">
                        <div class="col m2 l2 menu-item center"><a href="#home">Home</a></div>
                        <div class="col m2 l2 menu-item center"><a href="#portfolio">Portfolio</a></div>
                        <div class="col m2 l2 menu-item center"><a href="#services">Tech</a></div>
                        <div class="col m2 l2 menu-item center"><a href="#clients">Clients</a></div>
                        <div class="col m2 l2 menu-item center"><a href="#team">Team</a></div>
                        <div class="col m2 l2 menu-item center"><a href="#contact">Contact</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mob">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <div class="ham">
                        <div class="block"></div>
                        <div class="block"></div>
                        <div class="block"></div>
                    </div>
                </div>
                <div class="col s10 center">
                    <img class="logo" src="images/logo.png" alt="Logo">
                </div>
            </div>
        </div>
    </div>

    <div class="mob-menu">
        <div class="container valign-wrapper" style="height: 100%">
            <div class="row">
                <div class="col s12">
                    <ul class="center">
                        <li onclick="closeMenu()"><a href="#home">
                                <h5>Home</h5>
                            </a></li>
                        <li onclick="closeMenu()"><a href="#portfolio">
                                <h5>Products</h5>
                            </a></li>
                        <li onclick="closeMenu()"><a href="#services">
                                <h5>Technologies</h5>
                            </a></li>
                        <li onclick="closeMenu()"><a href="#clients">
                                <h5>Clients</h5>
                            </a></li>
                        <li onclick="closeMenu()"><a href="#team">
                                <h5>Team</h5>
                            </a></li>
                        <li onclick="closeMenu()"><a href="#contact">
                                <h5>Contact Us</h5>
                            </a></li>
                    </ul>
                </div>
                <div class="col" style="color:white; width: 100%; text-align: center">
                    <a href="mailto:info@tspirits.com">
                        <img class="icon" src="https://img.icons8.com/ios-filled/50/fafafa/new-post.png">
                    </a>
                    <p>info@tspirits.com</p>
                    <img class="icon add" src="https://img.icons8.com/pastel-glyph/64/fafafa/worldwide-location--v1.png"
                        alt="">
                    <p class="add">Germany, Hong Kong, S. Korea, Pakistan</p>
                    <div class="">
                        <a href="https://www.facebook.com/tspirits.pk/" target="_blank">
                            <img class="icon" src="images/fb.png" alt="">
                        </a>
                        <a href="https://www.linkedin.com/company/tspirits/" target="_blank">
                            <img class="icon " src="images/lin.png" alt="">
                        </a>
                    </div>
                    <a onclick="closeMenu()">
                        <h1>X</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="footer" class="footer">
        <div class="nav-container">
            <div class="row">
                <div class="contact col s0 m5 l5 valign-wrapper">
                    <a href="mailto:info@tspirits.com">
                        <img class="icon" src="https://img.icons8.com/ios-filled/50/000000/new-post.png">
                    </a>
                    <p>info@tspirits.com</p>
                    <img class="icon add" src="https://img.icons8.com/pastel-glyph/64/000000/worldwide-location--v1.png"
                        alt="">
                    <p class="add">Germany, Hong Kong, S. Korea, Pakistan</p>
                </div>
                <div class="col s12 m2 l2 valign-wrapper center">
                    <div class="below" style="margin: 0 auto;">
                        <div class="scrollIndicator">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="arrow-d">
                                <div class="arrow-left"></div>
                                <div class="arrow-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s0 m5 l5 ">
                    <div class="social-holder right">
                        <p class="copyrights">Copyrights &copy; 2019 Technology Spirits.</p>
                        <div class="">
                            <a href="https://www.facebook.com/tspirits.pk/" target="_blank">
                                <img class="icon" src="images/fb.png" alt="">
                            </a>
                        </div>
                        <div class="">
                            <a href="https://www.linkedin.com/company/tspirits/" target="_blank">
                                <img class="icon " src="images/lin.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullpage">
        <div class="section home" id="firstPage">
            <div class="nav-container">
                <div class="row flex">
                    <div class="col s0 m1 xl1 l1 ">
                        <h1 class="main-slide-indicator valign-wrapper">❬</h1>
                    </div>
                    <div class="col m10 l10 xl10">
                        <div class="nav-container ">
                            <div class="main-slide">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m6 l6 xl4">
                                        <h1>Next Generation Bespoke Solutions</h1>
                                        <p>
                                            With a wide range of hardware and software solutions, we build cutting edge
                                            solutions tailor-made for your business needs.
                                        </p>
                                    </div>
                                    <div class="col s12 m6 l6 xl8">
                                        <div class="img-holder">
                                            <img class="home-ill responsive-img" src="images/home-ill.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slide">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m6 l6 xl4">
                                        <h1>Embedded Intelligence for Industry 4.0</h1>
                                        <p>
                                            We inter-connect your entire value chain and workforce resulting in
                                            industrial ecosystems that are intelligent, transparent and simple!
                                        </p>
                                    </div>
                                    <div class="col s12 m6 l6 xl8">
                                        <div class="img-holder">
                                            <img class="home-ill responsive-img" src="images/ai.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slide ">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m6 l6 xl4">
                                        <h1>UX Driven Full-Stack Development</h1>
                                        <p>
                                            Experience a cross platform development from inception of an idea to a
                                            successful product that is focussed on user experience and cutting-edge
                                            technologies.
                                        </p>
                                    </div>
                                    <div class="col s12 m6 l6 xl8">
                                        <div class="img-holder">
                                            <img class="home-ill responsive-img" src="images/fs.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-slide">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m6 l6 xl4">
                                        <h1>Real-Time AI and Computer Vision</h1>
                                        <p>
                                            Transform your premises into a unified Smart and Secure System by using our
                                            AI and Computer Vision enabled edge devices.</p>
                                    </div>
                                    <div class="col s12 m6 l6 xl8">
                                        <div class="img-holder">
                                            <img class="home-ill responsive-img" src="images/cv.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s0 m1 xl1 l1">
                        <h1 class="main-slide-indicator valign-wrapper right">❭</h1>
                    </div>
                </div>
            </div>
            <div class="main-timeline-holder row ">
                <div class="col s12 m12 l12 ">
                    <div class="main">
                        <div class="main-timeline">

                        </div>
                        <div class="main-icon-holder">
                            <img class="main-icon" src="images/1x/chip.png" alt="">
                            <img class="main-icon" src="images/1x/intell.png" alt="">
                            <img class="main-icon" src="images/1x/mfstack.png" alt="">
                            <img class="main-icon" src="images/1x/vision.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="secondPage">
            <div class="nav-container ">
                <div class="row valign-wrapper">
                    <div class="col s12 m2 l2">
                        <h1 class="title">Our Innovative Products</h1>
                    </div>
                    <div class="col s0 m2 l2">

                    </div>
                    <div class="col s12 m8 l8">
                        <div class="">
                            <div class="row prod">
                                <div class="col s12 m6 l6 xl4">
                                    <h3>Real-time Biometric System</h3>
                                    <p>
                                        For enterprise level access control and attendance systems, TS has developed an
                                        AI
                                        enabled and a scalable face and fingerprint recognition solution with an add-on
                                        option of an integrated RFID reader. It runs on state-of-the-art AI-enabled
                                        biometric software and leverages Ethernet or WiFi communication to synchronize
                                        with
                                        cloud or local enterprise server.
                                    </p>
                                </div>
                                <div class="col s12 m6 l6 xl6 prod-image-holder valign-wrapper ">
                                    <img class="prod-image responsive-img" src="images/4x/bmi.png" alt="">
                                </div>
                            </div>
                            <div class="row prod">
                                <div class="col s12 m6 l6 xl4">
                                    <h3>Smart Retractable Umbrellas</h3>
                                    <p>
                                        Control hardware and software solution for control of large-scale retractable
                                        umbrellas deployment in huge public places, e.g., deployment of sorts in Madina
                                        and
                                        Mecca. The system connects all the umbrellas in real-time to a central command
                                        center, monitoring ambient parameters and system’s health to take appropriate
                                        control actions.
                                    </p>
                                </div>
                                <div class="col s12 m6 l6 xl6 prod-image-holder valign-wrapper">
                                    <img class="prod-image responsive-img" src="images/4x/umi.png" alt="">
                                </div>
                            </div>
                            <div class="row prod">
                                <div class="col s12 m6 l6 xl4">
                                    <h3>Secure Eye (AI Enabled Camera)</h3>
                                    <p>
                                        An AI-enabled perimeter security solution for smart homes
                                        which gives real-time alerts for any human intrusions and/or car movements. It
                                        come
                                        with its own mobile and tablet applications (android &
                                        iOS) to provide continuous monitoring. Available commercially via Pakistan’s
                                        largest
                                        Internet Service Provider Nayatel.
                                    </p>
                                </div>
                                <div class="col s12 m6 l6 xl6 prod-image-holder valign-wrapper">
                                    <img class="prod-image responsive-img" src="images/4x/sei.png" alt="">
                                </div>
                            </div>
                            <div class="row prod">
                                <div class="col s12 m6 l6 xl4">
                                    <h3>Smart Energy Management</h3>
                                    <p>
                                        A state-of-the-art day-ahead energy management system with smart load balancing
                                        features weather forecast integration, third-party load devices integrations,
                                        smart
                                        charging and discharging of batteries, admin and user web-portals for control of
                                        devices and sites, embedded HMI screens and Android/iOS mobile apps.
                                    </p>
                                </div>
                                <div class=" col s12 m6 l6 xl6 prod-image-holder valign-wrapper">
                                    <img class="prod-image responsive-img" src="images/4x/semsi.png" alt="">
                                </div>
                            </div>
                            <div class="prod-timeline-holder row">
                                <div class="col s12 m12 l12">
                                    <div class="prod-timeline">

                                    </div>
                                    <div class="prod-icon-holder">
                                        <img class="prod-icon" src="images/4x/bm.png" alt="">
                                        <img class="prod-icon" src="images/4x/um.png" alt="">
                                        <img class="prod-icon" src="images/4x/se.png" alt="">
                                        <img class="prod-icon" src="images/4x/home@4x.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="thirdPage">
            <div class="nav-container">
                <div class="row valign-wrapper">
                    <div class="col s12 m2 l2 xl2">
                        <h1 class="title">Our Expertise</h1>
                    </div>
                    <div class="col s0 m2 l2 xl2">

                    </div>
                    <div class="col s12 m8 l8 xl8 ">
                        <div class="row services">
                            <div class="col s12 m12 l12 xl12 ">
                                <div class="right-s ">
                                    <div class="row ">
                                        <div class="col s12 service-text">
                                            <h3 class="center">Artificial Intelligence</h3>
                                        </div>
                                        <div class="col s12 ">
                                            <img class="tech responsive-img" src="images/ais.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-s">
                                    <div class="row">
                                        <div class="col s12 service-text">
                                            <h3 class="center">Embedded Systems</h3>
                                        </div>
                                        <div class="col s12 ">
                                            <img class="tech responsive-img" src="images/e%20systems.png" alt="">

                                        </div>
                                    </div>
                                </div>
                                <div class="right-s">
                                    <div class="row">
                                        <div class="col s12 service-text">
                                            <h3 class="center">Cloud-Data Platforms</h3>
                                        </div>
                                        <div class="col s12 ">
                                            <img class="tech responsive-img" src="images/fullsatck.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="right-s">
                                    <div class="row">
                                        <div class="col s12 service-text">
                                            <h3 class="center ">Full-Stack Development</h3>
                                        </div>
                                        <div class="col s12">
                                            <img class="tech responsive-img" src="images/cloudanddata.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-timeline-holder row">
                            <div class="col s12 m12 l12">
                                <div class="service-timeline">

                                </div>
                                <div class="service-icon-holder">
                                    <img class="service-icon " src="images/1x/AI.png" alt="">
                                    <img class="service-icon" src="images/1x/emb.png" alt="">
                                    <img class="service-icon " src="images/1x/fstack.png" alt="">
                                    <img class="service-icon" src="images/1x/cloud.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col s12 center ">
                        <div class="mob-service-title">
                            <h5>AI & Machine Learning</h5>
                            <h5>Embedded Systems</h5>
                            <h5>Full Stack Development</h5>
                            <h5>Cloud & Data Platforms</h5>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="section" id="fourthPage">
            <div class="nav-container">
                <div class="row valign-wrapper">
                    <div class="col m2 s12 l2">
                        <h1 class="title">Our Clients And Partners</h1>
                    </div>
                    <div class="col m2 s12 l2"></div>
                    <div class="col m8 s12 l8">
                        <div class="row">
                            <div class="clients">
                                <img class="client-icon" src="images/Logos/Clients/clients.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="sixthPage">
            <div class="nav-container">
                <div class="row valign-wrapper">
                    <div class="col s12 m2 l2 ">
                        <h1 class="title">The Creative Team</h1>
                    </div>
                    <div class="col m1 l1 s0"></div>
                    <div class="col s12 m8 l8">
                        <div class="row valign-wrapper">
                            <div class="col s1 m1 l2 xl1">
                                <p class="left-a">❬</p>
                            </div>
                            <div class="col s10 m10 l8 xl10 valign-wrapper ">
                                <div class="team-holder">
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/abdul_khaliq.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Dr. Abdul Khaliq</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Chief Strategy
                                                        Officer</h5>
                                                    <p class="t-desig" style="font-size: 14px;">PhD Electromechanical
                                                        Systems
                                                        (US)</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/mansoorshaukat/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/dr_mansoor.png');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Dr. Mansoor Shaukat</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Founder & CEO
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">PhD Robotics
                                                            NUS(Singapore)</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/umerfarooqai/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/umer_farooq.png');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Umer Farooq</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Chief Technology
                                                            Officer</h5>
                                                        <p class="t-desig" style="font-size: 14px;">MSc. Robotics & AI
                                                            NUST</p>
                                                    </div>

                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/yasir_naveed.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Yasir Naveed</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Head of BD (Asia)
                                                    </h5>
                                                    <p class="t-desig" style="font-size: 14px;">MBA
                                                        UoT + HKUST</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/farukh_bilal_qureshi.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Farrukh Bilal Qureshi</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Investor</h5>
                                                    <p class="t-desig" style="font-size: 14px;">CEO 360 Technologies</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/muhammad_adeel.png');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Muhammad Adeel</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Co-Founder</h5>
                                                    <p class="t-desig" style="font-size: 14px;">MSc. ES
                                                        Universität Stuttgart</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-holder">
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/attiya_mansoor.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Attiya Mansoor</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Chief Financial
                                                        Officer</h5>
                                                    <p class="t-desig" style="font-size: 14px;">MBA IIUI </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/zainali84/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/zain_ali.jpg');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Zain Ali</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Software Lead
                                                            (AI+FPGAs)</h5>
                                                        <p class="t-desig" style="font-size: 14px;">BSc. Computer Engg.
                                                            CASE</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/saad-saeed-a7a79089/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/saad-a.jpeg');background-position: top;
        background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Saad Saaed</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Software Lead
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">MSc. Computer
                                                            Science
                                                            NU-FAST</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/MAli.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Dr. Muhammad Ali</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Head of BD (EU)</h5>
                                                    <p class="t-desig" style="font-size: 14px;">PhD Nano-technology
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/madiha_hassan.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Madiha Hasan</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Graphics Designer
                                                    </h5>
                                                    <p class="t-desig" style="font-size: 14px;">BSc. Computer Arts.
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/uzair-rafique-28893716b/"
                                                target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/uzair_rafique.jpg');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Uzair Rafique</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Design Eng. (ES)
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">BSc. Computer Engg.
                                                            CASE</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-holder">
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/tooba-akbar-34201213b" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/tooba_akbar.jpg');background-position: top;
        background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Tooba Akbar</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Media Specialist
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">BS Mass
                                                            Communication
                                                            NUST</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/sundasriasat/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/sundas_riasat.jpg');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Sundas Riasat</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Front End
                                                            Developer
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">BSc Computer Science
                                                            IIUI</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/alizak97/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/ali-zak.JPG');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Ali Zakria</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Design Eng. (ES)
                                                        </h5>
                                                        <p class="t-desig" style="font-size: 14px;">BSc. Mechatronics
                                                            NUST</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row flex team">
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/omar-hassan-507598181/" target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/omar_hassan.png');background-position: top;
                background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Omar Hassan</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Design Engineer
                                                            (AI)</h5>
                                                        <p class="t-desig" style="font-size: 14px;">BS ECE
                                                            CASE</p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <div class="team-member">
                                                <div class="team-pic" style="background: url('images/team/AbdulHanan.jpg');background-position: top;
    background-size: cover;">
                                                </div>
                                                <div class="social"
                                                    style="background: transparent; color:black; height:fit-content;">
                                                    <h6 class="t-name">Abdul Hannan</h6>
                                                    <h5 class="t-desig" style="font-style: normal ">Design Eng. (ES)
                                                    </h5>
                                                    <p class="t-desig" style="font-size: 14px;">BSc. Mechatronics Engg.
                                                        NUST</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col s4 m4 l4">
                                            <a href="https://www.linkedin.com/in/ehtasham-ahmed-b76807151"
                                                target="blank">
                                                <div class="team-member">
                                                    <div class="team-pic" style="background: url('images/team/ehtesham.jpg');background-position: top;
        background-size: cover;">
                                                    </div>
                                                    <div class="social"
                                                        style="background: transparent; color:black; height:fit-content;">
                                                        <h6 class="t-name">Ehtasham Ahmed</h6>
                                                        <h5 class="t-desig" style="font-style: normal ">Design Engineer
                                                            (AI)</h5>
                                                        <p class="t-desig" style="font-size: 14px;">BSc. Electrical
                                                            Engineering
                                                        </p>
                                                    </div>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s1 m1 l2 xl1">
                                <p class="right-a">❬</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="fifthPage">
            <div class="map">
                <div class="nav-container">
                    <div class="row valign-wrapper">
                        <div class="col m2 s12 l2 xl2">
                            <h1 class="title">Contact Us</h1>
                        </div>
                        <div class="col m1 s12 l1 xl2"></div>
                        <div class="col m7 s12 l5 xl5">
                            <div class="row">
                                <form id="frmContact" action="">
                                    <div class="col s6 m6 l6">
                                        <input type="text" id="firstName" name="firstName" placeholder="First Name"
                                            class="inp">
                                    </div>
                                    <div class="col s6 m6 l6">
                                        <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                                            class="inp"><br> <br>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <input type="text" id="number" name="number" placeholder="Phone Number"
                                            class="inp"> <br> <br>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <input type="email" id="email" name="email" placeholder="Email" class="inp"><br>
                                        <br>
                                    </div>
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Message" id="message" name="message"
                                            class=" inp materialize-textarea"></textarea><br> <br>
                                    </div>
                                    <div class="col s12 m12 l12 center">
                                        <br>
                                        <button onClick="sendContact(event);"
                                            class="waves-effect waves-light btn-large grey darken-4">Send Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="row contact-details">
                                <div class="office-hours">
                                    <div class="col s12 m12 l12 " style="text-align: center">
                                        <h4>Office Hours</h4>
                                        <p>Monday - Saturday<br>
                                            10 AM - 7 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map-loc col m2 s0 l4 xl5">
                            <div class="row ">
                                <img class="map-loc" src="images/map-loc.png" style="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="js/fullpage.js" type="text/javascript"></script>
    <script src="./bundle.js" type="text/javascript"></script>
    <script>
        function sendContact(e) {
            e.preventDefault();
            var valid;
            valid = validateContact();
            if (valid) {
                jQuery.ajax({
                    url: "contact_mail.php",
                    data: 'userName=' + $("#firstName").val() + " " + $("#lastName").val() + '&userEmail=' +
                        $("#email").val() + '&phoneNumber=' +
                        $("#number").val() + '&content=' +
                        $("#message").val() + '&subject=' +
                        "Sent from TSPIRITS.COM",
                    type: "POST",
                    success: function (data) {
                        M.toast({
                            html: 'Thanks, Your email has been recieved.',
                            classes: 'green white-text'
                        })
                    },
                    error: function () {}
                });
            } else {
                M.toast({
                    html: 'Invalid information provided. All fields are required and email must be a valid email.',
                    classes: 'red white-text'
                })
            }
        }

        function validateContact() {
            var valid = true;
            if (!$("#firstName").val()) {
                $("#firstName").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#lastName").val()) {
                $("#lastName").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#email").val()) {
                $("#email").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#email").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#number").val()) {
                $("#number").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!$("#message").val()) {
                $("#message").css('background-color', '#FFFFDF');
                valid = false;
            }
            return valid;
        }
    </script>
</body>

</html>