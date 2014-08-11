<?php 
$menu_item = array(
	new HeaderMenuItem('Tournament', 'index.php/tournament', $menu_item_clicked == 1),
	new HeaderMenuItem('Category', 'index.php/category', $menu_item_clicked == 2),
	new HeaderMenuItem('Team', 'index.php/team', $menu_item_clicked == 3),
	new HeaderMenuItem('Player', 'index.php/player', $menu_item_clicked == 4),
	new HeaderMenuItem('Stats', 'index.php/stats', $menu_item_clicked == 5),
);
?>
<!doctype>
<html>
<head>
  <link type = "text/css" rel = "stylesheet" href = "<?php echo asset_url();?>/style/style.css"/>
  <script type="text/javascript" src="<?php echo asset_url();?>jscript/jscript_general.js"></script>
  <link rel="shortcut icon" href="<?php echo asset_url();?>images/icon.ico" type="image/x-icon" />
	<title>Radhost - <?php echo $title;?></title>
</head>
<body>
	<div id="main">
		<div id="header">
		    <div id="header-title">
		      <a href="<?php echo ROOT_DIR;?>">
		      <div>
		        <div id="header-title-logo">
		          <img src="<?php echo asset_url();?>images/logo3.png">
		        </div>
		        <div id="header-title-name">
		          Radhost
		        </div>
		      </div>
		      </a>
		    </div>
		    <div id="header-menu">
		    <?php 
		    foreach ($menu_item as $item){
				$item->view();
			}
		    ?>
		    </div>
  		</div>