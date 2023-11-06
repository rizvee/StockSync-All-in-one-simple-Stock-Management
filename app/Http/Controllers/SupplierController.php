<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Display a list of all suppliers
    public function index()
    {
        // Your code to fetch and display all suppliers
    }

    // Show the form for creating a new supplier
    public function create()
    {
        // Your code for displaying the supplier creation form
    }

    // Store a newly created supplier in the database
    public function store(Request $request)
    {
        // Your code for validating and storing a new supplier
    }

    // Display the specified supplier
    public function show($id)
    {
        // Your code to show a specific supplier
    }

    // Show the form for editing an existing supplier
    public function edit($id)
    {
        // Your code for displaying the supplier edit form
    }

    // Update the specified supplier in the database
    public function update(Request $request, $id)
    {
        // Your code for validating and updating a supplier
    }

    // Remove the specified supplier from the database
    public function destroy($id)
    {
        // Your code to delete a supplier
    }
}
