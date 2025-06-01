import axios from 'axios';
import { cuteAlert, cuteToast } from 'cute-alert';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// cute-alert to window
window.cuteAlert = cuteAlert;
window.cuteToast = cuteToast;
window.toastr = (type, message) => {
    cuteToast({
        type: type,
        title: message,
        timer: 3000,
        position: 'top-right',
        icon: type === 'success' ? 'check' : 'error',
    });
}

import './echo';
import './confirmAction';
