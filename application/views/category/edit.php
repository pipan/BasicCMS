<div id="body">
	<div>
	  <?php 
	  echo validation_errors();
	  echo form_open("category/edit/".$category["id"]);
	  ?>
      	<div>
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="<?php echo $category["category_name"];?>">
      </div>
      <div>
        <input type="submit" name="category" value="send">
      </div>
      <div>
        <input type="hidden" name="ID" value="<?php echo $category["id"];?>">
      </div>  
    </form>
	</div>
</div>