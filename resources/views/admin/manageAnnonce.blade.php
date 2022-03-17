@extends('admin.app')
@section('content')

<div class="container-fluid p-3">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <ol class="breadcrumb bg-primary col-md-12">
            <li class="breadcrumb-item active text-light" aria-current="page">Tableau de bord</li>
            <li class="breadcrumb-item text-light"><a class="text-light " style="text-decoration:none;!important" href="/customer/manage-users">Annonces / Gérer</a></li>
        </ol>    
    </div>
    
    <div class="row">
        <div class="card" style="display:flex;margin:auto;width:98%;">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Liste des annonces</h5><hr>
                <table class="table table-responsive-lg responsive-table" width="100%" id="liste" style="font-size:80%;">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Type d'annonce</th>
                            <th>Coût</th>
                            <th>Créer le</th>
                            <th align="center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($annonces as $key => $value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $value->annonce_titre }}</td>
                                <td>{{ $value->annonce_description }}</td>
                                <td>{{ $value->annonce_type }}</td>
                                <td>{{ $value->annonce_cout }} XOF</td>
                                <td>{{ $value->annonce_created_at }}</td>
                                <td align="center">
                                    <a href="/admin/viewAnnonce/{{ $value->annonce_id }}"  class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="/admin/deleteAnnonce/{{ $value->annonce_id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                                                                 
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </div>
@endsection