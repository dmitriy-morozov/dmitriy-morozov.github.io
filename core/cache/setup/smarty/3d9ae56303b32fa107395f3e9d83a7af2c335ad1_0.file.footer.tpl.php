<?php /* Smarty version 3.1.27, created on 2016-12-01 23:20:47
         compiled from "D:\OpenServer\domains\localhost\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:244585840861f4aaec5_43044761%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d9ae56303b32fa107395f3e9d83a7af2c335ad1' => 
    array (
      0 => 'D:\\OpenServer\\domains\\localhost\\setup\\templates\\footer.tpl',
      1 => 1479299282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244585840861f4aaec5_43044761',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5840861f4e96c9_57397071',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5840861f4e96c9_57397071')) {
function content_5840861f4e96c9_57397071 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/OpenServer/domains/localhost/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '244585840861f4aaec5_43044761';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>