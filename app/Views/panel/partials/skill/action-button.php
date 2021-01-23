<a href="/panel/skill/<?= $data->id ?>/edit" class="btn btn-success btn-sm">
	<i class="fas fa-pencil-alt"></i>
</a>

<form action="/panel/skill/<?= $data->id ?>" class="d-inline" method="post">
	<?= csrf_field() ?>
	<input type="hidden" name="_method" value="DELETE">
	<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
</form>
