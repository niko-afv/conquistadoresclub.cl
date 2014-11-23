<nav class="navbar-default navbar-static-side fixed-sidebar" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/backend/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->nombre }}</strong>
                             </span> <span class="text-muted text-xs block">Administrador<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Perfil</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>

                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-check-square"></i> <span class="nav-label">Especialidades</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/especialidad/listar"><i class="fa fa-list"></i>Listar</a></li>
                            <li><a href="/admin/especialidad/crear"> <i class="fa fa-plus-square"></i>Crear</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-file-zip-o"></i> <span class="nav-label">Recursos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/recursos/listar"><i class="fa fa-list"></i>Listar</span></a>
                                <a href="/admin/recursos/crear"><i class="fa fa-plus-square"></i>Crear</span></a>
                            </li>                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-text-width"></i> <span class="nav-label">Blog</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/admin/blog/listar"><i class="fa fa-list"></i>Listar Posts</span></a>
                                <a href="/admin/blog/crear"><i class="fa fa-plus-square"></i>Crear</span></a>
                            </li>                            
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>