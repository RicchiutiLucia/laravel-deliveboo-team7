<div class="d-flex flex-column py-3 bg-body-tertiary border my-5">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{Route::currentRouteName() == 'admin.dashboard'?'active':''}}" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.dishes.index')}}" class="nav-link @if (Route::currentRouteName() == 'admin.dishes.index') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Piatti
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.dishes.create')}}" class="nav-link @if (Route::currentRouteName() == 'admin.dishes.create') active @endif">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Crea nuovo piatto
            </a>
        </li>

    </ul>
</div>