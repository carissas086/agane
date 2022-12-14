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
        <div class="head-font tab"><a href="#cmp-top">TOP</a></div>
        <div class="toplink-box" id="cmp-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">The Compository</h1>
                        <h2 class="head-font">Fictional Creative Photography Studio Branding Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="../images/cs_cmp-logo.jpg" alt="The Compository logo">
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_cmp-banner.jpg" alt="3D mocked up stationary and business cards for The Compository">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="cmp-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-cmp/cmp-1.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="cmp-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-cmp/cmp-2.php'; ?>
                </div>
                </div>
                <div class="content-arti-section empty-scroll" id="cmp-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-cmp/cmp-3.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-cmp/cmp-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/branding-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>