<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; Tech Collider</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#bcittc-top">TOP</a></div>
        <div class="toplink-box" id="bcittc-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">Tech Collider</h1>
                        <h2 class="head-font">Corporate Marketing Assets Project</h2>
                    </div>
                </div>
                <div class="content-arti-clean flex flex-around flex-end video-box">
                    <video muted autoplay loop>
                        <source src="../images/cs_bcittc-collide.mp4" type="video/mp4">
                        Your browser does not support the video tag :(
                    </video>
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-lock">
                <div class="content-arti-section empty-scroll" id="bcittc">
                    <?php include __DIR__ . '/../partials/design-partials/bcittc-overview.php'; ?>
                    <?php include __DIR__ . '/../partials/design-partials/bcittc-photos.php'; ?>
                    <?php include __DIR__ . '/../partials/design-partials/bcittc-mogr.php'; ?>
                    <?php include __DIR__ . '/../partials/design-partials/bcittc-takeaway.php'; ?>
                </div>
            </div>

            <!-- ==== CONTENT END ==== -->
            <div class="showcase flex flex-bet flex-vertcen">




                <img src="../images/cs_bcittc-banner.jpg" alt="Photograph of the Tech Collider at BCIT's downtown campus">
            </div>
            <div class="head-font flex">
                <a class="design-back" href="../index.php#gallery">Back to Projects</a>
            </div>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>