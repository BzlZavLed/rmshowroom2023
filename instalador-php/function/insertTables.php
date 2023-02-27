<?php 
    function insertTables($namedb)
    {
        $dir3 = $_SERVER['DOCUMENT_ROOT'].'/carpeta sin título/versiones/rmshowroom2023';

      // conexion a la base de datos
      include ($dir3.'/vendor/autoload.php');
      $dotenv = Dotenv\Dotenv::createImmutable($dir3.'/');
      $dotenv->load();
    //variables de conexion
    $usuario  = $_ENV['USERDB'];
    $password = $_ENV['PASSWORD'];
    $servidor =$_ENV['HOST'];


    //insertar tablas
        $filePath   = 'rmshowroom.sql';
         // Connect & select the database
        
         $db = new mysqli($servidor, $usuario, $password, $namedb);
        
            // Temporary variable, used to store current query
            $templine = '';
        
            // Read in entire file
            $lines = file($filePath);
        
            $error = '';
        
            // Loop through each line
            foreach ($lines as $line){
                // Skip it if it's a comment
                if(substr($line, 0, 2) == '--' || $line == ''){
                    continue;
                }
        
                // Add this line to the current segment
                $templine .= $line;
        
                // If it has a semicolon at the end, it's the end of the query
                if (substr(trim($line), -1, 1) == ';'){
                    // Perform the query
                    if(!$db->query($templine)){
                        $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
                    }
        
                    // Reset temp variable to empty
                    $templine = '';
                }
            }
            return !empty($error)?$error:true;
    }
?>