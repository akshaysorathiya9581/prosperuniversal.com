<?php
@session_start();
require("includes/connection.php");
require("includes/functions.php");

$form_randomizer = rand(11111,99999).rand(111,999).rand(1,9);//fmrkey
$_SESSION["fmr_ireneexim"] = $form_randomizer;
$form_key = base64_encode(rand(11111111,99999999)."/feedbackPassed/".$_SESSION["fmr_ireneexim"]."/".rand(111111,999999));//formkey

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<?php require("includes/tb_meta.php"); ?>
<title><?php echo $page_title;?></title>
<meta name="keywords" content="<?php echo $metakey;?>" />
<meta name="Keyphrases" content="<?php echo $metakeyphrases;?>" />
<meta name="description" content="<?php echo $metadesc;?>" />
<?php require("includes/tb_css.php"); ?>
</head>
<body>
<?php require("includes/loading.php"); ?>
<?php require("includes/tb_header.php"); ?>
<section id="prosper_page_banner" style="background-image: url(<?php echo $datapath; ?>images/home_lets_talk_default.jpg)">
  <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
  <div class="container position-relative">
    <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
      <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
        <h1>Connect & Engage</h1>
      </div>
      <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin">
        <p>Trust can be achieved through communication and experienced support</p>
      </div>
    </div>
  </div>
</section>
<section id="contact_page">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="contact_left">
          <h6>Get In Touch</h6>
          <h2>Let's get in <span>touch with us.</span></h2>
          <p class="left_text">If you would like to work with us or just want to get in
            touch, we’d love to hear from you!</p>
          <div class="contact_details">
            <div class="heading_1">Contact Information</div>
            <div class="heading_2">Plant / Head Office</div>
            <div class="factory"><img src="<?php echo $datapath; ?>images/small-factory.svg" alt="Image"></div>
            <hr>
            <ul class="list-unstyled">
              <li class="media align-items-top"> <img class="mr-2" src="<?php echo $datapath; ?>images/contact-pin.svg" alt="Pin">
                <div class="media-body">
                <div class="company_name">Prosper Universal Pvt. Ltd.</div>
               <p class="company_address"> 712 The Spire Building, <br/>150ft Ring Road, <br/>Rajkot - 360007<br/> Gujarat, India.</p>
				</div>
              </li>
              <li class="media align-items-center"> <img class="mr-2" src="<?php echo $datapath; ?>images/contact-phone.svg" alt="Phone">
                <div class="media-body"><a href="tel:+91 90670 50450">+91 90670 50450</a></div>
              </li>
              <li class="media align-items-center"> <img class="mr-2" src="<?php echo $datapath; ?>images/contact-mail.svg" alt="Mail">
                <div class="media-body"><a href="mailto:info@prosperuniversal.com">info@prosperuniversal.com</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 valign">
        <div class="contact-form">
        <div class="contact-heading d-flex justify-content-between">
          <h2>Need more info? <span class="themecolorsecondry">Contact us.</span>
            <p>Fill out the form below to receive product support or information of any kind.</p>
          </h2>
          <img src="<?php echo $datapath; ?>images/mail-icon.svg" alt="Mail Icon" width="50"> </div>
        <form  id="contact_irene_form_<?php echo $form_randomizer;?>" name="contact_irene_form_<?php echo $form_randomizer;?>" method="post" action="<?php echo $sitepath; ?>contact_prosper_save.php" class="form">
          <input type="hidden" name="formkey" id="formkey" value="<?php echo $form_key; ?>" class="contact-frm"/>
          <input type="hidden" name="fmrkey" id="fmrkey" value="<?php echo $form_randomizer; ?>" class="contact-frm"/>
          <div class="alert alert-success alert-cus" style="display:none;" id="SuccessMessage"> We appreciate your interest in our product and would like helping you as efficiently as possible. One of our representative will get back to you shortly. </div>
          <div class="alert alert-danger alert-cus" style="display:none;" id="ErrorMessage"> It seems you have missed filling up required fields in form, Kindly fill valid information and help us to serve you better. </div>
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="fullname">Full Name<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="fullname_<?php echo $form_randomizer;?>" name="fullname_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="companyname">Company/Business Name<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="companyname_<?php echo $form_randomizer;?>" name="companyname_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="designation">Designation<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="designation_<?php echo $form_randomizer;?>" name="designation_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="website">Website</label>
              <input type="text" class="form-control" id="website_<?php echo $form_randomizer;?>" name="website_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="contactnumber">Contact Number<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="contactnumber_<?php echo $form_randomizer;?>" name="contactnumber_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="email">Email Address<span class="mandatory">*</span></label>
              <input type="text" class="form-control" id="cemail_<?php echo $form_randomizer;?>" name="cemail_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-6">
              <label for="country">Country<span class="mandatory">*</span></label>
              <?php
									  echo "<select name='country_".$form_randomizer."' id='country_".$form_randomizer."' class='form-control' onchange='javascript:getStateList(this.value)'>";
									  echo "<option value=''>- Select Country -</option>";
									  $sql="select cid,cname from country order by cname";
									  $result=mysqli_query($con_website,$sql) or die("cannot select country ".mysqli_error($con_website));
									  while($row=mysqli_fetch_array($result))
									  {
										  if($row["cid"]==$_SESSION["sadminnew_countrycid"])
										  {
											  echo "<option value='".$row["cid"]."' selected>".$row["cname"]."</option>";
										  }
										  else
										  {
											  echo "<option value='".$row["cid"]."'>".$row["cname"]."</option>";
										  }
									  }
									  echo "</select>";
								  ?>
            </div>
            <div class="form-group col-lg-6">
              <label for="inquiryfor">State<span class="mandatory">*</span></label>
              <?php
								  echo "<select name='state_".$form_randomizer."' id='state_".$form_randomizer."' class='form-control'>";
								  echo "<option value=''>- Select State -</option>";
								  $sql="select cid,pid,cname from states where pid='".$country_id."' order by cid";
								  $result=mysqli_query($con_website,$sql) or die("cannot select country ".mysqli_error($con_website));
								  while($row=mysqli_fetch_array($result))
								  {
									  if($row["cid"]==$country_id)
									  {
										  echo "<option value='".$row["cid"]."' selected>".$row["cname"]."</option>";
									  }
									  else
									  {
										  echo "<option value='".$row["cid"]."'>".$row["cname"]."</option>";
									  }
								  }
								  echo "</select>";
								 ?>
            </div>
            <div class="form-group col-lg-6">
              <label for="website">City</label>
              <input type="text" class="form-control" id="city_<?php echo $form_randomizer;?>" name="city_<?php echo $form_randomizer;?>">
            </div>
            <div class="form-group col-lg-12">
              <label for="comments">Message<span class="mandatory">*</span></label>
              <textarea name="comments_<?php echo $form_randomizer;?>" id="comments_<?php echo $form_randomizer;?>" cols="30" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group col-12 mb-0">
              <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LdMYOUhAAAAAHw8UgfBJyaJL2nh8Jqg7w4XnA4c"></div>
              <div class="intro_cta">
            <div class="cs_section_heading_right cs_btn_anim"> <button type="submit" class="cs_btn cs_style_1 cs_color_1"> <span style="font-weight:600;">Submit Inquiry</span> <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z" fill="#003566" />
              </svg> </button> </div>
          </div>
              <span>
              <div class="ajax-loader" id="loader" style="display:none;" ></div>
              </span>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>
  </div>
</section>
<div class="container gap no-top">
  <div class="responsive-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14770.188758571978!2d70.7881339!3d22.2572529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca2e70fd7105%3A0xddb6f192f866aa0a!2sProsper%20Universal%20Pvt.Ltd!5e0!3m2!1sen!2sin!4v1709184825511!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<?php require("includes/tb_footer.php"); ?>
<?php require("includes/scrolltotop.php"); ?>
<?php require("includes/tb_js.php"); ?>
<script type="text/javascript" src="<?php echo $datapath; ?>assets/js/jquery.validate.js"></script> 
<script>
$(document).ready(function() {
	$.validator.addMethod("mobile", function(value, element) {
	  // allow any non-whitespace characters as the host part
	  return this.optional( element ) || /^\d{10}$/.test( value );
	}, 'Please Enter Valid Mobile');
	
    $('#contact_irene_form_<?php echo $form_randomizer;?>').validate({
        rules: {
			fullname_<?php echo $form_randomizer;?>: { required: true},
			companyname_<?php echo $form_randomizer;?>: { required: true},
			designation_<?php echo $form_randomizer;?>: { required: true},
			contactnumber_<?php echo $form_randomizer;?>: { required: true, digits:true ,minlength: 10 },
			cemail_<?php echo $form_randomizer;?>: { required: true, email: true },
			country_<?php echo $form_randomizer;?>: { required: true},
			state_<?php echo $form_randomizer;?>: { required: true},
			comments_<?php echo $form_randomizer;?>: { required: true},
        },
       //errorClass: "help-inline",
		//errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		},
		                            
        messages: {
				fullname_<?php echo $form_randomizer;?>: {
						required: "Please Enter Your Name",
				},
				companyname_<?php echo $form_randomizer;?>: {
						required: "Please Enter Company Name",
				},
				designation_<?php echo $form_randomizer;?>: {
						required: "Please Enter Designation",
				},
				contactnumber_<?php echo $form_randomizer;?>: {
						required: "Please Enter Your Contact No",
						digits: "please enter only digits",
						minlength: "Please Enter 10 Character",
				},
				cemail_<?php echo $form_randomizer;?>: {
						required: "Please Enter Email Address",
						email: "Please Enter Valid Email Address"
				},
				country_<?php echo $form_randomizer;?>: {
						required: "Please Select Country",
			    },
				state_<?php echo $form_randomizer;?>: {
						required: "Please Select State",
			    },
				
			    comments_<?php echo $form_randomizer;?>: {
						required: "Please Enter Your Massage",
			    },
        },
		submitHandler: function(form){
			$.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				beforeSend: function() { 
                    $('#loader').show();
                },
				success: function(response) {
					$('.form-response').html(response);
					document.getElementById("contact_irene_form_<?php echo $form_randomizer;?>").reset(); 
				}, 
				 complete: function() { 
                    $('#loader').hide();
                }           
			});		
		}
    });
});
</script> 
<script type="text/ecmascript" language="javascript" src="<?php echo $datapath; ?>js/ajax.js"></script> 
<script type="text/javascript" language="javascript">
<!--Product Inquiry Form-->
var ajax = new Array();
function getStateList(sel)
{
	var countryCode= sel;
	document.getElementById('state_<?php echo $form_randomizer;?>').options.length = 0;	// Empty city select box
	var index = ajax.length;
	ajax[index] = new sack();
	ajax[index].requestFile = '<?php echo $sitepath; ?>ajaxstate.php?q='+countryCode;	// Specifying which file to get
	ajax[index].onCompletion = function(){ createStates(index) };	// Specify function that will be executed after file has been found
	ajax[index].runAJAX();		// Execute AJAX function
}
function createStates(index)
{
	var obj = document.getElementById('state_<?php echo $form_randomizer;?>');
	eval(ajax[index].response);	// Executing the response from Ajax as Javascript code
}
</script>
</body>
