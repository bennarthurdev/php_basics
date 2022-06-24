<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--DATA TYPES -->
  <!--?php 
    $x = 1090921;//integer
    $y = 10.90921;//Float
    $z = array("Antonio" , "Jose" , "Ricardo");//array
    $t = true;
    $f = false;
    var_dump($x); //returns the data type and value
    ?>-->
    <?php 
    /*PHP OBJECT */
   /* class Car{
        public $color;//$myCar : "black"; 
        public $model; //$myCar: "Volvo";
        public function __construct($color, $model){
            $this -> color = $color; // what means '->'?
            $this -> model = $model; 
        }
        public function message(){
            return "My car is a" . $this -> color. "" . $this -> model . "!" ; 
        }
    }
    $myCar = new Car("black" , "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red" . "Toyota");
    echo $myCar -> message();
    */ 
    $x = null;
    var_dump($x); //out: data type and value
    ?>

</body>
</html>