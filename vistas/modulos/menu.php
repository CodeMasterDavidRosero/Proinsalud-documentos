<aside class="main-sidebar" style="background: linear-gradient(45deg, #2f89fc 0%, #f39c12 100%); opacity:0.85;>

	 <section class="sidebar">

		<ul class="sidebar-menu">

			<li>
				<a href="inicio">

					<i class="fa fa-list-ol"></i>
					<span>Menu Documentos</span>
				</a>
			</li>

			<li>
				<a href="documentos">
					<i class="fa fa-file-text"></i>
					<span>Documentos</span>
				</a>
			</li>

			<li>
				<a href="formularios">
					<i class="fa fa-plus"></i>
					<span>Ingresar Documento</span>
				</a>
			</li>

			

			<?php

			if($_SESSION["perfil"] == "SuperAdmin"){

			echo '<li><a href="usuarios"><i class="fa fa-users"></i><span>Usuarios</span></a></li>';
			}
			?>

			<li>
				<a href="salir">
					<i class="fa fa-sign-out"></i>
					<span>Cerrar</span>
				</a>
			</li>

	 </section>

</aside>