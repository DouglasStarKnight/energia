<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resolve Aí Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --sidebar-width: 280px;
      --sidebar-width-collapsed: 80px;
      --bottom-nav-height: 65px;
      /* Added variable for mobile bar height */
    }

    body {
      overflow-x: hidden;
    }

    /* --- Main Content Area (Desktop) --- */
    .main-content {
      margin-left: var(--sidebar-width);
      width: calc(100% - var(--sidebar-width));
      background-color: #f8f9fa;
      min-height: 100vh;
      padding: 20px;
      transition: all 0.3s ease;
    }

    .sidebar.collapsed~.main-content {
      margin-left: var(--sidebar-width-collapsed);
      width: calc(100% - var(--sidebar-width-collapsed));
    }

    /* --- Sidebar (Desktop) --- */
    .sidebar {
      width: var(--sidebar-width);
      height: 100vh;
      background: linear-gradient(135deg, #1a1c2e 0%, #16181f 100%);
      transition: all 0.3s ease;
      position: fixed;
      /* Ensures it stays put */
      top: 0;
      left: 0;
    }

    .sidebar.collapsed {
      width: var(--sidebar-width-collapsed);
    }

    .sidebar-link {
      color: #a0a3bd;
      transition: all 0.2s ease;
      border-radius: 8px;
      margin: 4px 16px;
      white-space: nowrap;
      overflow: hidden;
    }

    .sidebar-link:hover {
      color: #ffffff;
      background: rgba(255, 255, 255, 0.1);
      transform: translateX(5px);
    }

    .sidebar-link.active {
      color: #ffffff;
      background: rgba(255, 255, 255, 0.1);
    }

    /* --- Desktop Specific Elements --- */
    .logo-text {
      background: linear-gradient(45deg, #6b8cff, #8b9fff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      transition: opacity 0.3s ease;
    }

    .profile-section {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .toggle-btn {
      position: absolute;
      right: -15px;
      top: 20px;
      background: white;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      border: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
      z-index: 100;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    /* --- Styles for Collapsed Sidebar (Desktop) --- */
    .collapsed .toggle-btn {
      transform: rotate(180deg);
    }

    .collapsed .hide-on-collapse,
    .collapsed .logo-text,
    .collapsed .profile-info {
      opacity: 0;
      visibility: hidden;
      width: 0;
      margin: 0;
    }

    .collapsed .sidebar-link {
      text-align: center;
      padding: 1rem 0.5rem !important;
      margin: 4px;
      width: 60px;
      display: flex;
      justify-content: center
    }

    .collapsed .sidebar-link i {
      margin: 0 !important;
    }

    .profile-info {
      transition: opacity 0.2s ease;
    }

    /* ==================================================================
        MOBILE STYLES (Screen width <= 768px)
       ===================================================================
    */
@media (max-width: 768px) {
    
    /* --- Reposition Sidebar to the Bottom --- */
    .sidebar, .sidebar.collapsed {
        width: 100vw;
        height: var(--bottom-nav-height);
        bottom: 0;
        top: auto;
        left: 0;
        /* ADICIONADO !important para sobrepor o flex-column do HTML */
        flex-direction: row !important; 
        z-index: 1000;
    }

    /* --- Adjust the Main Content Area --- */
    .main-content, .sidebar.collapsed~.main-content {
        margin-left: 0;
        width: 100%;
        padding-bottom: calc(var(--bottom-nav-height) + 20px);
    }

    /* --- Hide Desktop-Only Elements --- */
    .toggle-btn,
    .sidebar .p-4,
    .sidebar .profile-section,
    .sidebar .hide-on-collapse {
        display: none;
    }

    /* --- Layout the Navigation Links Horizontally --- */
    .sidebar .nav {
        display: flex;
        flex-direction: row !important; 
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    /* --- Style Individual Links for Mobile --- */
    .sidebar-link {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        margin: 0;
        border-radius: 0;
        padding: 0 !important;
    }

    .sidebar-link:hover {
        transform: none;
    }

    .sidebar-link i {
        margin: 0 !important;
        font-size: 1.4rem;
    }
}
    
  </style>
</head>

<body>
  <nav class="sidebar d-flex flex-column flex-shrink-0 position-fixed">
    {{-- <button class="toggle-btn" >
      <i class="fas fa-chevron-left"></i>
    </button> --}}

    <div class="p-4">
      <h4 class="logo-text fw-bold mb-0">Resolve Aí</h4>
      <p class="text-light small hide-on-collapse">Dashboard</p>
    </div>
    <div class="nav flex-column">
      <a href="" onclick="toggleSidebar()" class="sidebar-link text-decoration-none p-3">
        <i class="fa-solid fa-bars me-3"></i>
      </a>
      <a href="{{route('dashboard.findAll')}}" class="{{request()->routeIs('dashboard.findAll') ? 'active' : ''}}sidebar-link text-decoration-none p-3">
        <i class="fas fa-home me-3"></i>
        <span class="hide-on-collapse">Início</span>
      </a>
      <a href="{{route('fatura.findAll')}}" class="{{request()->routeIs('fatura.findAll') ? 'active' : ''}}sidebar-link text-decoration-none p-3">
        <i class="fa-solid fa-file-invoice-dollar me-3"></i>
        <span class="hide-on-collapse">Fatura</span>
      </a>
      <a href="{{route('relatorio.findAll')}}" class="{{request()->routeIs('relatorio.findAll') ? 'active' : ''}}sidebar-link text-decoration-none p-3">
        <i class="fa-solid fa-chart-column me-3"></i>
        <span class="hide-on-collapse">Relatório</span>
      </a>
    </div>
    <div class="profile-section mt-auto p-4">
      <div class="d-flex align-items-center">
        {{-- <img src="https://i.pravatar.cc/60?u=douglas" style="height:60px" class="rounded-circle" alt="Profile"> --}}
        <div class="ms-3 profile-info">
          <h6 class="text-white mb-0">Douglas Campos</h6>
          <small class="text-light">Admin</small>
        </div>
      </div>
    </div>
  </nav>

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('collapsed');
    }
  </script>
</body>

</html>