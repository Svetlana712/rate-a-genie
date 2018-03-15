Dropzone.autoDiscover = false;

$(document).ready(function () {
    var myDropzone = new Dropzone('#upload-file', {
        url: '/files/upload',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        maxFilesize: 25,
        maxFiles: 4,
        parallelUploads: 4,
        uploadMultiple: false,
        autoProcessQueue: true,
        addRemoveLinks: true,
        success: function (file, response) {

            file.serverName = response.content.image;
            $('#image').clone().removeAttr('id').attr('value', response.content.image).appendTo('.dropzone');

        },
        removedfile: function (file, data) {

            $.ajax({
                type: 'POST',
                url: '/files/delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {"file_name": file.serverName},
                success: function (data) {
                    console.log(data);
                }
            });

            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        }
    });
    $('#btnUpload').on('click', function (e) {
        e.preventDefault();
        myDropzone.processQueue();
    });});