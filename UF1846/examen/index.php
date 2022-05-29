<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(!isset($title)) echo 'Tu tiempo'; else echo $title.'| Tu tiempo' ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <form action="" method="get">
            <select name="s" id="search-bar">
                <option value="alicante">Alicante</option>
                <option value="alcoy">Alcoy</option>
                <option value="almoradi">Almoradi</option>
            </select>
            <input type="submit" value="Buscar">
        </form>
    </header>
    <main>
        <?php
        //Almoradi --> 03015
        //Alcoy --> 03009
        //Alicante --> 03014 
        if(isset($_GET['s']) && !empty($_GET['s'])){
            switch($_GET['s']){
                case 'alicante':
                    $local_code = '03014';
                    break;
                case 'alcoy':
                    $local_code = '03009';
                    break;
                case 'almoradi':
                    $local_code = '03015';
                    break;
                default:
                    $local_code = '03014';
                    break;
            }
            $xml = simplexml_load_file("https://www.aemet.es/xml/municipios/localidad_".$local_code.".xml");
            ?>
            <section class="chip title">
                <article class="title">
                    <?php echo $xml->nombre ?>
                </article>
                <article class="provincia">
                    <?php echo $xml->provincia ?>
                </article>
            </section>
            <section class="wrapper">
                <?php 
                foreach($xml->prediccion->dia as $element){
                    ?>
                    <div class="chip">
                        <div class="day">
                            <?php 
                            echo (DateTime::createFromFormat('Y-m-d', $element['fecha']))->format('d');
                            ?>
                        </div>
                        <div class="month">
                            <?php  $month = DateTime::createFromFormat('Y-m-d',$element['fecha'])->format('m');
                            switch($month){
                                case '01':
                                    $mont = 'Enero';
                                    break;
                                case '02':
                                    $month = 'Febrero';
                                    break;
                                case '03':
                                    $month = 'Marzo';
                                    break;
                                case '04':
                                    $month = 'Abril';
                                    break;
                                case '05':
                                    $month = 'Mayo';
                                    break;
                                case '06':
                                    $month = 'Junio';
                                    break;
                                case '07':
                                    $month = 'Julio';
                                    break;
                                case '08':
                                    $month = 'Agosto';
                                    break;
                                case '09':
                                    $month = 'Septiembre';
                                    break;
                                case '10':
                                    $month = 'Octubre';
                                    break;
                                case '11':
                                    $month = 'Noviembre';
                                    break;
                                case '12':
                                    $month = 'Diciembre';
                                    break;
                            }
                            echo $month;
                            ?>
                        </div>
                        <div class="prediction">
                            <div class="temp">
                                <div class="title">Temperatura</div>
                                <?php 
                                foreach($element->temperatura as $element2){
                                    ?>
                                    <div class="max">
                                        <?= '<li>Maxima: '.$element2->maxima.' ºC</li>' ?>
                                    </div>
                                    <div class="min">
                                        <?= '<li>Minima: '.$element2->minima.' ºC</li>' ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="wind">
                                <div class="title">Viento</div>
                                <?php 
                                foreach($element->viento as $element3){
                                    if(($element3['periodo'] == '00-24' || $element3['periodo'] == null)){
                                       ?>
                                       <div class="direccion">
                                           <?= '<li>Direccion: '.$element3->direccion.'</li>'
                                           ?>
                                       </div>
                                       <div class="velocidad">
                                           <?= '<li>Velocidad: '.$element3->velocidad.' km/h</li>' ?>
                                       </div>
                                       <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </section>
            <?php
        }
        ?>
    </main>
</body>
</html>