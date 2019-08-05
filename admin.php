<?php
		//start session
		session_start();
		// load file config
		include "config.php";
		// load file model
		include "application/model.php";
		// load file controller
		include "application/controller.php";
		// kiem tra dang nhap neu user chua dang nhap thif yeu cau dang nhap
		// neu user da dang nhap thi load layout admin
		if (isset($_SESSION["c_username"])==false) {
			// load MVC login
			include "controller/backend/controller_login.php";
		}else {
			// lay controller de gan thanh file vat ly. vd: controller=>logout -> se gan duong
			// dan : controller_logout.php
			$controller = isset($_GET["controller"]) ? $_GET["controller"] : "home";
			// gan thanh duong dan vat ly
			$controller = ($controller!="") ? "controller_$controller.php" : "";
			//echo $controller;

			// load layout admin
			include "view/backend/view_layout.php";
		}






 ?>
