<?php
session_start();
?>
 <header>
 <div class="container">
 <div id="branding">
 <div class="image">
                <img id="logoo" class="headerPhoto" src="Photos/logo.png" alt="Logo" />
            </div>
  
 </div>
 <nav>
   <ul>
  
  
   <?php
      if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
      ?>
     <li class="current"> <a href="Dashboard.php"> Dashboard</a></li>
      <?php
      }
      ?>


      
  
     <li class="current"><a href="Projekti.php ">Home</a></li>
     <li class="current"><a href="services.php">Services</a></li>
     <li class="current"><a href="relax.php">Relax</a></li>
     <li class="current"><a href="aboutt.php">About</a></li>  
     <?php
     if(isset($_SESSION['role'])&& $_SESSION['role']==0){
       ?>
    
      <?php
     }
     ?>  
    
     <?php
     if(!isset($_SESSION['role'])){
       ?>
      <li class="current"><a href="Register.php">Register</a></li>
      <?php
     }
     ?>
    
    
     <?php
     if (isset($_SESSION['role'])) {
      ?>
       <li class="current"> <a href="logout.php">LOG OUT</a></li>
          
        </a>
      <?php
      }
      ?>
     
   </ul>
 </nav>
</div>
</div>
</header>
