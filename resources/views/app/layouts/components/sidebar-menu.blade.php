				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar toggle-sidebar">
					<div class="app-sidebar__user">
						<div class="user-body">
							<img src="{{URL::asset('assets/images/users/avatars/2.png')}}" alt="profile-user" class="rounded-circle w-25">
						</div>
						<div class="user-info">
							<a href="#" class=""><span class="app-sidebar__user-name font-weight-semibold">{{ ucfirst(optional(auth()->user())->name) }}</span><br>
{{--								<span class="text-muted app-sidebar__user-designation text-sm"> Web Designer</span>--}}
							</a>
						</div>
					</div>
					<ul class="side-menu toggle-menu">
						<li>
							<a class="side-menu__item" href="{{url('dashboard')}}"><i class="side-menu__icon fa fa-tv"></i><span class="side-menu__label">Dashboard</span></a>
						</li>



					</ul>
				</aside>
				<!--sidemenu end-->
