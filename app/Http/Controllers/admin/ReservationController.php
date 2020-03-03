<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $reservations = Reservation::paginate(5);
        return view('admin/reservation/all', ['reservations' => $reservations]);
    }

    public function create() {
        $reservations = Reservation::All();
        return view('admin/reservations/create');
    }

    public function store() {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'reservation_time' => ['required'],
        ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->reservation_time = request('reservation_time');
        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function showEditCategories($id) {
        $reservation = Reservation::find($id);

        return view('admin/reservations/edit', ['reservation' => $reservation]);
    }

    public function update($id) {
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'reservation_time' => ['required'],
        ]);

        $reservation = Reservation::find($id);
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->reservation_time = request('reservation_time');
        $reservation->save();

        return redirect('/admin/reservations');
    }

    public function delete($id) {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }
}
