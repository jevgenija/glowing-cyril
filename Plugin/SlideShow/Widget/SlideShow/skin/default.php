<div id="carousel-example-generic" class="carousel carousel-slider slide" data-ride="carousel">
	<!-- Indicators --> 
	<?php if(count($items) > 1){ ?>
	<ol class="carousel-indicators">
		<?php foreach($items as $key=>$val){ ?>
			<li data-target="#carousel-example-generic" data-slide-to="<?=$key?>" class="<?php if($key == 0){ echo 'active'; } ?>"></li>
		<?php } ?>
	</ol>
	<?php } ?>
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<?php foreach($items as $key=>$val){ ?>
		<div class="item <?php if($key == 0){ echo 'active'; } ?>">
			<a href="<?=$val['url']?>">
				<?php
				$options = array(
					'type' => 'center',
					'width' => ipGetOption('SlideShow.imageWidth', 1121),
					'height' => ipGetOption('SlideShow.imageHeight', 397), 
					);
				$thumbnail = ipReflection($val['image'], $options);
				if (!$thumbnail) {
					$thumbnail = ipReflectionException();
				} else {
					$thumbnail = ipFileUrl($thumbnail);
				}
				?>
				<img class="img-responsive" src="<?=$thumbnail?>" alt="" />
				<?php if(!empty($val['text'])){ ?>
				<div class="carousel-caption">
					<div class="col-xs-4 col-xs-push-8">
						<div class="description">
							<h2><?=$val['title']?></h2>
							<p>
							<?=$val['text']?>
							</p>
						</div>
					</div>
				</div>
				<?php } ?>
			</a>
		</div>
		<?php } ?>
	</div>
</div>