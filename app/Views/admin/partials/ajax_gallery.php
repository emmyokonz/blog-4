<?php

?>
<div class="modal fade modal-responsive imageGallery" id="imageGallery" role="dialog" aria-labelledby="galleryModel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<div class="modal-header">
		        <h4 class="modal-title" id="galleryModel">Media Library </h4>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    </div>
	      	<div class="modal-body">
	        	<div class="panel">
                    <div class="panel-body">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link" href="#new-image" data-toggle="tab" role="tab" aria-selected="true" aria-expanded="false">
									<i class="fa fa-plus fa-fw"></i>Upload files</a></li>
							<li class="nav-item">
								<a class="nav-link  active show" href="#load-images" data-toggle="tab" role="tab" aria-selected="false" aria-expanded="false">
									<i class="fa fa-file fa-fw"></i>choose file from galley...</a></li>
                        </ul>
						<div class="tab-content tabcontent">
                        	
							<div id="new-image" class="tab-pane  p-t-20 <?=(isset($add_new)?$add_new:'') ?>">
	                            <?=form_open_multipart(ajax_url('tiyepik'),['method'=>'post','id'=>'upload_form'])?>
	                                <div class="row">
	                                    <div class="col-sm-12">
	                                    <div class="form-group">
											<input name="file" class="dropify" id="image_upload" type="file" multiple />
	                                    </div>
	                                    </div>
	                                </div>
	                                <div class="row">
		                                <div class="col-sm-12">
		                                <div class="form-group">
											<?=$upload_btn?>
		                                </div>
		                                </div>
	                                </div>
	                            <?=form_close()?>
	                            
                            </div>
                            <div id="load-images" class="tab-pane <?=(isset($choose_file)?$choose_file:'')?>">
                                <div class="row m-l-0 m-r-0">
									<div class="col-md-9  p-t-20 p-b-20" id="image-display">
										<div id="uploaded_message"></div>
										<div class="el-element-overlay">
											<?=$images?>
										</div>
                                    </div>
									<div class="col-md-3  p-t-20 p-l-20 p-r-20 p-b-10 bg-light" style="min-height: 500px;">
										<div class="hide" id="image-prop">
											<div class="thumbnail">
												<div class="image-preview-wrapper">
													<div class="el-element-overlay">
														<div class="card">
															<div class="el-card-item">
																<div class="el-card-avatar el-overlay-1">
																	<div id="image-preview" class="image-preview-box"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="caption">
														<h4 class="text-danger small text-wrap" id="image-name"></h4>
														<p>
															<div id="image-delete"></div></p>
													</div>
												</div>
											</div>
	                                    	<div class="form-group">
		                                    	<div class="row">
		                                    		<div class="col-sm-12">
			                                    		<div class="form-group">
			                                    			<input  class="form-control" id="altText" placeholder="Alt" name="alt-text"/>
			                                    		</div>
			                                    		<div id="add-image" class="btn btn-info btn-sm btn-block">Insert file</div>
		                                    		</div>
		                                    	</div>
		                               		</div>
                                		</div>
                                	</div>
                           		</div>
                        	</div>
                   		</div>
                	</div>
	      		</div>
	      	<!--<div class="modal-footer">
	        	<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      	</div>-->
	    </div>
	</div>
</div>
</div>