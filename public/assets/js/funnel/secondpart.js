 const steps = document.querySelectorAll(".form-step");
    const indicators = document.querySelectorAll(".step");
    let currentStep = 0;

    function showStep(index) {
      steps.forEach((step, i) => {
        step.classList.toggle("active", i === index);
        indicators[i].classList.toggle("active", i === index);
        indicators[i].classList.toggle("completed", i < index);
      });
    }

    document.querySelectorAll(".next-step").forEach(btn => {
      btn.addEventListener("click", () => {
        if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
        }
      });
    });

    document.querySelectorAll(".prev-step").forEach(btn => {
      btn.addEventListener("click", () => {
        if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
        }
      });
    });

    document.getElementById("multiStepForm").addEventListener("submit", (e) => {
      e.preventDefault();
      alert("Form submitted!");
    });



  function nextStep() {
    const totalSteps = document.querySelectorAll('.form-step').length;
    if (current < totalSteps) {
      current++;
      updateSteps();
    } else {
      document.getElementById('multiStepForm').submit();
    }
  }

  function prevStep() {
    if (current > 1) {
      current--;
      updateSteps();
    }
  }

  // steps two ---------------------------

     let uploadedFiles = {};

    function handleFile(input, fieldName) {
      const file = input.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = function(e) {
        if (uploadedFiles[fieldName]) {
          uploadedFiles[fieldName].remove();
        }

        const previewArea = document.getElementById("previewArea");

        const thumb = document.createElement("div");
        thumb.className = "preview-thumb";
        const img = document.createElement("img");
        img.src = e.target.result;
        img.alt = fieldName;
        img.onclick = () => openPopup(e.target.result);

        const remove = document.createElement("button");
        remove.className = "remove-btn";
        remove.textContent = "×";
        remove.onclick = () => {
          thumb.remove();
          delete uploadedFiles[fieldName];
          input.value = ''; // Reset input
        };

        thumb.appendChild(img);
        thumb.appendChild(remove);
        previewArea.appendChild(thumb);

        uploadedFiles[fieldName] = thumb;
      };
      reader.readAsDataURL(file);
    }

    function openPopup(src) {
      document.getElementById("popupImage").src = src;
      document.getElementById("popup").style.display = "flex";
    }

    function closePopup() {
      document.getElementById("popup").style.display = "none";
    }



  // steps three ---------------------------


  const entityType = document.getElementById("entityType");
  const subCategory = document.getElementById("subCategory");
  const subCategorySection = document.getElementById("subCategorySection");
  const ownerCount = document.getElementById("ownerCount");
  const ownersContainer = document.getElementById("ownersContainer");
  const managerTypeSection = document.getElementById("managerTypeSection");
  const managerType = document.getElementById("managerType");
  const managerFormSection = document.getElementById("managerFormSection");

  const subCategories = {
    "LLC": ["Single Member LLC", "Multi Member LLC"],
    "Corporation": ["S Corporation", "C Corporation"]
  };

  entityType.addEventListener("change", () => {
    const type = entityType.value;
    subCategory.innerHTML = "";
    subCategorySection.style.display = "none";

    if (subCategories[type]) {
      subCategorySection.style.display = "block";
      subCategories[type].forEach(sub => {
        const opt = document.createElement("option");
        opt.value = sub;
        opt.text = sub;
        subCategory.appendChild(opt);
      });
    }

    setOwnerOptions();
    updateOwnerFields();
    updateManagerSection();
  });

  subCategory.addEventListener("change", () => {
    setOwnerOptions();
    updateManagerSection();
  });

  ownerCount.addEventListener("change", () => {
    updateOwnerFields();
  });

  managerType.addEventListener("change", () => {
    managerFormSection.style.display = managerType.value === "Manager Managed" ? "block" : "none";
  });

  function setOwnerOptions() {
    const type = entityType.value;
    const sub = subCategory.value;

    ownerCount.innerHTML = "";
    const min = (type === "LLC" && sub === "Single Member LLC") ? 1 : 1; // Always starts at 1 now

    for (let i = min; i <= 4; i++) {
      const opt = document.createElement("option");
      opt.value = i;
      opt.text = i;
      ownerCount.appendChild(opt);
    }
  }

  function updateOwnerFields() {
    const count = parseInt(ownerCount.value || 1);
    ownersContainer.innerHTML = "";
    for (let i = 1; i <= count; i++) {
      ownersContainer.appendChild(createOwnerForm(i));
    }
  }

  function createOwnerForm(index) {
    const div = document.createElement("div");
    div.className = "owner-block";
    div.innerHTML = `
      <h5>Owner ${index}</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Owner Name*</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Owner Percentage*</label>
          <select class="form-select"><option>100%</option><option>50%</option><option>25%</option></select>
        </div>
        <div class="col-md-12">
          <label class="form-label">Address*</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">City*</label>
          <select class="form-select"><option>microchips</option></select>
        </div>
        <div class="col-md-6">
          <label class="form-label">State/Province/Region*</label>
          <select class="form-select"><option>microchips</option></select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Postal Code*</label>
          <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="form-label">Country*</label>
          <select class="form-select"><option>microchips</option></select>
        </div>
      </div>
    `;
    return div;
  }

  function updateManagerSection() {
    const type = entityType.value;
    const sub = subCategory.value;
    const hideManager = (type === "Non-Profit" || type === "Partnership" || sub === "Single Member LLC");
    managerTypeSection.style.display = hideManager ? "none" : "block";
    managerFormSection.style.display = "none";
  }

  window.addEventListener("DOMContentLoaded", () => {
    entityType.dispatchEvent(new Event("change"));
  });
