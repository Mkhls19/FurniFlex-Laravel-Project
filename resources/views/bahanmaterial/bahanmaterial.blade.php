<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Material</title>
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
            <span class="links_name">Material</span>
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
        <img src="{{asset('style/assets/image/Adminlogo.png')}}" alt="Logo Administrator">
        <span class="admin_name"></span>
      </div>
    </nav>
  <div class="home-content">
    <h2>Data Bahan Material</h2>
    <button class= "btn btn-tambah">
      <i class="bx bx-plus"></i><a href="Material-Entry"> Tambah Data </a>
		</button>
        <button type="button" class="btn-tambah">
        <a href="bahanmaterial-cetak" class="btn-tambah">Cetak Data</a>
        </button>
		<table class="table-data">
    <thead>
          <tr>
            <th style="width: 25%">ID Material</th>
            <th style="width: 25%">Kategori Bahan</th>
            <th style="width: 25%">Harga</th>
            <th style="width: 25%">Jumlah</th>
            <th style="width: 25%">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($dtMaterial as $item)
                        <tr>
                            <td>{{$item->Id_Material}}</td>
                            <td>{{$item->Kategori}}</td>
                            <td>{{$item->Harga}}</td>
                            <td>{{$item->Jumlah}}</td>
                            <td>
                                <button type="button" class="btn-edit">
                                    <a href="{{ url('Material-Edit', $item->id) }}" class="btn-edit">Edit</a>
                                </button>
                                <button type="button" class="btn-delete">
                                    <a href="{{ url('Material-Delete', $item->id) }}" class="btn-delete">Delete</a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
        sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
      } else {
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
</body>
</html>
