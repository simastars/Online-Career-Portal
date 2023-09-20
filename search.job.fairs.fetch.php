<?php 
	
	//Including database connection files to the page.
	require 'db.connect.php';
	
	//Current Date
	$current_date = date('Y-m-d');
	
	//Query which is going to execute to for database manipulation.
	$query = "SELECT * FROM job_details";
	$query_jobs = $conn->query($query);
				
		echo '	<table border="1">
					<tr>
						<td><center><b>Name</center></b></td>
						<td><center><b>Profile</b></center></td>
						<td><center><b>Key Skill</b></center></td>
						<td><center><b>Location</b></center></td>
						<td><center><b>CTC</b></center></td>
						<td><center><b>More</b></center></td>
					</tr>
				</table>';
		
	$query_rows_num = $query_jobs->num_rows;
	if($query_rows_num > 0)
	{		
		while($query_jobs_result = $query_jobs->fetch_assoc())
		{	
			echo '	<table border="1">
						<tr>
							<td><center>'.$query_jobs_result['name'].'</center></td>
							<td><center>'.$query_jobs_result['profile'].'</center></td>
							<td><center>'.$query_jobs_result['key_skill'].'</center></td>
							<td><center>'.$query_jobs_result['location'].'</center></td>
							<td><center>'.$query_jobs_result['ctc'].'</center></td>
							<td><center>';
							
						echo	'<a href="search.jobs.view.php" onClick="MyWindow=window.open('."'search.jobs.view.php?id="
									.$query_jobs_result['id']."', '_window');".'return false;">				
								Click for Details
								</a>
							</center></td>
						</tr>
					</table>';
			}
	}
?>

<!-- 	
		'_window', 'MyWindow'
		
		_window or _tab use for opening the other page in new tab
		MyWindow seperates the tab from browser.