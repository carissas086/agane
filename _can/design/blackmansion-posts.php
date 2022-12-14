<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Black Mansion Posts</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#bm-top">TOP</a></div>
        <div class="toplink-box" id="bm-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">"Black Mansion" Marketing Posts</h1>
                        <h2 class="head-font">Instagram Teaser Posts Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="/../images/cs_bm-logo-large.png" alt="Black Mansion project logo">
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_bm-post-mockup.jpg" alt="Instagram posts mockup created for Black Mansion campaign project">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="bm-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-bm/bm-1.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="bm-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-bm/bm-2.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="bm-3">
                    <?php include __DIR__ . '/../partials/design-partials/cs-bm/bm-3.php'; ?>
                </div>
            </div>

            <!-- ==== ADD CONTENT ==== -->
            <?php include __DIR__ . '/../partials/design-partials/cs-bm/bm-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/web-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>