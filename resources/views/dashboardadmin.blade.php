<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{asset('style/css/style_admin.css')}}">
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
          <a href="admin.php" class="active">
            <i class='bx bx-palette'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Material">
            <i class='bx bx-cube-alt'></i>
            <span class="links_name">Material</span>
          </a>
        </li>
        <li>
          <a href="produksi/produksi.php">
            <i class='bx bx-archive'></i>
            <span class="links_name">Produksi</span>
          </a>
        </li>
        <li>
          <a href="pengiriman/pengiriman.php">
            <i class='bx bx-package'></i>
            <span class="links_name">Pengiriman</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <img src="{{asset('style/assets/image/AdminLogo.png')}}" alt="Logo Administrator">
        <span class="admin_name"></span>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <h2 id="text">Selamat Datang </h2>
        <div id="date"></div>
        <div id="clock"></div>
      </div>
      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers"></div>
            <div class="cardName">Material</div>
          </div>
          <div class="iconBx">
            <i class='bx bx-cube-alt'></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers"></div>
            <div class="cardName">Produksi</div>
          </div>
          <div class="iconBx">
            <i class='bx bx-archive'></i>
          </div>
        </div>
        <div class="card">
          <div>
            <div class="numbers"></div>
            <div class="cardName">Pengiriman</div>
          </div>
          <div class="iconBx">
            <i class='bx bx-package'></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function currentTime() {
      let date = new Date();
      let hh = date.getHours();
      let mm = date.getMinutes();
      let ss = date.getSeconds();
      let day = date.getDay();
      let days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      let month = date.getMonth();
      let months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      let year = date.getFullYear();
      let session = "AM";
      if (hh > 12) {
        session = "PM";
        hh = hh - 12;
      }
      hh = hh < 10 ? "0" + hh : hh;
      mm = mm < 10 ? "0" + mm : mm;
      ss = ss < 10 ? "0" + ss : ss;
      let time = hh + ":" + mm + ":" + ss + " " + session;
      let formattedDate =
        days[day] + ", " + date.getDate() + " " + months[month] + " " + year;
      document.getElementById("clock").innerText = time;
      document.getElementById("date").innerText = formattedDate;
      var t = setTimeout(function () {
        currentTime();
      }, 1000);
    }
    currentTime();

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
  <style>
    .cardBox {
      position: relative;
      width: 100%;
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 50px;
    }
    .cardBox .card {
      position: relative;
      padding: 20px;
      border-radius: 20px;
      display: flex;
      justify-content: space-between; 
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
    }
    .cardBox .card .numbers {
      position: relative;
      font-weight: 500;
      font-size: 2.5rem;
    }
    .cardBox .card .cardName {
      font-size: 1.3rem;
      margin-top: 5px;
    }
    .cardBox .card .iconBx {
      font-size: 4.5rem;
      color: darkslateblue;
    }
    .cardBox .card:hover {
      background: #c7c0e9;
    }
  </style>
</body>
</html>
