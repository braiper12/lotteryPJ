<?php
include_once('header.php');
include_once('navbar.php');
require_once('../classess/connection/connection.php');
require_once('../config/loteria.php');
?>

<resultadosBODY>
 <h1>hola</h1>

    <form action="../config/get_api.php" method="post">

      <select name="loteria" id="loteria">
      <option value="0">Seleccion loteria</option>
      <option value="antioquenita-tarde-festivo">antioquenita-tarde-festivo</option>
      <option value="caribena-dia-festivo">caribena-dia-festivo</option>
      <option value="chontico-dia-festivo">chontico-dia-festivo</option>
      <option value="culona-dia-festivo">culona-dia-festivo</option>
      <option value="motilon-dia">motilon-dia</option>
      <option value="paisita-dia-festivo">paisita-dia-festivo</option>
      <option value="saman-festivo">saman-festivo</option>
      <option value="sinuano-dia-festivo">sinuano-dia-festivo</option>
      <option value="antioqueaita-festiva-maaana">antioqueaita-festiva-maaana</option>
      <option value="antioqueaita-festiva-tarde">antioqueaita-festiva-tarde</option>
      <option value="antioqueaita-maaana">antioqueaita-maaana</option>
      <option value="antioqueaita-tarde">antioqueaita-tarde</option>
      <option value="antioquenita-festiva-manana">antioquenita-festiva-manana</option>
      <option value="antioquenita-festiva-tarde">antioquenita-festiva-tarde</option>
      <option value="antioquenita-manana">antioquenita-manana</option>
      <option value="antioquenita-tarde">antioquenita-tarde</option>
      <option value="ast-lun-2150">ast-lun-2150</option>
      <option value="ast-sol-1350">ast-sol-1350</option>
      <option value="astro-luna">astro-luna</option>
      <option value="astro-sol">astro-sol</option>
      <option value="bogota">bogota</option>
      <option value="boyaca">boyaca</option>
      <option value="cafeterito-festivo">cafeterito-festivo</option>
      <option value="cafeterito-noche">cafeterito-noche</option>
      <option value="cafeterito-noche-festivo">cafeterito-noche-festivo</option>
      <option value="cafetero">cafetero</option>
      <option value="cafetero-dia">cafetero-dia</option>
      <option value="cafetero-noche">cafetero-noche</option>
      <option value="cafetero-noche-festivo">cafetero-noche-festivo</option>
      <option value="caribeaa-dia">caribeaa-dia</option>
      <option value="caribeaa-festivo-dia">caribeaa-festivo-dia</option>
      <option value="caribeaa-noche">caribeaa-noche</option>
      <option value="caribena-dia">caribena-dia</option>
      <option value="caribena-festiva-noche">caribena-festiva-noche</option>
      <option value="caribena-festivo-dia">caribena-festivo-dia</option>
      <option value="caribena-noche">caribena-noche</option>
      <option value="caribena-noche-festivo">caribena-noche-festivo</option>
      <option value="cauca">cauca</option>
      <option value="chontico">chontico</option>
      <option value="chontico-dia">chontico-dia</option>
      <option value="chontico-festivo">chontico-festivo</option>
      <option value="chontico-festivo-dia">chontico-festivo-dia</option>
      <option value="chontico-noche">chontico-noche</option>
      <option value="chontico-noche-festivo">chontico-noche-festivo</option>
      <option value="chontico-noche-jueves">chontico-noche-jueves</option>
      <option value="cruz-roja">cruz-roja</option>
      <option value="culona">culona</option>
      <option value="culona-dia">culona-dia</option>
      <option value="culona-festivo">culona-festivo</option>
      <option value="culona-festivo-dia">culona-festivo-dia</option>
      <option value="culona-festivo-noche">culona-festivo-noche</option>
      <option value="culona-noche">culona-noche</option>
      <option value="culona-noche-festivo">culona-noche-festivo</option>
      <option value="cundinamarca">cundinamarca</option>
      <option value="dorado">dorado</option>
      <option value="dorado-festivo">dorado-festivo</option>
      <option value="dorado-manana">dorado-manana</option>
      <option value="dorado-noche">dorado-noche</option>
      <option value="dorado-noche-festivo">dorado-noche-festivo</option>
      <option value="dorado-tarde">dorado-tarde</option>
      <option value="extra-cruz-roja">extra-cruz-roja</option>
      <option value="extra-de-colombia">extra-de-colombia</option>
      <option value="fantastica-dia">fantastica-dia</option>
      <option value="fantastica-noche">fantastica-noche</option>
      <option value="fantastica-noche-festivo">fantastica-noche-festivo</option>
      <option value="huila">huila</option>
      <option value="fantastica-dia">fantastica-dia</option>
      <option value="la-fantastica-festivo">la-fantastica-festivo</option>
      <option value="la-fantastica-noche">la-fantastica-noche</option>
      <option value="la-fantastica-noche-festivo">la-fantastica-noche-festivo</option>
      <option value="manizales">manizales</option>
      <option value="medellin">medellin</option>
      <option value="meta">meta</option>
      <option value="motilon">motilon</option>
      <option value="motilon-festivo">motilon-festivo</option>
      <option value="motilon-noche">motilon-noche</option>
      <option value="paisita-3-sabados">paisita-3-sabados</option>
      <option value="paisita-dia">paisita-dia</option>
      <option value="paisita-festivo">paisita-festivo</option>
      <option value="paisita-festivo-dia">paisita-festivo-dia</option>
      <option value="paisita-festivo-noche">paisita-festivo-noche</option>
      <option value="paisita-noche">paisita-noche</option>
      <option value="paisita-noche-festivo">paisita-noche-festivo</option>
      <option value="pijao">pijao</option>
      <option value="pijao-festivo">pijao-festivo</option>
      <option value="pijao-noche-festivo">pijao-noche-festivo</option>
      <option value="quindio">quindio</option>
      <option value="risaralda">risaralda</option>
      <option value="saman">saman</option>
      <option value="samanfestivo">samanfestivo</option>
      <option value="santander">santander</option>
      <option value="sinuano-dia">sinuano-dia</option>
      <option value="sinuano-festivo-dia">sinuano-festivo-dia</option>
      <option value="sinuano-festivo-noche">sinuano-festivo-noche</option>
      <option value="sinuano-noche">sinuano-noche</option>
      <option value="sinuano-noche-festivo">sinuano-noche-festivo</option>
      <option value="sorteo-extra-cauca">sorteo-extra-cauca</option>
      <option value="sorteo-extra-cruzroja-valle">sorteo-extra-cruzroja-valle</option>
      <option value="sorteo-extra-de-bogota">sorteo-extra-de-bogota</option>
      <option value="sorteo-extra-de-boyaca">sorteo-extra-de-boyaca</option>http://localhost/RIFASJEISON/config/loteria.php
      <option value="sorteo-extra-de-manizales">sorteo-extra-de-manizales</option>
      <option value="sorteo-extra-del-tolima">sorteo-extra-del-tolima</option>
      <option value="sorteo-extra-santander">sorteo-extra-santander</option>
      <option value="super-extra-medellin">super-extra-medellin</option>
      <option value="super-extra-navidad-medellin">super-extra-navidad-medellin</option>
      <option value="tolima">tolima</option>
      <option value="valle">valle</option>
      <option value="antioquenita-manana-festivo">antioquenita-manana-festivo</option>


      
      </select>
     
      <input class="controls" type="date" name="dateL" id="dateL" placeholder="Fecha lotería">
      </br>
      <input class="botons" type="submit" value="consultar ganador" name="consult" id="consult">
      <input type="text" name="resultados">
                <?php if (isset($resultados)) {
              // Puedes imprimir los resultados aquí según tu estructura HTML
              echo '<h3>Resultados de lotería:</h3>';
              
              foreach ($resultados as $resultado) {
                  echo '<p><strong>Lotería:</strong> ' . $resultado['lottery'] . '</p>';
                  echo '<p><strong>Fecha:</strong> ' . $resultado['date'] . '</p>';
                  echo '<p><strong>Número Ganador:</strong> ' . $resultado['result'] . '</p>';
                  echo '<p><strong>Serie:</strong> ' . $resultado['series'] . '</p>';
                  echo '<hr>';
              }
          } else {
              echo "<p>No se proporcionaron resultados de lotería.</p>";
          }
          ?>
    </form> 
     
     
     




</resultadosBODY>