<header>
    <nav class="navbar">
        <div class="navbar__brand">
            <a class="navbar__logo" href="index.php">
                <img src="assets/img/logo.svg" alt="logo">        
            </a>
            <button class="hamburger hamburger--collapse" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
        </div>
        <div class="navbar__menu-holder">
            <div id="js-navbar" class="navbar__menu">
                <ul id="menu-header-menu" class="navbar__start">
                    <li>
                        <a class="navbar-item <?= ($activePage == 'index') ? 'navbar-active':''; ?>" href="index.php">Home </a>
                    </li>
                    <li>
                        <a class="navbar-item <?= ($activePage == 'services') ? 'navbar-active':''; ?>" href="services.php">Services</a>
                    </li>
                    <li class="dropdown sub-menu">
                        <a class="navbar-item <?= ($activePage == 'products') ? 'navbar-active':''; ?>" href="javascript:void(0)">Products</a>
                        <div class="sub-menu__holder">
                            <ul>
                                <li><a href="products.php" class="navbar-item">SIRETY</a></li>
                                <!-- <li><a href="products.php" class="navbar-item">CRM</a></li>
                                <li><a href="products.php" class="navbar-item">Laundry</a></li>
                                <li><a href="products.php" class="navbar-item">Front Office</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="navbar-item <?= ($activePage == 'about-us') ? 'navbar-active':''; ?>" href="about-us.php">About Us</a>
                    </li>
                    <li>
                        <a class="navbar-item <?= ($activePage == 'contact-us') ? 'navbar-active':''; ?>" href="contact-us.php">Contact  Us </a>
                    </li>
                </ul>
            </div>
            <div class="navbar__right">
                <div class="navbar__lng onload-hide">
                    
                <dl id="select-custom" class="select-dropdown">
                    <dt><a href="javascript:void(0)"><span>English <img class="flag" src="assets/img/flag/united-kingdom-flag-icon.svg" alt="" /></span></a></dt>
                    <dd>
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="js-eng">English
                                    <img class="flag" src="assets/img/flag/united-kingdom-flag-icon.svg" alt="" />
                                    <span class="value">BR</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="js-ger">German
                                    <img class="flag" src="assets/img/flag/germany-flag-icon.svg" alt="" />
                                    <span class="value">FR</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="js-fre">French
                                    <img class="flag" src="assets/img/flag/france-flag-icon.svg" alt="" />
                                    <span class="value">FR</span>
                                </a>
                            </li>
                        
                        </ul>
                    </dd>
                </dl>
                    <!-- <div class="custom-select">
                        <select>
                            <option value="0" data-img_src="assets/img/flag/united-kingdom-flag-icon.svg">English</option>
                            <option value="eng-lng" data-img_src="assets/img/flag/united-kingdom-flag-icon.svg">English</option>
                            <option value="ger-lng" data-img_src="assets/img/flag/united-kingdom-flag-icon.svg">German</option>
                            <option value="fre-lng" data-img_src="assets/img/flag/united-kingdom-flag-icon.svg">French</option>
                        </select>
                    </div> -->
                    <!-- <div id="google_translate_element"></div> --> 
                    <!-- <a href="javascript:void(0)">
                        English
                        <img src="assets/img/down-arrow.svg" alt=""> 
                    </a>
                    <div class="lng__holder">
                        <ul>
                            <li><a href="javascript:void(0)" class="lng-item ger-lng day">Germany</a></li>
                            <li><a href="javascript:void(0)" class="lng-item fre-lng night">French</a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="navbar__login">
                    <a href="javascript:void(0)">Login</a>
                </div>
            </div>
        </div>
    </nav>
</header>