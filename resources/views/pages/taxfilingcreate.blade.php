@extends('layouts.app')
@section('title', 'Tax Uotation Create')

@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" />
<style>
    .progress-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .custom-progress {
      height: 6px;
      border-radius: 50px;
      background-color: #f1f3f5;
      overflow: hidden;
    }

    .custom-progress-bar {
      background-color: #f4511e;
    }

    .back-link {
      font-weight: 500;
      color: #1e293b;
      text-decoration: none;
    }

    .back-link:hover {
      text-decoration: underline;
    }


   .file-upload-box {
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 30px 20px;
      text-align: center;
      cursor: pointer;
      transition: border-color 0.3s ease;
      background-color: #fff;
    }

    .file-upload-box:hover {
      border-color: #0d6efd;
    }

    .file-upload-box input[type="file"] {
      display: none;
    }

    .upload-icon {
      font-size: 24px;
      color: #6c757d;
    }

    .upload-text {
      font-weight: 600;
      color: #2c3e50;
    }

    .upload-subtext {
      font-size: 14px;
      color: #6c757d;
    }
    .nextbtn:hover{
        background-color: #f4511e;
    }
</style>

@endpush


@section('content')
<div class="container my-4">
  <!-- Header Section -->
  <div class="progress-wrapper">
    <a href="{{ route('admin.taxfiling') }}" class="back-link">&larr; Back</a>
  </div>
  <!-- Progress Bar -->
  <div class="progress custom-progress">
    <div class="progress-bar custom-progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
  <div class="container-fluid mt-5 mb-5" style="width: 100% ; background-color: white;padding: 20px;border-radius: 15px;">
    <form style="width: 80%; margin:0px auto ">
      <div class="row mb-3">
        <h2 style="font-family: Inter;font-size: 30px;">Principal Business Activity</h2>
        <div class="col-md-6">
          <label class="form-label">Company Name *</label>
          <input type="text" class="form-control" required placeholder="Enter company name">
        </div>
        <div class="col-md-6">
          <label class="form-label">Taxation Year *</label>
          <select class="form-select" required>
            <option value="">Select year</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Business Activity *</label>
          <input type="text" class="form-control" required placeholder="e.g., Digital Marketing">
        </div>
        <div class="col-md-6">
          <label class="form-label">Mobile Phone *</label>
          <input type="tel" class="form-control" required placeholder="+1 (555) 000-0000">
        </div>
      </div>

      <h5 class="mt-4 mb-2">Financial Documents</h5>
      <div class="row mb-3">
        <div class="col-md-6">
           <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
        <div class="col-md-6">
          <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
      </div>

      <h5 class="mt-4 mb-2">Financial Documents (Continued)</h5>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Partner % Ownership *</label>
          <select class="form-select" required>
            <option value="">Select</option>
            <option>10%</option>
            <option>25%</option>
            <option>50%</option>
            <option>75%</option>
            <option>100%</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">ITIN Number</label>
          <input type="text" class="form-control" placeholder="Enter ITIN number">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
        <div class="col-md-6">
         <label class="form-label fw-semibold">Bank Statements (CSV) *</label>
		      <label class="file-upload-box d-block">
		        <input type="file" name="bank_statements" required>
		        <div>
		          <div class="upload-icon mb-2">
		            📤
		          </div>
		          <div class="upload-text">Click to upload</div>
		          <div class="upload-subtext">or drag and drop</div>
		        </div>
		    </label>
        </div>
      </div>

      <div class="text-end">
        <button type="submit" class="btn btn-primary nextbtn">Submit For Quotation</button>
      </div>
    </form>
  </div>


@endsection

@push('script')
<script>
  
</script>
@endpush
