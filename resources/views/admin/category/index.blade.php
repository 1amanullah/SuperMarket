@extends('admin.layouts.index')
@section('menubar')
@section('navbar')
@include('admin.css.css')
@include('admin.js.js')

      <div id="layoutSidenav">
           <div id="layoutSidenav_content">
			@include('admin.layouts.errormessage')
                <main>
                    <div class="container-fluid">
                        <h2 class="mt-30 page-title">Categories</h2>
					 <form action="{{ route('bulkAction') }}">
                      @csrf
                        <ol class="breadcrumb mb-30">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                        <div class="row justify-content-between">
							<div class="col-lg-12">
								<a href="{{route('category_add')}}" class="add-btn hover-btn">Add New</a>
							</div>
							<div class="col-lg-3 col-md-4">
						     
								<div class="bulk-section mt-30">
									<div class="input-group">
										<select id="action" name="action" class="form-control">
											<option selected hidden>Bulk Actions</option>
											<option value="1">Active</option>
											<option value="2">Inactive</option>
											<option value="3">Delete</option>
										</select>
										<div class="input-group-append">
											<button class="status-btn hover-btn" type="submit">Apply</button>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-6">
								<div class="bulk-section mt-30">
									<div class="search-by-name-input">
									   
										<input type="text" name="search" class="form-control" value = "{{request('search')}}"  placeholder="Search">
									   
									   
									</div>
									<div class="input-group">
										<select id="categeory" name="categeory" class="form-control">
											<option>Active</option>
											<option>Inactive</option>
										</select>
										<div class="input-group-append">
										    
											<button class="status-btn hover-btn" name="search" type="submit">Search Category</button>
												

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card card-static-2 mt-30 mb-30">
									<div class="card-title-2">
										<h4>All Categories</h4>
									</div>
									<div class="card-body-table">
										<div class="table-responsive">
											<table class="table ucp-table table-hover">
												<thead>
													<tr>
														<th style="width:60px"><input type="checkbox"  class="check-all"></th>
														<th style="width:60px">ID</th>
														<th style="width:130px">Image</th>
														<th>Name</th>
														<th>Description</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												 
													@foreach ($categories as $category)
													<tr>
														<td><input type="checkbox" name="selected_ids[]" class="check-item"></td>
														<td>{{$category->id}}</td>
														<td>
															<div class="cate-img">
																<img src="{{asset('images/categories/' . $category->image)}}" alt="">
															</div>
														</td>
														<td>{{$category->name}}</td>
														<td>{{$category->description}}</td>
														<td><span class="badge-item badge-status">{{$category->status}}</span></td>
														<td class="action-btns">
															<a href="{{route('category_edit',$category->id)}}" class="edit-btn"><i class="bi bi-pencil-square"></i></i> Edit</a>
														</td>
													</tr>	
													
													@endforeach

												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
                        </div>
					 </form>

                    </div>
                </main>
				<footer class="py-4 bg-footer" style="margin-bottom:0;">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted-1">© 2024 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
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



 $(".check-all").click(function () {
    $(".check-item").prop('checked', $(this).prop('checked'));
});

</script>	
@endpush