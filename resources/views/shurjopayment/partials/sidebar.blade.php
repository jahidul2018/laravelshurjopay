<aside class="app-sidebar">
      <div class="app-sidebar__user">

              <img class="app-sidebar__user-avatar" src="{{ asset('payment/images/userimage.jpg') }}" alt="Image">


        <div>
          <span class="text-info">Welcome,</span>
          <p style="font-size:16px;" class="app-sidebar__user-name">{{Auth::guard('web')->user()->name}}</p>
        </div>
      </div>
      <ul class="app-menu">
            <li><a class="app-menu__item {{ Request::is('home*') ? 'active' : '' }}" href="{{url('/home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item" href="{{route('admit.index')}}"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; <span class="app-menu__label">Admit Card</span></a></li>

        <li class="treeview"><a class="app-menu__item " href="#" data-toggle="treeview"></i>&nbsp;<span class="app-menu__label text-warning">Prifile</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="#"><i class="icon fa fa-angle-right"></i>Privacy</a></li>
                <li><a class="treeview-item" href="{{route('home')}}"><i class="icon fa fa-angle-right"></i>Profile</a></li>
            </ul>
          </li>

      </ul>
    </aside>
