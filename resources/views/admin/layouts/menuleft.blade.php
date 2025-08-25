            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>
                            <li><a href="{{ route('dashboard') }}" class="waves-effect"><i class="bx bx bx-home-circle"></i><span key="t-file-manager">Dashboard</span></a></li>
                            <li class="menu-title" key="t-apps">Apps</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-briefcase-alt-2"></i><span key="t-projects">Projetos</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ ('adminProjects.index') }}" key="t-p-grid">Projetos</a></li>
                                    <li><a href="javascript: void(0);" key="t-p-list">Projects List</a></li>
                                    <li><a href="javascript: void(0);" key="t-p-overview">Project Overview</a></li>
                                    <li><a href="javascript: void(0);" key="t-create-new">Create New</a></li>
                                </ul>
                            </li>
@can('access')
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bxs-user-detail"></i><span key="t-contacts">Usuários</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ ('adminUser.index') }}" key="t-user-grid">Usuários</a></li>
                                    <li><a href="javascript: void(0);" key="t-user-list">Users List</a></li>
                                    <li><a href="javascript: void(0);" key="t-profile">Profile</a></li>
                                </ul>
                            </li>
@endcan
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="bx bx-detail"></i><span key="t-blog">Blog</span></a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="javascript: void(0);" key="t-blog-list">Blog List</a></li>
                                    <li><a href="javascript: void(0);" key="t-blog-grid">Blog Grid</a></li>
                                    <li><a href="javascript: void(0);" key="t-blog-details">Blog Details</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
