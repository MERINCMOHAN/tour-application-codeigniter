<!DOCTYPE html>

<html>

<head>

<title>Codeigniter - Multiple Image upload using dropzone.js</title>

<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>

<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

</head>

<body>


<div class="container">

<div class="row">

<div class="col-md-12">

<h2>Codeigniter - Multiple Image upload using dropzone.js</h2>

<form action="<?= base_url() ?>index.php/admin/do_upload/" enctype="multipart/form-data" class="dropzone" id="image-upload" method="POST">

<div>

<h3>Upload Multiple Image By Click On Box</h3>

</div>

</form>
<input type="button" id="btnadd"  class="btn btn-default" value="submit" />
</div>

</div>

</div>


<script type="text/javascript">

Dropzone.options.imageUpload = {

        maxFilesize:1,
        autoProcessQueue: false,
        uploadMultiple: true,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        
        init: function () {
            alert('init');
            var myDropzone = this;
            $("#btnadd").click(function (e) {
                // alert('button click');
                e.preventDefault();
                myDropzone.processQueue();
            });
             this.on("successmultiple", function (files, response) {
//                        // Gets triggered when the files have successfully been sent.
//                        // Redirect user or notify of success.
                console.log("Sucess Multiple :");
                        console.log(JSON.stringify(response));
                        console.log('Response'+JSON.stringify(response));
//                        $.each(JSON.parse(response), function (key, val) {
//                              console.log(key);
//                            
//                                
//                                var fileres = JSON.parse(response);
//                                console.log(response);
//                                
//                                console.log('Response :' + response);
//                                
//                               
//                                $.each(fileres, function (key, val) {
//                                    console.log('Keys :' + key + 'Values : ' + val.file_name);
//
//                                });
//                            
//                        });
                console.log('File :' + JSON.stringify(files));
                
                // return response;
            });
        }
       

    };

</script>


</body>