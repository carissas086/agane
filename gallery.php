<!DOCTYPE html>
<html lang="en-ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carissas &mdash; All Work</title>

    <?php include __DIR__ . '/partials/headlinks.php'; ?>
    
</head>
<body>
    <header>
        <nav class="gn flex flex-around flex-vertcen">
            <ul class="flex flex-around flex-vertcen">
                <li class="mob-head"><a href="#">Projects</a></li>
                <li class="logo"><a href="index.php"><img src="images/logos/logo-wveccol_mid.png" alt="carissas brand logo"></a></li>
                <li class="mob-head"><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <!-- ==== GALLERY ==== -->
        <section class="landing-gal head-font empty-scroll" id="all-gallery">
            <h1 class="head-font">All Projects</h2>
            <?php include __DIR__ . '/partials/gallery-partials/printproduct.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/webmarketing.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/branding.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/motiongraphics.php'; ?>
            <?php include __DIR__ . '/partials/gallery-partials/creativemisc.php'; ?>

            <div class="head-font flex">
                <a class="design-back x-auto base-btn" href="index.php">Back</a>
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
