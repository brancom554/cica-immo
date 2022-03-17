<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\AnnoncePiece;

class AdminController extends Controller
{
    //
    function index()
    {
        return view('admin.index');
    }

    function manage()
    {
        $annonces = Annonce::all();
        return view('admin.manageAnnonce',compact('annonces'));
    }

    function addAnnonce()
    {
        return view('admin.addAnnonce');
    }

    function storeAnnonce()
    {   
        Annonce::create([
            'annonce_titre'=>request('nom'),
            'annonce_description'=>request('description'),
            'annonce_type'=>request('type'),
            'annonce_cout'=>request('cout'),
            'annonce_contact'=>request('contact'),
            'annonce_created_at' => date('Y-m-d H:i:s')
        ]);

        $id = Annonce::orderBy('annonce_id','desc')->first();

        foreach (request()->file('files') as $key => $value) 
        {
            $path = $value->store('fichiers', 'public');
            $file = explode('/',$path)[sizeof(explode('/',$path))-1];
            AnnoncePiece::create([
                'anp_annonce_id' => $id->annonce_id,
                'anp_fichier' => $file,
                'anp_created_at' => date('Y-m-d H:i:s')
            ]);
        }
        $annonces = Annonce::all();
        return view('admin.manageAnnonce',compact('annonces'));
    }

    function viewAnnonce($id)
    {
        $pieces = AnnoncePiece::where('anp_annonce_id',$id)->get();
        $annonce = Annonce::where('annonce_id',$id)->first();
        return view('admin.viewAnnonce',compact('pieces','annonce'));
    }

}
