<footer>
   <div class="beforefooter clearfix">
       <div class="pages clearfix">
           <div class="searchwidget">
           <form class="searchform" id="searchform" role="search" action="https://petergk.com/" method="get">
           <div>
               <input name="s" class="searchform-input" id="s" type="search" placeholder="検索" value="" />
               <button class="searchform-submit" id="searchsubmit" type="submit">
                   <i class="fas fa-search"></i>
               </button>
           </div>
           </form>
           </div>
           <div class="ft-title">
           <h2>PAGES</h2><h4>読んで欲しいページ</h4>
           </div>
           <a href="https://petergk.com/%e7%ae%a1%e7%90%86%e8%80%85%ef%bc%88kohei%ef%bc%89%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/"><h4>>管理者(kohei)について</h4></a>
           <a href="https://watsunblog.com/サイトデザイン"><h4>>このサイトを制作した人</h4></a>
       </div>
       <div class="recent clearfix">
           <div class="ft-title">
           <h2>RECENT</h2><h4>最近の記事</h4>
           </div>
           <ul>
<?php
  $args = array(
    'posts_per_page' => 3 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li>
      <!--画像を追加-->
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
        <?php endif; ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </li>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
       </div>
       <div class="footercategory clearfix">
           <div class="ft-title">
           <h2>CATEGORY</h2><h4>記事カテゴリー</h4>
           </div>
            <?php
	//一番親階層のカテゴリをすべて取得
	$categories = get_categories('parent=0');
	
	//取得したカテゴリへの各種処理
	foreach($categories as $val){
		//カテゴリのリンクURLを取得
		$cat_link = get_category_link($val->cat_ID);
		//親カテゴリのリスト出力
		echo '<li>';
		echo '<div class="overflow"><a href="' . $cat_link . '">' . $val -> name . '</a>';
		//子カテゴリのIDを配列で取得。配列の長さを変数に格納
		$child_cat_num = count(get_term_children($val->cat_ID,'category'));
		//子カテゴリが存在する場合
		if($child_cat_num > 0){
			echo '<ul>';
			//子カテゴリの一覧取得条件
			$category_children_args = array('parent'=>$val->cat_ID);
			//子カテゴリの一覧取得
			$category_children = get_categories($category_children_args);
			//子カテゴリの数だけリスト出力
			foreach($category_children as $child_val){
				$cat_link = get_category_link($child_val -> cat_ID);
				echo '<li><a href="' . $cat_link . '">' . $child_val -> name . '</a>';
			}
			echo '</ul>';
		}
		echo '</div></li>';
	}
?>
       </div>
    </div>
    
  <div class="footer-inner">
    <div class="footer-nav-area">
      <?php wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
            ) ); ?>
    </div>

    <div class="copyright">
      <p>©<?php bloginfo( 'name' ); ?> All Rights Reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

