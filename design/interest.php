<!DOCTYPE html>
<html lang="en-ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carissas &mdash; 'Interest'</title>

        <?php include __DIR__ . '/../partials/design-headlinks.php'; ?>

    </head>
    <body>
        <?php include __DIR__ . '/../partials/design-header.php'; ?>

        <!-- ==== TOP LINK ==== -->
        <div class="head-font tab"><a href="#interest-top">TOP</a></div>
        <div class="toplink-box" id="interest-top"></div>

        <!-- ==== CONTENT HEADER ==== -->
        <main class="content-box">
            <div class="content-blurb">
                <div class="content-blurb-head flex flex-end flex-bet">
                    <div class="content-blurb-titles">
                        <h1 class="head-font">"Interest"</h1>
                        <h2 class="head-font">Illustration</h2>
                    </div>
                </div>
                <div class="flex flex-vertcen flex-even framed img-even">
                    <a href="../images/cs_interest-vector.jpg"
                        data-lightbox="interest"
                        data-title="This is the final vector illustration. It was completed entirely in Adobe Illustrator, and then exported into Photoshop for additional processing. The small red creatures are engaging in various hobbies and interests of mine, and utilises a colour scheme that harkens to childhood creativity." >
                            <img src="../images/cs_interest-vector.jpg" alt="Vector illustration of a small red creature doing various hobbies on a floating structure">
                    </a>
                    <a href="../images/cs_interest.jpg"
                        data-lightbox="interest"
                        data-title="Full, final illustration, with all additional post-processing done in Adobe Photoshop." >
                            <img src="../images/cs_interest.jpg" alt="Post-processed vector illustration of a small red creature doing various hobbies on a floating structure">
                    </a>
                    
                    
                </div>
            </div>

            <!-- ==== CONTENT IN PARTIALS ==== -->
            <div class="content-arti-section empty-scroll" id="interest">
                <?php include __DIR__ . '/../partials/design-partials/interest-overview.php'; ?>
                <?php include __DIR__ . '/../partials/design-partials/interest-takeaway.php'; ?>
            </div>

            <!-- ==== CONTENT END ==== -->
            <div class="showcase flex flex-bet flex-vertcen">
                <img src="../images/cs_interest-banner.jpg" alt="Mockup of an illustration printed on canvas in a dark room">
            </div>
            <div class="head-font flex">
                <a class="design-back" href="../index.php#gallery">Back to Projects</a>
            </div>
        
        <!-- ==== FOOTER ==== -->
        <?php include __DIR__ . '/../partials/design-footer.php'; ?>
    </body>
</html>