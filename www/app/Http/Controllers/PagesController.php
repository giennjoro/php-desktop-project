<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Metatag;
use App\Subscriber;
use App\User;
use App\Slider;
use App\Client;

class PagesController extends Controller
{

    public function index(){
        $metatags = Metatag::where('page', 'home')->get();
        $partners = Partner::all();
        $slider_items = Slider::all();
        
        return view('pages.index')->with('partners',$partners)
                                  ->with('metatags', $metatags)
                                  ->with('slider_items', $slider_items);
    }
    public function about(){
        $partners = Partner::all();
        $metatags = Metatag::where('page', 'about')->get();
        return view('pages.about')->with('metatags', $metatags)
                                ->with('partners',$partners);
    }
    public function reviews(){
        $metatags = Metatag::where('page', 'reviews')->get();
        return view('pages.reviews')->with('metatags', $metatags);
    }
    public function port(){
        $projects = Client::all();
        $metatags = Metatag::where('page', 'portfolio')->get();
        return view('pages.port')->with('metatags', $metatags)
                                    ->with('projects', $projects);
    }
    public function contact(){
        $metatags = Metatag::where('page', 'contact')->get();
        return view('pages.contact')->with('metatags', $metatags);
    }
    public function services(){
        $metatags = Metatag::where('page', 'services')->get();
        $partners = Partner::all();
        return view('pages.services')->with('metatags', $metatags)
                                        ->with('partners',$partners);
    }
    public function web_design(){
        $metatags = Metatag::where('page', 'web_design')->get();
        $partners = Partner::all();
        return view('pages.web-design')->with('metatags', $metatags)
                                        ->with('partners',$partners);
    }
    public function digital_marketing(){
        $metatags = Metatag::where('page', 'digital_marketing')->get();
        return view('pages.digital-marketing')->with('metatags', $metatags);
    }
    public function graphics_design(){
        $metatags = Metatag::where('page', 'graphics_design')->get();
        return view('pages.graphics-design')->with('metatags', $metatags);
    }

    //subscribing
    public function subscriber_store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        //create subscriber
        $subs_count = Subscriber::where('email', $request->email)->count();
        if ($subs_count > 0){
            return redirect()->back()->with('error', 'You had already a subscribed');
        }
        $subscriber= new Subscriber;
        $subscriber->email = $request->input('email');


        
       
        $subscriber->save();

        return redirect()->back()->with('success','You have Successfully Subscribed');

    }

}