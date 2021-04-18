<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Category <small>category title</small></h4>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
		            <button type="button" class="btn btn-sm btn-outline-danger"><i class="mdi mdi-delete"></i> delete</button>
				</div>
				<div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <label class="customcheckbox m-b-20">
                                    <input type="checkbox" id="mainCheckbox">
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col" align="right"></th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox">
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td>php</td>
                            <td>Internet Explorer 4.0</td>
                            <td align="right">
            					<button type="button" class="btn btn-sm btn-success"><i class="mdi mdi-pencil"></i> Edit</button>
                            	<button type="button" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<div class="form-group ">
	                    <label>Title </label>
	                    <input name="slug" class="form-control" placeholder="Title"/>
	                </div>
	    			<div class="form-group ">
	                    <label>Description </label>
	                    <textarea class="form-control" rows="8" name="description" placeholder="Description"></textarea>
	                </div>
	                <div class="text-left">
	                    <button class="btn btn-secondary btn-sm" type="submit"><i class="mdi mdi-reply"></i> Cancle </button>
	                    <button class="btn btn-success btn-sm" type="submit"><i class="mdi mdi-content-save"></i> Update </button>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>    
<?= $this->endSection() ?><?php

?>