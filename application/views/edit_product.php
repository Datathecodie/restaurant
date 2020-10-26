<h1>Edit Contact</h1>
<form action="<?php echo BASEURL;?>Dashboard/update_product" method="POST">
<div>
	<input type="text" placeholder="name" name="pname" value="<?php echo $details->name;?>"/>
</div>
<div>
	<input type="text" placeholder="price" name="pprice" value="<?php echo $details->price;?>"/>
</div>
<div>
	<input type="text" placeholder="type" name="type" value="<?php echo $details->type;?>"/>
</div>
<div>
	<input type="text" placeholder="category" name="category" value="<?php echo $details->category;?>"/>
</div>
<input type="hidden" name="productid"  value="<?php echo $details->id;?>">
<div>
	<button type="submit">Update</button>
	<a href="<?php echo BASEURL;?>Dashboard/products">Back</a>
</div>
</form>