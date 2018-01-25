<?php
	$menu = array(
		"Номе"=>"index.php", 
		"Page1"=>"page1.php", 
		"Page2"=>"page2.php", 
		"Page3"=>"page3.php", 
		"Table"=>"table.php");

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