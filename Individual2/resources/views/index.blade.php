<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SubHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <header class="navbar">
        <h2 id="webName"><i>SubHub.md</i></h2>
        <nav>
            <ul>
                <li><a href="#catalog">Catalog</a></li>
                <li><a href="#about">About</a></li>
                @if (session('user') || session('manager'))
                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                @else
                    <li><a href="{{ route('login') }}">Log In</a></li>
                @endif

                @if (session('user') || session('manager'))
                    <li><a href="{{ route('account') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Account</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <!-- Main Part -->
    <main class="content">
        <section id="catalog">
            <h1>Catalog</h1>
            <hr>

            <!-- Success Message Display -->
            @if(session('success'))
                <div class="alert alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form id="filterForm" action="{{ url('/') }}" method="post" style="border: none;">
                @csrf
                <label for="filter" style="margin-bottom: 5px;">Filter</label>
                <select id="filter" name="filter" style="padding: 5px; border: 2px solid #6576e6; border-radius: 6px;">
                    <option value="none" {{ request('filter') == 'none' ? 'selected' : '' }}>None</option>
                    <option value="cinema" {{ request('filter') == 'cinema' ? 'selected' : '' }}>Cinema</option>
                    <option value="music" {{ request('filter') == 'music' ? 'selected' : '' }}>Music</option>
                    <option value="games" {{ request('filter') == 'games' ? 'selected' : '' }}>Games</option>
                    <option value="other" {{ request('filter') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
                <button type="submit" style="margin-top: 5px;">Apply</button>
            </form>

            <hr><br />

            @if ($subscriptions->isNotEmpty())
                <div class="contact-boxes">
                    @foreach ($subscriptions as $subscription)
                        <div class="contact-box">
                            <img src="{{ $subscription->Logo }}" alt="Logo">
                            <br />
                            <h3>{{ $subscription->Name }}</h3>
                            <p>{{ $subscription->Type }}</p>
                            <p>{{ $subscription->Duration }}</p>
                            <p>{{ $subscription->Price }}$</p>
                            <a href="{{ route('buySubscription') }}">Buy</a>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No result found.</p>
            @endif
        </section>
        
        <section id="about">
            <h1>About</h1>
            <hr>
            <p><i>Welcome to our subscription platform! Here, we curate an array of subscriptions catering to gaming, music, and movie enthusiasts alike...</i></p>
            <hr>
            <h2>Contact us</h2>
            <div class="contact-boxes">
                <div class="contact-box" style="height: 200px;">
                    <h3>Telegram</h3>
                    <br /><br />
                    <p>Ask some questions in our telegram bot:</p>
                    <br /><br />
                    <a href="#">web.telegram.org/k/#-subhubmd</a>
                </div>
                <div class="contact-box" style="height: 200px;">
                    <h3>Email</h3>
                    <br /><br />
                    <p>For more information you can write to our email</p>
                    <br /><br />
                    <a href="#">subhubmd@gmail.com</a>
                </div>
                <div class="contact-box" style="height: 200px;">
                    <h3>Telephone</h3>
                    <br /><br />
                    <p>Or just call us</p>
                    <br /><br /><br />
                    <a href="#">+373-79-456-789</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 SubHub.md. All rights received.</p>
    </footer>
</body>
</html>
