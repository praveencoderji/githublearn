
<?php include('header.php'); ?>
  <div class="container mt-4">
    <div class="table">
    	<table>
    		<thead>
    			<tr>
    				<th>ID</th>
    				<th>Article Title</th>
    				<th>Edit</th>
    				<th>Delete</th>
    			</tr>

    		</thead>
    		<tbody>
    			<?php if(count($article)): ?>
    			<?php foreach($article as $art):?>
    			<tr>
    				<td><?php echo $art->id; ?></td>
    				<td><?php echo $art->article_title; ?></td>
    				<td><a href="#" class="btn btn-primary">Edit</td>
    				<td><a href="#" class="btn btn-danger">Delete</td>
    			</tr>
    		<?php endforeach; ?>
    	
    	<?php else:  ?>
    		<tr>
    			<td colspan="3">No data </td>
    		</tr>
    		<?php endif;  ?>
    		</tbody>

    	</table>
</div>
<?php include('footer.php'); ?>