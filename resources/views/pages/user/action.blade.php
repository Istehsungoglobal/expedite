<div class="btn-group">
    <button class="btn btn-falcon-default btn-sm dropdown-toggle dropdown-caret-none" type="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-ellipsis-h"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-end py-0">
        <a class="dropdown-item" href="{{ route('admin.users.show', $user->id) }}">
            <i class="fas fa-eye me-1"></i> View
        </a>
        <a class="dropdown-item" href="{{ route('admin.users.edit', $user->id) }}">
            <i class="fas fa-edit me-1"></i> Edit
        </a>
        @if(auth()->id() !== $user->id)
        <a class="dropdown-item" href="{{ route('admin.users.impersonate', $user->id) }}">
            <i class="fas fa-user-secret me-1"></i> Impersonate
        </a>
        <div class="dropdown-divider"></div>
        <div>
            <form x-data
              @submit.prevent="
                  cuteAlert({
                  type: 'question',
                  title: 'Delete User',
                  description: 'Are you sure you want to delete this user?',
                  primaryButtonText: 'Yes, delete',
                  secondaryButtonText: 'Cancel'
                  }).then(result => {
                  if (result === 'primaryButtonClicked') {
                      axios.post('{{ route('admin.users.destroy', $user->id) }}', {
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
                          if (window.LaravelDataTables && window.LaravelDataTables['usersTable']) {
                          window.LaravelDataTables['usersTable'].ajax.reload();
                          } else if (typeof $('#usersTable').DataTable === 'function') {
                          $('#usersTable').DataTable().ajax.reload();
                          } else {
                          window.location.reload();
                          }
                      });
                      })
                      .catch(error => {
                      cuteAlert({
                          type: 'error',
                          title: 'Error',
                          description: error.response?.data?.message || 'Failed to delete user.',
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
        </div>
        @endif
    </div>
</div>
