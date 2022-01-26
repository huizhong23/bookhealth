<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Http\Controllers\QrCodeGeneratorController;
use Illuminate\Http\Request;
use App\Models\BookingAppointment;
use DB;

class BookingAppointmentController extends Controller
{
    public function bookingAppointment() {
        return view("bookingAppointment");
    }

    public function detailBookingAppointment(Request $request){
        // $request->validate([
        //     'typeAppointment'=>'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'assistance' => 'required',
        //     'remarks' => 'required',
        // ]);
        // $bookingAppointment = new BookingAppointment();
        // $bookingAppointment->typeAppointment = $request->typeAppointment;
        // $bookingAppointment->date = $request->date;
        // $bookingAppointment->time = $request->time;
        // $bookingAppointment->assistance = $request->assistance;
        // $bookingAppointment->remarks = $request->remarks;
        // $res = $bookingAppointment->save();
        // // return redirect('detailBookingAppointment');*/
        // if($res){
        //     return back() -> with('success', 'Yessss');
        // }
        // else{
        //     return back() -> with('fail', 'Something wrong');
        // }
       DB::table('booking_appointments')->insert([
        'typeAppointment' => $request -> typeAppointment,
        'date' => $request -> date,
        'time' => $request -> time,
        'assistance' => $request -> assistance,
        'remarks' => $request -> remarks
        ]);
        return back() -> with('bookingAppointment_detail', "Appointment is successfully booked!");
        // $bookingAppointment = new BookingAppointment();
        // $bookingAppointment->typeAppointment = $request->input('typeAppointment');
        // $bookingAppointment->date = $request->input('date');
        // $bookingAppointment->time = $request->input('time');
        // $bookingAppointment->assistance = $request->input('assistance');
        // $bookingAppointment->remarks = $request->input('remarks');
        // $bookingAppointment->save();
    }
    public function bookingAppointmentConfirmed($id) {
        $booking_appointments = BookingAppointment::findorFail($id);
        return view("bookingAppointmentConfirmed",compact('booking_appointments'));
    }

    public function bookingHistory() {
        $booking_appointments = BookingAppointment::all();
        return view('bookingHistory',["booking" => $booking_appointments]);
    }
    
    public function delete($id)
    {
        $data = BookingAppointment::findOrFail($id);
        $data->delete();
        return redirect('bookingHistory');
    }

    public function generate($id)
    {
        $data = BookingAppointment::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($id);
        return view('qr-code', compact('qrcode'));
    }
}    