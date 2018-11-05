<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title">Management Module</h4>
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
									<div class="col-sm-12">
										<div class="clearfix">
											<div class="pull-left">
												<a href="<?=site_URL()?>pengaturan/module/add" class="btn btn-white btn-info btn-bold" data-loading-text="memuat..." id="loading-btn"><i class="ace-icon fa fa-plus bigger-120 blue"></i>
												Tambah</a>	
											</div>
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Table Management Module
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center" width="5%">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th class="center" width="7%">NO</th>
														<th>Nama</th>
														<th>
															Module Name
															<div class="hr hr2 hr-dotted"></div>
															Table Module
														</th>
														<th>URL & URI</th>
														<th>Parent</th>
														<th class="text-center" width="10%"><i class="fa fa-flash"></i></th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														<td class="center">$45</td>
														<td>$45</td>
														<td>
															$45
															<div class="hr hr2 hr-dotted"></div>
															$45
														</td>
														<td>$45</td>
														<td>$45</td>
														<td class="text-center">
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

                            <hr>
                            
                        </div>
                    </div>
                </div>
