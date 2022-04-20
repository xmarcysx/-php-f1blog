<?php
/* Smarty version 4.1.0, created on 2022-04-20 22:40:20
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\artykul1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62606fb4523913_83263826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b917d3b7fb29fdb8257fa248e0a00f6120d32ae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\artykul1.html',
      1 => 1650487218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62606fb4523913_83263826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21265246662606fb45139f1_69517569', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_21265246662606fb45139f1_69517569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21265246662606fb45139f1_69517569',
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
  <div class="artykul1-main">
    <div class="artykul1-content">
      <div class="artykul1-img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/2021Max.jpg" />
      </div>
      <div class="artykul1-text">
        <h2>Mistrz świata 2021 - Max Vestappen</h2>

        <div class="baza2021">
          <table>
            <tr>
              <td>
                <b> Grand Prix</b>
              </td>
              <td>
                <b>Zwycięzca</b>
              </td>
              <td>
                <b>Team</b>
              </td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["grandPrix"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["zwyciezca"];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["team"];?>
</td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </table>
        </div>

        <div class="artykul1-p">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil modi
            nostrum aspernatur, sunt, deserunt maxime fugiat doloribus sapiente
            soluta dignissimos eveniet dolor itaque perspiciatis hic aut
            veritatis qui vel. Voluptate.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
