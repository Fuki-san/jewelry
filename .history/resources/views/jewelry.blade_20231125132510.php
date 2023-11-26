@extends('layouts.main')

@section('title', 'jewelry')

@section('content')
    <div class="mainvisual wrapper">
        <img src="img/mainvisual.jpg">
    </div>
    <header id="header">
        <a href="#"><img src="img/logo.svg"></a>
        <nav>
            <ul>
                <li><a href="#"></a></li>
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
            <section class="work">
                <div>
                    <h1>ハンドメイドにこだわる理由</h1>
                    <p>Work</p>
                    <p>テキストテキストテキストテキストテキスト</p>
                </div>
                <div>
                    <img src="img/work.jpg">
                </div>
            </section>
        </div>
    </main>

    <footer id="footer">
        <h2 class="site-title">Wooden Jewelry</h2>
        <p class="copyright">&copy; Wooden Jewerly</p>
    </footer>

@endsection
