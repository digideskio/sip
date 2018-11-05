<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Nestable Menu</h4>
                        <span class="widget-toolbar">
                            <a href="javascript:void(0)" data-action="collapse">
                                <i class="ace-icon fa fa-chevron-up"></i>
                            </a>
                            <a href="javascript:void(0)" data-action="reload">
                                <i class="ace-icon fa fa-refresh"></i>
                            </a>
                            <a href="javascript:void(0)" data-action="close">
                                <i class="ace-icon fa fa-times"></i>
                            </a>
                        </span>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main">
                            
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">

                                    <!-- PAGE CONTENT BEGINS -->
                                    <div class="dd dd-draghandle text-left">
                                        <ol class="dd-list">

                                        <?php 
                                            $main_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent IS NULL ORDER BY Position");
                                            foreach ($main_menu->result() as $main) {

                                                if($main->Type == "Single") {
                                                    echo '
                                                        <li class="dd-item dd2-item" data-id="13">
                                                            <div class="dd-handle dd2-handle">
                                                                <i class="normal-icon ace-icon fa '.$main->FaIcon.' blue bigger-130"></i>

                                                                <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                                            </div>
                                                            <div class="dd2-content">'.$main->Nama.'</div>
                                                        </li>';

                                                } else if($main->Type == "Dropdown") {
                                                    echo '
                                                    <li class="dd-item dd2-item" data-id="15">
                                                        <div class="dd-handle dd2-handle">
                                                            <i class="normal-icon ace-icon fa '.$main->FaIcon.' green bigger-130"></i>

                                                            <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                                        </div>
                                                        <div class="dd2-content green">'.$main->Nama.'</div>

                                                        <ol class="dd-list">';
                                                        
                                                        //sub menu
                                                        $sub_menu = $this->db->query("SELECT * FROM m_menu WHERE IsParent = $main->ParentID ORDER BY PositionChild");
                                                        foreach ($sub_menu->result() as $sub) {
                                                        
                                                            echo '
                                                            <li class="dd-item dd2-item" data-id="16">
                                                                <div class="dd-handle dd2-handle">
                                                                    <i class="normal-icon ace-icon fa '.$sub->FaIcon.' orange bigger-130"></i>

                                                                    <i class="drag-icon ace-icon fa fa-arrows bigger-125"></i>
                                                                </div>
                                                                <div class="dd2-content orange">'.$sub->Nama.'</div>
                                                            </li>';
                                                    }
                                                    
                                                    echo '
                                                        </ol>
                                                </li>';
                                            }

                                        }

                                        echo'
                                            </ol>';
                                    ?>

                                    </div>
                                    <!-- PAGE CONTENT ENDS -->
                                
                                </div>

                                <div class="col-sm-6">
                                    <p>Ini adalah management module nestable</p>
                                </div>

                                
                            </div>

                            <hr>
                            
                        </div>
                    </div>
                </div>
