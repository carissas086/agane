<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Animations</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#ww-top">TOP</a></div>
        <div class="toplink-box" id="ww-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Music Education Videos</h1>
                        <h2 class="head-font">Short Frame-by-Frame Illustrative &amp; Graphic Animations</h2>
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="ww-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-ww/ww-1.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="ww-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-ww/ww-3.php'; ?>
                </div>
                <div class="content-arti-section empty-scroll" id="ww-3">
                    <?php include __DIR__ . '/../partials/design-partials/cs-ww/ww-2.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-ww/ww-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/mogr-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>