@extends('layouts.app')
@section('title', 'Tax Filing')

@push('style')
<style>
    .status-banner {
      background: #f5521d;
      color: white;
      border-radius: 12px;
      padding: 24px 28px;
      position: relative;
      overflow: hidden;
    }

    .status-banner .overlay-pattern {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background-image: url(../../../assets/images/dash.png);
        opacity: 0.5;
        background-size: cover;
        border-radius: 0 12px 12px 0;
    }

    .status-banner h4 {
      font-weight: 700;
    }

    .status-banner p {
      margin: 0;
      font-size: 0.95rem;
    }
    .status-badge {
      padding: 2px 10px;
      border-radius: 12px;
      font-size: 0.75rem;
      font-weight: 500;
    }
    .badge-complete {
      background-color: #D1FADF;
      color: #027A48;
    }
    .badge-pending {
      background-color: #F2F4F7;
      color: #475467;
    }
    .table-container {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
      padding: 25px;
    }

    .table-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      row-gap: 10px;
    }

    .table-header h5 {
      font-weight: 600;
    }

    .btn-orange {
      background-color: #f5521d;
      color: #fff;
      border-radius: 8px;
      font-weight: 500;
    }

    .btn-orange:hover {
      background-color: #e04815;
    }

    .search-box {
      width: 260px;
    }

    table thead {
      background-color: #f1f3f5;
    }

    table thead th {
      font-size: 0.85rem;
      font-weight: 600;
      text-transform: uppercase;
      color: #6b7280;
      border: none;
    }

    table tbody td {
      border-top: 1px solid #f1f3f5;
      font-size: 0.9rem;
      color: #374151;
    }

    .status-badge {
      padding: 4px 12px;
      border-radius: 999px;
      font-size: 0.75rem;
      font-weight: 500;
    }

    .badge-complete {
      background-color: #dcfce7;
      color: #15803d;
    }

    .badge-pending {
      background-color: #f3f4f6;
      color: #6b7280;
    }

    .btn-outline-secondary {
      border-radius: 6px;
      font-size: 0.8rem;
    }

    .table-hover tbody tr:hover {
      background-color: #f9fafb;
    }
  </style>

@endpush


@section('content')
<div class="container my-4" >
    <div class="status-banner position-relative">
      <div class="overlay-pattern"></div>
      <h4>Hi, Nasir!</h4>
      <p>Here’s your company status & quick actions.</p>
    </div>
</div>

<div class="container py-5">
  <div class="table-container">
    <div class="table-header mb-3">
      <h5>Tax Filing</h5>
      <div class="d-flex gap-2">
        <input type="text" id="searchInput" class="form-control search-box" placeholder="Search">
        <button class="btn btn-orange">
           <a style="text-decoration: none;color:white" href="{{ route('admin.taxfilingcreate') }}"> Get Tax Quotation</a>    
        </button>
      </div>
    </div>

    <table class="table table-hover align-middle mb-0" id="taxTable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Submitted On</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tax Filing Quotation for 2025</td>
          <td>Jun 22, 2025</td>
          <td><span class="status-badge badge-complete">Complete</span></td>
          <td><button class="btn btn-outline-secondary btn-sm">View</button></td>
        </tr>
        <tr>
          <td>Renew US Business Address</td>
          <td>Jun 22, 2025</td>
          <td><span class="status-badge badge-pending">Pending</span></td>
          <td><button class="btn btn-outline-secondary btn-sm">Edit</button></td>
        </tr>
        <tr>
          <td>Business Renewal Tax Form</td>
          <td>Jun 21, 2025</td>
          <td><span class="status-badge badge-complete">Complete</span></td>
          <td><button class="btn btn-outline-secondary btn-sm">View</button></td>
        </tr>
        <tr>
          <td>Address Update Confirmation</td>
          <td>Jun 20, 2025</td>
          <td><span class="status-badge badge-pending">Pending</span></td>
          <td><button class="btn btn-outline-secondary btn-sm">Edit</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


@endsection

@push('script')
<script>
  const searchInput = document.getElementById('searchInput');
  const tableRows = document.querySelectorAll('#taxTable tbody tr');

  searchInput.addEventListener('keyup', function () {
    const filter = searchInput.value.toLowerCase();
    tableRows.forEach(row => {
      const text = row.textContent.toLowerCase();
      row.style.display = text.includes(filter) ? '' : 'none';
    });
  });
</script>
@endpush
