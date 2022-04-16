<?php
/* Smarty version 4.1.0, created on 2022-04-16 13:27:14
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625aa8123d3de1_49201804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1fb808ecb742847f9728ff58f89339f9421b04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\login.html',
      1 => 1650108433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625aa8123d3de1_49201804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2038652796625aa8123ccd60_96704512', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_2038652796625aa8123ccd60_96704512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2038652796625aa8123ccd60_96704512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="login-container">
  <div class="login-main">
    <div class="logoF1">
      <h1>F1Blog<span>🏎️</span></h1>
    </div>

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
