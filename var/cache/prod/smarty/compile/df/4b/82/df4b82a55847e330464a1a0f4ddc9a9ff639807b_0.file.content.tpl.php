<?php
/* Smarty version 4.3.4, created on 2025-09-20 14:30:40
  from 'C:\xampp\htdocs\worlddecor\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ceac80ecff90_60346916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4b82a55847e330464a1a0f4ddc9a9ff639807b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\worlddecor\\admin\\themes\\default\\template\\content.tpl',
      1 => 1756996832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ceac80ecff90_60346916 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
