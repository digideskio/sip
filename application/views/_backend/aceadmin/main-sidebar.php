<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <style>
          p.small {
            line-height: 0.3;
          }
        </style>

        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
          <div class="hr hr2 hr-dotted"></div>
          <img src="<?=site_URL()?>_assets/pegawai/<?=isset($this->session->userdata('detailUser')[0]->Foto)?$this->session->userdata('detailUser')[0]->Foto:'avatar.png'?>" class="img-responsive img-circle img-thumbnail" width="200px" height="200px">
          <div class="hr hr2 hr-dotted"></div>
          
            <p class="small" align="center">
              <span class="badge badge-white middle badge-info" style="display:block; width:90%;"><strong><?=isset($this->session->userdata('detailUser')[0]->Nama)?$this->session->userdata('detailUser')[0]->Nama:'pegawai'?></strong></span>
              <br>
              <span class="label middle label-default" style="display:block; width:90%;">SuperUser</span>
            </p>
          
        </div>
        

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
          <img src="<?=site_URL()?>_assets/pegawai/<?=isset($this->session->userdata('detailUser')[0]->Foto)?$this->session->userdata('detailUser')[0]->Foto:'avatar.png'?>" class="img-responsive img-circle img-thumbnail" width="200px" height="200px">
        </div>
      