<aside id="sidebar-offcanvas">

    @foreach ($menuItems as $mi => $menuItem)

        <h6 class="col-md-12"><b>{{ $menuItems[$mi]->typeName }}</b></h6>

        @include('partials.sidebar-items')

    @endforeach

</aside>
