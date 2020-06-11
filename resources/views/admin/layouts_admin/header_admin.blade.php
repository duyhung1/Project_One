<div class="navbar navbar-expand-sm bg-light navbar-light d-flex justify-content-between header">
    <a href="#" class="navbar-brand " ><h2>{{ __('invariable_admin.header.admin')}}</h2></a>
    <div class="d-flex">
        <div class="leguage">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <!-- <i class="fas fa-user"></i> -->
            </a>
            <div class="dropdown-menu ">
                <a class="dropdown-item" href="{{ route('lang', ['lang' =>'en']) }}"><i class="fas fa-user"></i> EN</a>
                <a class="dropdown-item" href="{{ route('lang', ['lang' =>'vi']) }}"><i class="fas fa-cog"></i> VI</a>
            </div>
        </div>
        <div>
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-user">
                <a class="dropdown-item" href="#"><i class="fas fa-user"></i> {{ __('invariable_admin.header.profile_user')}}</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> {{ __('invariable_admin.header.setting_user')}}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> {{ __('invariable_admin.header.login_user')}}</a>
            </div>
        </div>
        
    </div>
    
</div>