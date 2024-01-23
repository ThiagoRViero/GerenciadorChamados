<?php

namespace Thiagorviero\Gc\Controllers;

use Gc\Resources\Controller\Controller;

class IndexController extends Controller
{
    function home()
    {
        $this->render('login', 'layout');
    }
    function notFound()
    {

        echo 'Pagina não encontrada';
    }
}
