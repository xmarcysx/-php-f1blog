<?php
/* Smarty version 4.1.0, created on 2022-04-21 16:33:00
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\artykuly.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62616b1c6a8083_62568788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3288044d1b5f2473aa5ca5b9da03d8c7c82023b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\artykuly.html',
      1 => 1650551562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62616b1c6a8083_62568788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34703422762616b1c69d096_74565405', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_34703422762616b1c69d096_74565405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_34703422762616b1c69d096_74565405',
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
blog"
          ><?php if ($_smarty_tpl->tpl_vars['user']->value->username == "admin") {?>Dodaj Wpis<?php } else { ?>Blog<?php }?></a
        >
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
