<?php
/**
 * Created by PhpStorm.
 * User: diogoalfa
 * Date: 12-05-15
 * Time: 11:56
 */
/*
$apiUrl = 'http://mindicador.cl/api';
//Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
if ( ini_get('allow_url_fopen') ) {
    $json = file_get_contents($apiUrl);
} else {
    //De otra forma utilizamos cURL
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($curl);
    curl_close($curl);
}

$dailyIndicators = json_decode($json);
echo 'El valor actual de la UF es $' . $dailyIndicators->uf->valor;
echo 'El valor actual del Dólar observado es $' . $dailyIndicators->dolar->valor;
echo 'El valor actual del Dólar acuerdo es $' . $dailyIndicators->dolar_intercambio->valor;
echo 'El valor actual del Euro es $' . $dailyIndicators->euro->valor;
echo 'El valor actual del IPC es ' . $dailyIndicators->ipc->valor;
echo 'El valor actual de la UTM es $' . $dailyIndicators->utm->valor;
echo 'El valor actual del IVP es $' . $dailyIndicators->ivp->valor;
echo 'El valor actual del Imacec es ' . $dailyIndicators->imacec->valor;
*/

$fecha= $_POST['fecha'];
$date = new DateTime($fecha);//01-01-2015
$apiUrl="http://mindicador.cl/api/uf/".$date->format('d-m-Y');

$fecha2= getdate();
//var_dump($fecha2);
//var_dump($fecha2['mday'].'-'.$fecha2['wday'].'-'.$fecha2['year']);
//die();
$date2 = new DateTime($fecha2['mday'].'-'.$fecha2['mon'].'-'.$fecha2['year']);
//echo $date2->format('d-m-Y');

if ( ini_get('allow_url_fopen') ) {
    $json = file_get_contents($apiUrl);
} else {
    //De otra forma utilizamos cURL
    $curl = curl_init($apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($curl);
    curl_close($curl);
}

$indicadorDelDia = json_decode($json);
//echo 'Autor :  '.$indicadorDelDia->autor."<br>";
$resultadoArr = $indicadorDelDia->serie;

?>

<html>
<header>
    <title>
        Consumir Web Service del Valor de la UF
    </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</header>
<body class="container">
<br/>
<br/>
    <div class="well">
        <div class="alert alert-info text-center" role="alert">Valor de la UF</div>
        <br/>
        <table class="table-bordered">
            <tr>
                <td class="col-md-3">Fecha : </td>
                <td class="col-md-4"><?=$date2->format('d-m-Y')?></td>
            </tr>
            <tr>
                <td class="col-md-3">Valor UF : </td>
                <td class="col-md-4"><?php
                    foreach($resultadoArr as $dato){
                        echo $dato->valor;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
<br/>
<a class="btn btn-default" href="seleccionar_fecha_uf.html">Volver</a>
</body>
</html>




