<!-- form search -->
<form ethod="get" id="searchform" action="<?php echo site_url('/'); ?>" class="mb-4">
  <div class="input-group input-group-lg">
    <input type="text" name="s" id="s" class="form-control" placeholder="Search...." aria-label="Recipient's username"
      aria-describedby="button-addon2">
    <div class="input-group-append">
      <button type="submit" id="searchsubmit" class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
    </div>
  </div>
</form>


<!-- contact info -->
<div class="card mb-4 card-contact">
  <div class="card-header">
    CONTACT INFO
  </div>
  <div class="card-body">
    <div class="d-flex justify-content-center mb-3">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agent.jpeg">
    </div>
    <h5 class="card-title text-center mb-0">Muanar Gadafi</h5>
  </div>
  <div class="card-footer text-center">
    <a href="#" class="card-link">
      <i class="fa fa-envelope mr-1" aria-hidden="true"></i>
      muanar.gadafi@tonjoo.com
    </a>
  </div>
  <div class="card-footer text-center">
    <a href="#" class="card-link">
      <i class="fa fa-phone mr-1" aria-hidden="true"></i>
      081240177961
    </a>
  </div>
</div>