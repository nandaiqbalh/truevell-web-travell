@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{url('admin/dashboard')}}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">
						  <img src="{{asset('backend/images/logo-light.png')}}" alt="">
						  <h3><b>Truevell</b></h3>
					 </div>
				</a>
			</div>
        </div>

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">

		<li class="{{($route == 'admin.dashboard') ? 'active' : ''}}">
            <a href="{{url('/admin/dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>
{{--
        <li class="{{($route == 'profiles.index') ? 'active' : ''}}">
            <a href="{{route('profiles.index')}}">
            <i data-feather="zap"></i>
			<span>Village Profile</span>
          </a>
        </li> --}}

        {{-- <li class="treeview {{($prefix == '/admin/programs')?'active' : ''}}" >
            <a href="#">
              <i data-feather="server"></i>
              <span>Program</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{($route == 'programs.index') || ($route == 'programs.edit') || ($route == 'programs.create') ? 'active' : ''}}"><a href="{{route('programs.index')}}"><i class="ti-more"></i>Program</a></li>
                <li class="{{($route == 'program-category.index') || ($route == 'program-category.edit') || ($route == 'program-category.create')  ? 'active' : ''}}"><a href="{{route('program-category.index')}}"><i class="ti-more"></i>Program Category</a></li>
            </ul>
        </li> --}}

      </ul>
    </section>

	<div class="sidebar-footer">
		<!-- item-->
		<a href="{{route('admin.logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>
