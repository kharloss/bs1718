<?php
echo validation_errors();
echo "<table border=1 align=center width=50%)";
echo "<tr><td colspan=4 align=center>Entered Bill</td></tr>";
echo "<tr>";
foreach ($header as $k):
echo "<td>$k</td>";
endforeach;
echo "</tr><tr>";
foreach ($list as $list1):
	foreach ($list1 as $k=>$v):
	if ($k=='id'):
	continue;
	endif;
	echo "<td>".$v."</td>";
	endforeach;
	if (!empty($list)):
	echo "<td><a href=edit/".$list1['id'].">Edit</a></td>";
	echo "<td><a href=delete/".$list1['id'].">Delete</a></td>";
	endif;
	echo "</tr><tr>";
endforeach;
echo "</tr>";
echo "<tr><td colspan=2><a href=".site_url('Temp_details/add').">Add Item</a></td><td colspan=2><a href=".site_url('My_Summary/add').">Complete Bill</a></td></tr></table>";
?>

