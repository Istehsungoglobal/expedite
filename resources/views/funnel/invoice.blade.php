<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'My Laravel App')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ url('assets/images/funnel/favicon.svg') }}">
  <style>
    body {
      background: linear-gradient(to right, #f8f9fa, #e9ecef);
      font-family: 'Segoe UI', sans-serif;
    }

    .invoice-container {
      background: #ffffff;
    padding: 1rem 2.5rem;
    max-width: 850px;
    margin: 2rem auto;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    position: relative;
    overflow: hidden;
    }

    .brand {
      color: #ff5200;
      font-weight: 700;
    }

    .invoice-header h3 {
      font-size: 2rem;
      margin-bottom: 0;
    }

    .invoice-section-title {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 0.75rem;
      border-bottom: 2px solid #f1f1f1;
      padding-bottom: 0.3rem;
      color: #343a40;
    }

    .invoice-table th {
      background-color: #f9fafb;
      text-transform: uppercase;
      font-size: 0.9rem;
      color: #6c757d;
      border-bottom: 1px solid #dee2e6;
    }

    .invoice-table td {
      vertical-align: middle;
    }

    .invoice-table tfoot td {
      font-weight: 600;
      border-top: 2px solid #dee2e6;
    }

    .text-muted-sm {
      font-size: 0.9rem;
      color: #6c757d;
    }

    .download-btn {
      background-color: #ff5f2e;
      color: white;
      border: none;
      padding: 0.6rem 1.6rem;
      border-radius: 30px;
      font-weight: 600;
      font-size: 1rem;
      margin: 0px auto;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      box-shadow: 0 4px 12px rgba(255, 95, 46, 0.4);
      transition: all 0.3s ease;
    }

    .download-btn:hover {
      background-color: #e94f20;
      transform: scale(1.03);
    }

    @media print {
      .download-btn {
        display: none !important;
      }
    }
  </style>
</head>
<body>

<div class="invoice-container" id="invoice">
  <div class="invoice-header d-flex justify-content-between align-items-start mb-4">
    <div>
      <h3><span class="brand">Exp</span>edite </h3>
      <p class="text-muted-sm mb-1">www.expediteformation.com</p>
      <p class="text-muted-sm mb-1">expediteformation@gmail.com</p>
      <p class="text-muted-sm">City, State, IN - 000 000</p>
    </div>
    <div class="text-end">
      <p><strong>Invoice #</strong> <span class="text-muted">AB2324–01</span></p>
      <p><strong>Date:</strong> <span class="text-muted">15 Aug, 2023</span></p>
      <p><strong>Country:</strong> <span class="text-muted">United States</span></p>
      <p><strong>State:</strong> <span class="text-muted">Wyoming</span></p>
    </div>
  </div>

  <div class="mb-4">
    <p class="invoice-section-title">Billed To</p>
    <p class="mb-0">MD Woailullah Olee</p>
    <p class="mb-0">E-mail: bg.creative1@gmail.com</p>
    <p class="mb-0">+8801624 600200</p>
  </div>

  <div class="mb-4">
    <p class="invoice-section-title">Invoice Details</p>
    <table class="table table-borderless invoice-table">
      <thead>
        <tr>
          <th>Item Description</th>
          <th class="text-end">Amount</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>USA Company Formation</td>
          <td class="text-end">$100.00</td>
        </tr>
        <tr>
          <td>US Register Agent for one year</td>
          <td class="text-end">$1,500.00</td>
        </tr>
        <tr>
          <td>Invoice Fee</td>
          <td class="text-end">$1600.00</td>
        </tr>
        <tr>
          <td>Tax (10%)</td>
          <td class="text-end">$450.00</td>
        </tr>
        <tr>
          <td>Discount</td>
          <td class="text-end">-$2.00</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>Total</td>
          <td class="text-end">$4,950.00</td>
        </tr>
      </tfoot>
    </table>
  </div>

  <p class="text-muted font-weight-bold">Thank you for doing business with us!</p>

  
</div>

<div class="container mb-5 pb-5">
  <button class="download-btn" onclick="downloadInvoice()">
    <i class="bi bi-download"></i> Download
  </button>
</div>

<!-- html2pdf script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
  function downloadInvoice() {
    const element = document.getElementById('invoice');
    const opt = {
      margin: 0.5,
      filename: 'invoice.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };

    html2pdf().set(opt).from(element).save();
  }
</script>

</body>
</html>
