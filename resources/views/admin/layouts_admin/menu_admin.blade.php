<div class="menu">
    <ul class="nav flex-column" id="side-menu">
        <li class="list-menu-bottom">
            <a href="#">
                <i class="fas fa-tachometer-alt"></i>
               {{ __('invariable_admin.menu.dasboard')}}
            </a>
        </li>
        <li class="list-menu-bottom user-list">
            <a href="#">
                <i class="fas fa-users"></i>
                {{ __('invariable_admin.menu.user')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <span class="fas fa-chevron-down arrow"></span>
            </a>
            <ul class="list-menu-top ">
                <li>
                    <a href="{{ route('admin_user')}}">{{ __('invariable_admin.menu.list_user')}}</a>
                </li>
                <li>
                    <a href="{{ route('admin.addUser')}}">{{ __('invariable_admin.menu.add_user')}}</a>
                </li>
            </ul>
        </li>
        <li class="list-menu-bottom category-list">
            <a href="#" ><i class="fas fa-list-alt"></i> 
            {{ __('invariable_admin.menu.category')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <span class="fas fa-chevron-down arrow"></span>
            </a>
            <ul class="list-menu-top ">
                <li>
                    <a href="#">{{ __('invariable_admin.menu.list_category')}}</a>
                </li>
                <li>
                    <a href="#">{{ __('invariable_admin.menu.add_category')}}</a>
                </li>
            </ul>
        </li>
        <li class="list-menu-bottom product-list">
            <a href="#" ><i class="fas fa-cube"></i> 
            {{ __('invariable_admin.menu.product')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <span class="fas fa-chevron-down arrow"></span>
            </a>
            <ul class="list-menu-top ">
                <li>
                    <a href="{{ route('admin.product')}}">{{ __('invariable_admin.menu.list_product')}}</a>
                </li>
                <li>
                    <a href="{{ route('admin.addProduct')}}">{{ __('invariable_admin.menu.add_product')}}</a>
                </li>
            </ul>
        </li>
        <li class="list-menu-bottom bill-list">
            <a href="#" ><i class="fas fa-file-invoice-dollar"></i> 
            {{ __('invariable_admin.menu.bill')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <!-- <span class="fas fa-chevron-down arrow"></span> -->
            </a>
        </li>
        <li class="list-menu-bottom news-list">
            <a href="#" ><i class="fas fa-newspaper"></i> 
            {{ __('invariable_admin.menu.news')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <span class="fas fa-chevron-down arrow"></span>
            </a>
            <ul class="list-menu-top ">
                <li>
                    <a href="#">{{ __('invariable_admin.menu.list_news')}}</a>
                </li>
                <li>
                    <a href="#">{{ __('invariable_admin.menu.add_news')}}</a>
                </li>
            </ul>
        </li>
        <li class="list-menu-bottom slide-list">
            <a href="#" ><i class="fas fa-images"></i> 
            {{ __('invariable_admin.menu.image')}}
                <!-- <span class="fas fa-chevron-left arrow"></span> -->
                <span class="fas fa-chevron-down arrow"></span>
            </a>
            <ul class="list-menu-top ">
                <li>
                    <a href="#">{{ __('invariable_admin.menu.list_image')}}</a>
                </li>
                <li>
                    <a href="#">{{ __('invariable_admin.menu.add_image')}}</a>
                </li>
            </ul>
        </li>
    </ul>
</div>