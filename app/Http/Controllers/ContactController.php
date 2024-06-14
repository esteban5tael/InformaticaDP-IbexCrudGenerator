<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $contacts = Contact::query()
            ->oldest()
            ->paginate(20);

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $contact = new Contact();

        return view('admin.contacts.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return Redirect::route('admin.contacts.index')
            ->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $contact = Contact::find($id);

        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $contact = Contact::find($id);

        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact): RedirectResponse
    {
        $contact->update($request->validated());

        return Redirect::route('admin.contacts.index')
            ->with('success', 'Contact updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Contact::find($id)->delete();

        return Redirect::route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
