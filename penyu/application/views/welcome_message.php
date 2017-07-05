<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Trying to identify a species of sea turtle that you saw?</h1>
                            <p>Each species of sea turtle has a few distinguishing features that will help you identify it.</p>
                            <a href="#start" class="btn btn-outline btn-xl page-scroll">Learn the characters Now!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup samsung_tv portrait white">
                            <div class="device">
                                <div class="screen">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url() ?>img/leatherback1.jpg" class="img-responsive" alt="Leatherback.">
      <div class="carousel-caption">
        Leatherback
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>img/green1.jpg" class="img-responsive" alt="Green Turtle.">
      <div class="carousel-caption">
        Green Turtle
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>img/hawksbill1.jpg" class="img-responsive" alt="Hawksbill Turtle.">
      <div class="carousel-caption">
        Hawksbill Turtle
      </div>
    </div>
  </div>


</div>
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

    <section id="start" class="bg-secondary text-center">
        <div class="container">
            <div class="row">
                <div><img src="<?php echo base_url() ?>img/morpho1.gif" align="left" alt="">
                    <h2 class="section-heading">Characters</h2>
                    <p>A turtle’s top shell (or carapace) can also have a different number of plates (or scutes) arranged in a unique pattern.</p><br>
                    
                       
                    
                    <p>Different species have different numbers of prefrontal scales—the small, paired scale found behind a turtle’s nostrils and between its eyes. And also they have distinct scales on their underbelly (plastron).<br>
                    <img src="<?php echo base_url() ?>img/headnplastron.png" alt=""></p>
                    </p> 
                    <a href="#features" class="btn btn-outline btn-primary btn-xl page-scroll">How to identify</a>

                    
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Identification Guide</h2>
                        <p class="text-muted">There are four ways of identification available on this site</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait black">
                            <div class="device">
                                <div class="screen">
                                    
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url() ?>img/demo-screen-1.jpg" alt="...">
      <div class="carousel-caption">
        Hawksbill
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>img/demo-screen-2.jpg" alt="...">
      <div class="carousel-caption">
        Green Turtle
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>img/demo-screen-3.jpg" alt="...">
      <div class="carousel-caption">
        Green Turtle
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="<?php echo base_url();?>welcome/idkey" class="btn btn-outline btn-xl page-scroll"><i class="icon-key text-primary"></i></a>
                                    <h3>Identification key</h3>
                                    <p class="text-muted">Expert guided step by step guide for turtle identification based on the most distinguishable characteristics.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="<?php echo base_url();?>welcome/characters" class="btn btn-outline btn-xl page-scroll"><i class="fa fa-bug text-primary"></i></a>
                                    <h3>Character categories</h3>
                                    <p class="text-muted">Identification based on a certain part of the turtle body</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="#key" class="btn btn-outline btn-xl page-scroll"><i class="icon-eye text-primary"></i></a>
                                    <h3>Visual</h3>
                                    <p class="text-muted">Browse all type of characters based on pictures available in the database</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <a href="<?php echo base_url();?>welcome/table" class="btn btn-outline btn-xl page-scroll"><i class="fa fa-filter text-primary"></i></a>
                                    <h3>Filter</h3>
                                    <p class="text-muted">Filterable table of turtle characteristics</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        	<a href="#spec" class="btn btn-outline btn-xl btn btn-primary page-scroll">Available species in the database</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta" id="spec">
        <div class="cta-content">
            <div class="container">
              <h2>Available species.</h2><br>
                		
        <?php foreach ($seaturtles as $seaturtle): ?><p>
<?php echo $seaturtle['spec_id']; ?>. <?php echo $seaturtle['spec_vern']; ?> (<em><?php echo $seaturtle['spec_name']; ?></em>) <a href="<?php echo base_url();?>welcome/get_turtle/<?php echo $seaturtle['spec_id']; ?>" class="btn btn-success"><i class="fa fa-bug text-primary"></i></a>
</p>
<?php endforeach; ?> 
              <a href="#features" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

