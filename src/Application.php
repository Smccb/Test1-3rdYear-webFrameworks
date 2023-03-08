<?php

namespace Tudublin;

class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch ($action){
            case 'about':
                require_once __DIR__ . '/../templates/about.php';
                break;

            case 'list':
                $objectRepo = new ObjectRepository();
                $lists = $objectRepo->findAll();
                require_once __DIR__ . '/../templates/list.php';
                break;

            case 'showList':
                $id= filter_input(INPUT_GET, 'id');
                $objectRepo = new ObjectRepository();
                $listData = $objectRepo->find($id);
                require_once __DIR__ . '/../templates/showList.php';
                break;

            default:
                require_once __DIR__ . '/../templates/home.php';

        }
	}
}