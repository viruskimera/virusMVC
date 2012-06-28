<?php /* Smarty version Smarty-3.1.8, created on 2012-06-28 15:28:23
         compiled from "/Applications/MAMP/htdocs/virusMVC/application/yourviews/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12498186834fecab4011eaa9-28068329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0465adb0e5f83c245e47edb8a104f471a291a6e0' => 
    array (
      0 => '/Applications/MAMP/htdocs/virusMVC/application/yourviews/template.tpl',
      1 => 1340915302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12498186834fecab4011eaa9-28068329',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fecab40400770_64537375',
  'variables' => 
  array (
    'cssPath' => 0,
    'ctrlPath' => 0,
    'imgPath' => 0,
    'viewsPath' => 0,
    'jsPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fecab40400770_64537375')) {function content_4fecab40400770_64537375($_smarty_tpl) {?><html>
<head>
	<title>Adwords simulation</title>
	<link rel="stylesheet" type="text/css" href= "<?php echo $_smarty_tpl->tpl_vars['cssPath']->value;?>
/cssMain.css">
</head>
<body>

	<div class="main">
		<div class="menus">
			<ul class="ulmenu">
				<li><img data-info="<?php echo $_smarty_tpl->tpl_vars['ctrlPath']->value;?>
/indexController/left" src="<?php echo $_smarty_tpl->tpl_vars['imgPath']->value;?>
/left.png"></li>
				<li><img data-info="<?php echo $_smarty_tpl->tpl_vars['viewsPath']->value;?>
/right.tpl" src="<?php echo $_smarty_tpl->tpl_vars['imgPath']->value;?>
/right.png"></li>
				<li><img src="<?php echo $_smarty_tpl->tpl_vars['imgPath']->value;?>
/statistic.png"></li>
				<li><img src="<?php echo $_smarty_tpl->tpl_vars['imgPath']->value;?>
/user-boss.png"></li>
				<li><img src="<?php echo $_smarty_tpl->tpl_vars['imgPath']->value;?>
/notepad.png"></li>
			</ul>
		</div>
		</br>

		<div id="content">

		</div>
		</br>

		<div class="footer"> rights reserved.</div>
	</div>


<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jsPath']->value;?>
/jsMain.js"></script>
</body>
</html>


<?php }} ?>