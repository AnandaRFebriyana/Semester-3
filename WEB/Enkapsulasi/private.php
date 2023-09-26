<?php 
class Person {
    private $name; 

    function set_name($new_name) { 
        $this->name = $new_name; 
    }

    function get_name() {
        return $this->name;
    }
} 

$person1 = new Person();
// Properti harus diatur melalui metode set_name()
$person1->set_name('Ananda Rizky Febriyana');

// Metode get_name() digunakan untuk mengambil nilai properti
echo "Hai " . $person1->get_name();
echo "<hr>";
?>
