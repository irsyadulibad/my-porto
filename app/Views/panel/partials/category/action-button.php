<form action="/panel/category/<?= $data->id ?>" method="post" class="d-inline">
	<?= csrf_field() ?>
	<input type="hidden" name="_method" value="DELETE">
	<button type="submit" class="btn btn-sm btn-danger">
		<i class="fas fa-trash-alt"></i>
	</button>
</form>
