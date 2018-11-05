<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a data-toggle="tab" href="#nestable">
                    Nestable Menu
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#menu">
                    Menu
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="nestable" class="tab-pane fade in active">
                <?php require "nestable.php";?>
            </div>

            <div id="menu" class="tab-pane fade">
                <?php require "menu.php";?>
            </div>
        </div>
    </div>

    <div class="hr hr-18 dotted hr-double"></div>
