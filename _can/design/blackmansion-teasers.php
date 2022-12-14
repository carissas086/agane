<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Black Mansion Teasers</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#bmv-top">TOP</a></div>
        <div class="toplink-box" id="bmv-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">"Black Mansion" Teasers</h1>
                        <h2 class="head-font">Motion Graphics And Editing Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="/../images/cs_bm-logo-large.png" alt="Black Mansion project logo">
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="bmv-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-bm/bmv-1.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="bmv-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-bm/bmv-2.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-bm/bm-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/mogr-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>