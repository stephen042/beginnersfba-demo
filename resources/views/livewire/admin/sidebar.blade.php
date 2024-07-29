<div>
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin_dashboard') ? '' : 'collapsed' }}"
                    href="{{route('admin_dashboard')}}" wire:navigate >
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <div class="nav-link">
                    {{-- sign out --}}
                    <livewire:user.logout />
                </div>

            </li>
            <!-- End Dashboard Nav -->

        </ul>

    </aside>
</div>