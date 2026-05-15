<?php
require_once "GameBoard.php";

$gameBoard = new GameBoard();

$gameBoard->throwAllDice();

$gameBoard->throwRandomDice();

$gameBoard->showThrowCounterPerDice();