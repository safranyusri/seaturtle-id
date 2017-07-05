<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="start" class="bg-primary text-center">
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="section-heading"><?php echo $turtle['spec_vern']; ?></h2>
                    <p><?php echo $turtle['spec_name']; ?></p><br>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="feature-item">
                    <p> The <?php echo $turtle['spec_vern']; ?> has these characteristics:</p>
                        <?php foreach ($chars as $char): ?>
                        <p> <?php echo $char['characterspec_des']; ?>. </p>
						<p><img src="<?php echo base_url() ?>img/<?php echo $char['character_pic1']; ?>" class="img-responsive" alt="<?php echo $char['characterspec_des']; ?>."> </p>

<?php endforeach; ?>                         <hr>
                    </div>
                </div>
            </div>
    </section>
