<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Pengaturan Dasar</h4>
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

                            <form class="form-horizontal" id="sample-form" action="<?=site_URL()?>pengaturan/web" method="post">
                            
                                <input type="hidden" name="WebID" value="<?=$w['WebID']?>">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="NamaApp">Nama Web</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" class="col-xs-12 col-sm-9" name="NamaApp" id="NamaApp" maxlength="50" value="<?=$w['NamaApp']?>" placeholder="Nama Web" required="yes" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="Singkatan">Singkatan</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" class="col-xs-12 col-sm-9" name="Singkatan" id="Singkatan" maxlength="50" value="<?=$w['Singkatan']?>" placeholder="Singkatan" required="yes" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="Telp">Telephone</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="text" class="col-xs-12 col-sm-9 input-mask-phone" name="Telp" id="form-field-mask-2" value="<?=$w['Telp']?>" placeholder="Telephone" required="yes"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="Email">Email</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="email" class="col-xs-12 col-sm-9" name="Email" id="Email" maxlength="50" value="<?=$w['Email']?>" placeholder="Email" required="yes"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="Alamat">Alamat</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <textarea class="col-xs-12 col-sm-9 limited" rows="4" id="Alamat" name="Alamat" maxlength="500" placeholder="Alamat"><?=$w['Alamat']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="Deskripsi">Deskripsi Web</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <textarea class="col-xs-12 col-sm-9 limited" rows="4" id="Deskripsi" name="Deskripsi" maxlength="500" placeholder="Deskripsi Web"><?=$w['Deskripsi']?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">Website URL</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="WebsiteURL" id="url" maxlength="50" value="<?=$w['WebsiteURL']?>" placeholder="Website URL"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">YouTube</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="YouTube" id="url" maxlength="50" value="<?=$w['YouTube']?>" placeholder="YouTube"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">Facebook</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="Facebook" id="url" maxlength="50" value="<?=$w['Facebook']?>" placeholder="Facebook"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">Facebook Page</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="FacebookFP" id="url" maxlength="50" value="<?=$w['FacebookFP']?>" placeholder="Facebook Page"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">Twitter</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="Twitter" id="url" maxlength="50" value="<?=$w['Twitter']?>" placeholder="Twitter"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label col-xs-12 col-sm-3" for="url">Instagram</label>

                                            <div class="col-xs-12 col-sm-9">
                                                <div class="clearfix">
                                                    <input type="url" class="col-xs-12 col-sm-9" name="Instagram" id="url" maxlength="50" value="<?=$w['Instagram']?>" placeholder="Instagram"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3" for="Maps">Maps</label>

                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea class="col-xs-12 col-sm-9 limited" rows="5" id="Maps" name="Maps" maxlength="500" placeholder="Maps"><?=$w['Maps']?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <center>
                                    <button class="btn btn-success" type="submit" name="das">
                                        <i class="ace-icon fa fa-save bigger-110"></i>
                                        Update
                                    </button>
                                </center>

                            </form>

                            <hr>
                            
                        </div>
                    </div>
                </div>
