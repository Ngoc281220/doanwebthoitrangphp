<main>
                  <div class="container">
                      <?php 
                         include("sidebar/sidebar.php");
                      ?>
                      <div class="content">
                           <?php
                            //    include("main/index.php")
                                 if(isset($_GET['quanly'])){
                                     $tam = $_GET['quanly'];
                                 }else{
                                    $tam = '';
                                 }
                                 if ($tam == 'giohang'){
                                    include("main/giohang.php");
                                 }else if($tam == 'tintuc'){
                                    include("main/tintuc.php");
                                 }else if($tam =='lienhe'){
                                    include("main/lienhe.php");
                                 }else{
                                    include("main/index.php");
                                 }
                           ?>
                      </div>
                  </div>
           </main>