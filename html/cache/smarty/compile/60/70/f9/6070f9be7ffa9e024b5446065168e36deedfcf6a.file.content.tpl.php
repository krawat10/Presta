<?php /* Smarty version Smarty-3.1.19, created on 2019-11-09 10:14:08
         compiled from "/var/www/html/adminkrawat/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13469889215dc68360b0acc9-24939080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6070f9be7ffa9e024b5446065168e36deedfcf6a' => 
    array (
      0 => '/var/www/html/adminkrawat/themes/default/template/content.tpl',
      1 => 1460113476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13469889215dc68360b0acc9-24939080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5dc68360b283d1_10640169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc68360b283d1_10640169')) {function content_5dc68360b283d1_10640169($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
