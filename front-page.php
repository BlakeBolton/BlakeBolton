<?php get_header(); ?>

    <section id="about" class="about">
        <div class="about-skills ">
            <div class="about-skills-grid container ">
                <div class="about-header">
                    <h2 class="paint-font">My Skills</h2>
                </div>
                <div class="about-skills-grid-bar style">
                    <div class="about-skills-bar-heading">
                        <h5>HTML / CSS</h5>
                        <div class="value">80%</div> 
                    </div>
                    <div class="about-skills-de-progress-bar">
                        <div class="about-skills-progress-bar" data-aos="fade-right" style="width: 80%"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style">
                    <div class="about-skills-bar-heading">
                        <h5>JavaScript</h5>
                        <div class="value">70%</div> 
                    </div>
                    <div class="about-skills-de-progress-bar">
                        <div class="about-skills-progress-bar" data-aos="fade-right" style="width: 70%"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style">
                    <div class="about-skills-bar-heading">
                        <h5>PHP</h5>
                        <div class="value">70%</div> 
                    </div>
                    <div class="about-skills-de-progress-bar">
                        <div class="about-skills-progress-bar" data-aos="fade-right" style="width: 70%"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style">
                    <div class="about-skills-bar-heading">
                        <h5>WordPress Development</h5>
                        <div class="value">75%</div> 
                    </div>
                    <div class="about-skills-de-progress-bar">
                        <div class="about-skills-progress-bar" data-aos="fade-right" style="width: 75%"></div>
                    </div>
                </div>
                <div class="about-skills-grid-bar style">
                    <div class="about-skills-bar-heading">
                        <h5>Design</h5>
                        <div class="value">70%</div> 
                    </div>
                    <div class="about-skills-de-progress-bar">
                        <div class="about-skills-progress-bar" data-aos="fade-right" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-me">
            <div class="about-me-grid container" >
                <div class="about-header">
                    <h2 class="paint-font">Who I Am?</h2>
                </div>
                <div data-aos="fade-left" data-aos-offset="400" data-aos-ease="ease-in-out">
                    <p>I am an aspiring web developer and web designer, with a strong focus on ecommerce websites and designs. I have a few projects you can look at in my portfolio section!</p>
                    <br>
                    <p>I am always studying to further expand my knowledge of ecommerce web development.</p>
                    <div class="about-me-btn">
                        <button type="submit" class="btn">Download CV</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <h1 class="text-center text-white paint-font">My Services</h1>
        <div class="wrapper-splide" data-aos="fade-up" data-aos-offset="450" data-aos-easing="ease-in">
            <div id="services-splide" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="far fa-lightbulb card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="fas fa-search-dollar card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="far fa-chart-bar card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="far fa-edit card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="far fa-edit card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="services-card-container">
                                <div class="services-card-content">
                                    <i class="far fa-edit card-icon"></i>
                                    <h3>Design</h3>
                                    <p>2 years of design experience.</p>
                                </div> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>   
    </section>
    
    <section id="portfolio" class="portfolio">
        <h1 class="portfolio-header paint-font">My Portfolio!</h1>
        <div class="portfolio-box" >
            <div class="portfolio-card custom-1" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-cubic"
     data-aos-duration="600">
                <h2 class="portfolio-title text-primary parallax">My Portfolio Website</h2>
                <div class="portfolio-desc">
                <img src="<?php echo get_template_directory_uri() . "/img/logo-mobile.png" ?>" alt="">
                    <p class="text-gray">This is a custom WordPress Theme Website designed for web designers and developers. Basic dynamic landing page that utilizes Advanced Custom Fields plugin.</p>
                    <div class="portfolio-btn">
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn btn-outline">View Code</button></a>
                        </div>
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn">View Website!</button></a>
                        </div> 
                    </div>
                </div>
                <div class="portfolio-img-box">
                    <a href="http://blakebolton.local/" target="_blank" rel="noopener noreferrer">  
                        <ul class="caption-style">
                            <li>
                                <img class="" src="<?php echo get_template_directory_uri() . "/img/bb-screenshot.png" ?>" alt="">
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h1>Click to View Now!</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>

        <div class="portfolio-box-right">
            <div class="portfolio-card-right custom-2"  data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-out"
     data-aos-duration="600">
                <h2 class="portfolio-title-right text-primary">xFit Website</h2>
                <div class="portfolio-desc-right">
                <img src="<?php echo get_template_directory_uri() . "/img/xfit-logo-white.png" ?>" alt="">
                    <p class="text-gray">This is a custom WordPress Theme Website designed for web designers and developers. Basic dynamic landing page that utilizes Advanced Custom Fields plugin.</p>
                    <div class="portfolio-btn-right">
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn btn-outline">View Code</button></a>
                        </div>
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn">View Website!</button></a>   
                        </div>
                    </div>
                </div>
                <div class="portfolio-img-box-right">
                    <a href="https://bbolton8607.github.io/xFit/#home" target="_blank" rel="noopener noreferrer">
                        <ul class="caption-style">
                            <li>
                                <img class="" src="<?php echo get_template_directory_uri() . "/img/xfit-screenshot.png" ?>" alt="">
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h1>Click to View Now!</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </a>  
                </div>
            </div>
        </div>

        <div class="portfolio-box" >
            <div class="portfolio-card custom-1" data-aos="fade-right"  data-aos-easing="ease-in-sine"
     data-aos-duration="600" data-aos-offset="500">
                <h2 class="portfolio-title text-primary">Sol Theme</h2>
                <div class="portfolio-desc">
                    <p class="text-gray">This is a custom WordPress Theme Website designed for web designers and developers. Basic dynamic landing page that utilizes Advanced Custom Fields plugin.</p>
                    <div class="portfolio-btn">
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn btn-outline">View Code</button></a>
                        </div>
                        <div class="portfolio-btn-margin">
                            <a href=""><button class="btn">View Website!</button></a>
                        </div> 
                    </div>
                </div>
                <div class="portfolio-img-box">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <ul class="caption-style">
                            <li>
                                <img class="" src="<?php echo get_template_directory_uri() . "/img/bb-screenshot.png" ?>" alt="">
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h1>Click to View Now!</h1>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </a>  
                </div>
            </div>
        </div>
    </section> 
    
    <section id="testimonials" class="testimonials page-section">
        <h1 class="text-center paint-font">What they say!</h1>
        <div class="wrapper-splide" data-aos="fade-up" data-aos-offset="450" data-aos-easing="ease-in">
            <div id="testimonial-splide" class="splide" >
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;1 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;2 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="splide__slide"  >
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;3 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="splide__slide"  >
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;4 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="splide__slide" data-aos="fade-left" data-aos-offset="500" data-aos-delay="2000">
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;5 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                        <li class="splide__slide" data-aos="fade-left" data-aos-offset="500" data-aos-delay="2500">
                            <div class="testimonials-card-container">
                                <blockquote>
                                    <div class="testimonials-card-header">
                                        <img class="testimonials-card-img" src="<?php echo get_template_directory_uri() . "/img/default-avatar.png" ?>" alt="avatar">
                                        <span class="testimonials-card-author">Sarah, Microsoft</span>
                                    </div>
                                    <p class="testimonials-card-description">&ldquo;6 years of design experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, cupiditate.&rdquo;</p>
                                </blockquote>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </section>

    <div id="experiences" class="exp-edu parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . "/img/castle.png" ?>" data-z-index="1">
        <div class="exp-edu-grid exp-edu-wrapper">
            <div class="exp-edu-experiences" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-cubic"
            data-aos-duration="600">
                <h1 class="exp-edu-title paint-font">Experiences</h1>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box">2014 - now</div>
                    <h4>Fulltime Freelancer</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                </div>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box">2014 - now</div>
                    <h4>Fulltime Freelancer</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                </div>
            </div>
            <div class="exp-edu-education" data-aos="fade-left" data-aos-offset="500" data-aos-easing="ease-in-cubic"
            data-aos-duration="600">
                <h1 class="exp-edu-title  paint-font">Education</h1>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box">2014</div>
                    <h4>Specialize App Design, harvard University</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                </div>
                <div class="exp-edu-card">
                    <div class="exp-edu-year-box">2014</div>
                    <h4>Specialize App Design, harvard University</h4>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
                </div>
            </div>
        </div>
    </div>

    <section id="contact" class="contact" >
        <h1 class="text-center paint-font">Contact Me Now</h1>
        <div class="contact-wrapper" data-aos="fade-up" data-aos-offset="500" data-aos-easing="ease-in">
            <div class="contact-form ">
                <form method="POST">
                    <div class="contact-text-fields">
                        <input class="text-input name-input" type="text" placeholder="Your Name" name="name">
                        <input class="text-input email-input" type="email" placeholder="Your E-Mail" name="email">
                        <input class="text-input phone-input" type="text" placeholder="Your Phone" name="cell-number">
                        <textarea class="text-input message-input" type="text" name="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="contact-btn">
                        <button type="submit" class="btn">Submit Form</button>
                    </div> 
                </form>  
            </div>
        </div>
        
        <div class="contact-info contact-wrapper" data-aos="fade-up" data-aos-offset="350" data-aos-easing="ease-in">
            <div class="contact-info-card">
                <i class="fas fa-mobile-alt"></i>
                <h5>call us</h5>
                <p>123456789</p>
            </div>
            <div class="contact-info-card">
                <i class="fas fa-home icon_house_alt"></i>
                <h5>Address</h5>
                <p>Paris, Texas</p>
            </div>
            <div class="contact-info-card">
                <i class="fas fa-envelope"></i>
                <h5>Email</h5>
                <p>bbolton8607@gmail.com</p>
            </div>
        </div>
    </section>
        
<?php get_footer(); ?>