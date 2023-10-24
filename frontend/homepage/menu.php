<?php
session_start();

if (isset($_POST['logstate'])) {
	if (isset($_SESSION['id_user'])) {
		session_destroy();
		header('Location: menu.php');
		exit();
	} else {
		header('Location: ../../login.php');
	}
}

$dsn = "mysql:host=localhost;dbname=uts_kelompok1";
$username = "root";
$password = "";
try {
	$kunci = new PDO($dsn, $username, $password);
	$kunci->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
	die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Impact | Menu</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <h1>Food Impact</h1>
        <nav>
            <ul class="navigation">
                <li><a href="../../index.php">Home</a></li>
                <li><a class="active" href="menu.php">Menu</a></li>
                <li><a href="../../aboutus.php">About Us</a></li>
                <li><a href="../../bookingtable.php">Book Table</a></li>
            </ul>
        </nav>
        <a href="tes.php" class="test-button">Login</a>
    </header>    
    <?php
			  if(isset($_SESSION['role'])){
				if($_SESSION['role'] == 'admin'){
					echo '<div class="sidebar">';
					echo '<ul>';
					echo '<li><a href="add_menu.php"><i class="fa-thin fa-plus">Tambah</i></a></li>';
					echo '<li><a href="pesanan.php"><i class="fa-solid fa-cart-shopping"></i>Pesanan</a></li>';
					echo '</ul>';
					echo '</div>';
				}
			  }
			?>
			<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
	$dsn = "mysql:host=localhost;dbname=uts_kelompok1";
	$kunci = new PDO($dsn, "root", "");
	$sql = "SELECT * FROM pilihan";
	$hasil = $kunci->query($sql);
	echo '<table border="1">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Nama</th>';
	echo '<th>Gambar</th>';
	echo '<th>Kategori</th>';
	echo '<th>Deskripsi</th>';
	echo '<th>Harga</th>';
	echo '<th>Edit</th>';
	echo '<th>Delete</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	
	while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
		echo '<tr>';
		echo '<td>' . $row['nama'] . '</td>';
		echo '<td>';
		echo '<img src="data:image/jpeg;base64,' . base64_encode($row['gambar']) . '" width="100" height="100">';
		echo '</td>';
		echo '<td>' . $row['kategori'] . '</td>';
		echo '<td>' . $row['deskripsi'] . '</td>';
		echo '<td>' . $row['harga'] . '</td>';
		echo '<td><a href="edit_menu.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="../../backend/delete_menu.php?id=' . $row['id'] . '">Delete</a></td>';
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
}
?>
<?php
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    $dsn = "mysql:host=localhost;dbname=uts_kelompok1";
    $kunci = new PDO($dsn, "root", "");
    $sql = "SELECT * FROM pilihan ORDER BY RAND()"; //untuk yang recommended pakai cara random
	$hasil = $kunci->query($sql);
    echo '<div id="modal" class="modal">';
    echo '<div class="modal-content">';
    echo '<h2>Order Confirmation</h2>';
    echo '<ul id="ordered-items">';
    //Daftar item yang dipesan akan ditampilkan di sini//
    echo '</ul>';
    echo '<div class="button-group">';
    echo '<button class="cancel" id="cancel-modal">Cancel</button>';
    echo '<button class="confirm" id="confirm-modal">Confirm</button>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="center-block">';
    echo '<h2 class="texth2">Recommended</h2> <br/>';
	while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
        echo '<section class="menu">';
        echo '<div class="menu-item">';
        echo '<img src="' . $row['gambar'] . '" style="height: 200px;" >';
        echo '<h3>' . $row['nama'] . '</h3>';
        echo '<p>Harga:' . $row['harga'] . '</p>';
        echo '<p>Deskripsi:' . $row['deskripsi'] . '</p>';
        echo '<button class="add-to-cart">Add To Cart</button>';
        echo '</div>';

        echo '<div class="menu-item">';
        echo '<img src="' . $row['gambar'] . '" alt = "Minuman 1" style="height: 200px;" >';
        echo '<h3>' . $row['nama'] . '</h3>';
        echo '<p>Harga:' . $row['harga'] . '</p>';
        echo '<p>Deskripsi:' . $row['deskripsi'] . '</p>';
        echo '<button class="add-to-cart">Add To Cart</button>';
        echo '</div>';

        echo '<div class="menu-item">';
        echo '<img src="' . $row['gambar'] . '" alt="Dessert 1" style="height: 200px;" >';
        echo '<h3>' . $row['nama'] . '</h3>';
        echo '<p>Harga:' . $row['harga'] . '</p>';
        echo '<p>Deskripsi:' . $row['deskripsi'] . '</p>';
        echo '<button class="add-to-cart">Add To Cart</button>';
        echo '</div>';
        echo '</section>';

        echo '<button class="cart-list">See Cart List</button>';

        echo '<div id="cart" style="display: none">';
        echo '<ul id="cart-items">';
                // Daftar item belanja akan ditampilkan di sini//
        echo '</ul>';
        echo '<div class="button-group">';
        echo '<button class="order-button" style="display: none">Order</button>';
        echo '<button class="delete-button" style="display: none">Delete</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    
}}?>
    <div class="footer">
        <div class="column">
    <h3>Contact Us</h3>
    <p><span class="location-symbol">&#x1F4CD;</span> Locate Us</p>
    <p><span class="phone-symbol">&#x260E;</span> Call: +123 456 7890</p>
    <p><span class="email-symbol">&#x2709;</span> Email: food_impact@gmail.com</p>
</div>
        <div class="column">
            <h3>Food Impact</h3>
            <p1 class="special">Description here</p1>
            <div class="social-icons">
              <ul id="sosmed2"><a href="https://www.instagram.com/genshinimpact/?hl=en"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/640px-Instagram_logo_2022.svg.png" alt="" width="30"></a></ul>
              <ul id="sosmed2"><a href="https://www.youtube.com/c/GenshinImpact"><img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/704/small/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png" alt="" width="40"></a></ul>
              <ul id="sosmed2"><a href="https://www.facebook.com/Genshinimpact/"><img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="" width="30"></a></ul>
            </div>
        </div>
        <div class="column">
            <h3>Opening Hours</h3>
            <p1 class="special">Everyday</p1>
            <p1 class="special">09.00 - 17.00</p1>
        </div>
        <div class="info">
            <p class="copyright">&copy; All Rights Reserved</p>
            <p class="copyright">&copy; <?php echo date("Y"); ?> Food Impact</p>
        </div>
    </div>
<script>
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartListButton = document.querySelector('.cart-list');
    const cartList = document.getElementById('cart');
    const orderButton = document.querySelector('.order-button');
    const deleteButton = document.querySelector('.delete-button');
    
    let isCartVisible = false;
    
    cartListButton.addEventListener('click', () => {
        isCartVisible = !isCartVisible;
        if (isCartVisible) {
            cartList.style.display = 'block';
            orderButton.style.display = 'block';
            deleteButton.style.display = 'block';
        } else {
            cartList.style.display = 'none';
            orderButton.style.display = 'none';
            deleteButton.style.display = 'none';
        }
    });
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const originalButtonText = button.innerText;
            button.innerText = 'Added to Cart';
            button.classList.add('added');
    
            const menuItem = button.parentElement;
            const itemName = menuItem.querySelector('h3').textContent;
    
            const cartItem = document.createElement('li');
            cartItem.innerHTML = `
            <input type="checkbox" class="cart-item-checkbox" id="cart-item-${Date.now()}">
            <label for="cart-item-${Date.now()}" class="cart-item-label">
                <span class="custom-checkbox"></span>
                <span class="cart-item-name">${itemName}</span>
            </label>
            `;
    
            const cartItems = document.getElementById('cart-items');
            cartItems.appendChild(cartItem);
    
            setTimeout(() => {
                button.innerText = originalButtonText;
                button.classList.remove('added');
            }, 3000);
    
            const checkButton = cartItem.querySelector('.check-button');
            checkButton.addEventListener('click', () => {
                checkButton.classList.toggle('checked');
            });
    
            console.log('Button clicked and text changed.');
        });
    });        
    
    orderButton.addEventListener('click', () => {
        const checkedItems = document.querySelectorAll('.cart-item-checkbox:checked');
        const orderedItems = [];
    
        checkedItems.forEach(checkbox => {
            const listItem = checkbox.parentElement;
            const itemName = listItem.querySelector('.cart-item-name').textContent;
            orderedItems.push(itemName);
            listItem.remove();
        });
    
        if (orderedItems.length > 0) {
            const modal = document.getElementById('modal');
            const modalContent = document.querySelector('.modal-content');
            const closeModelButton = document.getElementById('close-modal');
            const orderedItemsList = document.getElementById('ordered-items');
    
            orderedItemsList.innerHTML = '';
    
            orderedItems.forEach(itemName => {
                const item = document.createElement('li');
                item.textContent = itemName;
                orderedItemsList.appendChild(item);
            });
    
            modal.style.display = 'block';
    
            closeModelButton.addEventListener('click', () => {
                modal.style.display = 'none';
            });
    
            orderButton.innerText = 'Order Placed';
    
            setTimeout(() => {
                orderButton.innerText = 'Order';
            }, 3000);
        }
    });            

    const cancelModalButton = document.getElementById('cancel-modal');
    const confirmModalButton = document.getElementById('confirm-modal');
    
    cancelModalButton.addEventListener('click', () => {
        window.location.href = 'menu.html';
    });
    
    confirmModalButton.addEventListener('click', () => {
        const orderedItemsList = document.getElementById('ordered-items');
        const modal = document.getElementById('modal');
        const orderedItems = orderedItemsList.querySelectorAll('li');
    
        if (orderedItems.length > 0) {
            orderedItems.forEach(item => {
                item.remove();
            });
    
            modal.style.display = 'none'; 
        } else {
            alert('No items selected for ordering.');
        }
    });    

    deleteButton.addEventListener('click', () => {
        const checkedItems = document.querySelectorAll('.cart-item-checkbox:checked');
        
        checkedItems.forEach(checkbox => {
            const listItem = checkbox.parentElement;
            listItem.remove(); 
        });
    });    
</script>
</body>
</html>