@extends('front.template')

@section('main')
	<div class="container">
		<table>
			<thead>
				<th>No</th>
				<th>Name</th>
				<th>Password</th>
				<th>Email</th>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		/*$.ajax({

	        type:"POST",
	        url: '{ URL::'user/getData' }',
	        // data: {'index': index, 'start':start},
	        dataType: 'json',
	        success: function(data){

	        	// $data=data;
	        	// alert("data");
	        	debugger;
	        	// $data.each{function(index){

	        	// 	$str="<tr><td>'index'</td><td>'$data'</td><td>'index'</td><td>'index'</td></tr>"

	        	// }};
	            // $("tbody").remove();
            	// $("table").append("<tbody>"+data.data+"</tbody");
	        }
	    });*/
	    var url = "/user/postGetData";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

		$.ajax({
			type:"post",
	        url: url,
	        // dataType: 'json',
	        success:function(resp){
                    console.log("result  :" + resp);}	       
		})
		.done(function(data) {
			// alert( data );
		})
		.fail(function() {
			 alert( "error" );
		})
	});

</script>