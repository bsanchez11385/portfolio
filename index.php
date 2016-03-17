<!DOCTYPE html>
<html>
    <head>
        <!-- Title --><title> BackHat Web Design</title>
        <!-- Page Icon --><link rel="shortcut icon" href="img/bh-icon.png">
        <!-- Font Awesome --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS --><link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Application CSS--><link rel="stylesheet" type="text/css" href="css/application.css">
        <!-- Badges CSS --><link rel="stylesheet" href="js/reportcard/css/badges.css">

        <!-- JQuery JS --><script src="js/jquery.js"></script>
        <!-- JQuery UI --><script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
        <!-- Local Scroll JS --><script src="js/localScroll.js"></script>
        <!-- Scroll To JS --><script src="js/scrollTo.js"></script>
        <!-- Main JS --><script src="js/main.js"></script>

        <!-- Viewport - Mobile --><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Down Arrow Scroll JS -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#down-arrow-anchor').localScroll({duration:750});
            });
            $(document).ready(function() {
                $('#about-me-anchor').localScroll({duration:750});
            });
            $(document).ready(function() {
                $('#contact-anchor').localScroll({duration:750});
            });
            $(document).ready(function() {
                $('#portfolio-anchor').localScroll({duration:750});
            });
        </script>
    </head>
    <body onresize="slabby()">   
        <?php include 'includes/header.php'; ?>
        <section>
            <!-- Section 1 -->
            <div class="section-container sec-container-1">
                <div id="slab-text-container">
                    <h1 class="toslab">
                    </h1>
                </div>
                <div id="down-arrow-anchor"><a href="#section-2"><div class="down-arrow"></div></a></div>
            </div><!-- end Section 1 -->
            <!-- Section 2 -->
            <div class="section-container sec-container-2">
                <a name="section-2"></a>
                <a name="about"></a>
                <div class="row about">
                    <h1 class="sec-heading">About Me</h1>
                    <p><img src="img/about-me-picture-min.jpg" alt="picture of Brian and Nidia Sanchez"></p>
                    <p>I'm an up-and-coming web designer, and I currently live in the Salt Lake Valley. I studied Economics at Brigham Young University, and originally discovered my love for coding when working with statistical programming packages (mostly SAS, Stata, and R). Since I was a teenager, I've been fascinated by the fields of web design and development, but just recently decided to follow my passion.</p>
                    <p>I spend my days combing through Treehouse and Google to learn new coding skills and brush up on old ones. While I'm not coding, I also love working out and learning new things (currently learning Afrikaans). Right now I'm looking for a development position where I can unleash my creative potential and love for learning.</p>
                </div>
                <?php include 'includes/zigZagRows.php'; ?>
                <hr class="sec-hr lg-sec-hr">
                <!-- Portfolio -->
                <a name="portfolio"></a>
                <div class="portfolio">
                    <h1 class="sec-heading">Portfolio</h1>
                    <!-- Report Card -->
                    <div class='report-card-container'>
                        <div class="report-card treehouse"></div>
                    </div><!-- end Report Card -->
                </div><!-- end Portfolio -->
                <hr class="sec-hr lg-sec-hr">
                <!-- Contact -->
                <a name="contact"></a>
                <div class='contact'>
                    <h1 class="sec-heading">Contact Me</h1>
                    <p>I'm currently available for freelancing projects, and am looking to build my portfolio.</p>
                </div><!-- end Contact -->
            </div><!-- end Section 2 -->
        </section>
        <footer>
            <!-- Footer Wrapper -->
            <div class="footer-wrapper">
                    <!-- go-to-top button -->
                    <div class="go-top" id="go-top">
                        <a href="#">
                            <i class="fa fa-4x fa-chevron-up" id="up-arrow"></i>
                        </a>
                    </div><!-- /go-to-top button -->
                    <!-- copyright -->
                    <div class='copyright' id="copyright-footer">
                        <span>Copyright &#169; 2016 | BackHat Web Development</span>
                    </div><!-- /copyright -->
            </div><!-- Footer Wrapper -->
        </footer>
        <!-- SlabText JS --><script src="js/slabText.js"></script>
        <script type="text/javascript">
            var stS = "<span class='slabtext'>",
            stE = "</span>",
            txt = [
                "<span class='offset-1 bold'>Hi</span>, I'm <span class='i'>Brian Sanchez</span>.",
                "I'm an <span class='underline'>up-and-coming</span>",
                "<span class='offset-2'>Web Developer</span>", 
                "and I <span class='offset-1 i bold'>LOVE</span> what I do."];
            
            $(".toslab").html(stS + txt.join(stE + stS) + stE).slabText();
            function slabby(){
                $(".toslab").html(stS + txt.join(stE + stS) + stE).slabText();
            }
        </script> <!-- end Slabtext Script -->
        <!-- Badges JS --><script src="js/reportcard/js/reportcard.js"></script>
        <script>
            $('.report-card.treehouse').reportCard({
                userName: 'briansanchez2',
                site: 'treehouse',
                badgesAmount: 7
            });
        </script><!-- end Badges JS -->
    </body>
</html>