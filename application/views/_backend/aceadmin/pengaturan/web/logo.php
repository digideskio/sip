<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Pengaturan Logo</h4>
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

                            <form class="form-horizontal" id="validation-form" method="get">
                            
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="clearfix">
                                            <input type="file" id="id-input-file-2" />
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <div class="col-xs-12" align="center">
                                        <div class="clearfix">
                                            <img src="<?=base_URL()?>_assets/logo/<?=logo()?>" class="img-responsive img-thumbnail" width="500px" height="500px">
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <hr>
                            
                        </div>
                    </div>
                </div>
