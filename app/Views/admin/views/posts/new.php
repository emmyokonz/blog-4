<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Create New Post </h4>
        </div>
    </div>
</div>
<div class="container-fluid">

    	<div class="card m-b-0">
    		<div class="card-body">
    			<div class="text-right">
                    <button class="btn btn-secondary btn-sm" type="submit"><i class="mdi mdi-reply"></i> Cancle </button>
                    <button class="btn btn-success btn-sm" type="submit"><i class="mdi mdi-content-save"></i> Save </button>
                </div>
    		</div>
    	</div>
    	
    	<div class="card m-b-0">
    		<div class="card-body border-top">
    			<div class="row">
	    			<div class="col-lg-8">
		    			<div class="form-group">
		                    <label>Post Title </label>
		                    <input type="text" name="post_title" class="form-control" id="post-title" placeholder="Post Title">
		                </div>
						<div class="form-group m-t-20">
		                    <label>Post Content </label>
		                   	<textarea rows="15" class="form-control" ></textarea>
		                </div>
	    			</div>
		    		<div class="col-lg-4">
		    			<div class="form-group ">
		                    <label>Publish Post Now </label>
		                    <select type="text" name="publish" class="form-control" id="publish">
		                    	<option value=""></option>
		                    	<option value="0">No</option>
		                    	<option value="1">Yes</option>
		                    </select>
		                </div>
		    			<div class="form-group ">
		                    <label>Featured Post </label>
		                    <select type="text" name="feature" class="form-control" id="publish">
		                    	<option value=""></option>
		                    	<option value="0">No</option>
		                    	<option value="1">Yes</option>
		                    </select>
		                </div>
		    			<div class="form-group ">
		                    <label>Category </label>
		                    <select type="text" name="category" class="form-control" id="category">
		                    	<option value=""></option>
		                    	<option value="0">Uncategorised</option>
		                    	<option value="1">php</option>
		                    	<option value="3">codeigniter</option>
		                    </select>
		                </div>
		    			<div class="form-group ">
		                    <label>Post Slug </label>
		                    <input name="slug" class="form-control" placeholder="Post Slug"/>
		                </div>
		    			<div class="form-group ">
		                    <label>Tags </label>
		                    <input name="tags" class="form-control" placeholder="Enter post tags"/>
		                </div>
		    		</div>
	    		</div>
    		</div>
    	</div>
    	<div class="card m-b-0">
    		<div class="card-body border-top">
    			<div class="text-left">
                    <button class="btn btn-secondary btn-sm" type="submit"><i class="mdi mdi-reply"></i> Cancle </button>
                    <button class="btn btn-success btn-sm" type="submit"><i class="mdi mdi-content-save"></i> Save </button>
                </div>
    		</div>
    	</div>
    	
	    	
</div>    
<?= $this->endSection() ?>