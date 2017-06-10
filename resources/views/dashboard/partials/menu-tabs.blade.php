<div class="menu-tab">
	<div class="title">
		<span>@{{ selectedPage.title }}</span>
		<i class="fa fa-"></i>
	</div>

	<p ng-bind="selectedPage.blob" class="summary">
	</p>

	<div ng-bind-html="SkipValidation(selectedPage.markup)"></div>

</div>