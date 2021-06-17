<?php include "./includes/header.php"; ?>
    <main id="front_page">
        <!-- This is where the slider is inserted in, on the element with the "showcase_wrapper" id -->
        <div id="showcase_wrapper">
        <article id="showcase">
            <!-- This won't show once the slider loads in -->
            <h1>LOADING...</h1>
        </article>
        </div>
        <!-- Three columns of different content here -->
        <article id="topics">
            <!-- First, the blog, giving a home-y feel to the front page -->
            <article id="blog_preview" class="column_content">
                <h2><a>BLOG</a></h2>
                <section>
                    <h3><a>IN STOCK! LOREM IPSUM MK IV</a> - <span class="date">6/16/2021</span></h3>
                    <p class="blog_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
                <section>
                    <h3><a>SOLD OUT! DX-79 DOLOR SIT AMET</a> - <span class="date">6/14/2021</span></h3>
                    <p class="blog_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>
            </article>
            <!-- Then a link to the guide for gunpla, a feature that explains what the deal is with these little plastic robots -->
            <article id="guide_preview" class="column_content">
                <h2><a>GUIDE TO GUNPLA</a></h2>
                <section>
                    <h3>New? Start here!</h3>
                    <a href="guide.php" class="image_wrapper">
                        <img src="images/guide_banner.png" />
                    </a>
                </section>
            </article>
            <!-- Finally, a list of the product catalogue! Let people get right into it if they want to. -->
            <article id="catalogue_preview" class="column_content">
                <h2><a href="categories.php">CATALOG</a></h2>
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
<?php include "./includes/footer.php"; ?>