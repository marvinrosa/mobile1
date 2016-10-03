<?php require 'includes/header.php'?>

<h1> Hola </h1>

<div id="content">

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar-title">
        <button class="button" id="toggle-left">Menu</button>
        <h1 class="title">Mi Tienda</h1>
    </header>

    <div class="bar-standard bar-header-secondary">

    </div>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">



        <div class="content-padded">
        <?php
        foreach($jnombres as $jnom) {
            $producto = '<div class="col-md-4">
            					<div class="panel panel-primary">
            						<div class="panel-heading"><center>'.$jnom->nombre.'</center></div>
            						<div class="panel-body">
            							<center><img src="'.$init_path.$jnom->path_image.'" class="img-circle" alt="Error al cargar imagen" width="250" height="250"></center>
            							<div class"form-group">
            								<p>DESCRIPCION: '.$jnom->descripcion.'</p>
            								<p>MARCA: '.$jnom->marca.'</p>
            								<p>PRECIO: '.$jnom->precio.'</p>
            							</div>
            						</div>
            						<div class="panel-footer"><center><div class="divButton"><button class="btn btn-primary" id="'.$jnom->id_producto.'" onclick="AgregarProducto(this.id)">Agregar a carrito</button></div></center></div>
            					</div>
            				</div>';

            $producto2 ='
            
                <div class="row">
                  <div class="separator"></div> <br>
                    <div class="one-third ">
                    <br>
                        <a href="#"><img style="vertical-align: middle;" src="'.$init_path.$jnom->path_image.'"> <center>'.$jnom->nombre.'</center> </a>
                        <br>
                         <div class="principal">
                             	<p>DESCRIPCION: '.$jnom->descripcion.'</p>
            				<p>MARCA: '.$jnom->marca.'</p>
            			    <p>PRECIO: '.$jnom->precio.'</p>
                         </div>
            				
            			<br>
            	    </div>
                    
            </div>
            
            
            ';


            echo $producto2;
        }
        ?>
        </div>


        <div class="separator">Artículos que se ofrecen </div>

        <table class="link-table">
            <tr>
                <td><a href="#" class="block-link">Calzado</a></td>
                <td><a href="#" class="block-link">Carteras</a></td>
            </tr>
            <tr>
                <td><a href="#" class="block-link">Camisas</a></td>
                <td><a href="#" class="block-link">Blusas</a></td>
            </tr>
            <tr>
                <td><a href="#" class="block-link">Joyería</a></td>
                <td><a href="#" class="block-link">Relojes</a></td>
            </tr>

        </table>

    </div>
</div>

<?php require 'includes/footer.php'?>

