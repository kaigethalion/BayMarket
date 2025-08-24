<!-- Main Header / Header Style Three -->
<header class="main-header header-style-three">
    	
		<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
				</div>
				
				<div class="pull-right">
					
					<!-- Search Box -->
					<div class="search-box">
						<form method="post" action="#">
							<div class="form-group">
								<input type="search" name="search-field" value="" placeholder="Search" required>
								<button type="submit"><span class="icon flaticon-search"></span></button>
							</div>
						</form>
					</div>
					
				</div>
				
            </div>
        </div>
        <!--End Header Upper-->
		
		<!-- Header Upper -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
				<div class="nav-outer clearfix">
					<!--Mobile Navigation Toggler-->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
						<div class="navbar-header">
							<!-- Toggle Button -->    	
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
						<?php require_once('parts/header/menu.php'); ?>
						</div>
					</nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						<!-- Social Box -->
						<ul class="social-box">
							<li><a href="#" class="fa fa-facebook-f"></a></li>
							<li><a href="#" class="fa fa-dribbble"></a></li>
							<li><a href="#" class="fa fa-pinterest-p"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
						</ul>
					</div>
				</div>
				
            </div>
        </div>
        <!-- End Header Lower -->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Search Btn -->
						<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
						
						<!-- Nav Btn -->
						<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
						
					</div>
					
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->