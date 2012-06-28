<?php	
	
	class Admin extends Controller {
		function upload() {
			$filetype = image_type_to_mime_type(exif_imagetype($_FILES['pic']['tmp_name']));
			return $this->grid->storeUpload('pic', array('filetype' => $filetype));
		}
	}

?>