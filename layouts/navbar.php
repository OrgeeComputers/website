<!-- navbar included from /layouts/navbar= -->
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Orgee Computers</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li <?php if($active=="home") echo 'class="active"'; ?>><a href="">Home</a></li>
              <li class="dropdown <?php if($active=="solar_lighting_systems") echo " active"; ?>">
			    <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Solar Lighting Systems<b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li <?php if($site=="overview") echo "class=active"; ?>> <a href="solar_lighting_systems">Overview </a></li>
                  <li class="divider"></li>
                  <li>&nbsp;&nbsp;&nbsp;&nbsp;<b>Installation Sites</b></li>
                  <li <?php if($site=="2500VA_rampur_jaunpur") echo "class=active"; ?>> <a href="solar_lighting_systems/2500VA_rampur_jaunpur/">2.5 kVA - Rampur</a></li>
                
                </ul>
			  </li>
              <li <?php if($active=="inverters") echo 'class="active"'; ?>><a href="#">Inverters</a></li>
              <li <?php if($active=="batteries") echo 'class="active"'; ?>><a href="#">Batteries</a></li>              
              <li <?php if($active=="about") echo 'class="active"'; ?>><a href="#">About the company</a></li>                            
              <li <?php if($active=="contact") echo 'class="active"'; ?>><a href="contact=">Contact</a></li>                                          
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<!-- navbar ends -->
