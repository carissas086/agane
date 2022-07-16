<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; No Clowns Coffee Roasters</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#nccr-top">TOP</a></div>
        <div class="toplink-box" id="nccr-top"></div>

        <!-- ==== CONTENT BOX ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">No Clowns Coffee Roasters</h1>
                        <h2 class="head-font">Fictional Coffee Company Packaging Mockup</h2>
                    </div>
                    <div class="content-blurb-logo">
                        <img src="../images/cs_nccr-logo.png" alt="No Clowns Coffee Roasters logo">
                    </div>
                </div>
                <div class="showcase flex flex-bet flex-vertcen">
                    <img src="../images/cs_nccr-banner.jpg" alt="mockup of No Clowns Coffee Roasters coffee bean packaging">
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section" id="nccr-1">
                    <?php include __DIR__ . '/../partials/design-partials/cs-print/nccr.php'; ?>
                </div>
            </div>
            <?php include __DIR__ . '/../partials/design-partials/cs-print/nccr-add.php'; ?>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>