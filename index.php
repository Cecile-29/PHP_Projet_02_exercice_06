<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet02 Exercice06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet02 Exercice06</h1>
            <p class="col-12 text-info text-center">Créez un tableau contenant les 12 mois de l'année. Afficher ces mois dans un "select".</p>
        </div>
    <!-- exo 06  Correction Louiza -->
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
          <select>
              <?php
                  $month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                  $monthTableLength = count($month);

                  for($i = 0; $i < $monthTableLength; $i++) {
                    ?>
                    <option><?= $month[$i] ?></option>
                    <?php
                  }
              ?> 
          </select>
          <select>
            <?php
              foreach ($month as $value){
            ?>
              <option><?= $value ?></option>
             <?php
                  }
             ?> 
          </select>
       </div>
    <!-- exo 06  Correction JP -->
    <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
        <?php
          $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
        ?>
        <select>
          <?php
          foreach ($tab as $value) {
            ?>
            <option><?= $value ?></option>
            <?php
          }
          ?>
        </select>
         <?php
            $tab = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août', 'Septembre','Octobre','Novembre','Décembre');
          ?>
          <select>
            <?php
            foreach ($tab as $value) {
            ?>
              <option><?= $value ?></option>
            <?php
           }
           ?>
          </select>
       </div>
    </div>
</body>
</html>
