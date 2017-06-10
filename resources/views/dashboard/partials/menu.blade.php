	<div ng-controller="MainController as MainCtrl">
		<nav>
			<div class="strip">
				<ul class="menu">
					<li ng-class="{active:activeMenuTab === 1}" ng-click="selectTab(1)"><a href="/dashboard"><i class="fa fa-home"></i></a></li>
					<li ng-class="{active:activeMenuTab === 2}" ng-click="selectTab(2)"><a href="/search"><i class="fa fa-search"></i></a></li>
					<li ng-class="{active:activeMenuTab === 3}" ng-click="selectTab(3)"><a href="/collections"><i class="fa fa-cube"></i></a></li>
					<li ng-class="{active:activeMenuTab === 4}" ng-click="selectTab(4)"><a href="/records"><i class="fa fa-cubes"></i></a></li>
					<li ng-class="{active:activeMenuTab === 5}" ng-click="selectTab(5)"><a href="/users"><i class="fa fa-users"></i></a></li>
					<li ng-class="{active:activeMenuTab === 7}" ng-click="selectTab(7)"><a href="/plugins"><i class="fa fa-archive"></i></a></li>
					
				</ul>

				<div class="pull-down">	
					<ul>	
						<li ng-class="{active:activeMenuTab === 8}" ng-click="selectTab(6)"><a href="/settings">
							<img class="img-circle" src="http://wpidiots.com/html/writic/red-writic-template/css/img/demo-images/avatar1.jpg" alt="User-Avatar">
						</a></li>
						<li ng-class="{active:activeMenuTab === 9}" ng-click="selectTab(6)"><a href="/settings"><i class="fa fa-gears"></i></a></li>
						<li ng-class="{active:activeMenuTab === 10}" ng-click="selectTab(8)"><a href="/support"><i class="fa fa-question-circle-o "></i></a></li>
					</ul>
				</div>
			</div>


			<div class="block">
				<div class="inner-content">
					@include('dashboard.partials.menu-tabs')
				</div>
			</div>
		</nav>
	</div>