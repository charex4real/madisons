<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeneralSetting;
use App\Feature;
use App\ProductQuality;
use App\Achievement;
use App\App;
use App\Team;
use App\Category;
use App\Product;
use App\UserReview;
use App\Question;
use App\Footer;
use App\PricingPlan;
use App\PricingPlanDetail;
use App\Subscriber;
use App\UserMessage;

class WelcomeController extends Controller
{
    public function index(){
        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
         $cartegory_and_products = Category::with('Products')->get();

        return view('frontend.home',[
            'data' => $data,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'products' => $products,
            'categories' => $categories,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
            'cartegory_and_products' =>$cartegory_and_products,
        ]);
    }
    public function about(){
        $data = GeneralSetting::first();
        $title = "About Us";
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
         $cartegory_and_products = Category::with('Products')->get();

        return view('frontend.about',[
            'data' => $data,
            'titles' => $title,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'products' => $products,
            'categories' => $categories,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
            'cartegory_and_products' =>$cartegory_and_products,
        ]);
    }
    public function services(){
         $title = "Our Services";
        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
         $cartegory_and_products = Category::with('Products')->get();

        return view('frontend.services',[
            'data' => $data,
            'titles' => $title,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'products' => $products,
            'categories' => $categories,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
            'cartegory_and_products' =>$cartegory_and_products,
        ]);
    }
    public function project(){
         $title = "our Project";
        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
         $cartegory_and_products = Category::with('Products')->get();

        return view('frontend.project',[
            'data' => $data,
            'titles' => $title,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'products' => $products,
            'categories' => $categories,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
            'cartegory_and_products' =>$cartegory_and_products,
        ]);
    }


     public function contact(){
         $title = "Contact Us";

        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
        return view('frontend.contact',[
            'data' => $data,
            'titles' => $title,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'categories' =>$categories,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
        ]);
    }   

    public function products(){
         $title = "Products";
        $data = GeneralSetting::first();
        $productQuality = ProductQuality::all();
        $achievements = Achievement::all();
        $apps = App::orderBy('id','desc')->get();
        $teamMembers = Team::orderBy('id','desc')->get();
        $categories = Category::orderBy('id','desc')->get();
        $products = Product::orderBy('id','desc')->get();
        $qestions = Question::orderBy('id','desc')->get();
        $userReview = UserReview::orderBy('id','desc')->get();
        $pricingPlan = PricingPlan::orderBy('id','asc')->get();
        $pricingPlanDetail = PricingPlanDetail::orderBy('id','asc')->get();
        $footer = Footer::orderBy('id','desc')->get();
        $latestFeature = Feature::orderBy('id','desc')->take(3)->get();
        $oldFeature = Feature::orderBy('id','asc')->take(3)->get();
         $cartegory_and_products = Category::with('Products')->get();

        return view('frontend.products',[
            'data' => $data,
            'titles' => $title,
            'latestFeature' => $latestFeature,
            'oldFeature' => $oldFeature,
            'productQuality' => $productQuality,
            'achievements' => $achievements,
            'products' => $products,
            'categories' => $categories,
            'apps' => $apps,
            'teamMembers' => $teamMembers,
            'userReview' => $userReview,
            'qestions' => $qestions,
            'footer' =>$footer,
            'pricingPlan' =>$pricingPlan,
            'pricingPlanDetail' =>$pricingPlanDetail,
            'cartegory_and_products' =>$cartegory_and_products,
        ]);
    }

    public function product($id){
           $title = "Product";
        $product = Product::find($id);
         $data = GeneralSetting::first();
        $footer = Footer::orderBy('id','desc')->get();
         $categories = Category::orderBy('id','desc')->get();
        return view('frontend.product',[
            'data' => $data,
            'titles' => $title,
            'product' => $product,
            'footer' =>$footer,
             'categories' =>$categories,
        ]);
    }


    public function subscribe(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:subscribers',
        ]
        );
        $subscriber = new Subscriber();
        $subscriber->email  = $request->email;
        $subscriber->save();
        return back();
    }
    public function sendMessage(Request $request){
        $this->validate($request,[
            'name' => 'required|max:30',
            'email' => 'required|email',
            'message' => 'required|max:300',
        ]);
        $userMessage = new UserMessage();
        $userMessage->name = $request->name;
        $userMessage->email = $request->email;
        $userMessage->message = $request->message;
        $userMessage->save();
        return back();
    }
}
