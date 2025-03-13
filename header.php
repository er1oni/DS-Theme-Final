<header>
        <section class="top-bar">
            <div class="logo">
                Logo
            </div>
            <div class="searchbox">
                searchbox
            </div>
        </section>
        <div class="menu-area">
            <nav class="main-menu">
                <button class="chech-button">
                    <div class="menu-icon">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>
                <?php wp_nav_menu(
                    array('theme_location' => 'wp-devs-main_menu', 'depth' => 2)); 
                    ?>
            </nav>
        </div>
        </header>