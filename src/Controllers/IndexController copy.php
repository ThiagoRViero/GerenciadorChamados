<?php

namespace Thiagorviero\Gc\Controllers;

use Gc\Resources\Controller\Controller;
use Thiagorviero\Gc\Models\Bd\Connection;
use PDO;

class IndexController extends Controller
{
    function home()
    {   
        $conn = Connection::getConnection();
        $stmt = $conn->prepare("select * from user");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);

        $this->render('login', 'layout');
    }
    function notFound()
    {

        echo 'Pagina não encontrada';
    }
}
