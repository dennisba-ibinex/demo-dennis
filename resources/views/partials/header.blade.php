<div class="header-bg">
	<div class="bg-left"></div>
	<div class="bg-right"></div>
	<header class="header-wrap banner">
		<div class="dd-header-inner">
			<div class="dd-site-name dd-header-block">
				<a href="{{ get_site_url() }}">
					<span>
						{{ get_bloginfo('name') }}
					</span>
				</a>
			</div>

			<div class="dd-site-tagline dd-header-block">
				<span>
					{{ get_bloginfo('description') }}
				</span>
			</div>

			<div class="dd-site-logo dd-header-block">
				<a href="{{ get_site_url() }}">
					<img src="https://i.imgur.com/gV9TrRM.png" alt="Company Logo">
				</a>
			</div>
		</div>

		<nav class="nav-wrap">
			{{ wp_nav_menu('primary_navigation') }}
		</nav>
	</header>
</div>
