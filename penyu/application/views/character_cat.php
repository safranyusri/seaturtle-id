<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="start" class="bg-primary text-center">
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="section-heading">Identification by characters</h2>
                    <p>Check your turtle for characters here and find out the species. Choose character categories to be examined</p>
                    <a href="#features" class="btn btn-outline btn-primary btn-xl page-scroll">Start</a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="features" class="features">
        <div class="container">
            <div class="row">
<?php foreach ($character_cats as $character_cat): ?>

            <div class="col-md-3">
                <div class="thumbnail feature-item">
                  <img src="<?php echo base_url(); ?>img/<?php echo $character_cat['charactercat_pic']; ?>" alt="<?php echo $character_cat['charactercat_name']; ?>">
                  <div class="caption">
                    
                    <p><?php echo $character_cat['charactercat_des']; ?></p>
                    <p><a href="<?php echo base_url();?>welcome/get_character_cat/<?php echo $character_cat['charactercat_id']; ?>" class="btn btn-outline btn-primary btn-xl page-scroll" role="button" target="characters"><?php echo $character_cat['charactercat_id']; ?>. <?php echo $character_cat['charactercat_name']; ?></a></p>
                  </div>
                </div>
				</div>
				<?php endforeach; ?> 
                <div class="row">
                <a href="#cta" class="btn btn-primary page-scroll">Check available characters</a>
            </div>
            </div>
            </div>
    </section>
     <section id="cta" class="cta">
        <div class="cta-content ">
            <div class="container">
                <iframe width=100% height= 500px name="characters"></iframe><br>
                <a href="#features" class="btn btn-primary page-scroll">Back to character list</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>