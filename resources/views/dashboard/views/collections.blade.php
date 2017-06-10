<div class="container">
	@include('dashboard.partials.heading', [ 'text' => "Collections"] )
	
	@if(!empty($collections) && count($collections) > 0)
	@else 

	<div class="blockquote animation" ng-show="noCollections">
		<div class="bq-content">
			<h3>No collection created yet, click below to make one!</h3>
			<button class="btn btn-green noselect" ng-click="showCollectionCreationForm()">Create your first collection</button>
		</div>
	</div>
	@endif 

</div>
</div>


{{-- 
@if(!empty($collections) && count($collections) > 0)
@else 

<div class="blockquote">
<div class="bq-content">
<h3>No collection created yet, click below to make one!</h3>
<button class="btn btn-green noselect">Create your first collection</button>
</div>
</div>
@endif --}}