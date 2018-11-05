<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

          <div class="hr hr3 hr-dotted"></div>
          
          <li <?php if($this->uri->segment(2) == "dashboard") { echo 'class="active"'; } ?>>
						<a href="<?=site_URL()?>pegawai/dashboard">
							<i class="menu-icon fa fa-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
          </li>
          
          <div class="hr hr3 hr-dotted"></div>

          <?php
          //main menu
          $main_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent IS NULL ORDER BY Position");
          foreach ($main_menu->result() as $main) {
            $cl = ($this->uri->segment(1) == strtolower($main->Nama))? 'class="active open"':'' ;

            if($main->Type == "Single") {
              echo '<li '.$cl.'">
                      <a href="'.$main->URL.'">
                      <i class="menu-icon fa '.$main->FaIcon.'"></i> '.$main->Nama. '
                      </a>
                      <b class="arrow"></b>
                    </li>';
            
            } else if($main->Type == "Dropdown") {
            echo '<li '.$cl.'">
                    <a href="'.$main->URL.'" class="dropdown-toggle">
                      <i class="menu-icon fa '.$main->FaIcon.'"></i>
                      <span class="menu-text"> '.$main->Nama.' </span><b class="arrow fa fa-angle-down"></b>
                    </a>
                    <b class="arrow"></b>

                    <ul class="submenu">';
            

                    //sub menu
                    $sub_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent = $main->ParentID ORDER BY PositionChild");
                    foreach ($sub_menu->result() as $sub) {
                      $lc = ($this->uri->segment(2) == strtolower(str_replace(' ', '', $sub->Nama)))? 'class="active"':'' ; 

                      echo '<li '.$lc.'">
                              <a href="'.site_URL().''.$sub->URL.'">
                                <i class="menu-icon fa '.$sub->FaIcon.'"></i> '.$sub->Nama. '
                              </a>
                              <b class="arrow"></b>
                            </li>';
                    }

                    echo '</ul></li>';
              }
          }
            echo '</li>';
          ?>      
          
          <div class="hr hr3 hr-dotted"></div>
          
          <li <?php if($this->uri->segment(2) == "panduan") { echo 'class="active"'; } ?>>
						<a href="<?=site_URL()?>pegawai/panduan">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Panduan </span>
						</a>
						<b class="arrow"></b>
          </li>
          <li <?php if($this->uri->segment(2) == "changelogs") { echo 'class="active"'; } ?>>
						<a href="<?=site_URL()?>pegawai/changelogs">
							<i class="menu-icon fa fa-code"></i>
							<span class="menu-text"> Changelogs </span>
						</a>
						<b class="arrow"></b>
          </li>
          
          <div class="hr hr3 hr-dotted"></div>
          
          <li <?php if($this->uri->segment(2) == "profil") { echo 'class="active"'; } ?>>
						<a href="<?=site_URL()?>pegawai/profil">
							<i class="menu-icon fa fa-user-circle"></i>
							<span class="menu-text"> Profil Saya </span>
						</a>
						<b class="arrow"></b>
          </li>
          <li <?php if($this->uri->segment(2) == "signout") { echo 'class="active"'; } ?>>
						<a href="<?=site_URL()?>auth/signout">
							<i class="menu-icon fa fa-sign-out"></i>
							<span class="menu-text"> Sign Out </span>
						</a>
						<b class="arrow"></b>
          </li>
        