<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="index.html"  aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"  aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span class="hide-menu">Charts </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="{{url('user')}}" class="sidebar-link"><span class="hide-menu"> All Users </span></a> </li>
                        <li class="sidebar-item"><a href="chart-chart-js.html" class="sidebar-link"><span class="hide-menu"> ChartJs </span></a> </li>
                        <li class="sidebar-item"><a href="chart-knob.html" class="sidebar-link"><span  class="hide-menu"> Knob Chart  </span></a> </li>
                    </ul>
                </li>
            </ul>

            <ul id="sidebarnav">
                <li class="list-divider"></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"  aria-expanded="false"><i class="fas fa-icons"></i><span class="hide-menu">Categories </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        @foreach($categories as $cat)
                            <li class="sidebar-item"><a href="{{url('/newsCateg', $cat->id)}}" class="sidebar-link"><span class="hide-menu"> {{$cat->name}}</span></a> </li>
                        @endforeach
                        <li class="sidebar-item"><a href="{{route('category.create')}}" class="sidebar-link"><span class="hide-menu">Add Category <i class="fas fa-plus-circle"></i></span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
