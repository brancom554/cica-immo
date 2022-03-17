<?php

namespace App\Http\Controllers;
use App\Models\Annonce;
use Paydunya\Setup;
use Paydunya\Checkout\CheckoutInvoice;
use Paydunya\Checkout\Store;



class HomeController extends Controller
{
    public function show()
    {
        // $annonces = Annonce::join('annonces_pieces','annonces.annonce_id','=','annonces_pieces.anp_annonce_id')->get(); 
        $annonces = \DB::select('select a.*,ap.anp_fichier from annonces a inner join annonces_pieces ap on a.annonce_id = ap.anp_annonce_id group by a.annonce_id order by a.annonce_id desc limit 4',[]);
        return view('index', compact("annonces")); //return view with data
    }

    public function annonces()
    {
        $annonces = Annonce::join('annonces_pieces as ap','ap.anp_annonce_id','=','annonces.annonce_id')
                            ->select('annonces.annonce_id','annonces.annonce_titre','annonces.annonce_type','annonces.annonce_description','annonces.annonce_cout','annonces.annonce_contact','ap.anp_fichier')
                            ->groupBy('annonces.annonce_id')
                            ->orderBy('annonces.annonce_id','desc')
                            ->paginate(4);
        return view('annonces',compact('annonces'));
    }

    function viewDetails($id)
    {
        $annonces = \DB::select('select a.*,ap.anp_fichier from annonces a inner join annonces_pieces ap on a.annonce_id = ap.anp_annonce_id where a.annonce_id = ?  order by a.annonce_id desc limit 4',[$id]);
        // dd($annonces);
        return view('viewDetails',compact('annonces'));
    }

    function pay()
    {
        Setup::setMasterKey("qJPay3f1-fdsh-hEm0-Yzyr-lXZ6ibi87dew");
        Setup::setPublicKey("live_public_yg0yE8gLR0HmtP2BiwRx3mtkxWa");
        Setup::setPrivateKey("live_private_KkQSX0AbqNxtZJS6bgDxybhF2Ox");
        Setup::setMode("live");
        Setup::setToken("B9jCth7opbhLqMTKLteb");
        Store::setName("CICA Immobilier");
    
        $invoice = new CheckoutInvoice();
        $invoice->addItem("Maison à pucket", 1, 1000000, 1000000);
        $invoice->setTotalAmount(1000000);
        // $invoice->addChannel('wari');
        // $invoice->addChannel('card');
        $invoice->addChannels(['card','wave-senegal','mtn-ci','mtn-benin','moov-ml']);
        $invoice->setCallbackUrl("http://localhost/pay/confirm.php");

        if($invoice->create()) {
            return redirect()->away($invoice->getInvoiceUrl());
        }else{
            echo $invoice->response_text;
        }
    
    }

    function login()
    {
        return view('admin/login');
    }

    function checkLogin()
    {
        echo 'true||Connexion réussie';
        exit;
    }

}
