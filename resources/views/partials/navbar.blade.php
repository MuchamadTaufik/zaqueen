<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/categories" class="{{ ($title === "Category") ? 'active' : '' }}">Category</a></li>
                        <li class="submenu">
                            <a href="javascript:;" class="{{ ($title === "Contact") ? 'active' : '' }} {{ ($title === "About") ? 'active' : '' }}">Pages</a>
                            <ul>
                                <li class="scroll-to-section"><a href="/#explore">Explore</a></li>
                                <li class="scroll-to-section"><a href="/#social">Social Media</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="/login" class="{{ ($title === "Category") ? 'active' : '' }}">Login</a>
                        </li> --}}
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>