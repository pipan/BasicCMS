<div id="body">
	<div>
	    <table>
	    <?php
	    foreach ($category as $c){
	    	?>
			<tr>
				<td><?php echo $c['category_name'];?></td>
				<td><a href="<?php echo ROOT_DIR;?>index.php/category/edit/<?php echo $c['id'];?>">edit</a></td>
			</tr>
			<?php
		}
		?>
		</table>
		<div id="options">
			<a href="<?php echo ROOT_DIR;?>index.php/category/new_category">new category</a>
		</div>
	</div>
</div>