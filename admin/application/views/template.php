
<?php 
if(isset($page2)) 
{
echo $this->load->view('backend/includes/header'); ?>
<div class="row">
	<div class="col-md-9">
	    <?php echo $this->load->view('backend/includes/'.$page); ?>
    </div>
	<div class="col-md-3">
		<?php echo $this->load->view('backend/includes/'.$page2); ?>
	</div>
</div>
<?php echo $this->load->view('backend/includes/footer'); 
}
else {
echo $this->load->view('backend/includes/header');
echo $this->load->view('backend/includes/'.$page);
echo $this->load->view('backend/includes/footer');
}