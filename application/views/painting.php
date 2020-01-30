	<!-- men -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css');?>">
        <script src="<?php echo base_url('assets/js/jquery.swipebox.min.js');?>"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>

<style>
.you-para {
    position: relative;
    float: left;
    width: 22%;
    margin-right: 3%;
    padding: 1em;
    background: #e8e8e8;
    margin-top: 1em;
}

.you-para:hover {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
    /* Firefox 3.5+ */
    filter: gray;
    /* IE6-9 */
    -webkit-filter: grayscale(100%);
    /* Chrome 19+ & Safari 6+ */
    transition: all 0.3s ease-in-out;
    transform: scale(1.03);
}
	</style>
	<div class="men">
	    <!-- container -->
	    <div class="container">
	        <div class="col-md-12 fashions">
			<?php if($paint==1){?>
	            <div class="title">
	                <h3>FOREST PAINTINGS</h3>
	            </div>
	            <div class="fashion-section">
	                <div class="fashion-grid1">
	                    <?php for($loop=1; $loop<=48; $loop++){?>
	                    <div class="col-md-4 fashion-grid you-para">
						<a href="<?php echo base_url().'assets/images/Forest/'.$loop.'.jpg';?>" class="swipebox"  title="Prabhat Kumar Joshi's Picture Gallery">
							<img src="<?php echo base_url().'assets/images/Forest/'.$loop.'.jpg';?>" class="img-responsive" alt="" style="max-width:98%;height:250px;"/>
	                            <!--div class="product">
	                                <h3>PRODUCT NAME</h3>
	                                <p><span></span> 176.00 &euro;</p>
	                            </div-->
	                        </a>	
	                        <div class="col-md-12 col-sm-12 col-lg-12">
	                            <!--p><span></span> 176.00 &euro;</p-->
	                            <h4><a href="#" class="purchaseit" id="Forest_<?php echo $loop.".jpg";?>" data-toggle="modal" data-target="#myModal">Click to Purchase</a></h4>
	                        </div>                     
	                    </div>
	                    <?php }?>						
	                    <div class="clearfix"></div>
	                </div>
	            </div>
			<?php }?>

			<?php if($paint==2){?>
	            <div class="title">
	                <h3>MOUNTAIN PAINTINGS</h3>
	            </div>
	            <div class="fashion-section">
	                <div class="fashion-grid1">
					
	                    <?php for($loop=1; $loop<=35; $loop++){?>
	                    <div class="col-md-4 fashion-grid you-para">
						<a href="<?php echo base_url().'assets/images/Mountains/'.$loop.'.jpg';?>" class="swipebox"  title="Prabhat Kumar Joshi's Picture Gallery">
							<img src="<?php echo base_url().'assets/images/Mountains/'.$loop.'.jpg';?>" alt="" style="max-width:98%;height:250px;"/>
	                            <!--div class="product">
	                                <h3>PRODUCT NAME</h3>
	                                <p><span></span> 176.00 &euro;</p>
	                            </div-->
	                        </a>	
	                        <div class="">
                            <!--p><span></span> 176.00 &euro;</p-->
                            <h4><a href="#" class="purchaseit" id="Mountains_<?php echo $loop.".jpg";?>" data-toggle="modal" data-target="#myModal">Click to Purchase</a></h4>
                        </div>                        
	                    </div>
	                    <?php }?>						
	                    <div class="clearfix"></div>
	                </div>
	            </div>
			<?php }?>

			<?php if($paint==3){?>
	            <div class="title">
	                <h3>RUINS PAINTINGS</h3>
	            </div>
	            <div class="fashion-section">
	                <div class="fashion-grid1">
					
	                    <?php for($loop=1; $loop<=20; $loop++){?>
	                    <div class="col-md-4 fashion-grid you-para">
						<a href="<?php echo base_url().'assets/images/Ruins/'.$loop.'.jpg';?>" class="swipebox"  title="Prabhat Kumar Joshi's Picture Gallery">
							<img src="<?php echo base_url().'assets/images/Ruins/'.$loop.'.jpg';?>" alt="" style="max-width:98%;height:250px;"/>
	                        </a>	
	                    <div class="">
                            <!--p><span></span> 176.00 &euro;</p-->
                            <h4><a href="#" class="purchaseit" id="Ruins_<?php echo $loop.".jpg";?>" data-toggle="modal" data-target="#myModal">Click to Purchase</a></h4>
                        </div>                        
	                    </div>
	                    <?php }?>						
	                    <div class="clearfix"></div>
	                </div>
	            </div>
			<?php }?>
	        </div>	        
	        <div class="clearfix"> </div>
	    </div>
	    <!-- //container -->
	</div>
	<!-- //men -->

	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
	  Open modal
	</button>

	<!-- The Modal -->
	<div class="modal fade in" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Want to purchase this painting?</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <form name="frmPurchasePainting" id="frmPurchasePainting">
	      <div class="modal-body" id="puchased_content_here">
	        <div id="Painting_here" class="col-md-3"></div>
	        <div id="purchased_text_here" class="col-md-9">
	        		<div class="form-group">
	        			<input type="hidden" name="txtPicture_id" id="txtPicture_id">
	        			<input type="text" placeholder="Your Name" name="txtName" id="txtName" style="margin: 5px" class="form-control" required="required">
		        		<input type="email" placeholder="Your valid email address" name="txtEmail" id="txtEmail" style="margin: 5px" class="form-control" required="required">
		        		<input type="number" maxlength="10" placeholder="Your valid mobile number" name="txtMobile" id="txtMobile" style="margin: 5px" class="form-control" required="required">
		        		<textarea name="txtAddress" id="txtAddress" class="form-control" style="margin: 5px" placeholder="Your valid delivery address" required="required"></textarea>
		        		<div style="display: block; margin: 5px; color: #ff0000; font-size: 10px">*Please fill and send us the above detail for this purchase. We will get back to you very soon.</div>
	        		</div>
	        </div>
	      </div>
	      <div class="col-md-12">
	      	<div style="float: left; font-weight: bold; font-size: 10px; padding: 5px 0px" id="message_here"></div>
	      	<input type="submit" style="float: right" class="btn btn-primary" id="accept_n_submit" value="Accept &amp; Submit">
	      </div>
	      <div style="clear: both; padding: 0px; height: 10px" class="col-md-12"></div>
	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
	      </div>
	      </form>
	    </div>
	  </div>
	</div>