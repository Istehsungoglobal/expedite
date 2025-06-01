@extends('funnel.funnel')

@section('title', 'Funnel Second Step')

@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/funnel/secondpart.css') }}">

@endpush


@section('content')
  <div class="container my-5 mb-5 pb-5">
    <div class="step-indicator mb-4">
      <div class="step active" data-step="1">
        <div class="circle">1</div>
        <p>Owner Information</p>
      </div>
      <div class="step" data-step="2">
        <div class="circle">2</div>
        <p>Documents submit</p>
      </div>

    </div>

    <form id="multiStepForm">

      <!---- step1 -------->

        <div class="form-step secondpart active" id="step1">
            <div class="primary-contact">Owner Information</div>
            <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>

                <div class="container owninfo" >
                  <form id="entityForm">
                    <!-- Entity Type -->
                    <div class="mb-3">
                      <label for="entityType" class="form-label">Company Structure *</label>
                      <select class="form-select" id="entityType" required>
                        <option value="">-- Select --</option>
                        <option value="LLC">LLC</option>
                        <option value="Corporation">Corporation</option>
                        <option value="Non-Profit">Non-Profit</option>
                        <option value="Partnership">Partnership</option>
                      </select>
                    </div>

                    <!-- Sub Category -->
                    <div class="mb-3 form-section" id="subCategorySection">
                      <label for="subCategory" class="form-label">LLC Types *</label>
                      <select class="form-select" id="subCategory"></select>
                    </div>

                    <!-- No of Owner -->
                    <div class="mb-3">
                      <label for="ownerCount" class="form-label">No. of Owner *</label>
                      <select class="form-select" id="ownerCount"></select>
                    </div>

                    <!-- Owner Forms -->
                    <div id="ownersContainer"></div>

                    <!-- Manager Type -->
                    <div class="mb-3 form-section" id="managerTypeSection">
                      <label for="managerType" class="form-label">Owner Type Managed</label>
                      <select class="form-select" id="managerType">
                        <option value="">-- Select --</option>
                        <option value="Member Managed">Member Managed</option>
                        <option value="Manager Managed">Manager Managed</option>
                      </select>
                    </div>
                    <!-- Manager Form -->
                    <div class="manager-section form-section" id="managerFormSection">
                      <h5>Manager Details</h5>
                      <div class="row g-3">
                        <div class="container mt-5">
                          <h6 class="form-label">Select One of the Owner As a Manager *</h6>
                          <div class="manager-radio-group">
                            <div class="manager-radio">
                              <input type="radio" id="ownerA" name="managerOwner" value="A" checked>
                              <label for="ownerA">
                                <div class="checkmark">✔</div>
                                <span>Owner A</span>
                              </label>
                            </div>
                            <div class="manager-radio">
                              <input type="radio" id="ownerB" name="managerOwner" value="B">
                              <label for="ownerB">
                                <div class="checkmark">✔</div>
                                <span>Owner B</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3 mt-3" id="managerType">
                          <label for="managerTypes" class="form-label">Manager Type</label>
                          <select class="form-select" id="managerTypes">
                            <option value="">-- Select --</option>
                            <option value="Member Managed">Member Managed</option>
                            <option value="Manager Managed">External Manager</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Manager Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Manager Email</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">City</label>
                          <select class="form-select"><option>microchips</option></select>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">State/Province/Region</label>
                          <select class="form-select"><option>microchips</option></select>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Country</label>
                          <select class="form-select"><option>microchips</option></select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>

                 <div class="d-flex justify-content-center  btnbtn mt-4 pt-4 mb-5 pb-5">
                      <button type="button" style="background-color: #0d0c3d;" class="btn btn-primary next-step nextstep nextbtn">Next</button>
                  </div>


        </div>


      <!---- step2 -------->

      <div class="form-step" id="step2">
        <div class="container">
            <div class="primary-contact">Documents submit</div>
            <div class="please-fill-the">Please fill the form below to receive a quote for your project.</div>
            <form>
                <div class="mb-3">
                  <label class="form-label fw-bold passscan">Passport Scan Copy & Recent 3 months Bank Statement*</label>
                  <div class="row g-3 passportpart">
                    <div class="col-md-6">
                      <label class="upload-box w-100">
                        <input type="file" accept=".png,.jpg,.jpeg,.pdf,.gif" onchange="handleFile(this, 'passport')" required>
                        <div>
                          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="32">
                          <div class="mt-2 fw-bold">Passport Scan Copy</div>
                        </div>
                      </label>
                    </div>
                    <div class="col-md-6">
                      <label class="upload-box w-100">
                        <input type="file" accept=".png,.jpg,.jpeg,.pdf,.gif" onchange="handleFile(this, 'bank')" required>
                        <div>
                          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="32">
                          <div class="mt-2 fw-bold">Recent 3 months Bank Statement</div>
                        </div>
                      </label>
                    </div>
                  </div>
                  <small class="text-muted mt-2 d-block">
                    • Your information is safe with us — we never share it with third parties
                  </small>
                </div>

                <div class="mt-4">
                  <h6 class="fw-bold">Passport and Bank Statement Demo Documents </h6>
                 <div class="demopass">
                    <a href="../assets/passport.png" target="_blank">Passport Scan Copy</a>
                    |
                    <a href="../assets/passport.png" target="_blank">Bank Statement</a>
                 </div>
                </div>

                <div class="mt-4">
                  <h6 class="fw-bold">Passport and Bank Statement (File Shown)</h6>
                  <div class="preview-container" id="previewArea"></div>
                </div>


            </form>

                <!-- Popup Viewer -->
              <div class="popup-overlay" id="popup">
                <div class="popup-content">
                  <button class="popup-close" onclick="closePopup()">×</button>
                  <img id="popupImage" src="" alt="Preview">
                </div>
              </div>
          </div>
            <div class="d-flex justify-content-center btnbtn mt-4 pt-4">
                <button type="button" class="btn btn-secondary prev-step prevstep  prebtn">Previous</button>
                <button type="button" style="background-color: #0d0c3d;" class="btn btn-primary next-step nextstep nextbtn">Submit</button>
            </div>
        </div>
      </div>
    </form>

@endsection

@push('scripts')
  <script type="text/javascript" src="{{ asset('assets/js/funnel/secondpart.js') }}"></script>
@endpush