<?php
/* Smarty version 4.1.0, created on 2022-04-18 11:51:57
  from 'C:\xampp\htdocs\F1Blog-PHP\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625d34bd3f94d2_51483451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1fb808ecb742847f9728ff58f89339f9421b04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\F1Blog-PHP\\app\\views\\login.html',
      1 => 1650275515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625d34bd3f94d2_51483451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1676854274625d34bd3f3cd3_48989948', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content'} */
class Block_1676854274625d34bd3f3cd3_48989948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1676854274625d34bd3f3cd3_48989948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="login-container">
  <div class="login-main">
    <div class="logoF1">
      <h1>F1Blog<span>🏎️</span></h1>
    </div>

    <div class="login-form">
      <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
        <p class="login-text" style="font-size: 2rem; font-weight: 800">
          Logowanie
        </p>
        <div class="input-group">
          <input type="text" placeholder="Nazwa użytkownika" name="username" />
        </div>

        <div class="input-group">
          <input type="password" placeholder="Hasło" name="password" />
        </div>

        <div class="log-btn">
          <button type="submit">
            <span class="text">Zaloguj</span>
          </button>
        </div>
        <p class="login-register-text">
          Nie masz konta?
          <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Zarejestruj się</a>.
        </p>
      </form>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
