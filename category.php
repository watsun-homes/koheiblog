<?php get_header(); ?>
<div class="container">
    <?php 
      echo do_shortcode('[smartslider3 slider=2]');
       ?>
    <?php 
echo do_shortcode('[smartslider3 slider=3]');
?>
    <?php 
echo do_shortcode('[smartslider3 slider=1]');
?>
  <div class="contents">
      
  
<h2 class="categorytitle"><?php single_cat_title(); ?>カテゴリー記事の一覧</h2>

      

      <div class="contentslist">
       <?php
          $ads_infeed='4';
          $ads_infeed_count='1';
          ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php if($ads_infeed_count == $ads_infeed){?>
          <!--インフィード広告-->
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-7k+ew-1a-28+94"
     data-ad-client="ca-pub-3809667403315983"
     data-ad-slot="8071612622"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
          <!--インフィード広告-->
          <?php } $ads_infeed_count++;?>
          
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
          <br><h2><?php the_title(); ?></h2>
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