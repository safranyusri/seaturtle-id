<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<section id="start" class="bg-primary text-center">
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="section-heading">Table of characters</h2>
                    <p>Check your turtle for characters here and find out the species. Browse and filter for the characters</p>
                    <a href="#features" class="btn btn-outline btn-primary btn-xl page-scroll">Start</a>
                </div>
            </div>
        </div>
    </section>
 
 <section id="features" class="bg-secondary">
        <div class="container">
            <div class="row">
                <div>
                    <table id="c-table" class="table table-bordered table-striped table-responsive">
<thead>
<tr>
  <td>Id</td>
  <td>Category</td>
  <td>Character</td>
  <td>Vernacular Name</td>
  <td>Scientific Name</td>
  <td>Picture</td>
</tr>
</thead>
<tbody>
</tbody>
</table>
                </div>
            </div>
        </div>
    </section>
    

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/b-1.3.1/r-2.1.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.15/af-2.2.0/b-1.3.1/r-2.1.1/datatables.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#c-table').DataTable({
        "ajax": {
            url : "<?php echo site_url("welcome/table_page") ?>",
            type : 'GET'
        },
    });
});
</script>