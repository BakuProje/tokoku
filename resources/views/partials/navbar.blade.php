<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>
  <nav>

    <a href="{{ route('beranda') }}" class="logo">
        Tokoku
    </a>

    <ul>
        <li>
            <a 
                href="{{ route('beranda') }}"
                class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
                Beranda
            </a>
        </li>

        <li>
            <a 
                href="{{ route('tentang') }}"
                class="{{ request()->routeIs('tentang') ? 'active' : '' }}">
                Tentang
            </a>
        </li>


        <li>
            <a 
                href="{{ route('produk.index') }}"
                class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
                Produk
            </a>
        </li>
    </ul>

</nav>
</nav>
</body>
</html>