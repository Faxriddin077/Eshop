<?php

namespace App\Http\Controllers;

use App\Compare;
use AvoRed\Framework\Database\Contracts\ProductModelInterface;
use AvoRed\Framework\Database\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompareController extends Controller
{
    /**
     * @var ProductModelInterface
     */
    protected $productRepository;
    protected $compare;
    protected $product;

    public function __construct(
        ProductModelInterface $productRepository,
        Compare $compare,
        Product $product
    ) {
        $this->productRepository = $productRepository;
        $this->compare = $compare;
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function index()
    {
        // productPropertyVarcharValues productPropertyDecimalValues productPropertyTextValues attributes
        $properties = $this->product->get()[0]->attributes;//properties[0]->productPropertyIntegerValues;
        dd($properties);
        $products = $this->compare->get();
        return view('wishlist.compare', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $product = $this->productRepository->findBySlug($request->get('slug'));
        try{
            Compare::create([
                'product_id' => $product->id,
                'user_id' => Auth::guard('customer')->id(),
            ]);
        }catch (\Exception $e){
            Session::flash('type', 'error');
            Session::flash('message', 'Product is already exist in compare');
            return redirect()->back();
        }

        Session::flash('type', 'success');
        Session::flash('message', 'Product successfully added to compare');

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $product = $this->productRepository->findBySlug($request->get('slug'));
        $this->compare->where('product_id', $product->id)->delete();
        return redirect()->back();
    }
}
