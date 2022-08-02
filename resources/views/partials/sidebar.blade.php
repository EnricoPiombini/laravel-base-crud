<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="bootstrap-icons.svg#bootstrap"></use>
        </svg>
        <span class="fs-4">Laravel Comics</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ Request::route()->getName() === 'home' ? 'active' : '' }}"
                aria-current="page">
                <svg class="bi pe-none me-2 text-light" width="16" height="16">
                    <use xlink:href="bootstrap-icons.svg#house-fill"></use>
                </svg>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('comics.index') }}"
                class="nav-link {{ Request::route()->getName() === 'faqs.index' ? 'active' : '' }}" aria-current="page">
                <svg class="bi pe-none me-2 text-light" width="16" height="16">
                    <use xlink:href="bootstrap-icons.svg#patch-question-fill"></use>
                </svg>
                Comics Archive
            </a>
        </li>
    </ul>
    <hr>

</div>
