<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James Obong'o | Professional Portfolio</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

        :root {
            --navy: #0a192f;
            --light-navy: #112240;
            --lightest-navy: #233554;
            --yellow: #ffd700;
            --light-yellow: #ffed4e;
            --white: #e6f1ff;
            --light-gray: #8892b0;
            --transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--navy);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }
        #error,#success{
            padding: 5px 7px;
            margin-bottom: 5vh;
        }
        #error{
            color: #ff0000ff;
        }
        #success{
            color: #00ff1aff;
        }

        .stars {
            display: flex;
            gap: 8px;
            font-size: 30px;
            cursor: pointer;
            color: #ccc; /* default color */
            transition: color 0.2s ease;
        }
        .stars i.active {
            color: gold; /* selected stars */
        }
        #username,#comment{
            min-width: 20vw;
            min-height: 5vh;
            border-radius: 5px;
            padding: 5px;
            margin-bottom: 2vh;
            font-weight: bold;
        }
        #submit-rating{
            background-color: #e7b500ff;
            border-radius: 5px;
            box-shadow: 1px 5px 5px #ffffff42;
            min-width: 20vw;
            min-height: 5vh;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
        }
        #rating{
            width: 50vw;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(10, 25, 47, 0.9);
            backdrop-filter: blur(10px);
            z-index: 1000;
            transition: var(--transition);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--yellow);
            text-decoration: none;
        }

        .logo span {
            color: var(--white);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2.5rem;
        }

        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            transition: var(--transition);
            position: relative;
        }

        nav ul li a:hover {
            color: var(--yellow);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--yellow);
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .stars i:active{
            color: #ffd700;
        }
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }

       .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;margin-top:65px}
        .hero-left{padding:24px;background:linear-gradient(180deg,rgba(255,255,255,0.02),transparent);border-radius:var(--radius);backdrop-filter: blur(6px);}
        .eyebrow{display:inline-block;padding:6px 10px;background:var(--glass);border-radius:999px;color:var(--yellow);font-weight:600;margin-bottom:12px}
        h2{margin:0 0 8px 0;font-size:34px}
        .lead{color:var(--muted);margin-bottom:18px}

        .profile-card{background:var(--card);border-radius:12px;padding:18px;display:flex;gap:14px;align-items:center}
        .avatar{width:96px;height:96px;border-radius:12px;object-fit:cover;background:linear-gradient(135deg,var(--yellow),#ffc857);display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--navy)}
        .meta small{color:var(--muted);display:block}
        .skills{display:flex;gap:8px;flex-wrap:wrap;margin-top:12px}
        .skill{background:rgba(255,255,255,0.03);padding:6px 10px;border-radius:999px;color:var(--muted);font-size:13px}
        .stats{display:flex;gap:12px;margin-top:18px}
        .stat{background:transparent;padding:5px;border-radius:10px;flex:1;text-align:center}
        .stat h3{margin:0;font-size:20px}
        .stat p{margin:6px 0 0;color:var(--muted)}
        

        .hero-text h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-text h1 span {
            color: var(--yellow);
        }

        .hero-text p {
            font-size: 1.2rem;
            color: var(--light-gray);
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: transparent;
            color: var(--yellow);
            border: 1px solid var(--yellow);
            border-radius: 4px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn:hover {
            background-color: rgba(255, 215, 0, 0.1);
            transform: translateY(-3px);
        }

        .btn-primary {
            background-color: var(--yellow);
            color: var(--navy);
            margin-right: 1rem;
        }

        .btn-primary:hover {
            background-color: var(--light-yellow);
            transform: translateY(-3px);
        }

        .hero-image {
            position: relative;
            text-align: center;
        }

        .profile-img {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--yellow);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Section Styling */
        section {
            padding: 6rem 5%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--white);
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            display: block;
            width: 70px;
            height: 3px;
            background-color: var(--yellow);
            margin: 0.5rem auto;
        }

        /* About Section */
        .about-content {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--light-gray);
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .skill {
            background-color: var(--light-navy);
            padding: 0.5rem 1.2rem;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .skill:hover {
            transform: translateY(-5px);
            background-color: var(--lightest-navy);
        }

        .about-images {
            display: block;
            gap: 1.5rem;
        }

        .about-img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: var(--transition);
        }

        .about-img:hover {
            transform: scale(1.05);
        }

        /* Services Section */
        .services {
            background-color: var(--light-navy);
        }

        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background-color: var(--navy);
            padding: 2.5rem;
            border-radius: 10px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid var(--lightest-navy);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            border-color: var(--yellow);
        }

        .service-icon {
            font-size: 3rem;
            color: var(--yellow);
            margin-bottom: 1.5rem;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: var(--light-gray);
        }

        /* Portfolio Section */
        .portfolio-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .portfolio-item {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            height: 250px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 25, 47, 0.9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: var(--transition);
            padding: 2rem;
            text-align: center;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        .portfolio-overlay h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--yellow);
        }

        .portfolio-overlay p {
            color: var(--light-gray);
            margin-bottom: 1.5rem;
        }

        /* Contact Section */
        .contact {
            background-color: var(--light-navy);
        }

        .contact-container {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: var(--yellow);
        }

        .contact-details {
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            font-size: 1.2rem;
            color: var(--yellow);
            margin-right: 1rem;
            width: 30px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1.5rem;
            background-color: var(--navy);
            border: 1px solid var(--lightest-navy);
            border-radius: 4px;
            color: var(--white);
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--yellow);
        }

        .contact-form textarea {
            height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--navy);
            padding: 4rem 5% 2rem;
            border-top: 1px solid var(--lightest-navy);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--yellow);
            position: relative;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--yellow);
        }

        .footer-col p {
            color: var(--light-gray);
            margin-bottom: 1.5rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: var(--light-gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--yellow);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--light-navy);
            border-radius: 50%;
            color: var(--white);
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--yellow);
            color: var(--navy);
            transform: translateY(-5px);
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 3rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid var(--lightest-navy);
            text-align: center;
            color: var(--light-gray);
            font-size: 0.9rem;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content,
            .about-content,
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .hero-text h1 {
                font-size: 2.8rem;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            nav ul {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background-color: var(--navy);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 3rem;
                transition: var(--transition);
            }
            .typing{
                font-size:18px;
            }
            nav ul.active {
                left: 0;
            }

            nav ul li {
                margin: 1.5rem 0;
            }

            .menu-toggle {
                display: block;
            }

            .hero-text h1 {
                font-size: 2.2rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
            .hero{
                display: block;
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 1.8rem;
            }

            .btn {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }

            .profile-img {
                width: 250px;
                height: 250px;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo"><span>Hello, I'm</span> Jamedia </a>
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav>
            <ul id="navMenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#rateme" class="rate" style="background-color: #ffd700; padding: 5px 10px; border-radius: 5px; color: #08005cff; font-weight: bold">Rate me</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="hero-left card fade-in">
        <span class="eyebrow" innerText=""> I build useful things </span>
        <h2 class="typing">Hi, I'm a <span class="typing" id="role" style="color: #ffc857;"></span></h2>
        <p class="lead">A modern web developer with a design-first approach. I build fast, accessible and beautiful web apps and websites for small businesses and startups.</p>

        <div class="profile-card">
          <div class="meta">
            <strong>Jamedia </strong>
            <small> Momabasa, Kenya • Available for freelance</small>
          </div>
        </div>

        <div class="stats">
          <div class="stat">
            <h3>3+</h3>
            <p>Years experience</p>
          </div>
          <div class="stat">
            <h3>12+</h3>
            <p>Projects delivered</p>
          </div>
          <div class="stat">
            <h3>94%</h3>
            <p>Client satisfaction</p>
          </div>
        </div>

      </div>

      <div class="hero-content">
            <div class="hero-image fade-in">
                <img src="http://localhost/PORTFOLIO/images/profile2.jpg" alt="James Obong'o" class="profile-img">
            </div>
        </div>
      
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="section-title">
            <h2>About Me</h2>
        </div>
        <div class="about-content">
            <div class="about-text fade-in">
                <p>Hello! I'm James Obong'o (<b style="color: #ffc857;">Jamedia</b>), a passionate full-stack developer with over 5 years of experience creating digital solutions for businesses of all sizes. I specialize in building exceptional websites, applications, and everything in between.</p>
                <p>My journey in web development started during my computer science studies, and I've been hooked ever since. I enjoy turning complex problems into simple, beautiful, and intuitive designs.</p>
                <p>When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or enjoying outdoor activities.</p>
                <div class="skills">
                    <div class="skill">JavaScript</div>
                    <div class="skill">React</div>
                    <div class="skill">Node.js</div>
                    <div class="skill">Python</div>
                    <div class="skill">PHP</div>
                    <div class="skill">UI/UX Design</div>
                    <div class="skill">MongoDB</div>
                    <div class="skill">MySql</div>
                    <div class="skill">Git</div>
                </div>
            </div>
            <div class="about-images fade-in">
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" alt="Designing" class="about-img">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="section-title">
            <h2>My Services</h2>
        </div>
        <div class="services-container">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Custom website development using modern technologies and frameworks to create fast, responsive, and scalable web applications.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>UI/UX Design</h3>
                <p>User-centered design approach to create intuitive and engaging interfaces that enhance user experience and drive conversions.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobile Development</h3>
                <p>Building cross-platform mobile applications that provide seamless user experiences across all devices and screen sizes.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>SEO Optimization</h3>
                <p>Improving website visibility on search engines through strategic optimization techniques to drive organic traffic and growth.</p>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="section-title">
            <h2>My Portfolio</h2>
        </div>
        <div class="portfolio-container">
            <div class="portfolio-item fade-in">
                <img src="my_works/darrylenet.png" alt="Micro-ISP website" class="portfolio-img">
                <div class="portfolio-overlay">
                    <h3>Micro-ISP website Platform</h3>
                    <p>Full-stack web solution with feedback connected to the organizations server.</p>
                    <a href="https://jamedia-max.github.io/DARRYLNET/" class="btn">View Project</a>
                </div>
            </div>
            <div class="portfolio-item fade-in">
                <img src="my_works/edutrack.png" alt="EduTrack" class="portfolio-img">
                <div class="portfolio-overlay">
                    <h3>EduTrack landing page</h3>
                    <p>Interactive site for teachers, parents and students to view results and teachers can also upload latest reports.</p>
                    <a href="https://jamedia-max.github.io/DARRYLNET/" class="btn">View Project</a>
                </div>
            </div>
            <div class="portfolio-item fade-in">
                <img src="my_works/library.png" alt="Library management" class="portfolio-img">
                <div class="portfolio-overlay">
                    <h3>Library Management</h3>
                    <p>Essential plartform to monitor the books lended and returned so as not to loose track of the books.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="section-title">
            <h2>Get In Touch</h2>
        </div>
        <div class="contact-container">
            <div class="contact-info fade-in">
                <h3>Let's Talk</h3>
                <p>I'm currently available for freelance work and full-time positions. If you have a project that you want to get started, think you need my help with something, or just want to say hello, then get in touch.</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>Mombasa, Kenya</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto: jamedia9599@gmail.com" style="color: #fff; font-weight: bold; text-decoration: none">jamedia9599@gmail.com</a> </p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel: +254 713 761 640" style="color: #fff; font-weight: bold; text-decoration: none">+254 713 761 640</a> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form fade-in">
                <form id="contactForm" method="POST" action="">
                    <input type="text" placeholder="Your Name" name="user-name" required>
                    <input type="email" placeholder="Your Email" name="email" required>
                    <input type="text" placeholder="Subject" name="subject" required>
                    <textarea placeholder="Your Message" name="message" required></textarea>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>


    <section id="rateme" class="rateme">
        <div class="section-title">
            <h2>Would you like to rate my work?</h2>
        </div>
        <div class="">
            <div class="contact-info fade-in" style="display: flex; justify-content:center">
                <h3 style="text-align: center;">I will highly appreciate your rating</h3>                
            </div><br>
            <div class="rating-form fade-in" style="display: flex; justify-content:center">
                <form id="rating" method="POST" action="msgs.php" >
                    <div class="stars" id="stars">
                        <i class="fa fa-star" data-value="1"></i>
                        <i class="fa fa-star" data-value="2"></i>
                        <i class="fa fa-star" data-value="3"></i>
                        <i class="fa fa-star" data-value="4"></i>
                        <i class="fa fa-star" data-value="5"></i>
                    </div>
                    <input id="ratingValue" hidden name="rating" value="0"><br>
                    <input type="text" name="username" id="username" placeholder="Your name (Optional)"><br>
                    <input type="text" name="comment" id="comment" placeholder="Tell me something (optional)"><br>
                    <button type="submit" id="submit-rating">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <h4>James Obong'o</h4>
                <p>Full Stack Developer creating beautiful, functional, and user-friendly digital experiences.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/jamedia-max" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.tiktok.com/@jamedia01" target="_blank"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul class="footer-links">
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">UI/UX Design</a></li>
                    <li><a href="#">Mobile Development</a></li>
                    <li><a href="#">SEO Optimization</a></li>
                    <li><a href="#">Consultation</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>Subscribe to my newsletter to receive updates on new projects and articles.</p>
                
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 JamediaTechSolutions. All Rights Reserved.</p>
        </div>
    </footer>

    
</body>
    <script>
        const stars = document.querySelectorAll('#stars i');
        const ratingValue = document.getElementById('ratingValue');
        let currentRating = 0;

        stars.forEach(star => {
            star.addEventListener('click', () => {
            currentRating = parseInt(star.getAttribute('data-value'));
            updateStars(currentRating);
            });
        });

        function updateStars(rating) {
            stars.forEach(star => {
            const value = parseInt(star.getAttribute('data-value'));
            // add 'active' to stars <= current rating
            star.classList.toggle('active', value <= rating);
            });
            ratingValue.value = `${rating}`;
        }

      const roles = ['Full-stack Developer','UI/UX Designer'];
      let idx = 0; let letter = 0; const roleEl = document.getElementById('role');
      function type(){
        if(letter <= roles[idx].length){
          roleEl.textContent = roles[idx].slice(0, letter);
          letter++; setTimeout(type, 80);
        } else { setTimeout(()=>{erase()}, 900); }
      }
      function erase(){
        if(letter >= 0){
          roleEl.textContent = roles[idx].slice(0, letter);
          letter--; setTimeout(erase, 40);
        } else { idx = (idx+1) % roles.length; setTimeout(type, 200); }
      }
      type();

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('nav ul li a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Scroll animations
        const fadeElements = document.querySelectorAll('.fade-in');

        const appearOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -100px 0px"
        };

        const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);

        fadeElements.forEach(element => {
            appearOnScroll.observe(element);
        });

            //e.preventDefault();

        // Header background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(10, 25, 47, 0.95)';
                header.style.padding = '1rem 5%';
            } else {
                header.style.backgroundColor = 'rgba(10, 25, 47, 0.9)';
                header.style.padding = '1.5rem 5%';
            }
        });
        
    </script>
<?php
    include 'config.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['user-name'];
        $email = trim($_POST['email']);
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = $conn->prepare("INSERT INTO messages (Username, Email, Subject, Message) VALUES (?, ?, ?, ?)");
        $sql->bind_param('ssss', $name, $email, $subject, $message);

        if ($sql->execute()) {
                        echo "<script>
                                Toastify({
                                    text: 'Mesaage sent. I will get back to you as soon as possible.',
                                    duration: 3000,
                                    close: true,
                                    gravity: 'top',
                                    position: 'right',
                                    backgroundColor: 'linear-gradient(to right, #109b00ff, #001057ff)',
                                }).showToast();
                            </script>";
        } else {
            // Error - handled by JavaScript
            echo "<script>
                        Toastify({
                            text: 'Actions failed! Please retry again later or contact me using other details.',
                            duration: 3000,
                            close: true,
                            gravity: 'top',
                            position: 'right',
                            backgroundColor: 'linear-gradient(to right, #ff0000ff, #001057ff)',
                        }).showToast();
                </script>";
        }

        $sql->close();
        $conn->close();
    }
?>

</html>