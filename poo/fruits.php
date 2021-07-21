 <?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo "\napple\n";
echo $apple->get_name();
echo "<br>";
echo "\nbanana\n";
echo $banana->get_name();
echo "\ninstance of\n";
var_dump($apple instanceof Fruit);

?>
