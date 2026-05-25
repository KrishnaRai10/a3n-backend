<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactDetailRequest;
use App\Http\Requests\UpdateContactDetailRequest;
use App\Mail\ContactForm;
use App\Mail\ContactFormMessageReceived;
use App\Models\ContactDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactDetailController extends Controller
{
    // GET /contact-details
    public function index()
    {
        $contacts = ContactDetail::with('service')->get();
        return response()->json([
            'success' => true,
            'data'    => $contacts,
        ], 200);
    }

    // GET /contact-details/{id}
    public function show($id)
    {
        $contact = ContactDetail::with('service')->find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data'    => $contact,
        ], 200);
    }

    // POST /contact-details
    public function store(StoreContactDetailRequest $request)
    {

        $contact = ContactDetail::create($request->validated());
        $contact->load('service');
        Mail::to(config('app.admin_email'))
        ->queue(new ContactForm($contact));
        Mail::to($contact->email)
        ->queue(new ContactFormMessageReceived($contact));
        return response()->json([
            'success' => true,
            'message' => 'Contact created successfully',
            'data'    => $contact,
        ], 201);
    }

    // PUT /contact-details/{id}
    public function update(UpdateContactDetailRequest $request, $id)
    {
        $contact = ContactDetail::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found',
            ], 404);
        }

        $contact->update($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Contact updated successfully',
            'data'    => $contact,
        ], 200);
    }

    // DELETE /contact-details/{id}
    public function destroy($id)
    {
        $contact = ContactDetail::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact not found',
            ], 404);
        }

        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact deleted successfully',
        ], 200);
    }
}