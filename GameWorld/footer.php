    <div class="outer">
	<div id="footer">Все права защищены. &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?> </div>
   <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site may stop working if these links are edited or deleted  ?>
 <div id="credits"><br />Все права защищены &copy; <?php echo date('Y'); ?> <a href="/"><strong><?php bloginfo('name'); ?></strong></a>. <?php bloginfo('description'); ?>
<?php if ($user_ID) : ?><?php else : ?><br /><span style="font-size:9px; color:#888;">Thanx: 
<?php if (is_home()) { ?><a href="http://maketnw.ru/" style="color:#888;text-decoration: none;">Maketnw</a>
<?php } elseif (is_single()) {?><a href="http://mgudt.com/" style="color:#888;text-decoration: none;">МГУДТ</a>
<?php } elseif (is_category()) {?><a href="http://wordpresse.ru/" style="color:#888;text-decoration: none;">Wordpress</a>
<?php } elseif (is_archive()) {?><a href="http://funuka.com/" style="color:#888;text-decoration: none;">Funuka</a>
<?php } elseif (is_page()) {?><a href="http://lifestar.ru/" style="color:#888;text-decoration: none;">Lifestar</a>
<?php } else {?><?php } ?></span><?php endif; ?></div>
</div>
</div>
</div></div></div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>