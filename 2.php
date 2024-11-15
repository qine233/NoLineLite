<div class="content-last">
  <div class="contact border-wid">
      <h2 class="name-talk"><?php $this->options->logobg(); ?></h2>
    <div class="bg_color" style="background: url(<?php $this->options->logobgcolor(); ?>);
            background-position-x: center;
            background-position-y: center;
            background-size: cover;
            object-fit: cover;">
  <!-- <h1 class="contact-h1">#社交频道</h1> -->
  <img class="logo" src="<?php $this->options->logoCss(); ?>">
            <h1 class="name"><?php $this->options->logoName(); ?></h1></div>
 <!-- <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">关注</a></button> -->
             <div class="sibar-data-a">

            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
            <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
            </div>


</div>

  </div>