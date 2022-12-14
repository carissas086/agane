<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Little Red TeaHouse</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#lrth-top">TOP</a></div>
        <div class="toplink-box" id="lrth-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Little Red TeaHouse</h1>
                        <h2 class="head-font">Rice Tea Packaging Project</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="../images/cs_lrth-logo.png" alt="Little Red TeaHouse logo">
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="lrth-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-print/lrth.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-print/lrth-add.php'; ?>

            <!-- ==== BACK TO ==== -->
            <?php include __DIR__ . '/../partials/design-backs/print-back.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>