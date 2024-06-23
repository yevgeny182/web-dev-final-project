<?php include('header.php'); ?>
<body>

<div class="container">
	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="purchase(client side).php">
		<div class="row" style="margin-bottom: 15px">
			<div class="col-md-4">
				<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
			</div>
			<div class="col-md-2" style="margin-left:-25px;">

				<button type="submit" data-toggle="modal" class="btn btn-success"> <span class="glyphicon glyphicon-ok">	</span> Purchase</button> 
			</div>
		</div>
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th >Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.category_id=product.category_id order by product.category_id asc, prod_name asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['prod_id']; ?>||<?php echo $iterate; ?>" name="prod_id[]" style=""></td>
							<td><?php echo $row['cat_name']; ?></td>
							<td><?php echo $row['prod_name']; ?></td>
							<td><?php echo number_format($row['price'], 2); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
									
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		

	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
<footer>
    <h6>COPYRIGHT milkTEAbar™ © 2021. ALL RIGHTS RESERVED. </h6>
</footer>
</div>

  <script src="app.js"></script>

</body>
</html>					