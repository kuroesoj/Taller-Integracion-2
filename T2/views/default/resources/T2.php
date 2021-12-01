<?php

echo elgg_view_page('T2', [
    'title' => 'Investigacion',
    'content' =>'
    <head>
            
    <link rel="stylesheet" type="text/css" href="mod/T2/views/default/resources/css/prueba.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    </head>
    <body>
    
        
        <div>
            
        </div>
        <div class="contenedor_body">
            <div class="contenido">
                <a name="Introduccion"></a>
                <div class="Introduccion" id="Introduccion" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Objetivos" class="btn btn-primary float-left">Siguiente</a>
                    <p>HOLA SOY INTRODUCCION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Objetivos"></a>
                <div class="Objetivos " id="Objetivos" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Metodologia" class="btn btn-primary ">Siguiente</a>
                    <p>HOLA SOY OBJETIVO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Metodologia"></a>
                <div class="Metodologia" id="Metodologia" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Etica" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY METODO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Etica"></a>
                <div class="Etica" id="Etica" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Resultados" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY ETICA</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                    <a name="Resultados"></a>
                <div class="Resultados" id="Resultados" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Discusion" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY RESULTADO</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                    <a name="Discusion"></a>
                <div class="Discusion" id="Discusion" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Conclusion" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY DISCUSION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Conclusion"></a>
                <div class="Conclusion" id="Conclusion" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <a href="#Final" class="btn btn-primary">Siguiente</a>
                    <p>HOLA SOY CONCLUSION</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
                <a name="Final"></a>
                <div class="Final" id="Final" ondrop="drop(event)" ondragover="allowDrop(event)">
                    <p>HOLA SOY FINAL</p>
                    <P>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique incidunt dolorem tempora dicta excepturi voluptate, eum debitis porro quasi nemo, possimus temporibus odio ipsa nulla voluptatibus alias deserunt molestiae exercitationem.</P>
                </div>
        
        
            </div>
    
    
        </div>


    </body>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function allowDrop(ev) {
          ev.preventDefault();
        }
        
        function drag(ev) {
          ev.dataTransfer.setData("text", ev.target.id);
        }
        
        function drop(ev) {
          ev.preventDefault();
          var data = ev.dataTransfer.getData("text");
          ev.target.appendChild(document.getElementById(data));
        }
    </script>
    
    ',
    'sidebar' => true,
    'sidebar' => '

    <div id="opciones" class="contenedor_sidebar">
    
      <div id="accordion">

        <div class="card">
          <div class="card-header" id="headinguno">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse"
                data-target="#collapseuno" aria-expanded="true"
                aria-controls="collapseuno">
                Introduccion
              </button>
            </h5>
          </div>
          <div id="collapseuno" class="collapse show" aria-labelledby="headinguno"
            data-parent="#accordion" ondrop="drop(event)"
            ondragover="allowDrop(event)">
            <div class="card-body" id="d1-headinguno">
              <div draggable="true" ondragstart="drag(event)" id="drag-uno-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
              </div>
            </div>
            <div class="card-body" id="d2-headinguno">
              <div draggable="true" ondragstart="drag(event)" id="drag-uno-2">
              <h3>Opcion 2: lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
              </div>
            </div>
            <div class="card-body" id="d3-headinguno">
              <div draggable="true" ondragstart="drag(event)" id="drag-uno-3">
              <h3>Opcion 3: lorem ipsum</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingdos">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapsedos" aria-expanded="false"
                  aria-controls="collapsedos">
                  Objetivos
                </button>
              </h5>
            </div>
            <div id="collapsedos" class="collapse" aria-labelledby="headingdos"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingdos">
                <div draggable="true" ondragstart="drag(event)" id="drag-dos-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingdos">
                <div draggable="true" ondragstart="drag(event)" id="drag-dos-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingdos">
                <div draggable="true" ondragstart="drag(event)" id="drag-dos-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingtres">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapsetres" aria-expanded="false"
                  aria-controls="collapsetres">
                  Metodologia
                </button>
              </h5>
            </div>
            <div id="collapsetres" class="collapse" aria-labelledby="headingtres"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingtres">
                <div draggable="true" ondragstart="drag(event)" id="drag-tres-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingtres">
                <div draggable="true" ondragstart="drag(event)" id="drag-tres-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingtres">
                <div draggable="true" ondragstart="drag(event)" id="drag-tres-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingcuatro">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapsecuatro" aria-expanded="false"
                  aria-controls="collapsecuatro">
                  etica
                </button>
              </h5>
            </div>
            <div id="collapsecuatro" class="collapse"
              aria-labelledby="headingcuatro"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingcuatro">
                <div draggable="true" ondragstart="drag(event)" id="drag-cuatro-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingcuatro">
                <div draggable="true" ondragstart="drag(event)" id="drag-cuatro-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingcuatro">
                <div draggable="true" ondragstart="drag(event)" id="drag-cuatro-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingcinco">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapsecinco" aria-expanded="false"
                  aria-controls="collapsecinco">
                  resultados
                </button>
              </h5>
            </div>
            <div id="collapsecinco" class="collapse" aria-labelledby="headingcinco"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingcinco">
                <div draggable="true" ondragstart="drag(event)" id="drag-cinco-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingcinco">
                <div draggable="true" ondragstart="drag(event)" id="drag-cinco-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingcinco">
                <div draggable="true" ondragstart="drag(event)" id="drag-cinco-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingseis">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseseis" aria-expanded="false"
                  aria-controls="collapseseis">
                  discusion
                </button>
              </h5>
            </div>
            <div id="collapseseis" class="collapse" aria-labelledby="headingseis"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingseis">
                <div draggable="true" ondragstart="drag(event)" id="drag-seis-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingseis">
                <div draggable="true" ondragstart="drag(event)" id="drag-seis-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingseis">
                <div draggable="true" ondragstart="drag(event)" id="drag-seis-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingsiete">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapsesiete" aria-expanded="false"
                  aria-controls="collapsesiete">
                  conclusion
                </button>
              </h5>
            </div>
            <div id="collapsesiete" class="collapse" aria-labelledby="headingsiete"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingsiete">
                <div draggable="true" ondragstart="drag(event)" id="drag-siete-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingsiete">
                <div draggable="true" ondragstart="drag(event)" id="drag-siete-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingsiete">
                <div draggable="true" ondragstart="drag(event)" id="drag-siete-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingocho">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse"
                  data-target="#collapseocho" aria-expanded="false"
                  aria-controls="collapseocho">
                  final
                </button>
              </h5>
            </div>
            <div id="collapseocho" class="collapse" aria-labelledby="headingocho"
              data-parent="#accordion" ondrop="drop(event)"
              ondragover="allowDrop(event)">
              <div class="card-body" id="d1-headingocho">
                <div draggable="true" ondragstart="drag(event)" id="drag-ocho-1">
                <h3>Opcion 1: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d2-headingocho">
                <div draggable="true" ondragstart="drag(event)" id="drag-ocho-2">
                <h3>Opcion 2: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
              <div class="card-body" id="d3-headingocho">
                <div draggable="true" ondragstart="drag(event)" id="drag-ocho-3">
                <h3>Opcion 3: lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aut reprehenderit repellat exercitationem explicabo! Numquam, minima. Tempore minima perspiciatis ullam architecto consequatur perferendis doloribus laudantium quae, quis illo pariatur exercitationem!</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    



    
    
    </div>



    ',

    'sidebar_alt' => true,
    'sidebar_alt' => '
    <div class="contenedor_sidebar_alt" id="Menu1">
        <div class="referencias">
            <h3>  </h3>
            <ul  id="Menu2">
                <li><a href="#Introduccion">Introduccion </a></li>
                <li><a href="#Objetivos">Objetivos </a></li>
                <li><a href="#Metodologia">Metodologia</a></li>
                <li><a href="#Etica">Etica </a></li>
                <li><a href="#Resultados">Resultados </a></li>
                <li><a href="#Discusion">Discusion </a></li>
                <li><a href="#Conclusion">Conclusion </a></li>
                <li><a href="#Final">Final </a></li>
            </ul>
        </div>   
    </div> 
        
    
    ',
    
]);