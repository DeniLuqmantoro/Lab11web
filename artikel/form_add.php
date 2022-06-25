<?= $this->include('template/admin_header'); ?>

<h2 class="mx-5 mt-4"><?= $title; ?></h2>
	<form action="" method="post" enctype="multipart/form-data">
	<p class="mx-5 mt-4">
		<input type="text" name="judul">
	</p>
	<p class="mx-5 mt-4">
		<textarea name="isi" cols="50" rows="10"></textarea>
	</p>
	<p class="mx-5">
		<input type="file" name="gambar">
	</p>
	<p class="mx-5"><input type="submit" value="Kirim" class="btn btn-large"></p>
	
</form>

<?= $this->include('template/admin_footer'); ?>