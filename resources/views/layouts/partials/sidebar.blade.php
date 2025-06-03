<nav class="navbar navbar-light navbar-vertical navbar-card navbar-expand-xl">
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <div class="d-flex align-items-center py-3">
                {{-- <img class="me-2" src="{{ asset('assets/images/favicons/logo.png') }}" alt="" width="40" /> --}}
                <x-icons.logo class="me-2" size="40" />
                <span class="font-sans-serif text-primary">Expedite</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <x-nav-group id="e-learning" title="Dashborad" icon="fas fa-chart-pie">
                    <x-nav-item>
                        <x-nav-link href="{{route('admin.dashboard') }}" :active="isActive('admin.dashboard')">Admin Dashboard</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.user') }}" :active="isActive('admin.user')">User Dashboard</x-nav-link>
                    </x-nav-item>
                </x-nav-group>
                <x-nav-section title="App">
                    <x-nav-group id="email" title="User Management" icon="fas fa-users" :expanded="isActive(['admin.users', 'admin.roles'])">
                        <x-nav-item>
                            <x-nav-link :href="route('admin.users.index')" :active="isActive('admin.users')" >Users</x-nav-link>
                        </x-nav-item>
                        <x-nav-item>
                            <x-nav-link href="{{ route('admin.roles.index') }}" :active="isActive('admin.roles')" >Roles</x-nav-link>
                        </x-nav-item>
                    </x-nav-group>

                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.state-fees.index') }}" :active="isActive('admin.state-fees')" icon="fas fa-calendar-alt"  >States</x-nav-link>
                    </x-nav-item>

                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.categories.index') }}" :active="isActive('admin.categories')" icon="fas fa-bars"  >Categories</x-nav-link>
                    </x-nav-item>

                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.packages.index') }}" icon="fas fa-bars" :active="isActive('admin.packages')" >Packages</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.notification') }}" icon="fas fa-envelope-open" :active="isActive('notification')" >Notifications</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.recommendations') }}" icon="fas fa-bars" :active="isActive('recommendations')" >Recommendations</x-nav-link>
                    </x-nav-item>
                </x-nav-section>

                <x-nav-group id="company" title="Company Details" icon="fas fa-envelope-open" :active="isActive('admin.payments')" >
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.companyinfo') }}">Company Info</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.registered') }}">Registered Agent</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.orderhistory') }}">Order History/Receipts</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.compliance') }}">Compliance</x-nav-link>
                    </x-nav-item>
                </x-nav-group>

                <x-nav-item>
                    <x-nav-link href="{{ route('admin.single') }}" icon="fab fa-trello" :active="isActive('single')">Single Services</x-nav-link>
                </x-nav-item>

                <x-nav-item>
                    <x-nav-link href="{{ route('admin.taxfiling') }}" icon="fab fa-trello" :active="isActive('taxfiling')">Tax Filing</x-nav-link>
                </x-nav-item>

                <x-nav-item>
                    <x-nav-link href="{{ route('admin.business') }}" icon="fas fa-rocket" :active="isActive('business')"> My Business
                    </x-nav-link>
                </x-nav-item>

                <x-nav-item>
                        <x-nav-link href="{{ route('admin.orderhistorypay') }}"  icon="fas fa-calendar-day" :active="isActive('orderhistorypay')">Order History</x-nav-link>
                </x-nav-item>
                <x-nav-item>
                    <x-nav-link href="{{ route('admin.ticket') }}" icon="fas fa-ticket-alt">Support Ticket</x-nav-link>
                </x-nav-item>
                <x-nav-item>
                    <x-nav-link href="{{ route('admin.affiliate') }}" icon="fas fa-share-alt">Affiliate</x-nav-link>
                </x-nav-item>


                <x-nav-section title="Settings and others">
                    <x-nav-item>
                        <x-nav-link href="{{ route('admin.user.profile') }}" icon="fas fa-wrench">User Profite
                        </x-nav-link>
                    </x-nav-item>

                    <x-nav-group id="customization" title="Customization" icon="fas fa-wrench">
                        {{-- Documentation customization items would go here --}}
                    </x-nav-group>

                    <x-nav-item>
                        <x-nav-link href="../documentation/faq.html" icon="fas fa-question-circle">Faq</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="../documentation/gulp.html" icon="fab fa-gulp">Gulp</x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="../documentation/design-file.html" icon="fas fa-palette">Design File
                        </x-nav-link>
                    </x-nav-item>
                    <x-nav-item>
                        <x-nav-link href="../changelog.html" icon="fas fa-code-branch">Changelog</x-nav-link>
                    </x-nav-item>
                </x-nav-section>
            </ul>
        </div>
    </div>
</nav>
