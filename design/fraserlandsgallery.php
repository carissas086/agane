<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Fraser Lands Gallery</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#flg-top">TOP</a></div>
        <div class="toplink-box" id="flg-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Fraser Lands Gallery</h1>
                        <h2 class="head-font">Web Design &amp; Development</h2>
                    </div>
                </div>
                <div class="showcase flex flex-vertcen flex-center">
                    <img src="../images/cs_flg-sitebanner.jpg" alt="Fraser Lands Gallery website screen captures">
                </div>
                <div class="head-font flex">
                    <a class="design-back base-btn" href="https://fraserlandsgallery.com" title="Visit the Fraser Lands Gallery site live" target="_blank">View Site</a>
                    <a class="design-back base-btn" href="https://github.com/carissas086/flg.git" title="View Fraser Lands Gallery site code on Github" target="_blank">View Code</a>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock" style="padding-bottom:0;">
                <div class="content-arti-section empty-scroll" id="flg">
                    <?php include __DIR__ . '/../partials/design-partials/flg-overview.php'; ?>
                    <?php include __DIR__ . '/../partials/design-partials/flg-takeaway.php'; ?>
                </div>
            </div>

            <!-- ==== CONTENT END ==== -->
            <div class="head-font flex">
                <a class="design-back" href="../index.php#gallery">Back to Projects</a>
            </div>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>