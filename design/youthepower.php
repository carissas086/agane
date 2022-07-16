<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Youthe Power Posts</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#ytp-top">TOP</a></div>
        <div class="toplink-box" id="ytp-top"></div>

        <!-- ==== CONTENT BOX ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Youthe Power</h1>
                        <h2 class="head-font">Social Media Posts for Fictional Youth Centre Project</h2>
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section" id="ytp-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/ytp-1.php'; ?>
                </div>
                <div class="content-arti-section" id="ytp-2">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/ytp-2.php'; ?>
                </div>
                </div>
                <div class="content-arti-section" id="ytp-3">
                    <?php include __DIR__ . '/../partials/design-partials/cs-socm/ytp-3.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-socm/ytp-add.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>