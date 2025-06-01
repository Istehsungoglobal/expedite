
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

    // step 2 --------------

    const options = {
      llc: ["Single member LLC", "Multi member LLC"],
      corp: ["S Corporation ( U.S Resident only )", "C Corporation"]
    }

    function updateOptions() {
      const category = document.getElementById("category").value;
      const itemGroup = document.getElementById("item-group");
      const itemSelect = document.getElementById("item");

      // Clear previous options
      itemSelect.innerHTML = '<option value="">-- Select an item --</option>';

      if (category && options[category]) {
        // Show second field
        itemGroup.style.display = 'block';

        // Populate second dropdown
        options[category].forEach(item => {
          const option = document.createElement("option");
          option.value = item.toLowerCase();
          option.textContent = item;
          itemSelect.appendChild(option);
        });
      } else {
        // Hide second field if nothing or invalid selected
        itemGroup.style.display = 'none';
      }
    };

      // step 3 ----
  
   

      // step 4 ----

      function showPackage(num) {
        document.getElementById('package1').classList.add('hidden');
        document.getElementById('package2').classList.add('hidden');
        document.getElementsByClassName('package-tab')[0].classList.remove('active-tab');
        document.getElementsByClassName('package-tab')[1].classList.remove('active-tab');

        document.getElementById('package' + num).classList.remove('hidden');
        document.getElementsByClassName('package-tab')[num - 1].classList.add('active-tab');
      }

       const basePrices = {
      1: 257,
      2: 400
        };

        const totals = {
            1: 257,
            2: 400
        };

        const updatePrice = (id) => {
            document.getElementById(`totalPrice${id}`).textContent = `$${totals[id]}`;
        };

        document.querySelectorAll('.addon-toggle').forEach(toggle => {
            toggle.addEventListener('click', () => {
            const price = parseInt(toggle.dataset.price);
            const target = parseInt(toggle.dataset.target);

            if (toggle.classList.contains('active')) {
                totals[target] -= price;
                toggle.classList.remove('active');
                toggle.textContent = '';
            } else {
                totals[target] += price;
                toggle.classList.add('active');
                toggle.textContent = '';
            }

            updatePrice(target);
            });
        });


        //step 5 ........................

        const stripe = Stripe("YOUR_PUBLISHABLE_KEY");
        const elements = stripe.elements();
        const card = elements.create("card");
        card.mount("#card-element");

        const form = document.getElementById("payment-form");
        const cardHolderName = document.getElementById("cardholder-name");
        const emailInput = document.getElementById("email");
        const cardErrors = document.getElementById("card-errors");
        const paymentMethodInput = document.getElementById("payment-method-id");

        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            const { paymentMethod, error } = await stripe.createPaymentMethod("card", card, {
            billing_details: {
                name: cardHolderName.value,
                email: emailInput.value
            }
            });

            if (error) {
            cardErrors.textContent = error.message;
            } else {
            // Put the PaymentMethod ID in the hidden input
            paymentMethodInput.value = paymentMethod.id;
            form.submit(); // Submit full form to your Laravel route
            }
        });









document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".js-biz-card");
    const hiddenInput = document.getElementById("selectedCategoryId");

    cards.forEach(card => {
        card.addEventListener("click", function () {
            cards.forEach(c => c.classList.remove("active"));
            this.classList.add("active");
            hiddenInput.value = this.getAttribute("data-id");
        });
    });
});

        
