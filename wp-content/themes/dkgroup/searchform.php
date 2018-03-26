<form action="<?php echo home_url(); ?>" id="search-form" method="get">

	<i class="fas fa-search"></i>
	<input name="s" id="s" type="text" value="search" onblur="if(this.value=='')this.value='search'" onfocus="if(this.value='search')this.value=''">
	<input type="hidden" value="submit">

</form>