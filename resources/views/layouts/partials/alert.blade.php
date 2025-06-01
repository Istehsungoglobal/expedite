@push('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Display validation errors using cuteToast
        @if ($errors->any())
            @foreach ($errors->all() as $i => $error)
                cuteToast({
                    type: 'error',
                    title: 'Error {{ $i + 1 }}',
                    description: @json($error),
                    timer: 3000 * {{ $i + 1 }}
                });
            @endforeach
        @endif

        // Display session-based alerts using toastr
        @if (session('error'))
            toastr('error', @json(session('error')));
        @endif
        @if (session('success'))
            toastr('success', @json(session('success')));
        @endif
        @if (session('warning'))
            toastr('warning', @json(session('warning')));
        @endif
        @if (session('info'))
            toastr('info', @json(session('info')));
        @endif
    });
</script>
@endpush
