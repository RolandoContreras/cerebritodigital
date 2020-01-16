<link rel="stylesheet" href="<?php echo site_url().'static/backoffice/css/jquery.modal.min.css';?>"/>
<div class="content-w">
        <div class="top-bar color-scheme-dark"> </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"> 
                <a href="<?php echo site_url().'backoffice';?>">Tablero</a> 
            </li>
        </ul>
<div class="content-i">
  <div class="content-box">
      <div class="row">
              <div class="col-sm-12 col-xxl-12">
                <div class="element-wrapper">
                  <h6 class="element-header"> Pack </h6>
                  <div class="row">
                    <?php foreach ($obj_kit as $value) { ?>
                        <div class="pricing-plan col-md-3">
                          <div class="plan-head">
                                 <div class="plan-image"> 
                                     <img alt="" src='<?php echo site_url()."static/backoffice/images/plan/$value->img";?>'> 
                                 </div> 
                                <div class="plan-name">
                                    <h1 class="display-4" style="font-size: 24px; font-weight: 900 !important; letter-spacing: normal !important; color: #585858;"><?php echo str_to_mayusculas($value->name);?></h1>
                                </div>
                              </div>
                              <div class="plan-body">
                                <div class="plan-price-w">
                                    <div class="price-value" style="font-size: 30px;"> <span style="font-size: 10px;"></span>S/. <?php echo $value->price;?> </div>
                                </div>
                                  <div class="plan-btn-w"> 
                                      <a>
                                          <button  class="mr-2 mb-2 btn btn-warning" <?php echo $value->active == "0"? "disabled":"";?>> Selecionar Pack</button>
                                      </a> 
                                  </div>
                              </div>
                              <div class="plan-description">
                                <?php echo $value->description;?>
                              </div>
                        </div>
                    <?php } ?>  
                  </div>
                </div>
              </div>
        </div>
  </div>
</div>
</div>

<script src="<?php echo site_url().'static/backoffice/js/script/plan.js';?>"></script>

