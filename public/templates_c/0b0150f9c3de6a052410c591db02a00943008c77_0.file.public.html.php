<?php
/* Smarty version 4.1.0, created on 2022-04-16 13:26:45
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\public.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625aa7f54a4d17_49697609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0150f9c3de6a052410c591db02a00943008c77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\public.html',
      1 => 1650108400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625aa7f54a4d17_49697609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_783277760625aa7f549c772_18241032', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_783277760625aa7f549c772_18241032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_783277760625aa7f549c772_18241032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="public-container">
  <div class="public-main">
    <div class="logoF1">
      <h1>F1Blog<span>🏎️</span></h1>
    </div>
    <div class="photo">
      <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/publicF1.jpg" />
    </div>
    <div class="description"><p>"Blog poświęcony tematyce Formuły 1"</p></div>

    <div class="my-logo">
      <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/logo.png" />
    </div>
    <div class="author"><h4>Autor: Marcin Chowaniec</h4></div>
    <div class="log-btn">
      <button onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login'" type="button">
        <span class="text">Logowanie</span>
      </button>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
