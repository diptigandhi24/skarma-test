	<?php /* Template Name: CustomPageT1 */ ?>

	<?php get_header('index'); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 margin-top-20">
				<p class="font-size-30 font-family-squadone text-theme-violet border-bottom-4 display-inline-flex margin-none " > LATEST NEWS</p>
			</div>
			<div class=" col-xs-12 col-md-12">
			<div class="search-form">
				<div class="col-md-8 offset-md-4">
					<form class="form-inline">
					<div class="form-group col-md-8 col-xs-12">
							<label for="email" class="padding-hor-20">Search news for </label>
							<input type="email" class="form-control" id="email" placeholder="player match etc..">
						</div>
						<div class="form-group col-md-2 col-xs-12">

							<select class="form-control " id="sel1">
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
							</select>

						</div>
						<div clas="form-group col-md-2 col-xs-12">
							<button type="button" class="btn btn-go">GO</button>
						</div>
					</form>
				</div>
			</div>
			</div>
			<!-- let create the custom feild -->
			<div class="col-xs-12 col-md-12 padding-none margin-top-20">
			<?php
			$args = array(
				'post_type' => 'post'
				);

			$post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
				while($post_query->have_posts() ) {
					$post_query->the_post();
					?>
					<div class="col-xs-12 col-sm-12 col-md-4 margin-top-20" style="float:left; overflow: hidden;">
						<img src="<?php echo get_post_meta( get_the_ID(), 'image', true);?>" alt="image" width:"378px" height:"222px"/>
						<p class="margin-top-10 text-grey font-size-16 lastest-news-date"><?php echo get_post_meta( get_the_ID(), 'Date', true);?></p>
						<p class="font-size-24 lastest-news-name"><?php echo get_post_meta( get_the_ID(), 'name', true);?></p>
						<p class="font-size-21 text-grey lastest-news-description"><?php echo get_post_meta( get_the_ID(), 'description', true);?></p>
					</div>
					<?php
				}
			}
			?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>