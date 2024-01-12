<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\manufacturers;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = products::all();
        $manufacturers= manufacturers::all();
        // return view('CPanel/editCooker', compact("cookers","manufacturers", $cookers ,$manufacturers,));
        if ($request->is('cookers*')) {
         return view('products/products', compact("product","manufacturers", $product ,$manufacturers,));
    } elseif ($request->is('fridge*')) {
        return view('products/products',compact("product","manufacturers" , $product ,$manufacturers));
        } 
        elseif ($request->is('editcookers*')) {
            return view('CPanel/editProducts',compact("product","manufacturers" , $product ,$manufacturers));
            } 
        elseif ($request->is('editfridge*')) {
            return view('CPanel/editProducts',compact("product","manufacturers" , $product ,$manufacturers));
            } 
            elseif ($request->is('addItem*')) {
                return view('CPanel/addItem',compact("product","manufacturers" , $product ,$manufacturers));
            } 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CPanel/addItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
$request->validate([
'inputFile'=>'required|max:1000'
]);
        // file code (img)
       
            $newitem = new products();
            $file_data = $request->file('inputFile');
            $file_name = $file_data->getClientOriginalName();
            $file_data-> move(public_path() . '/upload/' ,$file_name);
            $newitem->Image = $file_name ;
            $newitem->Name = $request->ItemName;
            $newitem->Price = $request->ItemPrice;
            $newitem->CategoryID = $request->ItemCategory;
            $newitem->ManufacturerID = $request->Itemmanu;
            $newitem->Description = $request->ItemDescription;
            $newitem->save();
        return redirect('category')->with("done","done Insertion");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ProductID)
    {
        $product = Products::findOrFail($ProductID);
        return view('products/productDetails', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item= products::find($id);
        return view("CPanel/editItem") ->with("products",$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $olditem= products::find($id);
if($olditem){
    $newitem= new products();
    $newitem->Name = $request->ItemName;
    $newitem->Price = $request->ItemPrice;
    $newitem->CategoryID = $request->ItemCategory;
    $newitem->ManufacturerID = $request->Itemmanu;
    $newitem->Description = $request->ItemDescription;
    
   
}
$newitem->save();   
$olditem->delete();
return redirect('category')->with("done","done Insertion");
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=products::find($id);
        $item->delete();
        return redirect('category')->with("done","done Delete");
    }

    // search functionality
    public function product_search(Request $request)
{
    $search_text = $request->search;
    $manufacturers= manufacturers::all();
    $product = products::where('Name', 'LIKE',"%$search_text%")->orWhere('description', 'LIKE',"%$search_text%")->get();

    return view('products.search', compact('product','manufacturers',$product, $manufacturers));
}



// cart functionality
public function showCart()
{
    $cart = session()->get('cart', []);
    $totalAmount = 0;

    foreach ($cart as $id => $details) {
        $totalAmount += $details['price'];
    }

    return view('cart', ['cart' => $cart, 'totalAmount' => $totalAmount]);
}

public function addToCart($id){

    $product= products::find($id); 
    $cart = session()->get('cart',[]);
    $cart[$id] = [
        'name'=>$product->Name,
        'price'=>$product->Price,
        'Image'=>$product->Image,
    ] ;
    session()->put('cart',$cart);
    // session()->put('clearCartOnLoad');
    

        return redirect()->back()->with('success','product added successfully');
}

public function clearCart() {
   
    // Clear the 'cart' session
    session()->forget('cart');

        // Redirect back to the previous page
        return redirect()->back();
}

public function removeItemFromCart(Request $request)
{
    try {
        $itemId = $request->input('id');

        // Remove the item from the session
        $cart = session()->get('cart', []);
        unset($cart[$itemId]);
        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }
}

public function submitOrder(Request $request)
{

    dd(session('formData'), session('cartData'));

    // Your form submission logic here
    $formData = session()->get('formData', [
        'firstName' => $request->input('fname'),
        'lastName' => $request->input('lastname'),
    ]);
    // Collect form data
    
    // Get cart data from the session
    $cartData = session('cart');
    session()->put('formData',$formData);
    // Redirect to another blade file with both form and cart data
    return redirect()->route('confirmation')->with(['formData' => $formData, 'cartData' => $cartData]);
 
}

}

