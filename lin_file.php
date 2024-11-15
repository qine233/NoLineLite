<ul  id="nav_menu">
    <li><a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>">Home</a></li>

    <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<li><a style="color: #ffffff" href="{permalink}">{title}</a></li>'); ?>
</ul>

//     <a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>

<?php $this->need('sidebar-right.php'); ?>

<div class="sibar-data-a">

    <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
    <ul class="sibar-data-a-ul">
        <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
    </ul class="sibar-data-a-ul">
    <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
    <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
</div>

<div class="button-flex">
    <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">follow&nbsp&nbspme</a></button>
</div>

<ul class="siber-comments">
    <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true&pageSize=5')->to($comments); ?>
    <?php while($comments->next()): ?>
        <li><?php $email=$comments->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="40px" height="40px" style="border-radius: 50%;" >'; ?>&nbsp;&nbsp;&nbsp;<?php $comments->author(false); ?> <a href="<?php $comments->permalink(); ?>"><span class="siber-com"> <?php $comments->excerpt(50, '...'); ?></span></a></li>
    <?php endwhile; ?>
</ul>





<?php $this->options->themeUrl('css/jquery.min.js'); ?>
<?php $this->options->themeUrl('css/pjax.js'); ?>


<div class="sibar-all">
<div class="sibar-data border-wid" >
<div class="mac"><span>classification</span>
    <i class="bg-primary"></i></div>
<div class="sibar-data-abc" >


<div class="sibar-data-b">
 <!-- <ul style="display: inline;">



</ul> -->
<div class="archives"> <ul>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> <span id="archives_span">{count}</span></li>'); ?>
</ul>  </div>

</div>
</div>
</div>
</div>

<h1 class="name"><?php $this->options->logoName(); ?></h1>

<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
            <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>