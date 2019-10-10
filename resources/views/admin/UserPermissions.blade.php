
<form action="{{route('user.permission.update',['id'=>$user_id])}}" method="POST" class="contact_form">
	{{csrf_field()}}

	<div class="modal-body">
		<input name="user_id" type="hidden" value="{{$user_id}}">
		<?php $selected=null ; ?>

		@foreach ($pages as $page ) @foreach ($user_pages as $user_page ) @if($page->id == $user_page->id)
		<?php $selected='checked';?>
		@endif @endforeach @if($page->parent_id == null)
		<input name="pages[]" id="R{{$page->id}}" style="margin-top:8px" type="checkbox" {{$selected}} value="{{$page->id}}"> {{$page->name}} @else
		<input name="pages[]" style="margin-right:25px" id="S{{$page->id}}" class="S{{$page->parent_id}}" type="checkbox" {{$selected}}
		 value="{{$page->id}}"> {{$page->name}} @endif
		<br>
		<?php $selected=null; ?>
		@endforeach

	</div>

	<div class="form-group">
		<div class="col-sm-offset-5 col-sm-6">
			<button type="submit" class="btn btn-success success"> حفظ </button>
			<a class="btn btn default" data-dismiss="modal">إلغاء</a>
		</div>
	</div>
	<br>
	<br>

</form>


<script>
	$(document).ready(function() {
		$("#R1").click(function() {
			$(".S1").prop('checked', $(this).prop('checked'));
		});
	});
	$(document).ready(function() {
		$("#R4").click(function() {
			$(".S4").prop('checked', $(this).prop('checked'));
		});
	});
	$(document).ready(function() {
		$("#R10").click(function() {
			$(".S10").prop('checked', $(this).prop('checked'));
		});
	});
	$(document).ready(function() {
		$("#S2").click(function() {
			if (!($('#S2').is(':checked')) && !($('#S3').is(':checked'))) {
			$("#R1").prop('checked', false);
		} else {
			$("#R1").prop('checked', true);
		}
		});
        $("#S3").click(function() {
			if (!($('#S2').is(':checked')) && !($('#S3').is(':checked'))) {
			$("#R1").prop('checked', false);
		} else {
			$("#R1").prop('checked', true);
		}
		});
	});


    $(document).ready(function() {
		$("#S5").click(function() {
			if (!($('#S5').is(':checked')) && !($('#S6').is(':checked')) ) {
			$("#R4").prop('checked', false);
		} else {
			$("#R4").prop('checked', true);
		}
		});
        $("#S6").click(function() {
			if (!($('#S5').is(':checked')) && !($('#S6').is(':checked'))) {
			$("#R4").prop('checked', false);
		} else {
			$("#R4").prop('checked', true);
		}
		});

	});


	$(document).ready(function() {
		$("#S11").click(function() {
			if (!($('#S11').is(':checked')) && !($('#S12').is(':checked')) && !($('#S13').is(':checked'))) {
			$("#R10").prop('checked', false);
		} else {
			$("#R10").prop('checked', true);
		}
		});
        $("#S12").click(function() {
			if (!($('#S11').is(':checked')) && !($('#S12').is(':checked')) && !($('#S13').is(':checked'))) {
			$("#R10").prop('checked', false);
		} else {
			$("#R10").prop('checked', true);
		}
		});
        $("#S13").click(function() {
			if (!($('#S11').is(':checked')) && !($('#S12').is(':checked')) && !($('#S13').is(':checked'))) {
			$("#R10").prop('checked', false);
		} else {
			$("#R10").prop('checked', true);
		}
		});

	});
</script>