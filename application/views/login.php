<h1>Login</h1>
	<center>
		<?php echo $this->session->flashdata("msg");?>
	</center>
<form action="<?php echo BASEURL;?>index.php/Welcome/checkuser" method="POST" >
<input placeholder="username" name="username" type="text"/>
<input placeholder="password" name="pwd" type="password" />
<button type="submit">Submit</button>
</form>