<ul class="list-group">	<li class="list-group-item <?php if($this->tpl_var['method'] == 'index'){ ?> active<?php } ?>">		<?php if($this->tpl_var['method'] == 'index'){ ?>首页		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master">首页</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'attachtype'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'attachtype'){ ?>文件类型		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-attachtype">文件类型</a>		<?php } ?>	</li>	<li class="list-group-item <?php if($this->tpl_var['method'] == 'files'){ ?>active<?php } ?>">		<?php if($this->tpl_var['method'] == 'files'){ ?>文件管理		<?php } else { ?>		<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-files">文件管理</a>		<?php } ?>	</li></ul>