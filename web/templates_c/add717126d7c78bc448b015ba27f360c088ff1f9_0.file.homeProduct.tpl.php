<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-27 20:09:03
  from '/var/www/views/homeProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f987e5fe8a748_09893918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add717126d7c78bc448b015ba27f360c088ff1f9' => 
    array (
      0 => '/var/www/views/homeProduct.tpl',
      1 => 1603829343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f987e5fe8a748_09893918 (Smarty_Internal_Template $_smarty_tpl) {
?><div>


    <h1><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
 : <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>

    <div><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>

    <div><h2>Prix : <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 €</h2></div>

    <form method="post">
            
        <input type="hidden" name="value" value=1 >
        <input type="hidden" name="productId" value=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
 >
        <input type="submit" id="submit" name="addToCartButton" value="+ Ajouter au panier">
             
    </form>
</div><?php }
}
