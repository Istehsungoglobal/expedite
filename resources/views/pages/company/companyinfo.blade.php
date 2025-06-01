@extends('layouts.app')
@section('title', 'Company Info')

@push('style')
<style>
.card {
      border-radius: 10px;
      box-shadow: 0 0 5px rgba(0,0,0,0.05);
    }
    .card-title {
      font-weight: 600;
      margin-bottom: 20px;
    }
    .label {
      font-weight: 500;
    }
    .info-row {
      margin-bottom: 10px;
    }
    @media (max-width: 576px) {
      .text-end {
        text-align: left !important;
      }
    }
</style>
@endpush


@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                        <h2 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Company Info</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="mid" style="width: 100%; margin:10px auto; ">
    <div class="card p-4 mb-4">
      <h5 class="card-title">OCTAGON DIGITAL MARKETING LLC</h5>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">222 Stratford Ave, Pittsburgh PA 15206 US</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">State Status:</div>
        <div class="col-sm-6 text-end">Active/Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">NAICS Code:</div>
        <div class="col-sm-6 text-end">Professional, Scientific, and Technical Services (54</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">222 Stratford Ave, Pittsburgh PA 15206 US</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">State Status:</div>
        <div class="col-sm-6 text-end">Active/Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">NAICS Code:</div>
        <div class="col-sm-6 text-end">Professional, Scientific, and Technical Services (54</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">Ave, Pittsburgh PA 15206 US</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">State Status:</div>
        <div class="col-sm-6 text-end">Active/Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">NAICS Code:</div>
        <div class="col-sm-6 text-end">Technical Services (54</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">Pittsburgh PA 15206 US</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">State Status:</div>
        <div class="col-sm-6 text-end">Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">NAICS Code:</div>
        <div class="col-sm-6 text-end">Services (54</div>
      </div>
    </div>

    <div class="card p-4 mb-4">
      <h6 class="card-title">Contact Info</h6>
      <div class="info-row row">
        <div class="col-sm-6 label">Name:</div>
        <div class="col-sm-6 text-end">N H imon</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Mailing Address:</div>
        <div class="col-sm-6 text-end">Active/Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Mobile No:</div>
        <div class="col-sm-6 text-end">+8801775368537</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">222 Stratford Ave, Pittsburgh PA 15206 US</div>
      </div>
    </div>

    <div class="card p-4">
      <h6 class="card-title">Agent Info</h6>
      <div class="info-row row">
        <div class="col-sm-6 label">Name:</div>
        <div class="col-sm-6 text-end">N H imon</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Mailing Address:</div>
        <div class="col-sm-6 text-end">Active/Good Standing</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Mobile No:</div>
        <div class="col-sm-6 text-end">+8801775368537</div>
      </div>
      <div class="info-row row">
        <div class="col-sm-6 label">Company Address:</div>
        <div class="col-sm-6 text-end">222 Stratford Ave, Pittsburgh PA 15206 US</div>
      </div>
    </div>
  </div>


@endsection



@push('script')
<script>
   
</script>
@endpush
