<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<canvas id="bieudo"> </canvas>

<script>
     var bienx = ['thu2','thu3','thu4','thu5','thu6','thu7','chunhat'];
    var bieny = [4,6,3,8,3,5,6];
    var CHART = document.getElementById('bieudo').getContext('2d');
    var line_chart = new Chart (CHART,{
        type: 'line',
        data:{
            labels:bienx,
            datasets:[{
                label:'Số Đơn Hàng',
                data:bieny
            }]
        }
    });
</script>
<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/brands.js"></script>