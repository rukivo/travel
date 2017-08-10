<?php get_header() ?>
	<div class="content">

<?php <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>



			<div class="post-main">
				<h1><a href="#">Букингемский дворец</a> <span>(10.08.2011)</span></h1>
				<div class="post">
					<img src="<?php bloginfo('template_url') ?>/images/palice.jpg" class="imgstyle" alt="Букингемский дворец" />
					<p>Первоначально Букингемский дворец был известен как Бакингем - хаус и строился для герцога Букингемского (с 1703 года). Он был приобретён королём Георгом III в 1762 в качестве будущей частной резиденции монарха (официальная резиденция Сент-Джеймсский дворец перестала устраивать его и величиной, и отделкой). В течение последующих 75 лет архитекторы Джон Нэш и Эдвард Блор (автор Алупкинского дворца), взяв за основу Бакингем-хаус, построили ещё три подобных здания. Все вместе образуют в плане квадрат, в центре которого — большой внутренний двор.
</p>
<p>Дворец был официально объявлен главной резиденцией британских монархов при вступлении на престол королевы Виктории в 1837 году. В её правление были сделаны последние большие дополнения, постройка ещё одного флигеля и перенесение бывшего парадного входа, Мраморной арки, на нынешнее место возле Ораторского уголка в Гайд-парке. Перед дворцовыми воротами стоит памятник в честь королевы Виктории. Стоимость строительства достигла 700 000 фунтов за счет использования таких излишеств, как 500 блоков каррарского мрамора с прожилками.</p>
<p><a href="#">Читать далее</a></p>
<p>Метки: <a href="#">Аглия</a>, <a href="#">Замки</a>, <a href="#">Дворец</a></p>
				</div>
			</div>
		</div>
		
		<?php get_sidebar() ?>
	</div>
	<?php get_footer() ?>
