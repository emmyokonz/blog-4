<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Menus</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="card">
		<div class="card-body border-bottom">
			<div class="form-group ">
		        <label>Menu Title </label>
		        <input class="form-control" rows="8" name="title" placeholder="Menu Title">
		    </div>
	    </div>
	    <div class="row">
	    	<div class="col-lg-3 col-md-4">
	    		<div class="card-body">
	    			<div class="accordion" >
	    				<div class="card m-b-0">
	    					<ul class="list-group list-style-none accordion" id="menu">
                                <li class="d-flex no-block list-group-item">
                                    <div>
                                        <span class="">Home</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <span class="badge  badge-primary">Add</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                	<span href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
	                                    <span class="accord-parent"> Posts</span>
	                                </span>
	                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#menu" style="">

									<ul class="list-style-none ">
		                                <li class="d-flex no-block">
		                                    <div><span class="text-muted">revolution of it world</span></div>
		                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
		                                </li>

		                                <li class="d-flex no-block">
		                                    <div><span class="text-muted">PHP for mobile dev.</span></div>
		                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
		                                </li>

		                                <li class="d-flex no-block">
		                                    <div><span class="text-muted">dolor sit amet</span></div>
		                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
		                                </li>
		                            </ul>

	                            </div>
                                </li>
                                <li class="list-group-item">
                                	<span href="javascript:void(0)" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
	                                    <span class="accord-parent"> Categories</span>
	                                </span>
	                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#menu" style="">

									<ul class="list-style-none ">
		                                <li class="d-flex no-block">
		                                    <div><span class="text-muted">codeigniter</span></div>
		                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
		                                </li>
		                                <li class="d-flex no-block">
		                                    <div><span class="text-muted">PHP</span></div>
		                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
		                                </li>
		                            </ul>

	                            </div>
                                </li>
                                <li class="list-group-item">
                                	<span href="javascript:void(0)" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
	                                    <span class="accord-parent"> Pages</span>
	                                </span>
	                                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#menu" style="">
										<ul class="list-style-none ">
			                                <li class="d-flex no-block">
			                                    <div><span class="text-muted">About Us</span></div>
			                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
			                                </li>
			                                <li class="d-flex no-block">
			                                    <div><span class="text-muted">Contact Us</span></div>
			                                    <div class="ml-auto"><div class="tetx-right"><span class="badge  badge-primary">Add</span></div></div>
			                                </li>
			                            </ul>

		                            </div>
                                </li>
                                <li class="">
                               	 	<div class="input-group"><input name="custom_link" class="form-control" placeholder="Enter Custom Link"/></div>
                               	 	<div class="input-group"><input name="custom_text" class="form-control" placeholder="Enter Custom Text"/></div>
                                   	<div class="btn btn-sm btn-primary btn-block">Add</div>
                                </li>
                                
                            </ul>
						</div>
	    			</div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-lg-9 col-md-8">
	    		<div class="card-body">
	    		
		    		<ul class="list-group selected-menus">
		    			<li class="list-group-item"><i class="mdi mdi-cursor-move"></i> Home <div class="float-right"><span class="badge badge-danger link"><i class="mdi mdi-close"></i> Remove</span></div></li>
		    			<li class="list-group-item"><i class="mdi mdi-cursor-move"></i> About us <div class="float-right"><span class="badge badge-danger link"><i class="mdi mdi-close"></i> Remove</span></div></li>
		    			<li class="list-group-item"><i class="mdi mdi-cursor-move"></i> Contact us <div class="float-right"><span class="badge badge-danger link"><i class="mdi mdi-close"></i> Remove</span></div></li>
		    		</ul>
	    		</div>
	    	</div>
	     </div>
    	<div class="card-body border-bottom border-top">
			<div class="text-right">
                <button class="btn btn-secondary btn-sm" type="submit"><i class="mdi mdi-reply"></i> Cancle </button>
                <button class="btn btn-success btn-sm" type="submit"><i class="mdi mdi-content-save"></i> save </button>
            </div>
	    </div>
	</div>
	
	<div class="card m-b-0">
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
                            <th scope="col">Menus</th>
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
                            <td>Primary</td>
                            <td>
                            	<em class="badge badge-dark">Home</em>
                            	<em class="badge badge-dark">Abount us</em>
                            	<em class="badge badge-dark">Contact us</em>
                            	<em class="badge badge-dark">PHP</em>
                            	<em class="badge badge-dark">Codeigniter</em>
                            	
                            </td>
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
<?= $this->endSection() ?>