<div class="sidenav">
    @can('manage-users')
        <div> <a class="navbar-item" href="{{ route('admin.users.index') }}">User Management

            </a> </div> @endcan
        @can('adman')
            <div> <a class="navbar-item" href="/properties">List of all properties

                </a></div>
            <div> <a class="navbar-item" href="/faqs/create">Add Faq

                </a></div>
            <div> <a class="navbar-item" href="/properties/create">Add Property

                </a></div>
            <div> <a class="navbar-item" href="/blogs/create">Add Blog Post
                </a></div>

            <div> <a class="navbar-item" href="/blogs">List of all Blog Posts
                </a></div>
        @endcan
</div>
