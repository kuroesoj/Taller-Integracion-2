<link rel="stylesheet" type="text/css" href="estilo.css">
<?php
	require 'adduser.php';
?>

<?php
	require "connect_data.php";
?>
<p>
<?php
    require_once("connect_data.php");

    if ($users->count()>0)
    {
        $datos = $users->find();
        ?>
        <table border=1>
        <?php
        foreach ($datos as $dato) {
?>      <tr>
                        <td><p><label>ID: </label><?php echo $dato["_id"]; ?></p></td>
                        <td><p><label>Usuario: </label><?php echo $dato["username"]; ?></p></td>
                        <td><p><label>Contraseña: </label><?php echo $dato["password"]; ?></p></td>
                        <td><a class="edit" href="edituserprueba.php?id=<?php echo $dato["_id"];?>">Editar</a></td>
                        <td><a class="extbt" href="deluser.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
        </tr>
                 <?php
         }//foreach
                 ?>
                 </table>
                 <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>
</p>
<?php
$usuario= $_POST["user"];
echo elgg_view_page('T2', [
    'title' => 'Investigacion',
    'content' =>'
    <head>
            
    <link rel="stylesheet" type="text/css" href="mod/T2/views/default/resources/css/prueba.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <div class="contenedor_body">
            <div class="contenido">
                <a name="Introduccion"></a>
                <div class="Introduccion">
                    <a href="#Objetivos" class="btn btn-primary float-left">Siguiente</a>
                    <p>HOLA SOY INTRODUCCION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Objetivos"></a>
                <div class="Objetivos ">
                    <a href="#Metodologia" class="btn btn-primary ">Siguiente</a>
                    <p>HOLA SOY OBJETIVO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Metodologia"></a>
                <div class="Metodologia">
                    <a href="#Etica" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY METODO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Etica"></a>
                <div class="Etica">
                    <a href="#Resultados" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY ETICA</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                    <a name="Resultados"></a>
                <div class="Resultados">
                    <a href="#discusion" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY RESULTADO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                    <a name="Discusion"></a>
                <div class="Discusion">
                    <a href="#Conclusion" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY DISCUSION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Conclusion"></a>
                <div class="Conclusion">
                    <a href="#Final" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY CONCLUSION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Final"></a>
                <div class="Final">
                    <p>HOLA SOY FINAL</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
        
        
            </div>
    
    
        </div>
		
    </body>
        
        
    ',
    'sidebar' => true,
    'sidebar' => '
    <div class="contenedor_sidebar">
    <div class="opciones">
        <h2>Configuraciones</h2>
        <p>Arrastra lo que desees</p>
        <h3>Diseño</h3>
        <select name=diseno">
            <option disabled selected> Diseños</option>
            <option>opcion 1 </option>
            <option>opcion 2 </option>
            <option>opcion 3 </option>
        
        </select>
        <h3>Poblacion</h3>
        <select name=Poblacion">
            <option disabled selected> Poblacion</option>
            <option>opcion 1 </option>
            <option>opcion 2 </option>
            <option>opcion 3 </option>
        
        </select>
        <h3>Criterios</h3>
        <select name=Criterios">
            <option disabled selected> Criterios</option>
            <option>opcion 1 </option>
            <option>opcion 2 </option>
            <option>opcion 3 </option>
        
        </select>
    </div>

</div>
    ',

    'sidebar_alt' => true,
    'sidebar_alt' => '
    <div class="contenedor_sidebar_alt">
        <div class="referencias">
            <ul>
              <li><a href="#Introduccion">Introduccion </a></li>
              <li></li><a href="#Objetivos">Objetivos </a></li>
              <li></li><a href="#Metodologia">Metodologia</a></li>
              <li></li><a href="#Etica">Etica </a></li>
              <li></li><a href="#Resultados">Resultados </a></li>
              <li></li><a href="#Discusion">Discusion </a></li>
              <li></li><a href="#Conclusion">Conclusion </a></li>
              <li></li><a href="#Final">Final </a>
          </ul>
<?php
require "adduser.php";
?>

<p>
    <?php
    require_once("connect_data.php");

    if ($users->count()>0)
    {
        $datos = $users->find();
        ?>
        <table border=1>
        
        foreach ($datos as $dato) {
     <tr>
                        <td><p><label>ID: </label><?php  $usuario ?> </p></td>
                        <td><p><label>Usuario: </label><?php echo $dato["username"]; ?></p></td>
                        <td><p><label>Contraseña: </label><?php echo $dato["password"]; ?></p></td>
                        <td><a class="edit" href="edituserprueba.php?id=<?php echo $dato["_id"];?>">Editar</a></td>
                        <td><a class="extbt" href="deluser.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
        </tr>
                 <?php
         }//foreach
                 ?>
                 </table>
                 <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>
	

</p>
        </div>   
    </div> 
        
    
    ',
    
]);