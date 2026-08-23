<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
      } else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) {
        resolved = 'dark';
      }

      root.setAttribute('data-bs-theme', resolved);
      root.style.colorScheme = resolved;

      if (resolved !== authored) {
        root.setAttribute('data-lte-theme-resolved', '');
      }
    })();
  </script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta name="color-scheme" content="light dark" />
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

  <meta name="title" content="AdminLTE | Dashboard v3" />
  <meta name="author" content="ColorlibHQ" />
  <meta
    name="description"
    content="AdminLTE is a free Bootstrap 5 admin dashboard template."
  />

  <link rel="preload" href="./css/adminlte.css" as="style" />

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

  <link rel="stylesheet" href="./css/adminlte.css" />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    crossorigin="anonymous"
  />
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

<div class="app-wrapper">

  <!-- HEADER -->
  <nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">

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
          <a href="./index.html" class="nav-link">
            <i class="bi bi-grid-1x2 me-1"></i>
            Live preview
          </a>
        </li>

        <li class="nav-item d-none d-md-block">
          <a href="./docs/introduction.html" class="nav-link">
            <i class="bi bi-book me-1"></i>
            Documentation
          </a>
        </li>

      </ul>

      <!-- RIGHT NAVBAR -->
      <ul class="navbar-nav ms-auto">

        <!-- MESSAGES -->
        <li class="nav-item dropdown">

          <a
            class="nav-link"
            data-bs-toggle="dropdown"
            href="#"
            aria-label="Messages: 3 unread"
          >
            <i class="bi bi-chat-text"></i>
            <span class="navbar-badge badge text-bg-danger">3</span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

            <!-- FAHREZA MAHESWARA -->
            <a href="#" class="dropdown-item">

              <div class="d-flex">

                <div class="flex-shrink-0">
                  <img
                    src="./assets/img/user1-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>

                <div class="flex-grow-1">

                  <p class="dropdown-item-title">
                    Fahreza Maheswara

                    <span class="float-end fs-7 text-danger">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </p>

                  <p class="fs-7">
                    Call me whenever you can...
                  </p>

                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i>
                    4 Hours Ago
                  </p>

                </div>

              </div>

            </a>

            <div class="dropdown-divider"></div>

            <!-- MUHAMMAD ALFIS -->
            <a href="#" class="dropdown-item">

              <div class="d-flex">

                <div class="flex-shrink-0">
                  <img
                    src="./assets/img/user8-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>

                <div class="flex-grow-1">

                  <p class="dropdown-item-title">
                    Muhammad Alfis

                    <span class="float-end fs-7 text-secondary">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </p>

                  <p class="fs-7">
                    I got your message bro
                  </p>

                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i>
                    4 Hours Ago
                  </p>

                </div>

              </div>

            </a>

            <div class="dropdown-divider"></div>

            <!-- NURAHMAN LATIF -->
            <a href="#" class="dropdown-item">

              <div class="d-flex">

                <div class="flex-shrink-0">
                  <img
                    src="./assets/img/user3-128x128.jpg"
                    alt=""
                    class="img-size-50 rounded-circle me-3"
                  />
                </div>

                <div class="flex-grow-1">

                  <p class="dropdown-item-title">
                    Nurahman Latif

                    <span class="float-end fs-7 text-warning">
                      <i class="bi bi-star-fill"></i>
                    </span>
                  </p>

                  <p class="fs-7">
                    The subject goes here
                  </p>

                  <p class="fs-7 text-secondary">
                    <i class="bi bi-clock-fill me-1"></i>
                    4 Hours Ago
                  </p>

                </div>

              </div>

            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer">
              See All Messages
            </a>

          </div>

        </li>

        <!-- NOTIFICATIONS -->
        <li class="nav-item dropdown">

          <a
            class="nav-link"
            data-bs-toggle="dropdown"
            href="#"
            aria-label="Notifications: 15 unread"
          >
            <i class="bi bi-bell-fill"></i>
            <span class="navbar-badge badge text-bg-warning">15</span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

            <span class="dropdown-item dropdown-header">
              15 Notifications
            </span>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
              <i class="bi bi-envelope me-2"></i>
              4 new messages
              <span class="float-end text-secondary fs-7">
                3 mins
              </span>
            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
              <i class="bi bi-people-fill me-2"></i>
              8 friend requests
              <span class="float-end text-secondary fs-7">
                12 hours
              </span>
            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item">
              <i class="bi bi-file-earmark-fill me-2"></i>
              3 new reports
              <span class="float-end text-secondary fs-7">
                2 days
              </span>
            </a>

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer">
              See All Notifications
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
                Light
              </button>
            </li>

            <li>
              <button
                type="button"
                class="dropdown-item"
                data-bs-theme-value="dark"
              >
                <i class="bi bi-moon-fill me-2"></i>
                Dark
              </button>
            </li>

            <li>
              <button
                type="button"
                class="dropdown-item"
                data-bs-theme-value="auto"
              >
                <i class="bi bi-circle-half me-2"></i>
                Auto
              </button>
            </li>

          </ul>

        </li>

        <!-- USER -->
        <li class="nav-item dropdown user-menu">

          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
          >

            <img
              src="./assets/img/user2-160x160.jpg"
              class="user-image rounded-circle shadow"
              alt="Fahreza Maheswara"
            />

            <span class="d-none d-md-inline">
              Fahreza Maheswara
            </span>

          </a>

          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

            <li class="user-header text-bg-primary">

              <img
                src="./assets/img/user2-160x160.jpg"
                class="rounded-circle shadow"
                alt="Fahreza Maheswara"
              />

              <p>
                Fahreza Maheswara - Web Developer
                <small>
                  Member since Nov. 2023
                </small>
              </p>

            </li>

            <li class="user-body">

              <div class="row">

                <div class="col-4 text-center">
                  <a href="#">Followers</a>
                </div>

                <div class="col-4 text-center">
                  <a href="#">Sales</a>
                </div>

                <div class="col-4 text-center">
                  <a href="#">Friends</a>
                </div>

              </div>

            </li>

            <li class="user-footer">

              <a
                href="#"
                class="btn btn-outline-secondary"
              >
                Profile
              </a>

              <a
                href="#"
                class="btn btn-outline-danger float-end"
              >
                Sign out
              </a>

            </li>

          </ul>

        </li>

      </ul>

    </div>
  </nav>

  <!-- SIDEBAR -->
  <aside
    class="app-sidebar bg-body-secondary shadow"
    data-bs-theme="dark"
  >

    <div class="sidebar-brand">

      <a href="./index.html" class="brand-link">

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

      <nav class="mt-2" aria-label="Main navigation">

        <ul
          class="nav sidebar-menu flex-column"
          data-lte-toggle="treeview"
          data-accordion="false"
          id="navigation"
        >

          <li class="nav-item menu-open">

            <a href="#" class="nav-link active">

              <i class="nav-icon bi bi-speedometer"></i>

              <p>
                Dashboard
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./index.html" class="nav-link">

                  <i class="nav-icon bi bi-circle"></i>

                  <p>
                    Dashboard v1
                  </p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index2.html" class="nav-link">

                  <i class="nav-icon bi bi-circle"></i>

                  <p>
                    Dashboard v2
                  </p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./index3.html" class="nav-link active">

                  <i class="nav-icon bi bi-circle"></i>

                  <p>
                    Dashboard v3
                  </p>

                </a>

              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="./starter.html" class="nav-link">

              <i class="nav-icon bi bi-file-earmark"></i>

              <p>
                Starter Page
              </p>

            </a>

          </li>

          <li class="nav-item">

            <a href="./generate/theme.html" class="nav-link">

              <i class="nav-icon bi bi-palette"></i>

              <p>
                Theme Generate
              </p>

            </a>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-box-seam-fill"></i>

              <p>
                Widgets
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./widgets/small-box.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Small Box</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./widgets/info-box.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Info Box</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./widgets/cards.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Cards</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-clipboard-fill"></i>

              <p>
                Layout Options
                <span class="nav-badge badge text-bg-secondary me-3">
                  12
                </span>
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./layout/unfixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Default Sidebar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/fixed-sidebar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/fixed-header.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Fixed Header</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/fixed-footer.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/fixed-complete.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Fixed Complete</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/sidebar-mini.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Sidebar Mini</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/top-nav.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Top Nav</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./layout/layout-rtl.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Layout RTL</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-envelope"></i>

              <p>
                Mailbox
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./mailbox/inbox.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Inbox</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./mailbox/read.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Read Message</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./mailbox/compose.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Compose</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-pencil-square"></i>

              <p>
                Forms
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./forms/elements.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Elements</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./forms/layout.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Layout</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./forms/validation.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Validation</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./forms/wizard.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Wizard</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-table"></i>

              <p>
                Tables
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./tables/simple.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Simple Tables</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./tables/data.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Data Tables</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-graph-up"></i>

              <p>
                Charts
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./charts/apexcharts.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>ApexCharts</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-header">
            PAGES
          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-file-earmark-text"></i>

              <p>
                Pages
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="./pages/profile.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./pages/settings.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Settings</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./pages/invoice.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Invoice</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./pages/calendar.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Calendar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./pages/kanban.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Kanban</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./pages/chat.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Chat</p>
                </a>
              </li>

            </ul>

          </li>

          <li class="nav-item">

            <a href="./users.html" class="nav-link">

              <i class="nav-icon bi bi-people"></i>

              <p>
                Users
              </p>

            </a>

          </li>

          <li class="nav-header">
            EXAMPLES
          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-box-arrow-in-right"></i>

              <p>
                Auth
                <i class="nav-arrow bi bi-chevron-right"></i>
              </p>

            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="./examples/login.html" class="nav-link">

                  <i class="nav-icon bi bi-circle"></i>

                  <p>
                    Login
                  </p>

                </a>

              </li>

              <li class="nav-item">

                <a href="./examples/register.html" class="nav-link">

                  <i class="nav-icon bi bi-circle"></i>

                  <p>
                    Register
                  </p>

                </a>

              </li>

            </ul>

          </li>

          <li class="nav-header">
            LABELS
          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-circle text-danger"></i>

              <p>
                Important
              </p>

            </a>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-circle text-warning"></i>

              <p>
                Warning
              </p>

            </a>

          </li>

          <li class="nav-item">

            <a href="#" class="nav-link">

              <i class="nav-icon bi bi-circle text-info"></i>

              <p>
                Informational
              </p>

            </a>

          </li>

        </ul>

        <div class="p-3 mt-3 border-top border-secondary border-opacity-25">

          <a
            href="./docs/introduction.html"
            class="btn btn-sm btn-outline-light w-100"
          >
            <i class="bi bi-book"></i>
            View documentation
          </a>

        </div>

      </nav>

    </div>

  </aside>

  <!-- MAIN -->
  <main class="app-main">

    <div class="app-content-header">

      <div class="container-fluid">

        <div class="row">

          <div class="col-sm-6">

            <h1 class="mb-0 fs-3">
              Dashboard v3
            </h1>

          </div>

          <div class="col-sm-6">

            <nav aria-label="breadcrumb">

              <ol class="breadcrumb float-sm-end">

                <li class="breadcrumb-item">
                  <a href="#">
                    Home
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

    <div class="app-content">

      <div class="container-fluid">

        <div class="row">

          <!-- VISITORS -->
          <div class="col-lg-6">

            <div class="card mb-4">

              <div class="card-header border-0">

                <div class="d-flex justify-content-between">

                  <h3 class="card-title">
                    Online Store Visitors
                  </h3>

                  <a href="#" class="link-primary">
                    View Report
                  </a>

                </div>

              </div>

              <div class="card-body">

                <div class="d-flex">

                  <p class="d-flex flex-column">

                    <span class="fw-bold fs-5">
                      820
                    </span>

                    <span>
                      Visitors Over Time
                    </span>

                  </p>

                  <p class="ms-auto d-flex flex-column text-end">

                    <span class="text-success">

                      <i class="bi bi-arrow-up"></i>
                      12.5%

                    </span>

                    <span class="text-secondary">
                      Since last week
                    </span>

                  </p>

                </div>

                <div class="position-relative mb-4">

                  <div id="visitors-chart"></div>

                </div>

                <div class="d-flex flex-row justify-content-end">

                  <span class="me-2">

                    <i class="bi bi-square-fill text-primary"></i>
                    This Week

                  </span>

                  <span>

                    <i class="bi bi-square-fill text-secondary"></i>
                    Last Week

                  </span>

                </div>

              </div>

            </div>

            <!-- PRODUCTS -->
            <div class="card mb-4">

              <div class="card-header border-0">

                <h3 class="card-title">
                  Products
                </h3>

              </div>

              <div class="card-body table-responsive p-0">

                <table class="table table-striped align-middle">

                  <thead>

                    <tr>

                      <th>
                        Product
                      </th>

                      <th>
                        Price
                      </th>

                      <th>
                        Sales
                      </th>

                      <th>
                        More
                      </th>

                    </tr>

                  </thead>

                  <tbody>

                    <tr>

                      <td>
                        <img
                          src="./assets/img/default-150x150.png"
                          class="rounded-circle img-size-32 me-2"
                        />
                        Some Product
                      </td>

                      <td>
                        $13 USD
                      </td>

                      <td>
                        <small class="text-success">
                          <i class="bi bi-arrow-up"></i>
                          12%
                        </small>
                        12,000 Sold
                      </td>

                      <td>
                        <a href="#" class="text-secondary">
                          <i class="bi bi-search"></i>
                        </a>
                      </td>

                    </tr>

                    <tr>

                      <td>
                        <img
                          src="./assets/img/default-150x150.png"
                          class="rounded-circle img-size-32 me-2"
                        />
                        Another Product
                      </td>

                      <td>
                        $29 USD
                      </td>

                      <td>
                        <small class="text-info">
                          <i class="bi bi-arrow-down"></i>
                          0.5%
                        </small>
                        123,234 Sold
                      </td>

                      <td>
                        <a href="#" class="text-secondary">
                          <i class="bi bi-search"></i>
                        </a>
                      </td>

                    </tr>

                    <tr>

                      <td>
                        <img
                          src="./assets/img/default-150x150.png"
                          class="rounded-circle img-size-32 me-2"
                        />
                        Amazing Product
                      </td>

                      <td>
                        $1,230 USD
                      </td>

                      <td>
                        <small class="text-danger">
                          <i class="bi bi-arrow-down"></i>
                          3%
                        </small>
                        198 Sold
                      </td>

                      <td>
                        <a href="#" class="text-secondary">
                          <i class="bi bi-search"></i>
                        </a>
                      </td>

                    </tr>

                    <tr>

                      <td>

                        <img
                          src="./assets/img/default-150x150.png"
                          class="rounded-circle img-size-32 me-2"
                        />

                        Perfect Item

                        <span class="badge text-bg-danger">
                          NEW
                        </span>

                      </td>

                      <td>
                        $199 USD
                      </td>

                      <td>

                        <small class="text-success">
                          <i class="bi bi-arrow-up"></i>
                          63%
                        </small>

                        87 Sold

                      </td>

                      <td>

                        <a href="#" class="text-secondary">
                          <i class="bi bi-search"></i>
                        </a>

                      </td>

                    </tr>

                  </tbody>

                </table>

              </div>

            </div>

          </div>

          <!-- SALES -->
          <div class="col-lg-6">

            <div class="card mb-4">

              <div class="card-header border-0">

                <div class="d-flex justify-content-between">

                  <h3 class="card-title">
                    Sales
                  </h3>

                  <a href="#" class="link-primary">
                    View Report
                  </a>

                </div>

              </div>

              <div class="card-body">

                <div class="d-flex">

                  <p class="d-flex flex-column">

                    <span class="fw-bold fs-5">
                      $18,230.00
                    </span>

                    <span>
                      Sales Over Time
                    </span>

                  </p>

                  <p class="ms-auto d-flex flex-column text-end">

                    <span class="text-success">

                      <i class="bi bi-arrow-up"></i>
                      33.1%

                    </span>

                    <span class="text-secondary">
                      Since Past Year
                    </span>

                  </p>

                </div>

                <div class="position-relative mb-4">

                  <div id="sales-chart"></div>

                </div>

                <div class="d-flex flex-row justify-content-end">

                  <span class="me-2">

                    <i class="bi bi-square-fill text-primary"></i>
                    This year

                  </span>

                  <span>

                    <i class="bi bi-square-fill text-secondary"></i>
                    Last year

                  </span>

                </div>

              </div>

            </div>

            <!-- OVERVIEW -->
            <div class="card">

              <div class="card-header border-0">

                <h3 class="card-title">
                  Online Store Overview
                </h3>

              </div>

              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">

                  <p class="text-success fs-2">
                    <i class="bi bi-arrow-repeat"></i>
                  </p>

                  <p class="d-flex flex-column text-end">

                    <span class="fw-bold">

                      <i class="bi bi-graph-up-arrow text-success"></i>
                      12%

                    </span>

                    <span class="text-secondary">
                      CONVERSION RATE
                    </span>

                  </p>

                </div>

                <div class="d-flex justify-content-between align-items-center border-bottom mb-3">

                  <p class="text-info fs-2">
                    <i class="bi bi-cart"></i>
                  </p>

                  <p class="d-flex flex-column text-end">

                    <span class="fw-bold">

                      <i class="bi bi-graph-up-arrow text-info"></i>
                      0.8%

                    </span>

                    <span class="text-secondary">
                      SALES RATE
                    </span>

                  </p>

                </div>

                <div class="d-flex justify-content-between align-items-center">

                  <p class="text-danger fs-2">
                    <i class="bi bi-people"></i>
                  </p>

                  <p class="d-flex flex-column text-end">

                    <span class="fw-bold">

                      <i class="bi bi-graph-down-arrow text-danger"></i>
                      1%

                    </span>

                    <span class="text-secondary">
                      REGISTRATION RATE
                    </span>

                  </p>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </main>

  <!-- FOOTER -->
  <footer class="app-footer">

    <div class="float-end d-none d-sm-inline">
      Anything you want
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

    All rights reserved.

  </footer>

</div>

<!-- SCRIPTS -->

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

<script>

  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';

  const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
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
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          }
        );

      }

    }
  );

</script>

<!-- APEXCHARTS -->

<script
  src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
  crossorigin="anonymous"
></script>

<script>

  const visitors_chart_options = {

    series: [

      {
        name: 'High - 2023',
        data: [
          100,
          120,
          170,
          167,
          180,
          177,
          160
        ],
      },

      {
        name: 'Low - 2023',
        data: [
          60,
          80,
          70,
          67,
          80,
          77,
          100
        ],
      },

    ],

    chart: {
      height: 200,
      type: 'line',
      toolbar: {
        show: false,
      },
    },

    colors: [
      '#0d6efd',
      '#adb5bd'
    ],

    stroke: {
      curve: 'smooth',
    },

    grid: {
      borderColor: '#e7e7e7',
      row: {
        colors: [
          '#f3f3f3',
          'transparent'
        ],
        opacity: 0.5,
      },
    },

    legend: {
      show: false,
    },

    markers: {
      size: 1,
    },

    xaxis: {

      categories: [
        '22th',
        '23th',
        '24th',
        '25th',
        '26th',
        '27th',
        '28th'
      ],

    },

  };

  const visitors_chart =
    new ApexCharts(
      document.querySelector(
        '#visitors-chart'
      ),
      visitors_chart_options
    );

  visitors_chart.render();


  const sales_chart_options = {

    series: [

      {
        name: 'Net Profit',
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
        ],
      },

      {
        name: 'Revenue',
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
        ],
      },

      {
        name: 'Free Cash Flow',
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
        ],
      },

    ],

    chart: {
      type: 'bar',
      height: 200,
    },

    plotOptions: {

      bar: {
        horizontal: false,
        columnWidth: '55%',
      },

    },

    legend: {
      show: false,
    },

    colors: [
      '#0d6efd',
      '#20c997',
      '#ffc107'
    ],

    dataLabels: {
      enabled: false,
    },

    stroke: {
      show: true,
      width: 2,
      colors: ['transparent'],
    },

    xaxis: {

      categories: [
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct'
      ],

    },

    fill: {
      opacity: 1,
    },

    tooltip: {

      y: {

        formatter: function (val) {

          return '$ ' +
            val +
            ' thousands';

        },

      },

    },

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

=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Master Layout</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Theme style AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar / Header Atas -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <li class="nav-item">
            <a href="/form" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Form Page</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>Login Page</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Tempat Isi Konten Dinamis -->
  <div class="content-wrapper">
    @yield('konten')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Laravel Master Layout
    </div>
    <strong>Copyright &copy; 2026 AdminLTE.io.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
>>>>>>> 7d9a0063dcc08e55351ad613fcb2f2512dd98ab7
</body>
</html>