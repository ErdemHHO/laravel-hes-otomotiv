<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hes Otomotiv Yönetim Paneli - @yield("title") </title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('front/css/dashboard.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  <body>



  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">HES OTOMOTİV</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Çıkış Yap</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link side-link" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                <i class="bi bi-house-door-fill" style="font-size: 18px;"></i>
                Yönetim Paneli
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link side-link" href="/products">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-table" style="font-size: 18px;"></i>
                Ürünler
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link side-link" href="/categories">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-border-all" style="font-size: 18px;"></i>
                Kategoriler
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link side-link" href="/series">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-123" style="font-size: 18px;"></i>
                Seriler
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link side-link" href="/cars">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-car-front-fill" style="font-size: 18px;"></i>
                Arabalar
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link side-link" href="/brands">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-star-fill" style="font-size: 18px;"></i>
                Markalar
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link side-link" href="/users">
                <span data-feather="file" class="align-text-bottom"></span>
                <i class="bi bi-people-fill" style="font-size: 18px;"></i>
                Kullanıcılar
              </a>
            </li>
          </ul>

        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">@yield("title")</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="@yield("btn_url")" class="btn btn-sm btn-outline-success"><span
                data-feather="@yield("btn_icon")"></span> @yield("btn_label")</a>
            </div>
          </div>
        </div>
        <h2>@yield("subtitle")</h2>
        @yield("content")

      </main>
    </div>
  </div>


    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/axios.min.js') }}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}" ></script>
    <script>
        $(document).ready(function() {
            $("a.list-item-delete").on("click", function(e) {
                e.preventDefault();
                let url = $(this).attr("href");
                if (url !== null) {
                    let confirmation = confirm("Bu Kaydı Silmek İstediğinize Emin Misiniz ?")
                    if(confirmation){
                      axios.delete(url).then(result => {
                        console.log(result.data);
                        $("#"+result.data.id).remove();
                      }).catch(error => {
                          console.log(error);
                      });
                    }
                }
            });
        });
    </script>
  </body>
</html>



