<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $contacts = Contact::all();
        view()->share('contacts', $contacts); 
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.contact_list', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contact.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email'
        ]);

        $contact = Contact::create([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact created successfully!');
    }

    public function edit(Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email'
        ]);

        $contact->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email   
        ]);

        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact updated successfully!');
    }

    public function destroy(Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        $contact->delete();
        return redirect()->route('admin.contact.index')
            ->with('success', 'Contact deleted successfully!');
    }
}