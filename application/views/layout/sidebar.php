<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <span class="align-middle">Portofilio</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="<?php echo site_url('dashboard'); ?>">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo site_url('category'); ?>">
                            <i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo site_url('works'); ?>">
                            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Works</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo site_url('Posts'); ?>">
                            <i class="align-middle" data-feather="send"></i> <span class="align-middle">Post</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Main
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?php echo site_url('home'); ?>">
                            <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            CV
                        </a>
                        <ul class="dropdown-menu dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo site_url('social'); ?>">Social Media</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('educations'); ?>">Educations</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('experiences'); ?>">Experiences</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>