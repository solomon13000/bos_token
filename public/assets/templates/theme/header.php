	 <header>  
	   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		   <div class="container-fluid">
			 <div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-ng-init="isCollapsed = true" data-ng-click="isCollapsed = !isCollapsed"> 	
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand">logo</a>
			 </div>
			 <div class="navbar-collapse collapse" data-ng-class="{collapse: isCollapsed}">
				 <ul class="nav navbar-nav navbar-right" id="topFixedNavbar1">
					  <li ng-click="isCollapsed=!isCollapsed"><a href="#!/Employee">Employee</a></li>
					  <li ng-click="isCollapsed=!isCollapsed"><a href="#!/User">User</a></li>
					  <li class="dropdown" data-ng-class="{ open : dd1 }" data-ng-init="dd1 = false" data-ng-click="dd1 = !dd1">
						  <a class="dropdown-toggle" role="button" aria-expanded="false" href="#">Maintenance <span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">Admin & Dashboard</li>
							<li ng-click="isCollapsed=!isCollapsed"><a href="#!/Employee">Employee</a></li>
							<li ng-click="isCollapsed=!isCollapsed"><a href="#!/User">User</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Portfolio</li>
							<li ng-click="isCollapsed=!isCollapsed"><a href="#!/Employee"></a></li>
							<li ng-click="isCollapsed=!isCollapsed"><a href="#!/Employee"></a></li>
						  </ul>
					   </li>
					   <li ng-click="isCollapsed=!isCollapsed"><a href="#!/Employee">Contact</a></li>
				 </ul>
			 </div>
			</div>
        </nav>
	 </header>
	<br/><br/></br></br>