<nav class="navbar-2 navbar-expand-lg navbar-primary bg-ligth d-none d-md-block justify-content-center">
    <div class="container">
      <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
          <?php
            require 'conexion.php';
            $sql ="SELECT * FROM CATEGORIAS WHERE PADRE=0 LIMIT 5";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                 ?>
                 <li class="nav-item active">
                   <a class="nav-link text-dark" href="vitrina/index.php?tipo=<?=$row['IDCATEGORIA']?>"><?=$row['NOMBRE']?></a>
                 </li>
                 <?php
               }
             }
           ?>
        </ul>
      </div>
    </div>
  </nav>
