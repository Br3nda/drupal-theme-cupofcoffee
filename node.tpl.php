<div class="post">
			<h1 class="title"><?php echo $title;?></h1>
			<div class="entry">
				<?php echo $content;?>
				</div>
			<div class="meta">
				<p class="byline"><?php echo $submitted;?></p>
				<p class="links"><?php if (!$page);?><a href="<?php echo url('node/'. $node->nid); ?>" class="more">Read full article</a> <b>|</b><?php endif;?><?php echo $links;?></p>
			</div>
		</div>
