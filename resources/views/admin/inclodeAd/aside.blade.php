<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"><a class="sidebar-link sidebar-link" href="{{url('/news')}}"  aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
            </ul>

            <ul id="sidebarnav">
                <li class="list-divider"></li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow" href="javascript:void(0)"  aria-expanded="false"><i class="fas fa-icons"></i><span class="hide-menu">Categories </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">

                        @foreach($categories as $cat)
                            <li class="sidebar-item d-flex"><a href="{{url('/newsCateg', $cat->id)}}" class="sidebar-link text-dark"><span class="hide-menu"> {{$cat->name}} </span></a>
                                <form action="{{route('category.destroy',$cat->id)}}" method='post' style='display: contents'>
                                    @csrf
                                    @method('DELETE')
                                    <button style="background: none;border: none;"><i class="far fa-trash-alt" style="color: red"></i></button>
                                </form>
                            </li>
                        @endforeach

                        <li class="sidebar-item"><a href="{{route('category.create')}}" class="sidebar-link text-dark"><span class="hide-menu">Add Category <i class="fas fa-plus-circle"></i></span></a></li>
                    </ul>
                </li>
            </ul>

            <ul id="sidebarnav">
                <li class="sidebar-item"><a class="sidebar-link sidebar-link text-dark" href="{{route('news.index')}}"  aria-expanded="false"><i class="far fa-newspaper"></i><span class="hide-menu">All News</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link sidebar-link text-dark" href="{{route('news.create')}}"  aria-expanded="false"><i class="fas fa-pen-alt"></i><span class="hide-menu">Add News</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link sidebar-link text-dark" href="{{route('user.index')}}" class="sidebar-link text-dark"><span class="hide-menu"> All Users </span></a></a></li>

            </ul>
        </nav>
    </div>
</aside>
