<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; The Compository</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#pmsg-top">TOP</a></div>
        <div class="toplink-box" id="pmsg-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Pacific Meta</h1>
                        <h2 class="head-font">Corporate Branding Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="../images/cs_pmsg-logo.svg" alt="Pcific Meta logo">
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_bm-banner.jpg" alt="">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="pmsg-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-pmsg/pmsg-1.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="pmsg-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-pmsg/pmsg-2.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-pmsg/pmsg-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/branding-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>