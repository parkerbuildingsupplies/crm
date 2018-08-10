<?php

	// print errors if any
	if (count($errors) > 0) {
		echo '<div class="alert alert-danger text-left alert-dismissible fade show">';
			foreach ($errors as $error) {
				echo '<div>';
					echo $error;
				echo '</div>';
				echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>';
			}
		echo '</div>';
	}
