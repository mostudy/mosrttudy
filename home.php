<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:home.php');
}

?>
<html>

<head>

    <title></title>
    <link rel="stylesheet" href="home.css">
    <meta charset="utf-8">
		<title>Home Page</title>
		<link href="home.css" rel="stylesheet" type="text/css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>		</head>
   
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


 <style>





 

    </style>
</head>
<body class="sidebar-is-reduced">
    <header class="l-header">
      <div class="l-header__inner clearfix">
       
       <p class="h2">Dr: Ahmed Ali Zaher</p>
        <div class="header-icons-group">
        
        <a href="logout.php">

 <div class="c-header-icon logout"><i class="fa fa-power-off"></i></div></a>
        </div>

      </div>
    </header>
    <div class="l-sidebar">
      <div class="logo">
        <div class="logo__txt">D</div>
      </div>
      <div class="l-sidebar__content">
        <nav class="c-menu js-menu">
          <ul class="u-list">
            <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
              <div class="c-menu__item__inner"><i class="fa fa-plane"></i>
                <div class="c-menu-item__title"><span>Flights</span></div>
              </div>
            </li>
           
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Statistics">
              <div class="c-menu__item__inner"><i class="far fa-chart-bar"></i>
                <div class="c-menu-item__title"><span>Statistics</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Gifts">
              <div class="c-menu__item__inner"><i class="fa fa-gift"></i>
                <div class="c-menu-item__title"><span>Gifts</span></div>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Settings">
              <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
                <div class="c-menu-item__title"><span>Settings</span></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  
   
    <div class="main">
        <div class="med">
        <a href="http://localhost/projecttt/mgmo3a.php">
            <div class=" div1 animate__animated animate__slideInUp animate__slow	2s">
                <img class="img-d1" src="people.png">
                <h3>مجموعات الطلاب </h3>
        </a>
    </div>
    <a href="http://localhost/projecttt/scheduling/index.php">
        <div class="div7 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d5" src="speech-bubble.png">
            <h6 class="h8">مواعيد الصفوف</h6>
    </a>
    </div>

</div>

<div class="med2">
    <a href="http://localhost/projecttt/mgmo3a_masrofat.php">
        <div class="div3 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d3" src="receipt.png">
            <h5> مصروفات</h5>
    </a>
    </div>
    <a href="http://localhost/projecttt/att.php">
        <div class="div6 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d5" src="frequency.png">
            <h6 class="h9">غياب و حضور</h6>
    </a>
    </div>
</div>
    
<div class="med3">

    <a href="http://localhost/projecttt/study/login.php">
        <div class="div4 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d4" src="team.png">
            <h6> بيانات الطلاب</h6>
    </a>
    </div>


    <a href="http://localhost/projecttt/mgmo3a_natiga.php">
        <div class="div5 animate__animated animate__slideInUp animate__slow	2s">
            <img class="img-d4" src="pass.png">
            <h6 class="h6"> نتائج الامتحانات</h6>
    </a>
    </div>

</div>

  


    

    </div>
</body>

</html>
