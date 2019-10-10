
				    <div style="font-size: 1.1em; color:#32c5d2">بيانات المكتب</div>
				    اسم المكتب :
					<abbr>{{$log2->officeName }}</abbr>
					<br> رقم حساب المكتب :
					<abbr >{{$log2->officeAccount}}</abbr>
					<br><br>
					<div style="font-size: 1.1em; color:#32c5d2">بيانات التحويل</div>
					 اسم المرسل :
					<abbr>{{$log2->senderName}} </abbr>
					<br> رقم حساب المرسل :
					<abbr >{{$log2->senderAccount}}</abbr>
					<br> اسم المستلم :
					<abbr>{{$log2->reciverName}} </abbr>
					<br> رقم هوية المستلم :
					<abbr >{{$log2->reciverID}}</abbr>
					<br> رقم جوال المستلم :
					<abbr>{{$log2->reciverPhone}}</abbr>
					<br> المبلغ المراد تحويله :
					<abbr>{{$log2->balance_before_fee}} {{$log2->coin}}</abbr>
					<br> المبلغ بعد خصم العمولة :
					<abbr>{{$log2->balance_before_fee - $log2->total_fee}}   {{$log2->coin}}</abbr>
					
					<br> التاريخ :
					<abbr>{{$log2->created_at}}</abbr>
					
					
					