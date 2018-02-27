<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 15:36:39
         compiled from "/application/dashboard/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3722300365a956cf7d55174-90097069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a7cfdd0644385622160bd073c1f262cd7556e2' => 
    array (
      0 => '/application/dashboard/themes/default/template/content.tpl',
      1 => 1519741500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3722300365a956cf7d55174-90097069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a956cf7d7b4b5_91032408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a956cf7d7b4b5_91032408')) {function content_5a956cf7d7b4b5_91032408($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
