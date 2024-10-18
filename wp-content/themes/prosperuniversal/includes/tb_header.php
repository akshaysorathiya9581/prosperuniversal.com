<?php
if(strpos($_SERVER["PHP_SELF"],"index.php"))
{
	$menu[0] = 'class="current"';
}
if(strpos($_SERVER["PHP_SELF"],"about-us.php"))
{
	$menu[1] = 'class="current"';
}
if(strpos($_SERVER["PHP_SELF"],"products.php"))
{
	$menu[2] ='current';
}
if(strpos($_SERVER["PHP_SELF"],"contact.php"))
{
	$menu[5] = 'class="current"';
}
?>

<header class="two">
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-text">
        <ol class="d-flex">
          <li>PROUD OF MADE IN INDIA</li>
        </ol>
        <div class="d-flex top-bar-mail">
          <div class="d-flex align-items-center me-4"> <i> <svg width="19" height="16" viewBox="0 0 19 16" fill="#a5cd39" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.833252 10.7083C0.488074 10.7083 0.208252 10.9881 0.208252 11.3333C0.208252 11.6785 0.488074 11.9583 0.833252 11.9583H3.33325C3.67843 11.9583 3.95825 11.6785 3.95825 11.3333C3.95825 10.9881 3.67843 10.7083 3.33325 10.7083H0.833252Z" fill="#a5cd39"/>
            <path d="M0.833252 13.2083C0.488074 13.2083 0.208252 13.4881 0.208252 13.8333C0.208252 14.1785 0.488074 14.4583 0.833252 14.4583H5.83325C6.17843 14.4583 6.45825 14.1785 6.45825 13.8333C6.45825 13.4881 6.17843 13.2083 5.83325 13.2083H0.833252Z" fill="#a5cd39"/>
            <path d="M2.59071 2.24172L2.5 2.16667C2.757 1.81294 3.0305 1.55276 3.38422 1.29576C4.4795 0.5 6.04189 0.5 9.16667 0.5H10.8333C13.9581 0.5 15.5205 0.5 16.6157 1.29576C16.9695 1.55276 17.2214 1.78443 17.4784 2.13816L17.3737 2.24225L15.4505 4.16551C14.0491 5.56689 13.0416 6.5725 12.1726 7.23558C11.318 7.88758 10.6712 8.14908 9.99992 8.14908C9.3285 8.14908 8.68175 7.88758 7.82717 7.23558C6.95817 6.5725 5.95066 5.56689 4.54927 4.16551L2.92989 2.54612L2.59071 2.24172Z" fill="#a5cd39"/>
            <path d="M1.6665 8.00002C1.6665 5.80009 1.6665 4.37457 1.94419 3.34125L2.06971 3.45391L3.69904 5.08322C5.05926 6.44344 6.12525 7.50944 7.06879 8.22936C8.03456 8.96619 8.94517 9.39911 9.99975 9.39911C11.0543 9.39911 11.9649 8.96619 12.9307 8.22936C13.8742 7.50944 14.9402 6.44344 16.3004 5.08324L18.0527 3.33093C18.3332 4.36507 18.3332 5.79277 18.3332 8.00002C18.3332 11.1248 18.3332 12.6872 17.5374 13.7824C17.2804 14.1362 16.9693 14.4473 16.6156 14.7043C15.5203 15.5 13.9579 15.5 10.8332 15.5H9.1665C7.9762 15.5 7.0126 15.5 6.21518 15.456C6.95154 15.2834 7.49984 14.6224 7.49984 13.8334C7.49984 12.9129 6.75365 12.1667 5.83317 12.1667H4.77687C4.91868 11.9215 4.99984 11.6369 4.99984 11.3334C4.99984 10.4129 4.25365 9.66669 3.33317 9.66669H1.67251C1.6665 9.16577 1.6665 8.61294 1.6665 8.00002Z" fill="#a5cd39"/>
            </svg> </i> <a href="mailto:info@prosperuniversal.com">
            <p>info@prosperuniversal.com</p>
            </a> </div>
          <div class="d-flex align-items-center"> <i> <svg width="20" height="20" viewBox="0 0 37 37" fill="#a5cd39" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7917 4.23926C10.1532 4.23926 9.6355 4.75693 9.6355 5.39551V31.6038C9.6355 32.2424 10.1532 32.7601 10.7917 32.7601H26.2084C26.847 32.7601 27.3647 32.2424 27.3647 31.6038V5.39551C27.3647 4.75693 26.847 4.23926 26.2084 4.23926H10.7917ZM7.323 5.39551C7.323 3.47977 8.87601 1.92676 10.7917 1.92676H26.2084C28.1241 1.92676 29.6772 3.47977 29.6772 5.39551V31.6038C29.6772 33.5195 28.1241 35.0726 26.2084 35.0726H10.7917C8.87601 35.0726 7.323 33.5195 7.323 31.6038V5.39551Z" fill="#a5cd39"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8022 7.70801C15.8022 7.06943 16.3199 6.55176 16.9585 6.55176H20.0418C20.6804 6.55176 21.1981 7.06943 21.1981 7.70801C21.1981 8.34658 20.6804 8.86426 20.0418 8.86426H16.9585C16.3199 8.86426 15.8022 8.34658 15.8022 7.70801Z" fill="#a5cd39"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2605 29.291C14.2605 28.6525 14.7782 28.1348 15.4167 28.1348H21.5834C22.222 28.1348 22.7397 28.6525 22.7397 29.291C22.7397 29.9296 22.222 30.4473 21.5834 30.4473H15.4167C14.7782 30.4473 14.2605 29.9296 14.2605 29.291Z" fill="#a5cd39"></path>
            </svg> </i>
            <p>+91 90670 50450</p>
          </div>
          <div  class="d-flex align-items-center">
          <div class="header-social-link">
                <ul class="clearfix">
                  <li> <a href="#" target="_blank"> <i class="fab fa-facebook-f"></i> </a> </li>
                  <li> <a href="#" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                  <li> <a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
                </ul>
              </div>
          
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="menu-bar">
      <div class="logo"> <a href="<?php echo $sitepath; ?>"><img src="<?php echo $datapath; ?>images/logo.png" width="150"></a> </div>
      <nav class="navbar">
        <ul class="navbar-links">
          <li class="navbar-dropdown"><a <?php echo $menu[0]; ?> href="<?php echo $sitepath; ?>">Home</a> </li>
          <li class="navbar-dropdown"><a href="<?php echo $sitepath; ?>about-prosper/">Our Story</a></li>
          <li class="navbar-dropdown"> <a href="#">Our Machines</a>
            <ul class="dropdown">
              <li><a href="<?php echo $sitepath; ?>paper-cuttlery-machine/">Paper Cuttlery Machine</a></li>
              <li><a href="<?php echo $sitepath; ?>packing-machine/">Packing Machine</a></li>
         </ul>
          </li>
          <li class="navbar-dropdown"><a href="#">Services</a>
          <ul class="dropdown">
              <li><a href="<?php echo $sitepath; ?>mold-development/">Mold Development</a></li>
              <li><a href="<?php echo $sitepath; ?>service-and-supports/">After Sales Services</a></li>
         </ul>
          </li>
          <?php /*?><li class="navbar-dropdown"><a href="<?php echo $sitepath; ?>news-and-events/">News & Events</a></li><?php */?>
          <li class="navbar-dropdown"><a href="<?php echo $sitepath; ?>connect-us/">Connect Us</a></li>
        </ul>
      </nav>
      <div class="search-style d-flex align-items-center"> <a href="javascript:void(0)" class="search-btn"> <svg height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
        <g id="_12" data-name="12">
          <path d="m21.71 20.29-2.83-2.82a9.52 9.52 0 1 0 -1.41 1.41l2.82 2.83a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zm-17.71-8.79a7.5 7.5 0 1 1 7.5 7.5 7.5 7.5 0 0 1 -7.5-7.5z"></path>
        </g>
        </svg> </a> <a class="header-button newsbox button" href="#">Download</a> </div>
      <div class="bar-menu"><div class="nav-outer">Menu
              <div class="mobile-nav-toggler"> <img src="http://localhost/panarahydrotech/images/icon-bar.png" alt=""></div>
            </div></div>
    </div>
  </div>
  <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
    <div class="res-log"> <a href="<?php echo $sitepath; ?>"><img src="<?php echo $datapath; ?>images/logo.png" width="100"></a> </div>
    <ul>
      <li><a <?php echo $menu[0]; ?> href="<?php echo $sitepath; ?>">Home</a> </li>
          <li><a href="<?php echo $sitepath; ?>about-prosper/">About Story</a></li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)"> Our Machines</a>
            <ul class="sub-menu">
              <li><a href="<?php echo $sitepath; ?>paper-cuttlery-machine/">Paper Cuttlery Machine</a></li>
              <li><a href="<?php echo $sitepath; ?>packing-machine/">Packing Machine</a></li>
			</ul>
          </li>
          <li class="menu-item-has-children"><a href="#">Services</a>
          <ul class="sub-menu">
              <li><a href="<?php echo $sitepath; ?>mold-development/">Mold Development</a></li>
              <li><a href="<?php echo $sitepath; ?>service-and-supports/">After Sales Services</a></li>
         </ul>
          </li>
          <li><a href="<?php echo $sitepath; ?>news-and-events/">News & Events</a></li>
          <li><a href="<?php echo $sitepath; ?>connect-us/">Connect Us</a></li>
    </ul>
    <a href="JavaScript:void(0)" id="res-cross"><span class="icon flaticon-remove"></span></a>
    <div class="about-energix">
      <div class="d-flex align-items-center top-bar-mail">
        <div class="d-flex align-items-center"> <i> <svg width="20" height="20" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7917 4.23926C10.1532 4.23926 9.6355 4.75693 9.6355 5.39551V31.6038C9.6355 32.2424 10.1532 32.7601 10.7917 32.7601H26.2084C26.847 32.7601 27.3647 32.2424 27.3647 31.6038V5.39551C27.3647 4.75693 26.847 4.23926 26.2084 4.23926H10.7917ZM7.323 5.39551C7.323 3.47977 8.87601 1.92676 10.7917 1.92676H26.2084C28.1241 1.92676 29.6772 3.47977 29.6772 5.39551V31.6038C29.6772 33.5195 28.1241 35.0726 26.2084 35.0726H10.7917C8.87601 35.0726 7.323 33.5195 7.323 31.6038V5.39551Z" fill="white"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8022 7.70801C15.8022 7.06943 16.3199 6.55176 16.9585 6.55176H20.0418C20.6804 6.55176 21.1981 7.06943 21.1981 7.70801C21.1981 8.34658 20.6804 8.86426 20.0418 8.86426H16.9585C16.3199 8.86426 15.8022 8.34658 15.8022 7.70801Z" fill="white"></path>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2605 29.291C14.2605 28.6525 14.7782 28.1348 15.4167 28.1348H21.5834C22.222 28.1348 22.7397 28.6525 22.7397 29.291C22.7397 29.9296 22.222 30.4473 21.5834 30.4473H15.4167C14.7782 30.4473 14.2605 29.9296 14.2605 29.291Z" fill="white"></path>
          </svg> </i> <a href="callto:+91 90670 50450">
          <p>+91 90670 50450</p>
          </a> </div>
      </div>
      <div class="d-flex align-items-center top-bar-mail">
        <div class="d-flex align-items-center"> <i> <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.833252 10.7083C0.488074 10.7083 0.208252 10.9881 0.208252 11.3333C0.208252 11.6785 0.488074 11.9583 0.833252 11.9583H3.33325C3.67843 11.9583 3.95825 11.6785 3.95825 11.3333C3.95825 10.9881 3.67843 10.7083 3.33325 10.7083H0.833252Z" fill="white"></path>
          <path d="M0.833252 13.2083C0.488074 13.2083 0.208252 13.4881 0.208252 13.8333C0.208252 14.1785 0.488074 14.4583 0.833252 14.4583H5.83325C6.17843 14.4583 6.45825 14.1785 6.45825 13.8333C6.45825 13.4881 6.17843 13.2083 5.83325 13.2083H0.833252Z" fill="white"></path>
          <path d="M2.59071 2.24172L2.5 2.16667C2.757 1.81294 3.0305 1.55276 3.38422 1.29576C4.4795 0.5 6.04189 0.5 9.16667 0.5H10.8333C13.9581 0.5 15.5205 0.5 16.6157 1.29576C16.9695 1.55276 17.2214 1.78443 17.4784 2.13816L17.3737 2.24225L15.4505 4.16551C14.0491 5.56689 13.0416 6.5725 12.1726 7.23558C11.318 7.88758 10.6712 8.14908 9.99992 8.14908C9.3285 8.14908 8.68175 7.88758 7.82717 7.23558C6.95817 6.5725 5.95066 5.56689 4.54927 4.16551L2.92989 2.54612L2.59071 2.24172Z" fill="white"></path>
          <path d="M1.6665 8.00002C1.6665 5.80009 1.6665 4.37457 1.94419 3.34125L2.06971 3.45391L3.69904 5.08322C5.05926 6.44344 6.12525 7.50944 7.06879 8.22936C8.03456 8.96619 8.94517 9.39911 9.99975 9.39911C11.0543 9.39911 11.9649 8.96619 12.9307 8.22936C13.8742 7.50944 14.9402 6.44344 16.3004 5.08324L18.0527 3.33093C18.3332 4.36507 18.3332 5.79277 18.3332 8.00002C18.3332 11.1248 18.3332 12.6872 17.5374 13.7824C17.2804 14.1362 16.9693 14.4473 16.6156 14.7043C15.5203 15.5 13.9579 15.5 10.8332 15.5H9.1665C7.9762 15.5 7.0126 15.5 6.21518 15.456C6.95154 15.2834 7.49984 14.6224 7.49984 13.8334C7.49984 12.9129 6.75365 12.1667 5.83317 12.1667H4.77687C4.91868 11.9215 4.99984 11.6369 4.99984 11.3334C4.99984 10.4129 4.25365 9.66669 3.33317 9.66669H1.67251C1.6665 9.16577 1.6665 8.61294 1.6665 8.00002Z" fill="white"></path>
          </svg> </i> <a href="mailto:info@prosperuniversal.com">
          <p>info@prosperuniversal.com</p>
          </a> </div>
      </div>
    </div>
  </div>
</header>
