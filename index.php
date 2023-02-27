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
            <h2 class="head-font">Design Work</h2>
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
                    <a class="gal-link col-12 col-md-6" href="design/portrait.php">
                        <p class="head-font gal-hov">'Portrait' &mdash; Composite Photograph</p>
                        <div class="gal-img" id="gal-port"></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==== Web ==== -->
        <section class="landing-gal head-font empty-scroll" id="webd">
            <h2 class="head-font">Web Design</h2>
            <div class="container-fluid gal-project empty-scroll" id="">
                <div class="gal flex-vertcen row">
                    <a class="gal-link col-12 col-md-6" href="design/pportfolio.php">
                        <p class="head-font gal-hov">Personal Portfolio &mdash; Site Design &amp; Development</p>
                        <div class="gal-img" id="gal-pport"></div>
                    </a>
                    <a class="gal-link col-12 col-md-6" href="design/fraserlandsgallery.php">
                        <p class="head-font gal-hov">Fraser Lands Gallery &mdash; Site Design &amp; Development</p>
                        <div class="gal-img" id="gal-flg"></div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==== 3D Showcase ==== -->
        <section class="landing-gal head-font empty-scroll" id="gallery">
            <h2 class="head-font">Creative Work</h2>
            <div class="container-fluid gal-project empty-scroll" id="">
                <div class="gal flex-vertcen row">
                    <a class="gal-link col-12 col-md-4"
                        href="images/cs_interest.jpg"
                        data-lightbox="creat"
                        data-title="This vector illustration depicts a small red character engaging in various interests and hobbies. The base illustration was done entirely in Adobe Illustrator, and further post-processed in Adobe Photoshop.">
                        <p class="head-font gal-hov">'Interest' &mdash; Vector Illustration</p>
                        <div class="gal-img" id="gal-inrs"></div>
                    </a>
                    <a class="gal-link col-12 col-md-4"
                        href="images/creative/cs_creat-nativity.jpg"
                        data-lightbox="creat"
                        data-title="This nativity scene was a collaborative project done with Eunhye Jang, entirely modelled, textured, and composited in Blender. The piece is a snapshot of the Christian nativity narrative, portrayed with each of the characters mid pose.">
                        <p class="head-font gal-hov">Nativity Scene &mdash; 3D Illustration</p>
                        <div class="gal-img" id="gal-c1"></div>
                    </a>
                    <a class="gal-link col-12 col-md-4"
                        href="images/creative/cs_creat-tempt.jpg"
                        data-lightbox="creat"
                        data-title="This scene was a collaborative project done with Eunhye Jang, entirely modelled, textured, and composited in Blender. The piece is a reflection on the cluttered and distracting nature of everyday life, that distracts from the light outside. An accompanying animated showcase of the scene is available on my professional Instagram.">
                        <p class="head-font gal-hov">'It Wouldn't Be Temptation Is It Wasn't Tempting' &mdash; 3D Illustration</p>
                        <div class="gal-img" id="gal-c9"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-swordinstone.jpg"
                        data-lightbox="creat"
                        data-title="A Sword in the Stone illustration done as part of a Model a Day Challenge. This illustration was modelled, textured, and composited in Blender.">
                        <p class="head-font gal-hov">Sword in the Stone &mdash; 3D Illustration</p>
                        <div class="gal-img" id="gal-c2"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-family.png"
                        data-lightbox="creat"
                        data-title="Illustration of a family of clouds! This was done as part of a Model a Day Challenge, entirely modelled, textured, and composited in Blender.">
                        <p class="head-font gal-hov">Family Time &mdash; 3D Illustration</p>
                        <div class="gal-img" id="gal-c3"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-travel.png"
                        data-lightbox="creat"
                        data-title="Illustration of a toy plane flying over the Pacific. This was done as a part of a Model a Day Challenge, entirely modelled, textured, and composited in Blender.">
                        <p class="head-font gal-hov">Travel More &mdash; 3D Illustration</p>
                        <div class="gal-img" id="gal-c4"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-fairy.jpg"
                        data-lightbox="creat"
                        data-title="Model of a fairy puppet, done as a part of a Model a Day Challenge. This was entirely modelled, textured, and composited in Blender.">
                        <p class="head-font gal-hov">Wooden Fairy &mdash; 3D Model</p>
                        <div class="gal-img" id="gal-c5"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-tabla.png"
                        data-lightbox="creat"
                        data-title="Simple model of tabla, done as a part of a Model a Day Challenge in Blender.">
                        <p class="head-font gal-hov">Tabla &mdash; 3D Model</p>
                        <div class="gal-img" id="gal-c6"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-midicontroller.png"
                        data-lightbox="creat"
                        data-title="Simple model of a MIDI controller, done as a part of a Model a Day Challenge in Blender.">
                        <p class="head-font gal-hov">MIDI Controller &mdash; 3D Model</p>
                        <div class="gal-img" id="gal-c7"></div>
                    </a>
                    <a class="gal-link col-12 col-md-3"
                        href="images/creative/cs_creat-turntable.png"
                        data-lightbox="creat"
                        data-title="Simple model of a little toy turntable, done as a part of a Model a Day Challenge in Blender.">
                        <p class="head-font gal-hov">Turntable &mdash; 3D Model</p>
                        <div class="gal-img" id="gal-c8"></div>
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
                    <p>An endless curiosity and desire for understanding has led me to pursue a diverse range of interests. From every endeavour I have embarked on, I have learnt valuable lessons that I bring with me to every new project: my education in jazz &amp; contemporary music taught me to embrace the phrase <span class="bold">&ldquo;the medium is the message&rdquo;</span>, my degree in Linguistics taught me to <span class="bold">scrutinise the details</span>, my hobbies in parkour and 3D illustration taught me to <span class="bold">love learning</span>, my multi-media narrative projects taught me to <span class="bold">serve the heart of each project first</span>, and my creative writing projects have taught me <span class="bold">patience and perseverance</span>. My work ethic is grounded in these core values.</p>
                    <p>As I pursue new projects to bring these values to, I will endeavour to utilise my skills in <span class="bold">storytelling, graphic design, 3D graphics, web design,</span> and <span class="bold">motion graphics</span> to serve each and every project to the best of my abilities.</p>
                    <p class="about-subhead">Technical skills:</p>
                    <ul class="li-indent bullets">
                        <li>proficient in the Adobe Creative Suite, most notably</li>
                            <li class="bullet-sub">Photoshop</li>
                            <li class="bullet-sub">Illustrator</li>
                            <li class="bullet-sub">InDesign</li>
                            <li class="bullet-sub">After Effects</li>
                        <li>Blender</li>
                        <li>HTML, CSS, Javascript, and WordPress Development</li>
                        <li>DaVinci Resolve</li>
                        <li>Ableton Live</li>
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
        <p class="copyright">&copy; <span class="accent">2023</span> Carissa So</p>
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
