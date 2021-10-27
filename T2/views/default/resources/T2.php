<?php

echo elgg_view_page('T2', [
    'title' => 'Investigacion',
    'content' =>'
        <head>
            
            <link rel="stylesheet" type="text/css" href="mod/T2/views/default/resources/css/prueba.css">
            
        
        </head>
        <div class="elgg-layout-content clearfix">
            <H1>Mucho Gusto señal de prueba</H1>
            
            <div class="elgg-col elgg-col-1of2 custom-index-col1">
                <h1>HOLAASDAS</h1>
                <article>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam, reprehenderit eos a recusandae pariatur temporibus quas in alias consequatur, fuga, deleniti obcaecati quo voluptatibus quod laboriosam totam! Libero, quidem reprehenderit.
                
                </article>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="mod/T2/views/default/resources/js/prueba.js"></script>
        
        

        
    ',
    'sidebar' => true,
    'sidebar' => '
        <div class="contenedor-lista">
            <div class="lista" id="lista">
                <!-- opcion #1 -->
                <div class="lista">
                    <div class="nombre">
                        <p class="dato"> 24</p>
                    </div>
                </div>
                <!-- lista #2 -->
                <div class="lista">
                    <div class="nombre">
                        <p class="dato"> 24</p>
                    </div>                
                </div>
                <!-- lista #3 -->
                <div class="lista">
                    <div class="nombre">
                        <p class="dato"> 24</p>
                    </div>
                </div>
            </div>
        </div>  

    ',

    'sidebar_alt' => true,
    'sidebar_alt' => '
        <div>
            <h1>hola0</h1>
        </div>  
        
    
    ',
    
]);