<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function addOffer(Request $request)
    {
        $userId = auth()->user()->getAuthIdentifier();
        $offer_message = $request->message;
        $offer_subject = $request->subject;
        $offer_contact = $request->contact;
        if(($offer_message != null) and ($offer_contact != null) and ($offer_subject != null)) {
            $offers = new Offer();
            $offers->user_id = $userId;
            $offers->subject = $offer_subject;
            $offers->message = $offer_message;
            $offers->contact = $offer_contact;
            $offers->save();
            return redirect()->intended('/partnership');
        }
        return redirect()->intended('/addOffer');

    }


}
