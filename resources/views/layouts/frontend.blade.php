<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Katy Shop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{  url('frontend/css/style.css')}}">
</head>
<body>
      <header>
        <div class="top-header">
          <div class="container hidden-sm hidden-xs">
            <div class="row">
              <div class="col-sm-12 col-md-1">
                logo  
              </div>
              <div class="col-sm-12 col-md-5">
                <div class="searchbox">
                  <form class="form-inline" method="GET" action="/search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" id="topSearchKeyword" placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm</button>
                </form>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-3">
                      <div class="boxed-content left-aligned">
                          <h2 class="boxed-content-title"><a href="https://docs.google.com/forms/d/e/1FAIpQLSeH7mfQMmLLV_dlGKrf-X5Y8CRlxr4shJ_un7JWsG_qaLmcSg/viewform" target="_blank">Góp ý <br> Than phiền</a></h2>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="boxed-content left-aligned" data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="Miễn phí giao hàng toàn quốc cho Đơn hàng từ 500.000đ (nội thành HCM) - 1.000.000đ (ngoại thành HCM)">
                          <span class="icon icon-truck"></span>
                          <h2 class="boxed-content-title">Giao hàng <br> Toàn quốc</h2>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="boxed-content left-aligned" data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="Tổng đài chăm sóc và Hỗ trợ Khách hàng <br /> Thứ 2 - 7: hoạt động từ 8:30 - 20:00 <br /> Chủ nhật: hoạt động từ 8:30 - 17:00">
                          <span class="icon icon-phone"></span>
                          <h2 class="boxed-content-title">Đặt hàng <br>(028) 7307 1441</h2>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3">
                      <div class="boxed-content left-aligned" data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="Bảo hành 365 ngày. Đổi trả trong 7 ngày">
                          <h2 class="boxed-content-title">BẢO HÀNH <br>365 NGÀY</h2>
                      </div>
                  </div>
              </div>
              </div>
            </div>
          </div>
        </div>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">Katy Shop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Mới về<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bán chạy<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Áo thun
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Áo thun No Style</a>
                      <a class="dropdown-item" href="#">Áo thun Adachi</a>
                      <a class="dropdown-item" href="#">Áo thun KiriMaru</a>
                      <a class="dropdown-item" href="#">Áo thun Mabư</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Áo khoác
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Áo sơ mi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Quần dài
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Giày nam
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Giày nữ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sandal - Dép
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Balo
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item>
                    <a href=""><i class="fa fa-shopping-cart" style="font-size: 25px; color: red"></i></a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>    
  <div class="container">
    @yield('content')
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>