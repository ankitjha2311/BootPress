<div class="row main-menubar">
	<div class="col-11 col-md-2 web-name"><h4 class="py-2 text-center site-name"><?php bloginfo('name') ?></h4></div>
<div class="col-1 col-md-10 nav-menu">
                   <div class="toggle-nav mobile-menu">
					    <button role="tab" onclick="menu_open_nav()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','aeon-themes'); ?></span></button>
					</div>
			    	<div id="mySidenav" class="nav sidenav">
			          	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'aeon-themes' ); ?>">
				            <?php 
				              wp_nav_menu( array( 
				                'theme_location' => 'primary',
				                'container_class' => 'main-menu clearfix' ,
				                'menu_class' => 'clearfix',
				                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                'fallback_cb' => 'wp_page_menu',
				              ) ); 
				            ?>
				            <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="menu_close_nav()"><i class="fas fa-times"></i></a>
			          	</nav>
			        </div>
                </div>
                </div>
                </div>