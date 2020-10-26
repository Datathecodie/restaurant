<h1 align="center">Products</h1>
<table align="center" cellpadding="20">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>Type</th>
		<th>Category</th>
		<th>Action</th>
		</tr>
		<?php
		foreach($products as $row){
		echo "<tr>";
		echo"<td> $row->name </td>";
		echo"<td> $row->price /- </td>";
		echo"<td> $row->type </td>";
		echo"<td> $row->category </td>";
		echo"<td> <a href='edit_products?id=$row->id'>Update</a> </td>";
		echo"<td> <a href='delete_product?id=$row->id'>Delete</a> </td>";
		echo"</tr>";
		}
		?>
	<tr>
		<form method="POST" action="<?php echo BASEURL;?>Dashboard/add_product">
		<tr>
		<th>Create Product</th>
		<td><input type="text" name="name" placeholder="Name"/></td>
		<td><input type="number" name="price" placeholder="Price"/></td>
		<td><input type="radio" name="type" value="veg" />Veg
			<input type="radio" name="type" value="nonveg" />Non-Veg</td>
		<td><select type="text" name="category" >
		<option value=''>--Choose Category--</option>
		<?php
		foreach($category as $row){
			echo "<option value='$row->cat_name'>$row->cat_name</option>";
		}
		/* <option value="soup">Soups</option>
		<option value="starter">Starters</option>
		<option value="maincourse">Main Course</option>
		<option value="rice&noodles">Rice and Noodles</option>
		<option value="accompaniment">Accompaniments</option>
		<option value="dessert">Desserts</option> */
		?>
		</select>
		</td>
		<td><button type="submit">Create Product</button></td>
		</tr>
		</form>
		
		<form action="<?php echo BASEURL;?>Dashboard/add_category" method="POST">
			<tr>
			<th>Create Category</th>
			<td><input type="text" placeholder="category name" name="category" /></td>
			<td><button type="submit">Create Category</button></td>
			</tr>
		</form>
	</tr>
</table>