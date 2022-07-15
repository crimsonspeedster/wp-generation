<header class="header">
	<div class="container header-row">
		<a href="{{get_home_url()}}" class="logo logo--header">Logo</a>

		<div class="header__menu">
			<span class="header__btn open">
				<i class="fas fa-bars"></i>
			</span>

			<span class="header__btn close">
				<i class="fas fa-times"></i>
			</span>

			{{
				wp_nav_menu([
					'menu' => 'header-menu'
				])
			}}
		</div>
	</div>
</header>