<?php
include '../common/conexion.php';
include '../common/TasaUSD2.php';
$publicidad="¡Compra Los mejores productos!";
#busqueda por genero
if(isset($_GET['categ'])){
  $categ=$_GET['categ'];
  switch($categ){
    case '1':
    $publicidad="¡Compra los mejores productos para Damas!";
    $publicidad2="¡Los mejores productos para Damas!";
    break;
    case '2':
    $publicidad="¡Compra los mejores productos para Caballeros!";
    $publicidad2="¡Compra lo mejor para Caballeros!";
    break;
    case '3':
    $publicidad="¡Compra los mejores productos para los mas pequeños!";
    $publicidad2="¡Compra lo mejor para Niños!";
    break;
  }
}else{$categ=5;}
#busqueda por tipo de prenda
if(isset($_GET['tipo'])){
  $tipo=$_GET['tipo'];
  switch($tipo){
    case '1'://franela
    $publicidad="¡Las mejores y más cómodas Franelas!";
    $publicidad2="¡Todas las Franelas!";
    break;
    case 'chemise': //chemise
    $publicidad="¡Chemises para todos los gustos!";
    $publicidad2="¡Chemises para todos!";
    break;
    case 'pantalon': //pantalon
    $publicidad="¡Pantalones excelentes!";
    $publicidad2="¡Pantalones excelentes!";
    break;
    case 'zapatos': //zapatos
    $publicidad="¡Compra Zapatos de diferentes marcas y estilos!";
    $publicidad2="¡Los Zapatos que buscas!";
    break;
    default:
    $publicidad="¡Compra la mejor ropa en un solo sitio!";
    $publicidad2=$publicidad;
    break;
  }
}else{ $tipo=NULL; }
#busqueda con color
if(isset($_GET['color'])){$color=$_GET['color'];}else{$color=NULL;}
#busqueda con marca
if(isset($_GET['marca'])){$marca=$_GET['marca'];}else{$marca=NULL;}
#conseguir URL
$url=$_SERVER["REQUEST_URI"];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="desciption" content="Rouxa, Tienda virtual de Ropa para Damas, Caballeros y Niños.">
  <meta name="keywords" content="Rouxa, Ropa, Damas, Caballeros, Zapatos, Tienda Virtual">
  <meta name="author" content="Eutuxia, C.A.">
  <meta name="application-name" content="Tienda Virtual de Ropa, Rouxa."/>
  <link rel="icon" type="image/jpg" sizes="16x16" href="../imagen/favicon.jpg">
  <link href="../css/new.css" rel="stylesheet">
  <link href="../admin/assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-8952175764108741",
      enable_page_level_ads: true
    });
  </script>
  <title>Suministros Mavic</title>
</head>
<body style="background-color:#efefef;">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="../index.php">
        <img class="p-0 m-0" width="30px" src="../imagen/favicon.jpg" alt="Mavic">
        <small class="p-0 m-0">Suministros Mavic</small>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ml-4">
            <input class="search-principal" type="search" name="busqueda" placeholder="Buscar...">
            <button class="search-button" type="button" name="">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15"><path fill="#a5a5a5"d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg>
            </button>
          </li>
        </ul>
        <ul class="nav justify-content-end pr-3">
          <li class="nav-item"><a class="enlace" href="../compra/carrito.php"><i class="fa fa-shopping-cart"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php include_once '../common/2domenu2.php';?>
  <div class="container-fluid mb-3" style="background-color:#fff;">
    <div class="container text-center py-2" style="font-family: 'Playfair Display', serif;">
      <div class="row d-block d-sm-none">
        <h2 class="display-5"><?php echo $publicidad2;?></h2>
      </div>
      <div class="row d-none d-sm-block">
        <h2 class="display-5"><?php echo $publicidad;?></h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="d-none d-sm-block col-2">
        <div class="container">
          <h5 title="Revisar" data-toggle="tooltip">Filtros</h5>
          <div class="d-block d-sm-none" id="accordionExample">
            <div>
              <div id="headingOne">
                <p class="mb-0">
                  <button class="btn enlace2 btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Categoria</b>
                  </button>
                </p>
              </div>
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div>
                  <div class="container-fluid">
                    <div class="row"><small><a class="enlace2" href="?categ=1">Equipos</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?categ=2">Suministros</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?categ=3">Repuestos</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?categ=4">Consumibles</a></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn enlace2 btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>Marca</b>
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div>
                  <div class="container-fluid">
                    <div class="row"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                    <div class="row"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div id="headingThree">
                <h5 class="mb-0">
                  <button class="btn enlace2 btn-sm collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>Color</b>
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <div class="container-fluid">
                    <div class="row">
                      <?php
                      $sql="SELECT * FROM COLOR";
                      $result = $conn->query($sql);
                      $cant=$result->num_rows;
                      if($cant > 0){
                        while($f = $result->fetch_assoc()){
                          ?>
                          <div class="col-3 mt-2"><a href="?color=<?=$f['IDCOLOR']?>"><span class="dot2" style="background-color:<?=$f['HEX']?>;"/></a></div>
                            <?php
                          }
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="d-none d-sm-block">
            <div class="row">
              <div class="col-12 d-none d-sm-block"><b>Categorias</b></div>
              <?php
              switch($categ){
                case '1':
                ?>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?categ=1">Equipos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=2">Suministros</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=3">Repuestos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=4">Consumibles</a></small></div>
                <?php
                break;
                case '2':
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=1">Equipos</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?categ=2">Suministros</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=3">Repuestos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=4">Consumibles</a></small></div>
                <?php
                break;
                case '3':
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=1">Equipos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=2">Suministros</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?categ=3">Repuestos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=4">Consumibles</a></small></div>
                <?php
                break;
                default:
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=1">Equipos</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=2">Suministros</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?categ=3">Repuestos</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?categ=4">Consumibles</a></small></div>
                <?php
                break;
              }
              ?>
            </div>
            <hr class="d-none d-sm-block">
            <div class="row">
              <div class="col-12 d-none d-sm-block"><b>Marca</b></div>
              <?php
              switch($marca){
                case 'epson':
                ?>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                <?php
                break;
                case 'hp':
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                <?php
                break;
                case 'samsung':
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                <?php
                break;
                case 'lenovo':
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                <div class="col-12 d-none d-sm-block active2"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                <?php
                break;
                default:
                ?>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=epson">Epson</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=hp">Hp</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=samsung">Samsung</a></small></div>
                <div class="col-12 d-none d-sm-block"><small><a class="enlace2" href="?marca=lenovo">Lenovo</a></small></div>
                <?php
                break;
              }
              ?>
            </div>
            <hr class="d-none d-sm-block">
            <div class="row">
              <div class="col-12 d-none d-sm-block"><b>Color</b></div>
              <?php
              $sql="SELECT * FROM COLOR";
              $result = $conn->query($sql);
              $cant=$result->num_rows;
              if($cant > 0){
                while($f = $result->fetch_assoc()){
                  ?>
                  <div class="d-none d-sm-inline-block col-xs-3 col-sm-3 mt-2"><a href="?color=<?=$f['IDCOLOR']?>"><span class="dot3" style="background-color:<?=$f['HEX']?>;"/></a></div>
              <?php
                  }
                }
              ?>
              </div>
              <hr class="d-none d-sm-block">
            </div>
          </div>
          <div class="col-xs-12 col-sm-10">
            <div class="container-fluid">
              <div class="row justify-content-between">
                <div class="col-auto align-self-center">
                  <b><span class="d-none d-sm-inline-block">TODOS LOS PRODUCTOS</span><span class="text-muted"></span></b>
                </div>
                <!--<div class="col-6 align-self-end d-none d-md-inline-block">
                  <div class="row justify-content-end">
                    <div class="col-auto text-dark align-self-center">
                      <b>ORDENAR POR:</b>
                    </div>
                    <div class="col-auto">
                      <select name="orden" class="text-secondary">
                        <option value="1"><a href="?precio=bajo">Menor precio</a></option>
                        <option value="2"><a href="?precio=alto">Mayor precio</a></option>
                      </select>
                    </div>
                  </div>
                </div>-->
              </div>
              <div class="row">
                <?php
                $offset=0;
                $void=false;
                $numProd=4;
                $rand=rand();
                while(!$void){
                  $sql = "SELECT  *, m.IMAGEN as IMA  FROM MODELOS m
                  INNER JOIN PRODUCTOS p ON p.IDPRODUCTO=m.IDPRODUCTO
                  ORDER BY Rand($rand) LIMIT $numProd OFFSET $offset";
                  #Busqueda por genero
                  if (isset($_GET['genero'])){
                    if (!empty($genero)){
                      $sql = "SELECT *, m.IMAGEN as IMA FROM MODELOS m
                      INNER JOIN PRODUCTOS p ON p.GENERO=$genero AND p.IDPRODUCTO=m.IDPRODUCTO
                      ORDER BY Rand($rand) LIMIT $numProd OFFSET $offset";
                    }
                  }
                  #busqueda por Tipo de prenda
                  if( isset($_GET['tipo'])){
                    if (!empty($tipo)){
                      $sql = "SELECT *, m.IMAGEN as IMA  FROM MODELOS m
                      INNER JOIN PRODUCTOS p ON p.TIPO='$tipo' AND p.IDPRODUCTO=m.IDPRODUCTO
                      ORDER BY Rand($rand) LIMIT $numProd OFFSET $offset";
                    }
                  }
                  #busqueda por color
                  if( isset($_GET['color'])){
                    if (!empty($color)){
                      $sql = "SELECT *, m.IMAGEN as IMA  FROM MODELOS m
                      INNER JOIN PRODUCTOS p ON p.IDPRODUCTO=m.IDPRODUCTO
                      WHERE COLOR1=$color OR COLOR2=$color
                      ORDER BY Rand($rand) LIMIT $numProd OFFSET $offset";
                    }
                  }
                  #busqueda por marca
                  if( isset($_GET['marca'])){
                    if (!empty($marca)){
                      $sql = "SELECT  *, m.IMAGEN as IMA FROM MODELOS m
                      INNER JOIN PRODUCTOS p ON p.MARCA='$marca' AND p.IDPRODUCTO=m.IDPRODUCTO
                      ORDER BY Rand($rand) LIMIT $numProd OFFSET $offset";
                    }
                  }
                  $result = $conn->query($sql);
                  $cant=$result->num_rows;
                  if($cant > 0){
                    ?>
                    <article class="container my-4">
                      <div class="card-deck">
                        <?php
                        while($row = $result->fetch_assoc()){
                          ?>
                          <div class="card col-md-4">
                            <a href="../compra/index.php?idproducto=<?php echo $row['IDPRODUCTO']; ?>&idmodelo=<?php echo $row['IDMODELO']; ?>"><img class="card-img-top img-fluid vitrina" src="../imagen/<?php echo $row['IMA']; ?>" alt="<?php echo $row['NOMBRE_P']; ?>"></a>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $row['NOMBRE_P']; ?></h5>
                              <p class="text-muted"><?php echo $row['DESCRIPCION']; ?></p>
                              <p class="card-text"><small class="text-secondary">Precio: <?php echo number_format($row['PRECIO']*$tasa_usd*1.16, 2, ',', '.'); ?>  Bs</small></p>
                            </div>
                          </div>
                          <?php
                        }
                        for($i=0; $i<$numProd-$cant;$i++){ echo '<div class="card" style="border:none"></div>'; }
                        ?>
                      </div>
                    </article>
                    <?php
                    $offset=$offset+$numProd;
                  }else{$void=true;}
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include '../common/footer2.php';?>
      <script src="../admin/assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
      <script src="../admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
