<?php
/* Smarty version 4.1.0, created on 2022-04-21 17:54:20
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\blog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62617e2c231c91_47182407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d23848633629e27e9ee54b571b9866bfed20cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\blog.html',
      1 => 1650556459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62617e2c231c91_47182407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128828433262617e2c220881_84857773', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_128828433262617e2c220881_84857773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_128828433262617e2c220881_84857773',
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
      <li class="nav-link selected">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
blog"
          ><?php if ($_smarty_tpl->tpl_vars['user']->value->username == "admin") {?>Dodaj Wpis<?php } else { ?>Blog<?php }?></a
        >
      </li>
      <li class="nav-link">
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
  <div class="blog-main">
    <?php if ($_smarty_tpl->tpl_vars['user']->value->username == "admin") {?>
    <div class="dodaj-wpis">
      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
blog" method="post">
        <div class="input-wpis">
          <textarea
            placeholder="Napisz o czym chcesz poinformować fanów..."
            cols="25"
            rows="10"
            name="wpis"
          ></textarea>
        </div>
        <div class="log-btn">
          <button type="submit">
            <span class="text">Dodaj wpis</span>
          </button>
        </div>
      </form>
    </div>
    <?php } else { ?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'tekstBloga');
$_smarty_tpl->tpl_vars['tekstBloga']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tekstBloga']->value) {
$_smarty_tpl->tpl_vars['tekstBloga']->do_else = false;
?>
    <div class="blog-content">
      <div class="info">
        <div class="avatar">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/logo.png" />
        </div>
        <div class="blog-username">
          <h3><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
marcysiox">Marcysiox</a></h3>
        </div>
      </div>

      <div class="blog-text"><?php echo $_smarty_tpl->tpl_vars['tekstBloga']->value["tekst"];?>
</div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
