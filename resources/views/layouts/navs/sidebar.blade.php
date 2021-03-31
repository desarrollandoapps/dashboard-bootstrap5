<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse bd-links shadow" id="bd-docs-nav" aria-label="Docs navigation">
    <div class="usuario">
        {{ Auth::user()->name }}
    </div>
    <ul class="nav flex-column pt-md-3">
        <li class="mb-1">
            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#submenu1-collapse" aria-expanded="false">
                Submenú 1
            </button>
    
            <div class="collapse" id="submenu1-collapse">
                <ul class="list-unstyled fw-normal pb-1 small">
                    <li><a href="{{route("prueba")}} " class="d-inline-flex align-items-center rounded">Item 1</a></li>
                    <li><a href="{{route("prueba")}} " class="d-inline-flex align-items-center rounded">Item 2</a></li>
                    <li><a href="{{route("prueba")}} " class="d-inline-flex align-items-center rounded">Item 3</a></li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#submenu2-collapse" aria-expanded="false">
                Submenú 2
            </button>
    
            <div class="collapse" id="submenu2-collapse">
                <ul class="list-unstyled fw-normal pb-1 small">
                    <li><a href="{{route("prueba")}} " class="d-inline-flex align-items-center rounded">Item 4</a></li>
                    <li><a href="{{route("prueba")}} " class="d-inline-flex align-items-center rounded">Item 5</a></li>
                </ul>
            </div>
        </li>
        
    </ul>
</nav>