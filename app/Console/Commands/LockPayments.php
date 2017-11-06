<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Payment;
use App\Models\LatePayments;
use Carbon\Carbon;

class LockPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lock:payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Los pagos han exedido el tiempo de espera, por lo tanto han sido marcados como atrasados';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $date_now = Carbon::now()->toDateString();
      $hour_now = Carbon::now()->toTimeString();
      $payments = Payment::where('date', $date_now)->where('status', 'Pendiente')->get();
      foreach ($payments as $key => $value) {
        if ($hour_now >= '11:00:00') {
          echo "Estamos listos para bloquear";
          $payment = Payment::find($value->id);
          $payment->status = 'Vencido';
          $payment->moratorium = 20;
          $payment->total = $payment->ammount + $payment->moratorium;
          $payment->balance = $payment->balance + 20;
          $payment->save();

          $debt = $payment->debt;
          $debt->ammount = $debt->ammount + 20;
          $debt->save();

          if ($payment->status == 'Vencido') {
           $latePayments = new LatePayments;
           $latePayments->late_number = $payment->number;
           $latePayments->late_ammount = $payment->total;
           $latePayments->late_payment = $payment->payment;
           $latePayments->payment_id = $payment->id;
           $latePayments->debt_id    = $debt->id;
           $latePayments->save();
         }
         
       }
     }
   }
 }
