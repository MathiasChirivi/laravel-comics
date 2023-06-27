<header class="p-3">
    <div class="container">
        <div class="displayItem d-flex align-items-center justify-content-between">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div class="d-flex align-items-center">
                <ul class="d-flex gap-4 m-0">
                    @foreach ($links as $link)
                    <li class="list-unstyled">
                        <a class="text-black text-decoration-none" href="#">{{ $link }}</a>
                    </li>
                    @endforeach
                </ul>
                <div class="d-flex ms-2">
                    <input type="text " class="wInput form-control border-0 rounded-0" placeholder="Cerca">
                    <button class="btn btn-primary rounded-0" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</header>