<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="../index.html"><img src="../assets/images/brand/logo/logo.svg" alt="" /></a>
            <div class="order-lg-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-2">
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                                <i class="bi theme-icon-active"></i>
                                <span class="visually-hidden bs-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                <li>
                                    <a href="{{ url('/catalog') }}">
                                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                            <i class="bi theme-icon bi-sun-fill"></i>
                                            <span class="ms-2">Каталог</span>
                                        </button>
                                    </a>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <span class="ms-2">Избранное</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <span class="ms-2">Корзина</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-outline-primary shadow-sm me-1">Войти</a>
                        <a href="#" class="btn btn-primary d-none d-md-block">Зарегистрироваться</a>
                    </div>
                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <h5>
                            <a class="nav-link active" aria-current="page" href="{{ url('/catalog') }}">FinishMart</a>
                        </h5>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/catalog') }}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Избранное</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Корзина</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                    </li> -->
                </ul>
                <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center" method="POST" id="search_good" action=" {{ route('search_good_process') }}">
                @csrf
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <input type="search" name="fragment" class="form-control ps-6" placeholder="Найти" />
                </form>
            </div>
        </div>
    </nav>
</header>
<br>




<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">
    Dropdown
</a>
<ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarDropdown">
    <li class="dropdown-submenu dropend">
        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Dropdown</a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="../pages/course-category.html">Action Link</a>
            </li>
            <li>
                <a href="#!" class="dropdown-item">Anthor Action</a>
            </li>
            <li>
                <a href="#!" class="dropdown-item">Something else here</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#!" class="dropdown-item">Action Link</a>
    </li>
    <li>
        <a href="#!" class="dropdown-item">Anthor Action</a>
    </li>
    <li>
        <a href="#!" class="dropdown-item">Something else here</a>
    </li>
</ul> -->