<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store contact message.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        return response()->json(['message' => 'Your message has been sent. Thank you!']);
    }

    /**
     * Display a listing of contacts for admin.
     */
    public function index(Request $request)
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(25);

        return view('backend.contacts.index', compact('contacts'));
    }

    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('contacts.index')->with('error', 'Error deleting contact: ' . $e->getMessage());
        }
    }

    public function bulkDelete(Request $request)
    {
        try {
            $ids = $request->input('ids', []);
            
            if (empty($ids)) {
                return response()->json(['success' => false, 'message' => 'No contacts selected.']);
            }

            Contact::whereIn('id', $ids)->delete();

            return response()->json(['success' => true, 'message' => 'Selected contacts deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting contacts: ' . $e->getMessage()]);
        }
    }
}
