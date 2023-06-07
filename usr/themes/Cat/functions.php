<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $avatarURL = new Typecho_Widget_Helper_Form_Element_Text('avatarURL', NULL, NULL, _t('头像地址'), _t(''));
    $form->addInput($avatarURL);
    $analyticsCode = new Typecho_Widget_Helper_Form_Element_Text('analyticsCode', NULL, NULL, _t('分析代码'), _t('在页脚显示'));
    $form->addInput($analyticsCode);
}
