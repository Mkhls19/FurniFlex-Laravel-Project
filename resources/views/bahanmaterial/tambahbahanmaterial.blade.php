<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Tambah Bahan Material </title>
    <link rel="stylesheet" href="{{asset('style/css/style_material.css')}}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="{{asset('style/assets/image/logofrnflx2.png')}}" alt="Logo Furniflex" class="logo"/>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../admin.php">
            <i class='bx bx-palette' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../material/material.php" class="active">
            <i class='bx bx-cube-alt' ></i>
            <span class="links_name">Bahan Material</span>
          </a>
        </li>
        <li>
          <a href="../produksi/produksi.php">
            <i class='bx bx-archive' ></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="../pengiriman/pengiriman.php">
            <i class='bx bx-package' ></i>
            <span class="links_name">Pengiriman</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../logout.php">
           <i class='bx bx-log-out-circle'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
      <div class="profile-details">
        <img src="{{asset('style/assets/image/adminlogo.png')}}" alt="Logo Administrator">
        <span class="admin_name"></span>
      </div>
    </nav>
     <div class="home-content">
      <h3>Tambah Data Bahan Material</h3>
	   <div class="form-login">
      <form action="Material-proses" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
        <label for="Id_Material">Id Material</label>
        <input class="input" type="text" name="Id_Material" id="Id_Material" placeholder="Id Material" />
        <label for="Kategori">Kategori</label>
        <input class="input" type="text" name="Kategori" id="Kategori" placeholder="kategori" />
        <label for="Jumlah">Jumlah</label>
        <input class="input" type="number" name="Jumlah" id="Jumlah" placeholder="Jumlah" />
        <label for="harga">Harga</label>
        <input class="input" type="number" name="Harga" id="Harga" placeholder="Harga" />
        <div align="center">
          <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
          <button type="reset" class="btn btn-reset" name="reset"> Reset </button>
        </div>
        </form>
	   </div>
    </div>
    <script>   
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
          sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      }else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
    </script>
</body>
</html>
