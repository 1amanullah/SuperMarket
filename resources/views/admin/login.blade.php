@include('admin.layouts.errormessage')
@extends('admin.layouts.login')
@section('content')
@include('admin.css.css')
@include('admin.bootstrap.bootstrap')
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header card-sign-header">
										<h3 class="text-center font-weight-light my-4">Login</h3>
									</div>
                                    <div class="card-body">
                                        
                                        <form action="{{route('admin.login')}}" method='post'>
                                            @csrf
                                            <div class="form-group">
												<label class="form-label" for="inputEmailAddress">Email*</label>
												<input class="form-control py-3" name="email" id="inputEmailAddress" type="email" placeholder="Enter email address">
											</div>
                                            <div class="form-group">
												<label class="form-label" for="inputPassword">Password*</label>
												<input class="form-control py-3" name="password" id="inputPassword" type="password" placeholder="Enter password">
											</div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox">
													<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
													<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
												</div>
                                            </div> -->
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
												<button class="btn btn-sign hover-btn">Login</button>
											</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
		@include('admin.js.js')		
		
@endsection