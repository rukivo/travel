<div class="footer">
		<div class="cpy">
			<a href="/"><span>C</span>hoose <span>T</span>ravel</a>
			<p>Chooce Travel 2011<br />
			Все права зашишены.<br />
			Email: contact@chooseTravel.ru</p>
		</div>
		<div class="menu-foot">
			<h2>Категории</h2>
			<ul>			
				<li>- <a href="#">Италия</a></li>
				<li>- <a href="#">Германия</a></li>
				<li>- <a href="#">Франция</a></li>
				<li>- <a href="#">Великобритания</a></li>
				<li>- <a href="#">Египет</a></li>
				<li>- <a href="#">АОЭ</a></li>
			</ul>
		</div>	
		<div class="menu-foot">
			<h2>Страницы</h2>
		<?php wp_nav_menu(array(
		'theme_location' =>'menu', 
		'container' => false, 
		'menu_class'=>'',
		'before'=>'- '
		)); ?>

		</div>				
	</div>
</div>
	<?php wp_footer(); ?>
</body>
</html>