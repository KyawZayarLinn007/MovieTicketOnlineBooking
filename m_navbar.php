 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script>
     $(document).ready(function() {
         $(document).on("click", "#accInfo", function() {
             $(".popUpAcc").fadeIn(1000);
             $(".popUpAcc").css("display", "flex");
         });
         $(document).on("click", "#exitPop", function() {
             $(".popUpAcc").fadeOut(1000);
         });
     });
 </script>
 <style>
     .navbar-brand {
         width: 12%;
     }

     .nav-item {
         width: 11%;
         text-align: center;
     }

     .nav-link {
         color: white;
         text-decoration: none;
     }

     a {
         border-radius: 50px;
     }

     a:hover {
         transition: 1s;
         background: black;
         color: #efefef;
     }

     .search {
         background-image: url(https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/search-512.png);
         background-size: 20px 20px;
         background-repeat: no-repeat;
         background-position: 2%;
         border-radius: 50px;
         outline: none;
         border: none;
     }

     .dropdown-menu {
         background: black;
         border: grey;
     }

     .dropdown-item {
         color: white;
     }

     .dropdown-item:hover {
         color: white;
         background: red;
     }

     .popUpAcc {
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         position: fixed;
         z-index: 100;
         display: none;
     }

     .accInfo {
         height: 63%;
         width: 57%;
         background-color: white;
         color: #070707;
         position: fixed;
         box-sizing: border-box;
         border-radius: 25px;
     }

     .card-header {
         height: 12%;
         padding-top: 2%;
     }

     .userInfo {
         width: 30%;
         float: left;
         text-align: center;
     }

     .accInfo p {
         padding: 20px;
     }

     .editIcon {
         float: left;
         width: 10%;
     }

     .editIcon i {
         padding: 31px;
         cursor: pointer;
     }
 </style>
 </head>

 <body>
     <div class="popUpAcc justify-content-center align-items-center">
         <div class="accInfo">
             <div class="card-header px-5">Account Info<i class="fas fa-times-circle float-end fa-2x" id="exitPop" style="color:red;"></i></div>
             <div class="userInfo">
                 <p>Username:</p>
                 <p>Email Address:</p>
                 <p>Ph No:</p>
                 <p>Bank Account:</p>
             </div>
             <div style="width: 40%;float: left;text-align: right;">
                 <p>username</p>
                 <p>Email Address</p>
                 <p>Ph No</p>
                 <p>Bank Account</p>
             </div>
             <div class="editIcon"><i class="fas fa-edit" style="color:red;"></i><i class="fas fa-edit" style="color:red;"></i><i class="fas fa-edit" style="color:red;"></i><i class="fas fa-edit" style="color:red;"></i></div>
         </div>
     </div>
     <nav class="navbar navbar-expand-lg bg-danger">
         <div class="container-fluid">
             <p class="navbar-brand text-center" href="#">Logo</p>
             <div class="collapse navbar-collapse">
                 <ul class="navbar-nav mb-2 mb-lg-0 d-flex justify-content-around w-100">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Contact</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">About Us</a>
                     </li>
                     <li class="nav-item w-25">
                         <input class="search w-100 mt-2 ps-5" type="search" placeholder="Search..." aria-label="Search">
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="fas fa-user px-2"></i>Username</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" id="accInfo" href="#">Account Info</a></li>
                             <li><a class="dropdown-item" href="#">History</a></li>
                             <li>
                                 <hr class="dropdown-divider" style="border:1px solid white;">
                             </li>
                             <li><a class="dropdown-item" href="#">Log out</a></li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>