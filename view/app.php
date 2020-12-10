<?php 

view("header");
view("navbar");
view("pages/home");
view("pages/quem");
view("pages/servicos");
view("pages/contato", ["req" => $req]);
view("footer");