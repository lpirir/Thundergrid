<?php

	class Download extends Controller {
		function getFile($id) {
			return $this->grid->findOne(array('_id' => new MongoId($id)));
		}
	}

?>