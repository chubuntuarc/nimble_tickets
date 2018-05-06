<?php 
//App global vars
include '../app_nimble/data/vars.php'; 
//Html head
include '../app_nimble/element/head.php'; 
//CSS
echo '<link rel="stylesheet" href="../app_nimble/css/cards.css">';
//Navbar
include_once '../app_nimble/element/navbar.php';
//Side bar
include_once '../app_nimble/element/sidebar.php';
?>     

<div class="row" style="margin-top:55px;">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6 m2"><a class="active" href="#open" <?php echo 'style="color: '.$main_color.'"' ?>>Abiertos</a></li>
        <li class="tab col s6 m2"><a href="#closed" <?php echo 'style="color: '.$main_color.'"' ?>>Completos</a></li>
      </ul>
    </div>
  </div>

<div class="row"> 
  <div class="col s12">
    <div id="open" class="col s12">Test 1</div>
    <div id="closed" class="col s12">Test 2</div>
  </div>
</div>

<script>
$(".account").sideNav();
$(".button-collapse").sideNav();
 $('.modal').modal();
</script>