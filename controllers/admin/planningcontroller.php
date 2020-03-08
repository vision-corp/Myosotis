<?php
/**
 * planningcontroller.php
 * author Info2 IUT Rodez 2019-2020
 *
 */
namespace controllers\admin;

use yasmf\connecthelpers;
use yasmf\httphelper;
use yasmf\view;
use model\calendar_model;
use yasmf\config;


class planningcontroller
{
    public function index($pdo)
    {
        connecthelpers::secure();
        $view = new view(config::getRacine()."/views/admin/admin-calendrier");
        $view->setVar('RACINE', config::getRacine());
        return $view;
    }

    public function load($pdo) {
        connecthelpers::secure();
        echo calendar_model::load($pdo);
    }

    public function insert($pdo) {
        connecthelpers::secure();
        $title = httphelper::getParam("title");
        $start_event = httphelper::getParam("start");
        $end_event = httphelper::getParam("end");
        var_dump($title);
        if ($title && $start_event) {
            calendar_model::insert($pdo, $title, $start_event, $end_event);
        }
        return $this->load($pdo);
    }

    public function update($pdo) {
        connecthelpers::secure();
        $id = httphelper::getParam("id");
        $title = httphelper::getParam("title");
        $start_event = httphelper::getParam("start_event");
        $end_event = httphelper::getParam("end_event");
        if($id && $title && $start_event) {
            calendar_model::update($pdo, $id, $title, $start_event, $end_event);
        }
        return $this->load($pdo);

    }

    public function delete($pdo) {
        connecthelpers::secure();
        $id = httphelper::getParam("id");
        if ($id) {
            calendar_model::delete($pdo, $id);

        }
        return $this->load($pdo);

    }
}

