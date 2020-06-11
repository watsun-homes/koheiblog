<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
<meta charset="utf-8">
<meta name="viewport"　
content="width=device-width, initial-scale=1.0 ">
<title>Life on Thailand|タイから情報を発信</title>
    
    

<link rel="canonical" href="https://petergk.com/">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP">
    
<!--IEでの崩れを防ぐ-->
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<!--IEでの崩れを防ぐ-->
    
    
<!--アーカイブは検索結果に表示しない-->
<?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
  <meta name="robots" content="noindex"/>
<?php endif; ?>
<!--アーカイブは検索結果に表示しない-->

    
    
    
    
    
    <!--個別ページ用のmetaデータ-->
    
<?php if( is_single() || is_page() ): ?>
    
  <?php setup_postdata($post) ?>
    <!--ページ抜粋を記述するmetaタグ-->
  <meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>
    <!--ページ抜粋を記述するmetaタグ-->

  <?php if ( has_tag() ): ?>
    <?php $tags = get_the_tags();
    $kwds = array();
    foreach($tags as $tag){
      $kwds[] = $tag->name;
    }	?>
    <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
  <?php endif; ?>
    
    
    <!--snsでのシェア用のmetaタグ(カード型で表示するためのmetaタグ)-->
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php the_title(); ?>">
  <meta property="og:url" content="<?php the_permalink(); ?>">
  <meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@watsunblog" />
  <?php if( has_post_thumbnail() ): ?>
    <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
    <meta property="og:image" content="<?php echo $postthumb[0]; ?>">
  <?php endif; ?>
    <!--snsでのシェア用のmetaタグ(カード型で表示するためのmetaタグ)-->
    
<!--個別ページ用のmetaデータ-->
    
    
    
<!--個別ページ以外のメタデータ-->
<?php else: ?>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <?php $allcats = get_categories();
  $kwds = array();
  foreach($allcats as $allcat) {
    $kwds[] = $allcat->name;
  } ?>
  <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
  <?php
  $http = is_ssl() ? 'https' . '://' : 'http' . '://';
  $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
  ?>
  <meta property="og:url" content="<?php echo $url; ?>">
  <meta property="og:description" content="<?php bloginfo( 'description' ) ?>">
  <!-- <meta property="og:image" content="表示したい画像のパス"> -->
<?php endif; ?>
    <!--個別ページ以外のメタデータ-->
    
    
    
    
    
    
<!--googleadsence-kohei-->
   <script data-ad-client="ca-pub-3809667403315983" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!--googleadsence-->
    
    
    

    
<!-- Global site tag (gtag.js) - Google Analytics -kohei-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163592169-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163592169-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
    
    
   
    
    
    
    
    <!--サンクスページ-->
 <script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://petergk.com/お問い合わせありがとうございます。/';
}, false );
</script>   
<!--サンクスページ-->
    
    
    
    
    
<!--ヘッダー画像読み込み-->
  <?php if ( get_header_image() ) : ?>
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<?php endif; ?>  
    <!--ヘッダー画像読み込み-->



    
    
    
    
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/webclipicon.png" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />
<!--css呼び出し、fontawwesome、アイコン呼び出し-->
    
    
    
    
    <!--search console-->
    <meta name="google-site-verification" content="B_AFN7rksPpfMq7o2Jg3i82So-gXKzr1QOhxVvMHgbw" />
    <!--search console-->
    
    
    
    
<?php wp_head(); ?>
</head>
    
    
    
<body <?php body_class(); ?>>
<header>

    
    
  <div id="nav-drawer">
       
<!--タイトルを文字にする場合-->
<div class="site-title">
  <h1><a href="<?php echo home_url(); ?>">
    <?php bloginfo( 'name' ); ?>
  </a></h1>
</div>
<!--タイトルを文字にする場合-->
    
      
      
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
          <h2>MENU</h2>
          <!--ヘッダーメニュー-->
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav', 
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
  ) ); ?>
          
    <ul class="menu-ul">
        <a href="https://twitter.com/0422h_k"><li class="flowbtn7 fl_tw7"><p>Twitter</p></li></a>
        <a href="https://petergk.com/"><li class="flowbtn7 line_btn"><p>LINE＠</p></li></a>
        <a href="https://www.facebook.com/.kohei.hidaka.374"><li class="flowbtn7 fl_fb7"><p>FaceBook</p></li></a>
        <a href="https://instagram.com/peter.0422?igshid=qa4uroytpzav"><li class="flowbtn7 insta_btn7"><p>Instagram</p></li></a>
          </ul>

 <!--ヘッダーメニュー-->
      </div>
      
    </div>
    
    <!--ヘッダー横スライドメニュー-->
    <nav id="scroll-menu">
<ul class="scroll-menu-inner">
<li class="scrollhome"><a href="https://petergk.com/">HOME</a></li>
<li class="scrollsoccer"><a href="https://petergk.com/category/soccer/">Soccer</a></li>
<li class="scrolllife"><a href="https://petergk.com/category/life/">Life</a></li>
<li class="scrollknowledge"><a href="https://petergk.com/category/knowledge/">Knowledge</a></li>
</ul>
</nav>
<!--ヘッダー横スライドメニュー-->
      
    
    

</header>