<?php /* Smarty version Smarty-3.1.19, created on 2017-03-20 18:56:58
         compiled from "/Users/acalderon/Google Drive/AGS2 (1)/M08/m08calderon/acalderon.crn/TEs/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105727002558d017ea3685b9-30394624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171c9b0e65336022d666c2ee3dfbab585c016623' => 
    array (
      0 => '/Users/acalderon/Google Drive/AGS2 (1)/M08/m08calderon/acalderon.crn/TEs/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1482157024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105727002558d017ea3685b9-30394624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d017ea3b0978_46673056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d017ea3b0978_46673056')) {function content_58d017ea3b0978_46673056($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
