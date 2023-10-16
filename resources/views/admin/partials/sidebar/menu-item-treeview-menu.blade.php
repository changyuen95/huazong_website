<li id="aaa"  class="nav-item has-treeview $item['submenu_class']">

    {{-- Menu toggler --}}
    <a class="nav-link a a "
       href=""  >

        <i class="far fa-fw fa-circle text-black"></i>

        <p>
            Event
            <i class="fas fa-angle-left right"></i>

                
            
        </p>

    </a>

    {{-- Menu items --}}
    <ul class="nav nav-treeview">
    @include('admin.partials.sidebar.menu-item-link')

    </ul>

</li>
