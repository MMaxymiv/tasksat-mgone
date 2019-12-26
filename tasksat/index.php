<?php
get_header();
?>

<section class="home-page">
        <div class="container">
            <div class="home-page__inner">
                <div class="home-page__top">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/LOGO.png" alt="logo">
                    </div>
                    <div class="home-page__contacts">
                        <div class="phone-number contacts__inner">
                            <img src="<?php echo get_template_directory_uri()?>/res/img/icon/phone.png" alt="">
                            <div>1-800-224-1462</br>
                                <span>US & Canada toll free</span>
                            </div>
                        </div>
                        <div class="chat-support contacts__inner">
                            <img src="<?php echo get_template_directory_uri()?>/res/img/icon/chat.png" alt="">
                            <div> Get Live Chat Support</br>
                                <span>Need help?</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-page__middle">
                    <div class="home-page__title">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="drop-down-form">
                        <div class="drop-down-form__text">from</div>
                        <div class="drop-down-form__box"><img src="<?php echo get_template_directory_uri()?>/res/img/basecamp-logo.png" alt="">
                                                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/sort_down.png" alt="" class="sort__down">
                        </div>
                        <div class="drop-down-form__text">to</div>
                        <div class="drop-down-form__box"><img src="<?php echo get_template_directory_uri()?>/res/img/jira-logo.png" alt="">
                                                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/sort_down.png" alt="" class="sort__down">
                        </div>
                        <div class="drop-down-form__text">in 15 min</div>
                    </div>
                </div>
                <div class="home-page__bottom">
                    <button class="home-page__btn">Start free demo</button>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-as">
        <div class="container">
            <div class="simple-as__inner">
                <div class="title simple-as__title">
                    <h1>It's simple as 1-2-3</h1>
                </div>
                <div class="simple-as__description">
                    <div class="register simple-as__box">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/registration.png" alt="registration">
                        <span>Register TasKsaT </br>Account</span>
                    </div>
                    <div class="arrow-icon">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/arrow.png" alt="">
                    </div>
                    <div class="follow simple-as__box">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/settings.png" alt="settings">
                        <span>Follow Migration </br>Wizard</span>
                    </div>
                    <div class="arrow-icon">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/arrow.png" alt="">
                    </div>
                    <div class="enjoy simple-as__box">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/checked.png" alt="checked">
                        <span>Enjoy the results</span>
                    </div>
                </div>
                <button class="simple-as__btn">Check a Detailed Guide</button>
            </div>
        </div>
    </section>

    <div class="migration-performed">
        <div class="container">
            <div class="migration-performed__inner">
                <div class="counter">
                    <img src="<?php echo get_template_directory_uri()?>/res/img/counter_1.png" alt="">
                    <img src="<?php echo get_template_directory_uri()?>/res/img/counter_0.png" alt="">
                    <img src="<?php echo get_template_directory_uri()?>/res/img/counter_0.png" alt="">
                    <img src="<?php echo get_template_directory_uri()?>/res/img/counter_0.png" alt="">
                </div>
                <div class="migration-performed__title">migration-performed</div>
                <button class="migration-performed__btn">What our customers say</button>
            </div>
        </div>
    </div>

    <section class="why-tasksat">
        <div class="container">
            <div class="why-tasksat__inner">
                <div class="title why-tasksat__title">Why TasksaT?</div>
                <div class="why-tasksat__block">
                    <div class="block__inner">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/data.png" alt="">
                        <h1 class="block__title">Automated Task </br>Management</h1>
                        <h2 class="block__subtitle">Software Migration cloud based, accurate and secure data transfer
                        </h2>
                    </div>
                    <div class="block__inner">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/codding.png" alt="">
                        <h1 class="block__title">Coding and Copy/</br>Pasting Free</h1>
                        <h2 class="block__subtitle">requires no technical skills and no software to install</h2>
                    </div>
                    <div class="block__inner">
                        <img src="<?php echo get_template_directory_uri()?>/res/img/icon/support.png" alt="">
                        <h1 class="block__title">During & Post Migration</br> Technical Support </h1>
                        <h2 class="block__subtitle">a team of qualified tech gurus at your disposal</h2>
                    </div>
                </div>
                <button class="why-tasksat__btn">Start Free Demo</button>
            </div>
            <hr class="why-tasksat__hr">
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews__inner">
                <h1 class="title reviews__title">Why our clients say</h1>
                <h2 class="reviews__subtitle">View all testimonials</h2>
                <div class="owl-carousel">
                    <div class="reviews__box">
                        <div class="reviews__img">
                            <img src="<?php echo get_template_directory_uri()?>/res/img/carousel/man.jpg" alt="">
                            <h4>Petr Ipsum</h4>
                        </div>
                        <div class="reviews__text">
                            <h3>Lorem Ipsum</h3>
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                                architecto expedita atque
                                delectus omnis? Non nostrum quas earum cupiditate modi ab aliquid</p>
                        </div>
                    </div>
                    <div class="reviews__box">
                        <div class="reviews__img">
                            <img src="<?php echo get_template_directory_uri()?>/res/img/carousel/woman.jpg" alt="">
                            <h4>Anna Lorem</h4>
                        </div>
                        <div class="reviews__text">
                            <h3>Lorem Ipsum</h3>
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                                architecto expedita atque
                                delectus omnis? Non nostrum quas earum cupiditate modi ab aliquid</p>
                        </div>
                    </div>
                    <div class="reviews__box">
                        <div class="reviews__img">
                            <img src="<?php echo get_template_directory_uri()?>/res/img/carousel/man2.jpg" alt="">
                            <h4>Ali Melm</h4>
                        </div>
                        <div class="reviews__text">
                            <h3>Lorem Ipsum</h3>
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <img id="reviews__star" src="<?php echo get_template_directory_uri()?>/res/img/carousel/star.png" alt="">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas
                                architecto expedita atque
                                delectus omnis? Non nostrum quas earum cupiditate modi ab aliquid</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-news">
        <div class="container">
            <div class="latest-news__inner">
                <h1 class="title latest-news__title">Latest News</h1>
                <div class="latest-news__box">
                    <div class="latest-news__item">
                        <div class="item__top">
                            <div class="item__date">
                                <h3>07/03</h3>
                                <h4>2014</h4>
                                <h3>2014</h3>
                            </div>
                            <div class="item__title">
                                <h2>The Evolution of CMS Platform: From Caveman to Homo Sapiens
                                </h2>
                            </div>
                        </div>

                        <div class="item__text">
                            <p>
                                The history of humanity has been starting counting from primitivity and simplicity to
                                complexity, duality, and multifacetedness. While tracing back to the big bang of web
                                technologies, content management systems (CMS) began their starting point from hard
                                coding
                                to comprehensive usability and intuitive operations</p>
                        </div>
                        <button class="item__btn">Read More</button>
                    </div>
                    <div class="latest-news__item">
                        <div class="item__top">
                            <div class="item__date">
                                <h3>05/03</h3>
                                <h4>2014</h4>
                                <h3>2014</h3>
                            </div>
                            <div class="item__title">
                                <h2>Quick Wizard: Website Migration Has Never Been Faster
                                </h2>
                            </div>
                        </div>
                        <div class="item__text">
                            <p>
                                The history of humanity has been starting counting from primitivity and simplicity to
                                complexity, duality, and multifacetedness. While tracing back to the big bang of web
                                technologies, content management systems (CMS) began their starting point from hard
                                coding to comprehensive usability and intuitive operations</p>
                        </div>
                        <button class="item__btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="start-your-demo">
        <div class="container">
            <div class="start-your-demo__inner">
                <h1 class="title start-your-demo__title">Start your free, no risk, demo migration!</h1>
                <button class="button">Start Free Demo</button>
            </div>
        </div>
    </div>

    <section class="contact-us">
        <div class="container">
            <div class="contact-us__inner">
                <div class="contact-us__img">
                    <img src="<?php echo get_template_directory_uri()?>/res/img/contact-us.jpg" alt="">
                </div>
                <div class="contact-us__side">
                    <h1 class="contact-us__title">Didn’t find your Task Management Software in the list?
                    </h1>
                    <h2 class="contact-us__subtitle">Subscribe for updates. We are constantly adding new Task Management
                        Software.
                    </h2>
                    <div class="contact-us__form">
                        <form action="submit" method="GET" id="contact_form" class="form" >
                            <input type="text" name="user_name" placeholder="Your Name" class="input">
                            <input type="email" name="user_email" placeholder="Email" class="input">
                            <select size="1" name="cms1" class="select">
                                <option value="basecamp">Basecamp</option>
                                <option value="jira">jira</option>
                                <option value="blogger">Blogger</option>
                            </select>
                            <select size="1" name="cms2" class="select second__select">
                                <option value="jira">jira</option>
                                <option value="basecamp">Basecamp</option>
                                <option value="blogger">Blogger</option>
                            </select>
                            <button type="submit" form="contact_form" class="form__btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>

<?php
get_footer();
