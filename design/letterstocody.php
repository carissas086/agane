<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Letters to Cody Post</title>

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
                        <h1 class="head-font">"Letters to Cody"</h1>
                        <h2 class="head-font">Instagram Marketing Post</h2>
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="ltc-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/ltc-1.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-socm/ltc-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/web-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>