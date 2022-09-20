<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Store a contact inquiry
     *
     * @param \App\Models\Contact
     * @return \Illuminate\Http\Response
     * @author Brian M. Nganga <dev@synchroconsult.co.ke>
     */
    public function store(Request $request)
    {
        // create and store contact inquiry
        Contact::create( $request->all());

        // Create a seesion
        Session::flash('message', "Please expect an email from us. Thank you");

        //redirect back to contact section
        Redirect::to('https://software.synchroconsult.co.ke/#contact');
    }
}
