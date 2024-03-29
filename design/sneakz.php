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
                        <h2 class="head-font">Branding &amp; Packaging Design</h2>
                    </div>
                </div>
                <div class="showcase flex flex-vertcen flex-center">
                    <img src="../images/cs_snkz-render.jpg" alt="Final 3D mockup of a SNEAKZ shoebox">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-section empty-scroll" id="snkz">
                <?php include __DIR__ . '/../partials/design-partials/snkz-overview.php'; ?>
                <?php include __DIR__ . '/../partials/design-partials/snkz-logo.php'; ?>
                <?php include __DIR__ . '/../partials/design-partials/snkz-packaging.php'; ?>
                <?php include __DIR__ . '/../partials/design-partials/snkz-takeaway.php'; ?>
            </div>

            <!-- ==== CONTENT END ==== -->
            <div class="showcase flex flex-bet flex-vertcen">
                <img src="../images/cs_snkz-banner.jpg" alt="3D mockup of a SNEAKZ shoebox">
            </div>
            <div class="head-font flex">
                <a class="design-back" href="../index.php#gallery">Back to Projects</a>
            </div>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>