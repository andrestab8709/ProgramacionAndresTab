<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo</title>
    </head>
    <body>
        <h1>
            
           
        <?php
        //Esto es un comando
        $Primeravariable = "2";
          echo $Primeravariable."<br>";
         $SegundaVariable = "7"; 
         $Lenguaje = "javascrip";
         echo $SegundaVariable * $Primeravariable;
                 
        if($Primeravariable == 2 && $SegundaVariable== 7){
            echo 'Soy mayor';
        }   
        else{
            echo "soy menor";
        }
        switch ($Lenguaje){
            
            case "php":
            echo "php";
               break;
            case "javascrip":
                echo "javascrip";
                break;
            case "html":
                echo "html";
                break;
               
        }
        
        $Arreglo = [2,"hol",6];
        echo $Arreglo[2];
        
        //otra manera de hacer el arreglo
        
        
      
                 
        // put your code here El Punto concatena, el mas Suma, php identifica tipo de variable
        ?>
            <h1>
                <pre>
                    <?php
                            print_r($Arreglo);

            ?>
                </pre>
                
                
            </h1>
             <h1>
                <pre>
                    <?php
                            var_dump($Arreglo);
            echo "<br>";
                 $Arreglo[] = "python" ; 
                 var_dump($Arreglo);
            ?>
                      <?php
              $usuario = array("nombre" => "juan",
                   "apellido"=>"zabala","cedula"=>42651);
                 echo "<h1".$usuario["nombre"]."</h1>";         
            ?>

                </pre>
                
                
            </h1>    
            
        </h1>
        <p>
        <h2>
              <?php
              echo "esta es otra seccion";
              
             ?>
        </h2>
            
        </p>
    </body>
</html>
