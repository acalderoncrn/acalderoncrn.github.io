<?php /* Smarty version Smarty-3.1.19, created on 2017-03-22 19:02:54
         compiled from "/Users/acalderon/Google Drive/AGS2 (1)/M08/m08calderon/acalderon.crn/TEs/prestashop/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67423930458d2bc4eb9f679-78916854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68f98dac0f542b9f0fb449eca39c6716166ad7be' => 
    array (
      0 => '/Users/acalderon/Google Drive/AGS2 (1)/M08/m08calderon/acalderon.crn/TEs/prestashop/modules/blockfacebook/blockfacebook.tpl',
      1 => 1482157026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67423930458d2bc4eb9f679-78916854',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d2bc4ebd6222_16950710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d2bc4ebd6222_16950710')) {function content_58d2bc4ebd6222_16950710($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
