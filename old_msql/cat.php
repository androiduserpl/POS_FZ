<?php
    class Cat {
        public function moveUp( $speed = 30 ) {

        }
        public function moveDown( $speed = 30 ) {

        }
        public function moveLeft( $speed = 30 ) {

        }
        public function moveRight( $speed = 30 ) {

        }
        public function setHuntMode() {

        }
        public function setChaosMode() {

        }
    }

    $Cat = new Cat();

    $Cat->moveUp();
    $Cat->moveLeft();
    $Cat->moveUp();
    $Cat->moveLeft();
    $Cat->moveDown();
    $Cat->moveRight();
    $Cat->setChaosMode();
