@extends('layouts.main')

@section('title', 'jewelry')

@section('content')
    <div id="mainvisual">
        <img src="img/mainvisual.jpg">
    </div>
    <header id="header">
        <h1 class="site-title"><a href="#"><img src="img/logo.svg"></a></h1>
        <nav>
            <ul>
                <li><a href="#concept">Concept</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="mailto:xxx@xxx.xxx?subject=お問い合わせ">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <main>
            <section >
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
        </main>
    </div>

    <footer id="footer">
        <h2 class="site-title">Wooden Jewelry</h2>
        <p class="copyright">&copy; Wooden Jewerly</p>
    </footer>

@endsection
