<!doctype html>
<html lang="id">
<head>

  <meta charset="utf-8" />

  <title>AdminLTE | Dashboard v3</title>

  <script>
    (() => {
      'use strict';

      const root = document.documentElement;

      if (root.getAttribute('data-lte-color-mode') === 'off') {
        return;
      }

      const STORAGE_KEY = 'lte-theme';
      let stored = null;

      try {
        stored = localStorage.getItem(STORAGE_KEY);
      } catch {}

      const authored = root.getAttribute('data-bs-theme');
      let resolved = 'light';

      if (stored === 'dark' || stored === 'light') {
        resolved = stored;
      } else if (authored === 'dark' || authored === 'light') {
        resolved = authored;
      } else if (
        globalThis.matchMedia('(prefers-color-scheme: dark)').matches
      ) {
        resolved = 'dark';
      }

      root.setAttribute('data-bs-theme', resolved);
      root.style.colorScheme = resolved;

      if (resolved !== authored) {
        root.setAttribute('data-lte-theme-resolved', '');
      }
    })();
  </script>

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=yes"
  />

  <meta name="color-scheme" content="light dark" />

  <meta
    name="theme-color"
    content="#007bff"
    media="(prefers-color-scheme: light)"
  />

  <meta
    name="theme-color"
    content="#1a1a1a"
    media="(prefers-color-scheme: dark)"
  />

  <meta
    name="description"
    content="Dashboard AdminLTE"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    crossorigin="anonymous"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous"
  />

  <link
    rel="stylesheet"
    href="./css/adminlte.css"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    crossorigin="anonymous"
  />


  <!-- =====================================================
       CUSTOM DASHBOARD STYLE
  ====================================================== -->

  <style>

    /* BODY */

    body {
      background: #eef3f9;
    }


    /* MAIN DASHBOARD BACKGROUND */

    .dashboard-colorful {
      min-height: 100vh;

      background:
        radial-gradient(
          circle at 5% 10%,
          rgba(13, 110, 253, .14),
          transparent 28%
        ),

        radial-gradient(
          circle at 95% 15%,
          rgba(32, 201, 151, .15),
          transparent 30%
        ),

        radial-gradient(
          circle at 50% 100%,
          rgba(255, 193, 7, .14),
          transparent 32%
        ),

        linear-gradient(
          135deg,
          #f4f8ff 0%,
          #f8fbff 50%,
          #f1fff9 100%
        );
    }


    /* DASHBOARD CARD */

    .dashboard-card {

      border: 0 !important;

      border-radius: 18px !important;

      overflow: hidden;

      background:
        rgba(255,255,255,.96);

      box-shadow:
        0 8px 30px rgba(31,38,135,.10);

      transition:
        transform .25s ease,
        box-shadow .25s ease;
    }


    .dashboard-card:hover {

      transform: translateY(-4px);

      box-shadow:
        0 15px 40px rgba(31,38,135,.16);
    }


    /* CARD HEADER */

    .dashboard-card .card-header {

      padding:
        22px
        26px
        10px;
    }


    .dashboard-card .card-title {

      font-size: 1.25rem;

      font-weight: 700;
    }


    /* CARD BODY */

    .dashboard-card .card-body {

      padding:
        20px
        26px
        25px;
    }


    /* ANGKA UTAMA */

    .dashboard-number {

      display: block;

      font-size: 3.6rem !important;

      line-height: 1;

      font-weight: 800;

      letter-spacing: -2px;

      color: #101828;
    }


    /* NOMINAL RUPIAH */

    .dashboard-money {

      display: block;

      font-size: 3rem !important;

      line-height: 1;

      font-weight: 800;

      letter-spacing: -1.5px;

      color: #101828;
    }


    /* LABEL */

    .dashboard-label {

      display: block;

      margin-top: 9px;

      font-size: 1.05rem;

      color: #667085;
    }


    /* PERCENTAGE */

    .percentage-up {

      color: #00a878;

      font-size: 1.25rem;

      font-weight: 600;
    }


    /* LEGEND */

    .chart-legend {

      font-size: 1rem;

      color: #344054;
    }


    /* MINI STAT */

    .mini-stat-card {

      position: relative;

      overflow: hidden;

      min-height: 150px;

      padding: 25px;

      border-radius: 18px;

      color: white;

      display: flex;

      align-items: center;

      justify-content: space-between;

      box-shadow:
        0 10px 30px rgba(0,0,0,.10);

      transition:
        transform .25s ease;
    }


    .mini-stat-card:hover {

      transform: translateY(-5px);
    }


    .mini-stat-card::after {

      content: "";

      position: absolute;

      width: 170px;

      height: 170px;

      border-radius: 50%;

      background:
        rgba(255,255,255,.12);

      right: -55px;

      top: -65px;
    }


    /* BLUE */

    .stat-blue {

      background:
        linear-gradient(
          135deg,
          #0d6efd,
          #4f8dfd
        );
    }


    /* GREEN */

    .stat-green {

      background:
        linear-gradient(
          135deg,
          #00a878,
          #20c997
        );
    }


    /* ORANGE */

    .stat-orange {

      background:
        linear-gradient(
          135deg,
          #f59e0b,
          #ffc107
        );
    }


    .stat-title {

      display: block;

      font-size: 1rem;

      opacity: .9;
    }


    .stat-number {

      margin-top: 7px;

      font-size: 2rem;

      font-weight: 800;

      letter-spacing: -.5px;
    }


    .mini-stat-card small {

      opacity: .9;

      font-size: .9rem;
    }


    .stat-icon {

      position: relative;

      z-index: 2;

      font-size: 3.5rem;

      opacity: .85;
    }


    /* BREADCRUMB */

    .dashboard-colorful .breadcrumb {

      font-size: 1.05rem;
    }


    .dashboard-colorful .breadcrumb-item a {

      font-weight: 600;
    }


    /* MESSAGE DROPDOWN */

    .message-user-name {

      font-size: 1rem;

      font-weight: 600;
    }


    /* RESPONSIVE */

    @media (max-width: 768px) {

      .dashboard-number {
        font-size: 2.7rem !important;
      }

      .dashboard-money {
        font-size: 2.2rem !important;
      }

      .dashboard-card .card-body {
        padding: 18px;
      }

      .percentage-up {
        font-size: 1rem;
      }

      .stat-number {
        font-size: 1.6rem;
      }

    }

  </style>

</head>


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">


<div class="app-wrapper">


  <!-- =====================================================
       HEADER
  ====================================================== -->

  <nav class="app-header navbar navbar-expand bg-body">

    <div class="container-fluid">


      <!-- LEFT -->

      <ul class="navbar-nav">

        <li class="nav-item">

          <a
            class="nav-link"
            data-lte-toggle="sidebar"
            href="#"
            role="button"
            aria-label="Toggle sidebar"
          >

            <i class="bi bi-list"></i>

          </a>

        </li>


        <li class="nav-item d-none d-md-block">

          <a
            href="./index.html"
            class="nav-link"
          >

            <i class="bi bi-grid-1x2 me-1"></i>

            Pratinjau Langsung

          </a>

        </li>


        <li class="nav-item d-none d-md-block">

          <a
            href="./docs/introduction.html"
            class="nav-link"
          >

            <i class="bi bi-book me-1"></i>

            Dokumentasi

          </a>

        </li>

      </ul>


      <!-- RIGHT -->

      <ul class="navbar-nav ms-auto">


        <!-- =================================================
             MESSAGES
        ================================================== -->

        <li class="nav-item dropdown">

          <a
            class="nav-link"
            data-bs-toggle="dropdown"
            href="#"
            aria-label="Pesan: 3 belum dibaca"
          >

            <i class="bi bi-chat-text"></i>

            <span class="navbar-badge badge text-bg-danger">
              3
            </span>

          </a>


          <div
            class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
          >


            <!-- NURAHAMAN LATIF -->

            <a
              href="#"
              class="dropdown-item"
            >

              <div class="d-flex">

                <div class="flex-shrink-0">

                  <img
                    src="./assets/img/user1-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />

                </div>


                <div class="flex-grow-1">

                  <p class="dropdown-item-title message-user-name">

                    Nurahaman Latif

                    <span
                      class="float-end fs-7 text-danger"
                    >

                      <i class="bi bi-star-fill"></i>

                    </span>

                  </p>


                  <p class="fs-7">

                    Hubungi saya kapan saja...

                  </p>


                  <p class="fs-7 text-secondary">

                    <i
                      class="bi bi-clock-fill me-1"
                    ></i>

                    4 Jam yang lalu

                  </p>

                </div>

              </div>

            </a>


            <div class="dropdown-divider"></div>


            <!-- MUHAMMAD ALFIS -->

            <a
              href="#"
              class="dropdown-item"
            >

              <div class="d-flex">

                <div class="flex-shrink-0">

                  <img
                    src="./assets/img/user8-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />

                </div>


                <div class="flex-grow-1">

                  <p class="dropdown-item-title message-user-name">

                    Muhammad Alfis

                    <span
                      class="float-end fs-7 text-secondary"
                    >

                      <i class="bi bi-star-fill"></i>

                    </span>

                  </p>


                  <p class="fs-7">

                    Saya sudah menerima pesanmu.

                  </p>


                  <p class="fs-7 text-secondary">

                    <i
                      class="bi bi-clock-fill me-1"
                    ></i>

                    4 Jam yang lalu

                  </p>

                </div>

              </div>

            </a>


            <div class="dropdown-divider"></div>


            <!-- WARSih -->

            <a
              href="#"
              class="dropdown-item"
            >

              <div class="d-flex">

                <div class="flex-shrink-0">

                  <img
                    src="./assets/img/user3-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />

                </div>


                <div class="flex-grow-1">

                  <p class="dropdown-item-title message-user-name">

                    Warsih

                    <span
                      class="float-end fs-7 text-warning"
                    >

                      <i class="bi bi-star-fill"></i>

                    </span>

                  </p>


                  <p class="fs-7">

                    Subjek pesan ada di sini.

                  </p>


                  <p class="fs-7 text-secondary">

                    <i
                      class="bi bi-clock-fill me-1"
                    ></i>

                    4 Jam yang lalu

                  </p>

                </div>

              </div>

            </a>


            <div class="dropdown-divider"></div>


            <a
              href="#"
              class="dropdown-item dropdown-footer"
            >

              Lihat Semua Pesan

            </a>

          </div>

        </li>


        <!-- =================================================
             NOTIFICATIONS
        ================================================== -->

        <li class="nav-item dropdown">

          <a
            class="nav-link"
            data-bs-toggle="dropdown"
            href="#"
            aria-label="Notifikasi: 15 belum dibaca"
          >

            <i class="bi bi-bell-fill"></i>

            <span class="navbar-badge badge text-bg-warning">
              15
            </span>

          </a>


          <div
            class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
          >

            <span
              class="dropdown-item dropdown-header"
            >

              15 Notifikasi

            </span>


            <div class="dropdown-divider"></div>


            <a
              href="#"
              class="dropdown-item"
            >

              <i class="bi bi-envelope me-2"></i>

              4 pesan baru

              <span
                class="float-end text-secondary fs-7"
              >
                3 menit
              </span>

            </a>


            <div class="dropdown-divider"></div>


            <a
              href="#"
              class="dropdown-item"
            >

              <i class="bi bi-people-fill me-2"></i>

              8 permintaan pertemanan

              <span
                class="float-end text-secondary fs-7"
              >
                12 jam
              </span>

            </a>


            <div class="dropdown-divider"></div>


            <a
              href="#"
              class="dropdown-item"
            >

              <i class="bi bi-file-earmark-fill me-2"></i>

              3 laporan baru

              <span
                class="float-end text-secondary fs-7"
              >
                2 hari
              </span>

            </a>


            <div class="dropdown-divider"></div>


            <a
              href="#"
              class="dropdown-item dropdown-footer"
            >

              Lihat Semua Notifikasi

            </a>

          </div>

        </li>


        <!-- FULLSCREEN -->

        <li class="nav-item">

          <a
            class="nav-link"
            href="#"
            data-lte-toggle="fullscreen"
            aria-label="Toggle fullscreen"
          >

            <i
              data-lte-icon="maximize"
              class="bi bi-arrows-fullscreen"
            ></i>

            <i
              data-lte-icon="minimize"
              class="bi bi-fullscreen-exit d-none"
            ></i>

          </a>

        </li>


        <!-- DARK MODE -->

        <li class="nav-item dropdown">

          <a
            class="nav-link"
            href="#"
            id="bd-theme"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >

            <i class="bi bi-sun-fill"></i>

          </a>


          <ul class="dropdown-menu dropdown-menu-end">

            <li>

              <button
                type="button"
                class="dropdown-item"
                data-bs-theme-value="light"
              >

                <i class="bi bi-sun-fill me-2"></i>

                Terang

              </button>

            </li>


            <li>

              <button
                type="button"
                class="dropdown-item"
                data-bs-theme-value="dark"
              >

                <i class="bi bi-moon-fill me-2"></i>

                Gelap

              </button>

            </li>


            <li>

              <button
                type="button"
                class="dropdown-item"
                data-bs-theme-value="auto"
              >

                <i class="bi bi-circle-half me-2"></i>

                Otomatis

              </button>

            </li>

          </ul>

        </li>


        <!-- =================================================
             USER
        ================================================== -->

        <li class="nav-item dropdown user-menu">

          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
          >

            <img
              src="./assets/img/user2-160x160.jpg"
              class="user-image rounded-circle shadow"
              alt="Fahreza Argya"
            />

            <span class="d-none d-md-inline">

              Fahreza Argya

            </span>

          </a>


          <ul
            class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
          >

            <li class="user-header text-bg-primary">

              <img
                src="./assets/img/user2-160x160.jpg"
                class="rounded-circle shadow"
                alt="Fahreza Argya"
              />

              <p>

                Fahreza Argya - Web Developer

                <small>
                  Anggota sejak November 2023
                </small>

              </p>

            </li>


            <li class="user-body">

              <div class="row">

                <div class="col-4 text-center">
                  <a href="#">Pengikut</a>
                </div>

                <div class="col-4 text-center">
                  <a href="#">Penjualan</a>
                </div>

                <div class="col-4 text-center">
                  <a href="#">Teman</a>
                </div>

              </div>

            </li>


            <li class="user-footer">

              <a
                href="#"
                class="btn btn-outline-secondary"
              >
                Profil
              </a>


              <a
                href="#"
                class="btn btn-outline-danger float-end"
              >
                Keluar
              </a>

            </li>

          </ul>

        </li>

      </ul>

    </div>

  </nav>


  <!-- =====================================================
       SIDEBAR
  ====================================================== -->

  <aside
    class="app-sidebar bg-body-secondary shadow"
    data-bs-theme="dark"
  >


    <div class="sidebar-brand">

      <a
        href="./index.html"
        class="brand-link"
      >

        <img
          src="./assets/img/AdminLTELogo.png"
          alt="AdminLTE Logo"
          class="brand-image opacity-75 shadow"
        />

        <span class="brand-text fw-light">
          AdminLTE 4
        </span>

      </a>

    </div>


    <div class="sidebar-wrapper">

      <nav
        class="mt-2"
        aria-label="Main navigation"
      >

        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          data-accordion="false"
          id="navigation"
        >


          <li class="nav-item menu-open">

            <a
              href="#"
              class="nav-link active"
            >

              <i
                class="nav-icon bi bi-speedometer"
              ></i>

              <p>

                Dashboard

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./index.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Dashboard v1
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./index2.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Dashboard v2
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./index3.html"
                  class="nav-link active"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Dashboard v3
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="./starter.html"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-file-earmark"
              ></i>

              <p>
                Halaman Awal
              </p>

            </a>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-box-seam-fill"
              ></i>

              <p>

                Widget

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./widgets/small-box.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Small Box
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./widgets/info-box.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Info Box
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./widgets/cards.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Cards
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-envelope"
              ></i>

              <p>

                Kotak Surat

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./mailbox/inbox.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Kotak Masuk
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./mailbox/read.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Baca Pesan
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./mailbox/compose.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Tulis Pesan
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-pencil-square"
              ></i>

              <p>

                Formulir

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./forms/elements.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Elemen
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./forms/layout.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Tata Letak
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./forms/validation.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Validasi
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-table"
              ></i>

              <p>

                Tabel

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./tables/simple.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Tabel Sederhana
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./tables/data.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Data Tabel
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-graph-up"
              ></i>

              <p>

                Grafik

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./charts/apexcharts.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    ApexCharts
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-header">
            HALAMAN
          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-file-earmark-text"
              ></i>

              <p>

                Halaman

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./pages/profile.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Profil
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./pages/settings.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Pengaturan
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./pages/invoice.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Invoice
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./pages/calendar.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Kalender
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-item">

            <a
              href="./users.html"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-people"
              ></i>

              <p>
                Pengguna
              </p>

            </a>

          </li>


          <li class="nav-header">
            CONTOH
          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-box-arrow-in-right"
              ></i>

              <p>

                Autentikasi

                <i
                  class="nav-arrow bi bi-chevron-right"
                ></i>

              </p>

            </a>


            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a
                  href="./examples/login.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Masuk
                  </p>

                </a>

              </li>


              <li class="nav-item">

                <a
                  href="./examples/register.html"
                  class="nav-link"
                >

                  <i
                    class="nav-icon bi bi-circle"
                  ></i>

                  <p>
                    Daftar
                  </p>

                </a>

              </li>

            </ul>

          </li>


          <li class="nav-header">
            LABEL
          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-circle text-danger"
              ></i>

              <p>
                Penting
              </p>

            </a>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-circle text-warning"
              ></i>

              <p>
                Peringatan
              </p>

            </a>

          </li>


          <li class="nav-item">

            <a
              href="#"
              class="nav-link"
            >

              <i
                class="nav-icon bi bi-circle text-info"
              ></i>

              <p>
                Informasi
              </p>

            </a>

          </li>

        </ul>


        <div
          class="p-3 mt-3 border-top border-secondary border-opacity-25"
        >

          <a
            href="./docs/introduction.html"
            class="btn btn-sm btn-outline-light w-100"
          >

            <i class="bi bi-book"></i>

            Lihat Dokumentasi

          </a>

        </div>

      </nav>

    </div>

  </aside>


  <!-- =====================================================
       MAIN
  ====================================================== -->

  <main class="app-main dashboard-colorful">


    <!-- HEADER -->

    <div class="app-content-header">

      <div class="container-fluid">

        <div class="row align-items-center">

          <div class="col-sm-6">

            <h1 class="mb-0 fs-2 fw-bold">
              Dashboard v3
            </h1>

          </div>


          <div class="col-sm-6">

            <nav aria-label="breadcrumb">

              <ol class="breadcrumb float-sm-end mb-0">

                <li class="breadcrumb-item">

                  <a href="#">
                    Beranda
                  </a>

                </li>


                <li class="breadcrumb-item active">

                  Dashboard v3

                </li>

              </ol>

            </nav>

          </div>

        </div>

      </div>

    </div>


    <!-- CONTENT -->

    <div class="app-content">

      <div class="container-fluid">


        <!-- =================================================
             CHART ROW
        ================================================== -->

        <div class="row g-4">


          <!-- PENGUNJUNG -->

          <div class="col-lg-6">

            <div
              class="card dashboard-card visitors-card"
            >

              <div class="card-header border-0">

                <div
                  class="d-flex justify-content-between align-items-center"
                >

                  <h3 class="card-title">

                    <i
                      class="bi bi-people-fill me-2 text-primary"
                    ></i>

                    Pengunjung Toko Online

                  </h3>


                  <a
                    href="#"
                    class="link-primary fw-semibold"
                  >

                    Lihat Laporan

                  </a>

                </div>

              </div>


              <div class="card-body">


                <div class="d-flex align-items-start">

                  <p
                    class="d-flex flex-column mb-0"
                  >

                    <span class="dashboard-number">
                      820
                    </span>

                    <span class="dashboard-label">
                      Pengunjung dari Waktu ke Waktu
                    </span>

                  </p>


                  <p
                    class="ms-auto d-flex flex-column text-end mb-0"
                  >

                    <span class="percentage-up">

                      <i class="bi bi-arrow-up"></i>

                      12.5%

                    </span>


                    <span class="text-secondary">

                      Sejak minggu lalu

                    </span>

                  </p>

                </div>


                <div
                  class="position-relative mt-4 mb-4"
                >

                  <div id="visitors-chart"></div>

                </div>


                <div
                  class="d-flex flex-row justify-content-end chart-legend"
                >

                  <span class="me-3">

                    <i
                      class="bi bi-square-fill text-primary"
                    ></i>

                    Minggu Ini

                  </span>


                  <span>

                    <i
                      class="bi bi-square-fill text-secondary"
                    ></i>

                    Minggu Lalu

                  </span>

                </div>

              </div>

            </div>

          </div>


          <!-- PENJUALAN -->

          <div class="col-lg-6">

            <div
              class="card dashboard-card sales-card"
            >

              <div class="card-header border-0">

                <div
                  class="d-flex justify-content-between align-items-center"
                >

                  <h3 class="card-title">

                    <i
                      class="bi bi-cash-stack me-2 text-success"
                    ></i>

                    Penjualan

                  </h3>


                  <a
                    href="#"
                    class="link-primary fw-semibold"
                  >

                    Lihat Laporan

                  </a>

                </div>

              </div>


              <div class="card-body">


                <div class="d-flex align-items-start">

                  <p
                    class="d-flex flex-column mb-0"
                  >

                    <span class="dashboard-money">

                      Rp18.230.000

                    </span>


                    <span class="dashboard-label">

                      Penjualan dari Waktu ke Waktu

                    </span>

                  </p>


                  <p
                    class="ms-auto d-flex flex-column text-end mb-0"
                  >

                    <span class="percentage-up">

                      <i class="bi bi-arrow-up"></i>

                      33.1%

                    </span>


                    <span class="text-secondary">

                      Sejak tahun lalu

                    </span>

                  </p>

                </div>


                <div
                  class="position-relative mt-4 mb-4"
                >

                  <div id="sales-chart"></div>

                </div>


                <div
                  class="d-flex flex-row justify-content-end chart-legend"
                >

                  <span class="me-3">

                    <i
                      class="bi bi-square-fill text-primary"
                    ></i>

                    Tahun Ini

                  </span>


                  <span>

                    <i
                      class="bi bi-square-fill text-secondary"
                    ></i>

                    Tahun Lalu

                  </span>

                </div>

              </div>

            </div>

          </div>

        </div>


        <!-- =================================================
             STATISTICS
        ================================================== -->

        <div class="row g-4 mt-1">


          <!-- TOTAL PENGUNJUNG -->

          <div class="col-md-4">

            <div class="mini-stat-card stat-blue">

              <div>

                <span class="stat-title">
                  Total Pengunjung
                </span>


                <div class="stat-number">
                  12.450
                </div>


                <small>
                  +12.5% dari minggu lalu
                </small>

              </div>


              <i
                class="bi bi-people-fill stat-icon"
              ></i>

            </div>

          </div>


          <!-- TOTAL PENJUALAN -->

          <div class="col-md-4">

            <div class="mini-stat-card stat-green">

              <div>

                <span class="stat-title">
                  Total Penjualan
                </span>


                <div class="stat-number">
                  Rp18.230.000
                </div>


                <small>
                  +33.1% dari tahun lalu
                </small>

              </div>


              <i
                class="bi bi-wallet2 stat-icon"
              ></i>

            </div>

          </div>


          <!-- PRODUK -->

          <div class="col-md-4">

            <div class="mini-stat-card stat-orange">

              <div>

                <span class="stat-title">
                  Produk Terjual
                </span>


                <div class="stat-number">
                  12.000
                </div>


                <small>
                  Produk berhasil terjual
                </small>

              </div>


              <i
                class="bi bi-cart-check-fill stat-icon"
              ></i>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>


  <!-- =====================================================
       FOOTER
  ====================================================== -->

  <footer class="app-footer">

    <div class="float-end d-none d-sm-inline">

      Dashboard Admin

    </div>


    <strong>

      Copyright &copy; 2014-2026&nbsp;

      <a
        href="https://adminlte.io"
        class="text-decoration-none"
      >

        AdminLTE.io

      </a>.

    </strong>


    Semua hak dilindungi.

  </footer>


</div>


<!-- =====================================================
     JAVASCRIPT


<script
  src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
  crossorigin="anonymous"
></script>


<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  crossorigin="anonymous"
></script>


<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
  crossorigin="anonymous"
></script>


<script src="./js/adminlte.js"></script>


<!-- SIDEBAR SCROLL -->

<script>

  const SELECTOR_SIDEBAR_WRAPPER =
    '.sidebar-wrapper';


  const Default = {

    scrollbarTheme:
      'os-theme-light',

    scrollbarAutoHide:
      'leave',

    scrollbarClickScroll:
      true

  };


  document.addEventListener(
    'DOMContentLoaded',
    function () {

      const sidebarWrapper =
        document.querySelector(
          SELECTOR_SIDEBAR_WRAPPER
        );


      const isMobile =
        window.innerWidth <= 992;


      if (
        sidebarWrapper &&
        OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
        !isMobile
      ) {

        OverlayScrollbarsGlobal.OverlayScrollbars(
          sidebarWrapper,
          {
            scrollbars: {

              theme:
                Default.scrollbarTheme,

              autoHide:
                Default.scrollbarAutoHide,

              clickScroll:
                Default.scrollbarClickScroll

            }
          }
        );

      }

    }
  );

</script>


<!-- =====================================================
     APEXCHARTS

<script
  src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
  crossorigin="anonymous"
></script>


<script>

  /* =====================================================
     VISITORS CHART
  ====================================================== */

  const visitors_chart_options = {

    series: [

      {
        name: 'Minggu Ini',

        data: [
          100,
          120,
          170,
          167,
          180,
          177,
          160
        ]
      },


      {
        name: 'Minggu Lalu',

        data: [
          60,
          80,
          70,
          67,
          80,
          77,
          100
        ]
      }

    ],


    chart: {

      height: 250,

      type: 'line',

      toolbar: {
        show: false
      },

      fontFamily:
        'Source Sans 3, sans-serif'

    },


    colors: [
      '#0d6efd',
      '#adb5bd'
    ],


    stroke: {

      curve: 'smooth',

      width: 4

    },


    grid: {

      borderColor:
        '#e7e7e7',

      row: {

        colors: [
          '#f3f3f3',
          'transparent'
        ],

        opacity: .5

      }

    },


    legend: {
      show: false
    },


    markers: {

      size: 3,

      strokeWidth: 0

    },


    xaxis: {

      categories: [
        '25',
        '26',
        '27',
        '28',
        '29',
        '30',
        '31'
      ]

    },


    tooltip: {

      y: {

        formatter:
          function (val) {

            return val.toLocaleString(
              'id-ID'
            ) + ' pengunjung';

          }

      }

    }

  };


  const visitors_chart =
    new ApexCharts(

      document.querySelector(
        '#visitors-chart'
      ),

      visitors_chart_options

    );


  visitors_chart.render();



  /* =====================================================
     SALES CHART
  ====================================================== */

  const sales_chart_options = {

    series: [

      {

        name: 'Tahun Ini',

        data: [
          44,
          55,
          57,
          56,
          61,
          58,
          63,
          60,
          66
        ]

      },


      {

        name: 'Pendapatan',

        data: [
          76,
          85,
          101,
          98,
          87,
          105,
          91,
          114,
          94
        ]

      },


      {

        name: 'Arus Kas',

        data: [
          35,
          41,
          36,
          26,
          45,
          48,
          52,
          53,
          41
        ]

      }

    ],


    chart: {

      type: 'bar',

      height: 250,

      toolbar: {
        show: false
      },

      fontFamily:
        'Source Sans 3, sans-serif'

    },


    plotOptions: {

      bar: {

        horizontal: false,

        columnWidth: '55%',

        borderRadius: 3

      }

    },


    legend: {
      show: false
    },


    colors: [

      '#0d6efd',

      '#20c997',

      '#ffc107'

    ],


    dataLabels: {

      enabled: false

    },


    stroke: {

      show: true,

      width: 2,

      colors: [
        'transparent'
      ]

    },


    xaxis: {

      categories: [

        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Agu',
        'Sep',
        'Okt'

      ]

    },


    fill: {

      opacity: 1

    },


    tooltip: {

      y: {

        formatter:
          function (val) {

            return 'Rp ' +
              Number(
                val * 1000000
              ).toLocaleString(
                'id-ID'
              );

          }

      }

    }

  };


  const sales_chart =
    new ApexCharts(

      document.querySelector(
        '#sales-chart'
      ),

      sales_chart_options

    );


  sales_chart.render();

</script>


</body>
</html>
