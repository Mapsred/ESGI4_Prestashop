<?php /* Smarty version Smarty-3.1.19, created on 2018-02-27 15:35:53
         compiled from "/application/admin020fo30xr/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16149882655a956cc94e4c81-47988734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a911201228edc2d884edc8655a512fe3c512318' => 
    array (
      0 => '/application/admin020fo30xr/themes/default/template/content.tpl',
      1 => 1519741500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16149882655a956cc94e4c81-47988734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a956cc9515fe3_02498766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a956cc9515fe3_02498766')) {function content_5a956cc9515fe3_02498766($_smarty_tpl) {?>
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
