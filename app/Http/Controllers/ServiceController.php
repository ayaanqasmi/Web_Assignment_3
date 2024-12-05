<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'summary' => 'required|string',
            'icon' => 'required|string',
            'description' => 'required|string|max:1000',
        ]);

        

        // Create the service record
        $service = Service::create([
            'summary' => $request->url,
            'icon' => $request->icon, // Store the path of the uploaded icon
            'description' => $request->description,
        ]);

        return response()->json(['message' => 'Service added successfully!', 'service' => $service], 201);
    }

    // Show a single service
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return response()->json($service);
    }

    // Display a list of all services
    public function index()
    {
        $services = Service::all();
        return response()->json($services);
    }

    // Update an existing service
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'summary' => 'required|url',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
        ]);

      

        // Update other service details
        $service->url = $request->url;
        $service->description = $request->description;
        $service->icon=$request->icon;
        $service->save();

        return response()->json(['message' => 'Service updated successfully!', 'service' => $service]);
    }

    // Delete a service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response()->json(['message' => 'Service deleted successfully!']);
    }
}
