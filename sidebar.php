<div class="sidebar">
			<?php if(!dynamic_sidebar('sidebar')): ?>
			<div class="vidget">
			<h2>Категории</h2>
			<ul>
			<?php wp_list_categories(array('title_li' => '0')); ?>
		</ul>
		</div>
		<?php endif ?>
			

		</div>	