

<?php
$condicionesAdmitidas_get = array(
    'dorsal',
    'nombre',
    'nomeq'
);

$connection = new mysqli('127.0.0.1', 'root', '', 'bd_ciclismo', '3306');
if ($connection->connect_errno) {
    echo 'Error al conectar a la base de datos';
}
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $params = $_GET;
        $ciclistas = get($params);
        $response = array(
            'result' => 'ok',
            'data' => $ciclistas
        );
        result(200, $response);
        break;
    default:
        $response = array(
            'result' => 'error'
        );
        result(404, $response);
        break;
}

function get($params = null)
{
    global $condicionesAdmitidas_get;
    foreach ($params as $key => $valor) {
        if (!in_array($key, $condicionesAdmitidas_get)) {
            unset($params[$key]);
            $response = array(
                'result' => 'error',
                'details' => 'Error en la solicitud'
            );
            result(400, $response);
            exit;
        }
    }
    $resultado = getDB($params);
    return $resultado;
}

function getDB($params = NULL)
{
    global $connection;
    $query = 'select * from ciclista';
    if ($params != null) {
        //Que cambie los parametros
        $query .= ' where ';
        $i = 0;
        foreach ($params as $key => $valor) {
            $i++;
            if ($i > 1) $query .= ' and ';
            $query .= $key . ' = "' . $valor.'"';
        }
    }
    echo $query;
    $results = $connection->query($query);
    $resultArray = array();
    foreach ($results as $value) {
        $resultArray[] = $value;
    }
    return $resultArray;
}

function result($code, $response)
{
    header('Content-type: application/json');
    http_response_code($code);
    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>