window.confirmAlert = (message, callback = null) => {
    cuteAlert({
        type: 'question',
        description: message,
        timer: 500000,
        primaryButtonText: 'Confirm',
        secondaryButtonText: 'Cancel',
      }).then((event) => {
        if (event === 'primaryButtonClicked') {
            if (callback) {
                callback();
            }
        }
      })
}

// Universal confirm action for forms and elements
window.confirmAction = (target, message) => {
    cuteAlert({
        type: 'question',
        description: message,
        timer: 500000,
        primaryButtonText: 'Confirm',
        secondaryButtonText: 'Cancel',
    }).then((event) => {
        if (event === 'primaryButtonClicked') {
            // Determine AJAX or full request
            const isAjax = target.hasAttribute('data-ajax');
            // Determine HTTP method and URL
            let method = target.getAttribute('data-method') || (target.tagName === 'FORM' ? target.method : 'get');
            let url = target.getAttribute('data-url') || (target.tagName === 'A' ? target.href : (target.tagName === 'FORM' ? target.action : null));
            // Handle AJAX
            if (isAjax && url) {
                const config = { url, method, headers: {} };
                if (target.tagName === 'FORM') {
                    // form data
                    const formData = new FormData(target);
                    config.data = formData;
                }
                axios(config)
                    .then(response => {
                        const tgtSel = target.getAttribute('data-ajax-target');
                        if (tgtSel) document.querySelector(tgtSel)?.remove();
                        const callback = target.getAttribute('data-ajax-callback');
                        if (callback && typeof window[callback] === 'function') window[callback](response);
                        cuteToast('success', response.data.message || 'Action completed');
                    })
                    .catch(error => {
                        cuteToast('error', error.response?.data?.message || 'Action failed');
                    });
            } else if (target.tagName === 'FORM') {
                target.submit();
            } else if (url) {
                // dynamic form for non-AJAX link/button
                const form = document.createElement('form');
                form.action = url;
                form.method = method.toLowerCase() === 'get' ? 'GET' : 'POST';
                form.style.display = 'none';
                document.body.appendChild(form);
                form.innerHTML = '';
                // CSRF for non-GET
                if (method.toLowerCase() !== 'get') {
                    const token = document.querySelector('meta[name="csrf-token"]').content;
                    form.innerHTML += `<input name="_token" value="${token}" type="hidden">`;
                }
                // method override
                if (!['get', 'post'].includes(method.toLowerCase())) {
                    form.innerHTML += `<input name="_method" value="${method}" type="hidden">`;
                }
                form.submit();
            }
        }
    });
};

// Attach confirmAction to any element with data-confirm
window.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-confirm]').forEach(el => {
        console.log(el);
        const message = el.getAttribute('data-confirm');
        if (el.tagName === 'FORM') {
            el.addEventListener('submit', event => {
                event.preventDefault();
                confirmAction(el, message);
            });
        } else {
            el.addEventListener('click', event => {
                event.preventDefault();
                confirmAction(el, message);
            });
        }
    });
});

/*Usage:
<button
  type="button"
  class="btn btn-sm btn-danger"
  data-confirm="Really delete this user?"
  data-ajax
  data-method="DELETE"
  data-url="{{ route('admin.users.destroy', $user->id) }}"
  data-ajax-target="#user-row-{{ $user->id }}"
>
  Delete
</button>

<a
  href="#"
  class="btn btn-sm btn-info"
  data-confirm="Mark this order as shipped?"
  data-method="PUT"
  data-url="{{ route('orders.ship', $order->id) }}"
>
  Ship Order
</a>

<form
  action="{{ route('items.restore', $item->id) }}"
  method="POST"
  data-confirm="Restore this item?"
>
  @csrf
  <button class="btn btn-sm btn-warning">Restore</button>
</form>
*/
