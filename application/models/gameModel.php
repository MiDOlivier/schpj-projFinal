<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class gameModel extends CI_Model{

    public function turn () {

        if(sizeof($_POST) == 0) {

            $data = $this->bootGame();
            return;

        }

        if ($_POST['pc_hp'] <= 0) {
            $this->rebootGame();
        }

        switch ($_POST['pc_act']) {
            case 1:
                $this->turnBehavior(1);
                break;
            case 2:
                $this->turnBehavior(2);
                break;
            case 3:
                $this->turnBehavior(3);
                break;
            default:
                break;
        }

        if ($_POST['en_hp'] <= 0) {
            $in = $this->getMob();
            $_POST['en_hp'] = $in['en_hp'];
            $_POST['en_mp'] = $in['en_mp'];
            return $v = 'A new Challenger Apporaches!';
        }

    }

    public function bootGame() {

        $data['pc_hp'] = 100;
        $data['pc_mp'] = 100;

        $in = $this->getMob();

        $data['en_hp'] = $in['en_hp'];
        $data['en_mp'] = $in['en_mp'];

        $_POST = $data;

    }
    //if(sizeof($_POST) == 0) return 0;

    public function rebootGame() {

        $redirect = base_url();
        $redirect .= 'game/gameEnd';

        $_POST = array();
        redirect($redirect);

    }

    public function turnBehavior($type) {

        switch ($type) {
            case 1:
                $this->playerAttack();
                $this->enemyAttack(0);
                break;
            case 2:
                $this->enemyAttack(5);
                break;
            case 3:
                $this->enemyAttack(0);
                $this->playerHeal();
                break;
            default:
                break;
        }

    }

    public function playerAttack() {

        $damage = 10 + rand(5, 15);

        $_POST['en_hp'] -= $damage;

    }

    public function enemyAttack($defenseFactor = 0) {

        $damage = 0;

        $damage = 5 + rand(5, 7) - $defenseFactor;

        $_POST['pc_hp'] -= $damage;

        if ($_POST['pc_hp'] <= 0) {
            $this->rebootGame();
        }

    }

    public function playerHeal() {

        $heal = 0;

        $heal = 5 + rand(5, 15);

        if ($_POST['pc_hp'] < 100) {
            $_POST['pc_hp'] += $heal;
            $_POST['pc_mp'] -= 5;
        }

    }

    public function getMob() {

        $this->load->library('mongen');
        $this->mongen->setHp();
        $this->mongen->setMp();
        $out = $this->mongen->getMonster();
        return $out;

    }

}