<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                <i class="bi bi-house-door-fill" style="font-size: 18px;"></i>
                Yönetim Paneli
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
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
          <h1 class="h2">Kullanıcılar</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="/users/create" class="btn btn-sm btn-outline-danger"> Yeni </a>
            </div>
          </div>
        </div>

        <table class="table table-bordered mt-5">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ad Soyad</th>
              <th scope="col">E-Posta</th>
              <th scope="col">Telefon</th>
              <th scope="col">Şehir</th>
              <th scope="col">İlçe</th>
              <th scope="col">Adres</th>
              <th scope="col">Durum</th>
              <th scope="col">İşlemler</th>
            </tr>
          </thead>
         
          <tbody> 
            @if(count($users)>0)
              @foreach($users as $user)
                <tr >
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $user -> name}} {{ $user -> surname}}</td>
                  <td>{{ $user -> email}}</td>
                  <td>{{ $user -> phoneNumber}}</td>
                  <td>{{ $user -> city}}</td>
                  <td>{{ $user -> ilce}}</td>
                  <td>{{ $user -> adress}}</td>
                  <td>{{ $user -> is_active}}</td>
                  <th scope="col">
                    <ul class="nav float-start">
                      <li class="nav-item">
                        <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                          <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                          Güncelle
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-black list-item-delete" href="{{url("/users/$user->user_id")}}">
                          <i class="bi bi-trash3-fill" style="font-size: 15px;"></i>
                          Sil
                        </a>
                      </li>
                    </ul>
                  </th>
                </tr>
              @endforeach
            @else
                <tr>
                  <td colspan="9"><p class="text-center">Herhangi Bir Kullanıcı Bulunamadı</p></td>
                </tr>
            @endif
          </tbody>
        </table>
      </main>
    </div>
  </div>


    <script src="{{asset('front/js/bootstrap.min.js')}}" ></script>
  </body>
</html>



