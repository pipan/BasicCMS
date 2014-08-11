<?php
class HeaderMenuItem {

	private $text;
	private $link;
	private $clicked;

	public function __construct($text, $link, $clicked = false){
		$this->text = $text;
		$this->link = $link;
		$this->clicked = $clicked;
	}

	public function view(){
		$class = "";
		if ($this->clicked){
			$class = "border-bottom-red";
		}
		?>
		<a href="<?php echo ROOT_DIR.$this->link;?>" class="<?php echo $class;?>"><?php echo $this->text;?></a>
		<?php
	}
}