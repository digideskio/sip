<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <small style="font-size:7px;">
    <center>
        <strong>IP Address &nbsp; : &nbsp;</strong><?=$_SERVER['REMOTE_ADDR']?>
        &nbsp;|&nbsp;
        <strong>Waktu Server &nbsp; : &nbsp;</strong><?=date('l, d F Y')?> - <span id="clock"></span>
    </center>
    </small>
