<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    public function viewLatestAndRatingProducts(Request $request){
        $latest = Product::latest()->limit(2)->get();
        $latestClothes = Product::latest()->where('category_id', 1)->limit(8)->get();
        $latestMasks = Product::latest()->where('category_id',2)->limit(8)->get();
        $latestShoes = Product::latest()->where('category_id',5)->limit(8)->get();
        $latestSpices = Product::latest()->where('category_id',4)->limit(8)->get();
        $topRatingProduct = Product::orderBy('ratings','decs')->limit(2)->get();
        return view('shop.index',['latest'=>$latest, 'latestClothes'=>$latestClothes, 'latestMasks'=>$latestMasks, 'latestShoes'=>$latestShoes, 'latestSpices'=>$latestSpices,'topRatingProduct'=>$topRatingProduct]);
    }

    public function getTrendingProducts(Request $request){
        $allTopRating = Product::orderBy('ratings','desc')->limit(16)->get();
        $clothesTopRating = Product::where('category_id', 1)->orderBy('ratings','desc')->limit(16)->get();
        $masksTopRating = Product::where('category_id', 2)->orderBy('ratings','desc')->limit(16)->get();
        $soapTopRating = Product::where('category_id', 3)->orderBy('ratings','desc')->limit(16)->get();
        $spicesTopRating = Product::where('category_id', 4)->orderBy('ratings','desc')->limit(16)->get();
        $shoesTopRating = Product::where('category_id', 5)->orderBy('ratings','desc')->limit(16)->get();

        $allTopTrending = $this->trendingProducts($allTopRating);
        $clothesTopTrending = $this->trendingProducts($clothesTopRating);
        $masksTopTrending = $this->trendingProducts($masksTopRating);
        $soapTopTrending = $this->trendingProducts($soapTopRating);
        $spicesTopTrending = $this->trendingProducts($spicesTopRating);
        $shoesTopTrending = $this->trendingProducts($shoesTopRating);

        return view('shop.trending',['allTopTrending'=> $allTopTrending, 'clothesTopTrending' => $clothesTopTrending,
         'masksTopTrending'=>$masksTopTrending, 'soapTopTrending'=>$soapTopTrending, 'spicesTopTrending'=>$spicesTopTrending,
         'shoesTopTrending'=>$shoesTopTrending]);
    }


    public function trendingProducts($topRating){
        $marksForRating = array();
        $marksForLatest = array();
        $totalMarks = array();
        $rMarks = 15;
        for($x=0; $x<count($topRating); $x++){
            $diffDate = date_diff(date_create(date('Y-m-d')),$topRating[$x]['created_at'])->format("%a");
            if($x==0){
                $marksForProduct[$x] = 65;
                if($diffDate< 14){
                    $marksForLatest[$x] = ((15-$diffDate)/15)*35;
                }else{
                    $marksForLatest[$x] = 35/28; 
                }
            }else{
                $marksForProduct[$x]=$rMarks/17*65;
                $rMarks--;
                if($diffDate< 14){
                    $marksForLatest[$x] = ((15-$diffDate)/15)*35;
                }else{
                    $marksForLatest[$x] = 35/28; 
                }
            }
        }
        for($x=0; $x<count($topRating); $x++){
            $totalMarks[$topRating[$x]['id']] = array($marksForProduct[$x] + $marksForLatest[$x]);
        }
        arsort($totalMarks);
        $productId = array_keys($totalMarks);
        $y=0;
        $topTrendingProducts=array();
        while($y<count($productId)&& $y<6){
            $topTrendingProducts[$y]= Product::where('id',$productId[$y])->get();
            $y++;
        }
        return $topTrendingProducts;
    }
}
