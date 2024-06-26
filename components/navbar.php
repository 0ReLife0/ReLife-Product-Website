<header>
    <nav class="navbar navbar-expand-lg fixed-top overflow-hidden">
        <div class="container-fluid">
            <a class="navbar-logo-wrapper" href="./index.php">
                <img class="nav-logo" src="./assets/img/logo/ReLifeLogo.png" alt="ReLife">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-links" id="navbarToggler">
                <ul class=" navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item <?php echo $activePage == 'home' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./">Home</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'product' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./product">Product</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'overons' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./overons">Over Ons</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'visie' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./vision">Visie</a>
                    </li>
                    <li class="nav-item <?php echo $activePage == 'contact' ? 'active' : ''; ?>">
                        <a class="nav-link" href="./contact">Contact</a>
                    </li>
                    <li class="nav-item nav-item-cta">
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                            <button class="btn btn-success nav-item-cta-child">DOWNLOAD APP</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    </nav>
</header>

<body>