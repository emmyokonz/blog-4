<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">All Comments <small>10</small></h4>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-sm btn-outline-danger"><i class="mdi mdi-delete"></i> delete</button>
            <button type="button" class="btn btn-sm btn-outline-success"><i class="mdi mdi-check"></i> Publish</button>
            <button type="button" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-close"></i> Unpublish</button>
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
                            <th scope="col">Comment</th>
                            <th scope="col">Post</th>
                            <th scope="col">Date</th>
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
                            <td width="50%">
                            	<div class="font-16">Wordpress Tutorial for biginers</div>
                            	<span href=""><em class="text-info">name </em> | </span>
                            	<span href=""><em class="text-info">email</em> | </span>
                            	<span href=""><em class="text-info">phone</em> </span>
                            </td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td align="right">
            					<button type="button" class="btn btn-sm btn-success"><i class="mdi mdi-check"></i> Publish</button>
                            	<button type="button" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label class="customcheckbox">
                                    <input type="checkbox" class="listCheckbox">
                                    <span class="checkmark"></span>
                                </label>
                            </th>
                            <td width="50%">
                            	<div class="font-16">Wordpress Tutorial for biginers</div>
                            	<a href=""><em class="text-info">Tutorial</em></a>
                            </td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td align="right">
            					<button type="button" class="btn btn-sm btn-success"><i class="mdi mdi-check"></i> Publish</button>
                            	<button type="button" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </div>
</div>    
<?= $this->endSection() ?>