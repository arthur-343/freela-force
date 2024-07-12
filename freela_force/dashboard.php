<?php
      include("./crud/config.php");
      include("./crud/firebaseRDB.php");

      $db = new firebaseRDB($databaseURL);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Freela-Force</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<style>
      .cardstext {
        margin-inline: auto;
        width: 70%;
        max-width: 1800px;
      }

      #textresults {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        margin-bottom: 30px;
        color: var(--default-text-color);
        display: flex;
        justify-content: space-between;
      }

      #proposals {
        width: 70%;
        max-width: 1800px;
        margin-inline: auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
      }

      .proposal {
        padding: 10px;
        text-align: left;
        overflow: hidden;
        text-overflow: ellipsis; 
      }

      .proposal img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
      }

      .proposal h3,
      .proposal p {
        margin: 10px 0;
      }

      .proposal a {
        display: inline-block;
        margin-right: 10px;
      }
    </style>

<body>
      <header>
        <div class="header-content">
            <span class="logo">
                Freela<span style="color: var(--default-green); font-size: 3rem">.</span>
            </span>

            <span class="profile" style="margin-left: auto;">Profile</span>

            <div class="wrapper">
              <div id="DropDown" class="hidden dropdown">
                <ul>
                  <li>
                    Tornece um prestador
                  </li>
                  <li style="color: #ef476f; border-bottom: none">
                    Logout
                  </li>
                </ul>
              </div>  
            </div>
            
          </div>
            
        </div>
      </header>

      <section id="banner">
        <div class="banner">
            <h1>
                Encontre o <span style="color: var(--default-green)">serviço de freelance</span> que você precisa agora mesmo
            </h1>
            <input class="" type="text" name="search" placeholder="Pesquise pro qualquer serviço">
        </div>
      </section>

      <h1 class="cardstext">
        Os mais procurados
      </h1>

      <section id="cards">
          <div class="card" style="background-color: var(--default-red);">
          <div class="white-svg">
            <svg viewBox="0 0 96 96" xmlns="http://www.w3.org/2000/svg"><title/><g><path d="M24.8452,25.3957a6.0129,6.0129,0,0,0-8.4487.7617L1.3974,44.1563a5.9844,5.9844,0,0,0,0,7.687L16.3965,69.8422a5.9983,5.9983,0,1,0,9.21-7.687L13.8068,48l11.8-14.1554A6,6,0,0,0,24.8452,25.3957Z"/><path d="M55.1714,12.1192A6.0558,6.0558,0,0,0,48.1172,16.83L36.1179,76.8262A5.9847,5.9847,0,0,0,40.8286,83.88a5.7059,5.7059,0,0,0,1.1835.1172A5.9949,5.9949,0,0,0,47.8828,79.17L59.8821,19.1735A5.9848,5.9848,0,0,0,55.1714,12.1192Z"/><path d="M94.6026,44.1563,79.6035,26.1574a5.9983,5.9983,0,1,0-9.21,7.687L82.1932,48l-11.8,14.1554a5.9983,5.9983,0,1,0,9.21,7.687L94.6026,51.8433A5.9844,5.9844,0,0,0,94.6026,44.1563Z"/></g></svg>
          </div>
          
            <h2>
              Programação
            </h2>
          </div>
          <div class="card" style="background-color: var(--default-yellow);">
          <div class="white-svg">
            <!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 48 48" height="48px" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Expanded"><g><g><path d="M44,48H4c-2.206,0-4-1.794-4-4V14c0-2.206,1.794-4,4-4h20c0.552,0,1,0.448,1,1s-0.448,1-1,1H4c-1.103,0-2,0.897-2,2v30     c0,1.103,0.897,2,2,2h40c1.103,0,2-0.897,2-2V14c0-1.103-0.897-2-2-2c-0.552,0-1-0.448-1-1s0.448-1,1-1c2.206,0,4,1.794,4,4v30     C48,46.206,46.206,48,44,48z"/></g><g><path d="M44,44H10V14h10c0.552,0,1,0.448,1,1s-0.448,1-1,1h-8v26h30V16h-2c-0.552,0-1-0.448-1-1s0.448-1,1-1h4V44z"/></g><g><path d="M8,42H0V16h8V42z M2,40h4V18H2V40z"/></g><g><path d="M17.44,27.56l2.639-8.297L38.071,1.272c1.511-1.512,4.146-1.512,5.657,0c1.56,1.56,1.56,4.097,0,5.656L25.737,24.92     L17.44,27.56z M21.838,20.333l-1.32,4.148l4.148-1.32L42.314,5.515c0.78-0.78,0.78-2.048,0-2.828     c-0.756-0.756-2.073-0.756-2.829,0L21.838,20.333z"/></g><g><rect height="2" width="6" x="1" y="24"/></g><g><rect height="2" width="6" x="1" y="32"/></g><g><path d="M41.606,8.636c-0.256,0-0.512-0.098-0.707-0.293l-4.243-4.243c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0     l4.243,4.243c0.391,0.391,0.391,1.023,0,1.414C42.118,8.539,41.862,8.636,41.606,8.636z"/></g><g><path d="M35.95,14.293c-0.256,0-0.512-0.098-0.707-0.293L31,9.757c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0     l4.243,4.243c0.391,0.391,0.391,1.023,0,1.414C36.461,14.195,36.206,14.293,35.95,14.293z"/></g><g><path d="M25.202,25.041c-0.256,0-0.512-0.098-0.707-0.293l-4.243-4.243c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0     l4.243,4.243c0.391,0.391,0.391,1.023,0,1.414C25.713,24.943,25.458,25.041,25.202,25.041z"/></g><g><path d="M17,29c-0.256,0-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l1.979-1.979c0.391-0.391,1.023-0.391,1.414,0     s0.391,1.023,0,1.414l-1.979,1.979C17.512,28.902,17.256,29,17,29z"/></g></g></g></svg>
          </div>

            <h2>
              Design
            </h2>
          </div>
          <div class="card" style="background-color: var(--default-green);">
          <div class="white-svg">
            <svg id="svg8" version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs2"><rect height="7.0346723" id="rect2504" width="7.9207187" x="-1.1008456" y="289.81766"/></defs><g id="g1439" style="display:inline" transform="translate(-9.7655e-4,0.0156175)"><g id="g1409" style="stroke-width:1.22622" transform="matrix(0.81517505,0,0,0.81585773,2.217835,5.3233516)"><path d="m 12,87.693359 c -1.395629,0 -2.5371094,1.142265 -2.5371094,2.539063 0,0.752444 0.3314855,1.430289 0.8554684,1.896484 -1.4270627,0.633014 -2.4362095,2.043619 -2.4843746,3.69336 l -0.015625,0.513672 h 8.3632816 l -0.01563,-0.513672 c -0.04875,-1.65259 -1.062997,-3.057653 -2.488282,-3.689454 0.526026,-0.466284 0.859375,-1.146257 0.859375,-1.90039 0,-1.396798 -1.14148,-2.539063 -2.537109,-2.539063 z m 0,1 c 0.855415,0 1.537109,0.682932 1.537109,1.539063 0,0.85613 -0.681694,1.539062 -1.537109,1.539062 -0.855415,0 -1.537109,-0.682932 -1.537109,-1.539062 0,-0.856131 0.681694,-1.539063 1.537109,-1.539063 z m 3.050781,6.642579 H 8.9472656 c 0.2854813,-1.429865 1.4695404,-2.525212 3.0289294,-2.543857 1.55939,-0.01865 2.783069,1.086679 3.074586,2.543857 z" id="path575" style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1" transform="matrix(1.2267304,0,0,1.2257039,-2.7206856,-104.59911)"/></g><path d="m 11.5,81.484375 v 1.371094 C 6.8385383,83.108123 3.1012773,86.840335 2.8417969,91.5 H 1.4863281 v 1 h 1.3535157 c 0.245821,4.672829 3.9892601,8.41868 8.6601562,8.67188 v 1.34179 h 1 v -1.34179 c 4.670896,-0.2532 8.414335,-3.999051 8.660156,-8.67188 h 1.355469 v -1 H 21.158203 C 20.898723,86.840335 17.161461,83.108123 12.5,82.855469 v -1.371094 z m 0,2.371094 v 1.25 h 1 v -1.25 c 4.119587,0.248607 7.400328,3.526947 7.65625,7.644531 h -1.261719 v 1 h 1.263672 C 19.915724,96.630895 16.629059,99.922667 12.5,100.17188 v -1.279302 h -1 v 1.279302 C 7.3709411,99.922667 4.0842758,96.630895 3.8417969,92.5 h 1.265625 v -1 H 3.84375 C 4.0996722,87.382416 7.3804123,84.104076 11.5,83.855469 Z" id="path1411" style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:fill markers stroke;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1" transform="translate(0,-80.01464)"/><g id="g1419"/><g id="g1425" transform="rotate(90,12,11.985357)"/></g></svg>
          </div>

            <h2>
              Marketing
            </h2>
          </div>
          <div class="card" style="background-color: var(--default-blue);">
          <div class="white-svg">
            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="mirroring effect, effect, mirror, verticality, screen, editing tool, reflect" id="mirroring_effect_effect_mirror_verticality_screen_editing_tool_reflect"><path d="M29,5H17V3a1,1,0,0,0-2,0V5H14a1,1,0,0,0,0,2h1V25H14a1,1,0,0,0,0,2h1v2a1,1,0,0,0,2,0V27H29a1,1,0,0,0,1-1V6A1,1,0,0,0,29,5ZM28,25H17V7H28Z"/><path d="M11,25H8a1,1,0,0,0,0,2h3a1,1,0,0,0,0-2Z"/><path d="M5,25H4V24a1,1,0,0,0-2,0v2a1,1,0,0,0,1,1H5a1,1,0,0,0,0-2Z"/><path d="M3,15.4a1,1,0,0,0,1-1V11.2a1,1,0,0,0-2,0v3.2A1,1,0,0,0,3,15.4Z"/><path d="M3,21.8a1,1,0,0,0,1-1V17.6a1,1,0,0,0-2,0v3.2A1,1,0,0,0,3,21.8Z"/><path d="M5,5H3A1,1,0,0,0,2,6V8A1,1,0,0,0,4,8V7H5A1,1,0,0,0,5,5Z"/><path d="M11,5H8A1,1,0,0,0,8,7h3a1,1,0,0,0,0-2Z"/></g></svg>
          </div>

            <h2>
              Edição de vídeo
            </h2>
          </div>
          <div class="card" style="background-color: var(--default-dark-green);">
          <div class="white-svg">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M272 288h-64C163.8 288 128 323.8 128 368C128 376.8 135.2 384 144 384h192c8.836 0 16-7.164 16-16C352 323.8 316.2 288 272 288zM240 256c35.35 0 64-28.65 64-64s-28.65-64-64-64c-35.34 0-64 28.65-64 64S204.7 256 240 256zM496 320H480v96h16c8.836 0 16-7.164 16-16v-64C512 327.2 504.8 320 496 320zM496 64H480v96h16C504.8 160 512 152.8 512 144v-64C512 71.16 504.8 64 496 64zM496 192H480v96h16C504.8 288 512 280.8 512 272v-64C512 199.2 504.8 192 496 192zM384 0H96C60.65 0 32 28.65 32 64v384c0 35.35 28.65 64 64 64h288c35.35 0 64-28.65 64-64V64C448 28.65 419.3 0 384 0zM400 448c0 8.836-7.164 16-16 16H96c-8.836 0-16-7.164-16-16V64c0-8.838 7.164-16 16-16h288c8.836 0 16 7.162 16 16V448z"/></svg>
          </div>

            <h2>
              Consultória
            </h2>
          </div>
      </section>

      <section id="textresults">
      <?php
      $data = $db->retrieve("film");
      $data = json_decode($data, 1);
      if (is_array($data)) {
        $count = count($data);
        echo "<h3>$count resultados encontrados</h3>";
      } else {
        echo "<p>Nenhum resultado encontrado.</p>";
    }
      ?>
      <h4>Ordenado por: <span style="color:#000000; margin-inline: 10px">Recomendados</span></h4>
      </section>

      <main>
        <div id="proposals">
          <?php
          $data = $db->retrieve("film");
          $data = json_decode($data, 1);

          if(is_array($data)){
          foreach($data as $id => $film){
              echo "
              <div class='proposal'>
                  <img src='{$film['thumbnail']}' alt='Thumbnail'>
                <h3>{$film['title']}</h3>
                <p>Year: {$film['year']}</p>
                <p>Rating: {$film['rating']}</p>
                <a href='edit.php?id=$id'>EDIT</a>
                <a href='delete.php?id=$id'>DELETE</a>
              </div>
            ";
            }
          }
          ?>
        </div>
      </main>
      <div class="proposal">
      </div>
        
      
        <!-- Botão de "Vagas" -->
        <a href="crud\index.php" class="btn">job vacancies</a>
        <!-- Botão de "Logout" -->
        <a href="add.php"><button>ADD DATA</button></a><br><br>


        <script>
          document.querySelector('.profile').addEventListener('click', function() {
          var dropDown = document.getElementById('DropDown');
          if (dropDown.classList.contains('hidden')) {
            dropDown.classList.remove('hidden');
          } else {
            dropDown.classList.add('hidden');
          }
        });
        </script>
</body>
</html>
