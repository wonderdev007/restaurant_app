@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Reservations</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/offers-members" class="breadcrumb-link">Offers</a></li>
                            </ol>
                        </nav>
                    </div>
                 </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table -->
            <!-- ============================================================== -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">All Reservations</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Guests</th>
                                    <th scope="col">Reservation Time</th>
                                    <th scope="col">Date Created</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <th scope="row">{{$reservation->id}}</th>
                                        <td>{{$reservation->fname}} {{$reservation->lname}}</td>
                                        <td>{{$reservation->email}}</td>
                                        <td>{{$reservation->phone_number}}</td>
                                        <td>{{$reservation->created_at}}</td>
                                        <td>{{$reservation->updated_at}}</td>
                                        <td>
                                            <a href={{"/admin/reservations/$reservation->id/delete"}} onclick="if (!confirm('Are you sure you want to delete this reservation?')) return false">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table -->
            <!-- ============================================================== -->
        </div>

        {{ $reservations->links() }}

    </div>
@endsection
