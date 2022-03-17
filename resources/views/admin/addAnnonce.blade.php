@extends('admin.app')
@section('content')
    
    <div class="container-fluid p-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <ol class="breadcrumb bg-primary col-md-12">
                <li class="breadcrumb-item active text-light" aria-current="page">Tableau de bord</li>
                <li class="breadcrumb-item text-light"><a class="text-light " style="text-decoration:none;!important" href="#">Annonces / Ajouter une annonce</a></li>
            </ol>    
        </div>
        
            <div class="row">
                    <div class="card col-md-7 p-2" style="display:flex;margin:auto;width:98%;">
                        <img src="" alt="">
                            <div class="card-body">
                                <form action="/admin/addAnnonce" method="post" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="card-title">Formulaire</h5><hr>
                                    <div class="p-3">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nom">Libelle<span class="text-danger">&nbsp;*</span></label>
                                                <input id="nom" class="form-control" type="text" name="nom">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nom">Type d'annonce<span class="text-danger">&nbsp;*</span></label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="Location">Location</option>
                                                    <option value="Vente">Vente</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nom">Cout<span class="text-danger">&nbsp;*</span></label>
                                                <input id="cout" class="form-control" type="text" name="cout">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="nom">Contact<span class="text-danger">&nbsp;*</span></label>
                                                <input id="contact" class="form-control" type="text" name="contact">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="nom">Pièces<span class="text-danger">&nbsp;*</span></label>
                                                <input type="file" class="form-control-file" id="files" name="files[]" multiple>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="nom">Description<span class="text-danger">&nbsp;*</span></label>
                                                <textarea rows="10" cols="20" id="description" class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <button type="button" class="btn btn-primary" id="validate" >Ajouter</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
            </div>
        
    </div>
    <script>
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var key = 1;
        var pieces = [];

        $(document).ready(function () {
                
            $('#validate').click(function (e) { 
                e.preventDefault();
                submitDocumentAjax();
            });

        });
        function submitDocumentAjax()
        {
            if($('#nom').val() != '' && $('#type').val() != '' && $('#cout').val() != '' && $('#contact').val() != '' )
            {
                $('#myForm').submit();
            }else{
                toastr.error('Tous les champs sont requis');
            }
           
        }

        $('#plus').click(function () { 
            $('#pieces').append('<div class="row"><div class="form-group col-md-6"><label >Type d\'informations<span class="text-danger">&nbsp;*</span></label><select class="form-control" name="" id="type'+key+'"><option value="Fichier">Fichier</option><option value="Information">Information à renseigner</option></select></div><div class="form-group col-md-6"><label >Libelle de l\'information<span class="text-danger">&nbsp;*</span></label><input id="libelle'+key+'" class="form-control" type="text"></div></div>');
            key += 1;
        });

    </script>

@endsection