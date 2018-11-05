<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a data-toggle="tab" href="#dasar">
                    Dasar
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#favicon">
                    Favicon
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#logo">
                    Logo
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#icon">
                    Icon
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="dasar" class="tab-pane fade in active">
                <?php require "dasar.php";?>
            </div>

            <div id="favicon" class="tab-pane fade">
                <?php require "favicon.php";?>
            </div>

            <div id="logo" class="tab-pane fade">
                <?php require "logo.php";?>
            </div>
            
            <div id="icon" class="tab-pane fade">
                <?php require "icon.php";?>
            </div>
        </div>
    </div>

    <div class="hr hr-18 dotted hr-double"></div>
