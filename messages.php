<?php
//Required classes
require_once '../app_nimble/data/class/Ticket.php';
  //If get messages element run
  if(isset( $_POST['value'] )) {
       $messages = Ticket::getTicketMessages($_POST['value']);
  }
  if($messages){
    foreach($messages as $item):
      echo '<blockquote style="border-left: 5px solid #64b5f6;">'.$item['message'].'</blockquote>';
    endforeach;
  }
?>