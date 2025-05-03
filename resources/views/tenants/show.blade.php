@extends('user_dashboard.layout.master')
@section('content')

<div class="body flex-grow-1 px-3 d-flex align-items-center justify-content-center">
    <div class="container-lg">
        <!-- Unit Details Card -->
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h3 class="card-title text-center text-uppercase mb-4" style="color: #3498db;">Tenant Details</h3>

                <div class="container mt-4">
                    <div class="">
                        @if ($tenant->tenant_photo)
                        <img src="{{ asset('storage/' . $tenant->tenant_photo) }}" alt="Tenant Image" class="card-img-top" style="object-fit: contain; height: 200px; width: 100%;">
                        @else
                            <div class="text-center py-4">
                                <p>No Image Available</p>
                            </div>
                        @endif
                        <div class="card-body">
                            <hr style="border-color: #ecf0f1;">
                
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Tenant:</strong> {{$tenant->name}}</p>
                                    <p class="card-text"><strong>Email:</strong> {{$tenant->email}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Contact No:</strong> {{$tenant->contact}}</p>
                                    <p class="card-text"><strong>Present Address:</strong> {{$tenant->address}}</p>
                                    
                                </div>
                               
                            </div>
                
                            <hr style="border-color: #ecf0f1;">
                
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Unit No:</strong> {{$tenant->available_unit_no}}</p>
                                    <p class="card-text"><strong>Floor No:</strong> {{$tenant->floor_no}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text"><strong>Advance Rent:</strong> {{$tenant->advance_rent}}</p>
                                    <p class="card-text"><strong>Rent Per Month:</strong> {{$tenant->rent_per_month}}</p>
                                </div>
                            </div>

                            <hr style="border-color: #ecf0f1;">
                
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text"><strong>NID:</strong> {{$tenant->nid}}</p>
                                    <p class="card-text"><strong>Issue Date:</strong> {{$tenant->issue_date}}</p>
                                </div>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                


                <!-- Action Buttons -->
                  <a href="{{ url('tenants') }}" class="btn btn-primary rounded-0 float-end">
                    <i class="fas fa-arrow-left"></i> Back
                  </a>
            </div>
        </div>
    </div>
</div>

@endsection
