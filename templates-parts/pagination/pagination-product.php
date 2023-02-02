
<!--  modele template pagination -->
<div class="row pagination-wrapper">
		<div class="col-md-12">
			<nav data-aos="fade-up" data-aos-duration="1500">
				<ul class="pagination">
				  <!-- <li class="page-item active"><?php //previous_posts_link( '&laquo; Prev', $loop->max_num_pages) ?></li> -->
				  <li class="page-item active"><?php the_posts_pagination( '&laquo; Prev', $loop->max_num_pages) ?></li>
				  <!-- <li class="page-item"><?php //next_posts_link( 'Suiv &raquo;', $loop->max_num_pages) ?></li> -->
				</ul>
			</nav>
		</div>
</div>