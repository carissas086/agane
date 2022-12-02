<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; SNEAKZ</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#snkz-top">TOP</a></div>
        <div class="toplink-box" id="snkz-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">SNEAKZ</h1>
                        <h2 class="head-font">Fictional Sports Shoe Packaging Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="../images/cs_snkz-logo.png" alt="SNEAKZ logo">
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_snkz-banner.jpg" alt="3D SNEAKZ basketball shoes shoebox mockup">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="snkz-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-print/snkz.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-print/snkz-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/print-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>