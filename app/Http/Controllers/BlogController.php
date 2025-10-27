<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function healthcareIoT()
    {
        // Simple approach - no database page creation
        $comments = collect(); // Empty comments for now
        
        return view('blog.healthcare-iot', [
            'comments' => $comments
        ]);
    }

    public function energyInIoT()
    {
        // Use the same simple approach for consistency
        $comments = collect();
        
        return view('blog.energy-in-iot', [
            'comments' => $comments
        ]);
    }

    public function iotMining()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.iot-mining', [
        'comments' => $comments
    ]);
    }
    
    public function radarSystem()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.radar-system', [
        'comments' => $comments
    ]);
    }
    public function smartBulb()
    {
        $comments = collect(); // Empty comments
    
        return view('blog.smart-bulb', [
            'comments' => $comments
        ]);
    }
    public function smokeDetector()
    {
        $comments = collect(); // Empty comments
    
        return view('blog.smoke-detector', [
            'comments' => $comments
        ]);
    }
    public function bluetoothSpeaker()
    {
    $comments = collect(); // Empty comments
    
    return view('blog.bluetooth-speaker', [
        'comments' => $comments
    ]);
    }
    public function youthUnemployment()
    {
    $comments = collect(); // Empty comments

    return view('blog.youth-unemployment', [
        'comments' => $comments
    ]);
    }
}