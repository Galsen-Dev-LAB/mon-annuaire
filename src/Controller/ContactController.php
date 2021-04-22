<?php

namespace App\Controller;

use Core\Controller;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Class ContactController
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class ContactController extends Controller
{
    public function index()
    {
        return $this->render('contact/index.php', ['title' => 'Accueil']);
    }

    public function show($id)
    {
        return $this->render('contact/show.php', [
            'title' => 'Resultat de la recherche',
            'id' => $id
        ]);
    }
}
