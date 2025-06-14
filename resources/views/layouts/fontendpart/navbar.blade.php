<!-- Header Section -->
    <header>

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <div class="navbar-logo" >
                    <img style="height: 50px;" src="{{asset('assets/images/funnel/Logo.png')}}" alt="Logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll navbar-menu" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item"><a  class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a  class="nav-link" href="{{ route('pricing') }}">Pricing <span class="badge-new"> new</span> </a></li>
                        <li class="nav-item"><a  class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        <li class="nav-item"><a  class="nav-link" href="{{ route('login') }}">Login/Dashboard</a></li>
                       <!--------- <li class="button-li">
                            <button class="estimate-button">
                                <a href="deshboard.html"><span style="color:white;border-radius: 40px;background-color: #172155;width: 100%;height: 54px;padding: 5px 10px;box-sizing: border-box;text-align: center;font-size: 16px;color: #fff;font-family: Poppins;">Deshboard</span> </a>
                            </button>
                        </li>----------->
                    </ul>
                </div>

            </div>
        </nav>
    </header>
