<?php get_header(); ?>
<div class="container">
  <div class="contents">
      
     <?php get_template_part('breadcrumbs'); ?>
  
<h1 class="categorytitle"><?php single_cat_title(); ?>タグの一覧ページ</h1>

      <?php get_template_part('breadcrumbs'); ?> 

      <div class="contentslist">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji-list' ); ?>>
      <a class="list-up" href="<?php the_permalink(); ?>">
        <!--画像を追加-->
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
        <?php endif; ?>
        <div class="text">
          <!--投稿日を表示-->
          <span class="kiji-date">
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
            <!--カテゴリ-->
          <?php if (!is_category()): ?>
            <?php if( has_category() ): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
             <!--タイトル-->
          <br><h3><?php the_title(); ?></h3>
        </div>
      </a>
    </article>

    <?php endwhile; endif; ?><!--ループ終了-->

    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
      ) ); ?>
    </div>
  </div>
    
      
      
    
      
      </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>