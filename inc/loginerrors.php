<?php

	// print errors if any
	if (count($errors) > 0) {
			foreach ($errors as $error) {
				echo '<div class="alert alert-danger text-left alert-dismissible fade show">';
					echo $error;
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>';
				echo '</div>';
			}
	}
