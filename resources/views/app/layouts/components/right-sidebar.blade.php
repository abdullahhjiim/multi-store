					<!-- Right-sidebar-->
					<div class="sidebar sidebar-right sidebar-animate">
						<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
							<div class="tab-content border-top">
								<div class="tab-pane active " id="tab">
									<div class="card-body p-0">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="{{URL::asset('assets/images/users/avatars/19.png')}}" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<div class="dropdown-item text-center font-weight-semibold user h3 mb-0">{{ ucfirst(optional(auth()->user())->name) }}</div>
{{--											<small>Web Designer</small>--}}
											<div class="card-body">
												{{--<div class="form-group ">
													<label class="form-label  text-left">Offline/Online</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one"></option>
														<option value="1">Online</option>
														<option value="2">Offline</option>
													</select>
												</div>--}}
												{{--<div class="form-group ">
													<label class="form-label text-left">Website</label>
													<select class="form-control select2 " data-placeholder="Choose one">
														<option label="Choose one">
														</option>
														<option value="1">Spruko.com</option>
														<option value="2">sprukosoft.com</option>
														<option value="3">sprukotechnologies.com</option>
														<option value="4">sprukoinfo.com</option>
														<option value="5">sprukotech.com</option>
													</select>
												</div>--}}
											</div>
										</div>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-4 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
													<div>Settings</div>
												</div>
												<div class="col-4 text-center">
													<form action="{{ url('logout') }}" method="post">
														@csrf
														<button type="submit"><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></button>
														<div>Sign out</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- End Rightsidebar-->