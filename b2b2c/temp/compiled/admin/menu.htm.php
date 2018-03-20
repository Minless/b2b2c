<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="pic/98ecs.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="pic/jquery1.42.min.js"></script>
<script type="text/javascript" src="pic/jquery.SuperSlide.2.1.1.js"></script>
  
</head>
<body  style=" background:url(pic/lbg.jpg) left repeat-y;">


<div class="leftmenu">
<div class="hd"><ul> 
<?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
        $this->_foreach['foo']['iteration']++;
?> 
<li><img src="pic/<?php echo $this->_var['k']; ?>.png"><?php echo $this->_var['menu']['label']; ?></li><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></ul></div>
<div class="bd">
<?php $_from = $this->_var['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'menu');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['menu']):
        $this->_foreach['foo']['iteration']++;
?>
<ul>
<?php $_from = $this->_var['menu']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
<li><a href="<?php echo $this->_var['child']['action']; ?>" target="main_frame"><?php echo $this->_var['child']['label']; ?></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
</div>

<script type="text/javascript">
jQuery(".leftmenu").slide({effect:"leftLoop",trigger:"click",easing:"easeInBack"});
</script>

<script type="text/javascript">
 $(".bd a").click(function(){
		$(".bd a.thiss").removeClass("thiss")
		$(this).addClass("thiss");
	}); 
</script>


 
</body>
</html>
