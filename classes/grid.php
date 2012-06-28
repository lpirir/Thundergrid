<?php

	class Grid extends Controller {
		function getLinks($type, $chosenfile) {

			$links = array();
			switch($type){
				case 'list':
					foreach ($this->grid->find() as $file) {
						$id = (string) $file->file['_id'];
						$filename = htmlspecialchars($file->file["filename"]);
						$filetype = isset($file->file["filetype"]) ? $file->file["filetype"] : 'application/octet-stream';
			
						$links[] = sprintf('<a href="lib/download.php?id=%s">%s</a> | %s <br/>', $id, $filename, $filetype);
					}
				break;
				case 'images':
					foreach ($this->grid->find(array('fileType'=>array('$regex'=>'^image'))) as $file) {
						$id = (string) $file->file['_id'];
						$filename = htmlspecialchars($file->file["filename"]);
						$filetype = isset($file->file["filetype"]) ? $file->file["filetype"] : 'application/octet-stream';
						
						if($filetype == 'image/'.$chosenfile.''){
							$links[] = sprintf('<img src="lib/download.php?id=%s" height="200px" width="200px">', $id);
						}elseif($chosenfile == ''){
							 $links[] = sprintf('<img src="lib/download.php?id=%s" height="200px" width="200px">', $id);
						}
					}
				break;
				default:
					
				break;
			}
			return $links;
		}
	}
	
?>