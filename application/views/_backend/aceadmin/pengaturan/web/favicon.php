<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Pengaturan Favicon</h4>
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

                            <form class="form-horizontal" id="sample-form" action="<?=site_URL()?>pengaturan/web" method="post" enctype="multipart/form-data">
                            
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="clearfix">
                                            <input type="file" id="id-input-file-2" name="Favicon"/>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <div class="col-xs-12" align="center">
                                        <div class="clearfix">
                                            <img src="<?=base_URL()?>_assets/favicon/<?=favicon()?>" class="img-responsive img-thumbnail" width="100px" height="100px">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <center>
                                    <button class="btn btn-success" type="submit" name="fav">
                                        <i class="ace-icon fa fa-save bigger-110"></i>
                                        Update
                                    </button>
                                </center>

                            </form>

                            <hr>
                            
                        </div>
                    </div>
                </div>
