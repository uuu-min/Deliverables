<?php
/* Smarty version 3.1.30, created on 2017-08-04 08:29:58
  from "C:\Users\uuu_min\Desktop\illust-contest.site\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5984308687b4f6_28596892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceac2691d06b874584f7b3d8b58425b7b10cf2a8' => 
    array (
      0 => 'C:\\Users\\uuu_min\\Desktop\\illust-contest.site\\templates\\main.tpl',
      1 => 1501834480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5984308687b4f6_28596892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<div class="container">
    <div class="row">
        <div class="col-sm-2 bg-danger">
            <h1 class="text-center">col-sm-2</h1>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </div><!-- col-sm-4 -->
        <div class="col-sm-10 bg-success">
            <h1 class="text-center">col-sm-10</h1>
        </div><!-- col-sm-8 -->
    </div>
</div>

</body>
</html>
<?php }
}
