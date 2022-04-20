<?php
/* Smarty version 4.1.0, created on 2022-04-20 20:58:02
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\ustawienia.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626057ba7537b3_69677027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b48faafbe8fe7fe5b5bbae31b7afee09601f08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\ustawienia.html',
      1 => 1650481072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626057ba7537b3_69677027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1935893219626057ba7461b9_82866623', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1935893219626057ba7461b9_82866623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1935893219626057ba7461b9_82866623',
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
      <li class="nav-link">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
artykuly">Artykuły</a>
      </li>
      <li class="nav-link selected">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ustawienia">Ustawienia</a>
      </li>
      <li class="nav-link"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
    </ul>
  </nav>
</div>

<div class="blog-container">
  <div class="user-main">
    <div class="user-info">
      <h1>Nazwa użytkownika: <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h1>
      <h1>Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</h1>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
