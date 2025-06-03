@extends('layouts.app')
@section('title', 'Support Ticket')

@push('style')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />

<style>
    .modal-content {
      border-radius: 12px;
      padding: 20px 20px 10px;
      position: relative;
    }

    .modal-title {
      font-size: 20px;
      font-weight: 600;
    }

    .close-btn {
      position: absolute;
      top: 16px;
      right: 20px;
      border: none;
      background: transparent;
      font-size: 20px;
      color: #333;
      cursor: pointer;
    }

    .form-label {
      font-weight: 500;
    }

    .form-control,
    .form-select {
      border-radius: 10px;
      font-size: 14px;
    }

    .upload-box {
      border: 2px dashed #ddd;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      font-size: 13px;
      color: #999;
      cursor: pointer;
    }

    .upload-box:hover {
      background: #f8f8f8;
    }

    .btn-orange {
      background-color: #ff5a1f;
      color: white;
      border: none;
      border-radius: 30px;
      padding: 8px 20px;
      font-size: 14px;
      font-weight: 500;
      position: absolute;
      top: 25%;
      right: 1%;
       margin: auto;
    }
    .btn-orangetoik{
        background-color: #ff5a1f;
      color: white;
      border: none;
      border-radius: 30px;
      padding: 8px 20px;
      font-size: 14px;
      font-weight: 500;
    }
    .support-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .support-header h5 {
      font-weight: 600;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 500px;
      }
    }

    .support-table {
      border: 1px solid #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .support-table th {
      font-size: 14px;
      color: #999;
      font-weight: 500;
      background-color: #f8f9fa;
      border-bottom: none;
    }

    .support-table td {
      font-size: 14px;
      vertical-align: middle;
      border-top: none;
    }

    .fw-bold {
      font-weight: 600 !important;
    }

    .badge {
      font-size: 12px;
      padding: 5px 10px;
      border-radius: 12px;
      font-weight: 500;
    }

    .badge-high {
      background-color: #ffe5e5;
      color: #d9534f;
    }

    .badge-medium {
      background-color: #fff3cd;
      color: #856404;
    }

    .badge-low {
      background-color: #e7f4ff;
      color: #0d6efd;
    }

    .avatar {
      width: 28px;
      height: 28px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 8px;
    }

    .view-btn {
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 13px;
    }

    .ellipsis {
      cursor: pointer;
      font-size: 18px;
      color: #999;
    }

    @media (max-width: 768px) {
      .support-table thead {
        display: none;
      }

      .support-table, .support-table tbody, .support-table tr, .support-table td {
        display: block;
        width: 100%;
      }

      .support-table td {
        padding: 10px 0;
        border-top: none;
      }
    }

    .modal-xl {
      max-width: 95%;
    }

    .chat-modal-content {
      border-radius: 12px;
      overflow: hidden;
      height: 600px;
    }

    .chat-sidebar, .chat-details {
      background-color: #f9f9f9;
      padding: 16px;
      overflow-y: auto;
    }

    .chat-sidebar {
      border-right: 1px solid #eee;
    }

    .chat-details {
      border-left: 1px solid #eee;
    }

    .chat-conversation {
      padding: 16px;
      overflow-y: auto;
      background-color: #fff;
      height: 100%;
    }

    .chat-bubble {
      background-color: #f1f5ff;
      padding: 10px 14px;
      border-radius: 10px;
      max-width: 70%;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .chat-bubble.agent {
      background-color: #f6f6f6;
    }

    .chat-meta {
      font-size: 11px;
      color: #aaa;
      margin-top: 2px;
    }

    .message-box {
      border-top: 1px solid #eee;
      padding: 10px 16px;
    }

    .message-input {
      border: none;
      width: 100%;
      padding: 8px;
      outline: none;
      font-size: 14px;
    }

    .ticket-card {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
      align-items: center;
    }

    .ticket-card img {
      width: 32px;
      height: 32px;
      border-radius: 50%;
    }

    .ticket-card .text-muted {
      font-size: 13px;
    }

    .badge-priority {
      background-color: #ffe5e5;
      color: #d9534f;
      font-size: 12px;
      padding: 3px 10px;
      border-radius: 10px;
      margin-left: 8px;
    }

    .chat-scroll {
      height: calc(100% - 60px);
      overflow-y: auto;
    }

    .chat-header {
      padding: 10px 16px;
      border-bottom: 1px solid #eee;
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .ticket-details small {
      display: block;
      font-size: 12px;
      color: #999;
    }

    .ticket-details strong {
      display: block;
      margin-bottom: 10px;
    }

</style>



@endpush


@section('content')
<div class="row g-3 mb-3">
    <div class="col-12">
        <div class="card shadow-none">
            <div class="card-header">
                <div class="row flex-between-center">
                    <div class="col-6 support-header mb-4">
                        <h5 class="fs-6 mb-0 text-nowrap py-2 py-xl-0">Support Ticket</h5>
                        <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#ticketModal">Create Support ticket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Close Button -->
        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>

        <h5 class="modal-title mb-3" id="ticketModalLabel">Create ticket</h5>

        <form>
          <div class="mb-3">
            <label class="form-label">Subject *</label>
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="mb-3">
            <label class="form-label">Category *</label>
            <select class="form-select">
              <option selected>Select category</option>
              <option>Single Member LLC</option>
              <option>Multi Member LLC</option>
              <option>Tax Filing</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Priority *</label>
            <select class="form-select">
              <option selected>Low</option>
              <option>Medium</option>
              <option>High</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Description *</label>
            <textarea class="form-control" rows="3" placeholder="Describe your issue..."></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Upload File</label>
            <div class="upload-box">
                <input type="file" style="display: none">
              Click to upload or drag and drop<br>
              <small>SVG, PNG, JPG or GIF (max. 800×400px)</small>
            </div>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-orangetoik">Create Support ticket</button>
          </div>
        </form>
      </div>
    </div>
</div>

<div class="mid py-4">
    <h5 class="mb-3">Support</h5>
    <div class="table-responsive">
        <table class="table support-table">
        <thead>
            <tr>
            <th>Ticket ID</th>
            <th>Subject</th>
            <th>Submitted On</th>
            <th>Last Update</th>
            <th>Assign</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#TK24561</td>
                <td>
                    <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40?img=10" class="avatar" alt="Avatar">
                    Payment Issue
                    </div>
                </td>
                <td>Apr 1, 2025</td>
                <td>Apr 5, 2025</td>
                <td>Aliya</td>
                <td><span class="badge badge-high">In Progress • High</span></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <button class="view-btn" data-bs-toggle="modal" data-bs-target="#chatModal">View</button>
                    <span class="ellipsis">⋮</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>#TK24562</td>
                <td>
                    <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40?img=11" class="avatar" alt="Avatar">
                    Account Access
                    </div>
                </td>
                <td>Apr 3, 2025</td>
                <td>Apr 6, 2025</td>
                <td>David</td>
                <td><span class="badge badge-medium">Resolve • Medium</span></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <button class="view-btn" data-bs-toggle="modal" data-bs-target="#chatModal">View</button>
                    <span class="ellipsis">⋮</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>#TK24563</td>
                <td>
                    <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40?img=12" class="avatar" alt="Avatar">
                    Delay in Filing
                    </div>
                </td>
                <td>Apr 4, 2025</td>
                <td>Apr 7, 2025</td>
                <td>Reza</td>
                <td><span class="badge badge-low">In Progress • Low</span></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <button class="view-btn" data-bs-toggle="modal" data-bs-target="#chatModal">View</button>
                    <span class="ellipsis">⋮</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>#TK24564</td>
                <td>
                    <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40?img=13" class="avatar" alt="Avatar">
                    Refund Request
                    </div>
                </td>
                <td>Apr 5, 2025</td>
                <td>Apr 9, 2025</td>
                <td>Sophie</td>
                <td><span class="badge badge-low">Resolve • Low</span></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <button class="view-btn" data-bs-toggle="modal" data-bs-target="#chatModal">View</button>
                    <span class="ellipsis">⋮</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>#TK24565</td>
                <td>
                    <div class="d-flex align-items-center">
                    <img src="https://i.pravatar.cc/40?img=14" class="avatar" alt="Avatar">
                    LLC Formation Help
                    </div>
                </td>
                <td>Apr 7, 2025</td>
                <td>Apr 10, 2025</td>
                <td>Nasir</td>
                <td><span class="badge badge-high">In Progress • High</span></td>
                <td>
                    <div class="d-flex align-items-center gap-2">
                    <button class="view-btn" data-bs-toggle="modal" data-bs-target="#chatModal">View</button>
                    <span class="ellipsis">⋮</span>
                    </div>
                </td>
            </tr>
        </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" style="width: 76%">
    <div class="modal-content chat-modal-content">
      <div class="row g-0 h-100">
        
        <!-- Sidebar -->
        <div class="col-md-3 chat-sidebar">
          <h6 class="mb-3">All</h6>
          <div class="ticket-card">
            <img src="https://i.pravatar.cc/40?img=10" alt="avatar">
            <div>
              <div><strong>EIN Not Received</strong></div>
              <div class="text-muted">Hi, I would like to talk to...</div>
            </div>
          </div>
          <div class="ticket-card">
            <img src="https://i.pravatar.cc/40?img=11" alt="avatar">
            <div>
              <div><strong>EIN Not Received</strong></div>
              <div class="text-muted">Hi, I would like to talk to...</div>
            </div>
          </div>
          <div class="ticket-card">
            <img src="https://i.pravatar.cc/40?img=12" alt="avatar">
            <div>
              <div><strong>EIN Not Received</strong></div>
              <div class="text-muted">Hi, I would like to talk to...</div>
            </div>
          </div>
        </div>

        <!-- Chat Area -->
        <div class="col-md-6 d-flex flex-column">
          <div class="chat-header">
            <span>EIN Not Received <span class="badge-priority">High</span></span>
            <button class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="chat-scroll flex-grow-1 chat-conversation">
            <div class="text-end">
              <div class="chat-bubble bg-light text-start ms-auto">Hi, I would like to talk about why my EIN not received</div>
              <div class="chat-meta text-end">12:05 AM</div>
            </div>
            <div class="text-start d-flex align-items-start">
              <img src="https://i.pravatar.cc/32?img=15" class="me-2 mt-1" width="28" height="28" style="border-radius: 50%;">
              <div>
                <div class="chat-bubble agent">Thanks for your message, our team will reach out to you.</div>
                <div class="chat-meta">12:06 AM</div>
              </div>
            </div>
          </div>
          <div class="message-box d-flex align-items-center">
            <input type="text" class="message-input" placeholder="Type Here">
            <button class="btn btn-link text-orange"><i class="fas fa-paper-plane" style="color: #ff5a1f;"></i></button>
          </div>
        </div>

        <!-- Ticket Details -->
        <div class="col-md-3 ticket-details">
            <div class="card p-4 mb-4">
                <h6 class="card-title">Details</h6>
                <div class="info-row row mb-4">
                    <div class="col-sm-6 label">Ticket ID:</div>
                    <div class="col-sm-6 text-end">#TK5156</div>
                </div>
                <div class="info-row row mb-4">
                    <div class="col-sm-6 label">Submitted:</div>
                    <div class="col-sm-6 text-end">Jun 5, 2025</div>
                </div>
                <div class="info-row row mb-4">
                    <div class="col-sm-6 label">Last Update:</div>
                    <div class="col-sm-6 text-end">Jun 8, 2025</div>
                </div>
                <div class="info-row row mb-4">
                    <div class="col-sm-6 label">Assignee:</div>
                    <div class="col-sm-6 text-end">Nasir</div>
                </div>
                <div class="info-row row mb-4" style="position: relative">
                    <div class="col-sm-6 label">Status:</div>
                    <div style="width: 20%;position: absolute;top: 0px;right: 0px;margin: 0px;" class="col-sm-6 text-end badge bg-light text-primary fw-normal border rounded-pill">In Progress</div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</div>
   



@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endpush
