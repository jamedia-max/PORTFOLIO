<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jamedia O — Portfolio</title>
  <meta name="description" content="Modern professional portfolio — profile, about, services, projects, contact." />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --navy: #0b2545; /* deep navy */
      --midnavy: #14283e;
      --yellow: #ffd166; /* warm yellow */
      --muted: #9aa8bd;
      --glass: rgba(255,255,255,0.06);
      --card: rgba(255,255,255,0.03);
      --radius: 14px;
      --max-width: 1100px;
      color-scheme: light dark;
      --ease: cubic-bezier(.2,.9,.3,1);
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:'Inter',system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial}
    body{background:linear-gradient(180deg,var(--navy) 0%, #081427 60%);color:#e9f0fb;line-height:1.5}

    /* page container */
    .wrap{max-width:var(--max-width);margin:40px auto;padding:32px}

    /* header / nav */
    header{display:flex;align-items:center;justify-content:space-between;gap:16px}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--yellow),#ffc857);display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--navy);box-shadow:0 6px 24px rgba(0,0,0,0.4)}
    .brand h1{font-size:18px;margin:0}
    nav{display:flex;gap:14px;align-items:center}
    nav a{color:var(--muted);text-decoration:none;padding:8px 12px;border-radius:8px}
    nav a:hover{color:var(--yellow);background:rgba(255,209,102,0.06)}

    .cta{background:var(--yellow);color:var(--navy);font-weight:700;padding:10px 14px;border-radius:10px;box-shadow:0 6px 20px rgba(255,209,102,0.12)}

    /* hero/profile */
    .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;margin-top:36px}
    .hero-left{padding:24px;background:linear-gradient(180deg,rgba(255,255,255,0.02),transparent);border-radius:var(--radius);backdrop-filter: blur(6px);}
    .eyebrow{display:inline-block;padding:6px 10px;background:var(--glass);border-radius:999px;color:var(--yellow);font-weight:600;margin-bottom:12px}
    h2{margin:0 0 8px 0;font-size:34px}
    .lead{color:var(--muted);margin-bottom:18px}

    .profile-card{background:var(--card);border-radius:12px;padding:18px;display:flex;gap:14px;align-items:center}
    .avatar{width:96px;height:96px;border-radius:12px;object-fit:cover;background:linear-gradient(135deg,var(--yellow),#ffc857);display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--navy)}
    .meta small{color:var(--muted);display:block}
    .skills{display:flex;gap:8px;flex-wrap:wrap;margin-top:12px}
    .skill{background:rgba(255,255,255,0.03);padding:6px 10px;border-radius:999px;color:var(--muted);font-size:13px}

    /* stats */
    .stats{display:flex;gap:12px;margin-top:18px}
    .stat{background:transparent;padding:12px;border-radius:10px;flex:1;text-align:center}
    .stat h3{margin:0;font-size:20px}
    .stat p{margin:6px 0 0;color:var(--muted)}

    /* right column */
    .hero-right{display:flex;flex-direction:column;gap:16px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);padding:18px;border-radius:12px}

    /* services and projects */
    section{margin-top:36px}
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
    .service{background:var(--card);padding:18px;border-radius:12px;min-height:140px}
    .service h4{margin:0 0 8px}
    .projects{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
    .project{position:relative;border-radius:12px;overflow:hidden;min-height:160px}
    .project img{width:100%;height:100%;object-fit:cover;display:block;transform:scale(1);transition:transform .45s var(--ease)}
    .project:hover img{transform:scale(1.06)}
    .project .tag{position:absolute;left:12px;top:12px;background:rgba(11,37,69,0.8);padding:6px 8px;border-radius:8px;font-size:12px}

    /* skills */
    .skillbar{background:rgba(255,255,255,0.03);padding:10px;border-radius:10px}
    .progress{height:10px;background:rgba(255,255,255,0.06);border-radius:10px;overflow:hidden}
    .progress > i{display:block;height:100%;width:0;background:linear-gradient(90deg,var(--yellow),#ffd77a);border-radius:10px}

    /* contact */
    .contact{display:grid;grid-template-columns:1fr 360px;gap:18px}
    form{display:flex;flex-direction:column;gap:10px}
    input,textarea{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:12px;border-radius:8px;color:inherit}
    button[type="submit"]{padding:12px;border-radius:10px;border:0;background:var(--yellow);color:var(--navy);font-weight:700}

    /* footer */
    footer{margin-top:40px;padding:24px;border-radius:12px;background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);display:flex;justify-content:space-between;align-items:center;gap:18px}
    .socials a{display:inline-block;margin-right:12px;color:var(--muted);text-decoration:none}

    /* responsive */
    @media (max-width:980px){
      .hero{grid-template-columns:1fr;}
      .grid{grid-template-columns:repeat(2,1fr)}
      .projects{grid-template-columns:repeat(2,1fr)}
      .contact{grid-template-columns:1fr}
    }
    @media (max-width:600px){
      nav{display:none}
      header{gap:12px}
      .grid{grid-template-columns:1fr}
      .projects{grid-template-columns:1fr}
    }

    /* small animations */
    .fade-in{opacity:0;transform:translateY(18px);transition:all .6s var(--ease)}
    .fade-in.visible{opacity:1;transform:none}

    /* typing effect */
    .typing{color:var(--yellow);font-weight:700}

    /* modal for images */
    .modal{position:fixed;inset:0;background:rgba(2,6,23,0.8);display:flex;align-items:center;justify-content:center;visibility:hidden;opacity:0;transition:opacity .25s ease}
    .modal.open{visibility:visible;opacity:1}
    .modal img{max-width:90%;max-height:80%;border-radius:12px}

  </style>
</head>
<body>
  <div class="wrap">
    <header>
      <div class="brand">
        <div class="logo">JO</div>
        <div>
          <h1>Jamedia O</h1>
          <small style="color:var(--muted)">Full-stack Developer & Designer</small>
        </div>
      </div>

      <nav>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
        <a class="cta" href="#contact">Hire Me</a>
      </nav>
    </header>

    <!-- HERO / PROFILE -->
    <section class="hero">
      <div class="hero-left card fade-in">
        <span class="eyebrow">Hello — I build useful things</span>
        <h2>Hi, I'm <span class="typing" id="role">Jamedia O</span></h2>
        <p class="lead">A modern web developer with a design-first approach. I build fast, accessible and beautiful web apps and websites for small businesses and startups.</p>

        <div class="profile-card">
          <div class="avatar" id="avatar">IMG</div>
          <div class="meta">
            <strong>Jamedia O</strong>
            <small> Nairobi, Kenya • Available for freelance</small>
            <div class="skills">
              <span class="skill">HTML</span>
              <span class="skill">CSS</span>
              <span class="skill">JavaScript</span>
              <span class="skill">PHP</span>
              <span class="skill">UI/UX</span>
            </div>
          </div>
        </div>

        <div class="stats">
          <div class="stat">
            <h3>5+</h3>
            <p>Years experience</p>
          </div>
          <div class="stat">
            <h3>40+</h3>
            <p>Projects delivered</p>
          </div>
          <div class="stat">
            <h3>100%</h3>
            <p>Client satisfaction</p>
          </div>
        </div>

      </div>

      <aside class="hero-right">
        <div class="card fade-in">
          <h4>Quick contact</h4>
          <p style="color:var(--muted)">Phone: <strong>+254 713 761 640</strong></p>
          <p style="color:var(--muted)">Email: <strong>jamedia@example.com</strong></p>

          <div style="margin-top:12px;display:flex;gap:8px">
            <a class="cta" href="#contact">Message me</a>
            <a style="background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px 12px;border-radius:10px;color:var(--muted);text-decoration:none" href="#projects">Portfolio</a>
          </div>
        </div>

        <div class="card fade-in">
          <h4>Skills</h4>
          <div style="margin-top:10px">
            <div class="skillbar"><small>JavaScript</small><div class="progress" data-value="90"><i></i></div></div>
            <div class="skillbar" style="margin-top:8px"><small>React / Vue</small><div class="progress" data-value="78"><i></i></div></div>
            <div class="skillbar" style="margin-top:8px"><small>UI Design</small><div class="progress" data-value="85"><i></i></div></div>
          </div>
        </div>
      </aside>
    </section>

    <!-- ABOUT -->
    <section id="about" class="fade-in">
      <h2>About Me</h2>
      <p style="color:var(--muted);max-width:70%">I'm Jamedia — I enjoy turning complex problems into simple, beautiful and intuitive interfaces. My approach is to combine clean front-end techniques with robust backend logic to deliver products that are fast, maintainable and delightful to use.</p>

      <div style="margin-top:18px;display:flex;gap:16px;flex-wrap:wrap">
        <div class="card" style="flex:1;min-width:220px">
          <h4>Values</h4>
          <ul style="color:var(--muted);margin:8px 0 0 18px">
            <li>Clarity & Simplicity</li>
            <li>Performance & Accessibility</li>
            <li>Design-driven development</li>
          </ul>
        </div>

        <div class="card" style="flex:1;min-width:220px">
          <h4>Education</h4>
          <p style="color:var(--muted);margin:8px 0 0">BSc Computer Science — (Example University) • 2018</p>
        </div>

        <div class="card" style="flex:1;min-width:220px">
          <h4>Availability</h4>
          <p style="color:var(--muted);margin:8px 0 0">Open for freelance and contract work. Preferred remote-first.</p>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="fade-in">
      <h2>Services</h2>
      <div class="grid" style="margin-top:12px">
        <div class="service">
          <h4>Web Development</h4>
          <p style="color:var(--muted)">React/Vue/Vanilla JS, responsive sites, PWAs and SPA architectures.</p>
        </div>
        <div class="service">
          <h4>UI / UX Design</h4>
          <p style="color:var(--muted)">Prototyping, Figma designs, interaction design and user research.</p>
        </div>
        <div class="service">
          <h4>Backend & APIs</h4>
          <p style="color:var(--muted)">Node, PHP, REST & GraphQL integrations, authentication, payments.</p>
        </div>
      </div>
    </section>

    <!-- PROJECTS / PORTFOLIO -->
    <section id="projects" class="fade-in">
      <h2>Selected Projects</h2>
      <p style="color:var(--muted)">A few highlight projects. Replace the images below with your own photos/screenshots.</p>

      <div class="projects" style="margin-top:12px">
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=1">
          <span class="tag">Web App</span>
          <img src="https://picsum.photos/800/600?random=1" alt="project 1">
        </div>
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=2">
          <span class="tag">E-commerce</span>
          <img src="https://picsum.photos/800/600?random=2" alt="project 2">
        </div>
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=3">
          <span class="tag">Dashboard</span>
          <img src="https://picsum.photos/800/600?random=3" alt="project 3">
        </div>
      </div>
    </section>

    <!-- GALLERY (extra pictures) -->
    <section class="fade-in" style="margin-top:22px">
      <h2>Gallery</h2>
      <div class="projects" style="margin-top:12px">
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=11"><img src="https://picsum.photos/800/600?random=11" alt="gallery 1"></div>
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=12"><img src="https://picsum.photos/800/600?random=12" alt="gallery 2"></div>
        <div class="project" tabindex="0" data-src="https://picsum.photos/800/600?random=13"><img src="https://picsum.photos/800/600?random=13" alt="gallery 3"></div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="fade-in" style="margin-top:28px">
      <h2>Contact</h2>
      <div class="contact">
        <form id="contactForm" onsubmit="return handleContact(event)">
          <input type="text" id="name" placeholder="Your name" required>
          <input type="email" id="email" placeholder="Your email" required>
          <input type="text" id="subject" placeholder="Subject" required>
          <textarea id="message" rows="5" placeholder="Message" required></textarea>
          <button type="submit">Send Message</button>
          <small id="formStatus" style="color:var(--muted)"></small>
        </form>

        <aside class="card">
          <h4>Reach me</h4>
          <p style="color:var(--muted)">Phone: +254 713 761 640<br>Email: jamedia@example.com</p>

          <div style="margin-top:12px">
            <a href="#" class="cta">Download Resume</a>
          </div>
        </aside>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div>
        <strong>Jamedia O</strong>
        <p style="color:var(--muted);margin:6px 0 0">Full-stack dev • Nairobi</p>
      </div>

      <div style="text-align:right">
        <div class="socials">
          <a href="#">Twitter</a>
          <a href="#">LinkedIn</a>
          <a href="#">GitHub</a>
          <a href="#">Dribbble</a>
        </div>
        <small style="color:var(--muted);display:block;margin-top:8px">© " + new Date().getFullYear() + " Jamedia O — Built with ❤️</small>
      </div>
    </footer>
  </div>

  <!-- Image modal -->
  <div class="modal" id="modal"><img src="" alt="preview"></div>

  <script>
    // Small interactive scripts for UX
    document.addEventListener('DOMContentLoaded', () => {
      // typing effect for role/name
      const roles = ['Full-stack Developer','UI/UX Designer','MERN / LAMP dev'];
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

      // reveal on scroll
      const observers = document.querySelectorAll('.fade-in');
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if(entry.isIntersecting){ entry.target.classList.add('visible'); io.unobserve(entry.target); }
        });
      }, {threshold:0.12});
      observers.forEach(n => io.observe(n));

      // skillbars animation
      document.querySelectorAll('.progress').forEach(p => {
        const val = p.getAttribute('data-value') || 60;
        const bar = p.querySelector('i');
        setTimeout(()=>{ bar.style.width = val + '%'; }, 600);
      });

      // gallery modal
      const modal = document.getElementById('modal');
      modal.addEventListener('click', () => modal.classList.remove('open'));
      document.querySelectorAll('.project').forEach(card => {
        card.addEventListener('click', () => {
          const src = card.getAttribute('data-src') || card.querySelector('img').src;
          modal.querySelector('img').src = src;
          modal.classList.add('open');
        });
        card.addEventListener('keydown', (e) => { if(e.key === 'Enter') card.click(); });
      });

      // simple contact handler (no backend) — just demo
      window.handleContact = function(e){
        e.preventDefault();
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();
        const status = document.getElementById('formStatus');
        if(!name || !email || !message){ status.textContent = 'Please fill the form'; return false; }
        status.textContent = 'Sending message... (demo)';
        setTimeout(()=>{ status.textContent = 'Message sent. I will get back to you soon!'; document.getElementById('contactForm').reset(); }, 900);
        return false;
      };

      // replace avatar placeholder with an actual image if you drop one (demo-only)
      const avatar = document.getElementById('avatar');
      avatar.addEventListener('click', ()=> alert('Replace this image with your photo by editing the HTML (id="avatar").'));

    });
  </script>
</body>
</html>
