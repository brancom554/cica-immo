<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS Portal With Twilio</title>
        <!-- Bootstrap styles CDN -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container btn-sm" style="margin-top:50px;font-family: 'Century Gothic';">
            <h3>Système d'envoi de SMS</h3>
            <div class="jumbotron">
                @include('flash_message')
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Ajouter un numéro de télephone
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Entrer le numéro</label>
                                        <input type="tel" class="form-control" name="phone_number" placeholder="+22990909090">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </form>
                            </div>
                            <div class="btn-sm">
                                <div class="card-header"><i class="fas fa-table mr-1"></i>Liste des contacts</div>
                                <table id="dataTable" width=100% class="table-primary table-bordered">
                                    <thead>
                                        <th align="center">#</th>
                                        <th align="center">Numero</th>
                                        <th align="center">Actions</th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $value)
                                        <tr>
                                            <td align="center">{{ $key }}</td>
                                            <td align="center">{{ $value->phone_number }}</td>
                                            <td align="center">
                                                <a href="/delete/{{ $value->id }}" onclick="return confirm('Voulez vous supprimez ce contact ?');" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                     <tfoot>
                                        <th align="center">#</th>
                                        <th align="center">Numero</th>
                                        <th align="center">Actions</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Envoyer un message
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/custom">
                                    @csrf
                                    <div class="form-group">
                                        <label>Selectionner les utilisateurs </label>
                                        <select name="users[]" multiple class="form-control">
                                            @foreach ($users as $user)
                                            <option>{{$user->phone_number}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="body" class="form-control" rows="6"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Envoyer le message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <footer align="center">
            Copyright SoftDevs 2021
        </footer>
        </div>
        <script src="{{asset('jquery-3.5.1.slim.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                        $('#dataTable').dataTable();
            });
        </script>
    </body>
</html>
