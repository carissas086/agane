<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Web Marketing Banners</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#mb-top">TOP</a></div>
        <div class="toplink-box" id="mb-top"></div>

        <!-- ==== CONTENT BOX ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Web Marketing Banners</h1>
                        <h2 class="head-font">Banner Packages For Various Brands</h2>
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section" id="mb-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/mb-1.php'; ?>
                </div>
                <div class="content-arti-section" id="mb-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/mb-2.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-socm/mb-add.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>