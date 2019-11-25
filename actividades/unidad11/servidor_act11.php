<h1>Variables recibidas</h1>

<?php
        // Pintamos el elemento de formulario con name = provincia
        if(isset($_GET['provincia'])) {
                $provincia=$_GET["provincia"];
                echo "'<strong>provincia</strong>':$provincia<br/>";
        }

        // Pintamos el elemento de formulario con name = dia_nac
        if(isset($_GET['dia_nac'])) {
                $diaNacimiento=$_GET["dia_nac"];
                echo "'<strong>dia_nac</strong>':$diaNacimiento<br/>";
        }

        // Pintamos el elemento de formulario con name = mes_nac
        if(isset($_GET['mes_nac'])) {
                $mesNacimiento=$_GET["mes_nac"];
                echo "'<strong>mes_nac</strong>':$mesNacimiento<br/>";
        }

        // Pintamos el elemento de formulario con name = anyo_nac
        if(isset($_GET['anyo_nac'])) {
                $anyoNacimiento=$_GET["anyo_nac"];
                echo "'<strong>anyo_nac</strong>':$anyoNacimiento<br/>";
        }

        // Pintamos el elemento de formulario con name = temas[]
        if(isset($_GET['temas'])) {
              echo "<strong>temas</strong>:<br/>";
              foreach ($_GET['temas'] as $selectedOption){
                        echo $selectedOption."<br/>";  
              }                        
        }
?>