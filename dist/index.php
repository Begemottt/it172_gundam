<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>GundamPros - Gunpla, Models, Hobby Supplies - Gundam, Evagelion, Star Wars, and more!</title>
    <!-- Master stylesheet, collecting all the various parts into one big file -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Fonts: Audiowide, Bebas Neue, and Roboto Condensed -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bebas+Neue&family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <section id="logo">
            <a href="index.php"><h1>GUNDAM PROS</h1></a>
        </section>
        <div class="filler"></div>
        <nav>
            <a href='' class="nav_button"><h2>NEW ARRIVALS</h2></a>
            <a href='' class="nav_button"><h2>MODELS</h2></a>
            <a href='' class="nav_button"><h2>MODEL SUPPLIES</h2></a>
            <a href='' class="nav_button"><h2>ABOUT</h2></a>
            <a href='' class="nav_button"><h2>BLOG</h2></a>
            <a href='' class="nav_button"><h2>CUSTOMER SUPPORT</h2></a>
        </nav>
        <button id="cart">CART</button>
    </header>
    <main>
        <!-- This will be the showcase ad with a clickable image background -->
        <!-- I'll make sure to give 'em IDs so I can change 'em dynamically with JavaScript later -->
        <div id="showcase_wrapper">
        <article id="showcase">
            <a id="ad1">
                <section>
                    <h1 id="ad1_text"></h1>
                </section>
            </a>
            <a id="ad2">
                <section>
                    <h1 id="ad2_text"></h1>
                </section>
            </a>
            <a id="ad3">
                <section>
                    <h1 id="ad3_text"></h1>
                </section>
            </a>
        </article>
        </div>
        <!-- Three columns of different content here -->
        <article id="topics">
            <article id="blog_preview" class="column_content">
                <h2>BLOG</h2>
                <section>
                    <h3>IN STOCK! LOREM IPSUM MK IV</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </article>
            <article id="guide_preview" class="column_content">
                <h2>GUIDE TO GUNPLA</h2>
                <section>
                    <h3>New? Start here!</h3>
                </section>
            </article>
            <article id="catalogue_preview" class="column_content">
                <h2>PRODUCT CATALOGUE</h2>
                <section>
                    <ul>
                        <li><a href=""><p>GUNDAM MK 1</p><p>$11.99</p></a></li>
                        <li><a href=""><p>GUNDAM MK 2</p><p>$22.99</p></a></li>
                        <li><a href=""><p>GUNDAM MK 3</p><p>$33.99</p></a></li>
                        <li><a href=""><p>GUNDAM MK 4</p><p>$44.99</p></a></li>
                        <li><a href=""><p>ZETA GUNDAM</p><p>$ZZ.99</p></a></li>
                    </ul>
                </section>
            </article>
        </article>
    </main>
    <!-- Footer with four columns -->
    <footer>
        <article id="contact" class="footer_column">
            <h3>CONTACT</h3>
            <section>
                <address>123 Fake St.</address>
                <phone>(555)555-5555</phone>
            </section>
        </article>
        <article id="social" class="footer_column">
            <h3>SOCIAL MEDIA</h3>
            <section>
                <ul>
                    <li><a>TWITTER</a></li>
                    <li><a>FACEBOOK</a></li>
                    <li><a>INSTAGRAM</a></li>
                    <li><a>LINKEDIN</a></li>
                </ul>
            </section>
        </article>
        <article id="footer_blog" class="footer_column">
            <h3>BLOG</h3>
            <section>
                <ul>
                    <li><a>POST TITLE - 06/07/2021</a></li>
                    <li><a>POST TITLE - 06/07/2021</a></li>
                    <li><a>POST TITLE - 06/07/2021</a></li>
                    <li><a>POST TITLE - 06/07/2021</a></li>
                    <li><a>POST TITLE - 06/07/2021</a></li>
                </ul>
            </section>
        </article>
        <article id="boilerplate" class="footer_column">
            <h3>INFORMATION</h3>
            <section>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms of Service</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Site Map</a></li>
            </section>
        </article>
    </footer>

    <!-- Master JavaScript script, always put at the very end -->
    <script src='./main.js'></script>
</body>
</html>