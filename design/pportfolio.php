<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Personal Portfolio</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#pport-top">TOP</a></div>
        <div class="toplink-box" id="pport-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Personal Portfolio</h1>
                        <h2 class="head-font">Web Design &amp; Development</h2>
                    </div>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-section empty-scroll" id="pport">
                <?php include __DIR__ . '/../partials/design-partials/pport-overview.php'; ?>
            </div>

            <!-- ==== CONTENT END ==== -->
            <div class="head-font flex">
                <a class="design-back" href="../index.php#webd">Back to Projects</a>
            </div>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>