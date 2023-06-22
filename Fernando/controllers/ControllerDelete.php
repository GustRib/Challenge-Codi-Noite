<?php
include ("../config/config.php");
$objEvents=new \Classes\ClassEvents();
$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
$objEvents->deleteEvent($id);


#direciona após agendar
header('Location: ../views/manager/index.php');
