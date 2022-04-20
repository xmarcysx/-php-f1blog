<?php
/* Smarty version 4.1.0, created on 2022-04-20 22:16:01
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\blog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62606a016cd8b7_88903225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d23848633629e27e9ee54b571b9866bfed20cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\blog.html',
      1 => 1650485707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62606a016cd8b7_88903225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148976188962606a016c6f38_00996083', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_148976188962606a016c6f38_00996083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148976188962606a016c6f38_00996083',
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
blog">Blog</a>
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
    <div class="blog-content">
      <div class="info">
        <div class="avatar">
          <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/logo.png" />
        </div>
        <div class="blog-username">
          <h3>Marcysiox</h3>
        </div>
      </div>

      <div class="blog-text">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias
        accusamus, placeat consequatur quo eius magnam reiciendis a accusantium
        blanditiis amet alias harum beatae expedita ab pariatur ipsam corporis,
        mollitia incidunt! Lorem ipsum dolor, sit amet consectetur adipisicing
        elit. Laudantium nostrum deserunt in ratione ipsum quisquam sunt odit
        sit, quidem enim ullam, impedit dolores est. Atque neque optio
        reprehenderit odio in.
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
