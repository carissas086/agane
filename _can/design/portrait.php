<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; 'Portrait'</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#portrait-top">TOP</a></div>
        <div class="toplink-box" id="portrait-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">"Portrait"</h1>
                        <h2 class="head-font">Composite Photograph Project</h2>
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_portrait-banner.jpg" alt="3D mockup of composite photograph">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="misc-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-misc/misc-1.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-misc/portrait-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/misc-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>