<?php include'head.php' ?>
<?php include'navbar.php' ?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
        <table class="table table-hover  table-striped">
            <thead class="table-dark">
            <tr>
                <th>Course Code:</th>
                <th>Course Title</th>
                <th>Credit</th>
            </tr>
            </thead>
    
   

    <?php

    $tdata = '<tbody><tr> <td>John</td> <td>Doe</td> <td>john@example.com</td></tr></tbody>';
	for ($row=1; $row <= 10; $row++) { 
		echo "$tdata \n";
		}
		
    ?>
  </table>
		</div>
		<div class="col-md-3">
			<div class="bg-dark text-white w-100 h-10 p-2 mb-2 rounded-top" ><strong> Notifications</strong></div>
			<div ><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="https://ignouhall.ignou.ac.in/HallTickets/HALL0620/Hall0620.asp"><strong class="text-danger"> Hall Tickets for June 2020 Term End Examination</strong></a></div>
			<div class=""><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="https://ignouhall.ignou.ac.in/HallTickets/HALL0620/Hall0620.asp"><strong class="text-danger"> Online Re-Registration for July 2020 session extended till 30th September 2020 without late fees</strong class="text-danger"></a></div>
			<div ><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="https://ignouhall.ignou.ac.in/HallTickets/HALL0620/Hall0620.asp"><strong class="text-danger"> Hall Tickets for June 2020 Term End Examination</strong></a></div>
			<div ><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="https://ignouhall.ignou.ac.in/HallTickets/HALL0620/Hall0620.asp"><strong class="text-danger"> Hall Tickets for June 2020 Term End Examination</strong></a></div>
		</div>
	</div>
</div>


<!-- [footer start] -->
<?php include'footer.php' ?>
<!-- [footer end] -->