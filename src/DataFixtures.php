<?php

namespace Tudublin;

class DataFixtures
{
    public function getObjects()
    {
        $objects = [];

        $o1 = new Book();
        $o1->setTitle('Music Education: An Artificial Intelligence Approach');
        $o1->setImage('music.png');
        $o1->setNumPages(200);
        $o1->setId(1);
        $objects[1] = $o1;

        $o2 = new Book();
        $o2->setTitle('Unity 2021 Cookbook');
        $o2->setImage('cookbook.png');
        $o2->setNumPages(800);
        $o2->setId(2);
        $objects[2] = $o2;

        $o3 = new Book();
        $o3->setTitle('PHP Crash Course');
        $o3->setImage('php.png');
        $o3->setNumPages(690);
        $o3->setId(3);
        $objects[3] = $o3;

        $o4 = new Book();
        $o4->setTitle('An Introduction to Symfony 6');
        $o4->setImage('symfony.png');
        $o4->setNumPages(500);
        $o4->setId(4);
        $objects[4] = $o4;

        return $objects;
    }
}