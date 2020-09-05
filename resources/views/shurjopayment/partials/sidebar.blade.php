<aside class="app-sidebar">
      <div class="app-sidebar__user">

              <img class="app-sidebar__user-avatar" src="{{ asset('payment/images/userimage.jpg') }}" alt="Image">


        <div>
          <span class="text-info"></span>
          <p style="font-size:16px;" class="app-sidebar__user-name">{{Auth::guard('web')->user()->name}}</p>
        </div>
      </div>
      <ul class="app-menu">
            <li><a class="app-menu__item {{ Request::is('home*') ? 'active' : '' }}" href="{{url('/admin')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            {{-- <li><a class="app-menu__item" href="{{route('admit.index')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; <span class="app-menu__label">Admit Card</span></a></li> --}}

        <li class="treeview"><a class="app-menu__item " href="#" data-toggle="treeview"></i>&nbsp;<span class="app-menu__label text-warning">Sudent List</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('admin.student_list')}}"><i class="icon fa fa-angle-right"></i>Registared student</a></li>
                {{-- <li><a class="treeview-item" href="{{route('home')}}"><i class="icon fa fa-angle-right"></i>Paid Student</a></li> --}}
                {{-- <li><a class="treeview-item" href="{{route('home')}}"><i class="icon fa fa-angle-right"></i>Student Credential</a></li>
                <li><a class="treeview-item" href="{{route('home')}}"><i class="icon fa fa-angle-right"></i>Student Admit Card</a></li> --}}
            </ul>
          </li>
          <li class="treeview"><a class="app-menu__item " href="#" data-toggle="treeview"></i>&nbsp;<span class="app-menu__label text-warning">Exam</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon fa fa-angle-right"></i>Make Question</a></li>
                {{-- <li><a class="treeview-item" href="{{route('home')}}"><i class="icon fa fa-angle-right"></i>Paid Student</a></li> --}}
                <li><a class="treeview-item" href="{{route('admin.index')}}"><i class="icon fa fa-angle-right"></i>Student Result</a></li>
                <li><a class="treeview-item" href="{{route('admin.index')}}"><i class="icon fa fa-angle-right"></i>Publish Result</a></li>
            </ul>
          </li>

      </ul>
    </aside>
