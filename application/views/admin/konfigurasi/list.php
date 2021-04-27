<?php
//notifikasi
if($this->session->flashdata('masuk')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('masuk');
	echo '</div>';
}

// ERROR FORM
echo validation_erors('<div class="alert alert-warning">','</div>');

// Form Open
echo form_open(base_url('admin/konfigurasi'));
?>

Form di sisi

<?php
// form close

echo form_close();
?>