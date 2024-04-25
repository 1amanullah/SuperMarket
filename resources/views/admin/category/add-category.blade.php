 @extends('admin.layouts.index')
 @section('menubar')
 @section('navbar')
 @include('admin.css.css')
 @include('admin.js.admin-login')
 @include('admin.bootstrap.bootstrap')
       <div id="layoutSidenav">   
            <div id="layoutSidenav_content">
			@include('admin.layouts.errormessage')

     			<main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Categories</h2>
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('category')}}">Categories</a></li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                        <div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="card card-static-2 mb-30">
									<div class="card-title-2">
										<h4>Add New Category</h4>
									</div>
									<div class="card-body-table">
										<div class="news-content-right pd-20">
										   <form action="{{url('/admin/category')}}" method="POST" enctype="multipart/form-data">
										     @csrf 
											 <div class="form-group">
												<label class="form-label">Name*</label>
												<input type="text" name="name" class="form-control" placeholder="Category Name">
											  </div>
											 <div class="form-group">
												<label class="form-label">Status*</label>
												<select id="status" name="status" class="form-control">
													<option selected hidden>Status</option>
												    <option>Active</option>
													<option>Inactive</option>
												</select>
											 </div>
											 <div class="form-group">
												<label class="form-label">Category Image*</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" name="image" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
														<label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
													</div>
												</div>
												<div class="add-cate-img">
													<img src="" id="image-preview" alt="" style="display: none;">
												</div>
										     </div>
											 <div class="form-group">
												<label class="form-label">Description*</label>
												<div class="card card-editor">
													<div class="content-editor">
														<textarea class="text-control" name="description" placeholder="Enter Description"></textarea>
													</div>
												</div>
											 </div>
											 <button class="save-btn hover-btn" type="submit">Add New Category</button>
										    </form>
										</div> 
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-footer mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
                            <div class="footer-links">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
	  
@endsection
@push('script')
<script>
    document.getElementById('inputGroupFile04').addEventListener('change', function(event) {
        var reader = new FileReader();

        reader.onload = function() {
            var img = document.getElementById('image-preview');
            img.src = reader.result;
            img.style.display = 'block';
        };

        reader.readAsDataURL(event.target.files[0]);
    });
</script>

@endpush