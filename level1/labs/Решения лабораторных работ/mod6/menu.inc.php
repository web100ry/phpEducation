<?php
	$menu = array(
		"Номе"=>"index.php?id=home", 
		"Page1"=>"index.php?id=page1", 
		"Page2"=>"index.php?id=page2", 
		"Page3"=>"index.php?id=page3", 
		"Table"=>"index.php?id.php?id=table");

?>	
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
				getMenu($menu);
			?>
		</td>
	</tr>
</table>