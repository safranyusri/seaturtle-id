
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="start" class="bg-primary text-center">
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="section-heading"><?php echo $title ?></h2>
                    <p>Check your turtle by interpretation here and find out the species. Choose character by pictures to be examined</p>
                    <a href="#features" class="btn btn-outline btn-primary btn-xl page-scroll">Start</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="features" class="features">
        <div class="container">
            <div class="row">
<?php foreach ($allspecies as $species): ?>          
                <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo base_url(); ?>img/<?php echo $species['character_pic1']; ?>" alt="<?php echo $species['characterspec_des']; ?>">
      <div class="caption">
        <h3><?php echo $species['charactercat_name']; ?></h3>
        <p><?php echo $species['characterspec_des']; ?></p>
        <p><a href="<?php echo base_url();?>welcome/get_turtle/<?php echo $species['spec_id']; ?>" class="btn btn-success"> check turtle</a> </p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
                </div>
            </div>
    </section>