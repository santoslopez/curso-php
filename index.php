<?php
    $name = "santos";
    $age = 31 + '1';

    // convierte a booleano
    $convertir = (bool)50;




    // dice el tipo de dato
    echo gettype($name)."\n";
   

    // definir constantes
    define('LOGO','carro.png');
    define('LOGO_2','carro.png');

    // CONSTANTES
    const hola = "pablo";



    $concatenar = "hola flor";
    $concatenar .= ", te adoro.";
    echo "$concatenar";

    var_dump($name);
    var_dump($age);

    // en produccion, quitar display error
    // usar php init, en produccion
    
    $edad2=45;
    $edad1=$edad2>40;

    $edad3=10;

    /*if($edad1){
        echo "eres mayor";
    }else{
        echo "eres joven";
    }*/

    $outputAge = $edad1

    ? 'eres bueno'
    : 'eres malo';

    echo "vengadores $outputAge";

?>
<!-- sintaxis alternativa if -->


<?php if ($edad1) :?>
<h2>carro lll</h2>

<?php elseif ($edad3) :?>
    <h2>flor 1</h2>

<?php else :?>
    <h2>else </h2>

<?php endif; ?>


<h1>
    <?= "<h2>".LOGO."</h2>"?>
</h1>

<style>
    body{
        background: orange;
    }
</style>



<?php
$carrito = 24;

$salidaEdad = match(true){
    $age <2 => "eres un bebe",
    $age <10 => "eres mas niño",
    $age <10 => "eres un adolescente",
    $age ===18 => "eres mayor de edad",
    $age <40 => "eres menor de 40",

    $age <60 => "eres un adulto joven",

    default => 
    "eres adulto"
};

$bestLanguages = ["php","java",1,2,3,4];
$bestLanguages[3]="RELOJ";
$bestLanguages[]="TYPESCRIPT";



echo "el mejor lenguage es $bestLanguages[3]";


// iterar la lista

?>
<h2><?= $salidaEdad ?></h2>

<ul>
<!-- key para el indice -->
    <?php foreach ($bestLanguages as $key => $hola): ?>
        <li><?= $key . " <- clave " .$hola ?></li>
    <?php endforeach; ?>
 
    
</ul>