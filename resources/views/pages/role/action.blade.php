@can('manage-role')
<div class="btn-group">
    <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none" type="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-ellipsis-h"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end py-0">
        @can('manage-role')
        <a class="dropdown-item" href="{{ route('admin.roles.show', $role->id) }}">
            <i class="fas fa-eye me-1"></i> Show
        </a>
        @endcan
        @can('edit-role')
        <a class="dropdown-item" href="{{ route('admin.roles.edit', $role->id) }}">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
        @endcan
        @can('delete-role')
        @if ($role->removable)
        <div class="dropdown-divider"></div>
        <div>
            <form x-data @submit.prevent="
                  cuteAlert({
                  type: 'question',
                  title: 'Delete User',
                  description: 'Are you sure you want to delete this role?',
                  primaryButtonText: 'Yes, delete',
                  secondaryButtonText: 'Cancel'
                  }).then(result => {
                  if (result === 'primaryButtonClicked') {
                      axios.post('{{ route('admin.roles.destroy', $role->id) }}', {
                      _method: 'DELETE',
                      _token: '{{ csrf_token() }}'
                      })
                      .then(response => {
                      cuteAlert({
                          type: 'success',
                          title: 'Deleted!',
                          description: 'User has been deleted.',
                          primaryButtonText: 'OK'
                      }).then(() => {
                          if (window.LaravelDataTables && window.LaravelDataTables['rolesTable']) {
                          window.LaravelDataTables['rolesTable'].ajax.reload();
                          } else if (typeof $('#rolesTable').DataTable === 'function') {
                          $('#rolesTable').DataTable().ajax.reload();
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
            @endif
            @endcan
        </div>
    </div>
</div>
@endcan
