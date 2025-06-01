@props([
'route' => '#',
'columns' => [],
'order' => [0, 'asc'],
'pageLength' => 10,
'id' => 'dataTable',
'responsive' => true,
'striped' => true,
'searchable' => true,
'exportable' => false,
])

@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@if($exportable)
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
@endif
@endpush

<table class="table table-lg {{ $striped ? 'table-striped' : '' }} fs-10" id="{{ $id }}">
    <thead class="bg-200">
        <tr>
            @foreach($columns as $column)
            <th
                class="text-900 {{ isset($column['orderable']) && !$column['orderable'] ? 'no-sort' : 'sort' }} white-space-nowrap">
                {{ $column['title'] ?? ucfirst(str_replace('_', ' ', $column['data'])) }}
            </th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <!-- Data will be loaded via AJAX -->
    </tbody>
</table>

@push('script')
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>

@if($exportable)
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dtOptions = {
            processing: true,
            serverSide: true,
            responsive: {{ $responsive ? 'true' : 'false' }},
            pageLength: {{ $pageLength }},
            ajax: "{{ $route }}",
            columns: @json($columns),
            order: @json($order),
            language: {
                info: "_START_ to _END_ of _TOTAL_ entries",
                processing: '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'
            },
            drawCallback: function(settings) {
                // Custom drawing callback for pagination styling or other features
                const wrapper = $(this).closest('.dataTables_wrapper');
                wrapper.find('.pagination').addClass('pagination-sm');

                // Initialize any tooltips or popovers in the table
                const tooltips = wrapper.find('[data-bs-toggle="tooltip"]');
                if (tooltips.length) {
                    tooltips.tooltip();
                }
            }
        };

        @if($exportable)
        // Add export buttons
        dtOptions.dom = "<'row mx-0'<'col-sm-6 col-md-4'l><'col-sm-6 col-md-4 text-center'B><'col-md-4'f>>" +
                        "<'table-responsive scrollbar'tr>" +
                        "<'row g-0 align-items-center justify-content-center justify-content-sm-between'<'col-auto mb-2 mb-sm-0 px-3'i><'col-auto px-3'p>>";

        dtOptions.buttons = [
            {
                extend: 'collection',
                text: '<i class="fas fa-download me-1"></i> Export',
                className: 'btn-sm btn-falcon-default dropdown-toggle',
                buttons: [
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv me-1"></i> CSV',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: ':visible:not(.no-export)'
                        }
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel me-1"></i> Excel',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: ':visible:not(.no-export)'
                        }
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: ':visible:not(.no-export)'
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print me-1"></i> Print',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: ':visible:not(.no-export)'
                        }
                    }
                ]
            },
            {
                extend: 'colvis',
                text: '<i class="fas fa-columns me-1"></i> Columns',
                className: 'btn-sm btn-falcon-default'
            }
        ];
        @else
        // Standard layout without export buttons
        dtOptions.dom = "<'row mx-0'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                        "<'table-responsive scrollbar'tr>" +
                        "<'row g-0 align-items-center justify-content-center justify-content-sm-between'<'col-auto mb-2 mb-sm-0 px-3'i><'col-auto px-3'p>>";
        @endif

        const dataTable = $('#{{ $id }}').DataTable(dtOptions);
    });
</script>
@endpush
