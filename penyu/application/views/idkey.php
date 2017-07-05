<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Sea turtle identification key</h1>
                            <p>This section will guide you in turtle identification using dichotomic keys. The most distinct characteristics will be used. Please observe your turtle carefully and refer to the diagram for more information</p>
                            <a href="#1" class="btn btn-outline btn-xl page-scroll">Identify Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup lumia920 portrait white">
                            <div class="device">
                                <div class="screen">
                                    <img src="<?php echo base_url() ?>img/demo-screen-3.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php foreach ($idkeys as $idkey): 

// variasi class
if ($idkey['step_id'] & 1) {
    $class = "bg-primary";
} else { 
    $class = "bg-secondary";
}

//button back
$prev = $idkey['step_id']-1;

// button no
if ($count > $idkey['step_id']) 
	{
    	$next = $idkey['step_id']+1;
	} 
	else 
	{
    	$next = 1;
	}

?>
    <section id="<?php echo $idkey['step_id']; ?>" class="<?php echo $class; ?> header-content">
        <div class="container">
            <div class="row">
                <div>
                <h2>Step <?php echo $idkey['step_id']; ?>. Character to be observed: <?php echo $idkey['charactercat_name']; ?></h2>
 <br>
 <p><?php echo $idkey['characterspec_des']; ?></p>
 <img src="<?php echo base_url() ?>img/<?php echo $idkey['character_pic1']; ?>" class="img-responsive" alt="<?php echo $idkey['characterspec_des']; ?>">

 <br> 

<?php if($idkey['step_id']>1){ ?>
     <a href='#<?php echo $prev; ?>' class="btn btn-outline btn-info btn-xl page-scroll">Back</a>
<?php } ?>



<a href="<?php echo base_url();?>welcome/get_turtle/<?php echo $idkey['spec_id']; ?>" class="btn btn-outline btn-success btn-xl page-scroll">Yes</a> <a href="#<?php echo $next; ?>" class="btn btn-outline btn-danger btn-xl page-scroll">No</a>

                
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>      
