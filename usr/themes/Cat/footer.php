<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer>
	<center><div id="copyright">Copyright &copy;
                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?>
            </div></center>
	<?php $this->options->analyticsCode() ?>
</footer>
</body>
</html>
