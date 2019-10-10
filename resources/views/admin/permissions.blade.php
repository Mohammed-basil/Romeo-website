<form action="{{route('permission.update',['id'=>$user_id])}}" method="POST" class="contact_form">
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
	function func() {
		if (!($('#S4').is(':checked')) && !($('#S5').is(':checked')) && !($('#S6').is(':checked'))) {
			$("#R7").prop('checked', false);
		} else {
			$("#R7").prop('checked', true);
		}
	}
    function func2() {
		if (!($('#S1').is(':checked')) && !($('#S2').is(':checked')) && !($('#S10').is(':checked'))) {
			$("#R9").prop('checked', false);
		} else {
			$("#R9").prop('checked', true);
		}
	}

	$(document).ready(function() {
		$("#R7").click(function() {
			$(".S7").prop('checked', $(this).prop('checked'));
		});
	});
	$(document).ready(function() {
		$("#R9").click(function() {
			$(".S9").prop('checked', $(this).prop('checked'));
		});
	});
	$(document).ready(function() {
		$("#S4").click(function() {
			func();
		});
        $("#S5").click(function() {
			func();
		});
        $("#S6").click(function() {
			func();
		});

	});
    $(document).ready(function() {
		$("#S1").click(function() {
			func2();
		});
        $("#S2").click(function() {
			func2();
		});
        $("#S10").click(function() {
			func2();
		});

	});
</script>