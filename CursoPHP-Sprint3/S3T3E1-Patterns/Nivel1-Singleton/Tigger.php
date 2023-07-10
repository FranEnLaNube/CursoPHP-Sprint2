<?php 
class Tigger {
    private static $instance;
    private $roarCounter;

    private function __construct() {
        echo "Building character..." . "<br>";
        $this->roarCounter = 0;
    }
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function roar () {
        echo "Grrr!" . PHP_EOL;
        ++$this->roarCounter;
    }
    public function getCounter() {
        return $this->roarCounter;
    }
}
?>