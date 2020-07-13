<?php
include_once "base.php";

if(empty($_SESSION['login'])){
?>
    <script>
        alert('非法登入，請重新登入');
        location.href='index.php?do=login'
    </script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>後台管理</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
        <script src="./js/js.js"></script>
</head>

<body class="AsaBack1">

  <span class="d-flex flex-row-reverse bd-highlight p-3 asalogin">
					<?php
						if(!empty($_SESSION['login'])){
							if($_SESSION['login']=='admin'){
					?>
								歡迎，<?=$_SESSION['login'];?><br>
								<button onclick="location.replace('admin.php')">管理</button>
								<button onclick="location.replace('api/logout.php')">登出</button>
					<?php
							}else{
					?>
						歡迎，<?=$_SESSION['login'];?>
						<button onclick="location.replace('api/logout.php')">登出</button>
					<?php
							}
						}else{
					?>
						<a href="?do=login">會員登入</a>
					<?php
						}
					?>
  </span>
<!-- -------------------------------------------------------------------------------- -->
<div class="container py-2 text-center asawallback1" > 
    <span class="h1 text-center font-weight-bold text-white ">後台管理 </span>
  </div>

<!-- -------------------------------------------------------------------------------- -->
  <div class="align-items-center">
    <div class="row container mx-auto mb-0 border outerbox">
      <div class="container col-lg-3">
              <!--主選單放此-->
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
          style="height:780px">
            <img src="http://220.128.133.15/s1090208/Resume/other/phtoto_reference/PHP-Resume/Asa1.jpg" class="card-img w-100 h-50 mt-1">
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=MEb">個人簡介/About Me</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=jobcb">求職條件/Job condition</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=skill">專業技能/Skill</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=expb">經驗/Experience</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=edub">學歷/Education</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=galb">作品集/Gallery</a>
            <a class="nav-link border active font-weight-bold text-center"   role="tab" href="?do=autob">自傳/Autobigraphy</a>
            <a  class="btn btn-warning text-white font-weight-bold" href="index.php">回首頁</a>
        </div>
      </div>
      <div class="container col-lg-9">

        <?php
          $do=(!empty($_GET['do']))?$_GET['do']:'ME';
          $file='backend/'.$do.".php";
          if(file_exists($file)){
            include $file;
          }else{
            include 'backend/MEb.php';
          }
        ?>

      </div>
    </div>

<!-- -------------------------------------------------------------------------------- -->
    <footer class="container font-weight-bold text-center mx-auto mt-0 asawallback3">
      <p class="py-2 h4">
        Resume©2020-網頁設計By Asa-Liu
      </p>
    </footer>
 

  </div>


  <div class="overlay">
    <div class="jumpBox">
          <a href="#" onclick="closeModel()">X</a>
        <div id="modelBox"></div>
    </div>    
  </div>
</body>

</html>
