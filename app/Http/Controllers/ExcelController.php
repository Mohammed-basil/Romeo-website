<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Log;
use App\User;
use DB;
use Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function withdrawals()
    {
        $user = Auth::user();
        $withdrawals_data =DB::table('logs')->where('senderAccount',$user->account_number)->get()->toArray();
        $withdrawals_array[] = array('رقم حساب المستقبل','اسم المستقبل','المبلغ','العملة','التاريخ');
        foreach($withdrawals_data as $withdrawals)
        {
           
         $withdrawals_array[] = array(
            'رقم حساب المستقبل'  => $withdrawals->receiverAccount,
            'اسم المستقبل'  => $withdrawals->receiverName,
            'المبلغ' => $withdrawals->balance,
            'العملة'  => $withdrawals->coin,
            'التاريخ'  => $withdrawals->created_at,
         );
        }
     Excel::create('withdraw Data', function($excel) use ($withdrawals_array){
      $excel->setTitle('withdraw Data');
      $excel->sheet('withdraw Data', function($sheet) use ($withdrawals_array){
       $sheet->fromArray($withdrawals_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function deposit()
    {
        $user = Auth::user();
        $deposit_data =DB::table('logs')->where('receiverAccount',$user->account_number)->get()->toArray();
        $deposit_array[] = array('رقم حساب المرسل','اسم المرسل','المبلغ','العملة','التاريخ');
        foreach($deposit_data as $deposit)
        {
           
         $deposit_array[] = array(
            'رقم حساب المرسل'  => $deposit->senderAccount,
             'اسم  المرسل'  => $deposit->senderName,
            'المبلغ' => $deposit->balance,
            'العملة'  => $deposit->coin,
            'التاريخ'  => $deposit->created_at,
         );
        }
     Excel::create('deposit Data', function($excel) use ($deposit_array){
      $excel->setTitle('deposit Data');
      $excel->sheet('deposit Data', function($sheet) use ($deposit_array){
       $sheet->fromArray($deposit_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }



    function exchange()
    {
        $user = Auth::user();
        $exchange_data =DB::table('exchangelogs')->where('account_number',$user->account_number)->get()->toArray();
        $exchange_array[] = array('العملة','العملية','من','الى','سعر البيع','سعر الشراء','التاريخ');
        foreach($exchange_data as $exchange)
        {
         $exchange_array[] = array(
            'العملة'  => $exchange->from.'/'.$exchange->to ,
            'العملية' => $exchange->operation,
            'من'  => $exchange->amount_from.' '.$exchange->from,
            'الى'  => $exchange->amount_to.' '.$exchange->to,
            'سعر البيع' => $exchange->sale,
            'سعر الشراء'  => $exchange->buy,
            'التاريخ'  => $exchange->created_at,
         );
        }
     Excel::create('exchange Data', function($excel) use ($exchange_array){
      $excel->setTitle('exchange Data');
      $excel->sheet('exchange Data', function($sheet) use ($exchange_array){
       $sheet->fromArray($exchange_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function admin_users()
    {
        $user = Auth::user();
        $users_data =DB::table('users')->whereNotIn('id',[1,Auth::user()->id])->where('verified',1)->where('category_id',1)->where('active',1)->get()->toArray();
        $users_array[] = array('الاسم','رقم الحساب','رقم الجوال','الدولة','رصيد الدولار','رصيدالشيكل','رصيد الريال السعودي' ,'رصيد الجنيه المصري','رصيد اليورو الأوروبي','رصيد الدينار الأردني','رصيد الليرة التركي');
        foreach($users_data as $users)
        {
            $name=$users->first_name.' '.$users->last_name;
         $users_array[] = array(
            'الاسم'  => $name ,
            'رقم الحساب' => $users->account_number,
            'رقم الجوال'  => $users->phonenum,
            'الدولة'  => DB::table('countries')->where('id',$users->country_id)->select('name')->value('name'),     
            'رصيد الدولار' =>  DB::table('points')->where('user_id',$users->id)->select('USD')->value('USD'),
            'رصيدالشيكل'  =>  DB::table('points')->where('user_id',$users->id)->select('NIS')->value('NIS'),
            'رصيد الريال السعودي' =>  DB::table('points')->where('user_id',$users->id)->select('SAR')->value('SAR'),
            'رصيد الجنيه المصري' =>  DB::table('points')->where('user_id',$users->id)->select('EGP')->value('EGP'),
            'رصيد اليورو الأوروبي' =>  DB::table('points')->where('user_id',$users->id)->select('EUR')->value('EUR'),
            'رصيد الدينار الأردني ' =>  DB::table('points')->where('user_id',$users->id)->select('JOD')->value('JOD'),
            'رصيد الليرة التركي' =>  DB::table('points')->where('user_id',$users->id)->select('TRY')->value('TRY'),
         );
        }
     Excel::create('users Data', function($excel) use ($users_array){
      $excel->setTitle('users Data');
      $excel->sheet('users Data', function($sheet) use ($users_array){
       $sheet->fromArray($users_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
    function admin_offices()
    {
        $user = Auth::user();
         $users_data =DB::table('users')->whereNotIn('id',[1,Auth::user()->id])->where('verified',1)->where('active',1)->where('category_id',2)->get()->toArray();
        $users_array[] = array('الاسم','اسم المكتب','رقم الحساب','رقم الجوال','العمولة','الدولة','العنوان','رصيد الدولار','رصيدالشيكل','رصيد الريال السعودي','رصيد الجنيه المصري','رصيد اليورو الأوروبي','رصيد الدينار الأردني','رصيد الليرة التركي');
        foreach($users_data as $users)
        {
         $users_array[] = array(
            'الاسم'  => $users->first_name.' '.$users->last_name ,
            'اسم المكتب'  =>DB::table('offices')->where('user_id',$users->id)->select('office_name')->value('office_name'),
            'رقم الحساب' => $users->account_number,
            'رقم الجوال'  => $users->phonenum,
            'العمولة'  => DB::table('offices')->where('user_id',$users->id)->select('fee')->value('fee') .'%',
            'الدولة'  => DB::table('countries')->where('id',$users->country_id)->select('name')->value('name'),  
            'العنوان'  => DB::table('offices')->where('user_id',$users->id)->select('address')->value('address') , 
            'رصيد الدولار' =>  DB::table('points')->where('user_id',$users->id)->select('USD')->value('USD'),
            'رصيدالشيكل'  =>  DB::table('points')->where('user_id',$users->id)->select('NIS')->value('NIS'),
            'رصيد الريال السعودي' =>  DB::table('points')->where('user_id',$users->id)->select('SAR')->value('SAR'),
            'رصيد الجنيه المصري' =>  DB::table('points')->where('user_id',$users->id)->select('EGP')->value('EGP'),
            'رصيد اليورو الأوروبي' =>  DB::table('points')->where('user_id',$users->id)->select('EUR')->value('EUR'),
            'رصيد الدينار الأردني ' =>  DB::table('points')->where('user_id',$users->id)->select('JOD')->value('JOD'),
            'رصيد الليرة التركي' =>  DB::table('points')->where('user_id',$users->id)->select('TRY')->value('TRY'),
         );
        }
     Excel::create('offices Data', function($excel) use ($users_array){
      $excel->setTitle('offices Data');
      $excel->sheet('offices Data', function($sheet) use ($users_array){
       $sheet->fromArray($users_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function admin_log()
    {
        $user = Auth::user();
        $withdrawals_data =DB::table('logs')->get()->toArray();
        $withdrawals_array[] = array(
            'رقم حساب المرسل','رقم حساب المستقبل','اسم المرسل','اسم المستقبل','المبلغ','العملة','التاريخ');
        foreach($withdrawals_data as $withdrawals)
        {
           
         $withdrawals_array[] = array(
            'رقم حساب المرسل'  => $withdrawals->senderAccount,
            'رقم حساب المستقبل'  => $withdrawals->receiverAccount,
            'اسم  المرسل'  => $withdrawals->senderName,
            'اسم المستقبل'  => $withdrawals->receiverName,
            'المبلغ' => $withdrawals->balance,
            'العملة'  => $withdrawals->coin,
            'التاريخ'  => $withdrawals->created_at,
         );
        }
     Excel::create('log Data', function($excel) use ($withdrawals_array){
      $excel->setTitle('log Data');
      $excel->sheet('log Data', function($sheet) use ($withdrawals_array){
       $sheet->fromArray($withdrawals_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function admin_exchange_log()
    {
        $user = Auth::user();
        $exchange_data =DB::table('exchangelogs')->get()->toArray();
        $exchange_array[] = array('رقم الحساب','العملة','العملية','من','الى','سعر البيع','سعر الشراء','التاريخ');
        foreach($exchange_data as $exchange)
        {
         $exchange_array[] = array(
            'رقم الحساب'  => $exchange->account_number ,
            'العملة'  => $exchange->from.'/'.$exchange->to ,
            'العملية' => $exchange->operation,
            'من'  => $exchange->amount_from.' '.$exchange->from,
            'الى'  => $exchange->amount_to.' '.$exchange->to,
            'سعر البيع' => $exchange->sale,
            'سعر الشراء'  => $exchange->buy,
            'التاريخ'  => $exchange->created_at,
         );
        }
     Excel::create('exchange Data', function($excel) use ($exchange_array){
      $excel->setTitle('exchange Data');
      $excel->sheet('exchange Data', function($sheet) use ($exchange_array){
       $sheet->fromArray($exchange_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function admin_office_log()
    {
        $user = Auth::user();
        $office_log_data =DB::table('office_logs')->get()->toArray();
        $office_log_array[] = array(
            'رقم حساب المرسل','اسم  المرسل','اسم المكتب','رقم حساب المكتب','اسم المستفيد' ,'رقم هوية المستفيد' ,'رقم جوال المستفيد','العملة','المبلغ','العمولة','الحالة','التاريخ');
        foreach($office_log_data as $office_log)
        {
           
         $office_log_array[] = array(
            'رقم حساب المرسل '  => $office_log->senderAccount ,
              'اسم  المرسل '  => $office_log->senderName ,
            'اسم المكتب'  => $office_log->officeName ,
            'رقم حساب المكتب' => $office_log->officeAccount,
            'اسم المستفيد'  => $office_log->reciverName,
            'رقم هوية المستفيد'  => $office_log->reciverID,
            'رقم جوال المستفيد' => $office_log->reciverPhone,
            'العملة'  => $office_log->coin,
            'المبلغ'  => $office_log->balance_before_fee,
            'العمولة'  => $office_log->office_fee .'%',
            'الحالة'  => DB::table('statuses')->where('id',$office_log->status_id)->select('status')->value('status'),
            'التاريخ'  => $office_log->created_at,
         );
        }
     Excel::create('office logs Data', function($excel) use ($office_log_array){
      $excel->setTitle('office logs Data');
      $excel->sheet('office logs Data', function($sheet) use ($office_log_array){
       $sheet->fromArray($office_log_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }

    function offices()
    {
        $user = Auth::user();
        if($user->category_id==1){
            
        $office_log_data =DB::table('office_logs')->where('senderAccount',$user->account_number)->get()->toArray();
        $office_log_array[] = array('اسم المكتب','رقم حساب المكتب','اسم المستفيد' ,'رقم هوية المستفيد' ,'رقم جوال المستفيد','العملة','المبلغ','العمولة','الحالة','التاريخ');
        foreach($office_log_data as $office_log)
        {
           
         $office_log_array[] = array(
            'اسم المكتب'  => $office_log->officeName ,
            'رقم حساب المكتب' => $office_log->officeAccount,
            'اسم المستفيد'  => $office_log->reciverName,
            'رقم هوية المستفيد'  => $office_log->reciverID,
            'رقم جوال المستفيد' => $office_log->reciverPhone,
            'العملة'  => $office_log->coin,
            'المبلغ'  => $office_log->balance_before_fee,
            'العمولة'  => $office_log->office_fee.'%',
            'الحالة'  => DB::table('statuses')->where('id',$office_log->status_id)->select('status')->value('status'),
            'التاريخ'  => $office_log->created_at,
         );
        }

    }elseif($user->category_id==2){
             
        $office_log_data =DB::table('office_logs')->where('officeAccount',$user->account_number)->get()->toArray();
        $office_log_array[] = array('رقم حساب المرسل',' اسم المرسل','اسم المستفيد' ,'رقم هوية المستفيد' ,'رقم جوال المستفيد','العملة','المبلغ','العمولة','الحالة','التاريخ');
        foreach($office_log_data as $office_log)
        {
           
         $office_log_array[] = array(
            'رقم حساب المرسل '  => $office_log->senderAccount ,
             'رقم حساب المرسل '  => $office_log->senderName ,
            'اسم المستفيد'  => $office_log->reciverName,
            'رقم هوية المستفيد'  => $office_log->reciverID,
            'رقم جوال المستفيد' => $office_log->reciverPhone,
            'العملة'  => $office_log->coin,
            'المبلغ'  => $office_log->balance_before_fee,
            'العمولة'  => $office_log->office_fee.'%',
            'الحالة'  =>DB::table('statuses')->where('id',$office_log->status_id)->select('status')->value('status'),
            'التاريخ'  => $office_log->created_at,
         );
        }
    }
     Excel::create('office logs Data', function($excel) use ($office_log_array){
      $excel->setTitle('office logs Data');
      $excel->sheet('office logs Data', function($sheet) use ($office_log_array){
       $sheet->fromArray($office_log_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }





}
