<?php get_header(); ?>
<body>
	<div id = "mobileTitle">
		<p>Thomas<br>Thachil</p>
		<button id = "hamburger" class="hamburger"> <span></span>
		</button>
	</div>
	<nav>
		<div id = "title">Thomas<br>Thachil</div>
		<ul>
			<li class = "navItems">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/Spaceship-white.png" class = "navIcons">
				<div class = "whiteVerticalDivider"></div>
				<p class = "navText"><a href ="../home.html">About</a></p>
			</li>
			<li class = "navItems">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/Compactcam-white.png" class = "navIcons">
				<div class = "whiteVerticalDivider"></div>
				<p class = "navText"><a href ="../photography.html">Photography</a></p>
			</li>
			<li class = "navItems">
				<img src="<?php echo get_template_directory_uri(); ?>/icons/Gentleman-red.png" class = "navIcons">
				<div class = "redVerticalDivider"></div>
				<p class = "navTextActive navText "><a href ="/blog/index.php">Blog</a></p>
			</li>
		</ul>

		<div id = "linkContainer">
			<div class = "links">
				<a href="mailto:contact@thomasthachil.com">
					<img class = "linkIcon" src="<?php echo get_template_directory_uri(); ?>/icons/mail icon white.png">
					<div class = "link">
						<a href="mailto:contact@thomasthachil.com">Email</a>
					</div>
				</a>
			</div>
			<div class = "links">
				<a href="https://twitter.com/tthachil">
					<img class = "linkIcon" src="<?php echo get_template_directory_uri(); ?>/icons/TwitterLogo_white.png">
					<div class = "link">
						<a href="https://twitter.com/tthachil">Twitter</a>
					</div>
				</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class = "grid">
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post">
				  <div class = "post-text">
				    <div class="post-date">
				      <div class="post-date-day">
				        <?php echo get_the_date('j'); ?> /
				      </div>
				      <div class="post-date-month-year">
				        <span class="post-date-month">
				          <?php echo get_the_date('F'); ?>
				        </span>
				        <span class="post-date-year">
				          <?php echo get_the_date('Y'); ?>
				        </span>
				      </div>
				    </div>
				    <div class="post-title">
				      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    </div>
				    <div class="post-excerpt">
				      <?php the_excerpt(); ?>
				    </div>
				  </div>
				  <div class="post-image">
				    <?php
				    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				      ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a><?php
				    }
				    ?>
				  </div>
				  <?php
				  if ( has_tag() ) { // check if the post has a Post Thumbnail assigned to it.
				    ?>
				    <div class="post-text">
				      <div class="post-tags">
				        <?php the_tags( '#', ', #', '' ); ?>
				      </div>
				    </div>
				    <?php
				  }?>
				</div>
			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
		<div class = "sidebar">
			<div class ="twitter-widget">
			</div>
			<div class = "search">
				<?php get_search_form(); ?>
			</div>
			<div class = "tags">
				<h3 id = "tagTitle">Tags</h3>
				<?php
				$args = array(
					'smallest'                  => 16,
					'largest'                   => 16,
					'unit'                      => 'px',
					'number'                    => 45,
					'format'                    => 'list',
					'separator'                 => "\n#",
					'orderby'                   => 'count',
					'order'                     => 'DESC',
					//'exclude'                   => null,
					//'include'                   => null,
					'topic_count_text_callback' => default_topic_count_text,
					//'link'                      => 'view',
					'taxonomy'                  => 'post_tag',
					//'echo'                      => true,
					//'child_of'                  => null, // see Note!
				);
				wp_tag_cloud( $args );
				?>
			</div>
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
	<?php get_footer(); ?>
