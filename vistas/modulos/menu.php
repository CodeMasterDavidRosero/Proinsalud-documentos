<aside class="main-sidebar" style="background: linear-gradient(45deg, #2f89fc 0%, #f39c12 100%); opacity:0.85";>

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<br>

			<li>
				<a href="inicio">

					<i class="fa fa-list-ol"></i>
					<span style="font-size:18px;">Menu Documentos</span>
				</a>
			</li>

			<li>
				<a href="documentos">
					<i class="fa fa-file-text"></i>
					<span style="font-size:18px;">Documentos</span>
				</a>
			</li>

			<li>
				<a href="formularios">
					<i class="fa fa-plus"></i>
					<span style="font-size:18px;">Ingreso Documento</span>
				</a>
			</li>

			

			<?php

			if($_SESSION["perfil"] == "SuperAdmin"){

			echo '<li><a href="usuarios"><i class="fa fa-users"></i><span style="font-size:18px;">Usuarios</span></a></li>';
			}
			?>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<li>
				<a href="salir">
					<i class="fa fa-sign-out"></i>
					<span style="font-size:18px;">Salir</span>
				</a>
			</li>

	 </section>

</aside>