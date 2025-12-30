<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PageController extends Controller
{
    public function home()
    {
        $featuredProperties = Property::where('is_active', true)
            ->where('is_featured', true)
            ->latest()
            ->take(8)
            ->get();
            
        return view('home', compact('featuredProperties'));
    }

    public function properties()
    {
        $properties = Property::where('is_active', true)
            ->latest()
            ->paginate(12);
        return view('properties', compact('properties'));
    }

    public function propertySingle($id)
    {
        $property = Property::where('is_active', true)->findOrFail($id);
        $relatedProperties = Property::where('is_active', true)
            ->where('id', '!=', $id)
            ->where('city', $property->city)
            ->take(3)
            ->get();
            
        return view('property-single', compact('property', 'relatedProperties'));
    }

    public function services()
    {
        return view('services');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

