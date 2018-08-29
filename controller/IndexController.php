<?php
namespace controller;
/**
 * Index Controller
 *
 * Controller für die Startseite
 *
 * @author Jens Bekersch <bekersch@th-brandenburg.de>
 * @version 1.0 05/2018
 */
use base\command\Command;
use base\http\Request;
use base\http\Response;
use base\view\HtmlTemplateView;
use base\config\Registry;
use model\User;

class IndexController implements Command {
    /**
     * Execute
     *
     * Methode, die die serverseitige Bearbeitung realisiert. Verbindet die Datenschicht mit der Ausgabeschicht.
     *
     * @param Request $request
     * @param Response $response
     * @access public
     */
    public function execute(Request $request, Response $response) {
        /* Laden der Konfigurationsvariablen */
        $reg = Registry::getInstance();
        /* Template initialisieren */
        $view = new HtmlTemplateView('start');
        /* Dem Template werden die nötigen Daten zuweisen */
        $view->assign('domain', $reg->getConfiguration()->getDomain());
        $view->assign('seite', "PHP Framwork");
        /* Die View rendern */
        $view->render($request, $response);
    }
}