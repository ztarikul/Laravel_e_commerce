<x-home-master>
@section('content')

<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
 
<!-- markup -->
<!-- note: your server code `/site/avatar_upload/1` will receive `$_FILES['avatar-1']` on form submission -->
<!-- the avatar markup -->
<form class="form form-vertical" action="/site/avatar-upload/1" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-4 text-center">
            <div class="kv-avatar">
                <div class="file-loading">
                    <input id="avatar-1" name="avatar-1" type="file" required>
                </div>
            </div>
            <div class="kv-avatar-hint">
                <small>Select file < 1500 KB</small>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email Address<span class="kv-reqd">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="pwd">Password<span class="kv-reqd">*</span></label>
                        <input type="password" class="form-control" name="pwd" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" name="fname" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <hr>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<div id="kv-avatar-errors-1" class="text-center" style="display:none"></div>
 
<!-- the fileinput plugin initialization -->
<script>
var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
    'onclick="alert(\'Call your custom code here.\')">' +
    '<i class="bi-tag"></i>' +
    '</button>'; 
$("#avatar-1").fileinput({
    overwriteInitial: true,
    maxFiledescription: "This is a representative placeholder description for this image.", size: 1500,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    browseIcon: '<i class="bi-folder2-open"></i>',
    removeIcon: '<i class="bi-x-lg"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="/samples/default-avatar-male.png" alt="Your Avatar">',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>

@endsection
</x-home-master>