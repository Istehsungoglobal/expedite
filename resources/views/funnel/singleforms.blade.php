@extends('funnel.funnel')
@section('title', 'Single Services Forms')

@push('styles')

<style>
   .upload-box {
      border: 1px dashed #ccc;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      color: #333;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .upload-box:hover {
      background-color: #f9f9f9;
    }
    .submit-btn {
      background-color: #ff5c1a;
      border: none;
      color: #fff;
      padding: 8px 18px;
      border-radius: 5px;
    }
    .submit-btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }
</style>

@endpush

@section('content')
<div class="container py-5" style="width: 60%">
    <div class="mx-auto">
      <div class="border rounded p-4 shadow-sm">
        <h5 class="mb-4 fw-bold">Employer Identification Number</h5>
        <form id="einForm">
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label fw-semibold">Company Document *</label>
              <div class="upload-box">
                <input type="file" name="company_doc"  hidden />
                <span>📤 <br><strong>Click to upload</strong> or drag and drop</span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Proof of Residential Address *</label>
              <div class="upload-box">
                <input type="file" name="proof_address"  hidden />
                <span>📤 <br><strong>Click to upload</strong> or drag and drop</span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label">Business Description</label>
              <textarea class="form-control" id="" name="business_desc" placeholder="Nurency" rows="4"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Digital Signature *</label>
              <div class="upload-box">
                <input type="file" name="signature" hidden />
                <span>📤 <br><strong>Click to upload</strong> or drag and drop</span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label">SSN or ITIN (if any)</label>
              <div class="upload-box">
                <input type="file" name="ssn_itin" hidden />
                <span>📤 <br><strong>Click to upload</strong> or drag and drop</span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Personal Identification Document *</label>
              <div class="upload-box">
                <input type="file" name="id_doc" hidden />
                <span>📤 <br><strong>Click to upload</strong> or drag and drop</span>
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">US Mailing Address *</label>
              <input type="text" class="form-control" name="us_address" value="Nurency" />
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Service Type *</label>
              <select class="form-select" name="service_type">
                <option selected>Nurency</option>
                <option>Standard</option>
                <option>Express</option>
              </select>
            </div>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="termsCheck" checked />
            <label class="form-check-label" for="termsCheck">
              I Agree Terms & Conditions Checkbox
            </label>
          </div>

          <div class="text-end">
            <button type="submit" class="submit-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Optional: handle drag-drop behavior
    document.querySelectorAll('.upload-box').forEach(box => {
      const input = box.querySelector('input[type="file"]');
      box.addEventListener('click', () => input.click());
    });

    // Form submission
    document.getElementById("einForm").addEventListener("submit", function (e) {
      e.preventDefault();
      if (!document.getElementById("termsCheck").checked) {
        alert("Please agree to the terms and conditions.");
        return;
      }
      alert("Form submitted successfully!");
    });
</script>
@endpush
