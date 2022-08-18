<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carissas &mdash; creativity through design</title>
    
<!--    last updated: 220810    -->

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
            <?php // include __DIR__ . '/partials/gallery-partials/motiongraphics.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/printproduct.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/branding.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/creativemisc.php'; ?>
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
                    <p>Being in continual pursuit of a curiosity in all the possibilities in media and art, my passion for precision and excellence permeates all my projects, both professional and personal.</p>
                    <p class="about-subhead">Technical skills:</p>
                    <ul class="li-indent bullets">
                        <li>proficient in the Adobe Creative Suite, specifically</li>
                            <li class="bullet-sub">Photoshop</li>
                            <li class="bullet-sub">Illustrator</li>
                            <li class="bullet-sub">InDesign</li>
                            <li class="bullet-sub">After Effects</li>
                        <li>DaVinci Resolve</li>
                        <li>Ableton Live</li>
                        <li>basic HTML, CSS, Javascript, and WordPress Development</li>
                    </ul>
                    <p class="about-subhead">Past (and current) interests and projects:</p>
                    <ul class="li-indent bullets">
                        <li>Electric guitar, recreationally and at the collegiate level (jazz and contemporary music program)</li>
                        <li>Majored in Linguistics, Bachelor of Arts from Simon Fraser University</li>
                        <li>creative lead on a multi-medium narrative projects</li>
                        <li>creative writing, recreationally and self-published</li>
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
