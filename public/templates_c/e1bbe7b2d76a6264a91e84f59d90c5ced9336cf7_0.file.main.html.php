<?php
/* Smarty version 4.1.0, created on 2022-04-21 18:27:44
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62618600a64918_77654486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bbe7b2d76a6264a91e84f59d90c5ced9336cf7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\templates\\main.html',
      1 => 1650558462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62618600a64918_77654486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>F1Blog</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Marcin Chowaniec" />
    <meta
      http-equiv="Cache-Control"
      content="no-cache, no-store, must-revalidate"
    />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/main.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/public.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/login.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/register.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/blog.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/artykuly.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/artykul1.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/ustawienia.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/alertify.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/marcysiox.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/alertify.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252108162618600a543b0_81916543', 'content');
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93842526062618600a55b27_66570337', 'alerts');
?>

  </body>
</html>
<?php }
/* {block 'content'} */
class Block_252108162618600a543b0_81916543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_252108162618600a543b0_81916543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Zawartość contentu... <?php
}
}
/* {/block 'content'} */
/* {block 'alerts'} */
class Block_93842526062618600a55b27_66570337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'alerts' => 
  array (
    0 => 'Block_93842526062618600a55b27_66570337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        alertify.error("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '</script'; ?>
>
    <?php }?> <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
      alertify.success("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '</script'; ?>
>
    <?php }?> <?php
}
}
/* {/block 'alerts'} */
}
