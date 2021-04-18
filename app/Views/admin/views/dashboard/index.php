<?= $this->extend('admin/layouts/default') ?>

<?= $this->section('body') ?>

<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Welcome to Application Name</h5>
                    <p>We have gardered some links to help you set up your blog very fast. </p>
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3" >
                            <a class="card card-hover"  href="">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-book-plus"></i></h1>
                                    <h6 class="text-white">Create a Page</h6>
                                </div>
                            </a>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                            <a class="card card-hover"  href="">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-note-plus"></i></h1>
                                    <h6 class="text-white">Create a Post</h6>
                                </div>
                        	</a>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                            <a class="card card-hover" href="">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-menu"></i></h1>
                                    <h6 class="text-white">Set up menu</h6>
                                </div>
                            </a>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3" >
                            <a class="card card-hover" href="">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-plus"></i></h1>
                                    <h6 class="text-white">Add Users</h6>
                                </div>
                            </a>
                        </div>
                    </div>
					<hr />
            		<div class="text-right">
                        <button class="btn btn-dark btn-sm" type="submit"><i class="mdi mdi-close-outline"></i> Dismiss setup </button>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
	<div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white">10</h1>
                    <h6 class="text-white">Total Posts</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">4</h1>
                    <h6 class="text-white">Total Pages</h6>
                </div>
            </div>
        </div>
         <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white">60</h1>
                    <h6 class="text-white">Comments</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-danger text-center">
                    <h1 class="font-light text-white">10</h1>
                    <h6 class="text-white">Total Users</h6>
                </div>
            </div>
        </div>
    </div>
	
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Latest Posts</h4>
                            </div>
                            <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="10dc47b0-d5dc-c569-00fe-8cdd61ab2c87">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                               
                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
		</div>
	</div>
</div>    
<?= $this->endSection() ?>