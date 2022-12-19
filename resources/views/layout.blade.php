<?php

use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <style>
        html,
        body {
          margin: 0px;
          height: 100%;
        }

        .landingpgtext{
          width: 100%;
          position: absolute;
          top: 50%;
          left: 50%;
          margin: auto;
          transform: translateX(-50%) translateY(-50%);
          text-align: center;
    
        }
        .versiontxt{
          animation: reveal 1.5s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .landingpage {
          background: linear-gradient(-45deg, #6610f2, #696cff, #e83e8c);
	        background-size: 400% 400%;
	        animation: gradient 15s ease infinite;
	        height: 100vh;
        }

        @keyframes gradient {
	        0% {
            background-position: 0% 50%;
          }
	        50% {
            background-position: 100% 50%;
          }
	        100% {
            background-position: 0% 50%;
          }

          
        }
        @keyframes reveal {
  0% {
    transform: translate(0,100%);
    opacity: 0;
  }
  100% {
    transform: translate(0,0);
    opacity: 1;
  }
}
        .cssanimation, .cssanimation span {
    animation-duration: 1s;
    animation-fill-mode: both;
}

.cssanimation span { display: inline-block }

.leRotateYZoomIn span { animation-name: leRotateYZoomIn }
@keyframes leRotateYZoomIn {
    from {
        transform: perspective(600px) translate3d(0, -60px, -2000px) rotateY(75deg);
        opacity: 0
    }
    5% { transform: perspective(600px) translate3d(0, -60px, -1500px) rotateY(75deg) }
}
    </style>
    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://goessner.net/download/prj/jsonxml/xml2json.js"></script>
    
  </head>

  <body>

  @auth
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->


    
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                      d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                      id="path-1"
                    ></path>
                    <path
                      d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                      id="path-3"
                    ></path>
                    <path
                      d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                      id="path-4"
                    ></path>
                    <path
                      d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                      id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">StorMS</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('requestlist.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            @if(Auth::User()->role == "Contractor")
            <li class="menu-item">
              <a href="{{ route('user-material-request-form') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Analytics">Material Request</div>
              </a>
            </li>
            @elseif(Auth::User()->role == "Storekeeper")
            <li class="menu-item">
              <a href="{{ route('report.index') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                <div data-i18n="Analytics">Reporting</div>
              </a>
            </li>
            @endif
          </ul>
        </aside>
        
        <!-- / Menu -->
    

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <div id='hide'>
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                            <small class="text-muted">{{Auth::user()->role}}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>

                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
   
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          @endauth
          <!-- / Navbar -->
          </div>
            @yield('content')

            @auth
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->
            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
     
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
  @endauth

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      var drums = [];
      var count = 0;

      function setval(value, amount, id) {
        // document.getElementById('drum_no').value = value;


        if (document.getElementById(id).checked) {
          drums.push(
            {
              drum_no: value,
              balance: amount
            }
          );
        }
        else {
          const filtereddrums = drums.filter(drum => drum.drum_no !== value);
          drums = filtereddrums;
        }

        // console.log(drums);
        let total = drums.reduce(
          function (previousValue, currentValue) {
            return previousValue + currentValue.balance;
          }, 0
        );
        // console.log(total);
        document.getElementById('quantity').value = total;
      }

      function autofill(name) {
        var cablelist = document.getElementById('cablelist');

        if (name.length == 0) {
          document.getElementById("materialID").value = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("materialID").value = this.responseText;
              drum_no = document.getElementById('materialID').value;

              console.log(cablelist);
              if (((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845)) {
                document.getElementById('cable').style.display = "block";

                if ((cablelist !== null)) {
                  var xmlhttp2 = new XMLHttpRequest();
                  xmlhttp2.onreadystatechange = function () {
                    // console.log(this.responseText);
                    const drumlist = JSON.parse(this.responseText);
                    // console.log(Object.keys(drumlist));
                    const keys = Object.keys(drumlist);
                    if (cablelist.innerHTML) cablelist.innerHTML = " ";
                    for (let i = 0; i < keys.length; i++) {

                      // console.log(drumlist[keys[i]].drum_no);
                      // var li = document.createElement('li');
                      // li.value = drumlist[keys[i]].drum_no;
                      // var a = document.createElement('a');
                      // a.setAttribute('class', 'dropdown-item');
                      // a.setAttribute('href', '#');
                      // a.setAttribute('o l ick', 'setval(' + '"' + drumlist[keys[]].drum_no + '"' + ',' + drumlist[keys[i]].balance + ');');
                      // var drum_no = document.createTextNode(drumlist[keys[i]].drum_no + " | " + drumlist[keys[i]].balance);
                      // a.appendChild(drum_no);
                      // li.appendChild(a);
                      // cablelist.appendChild(li);

                      var div = document.createElement('div');
                      div.setAttribute('class', 'form-check');

                      var inp = document.createElement('input');
                      inp.setAttribute('class', 'form-check-input');
                      inp.setAttribute('type', 'checkbox');
                      inp.setAttribute('value', drumlist[keys[i]].drum_no);
                      inp.setAttribute('id', 'defaultCheck' + (i + 1));
                      inp.setAttribute('onclick', 'setval(' + '"' + drumlist[keys[i]].drum_no + '"' + ',' + drumlist[keys[i]].balance + ', this.id)');

                      // var hiddenip = document.createElement('input');
                      // hiddenip.setAttribute('id', drumlist[keys[i]].drum_no);
                      // hiddenip.setAttribute('value', drumlist[keys[i]].balance);
                      // hiddenip.setAttribute('type', 'hidden');
                      // div.appendChild(hiddenip);

                      div.appendChild(inp);

                      var label = document.createElement('label');
                      label.setAttribute('class', 'form-check-label');
                      label.setAttribute('for', 'defaultCheck' + (i + 1));
                      var txt = document.createTextNode(drumlist[keys[i]].drum_no + '........' + drumlist[keys[i]].balance);
                      label.appendChild(txt);

                      div.appendChild(label);

                      cablelist.appendChild(div);

                    }

                  }

                  xmlhttp2.open("GET", "/get-drum-list?q=" + drum_no, true);
                  xmlhttp2.send();
                }

              }
              else {
                document.getElementById('cable').style.display = "none";
              }
            }
          };
          xmlhttp.open("GET", "/get-material-id?q=" + name, true);
          xmlhttp.send();



        }

        // if(parseInt(document.getElementById("materialID").value))
      }


      function CreateNewItem() {
        count++;
        drum_no = document.getElementById("materialID").value;

        var li = document.createElement('li');
        var materialID = document.createElement('small');
        var materialName = document.createElement('h6');
        var quantity = document.createElement('p');
        li.className = "list-group-item";
        quantity.className = "mb-1";

        var matID = document.createTextNode(document.getElementById("materialID").value);
        var matName = document.createTextNode(document.getElementById("materialname").value);
        var matQ = document.createTextNode(document.getElementById("quantity").value + " pcs");
        if ((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845) matQ = document.createTextNode(document.getElementById("quantity").value + " M");

        materialID.appendChild(matID);
        materialName.appendChild(matName);
        quantity.appendChild(matQ);

        li.appendChild(materialID);
        li.appendChild(materialName);
        if ((parseInt(drum_no) >= 1000000747) && (parseInt(drum_no) <= 1000000767) || parseInt(drum_no) == 1000004845) {

          var ul = document.createElement('ol');
          ul.setAttribute('class', 'mb-3');
          drums.forEach(element => {
            console.log(element.drum_no);
            var li = document.createElement('li');
            var drumtxt = document.createTextNode(element.drum_no + ' [' + element.balance + ']');

            li.appendChild(drumtxt);

            ul.appendChild(li);
          });

          li.appendChild(ul);
        }
        li.appendChild(quantity);

        var req_date = document.createElement('input');
        var ic = document.createElement('input');
        var proj_id = document.createElement('input');
        var mat_id = document.createElement('input');
        var quantity = document.createElement('input');
        var cables = document.createElement('input');
        var del = document.createElement('span');
        var trash = document.createElement('i');

        req_date.setAttribute('name', 'req_date[]');
        ic.setAttribute('name', 'ic[]');
        proj_id.setAttribute('name', 'proj_id[]');
        mat_id.setAttribute('name', 'mat_id[]');
        quantity.setAttribute('name', 'quantity[]');
        cables.setAttribute('name', 'cables[]');
        del.setAttribute('class', 'badge bg-danger');
        trash.setAttribute('class', 'bx bx-trash me-2');

        trash.setAttribute('onclick', 'deleteMat(' + count + ')');

        del.appendChild(trash);
        li.appendChild(del);

        req_date.value = document.getElementById('req_date').innerText;
        ic.value = document.getElementById('ic').value;
        proj_id.value = document.getElementById('project').value;
        mat_id.value = document.getElementById('materialID').value;
        quantity.value = document.getElementById('quantity').value;
        cables.value = JSON.stringify(drums);


        req_date.setAttribute('type', 'hidden');
        ic.setAttribute('type', 'hidden');
        proj_id.setAttribute('type', 'hidden');
        mat_id.setAttribute('type', 'hidden');
        quantity.setAttribute('type', 'hidden');
        cables.setAttribute('type', 'hidden');

        li.appendChild(req_date);
        li.appendChild(ic);
        li.appendChild(proj_id);
        li.appendChild(mat_id);
        li.appendChild(quantity);
        li.appendChild(cables);


        li.setAttribute('id', String(count));

        // document.getElementsByName('req_date')[0].style.visibility = "hidden";
        // document.getElementsByName('ic')[0].style.visibility = "hidden";
        // document.getElementsByName('proj_id')[0].style.visibility = "hidden";
        // document.getElementsByName('mat_id')[0].style.visibility = "hidden";
        // document.getElementsByName('quantity')[0].style.visibility = "hidden";

        document.getElementById('materialList').appendChild(li);

      }

      function deleteMat(id) {
        document.getElementById(id).remove();
      }



    </script>
    
  </body>
</html>