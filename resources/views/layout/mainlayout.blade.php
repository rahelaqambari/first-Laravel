
    @yield ("styles")
 </head>
 <body>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <section class="main">
        <div class="box">
            @section("box")
        
            @endsection
        </div>
    </section>
    <footer>
        <h2>2025 &copy; Designing by Rahela Qambari</h2>
    </footer>
 </body>
 </html>