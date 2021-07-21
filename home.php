<?php
/**
 * The template for displaying Archive pages.
 *
 * @package ThinkUpThemes
 */

get_header(); 
global $dir;
?>

<section class="well-6 bg-secondary-2">
<div class="row">
		<div class="col-lg-6 col-md-12 text-center text-lg-right">
				<img src="<?=$dir?>/images/page-01_img01.jpg" alt="青年の顔">
		</div>

		<div class="col-lg-6 col-md-12 inset-3 text-center text-lg-left">
							<img src="<?=$dir?>/images/staff_bg02.png" style="max-width: 100%;" alt="散布図形">
							<h2 class="text-center text-lg-left">◯◯はどんな会社?</h2>
							<h6 class="small normal text-center text-lg-left text-primary">
									仲間と未来をつなぐひとりひとりの○○○スピリット</h6>
							<p class="big-1 offset-3 font-family-2 text-secondary-2">
									◯◯は創業50年の歴史をもつ、愛知県での港湾土木を中心とした建設会社です。「あなたと海をつなぐ。」をスローガンとし、日々、人々の暮らしの基盤づくりに貢献しております。
							</p>
							<a href="#" class="btn btn-md btn-secondary-1 offset-3">もっと読む</a>
		</div>
</div>
</section>


<section class="container service">
	<h3>事業内容<br><span>SERVICE</span></h3>
	<?php thinkup_input_homepagesection(); ?>
</section>


<section class="container works">
	<h3>施工実績<br><span>WORKS</span></h3>
	
	<div class="multiple-items">

<?php

$args = array(
	'posts_per_page' => 24, //投稿数
	'post_type' => 'jiseki',//投稿タイプ
);

$query = new WP_Query($args);

   if ($query->have_posts()){
      while ($query->have_posts()) {
         $query->the_post();
 ?>

	<article id="post-<?php the_ID(); ?>" >
		<div class="entry-content ">
			<header class="entry-header  ">
			  <?php $large=get_field('photo'); ?>
				<p><img src="<?=$large['sizes']['medium'] ?>" alt=""></p>
			</header>
			  <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		</div>
	</article>

 <?php         
      }
		}
	?>

</div>
</section>

<?php
//dynamic_sidebar('my_sidebar_1');
?>


<!--採用情報のイケメン背景-->
<section class="well-7 bg-secondary-3 bg-image-saiyo">
	<div class="container">
		<div class="block left_top">
			<h3><i class="fa fa-graduation-cap" aria-hidden="true"></i>自立</h3> <p>Independance</p>
			<hr><hr>
		</div>

		<div class="block right_top">
			<h3>採用情報</h3>
			<p>弊社では､一緒に働いてくれる仲間を募集中!新しいことにチャレンジして､皆さんでより良い環境を一緒に作りませんか?</p>
			<hr><hr  style="left: 38px;">
			<button>募集業務の詳細</button>
		</div>

		<div class="block left_bottom">
			<h3><i class="fa fa-clock-o" aria-hidden="true"></i>育成</h3> <p>Traning</p>
		</div>

		<div class="block right_bottom">
			<h3><i class="fa fa-trophy" aria-hidden="true"></i>挑戦</h3> <p>Charenge</p>
		</div>
      
	</div>
</section>
<!-- // 採用情報のイケメン背景 -->

<section class="container">
		<div class="row">  
				<div class="col-md-6 text-center text-md-left">
						<h4 class="text-center text-md-left offset-1">
								お問い合わせ
								<br>
								<span>Contact</span>
						</h4>
						<p>土木工事・舗装工事・水道管設置工事・ドローン測量のことに関するご依頼・お問い合わせ募集中！！</p>
						<hr>
						<a href="#" class="btn btn-sm btn-secondary-1">メールでのお問い合わせはこちら</a>
				</div>	 
				<div class="col-md-6 text-center text-md-left" style=" height: 490px; overflow: hidden">
					<h4>TWITTER</h4>
					<a class="twitter-timeline" href="https://twitter.com/TODA_PR?ref_src=twsrc%5Etfw">Tweets by TODA_PR</a>
				</div>
		</div>
</section>


<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
jQuery('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1
});

jQuery(function(){
	jQuery("button.slick-prev").remove();

	jQuery("button.slick-next").html("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z' fill='#007aff'/></svg>");
});

jQuery("form.searchform").append('<button type="submit" class="searchsubmit fa-search" name="submit" value="Search"></button>');

jQuery("a.themebutton").addClass("fa fa-play-circle").text('');

</script>



		
<?php get_footer() ?>