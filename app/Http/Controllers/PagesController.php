<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
    	return view ('index');
    }
    public function eror()
    {
    	return view ('404');
    }

    public function about_us()
    {
    	return view ('about_us');
    }

    public function blog_home()
    {
    	return view ('blog_home');
    }

    public function blog_single()
    {
    	return view ('blog_single');
    }

    public function change_password()
    {
    	return view ('change_password');
    }

    public function contact()
    {
    	return view ('contact');
    }

	public function favourite_products()
    {
    	return view ('favourite_products');
    }

    public function manage_products()
    {
    	return view ('manage_products');
    }

    public function privacy_policy()
    {
    	return view ('privcy_policy');
    }

    public function product_listing()
    {
    	return view ('product_listing');
    }

    public function product_listing_detail()
    {
    	return view ('product_listing_detail');
    }

    public function messages()
    {
    	return view ('product_message');
    }

    public function notifications()
    {
    	return view ('notifications');
    }

    public function search()
    {
    	return view ('search');
    }

    public function sell_product()
    {
    	return view ('sell_a_product');
    }

    public function services()
    {
    	return view ('services');
    }

    public function shopping_cart()
    {
    	return view ('shopping_cart');
    }

    public function sign_in()
    {
    	return view ('signin');
    }

    public function sign_up()
    {
    	return view ('signup');
    }

    public function terms_and_conditions()
    {
    	return view ('terms_and_conditions');
    }

    public function upload_products()
    {
    	return view ('upload_products');
    }

    public function user_profile()
    {
    	return view ('user_profile');
    }

    public function withdraw()
    {
    	return view ('withdraw');
    }



}
