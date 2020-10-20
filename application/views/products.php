<h1 align="center">Products</h1>
<table align="center" cellpadding="20">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Action</th>
		</tr>
		<?php
		foreach($products as $row){
		echo "<tr>";
		echo"<td> $row->name </td>";
		echo"<td> $row->price /- </td>";
		echo"<td> <a href='edit_products?id=$row->id'>Update</a> </td>";
		echo"<td> <a href='delete_product?id=$row->id'>Delete</a> </td>";
		echo"</tr>";
		}
		?>
	<tr>
		<form method="POST" action="<?php echo BASEURL;?>Dashboard/add_product">
		<td><input type="text" name="name" placeholder="Name"/></td>
		<td><input type="number" name="price" placeholder="Price"/></td>
		<td><button type="submit">Create</button></td>
		</form>
	</tr>
</table>