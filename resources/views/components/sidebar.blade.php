<div class="sidebar d-flex flex-column p-3">

    <!-- logo -->
    <div class="d-flex align-items-center mb-4">
        <div class="bg-white rounded-circle me-2" style="width:35px;height:35px;"></div>
        <h5 class="text-white mb-0 fw-semibold">Savely</h5>
    </div>

    <!-- menu -->
    <ul class="nav flex-column gap-2">

        <li class="nav-item">
            <a href="{{ route('dashboard') }}"
               class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
               
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>

            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('expense.index') }}"
               class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('expense.*') ? 'active' : '' }}">
               
                <i class="bi bi-wallet2"></i>
                <span>Expense</span>

            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('goals') }}"
               class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('goals') ? 'active' : '' }}">
               
                <i class="bi bi-bullseye"></i>
                <span>Goals</span>

            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('history') }}"
               class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('history') ? 'active' : '' }}">
               
                <i class="bi bi-clock-history"></i>
                <span>History</span>

            </a>
        </li>

    </ul>

</div>