<header>
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo">            
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="/"
                        @if(Request::route()->getName() === 'home' || Request::route()->getName() === 'comic-detail') 
                            class="active"
                        @endif
                    >Comics</a>
                </li>
                <li>
                    <a href="">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>