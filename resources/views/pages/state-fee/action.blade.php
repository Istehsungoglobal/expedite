@can('manage-state-fee')
<div class="btn-group">
    <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none" type="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-ellipsis-h"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end py-0">
        @can('manage-state-fee')
        <a class="dropdown-item" href="{{ route('admin.state-fees.show', $stateFee->id) }}">
            <i class="fas fa-eye me-1"></i> Show
        </a>
        @endcan
        @can('edit-state-fee')
        <a class="dropdown-item" href="{{ route('admin.state-fees.edit', $stateFee->id) }}">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
        @endcan
        @can('delete-state-fee')
        <div class="dropdown-divider"></div>
        <div>
            <form x-data @submit.prevent="
                  cuteAlert({
                  type: 'question',
                  title: 'Delete State',
                  description: 'Are you sure you want to delete this State Fees?',
                  primaryButtonText: 'Yes, delete',
                  secondaryButtonText: 'Cancel'
                  }).then(result => {
                  if (result === 'primaryButtonClicked') {
                      axios.post('{{ route('admin.state-fees.destroy', $stateFee->id) }}', {
                      _method: 'DELETE',
                      _token: '{{ csrf_token() }}'
                      })
                      .then(response => {
                      cuteAlert({
                          type: 'success',
                          title: 'Deleted!',
                          description: 'State has been deleted.',
                          primaryButtonText: 'OK'
                      }).then(() => {
                          if (window.LaravelDataTables && window.LaravelDataTables['stateFeesTable']) {
                          window.LaravelDataTables['stateFeesTable'].ajax.reload();
                          } else if (typeof $('#stateFeesTable').DataTable === 'function') {
                          $('#stateFeesTable').DataTable().ajax.reload();
                          } else {
                          window.location.reload();
                          }
                      });
                      })
                      .catch(error => {
                      cuteAlert({
                          type: 'error',
                          title: 'Error',
                          description: error.response?.data?.message || 'Failed to delete role.',
                          primaryButtonText: 'OK'
                      });
                      });
                  }
                  });
              ">
                <button type="submit" class="dropdown-item text-danger">
                    <i class="fas fa-trash-alt me-1"></i> Delete
                </button>
            </form>
            @endcan
        </div>
    </div>
</div>
@endcan
