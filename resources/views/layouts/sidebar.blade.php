<div class="sidebar d-flex flex-column p-3">

    {{-- Logo --}}
    <div class="d-flex align-items-center mb-4">
        <div class="bg-white rounded-circle me-2" style="width:35px;height:35px;"></div>
        <h5 class="text-white mb-0">Savely</h5>
    </div>

    {{-- Menu --}}
    <ul class="nav flex-column gap-2">

        <li>
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                Expense
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                Budget
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                Saving
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                Goals
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                Challenges
            </a>
        </li>

        <li>
            <a href="#" class="nav-link">
                History
            </a>
        </li>

    </ul>

</div>