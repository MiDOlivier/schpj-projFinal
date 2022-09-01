<?php
include_once APPPATH . 'libraries/builder/MonsterBuilder.php';

class mongen implements MonsterBuilder {

    private $monster;

    public function __construct () {
        $this->reset();
    }

    public function reset()
    {
        $this->monster['en_hp'] = 0;
        $this->monster['en_mp'] = 0;
    }

    public function setHP() {

        $this->monster['en_hp'] = 20 + rand(10, 50);

    }

    public function setMP() {

        $this->monster['en_mp'] = 5 + rand(10, 50);
    }

    public function getMonster() {
        $result = $this->monster;
        $this->reset();
        return $result;
    }



}