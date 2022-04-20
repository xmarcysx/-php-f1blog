<?php
/* Smarty version 4.1.0, created on 2022-04-20 21:39:58
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\artykuly.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6260618e667420_28408787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3288044d1b5f2473aa5ca5b9da03d8c7c82023b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\artykuly.html',
      1 => 1650483586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6260618e667420_28408787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10041668946260618e65fd60_17597170', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_10041668946260618e65fd60_17597170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10041668946260618e65fd60_17597170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="navigation">
  <nav class="nav-items">
    <div class="logoF1">
      <h1>F1Blog<span>🏎️</span></h1>
    </div>
    <ul class="nav-menu">
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
blog">Blog</a>
      </li>
      <li class="nav-link selected">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
artykuly">Artykuły</a>
      </li>
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ustawienia">Ustawienia</a>
      </li>
      <li class="nav-link"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
    </ul>
  </nav>
</div>

<div class="blog-container">
  <div class="artykul-main">
    <div
      class="artykul-content"
      onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
artykul1'"
    >
      <div class="artykul-img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/2021Max.jpg" />
      </div>
      <div class="artykul-text">
        <h3>Podsumowanie sezonu 2021 - Marcysiox</h3>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
