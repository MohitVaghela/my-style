<div class="categories">
	<h3>Categories</h3>
	<ul class="tree-list-pad">

		<?php
			include ("conn.php");
			$result = mysql_query("select *from category" ,$link);
			$row = mysql_fetch_row($result);
			while($row)
			{
		?>

		<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span><?php echo $row[1]; ?></label>
			<ul>
				<?php
					
					$result2 = mysql_query("select *from sub_cat where cat_id=$row[0]" ,$link);
					$row2 = mysql_fetch_row($result2);
					while($row2)
					{
				?>				
				<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><?php echo $row2[2]; ?></label>
				</li>

				<?php
						$row2 = mysql_fetch_row($result2);
					}
				?>

				
			</ul>
		</li>

		<?php
			$row = mysql_fetch_row($result);
			}
		?>
	</ul>
</div>