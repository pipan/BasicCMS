<div id="body">
	<div>
		<?php 
		echo validation_errors();
		echo form_open("category/new_category");
		?>
      	<div>
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="">
      </div>
      <div>
        <input type="submit" name="category" value="send">
      </div>
      <div>
        <input type="hidden" name="ID" value="new">
      </div>  
    </form>
	</div>
</div>