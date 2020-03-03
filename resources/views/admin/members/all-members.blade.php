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
                    <h2 class="pageheader-title">Offers</h2>
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
                    <h5 class="card-header">All Food Items</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($members as $member)
                                    <tr>
                                        <th scope="row">{{$member->id}}</th>
                                        <td>{{$member->fname}} {{$member->lname}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->phone_number}}</td>
                                        <td>{{$member->created_at}}</td>
                                        <td>{{$member->updated_at}}</td>
                                        <td>
                                            <a href={{"/admin/members/$member->id/delete"}} onclick="if (!confirm('Are you sure you want to delete this member?')) return false">
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

        {{ $members->links() }}

    </div>
@endsection
