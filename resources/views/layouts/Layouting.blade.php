<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        <!-- Sidebar -->
        <div class="row">
          <div class="sidecol">
            <ul class="nav flex-column">
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="{{ asset('img/sidebar_icon_0.svg') }}" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_1.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_2.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_3.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_4.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_5.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_6.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_7.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_8.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem mx-auto">
                <a class="nav-link" href="#"><img class="sidebar_icon" src="img/sidebar_icon_9.svg" style="margin-right:5px"></img></a>
              </li>
              <li class="nav-item navitem justify-content-end mx-auto">
                <a class="nav-link active" href="#"><img class="sidebar_icon" src="img/sidebar_icon_1.svg" style="margin-right:5px"></img></a>
              </li>
            </ul>           
          </div>

          <!-- Navbar-->
          <div class="col navcol">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#EBEBEB;">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <span class="navbar-text" style="margin-right:12px">Project</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <button class="btn btn-secondary btn-outline-light text-body dropdown-toggle" style="background: #FCFCFC; border-radius: 6px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                      Virtusee Project Name
                      <img src="img/dropdown arrow.svg" style="margin-left:32px"></img>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                </ul>
                <span class="navbar-text">
                  <img src="img/lonceng.svg" style="margin-right:5px"></img>Help and Support
                </span>
                <span class="linedivide1"></span>
                <div class="dropdown">
                  <button class="btn btn-secondary text-body dropdown-toggle" style="background:#EBEBEB; border-color:#EBEBEB;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="img/icon profil.svg" alt="" style="margin-right:5px"></img>
                      Dropdown button
                      <img src="img/dropdown arrow.svg" alt="" style="margin-left:32px"></img>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
              </div>
            </nav>
            
            <!-- Main Content Start-->
            <div class="container">
              <table class="table"  style="margin-top:63px; margin-left:146px; width: 1172px;">
                <thead>
                  <tr>
                    <th scope="col"> Add Member</th>
                    <th scope="col">|</th>
                    <th scope="col"> Set Inactive</th>
                    <th scope="col">|</th>
                    <th scope="col">Add to Download (Queue)</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">
                      <div class="form-inline" >
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button style="background:#114483; margin-left: 5px;" class="btn btn-primary" type="submit">
                          <img src="img/search.svg"></img>
                        </button>
                      </div>
                    </th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th scope="col">
                      <a href=""><img src="img/active_icon.svg" alt=""></a>
                    </th>
                    <th scope="col">
                      <a href=""><img src="img/inactive_icon.svg" alt=""></a>
                    </th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Add Attribute</th>
                    <th scope="col">|</th>
                    <th scope="col">Shown Column</th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                    <th scope="col">checkbox</th>
                    <th scope="col">ID</th>
                    <th scope="col">Mobile User Name</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
              </table>
            </div>     
            <!-- Main Content End-->

          </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>