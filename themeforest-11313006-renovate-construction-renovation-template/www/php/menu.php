<nav>
	<ul class="sf-menu">
		<li<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
			<a href="?page=home" title="Home">
				HOME
			</a>
		</li>
		<li <?php echo ($_GET["page"]=="services" || $_GET["page"]=="service_interior_renovation" || $_GET["page"]=="service_design_build" || $_GET["page"]=="service_tiling_painting" || $_GET["page"]=="service_paver_walkways" || $_GET["page"]=="service_household_repairs" || $_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
			<a href="?page=services" title="Services">
				SERVICES
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=service_interior_renovation" title="Interior Renovation">
						Interior Renovation
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_design_build" ? " class='selected'" : ""); ?>>
					<a href="?page=service_design_build" title="Design and Build">
						Design and Build
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_tiling_painting" ? " class='selected'" : ""); ?>>
					<a href="?page=service_tiling_painting" title="Design and Build">
						Tiling and Painting
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_paver_walkways" ? " class='selected'" : ""); ?>>
					<a href="?page=service_paver_walkways" title="Paver Walkways">
						Paver Walkways
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_household_repairs" ? " class='selected'" : ""); ?>>
					<a href="?page=service_household_repairs" title="Household Repairs">
						Household Repairs
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
					<a href="?page=service_solar_systems" title="Solar Systems">
						Solar Systems
					</a>
				</li>
			</ul>
		</li>
		<li <?php echo ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
			<a href="?page=projects" title="Projects">
				PROJECTS
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=project_interior_renovation" title="Interior Renovation">
						Interior Renovation
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="project_garden_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=project_garden_renovation" title="Garden Renovation">
						Garden Renovation
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="project_painting" ? " class='selected'" : ""); ?>>
					<a href="?page=project_painting" title="Painting">
						Painting
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="project_design_build" ? " class='selected'" : ""); ?>>
					<a href="?page=project_design_build" title="Design and Build">
						Design and Build
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
					<a href="?page=project_solar_systems" title="Solar Systems">
						Solar Systems
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo ($_GET["page"]=="about" || $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
			<a href="?page=about" title="Pages">
				PAGES
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="about" ? " class='selected'" : ""); ?>>
					<a href="?page=about" title="About">
						About
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="404" ? " class='selected'" : ""); ?>>
					<a href="?page=404" title="404 Not Found">
						404 Not Found
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=service_interior_renovation" title="Single Service">
						Single Service
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=project_interior_renovation" title="Single Project">
						Single Project
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="post" || $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
			<a href="?page=blog" title="Blog">
				BLOG
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
					<a href="?page=blog" title="Blog">
						Blog
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_left_sidebar" title="Blog">
						Blog Left Sidebar
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
					<a href="?page=blog_2_columns" title="Blog 2 Columns">
						Blog 2 Columns
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="post" ? " class='selected'" : ""); ?>>
					<a href="?page=post" title="Single Post">
						Single Post
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="search" ? " class='selected'" : ""); ?>>
					<a href="?page=search&amp;s=ipsum" title="Search Template">
						Search Template
					</a>
				</li>
			</ul>
		</li>
		<li<?php echo ($_GET["page"]=="cost_calculator" ? " class='selected'" : ""); ?>>
			<a href="?page=cost_calculator" title="Cost Calculator">
				COST CALCULATOR
			</a>
		</li>
		<li class="left-flyout<?php echo ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" ? " selected" : ""); ?>">
			<a href="?page=contact" title="Contact">
				CONTACT
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
					<a href="?page=contact" title="Contact Style 1">
						Contact Style 1
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
					<a href="?page=contact_2" title="Contact Style 2">
						Contact Style 2
					</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu">
			<li<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home">
					HOME
				</a>
			</li>
			<li <?php echo ($_GET["page"]=="services" || $_GET["page"]=="service_interior_renovation" || $_GET["page"]=="service_design_build" || $_GET["page"]=="service_tiling_painting" || $_GET["page"]=="service_paver_walkways" || $_GET["page"]=="service_household_repairs" || $_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
				<a href="?page=services" title="Services">
					SERVICES
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=service_interior_renovation" title="Interior Renovation">
							Interior Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_design_build" ? " class='selected'" : ""); ?>>
						<a href="?page=service_design_build" title="Design and Build">
							Design and Build
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_tiling_painting" ? " class='selected'" : ""); ?>>
						<a href="?page=service_tiling_painting" title="Design and Build">
							Tiling and Painting
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_paver_walkways" ? " class='selected'" : ""); ?>>
						<a href="?page=service_paver_walkways" title="Paver Walkways">
							Paver Walkways
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_household_repairs" ? " class='selected'" : ""); ?>>
						<a href="?page=service_household_repairs" title="Household Repairs">
							Household Repairs
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
						<a href="?page=service_solar_systems" title="Solar Systems">
							Solar Systems
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
				<a href="?page=projects" title="Projects">
					PROJECTS
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_interior_renovation" title="Interior Renovation">
							Interior Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_garden_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_garden_renovation" title="Garden Renovation">
							Garden Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_painting" ? " class='selected'" : ""); ?>>
						<a href="?page=project_painting" title="Painting">
							Painting
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_design_build" ? " class='selected'" : ""); ?>>
						<a href="?page=project_design_build" title="Design and Build">
							Design and Build
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
						<a href="?page=project_solar_systems" title="Solar Systems">
							Solar Systems
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo ($_GET["page"]=="about" || $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="Pages">
					PAGES
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="about" ? " class='selected'" : ""); ?>>
						<a href="?page=about" title="About">
							About
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="404" ? " class='selected'" : ""); ?>>
						<a href="?page=404" title="404 Not Found">
							404 Not Found
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=service_interior_renovation" title="Single Service">
							Single Service
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_interior_renovation" title="Single Project">
							Single Project
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo ($_GET["page"]=="blog" || $_GET["page"]=="blog_left_sidebar" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="post" || $_GET["page"]=="search" ? " class='selected'" : ""); ?>>
				<a href="?page=blog" title="Blog">
					BLOG
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
						<a href="?page=blog" title="Blog">
							Blog
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="blog_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_left_sidebar" title="Blog">
							Blog Left Sidebar
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns" title="Blog 2 Columns">
							Blog 2 Columns
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="post" ? " class='selected'" : ""); ?>>
						<a href="?page=post" title="Single Post">
							Single Post
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="search" ? " class='selected'" : ""); ?>>
						<a href="?page=search&amp;s=ipsum" title="Search Template">
							Search Template
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo ($_GET["page"]=="cost_calculator" ? " class='selected'" : ""); ?>>
				<a href="?page=cost_calculator" title="Cost Calculator">
					COST CALCULATOR
				</a>
			</li>
			<li class="left-flyout<?php echo ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" ? " selected" : ""); ?>">
				<a href="?page=contact" title="Contact">
					CONTACT
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
						<a href="?page=contact" title="Contact Style 1">
							Contact Style 1
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="contact_2" ? " class='selected'" : ""); ?>>
						<a href="?page=contact_2" title="Contact Style 2">
							Contact Style 2
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</nav>
</div>