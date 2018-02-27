<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 15:35:53
         compiled from "/application/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9510450215a956cc9f27864-89968036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef44a8c6ef7b61afd877b6611bd863c9a085cae3' => 
    array (
      0 => '/application/modules/welcome/views/templates/tooltip.tpl',
      1 => 1519741511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9510450215a956cc9f27864-89968036',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a956cca002bb3_81935765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a956cca002bb3_81935765')) {function content_5a956cca002bb3_81935765($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
