<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carissas &mdash; creativity through design</title>

    <?php include __DIR__ . '/partials/headlinks.php'; ?>
    
</head>
<body>
    <header>
        <nav class="gn flex flex-around flex-vertcen">
            <ul class="flex flex-around flex-vertcen">
                <li class="mob-head"><a href="#gallery">Projects</a></li>
                <li class="logo"><a href="index.php"><img src="images/logos/logo-wveccol_mid.png" alt="carissas brand logo"></a></li>
                <li class="mob-head"><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="toplink-box"></div>
        <section class="content-box flex flex-vertcen flex-vert head-font" id="landing">
            <img src="images/logos/logo-veccol_mid.png" alt="">
            <h1>carissas</h1>
            <h2>creativity through design</h2>
        </section>

        <!-- ==== GALLERY ==== -->
        <section class="landing-gal head-font empty-scroll" id="gallery">
            <h2 class="head-font">My Work</h2>
            <?php // include __DIR__ . '/partials/gallery-partials/webmarketing.php'; ?>

            <div class="container-fluid gal-project empty-scroll" id="">
                <div class="gal flex-vertcen row">
                    <a class="gal-link col-12 col-md-6" href="design/techcollider.php">
                        <p class="head-font gal-hov">Tech Collider &mdash; 3D & Motion Graphics</p>
                        <div class="gal-img" id="gal-tc"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/sneakz.php">
                        <p class="head-font gal-hov">SNEAKZ &mdash; Branding &amp; Packaging Design</p>
                        <div class="gal-img" id="gal-snkz"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/shift.php">
                        <p class="head-font gal-hov">'Shift' &mdash; Product Illustration</p>
                        <div class="gal-img" id="gal-shft"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/fraserlandsgallery.php">
                        <p class="head-font gal-hov">Fraser Lands Gallery &mdash; Site Design &amp; Development</p>
                        <div class="gal-img" id="gal-flg"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/portrait.php">
                        <p class="head-font gal-hov">'Portrait' &mdash; Composite Photograph</p>
                        <div class="gal-img" id="gal-port"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/interest.php">
                        <p class="head-font gal-hov">'Interest' &mdash; Illustration</p>
                        <div class="gal-img" id="gal-inrs"></div>
                    </a>
                </div>
            </div>

        </section>

        <!-- ==== ABOUT ==== -->
        <section class="content-blurb" id="about">
            <div class="content-blurb-titles">
                <h2 class="head-font">About Me</h2>
            </div>
            <div class="content-arti-clean flex flip">
                <div class="head-shot">
                    <img src="images/carissaso.jpg" alt="">
                </div>
                <div class="content-arti-copy">
                    <p>Being in continual pursuit of a curiosity in all the possibilities in media and art, my passion for precision and excellence permeates all my projects, both professional and personal. I am a creative designer who always seeks to pursue the best medium and method by which to tell every story I set out to tell.</p>
                    <p>An endless curiosity and desire for understanding has led me to pursue a diverse range of interests. From every endeavour I have embarked on, I have learned valuable lessons that I bring with me to every new project: my education in jazz &amp; contemporary music taught me to embrace the phrase <span class="bold">&ldquo;the medium is the message&rdquo;</span>, my degree in Linguistics taught me to <span class="bold">scrutinise the details</span>, my hobbies in parkour and 3D illustration taught me to <span class="bold">love learning</span>, my multi-media narrative projects taught me to <span class="bold">serve the heart of each project first</span>, and my creative writing projects have taught me <span class="bold">patience and perseverance</span>. My work ethic is grounded in these core values.</p>
                    <p>As I pursue new projects to bring these values to, I will endeavour to utilise my skills in <span class="bold">graphic design, 3D graphics, layout, motion graphics, web design</span> and <span class="bold">storytelling</span> to serve each and every project to the best of my abilities.</p>
                    <p class="about-subhead">Technical skills:</p>
                    <ul class="li-indent bullets">
                        <li>proficient in the Adobe Creative Suite, most notably</li>
                            <li class="bullet-sub">Photoshop</li>
                            <li class="bullet-sub">Illustrator</li>
                            <li class="bullet-sub">InDesign</li>
                            <li class="bullet-sub">After Effects</li>
                        <li>Blender</li>
                        <li>DaVinci Resolve</li>
                        <li>Ableton Live</li>
                        <li>HTML, CSS, Javascript, and WordPress Development</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <footer class="flex flex-vert flex-bet" id="landing-ft">
        <div class="socials">
            <ul class="flex">
                <li><a href="mailto:carissaso@gmail.com" title="Contact me at carissaso@gmail.com"><img src="images/socials/email-icon.png" alt="Contact me at carissaso@gmail.com"></a></li>
                <li><a href="https://instagram.com/carissamakesthings" target="_blank" title="Instagram Profile"><img src="images/socials/instagram-logo.png" alt="Instagram Logo"></a></li>
                <li><a href="https://ca.linkedin.com/in/carissaso" target="_blank" title="LinkedIn Profile"><img src="images/socials/linkedin-logo.png" alt="LinkedIn Logo"></a></li>
            </ul>
        </div>
        <p class="copyright">&copy; <span class="accent">2022</span> Carissa So</p>
    </footer>

<!-- ==== SCRIPTS ==== -->

    <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <!-- lightbox -->
        <script src="scripts/content-plugins.js"></script>

    <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
