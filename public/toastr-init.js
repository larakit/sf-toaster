function larakit_toastr(data) {
    var type = data.result, message = data.message;
    if (!type || !message) return false;
    switch (type) {
        case 'error':
        case 'danger':
            toastr.error(message,data.title, data.toastrOptions);
            break;
        case 'warning':
            toastr.warning(message,data.title, data.toastrOptions);
            break;
        case 'info':
            toastr.info(message,data.title, data.toastrOptions);
            break;
        case 'success':
            toastr.success(message,data.title, data.toastrOptions);
            break;
    }
}
