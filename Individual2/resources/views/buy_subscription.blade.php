<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy Subscription</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="navbar">
        <h2 id="webName"><i>SubHub.md</i></h2>
        <nav>
            <ul>
                <li><a href="#catalog">Catalog</a></li>
                <li><a href="#about">About</a></li>
                
                <li><a href="{{ route('home') }}">Account</a></li>
            </ul>
        </nav>
    </header>

    <main class="content">
        <section id="catalog">
            <h1>Buy Subscription</h1>
            <hr>
            <div class="contact-boxes">
                @foreach ($subscriptions as $subscription)
                    <div class="contact-box">
                        <img src="{{ $subscription->Logo }}" alt="Logo">
                        <h3>{{ $subscription->Name }}</h3>
                        <p>{{ $subscription->Type }}</p>
                        <p>{{ $subscription->Duration }}</p>
                        <p>{{ $subscription->Price }}$</p>
                        <form action="{{ route('purchaseSubscription', $subscription->id) }}" method="post">
                            @csrf
                            <button type="submit">Buy</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 SubHub.md. All rights received.</p>
    </footer>
</body>
</html>
