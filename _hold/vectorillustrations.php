<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Vector Illustrations</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#vc-top">TOP</a></div>
        <div class="toplink-box" id="cv-top"></div>

        <!-- ==== CONTENT BOX ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Vector Illustrations</h1>
                        <h2 class="head-font">Character Illustrator Projects</h2>
                    </div>
                    <!-- <div class="content-blurb-logo">
                        <img src="/../images/cs_blackmansion_logo-large.svg" alt="Black Mansion project logo">
                    </div> -->
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_bm-banner.jpg" alt="">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section" id="vc-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-misc/misc-3.php'; ?>
                </div>
                <div class="content-arti-section" id="vc-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-misc/misc-4.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-misc/illustration-add.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>