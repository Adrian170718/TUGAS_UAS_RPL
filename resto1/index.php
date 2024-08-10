<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Unikom</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">


</head>
<body>

<div id="cart-details" class="cart-details" style="display:none;">
    <div class="container">
        <h2">Keranjang Pesanan</h2>
        <div id="cart-items"></div>
        <button id="checkout-btn" class="btn btn-primary">Pesan Sekarang</button>
    </div>
</div>

    <header>
    <div id="cart-details" style="display: none;">
    <h3>Keranjang Anda</h3>
    <div id="cart-items"></div>
    <p id="total-price">Total: 0 IDR</p>
    <button id="checkout-btn" class="btn btn-primary">Checkout</button>
</div>


        <div class="container">
            <h1>Restoran Unikom</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
            <div class="cart-container">
            <button id="cart-icon" class="btn btn-light">
                <i class="bi bi-cart"></i>
                <span id="cart-count" class="badge bg-danger">0</span>
            </button>
        </div>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h2>Selamat Datang di Restoran Unikom</h2>
            <p>Tempat terbaik untuk menikmati makanan lezat dan suasana yang nyaman</p>
            <a href="#menu" class="btn">Lihat Menu</a>
        </div>
    </section>

    <section class="our_qualities" style="padding: 100px 0;">
        <div class="container">
            <div class="qualities-row">
                <div class="quality-column">
                    <img src="../resto_unikom/src/img/quality_food_img.png" alt="Quality Foods">
                    <h3>Quality Foods</h3>
                    <p>Dibuat dengan penuh cinta dan ketulusan kami</p>
                </div>
                <div class="quality-column">
                    <img src="../resto_unikom/src/img/fast_delivery_img.png" alt="Quality Coffee">
                    <h3>Quality</h3>
                    <p>Dipilih dan do roast dengan baik menghasilkan kualitas makanan dan minuman yang maksimal</p>
                </div>
                <div class="quality-column">
                    <img src="../resto_unikom/src/img/original_taste_img.png" alt="Quality Place">
                    <h3>Quality Place</h3>
                    <p>Menyediakan tempat yang asik untuk berkumpul dan bersenda gurau dengan teman2</p>
                </div>
            </div>
        </div>
    </section>

    <section id="order" class="order">
    <div class="container">
        <h2>Pesan Sekarang</h2>
        <form action="order.php" method="post">
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>

            <label for="no_meja">No Meja:</label>
            <input type="text" id="no_meja" name="no_meja">

        </form>
    </div>
</section>



    <section id="menu" class="menu">
        <div class="container">
            <h2>Menu Kami</h2>
            <div class="menu-tabs">
                <button class="tablink" onclick="openMenu(event, 'Makanan')">Makanan</button>
                <button class="tablink" onclick="openMenu(event, 'Minuman')">Minuman</button>
                <button class="tablink" onclick="openMenu(event, 'FastFood')">Fast Food</button>
                <button class="tablink" onclick="openMenu(event, 'Snack')">Snack</button>
            </div>

            <div id="Makanan" class="tabcontent">
    <div class="menu-items">
        <?php
        include 'koneksi.php';
        $sql = "SELECT nama, harga, gambar FROM menu WHERE kategori='Makanan'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="menu-item">';
                echo '<img src="../resto_unikom/src/img/' . $row["gambar"] . '" alt="' . $row["nama"] . '">';
                echo '<h3>' . $row["nama"] . '</h3>';
                echo '<p>Harga: ' . $row["harga"] . ' IDR</p>';
                echo '<button class="btn btn-success btn-sm add-to-cart"><i class="bi bi-cart-plus"></i> Order</button>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada menu makanan tersedia.";
        }
        ?>
    </div>
</div>

<div id="Minuman" class="tabcontent" style="display:none">
    <div class="menu-items">
        <?php
        $sql = "SELECT nama, harga, gambar FROM menu WHERE kategori='Minuman'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="menu-item">';
                echo '<img src="../resto_unikom/src/img/' . $row["gambar"] . '" alt="' . $row["nama"] . '">';
                echo '<h3>' . $row["nama"] . '</h3>';
                echo '<p>Harga: ' . $row["harga"] . ' IDR</p>';
                echo '<button class="btn btn-success btn-sm add-to-cart"><i class="bi bi-cart-plus"></i> Order</button>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada menu minuman tersedia.";
        }
        ?>
    </div>
</div>

<div id="FastFood" class="tabcontent" style="display:none">
    <div class="menu-items">
        <?php
        $sql = "SELECT nama, harga, gambar FROM menu WHERE kategori='Fast Food'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="menu-item">';
                echo '<img src="../resto_unikom/src/img/' . $row["gambar"] . '" alt="' . $row["nama"] . '">';
                echo '<h3>' . $row["nama"] . '</h3>';
                echo '<p>Harga: ' . $row["harga"] . ' IDR</p>';
                echo '<button class="btn btn-success btn-sm add-to-cart"><i class="bi bi-cart-plus"></i> Order</button>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada menu Fast Food tersedia.";
        }
        ?>
    </div>
</div>

<div id="Snack" class="tabcontent" style="display:none">
    <div class="menu-items">
        <?php
        $sql = "SELECT nama, harga, gambar FROM menu WHERE kategori='Snack'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="menu-item">';
                echo '<img src="../resto_unikom/src/img/' . $row["gambar"] . '" alt="' . $row["nama"] . '">';
                echo '<h3>' . $row["nama"] . '</h3>';
                echo '<p>Harga: ' . $row["harga"] . ' IDR</p>';
                echo '<button class="btn btn-success btn-sm add-to-cart"><i class="bi bi-cart-plus"></i> Order</button>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada menu Snack tersedia.";
        }
        ?>
    </div>
</div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Restoran Unikom didirikan pada tahun 2021 dengan tujuan memberikan pengalaman kuliner terbaik. Kami menyajikan berbagai macam masakan dengan bahan-bahan segar dan berkualitas tinggi.</p>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Email: info@restoranunikom.com</p>
            <p>Telepon: (021) 123-4567</p>
            <p>Alamat: Jl. Dipati Ukur No. 112-116, Bandung</p>
        </div>
    </footer>

    <script>
        function openMenu(evt, menuName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.add-to-cart');
        let cartItems = [];
        let total = 0;

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const itemElement = this.parentElement;
                const itemName = itemElement.querySelector('h3').textContent;
                const itemPrice = parseFloat(itemElement.querySelector('p').textContent.replace('Harga: ', '').replace(' IDR', '').trim());
                const itemImage = itemElement.querySelector('img').src;

                // Tambahkan item ke keranjang
                cartItems.push({ name: itemName, price: itemPrice, image: itemImage });

                // Update total harga
                total += itemPrice;

                // Update tampilan keranjang
                updateCart();

                // Tampilkan pesan
                alert(itemName + ' dimasukkan ke keranjang!');
            });
        });

        document.getElementById('cart-icon').addEventListener('click', function() {
            const cartDetails = document.getElementById('cart-details');
            cartDetails.style.display = cartDetails.style.display === 'none' ? 'block' : 'none';
        });

        document.getElementById('checkout-btn').addEventListener('click', function() {
            const nama_pelanggan = document.getElementById('nama_pelanggan').value;

            // Cek apakah nama pelanggan diisi
            if (!nama_pelanggan) {
                alert('Nama pelanggan harus diisi.');
                return;
            }

            const formData = new FormData();
            formData.append('action', 'checkout');
            formData.append('nama_pelanggan', nama_pelanggan);
            formData.append('cartItems', JSON.stringify(cartItems));

            fetch('order.php', {
                method: 'POST',
                body: formData
            }).then(response => response.text())
              .then(result => {
                  alert(result);
                  
                  // Kosongkan keranjang dan total setelah checkout
                  cartItems = [];
                  total = 0;
                  updateCart();
              });
        });

        function updateCart() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';

            cartItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('cart-item');
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <h3>${item.name}</h3>
                    <p>Harga: ${item.price} IDR</p>
                `;
                cartItemsContainer.appendChild(itemElement);
            });

            document.getElementById('cart-count').textContent = cartItems.length;
            document.getElementById('total-price').textContent = `Total: ${total} IDR`;
        }
    });
</script>





</body>
</html>
