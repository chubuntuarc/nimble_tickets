<?php 
//App global vars
include '../app_nimble/data/vars.php'; 
//Required classes
require_once '../app_nimble/data/class/Ticket.php';
//Objects
$tickets = Ticket::getAllOpens();
//Html head
include '../app_nimble/element/head.php'; 
//CSS
echo '<link rel="stylesheet" href="../app_nimble/css/cards.css">';
//Navbar
include_once '../app_nimble/element/navbar.php';
//Side bar
include_once '../app_nimble/element/sidebar.php';
//html tags
echo '<div class="row" style="height: 30px;margin-top: 50px;background-color: '.$main_color.';margin-bottom: -50px;"></div>';
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
    <div id="open" class="col s12">
      <div class="row" style="color:grey;font-size:11px;">
        <?php
        if(!$tickets){
          echo 'Sin tickets registrados';
        }else{
        foreach($tickets as $item):
        echo '<div class="col s12 m4">';
          echo '<div class="card z-depth-1">';
             echo '<div class="card-stacked">';
                echo '<div class="card-content">';
                    echo '<div class="row">';
                      echo '<div class="col s6 left-align">';
                        echo '<p>Folio: '.$item['id_ticket'].'</p>';
                      echo '</div>';
                      echo '<div class="col s6 right-align">';
                        echo '<p>'.$item['start_time'].'</p>';
                      echo '</div>';
                    echo '</div>';
                    echo '<div class="row" style="margin-bottom:-10px;">';
                      echo '<div class="col s12 left-align">';
                        echo '<p style="margin-top: -14px;font-size: 14px;">'.$item['first_name'].' '.$item['last_name'].'</p>';
                      echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                      echo '<div class="col s12 left-align">';
                        echo '<div class="chip" style="height:20px !important;font-size:10px !important;line-height: 21px !important;margin-top: 0px;margin-left: 0px;background-color:#64b5f6;color:#FFF;">';
                          echo $item['department_name'];
                        echo '</div>';
                      echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                      echo '<div class="col s12 left-align">';
                        echo '<p style="border-bottom: #e4e4e4 solid 1px;padding-bottom:5px;font-size:14px;">'.$item['message'].'</p>';
                      echo '</div>';
                    echo '</div>';
                    echo '<div class="row" style="margin-bottom:-20px;">';
                      echo '<div class="col s12 left-align">';
                        echo '<p>'.$item['dept'].'</p>';
                      echo '</div>';
                    echo '</div>';
               echo '</div>';
            echo '</div>';
                echo '<div class="card-action center-align" style="border-top: #64b5f6 solid;">';
                  echo '<a href="#" style="color: '.$main_color.'">Finalizar</a>';
                echo '</div>';
                echo '</div>';
         echo '</div>';
         endforeach;
        }
        ?>                                                           
        </div>
      </div>
    </div>
    <div id="closed" class="col s12">
      Test 2
    </div>
  </div>

<div class="fixed-action-btn">
  <a class="btn-floating btn-large" style="background-color: #64b5f6;">
    <i class="large material-icons">add</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>
</div>

<script>
$(".account").sideNav();
$(".button-collapse").sideNav();
 $('.modal').modal();
  $('.fixed-action-btn').floatingActionButton();
</script>