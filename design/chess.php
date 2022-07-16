<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Fraser Vallery Championship</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#fvc-top">TOP</a></div>
        <div class="toplink-box" id="fvc-top"></div>

        <!-- ==== CONTENT BOX ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Fraser Valley Championship</h1>
                        <h2 class="head-font">Fictional Chess Competition Poster Project</h2>
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_fvc-banner.jpg" alt="Mockup of chess competition poster on a school library shelf">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section" id="fvc-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-print/fvc.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-print/fvc-add.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>