<?php include('db_connect.php') ?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        <div class="row">
          <div class="col">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">kullanıcılar</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM users where type = 2")->num_rows; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
           <div class="col">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dosyalar</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
              
              <!-- /.info-box-content -->
            
            </div>
            
      
              
            <!-- /.info-box -->
          </div>
          <div class="col">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Boyut</span>
                <span class="info-box-number">
                <?php
            function folderSize ($dir)
            {
                $size = 0;
            
                foreach (glob(rtrim($dir, '/').'/*', GLOB_NOSORT) as $each) {
                    $size += is_file($each) ? filesize($each) : folderSize($each);
                }
                if($size<1024){$size=$size." Bytes";}
                  elseif(($size<1048576)&&($size>1023)){$size=round($size/1024, 1)." KB";}
                  elseif(($size<1073741824)&&($size>1048575)){$size=round($size/1048576, 1)." MB";}
                  else{$size=round($size/1073741824, 1)." GB";}
                 
                return $size;
            }
              $dir = 'assets/uploads/';
              echo folderSize($dir);

              
          ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
      </div>

<?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          		Hoş geldin <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dosyalar</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
                </span>
              </div>
           
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
      </div>
          
<?php endif; ?>
