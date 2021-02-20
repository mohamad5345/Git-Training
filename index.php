<?php
require_once "input.html";

if (isset($_POST['ok'])) {
     
     if ($_POST['string'] == "Git") {
          require_once "script.js";
     }

     else {
          echo "You are lose :(";
     }
}