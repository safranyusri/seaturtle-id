<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <section id="features" class="features">
        <div class="container">
        	<div class="row">
        		<h1><?php echo $charcats['charactercat_name']; ?></h1><p>Available characters</p>
        	</div>    
            <div class="row">
 <?php foreach ($specchars as $specchar): ?>
            <div class="col-md-3">
                <div class="thumbnail feature-item">
                  <img src="<?php echo base_url()?>img/<?php echo $specchar['character_pic1']; ?>" alt="<?php echo $specchar['characterspec_des']; ?>" class="img-thumbnail">
                  <div class="caption">
                    
                    <p><?php echo $specchar['characterspec_des']; ?></p>
                    <p><a href="<?php echo base_url()?>welcome/get_turtle/<?php echo $specchar['spec_id']; ?>" class="btn btn-outline btn-primary btn-xl page-scroll" role="button" target="blank">open</a></p>
                  </div>
                </div>
				</div>
				<?php endforeach; ?> 

            </div>
            </div>
    </section>
