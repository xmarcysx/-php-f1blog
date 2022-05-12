<?php
/* Smarty version 4.1.0, created on 2022-05-12 16:32:29
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\blog.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627d1a7d461c89_08718715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d23848633629e27e9ee54b571b9866bfed20cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\blog.html',
      1 => 1652365947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627d1a7d461c89_08718715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512293382627d1a7d4504e0_47380010', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1512293382627d1a7d4504e0_47380010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1512293382627d1a7d4504e0_47380010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
>
  tinymce.init({
    selector: "#mytextarea",
    plugins: [
      "a11ychecker",
      "advlist",
      "advcode",
      "advtable",
      "autolink",
      "checklist",
      "export",
      "lists",
      "link",
      "image",
      "charmap",
      "preview",
      "anchor",
      "searchreplace",
      "visualblocks",
      "powerpaste",
      "fullscreen",
      "formatpainter",
      "insertdatetime",
      "media",
      "table",
      "help",
      "wordcount",
    ],
    toolbar:
      "undo redo | formatpainter casechange blocks | bold italic backcolor | " +
      "alignleft aligncenter alignright alignjustify | " +
      "bullist numlist checklist outdent indent | removeformat | a11ycheck code table help",
  });
<?php echo '</script'; ?>
>

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
    <div class="menu-icon">
      <i class="fas fa-bars"></i>
    </div>
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
            id="mytextarea"
            placeholder="Napisz o czym chcesz poinformować fanów..."
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
