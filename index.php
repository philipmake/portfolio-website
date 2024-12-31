<?php
include 'templates/header.php';
?>

  <section id="main">
    <!--Text for welcoming-->
    <h2>Hi, I'm <span>Philip G.</span></h2>
    <h4>Welcome to my space on the internet.</h4>
    <!--Text for Intro-->
    <p>I'm Interested in the following topics</p>
    <div class="skills">
      <ul>
        <li>
          <div class="item">
            <a href="#content">Web Development</a>
          </div>
        </li>

        <li>
          <div class="item">
            <a href="/microkernel-site/home.html">Kernel development</a>
          </div>
        </li>
        <li>
          <div class="item">
            <a href="/html tokenzer/home.html">Browser hacking</a>
          </div>
        </li>
      </ul>
    </div>

    <p class="about-intro">
      Hello, welcome to my website. I built this website using good old html, css and 
      Javascript. The blog was built using PHP and MySql. Well I'm a computer lover at heart 
      I love learning at different computers and seeing ways more can be done to improve existing systems and 
      new innovations in the computer space.
    </p>

    <div class="action">
      <div class="hire-btn"><a class="btn-link" href="#">Hire Me</a></div>
      <div class="resume-download-btn"><a class="btn-link" href="Eloquent_JavaScript_small.pdf">Download CV</a></div>
    </div>
  </section>
  <!--Text for body-->
  <section id="content">
    <span>Checkout some of my work</span>
    <div class="content-area">
      <div class="card">
        <div class="card-image">
          <img src="" alt="">
        </div>
        <div class="card-content">
          <h2 class="card-title">Agric teachers web platform</h2>
          <p class="card-desc">A website that provides resources and latest insights need by a 21st century Agric Science teacher</p>
          <a href="#">See demo</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="" alt="">
        </div>
        <div class="card-content">
          <h2 class="card-title">Open Source project official website</h2>
          <p class="card-desc">The official website of the paperwork kernel, bread web engine as well as a bunch of other small projects.</p>
          <a href="/projects/main.html">Read More</a>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img src="" alt="">
        </div>
        <div class="card-content">
          <h2 class="card-title">Blog Post Title</h2>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quos?</p>
          <a href="#">Read More</a>
        </div>
      </div>


    </div>
  </section>

<?php
include 'templates/footer.php';
?>


