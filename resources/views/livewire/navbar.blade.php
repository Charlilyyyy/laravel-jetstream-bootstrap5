<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MyApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ $currentPage == 'home' ? 'active' : '' }}">
                    <a class="nav-link" wire:click="$set('currentPage', 'home')" href="#">Home</a>
                </li>
                <li class="nav-item {{ $currentPage == 'about' ? 'active' : '' }}">
                    <a class="nav-link" wire:click="$set('currentPage', 'about')" href="#">About</a>
                </li>
                <li class="nav-item {{ $currentPage == 'contact' ? 'active' : '' }}">
                    <a class="nav-link" wire:click="$set('currentPage', 'contact')" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
