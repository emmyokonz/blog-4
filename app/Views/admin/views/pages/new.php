<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Create New Page </h4>
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
		                    <label>Page Title </label>
		                    <input type="text" name="Page_title" class="form-control" id="Page-title" placeholder="Page Title">
		                </div>
						<div class="form-group m-t-20">
		                    <label>Page Content </label>
		                   	<textarea rows="15" class="form-control" ></textarea>
		                </div>
	    			</div>
		    		<div class="col-lg-4">
		    			<div class="form-group ">
		                    <label>Publish Page Now </label>
		                    <select type="text" name="publish" class="form-control" id="publish">
		                    	<option value=""></option>
		                    	<option value="0">No</option>
		                    	<option value="1">Yes</option>
		                    </select>
		                </div>
		    			<div class="form-group ">
		                    <label>Page Slug </label>
		                    <input name="slug" class="form-control" placeholder="Page Slug"/>
		                </div>
		    			<div class="form-group ">
		                    <label>Tags </label>
		                    <input name="tags" class="form-control" placeholder="Enter Page tags"/>
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