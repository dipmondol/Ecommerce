<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function shopPage()
    {
        $items = Product::all();
        return view('dashboard', compact('items'));
    }
    public function addItemPage()
    {
        return view('addItem');
    }
    public function showItemPage($id)
    {
        $item = Product::find($id);
        $items = Product::all();
        return view('item', compact('item', 'items'));
    }
    public function cart()
    {
        if (session()->has('cart-item')) {
            $total = session()->get('cart-item');
            $totalprice = 0;
            foreach ($total as $item) {
                $totalprice += $item->price;
            }
            // dd($totalPrice);
            return view('cart', compact('total', 'totalprice'));
        }
        // session()->forget('cart-item');
        // session()->forget('cart-item-count');
        return redirect()->back();
    }

    public function storeItem(Request $request)
    {
        $item = new Product();
        $item->brand = $request->brand;
        $item->name = $request->model;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->color = $request->color;
        $item->description = $request->des;
        $item->image_1 = $this->handelImageSave($request, 'image_1');
        $item->image_2 = $this->handelImageSave($request, 'image_2');
        $item->image_3 = $this->handelImageSave($request, 'image_3');
        $item->image_4 = $this->handelImageSave($request, 'image_4');
        $item->save();
        if ($item) {
            return redirect()->back()->with('message-success', 'New Item add sucessfully');
        } else {
            return redirect()->back()->with('message-danger', 'Something wrong happend');
        }
    }

    public function handelImageSave($request, $fileName)
    {
        if ($request->hasFile($fileName)) {
            $upload = $request->file($fileName);
            $file_type = $upload->getClientOriginalExtension();
            $upload_name =  time() . $upload->getClientOriginalName();
            $destinationPath = public_path('image/');
            $upload->move($destinationPath, $upload_name);
            return  'image/' . $upload_name;
        }
    }
    public function removeCarItem($id)
    {
        if (session()->has('cart-item')) {
            $total = session()->get('cart-item');
            unset($total[$id]);
            session()->put('cart-item', $total);
            if (count($total) > 0) {
                session()->put('cart-item-count', count($total));
                return redirect('/cart');
            } else {
                session()->forget('cart-item');
                session()->forget('cart-item-count');
                return redirect('/');
            }
        }
    }

    public function countCartItem($id)
    {
        $item = Product::find($id);
        if (session()->has('cart-item')) {
            $total = array();
            $total = session()->get('cart-item');
            array_push($total, $item);
            session()->put('cart-item-count', count($total));
            session()->put('cart-item', $total);
        } else {
            $total = array();
            array_push($total, $item);
            session()->put('cart-item', $total);
            session()->put('cart-item-count', 1);
        }
        return redirect()->back();
    }
}
