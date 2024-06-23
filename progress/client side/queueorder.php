<?php include('header.php'); ?>
<body>

<div class="container">
	<h1 class="page-header text-center">QUEUED ORDERS</h1>
	<table class="table table-striped table-bordered">

					
		<thead>
			<th> <center> Customer Order: </center> </th>
			<th> <center> Full Details</center></th>


			
		</thead>
		<tbody>

			<?php 
				$sql="select * from purchase order by purchaseid desc";
				
				$query = $conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						
						<td>

							<?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						
						<td>
									
							

            <div class="modal-body">
                <div class="container-fluid">
                    
                        <span class="pull-right">
                           
                        </span>
                    </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
							<th>Customer Name </th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Purchase Quantity</th>
                            <th>Subtotal</th>

                        </thead>
                        <tbody>
                            <?php
                                $sql="select * from purchase_detail left join product on product.prod_id=purchase_detail.prod_id where purchaseid='".$row['purchaseid']."'";
                                $dquery=$conn->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
									
                                    <tr>
										<td> <?php echo $row['customer']; ?> </td>
                                        <td><?php echo $drow['prod_name']; ?></td>
                                        <td class="text-right">&#8369; <?php echo number_format($drow['price'], 2); ?></td>
                                        <td><?php echo $drow['quantity']; ?></td>
                                        <td class="text-right">&#8369;
                                            <?php
                                                $subt = $drow['price']*$drow['quantity'];
                                                echo number_format($subt, 2);
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                            <tr>
                                <td colspan="4" class="text-right"><b>TOTAL</b></td>
                                <td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
			</div>
							<?php include('sales_modal.php'); ?>		
						</td>


					</tr>


					<?php
				}
			?>
		</tbody>
	</table>
	Order Again?
	<a href="order(client side).php" data-toggle="modal" class="btn btn-success btn-sm">
	<span class="glyphicon glyphicon-ok">	</span> Ok </a>


	
</div>

<?php include('modal.php'); ?>
<footer>
    <h6>COPYRIGHT milkTEAbar™ © 2021. ALL RIGHTS RESERVED. </h6>
</footer>
  <script src="js/app.js"></script>

</body>
</html>