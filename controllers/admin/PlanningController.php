<?php
/**
 * PlanningController.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers\admin;

use yasmf\ConnectHelpers;
use yasmf\HttpHelper;
use yasmf\View;
use model\calendar_model;
use yasmf\Config;


class PlanningController
{
    public function index($pdo)
    {
        ConnectHelpers::secure();
        $view = new View(Config::getRacine()."/views/admin/admin-calendrier");
        $view->setVar('RACINE', Config::getRacine());
        return $view;
    }

    public function load($pdo) {
        ConnectHelpers::secure();
        echo calendar_model::load($pdo);
    }

    public function insert($pdo) {
        ConnectHelpers::secure();
        $title = HttpHelper::getParam("title");
        $start_event = HttpHelper::getParam("start");
        $end_event = HttpHelper::getParam("end");
        var_dump($title);
        if ($title && $start_event) {
            calendar_model::insert($pdo, $title, $start_event, $end_event);
        }
        return $this->load($pdo);
    }

    public function update($pdo) {
        ConnectHelpers::secure();
        $id = HttpHelper::getParam("id");
        $title = HttpHelper::getParam("title");
        $start_event = HttpHelper::getParam("start_event");
        $end_event = HttpHelper::getParam("end_event");
        if($id && $title && $start_event) {
            calendar_model::update($pdo, $id, $title, $start_event, $end_event);
        }
        return $this->load($pdo);

    }

    public function delete($pdo) {
        ConnectHelpers::secure();
        $id = HttpHelper::getParam("id");
        if ($id) {
            calendar_model::delete($pdo, $id);

        }
        return $this->load($pdo);

    }
}

