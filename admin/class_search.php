<?php include('banner.php'); ?>
<?php 
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/inc/header.php');
?>
<style>
    .main{
        
        
    }
    .main h1{
        font-family: "Times New Roman", Georgia, Serif;
        font-size: 30px;
        color:#5e0c17;
    }
    .adminpanel{
        width:500px;
        color:#897073;
        margin:30px auto 0;
        padding:50px;
        border:2px solid #ddd;
        font-family: "Times New Roman", Georgia, Serif;
        font-size: 20px;
        }
        body{
    background-color: #7c0f14;
}
#particles-js{
        position: absolute;
        left: 0px;
         top: 0px;
        z-index: -1;
        background-color: #7c0f14;
        width: 100%;
      }
</style>
    <body >
        <?php include('../connnection.php'); ?>

        <div class="container-fluid">
            <div class="row-fluid">
				
    <div id="particles-js"></div>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query= mysqli_query($conn,"select * from exam_score ")or die(mysqli_error($conn));
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Students List</div>
                                <div class="muted pull-right">
									Number of Students: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Students List</h2>
									<?php include('class_search_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>	
   
<script type="text/javascript" src="../css/particles.js"></script>
<script type="text/javascript" src="../css/app.js"></script>
</html>