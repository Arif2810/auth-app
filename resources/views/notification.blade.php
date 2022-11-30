@if (session('message'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<b>status</b> : {{ session('message') }}
  <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif