@extends('layouts.main')

@section('title', 'jewelry')
    
@section('content')
    <header id="header">
        <div class="mainvisual wrapper">
            <img src="img/mainvisual.jpg">
        </div>
        <h2 class="site-title">Wooden Jewelry</h2>
        <nav>
            <ul>
                <li>Concept</li>
                <li>Work</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="wrapper flex-item">
            <section class="concept">
                <div>
                    <img src="img/concept.jpg">
                </div>
                <div>
                    <h1>私たちの考えるジュエリーとは</h1>
                    <p>Concept</p>
                    <p>テキストテキストテキストテキストテキスト</p>
                </div>
            </section>
        </div>
    </main>

    <footer id="footer">
        <h2 class="site-title">Wooden Jewelry</h2>
        <p class="copyright">&copy; Wooden Jewerly</p>
    </footer>

@endsection
