<?php
/* Smarty version 4.1.0, created on 2022-04-24 13:29:58
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\artykul2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_626534b617c7a2_75990319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '658e46a2b72171b25d452cb18d248726bccd04b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\artykul2.html',
      1 => 1650799796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626534b617c7a2_75990319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399676401626534b6165b32_91089857', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_399676401626534b6165b32_91089857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_399676401626534b6165b32_91089857',
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
  <div class="artykul1-main">
    <div class="artykul1-content">
      <div class="artykul1-img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/wyniki2022.jpg" />
      </div>
      <div class="artykul1-text">
        <h2>Wyniki sezonu 2022</h2>

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

        <?php if ($_smarty_tpl->tpl_vars['user']->value->username == "admin") {?>
        <div class="dodaj-2022">
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
artykul2" method="post">
            <div class="input-2022">
              <input type="text" placeholder="Grand Prix" name="grandPrix" />
            </div>
            <div class="input-2022">
              <input type="text" placeholder="Zwycięzca" name="zwyciezca" />
            </div>
            <div class="input-2022">
              <input type="text" placeholder="Team" name="team" />
            </div>
            <div class="log-btn">
              <button type="submit">
                <span class="text">Dodaj</span>
              </button>
            </div>
          </form>
        </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
