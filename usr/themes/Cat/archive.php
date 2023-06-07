<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<section id="main">
    <section class="header">
        <img src="<?php $this->options->avatarURL() ?>" alt="" class="avatar">
        <div class="name"><?php $this->options->title() ?></div>
        <div class="description"><?php $this->options->description() ?></div>
        <nav>
            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </nav>
    </section>
    <section class="posts">
        <?php while($this->next()): ?>
        <a class="post" href="<?php $this->permalink() ?>">
            <?php $this->title() ?>
            <span><?php $this->date('Y年'); ?><?php $this->commentsNum('', ', 1条评论', ', %d条评论'); 
?></span>
        </a>
        <?php endwhile; ?>
    </section>
    <?php $this->pageNav('浮', '沉', 0, ''); ?>
</section>
<?php $this->need('footer.php'); ?>

