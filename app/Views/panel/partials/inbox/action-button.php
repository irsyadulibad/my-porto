<a href="/panel/inbox/<?= $data->id ?>" class="btn btn-sm btn-primary">
	<i class="fas fa-eye"></i>
</a>

<form action="/panel/inbox/<?= $data->id ?>" method="post" class="d-inline">
	<?= csrf_field() ?>
	<input type="hidden" name="_method" value="DELETE">
	<button type="submit" class="btn btn-sm btn-danger">
		<i class="fas fa-trash-alt"></i>
	</button>
</form>
