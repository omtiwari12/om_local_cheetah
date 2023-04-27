<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Request_Web;
use App\Models\Request_App;
use App\Models\Request_Graphics;
use App\Models\Request_Digital;
use App\Models\User_Request;
use DataTables;



class Cheetah_Dashboard extends Controller
{
 


   public function Roles()
   {
       if(Auth::id())
       {
         if(Auth::user()->role=='0')
          {
          return view('User_Dashboard');
       }
          else
          {
        return view('Admin_Dashboard');
          }
       }
       else
       {
          return redirect()->back();
       }

  // return view('admin.home');
   }




   public function check()
   {


//   $user_requests= User_Request::where('id',' =',$req->input('id'))->get(); 
//   return view('User_Dashboard',compact('user_requests'));

      $users = User::all();
      return view('Completed_Request')->with('users',$users);

   }

// public function index()
// {
//    $user = Auth::user();
//    $user_request = User_Request::all;
//    return view('User_Dashboar1',compact('user', 'user_requests'));
// }


   // public function index()
   // {
   //    // return dd('ok');
   //     $data = DB::table('users')->count();
   //    // // $count = User_Request::count()->get();
   //    return  view('User_Dashboard', compact('data'));
    
   // }


   // public function login()
   // {
      
   //    return redirect()->route('/login');
   // }


   // public function index()
   // {
   //     return view('auth.login');
   // }

   public function login(Request $request)
   {
     dd($request->all());
   }


   public function register_view()
   {
       return view('auth.register');
   }
   
   public function index8()
   {
      $user_request = User_Request::count();
      return  view('User_Dashboard', compact('id'));
   }

   
   // -----Request page methods------


   public function All_Request()
   {
      return view('User_Dash.View_All_Request');
   }

    public function Request_Page()
    {
       return view('User_Dash.Request_Page');
    }

     public function Request_Graphics()
     {
        return view('User_Dash.Request_Graphics');
     }

    public function Req_Graphics(Request $request)
    {
     
      $data=new Request_Graphics;
      $data->Request_Name=$request->Request_Name;
      $data->Design_Information=$request->Design_Information;
      $data->Purpose=$request->Purpose;
      $data->Sizes=$request->Sizes;
      $data->Target_Platform=$request->Target_Platform;
      $data->Other_Info=$request->Other_Info;
      $data->Date=$request->Date;
      $data->Color_Type=$request->Color_Type;
      $data->Priority=$request->Priority;
      $data->description=$request->description;
      $data->file=$request->file;

      if(Auth::id())
      {
       $data->user_id=Auth::user()->id;
      } 

       
      $data->save();
      
      return redirect()->back()->with('message','Request submitted successfully !!');

    }

    public function Request_Web()
    {
       return view('User_Dash.Request_web');
    }

   public function Req_Web(Request $request)
   {
    
     $data=new Request_Web;
     $data->Request_Name=$request->Request_Name;
     $data->Creative_Type=$request->Creative_Type;
     $data->Design_Type=$request->Design_Type;
     $data->Date=$request->Date;
     $data->Domain_Name=$request->Domain_Name;
     $data->Hosting_Services=$request->Hosting_Services;
     $data->Brand_Logo=$request->Brand_Logo;
     $data->Content=$request->Content;
     $data->Priority=$request->Priority;
     $data->description=$request->description;
     $data->file=$request->file;


     if(Auth::id())
     {
      $data->user_id=Auth::user()->id;
     }

     $data->save();
     
     return redirect()->back()->with('message','Request submitted successfully !!');

   }



   public function Request_App()
    {
       return view('User_Dash.Request_App');
    }

   public function Req_App(Request $request)
   {
    
     $data=new Request_App;
     $data->Request_Name=$request->Request_Name;
     $data->Creative_Type=$request->Creative_Type;
     $data->Database_Type=$request->Database_Type;
     $data->color_theme=$request->color_theme;
     $data->Target_Audience=$request->Target_Audience;
     $data->Date=$request->Date;
     $data->Protection=$request->Protection;
     $data->Services=$request->Services;
     $data->Priority=$request->Priority;
     $data->description=$request->description;
     $data->file=$request->file;
    //  $data->Date=$request->Date;
    //  $data->Date=$request->Date;
    //  $data->Date=$request->Date;
    //  $data->Date=$request->Date;


    if(Auth::id())
    {
     $data->user_id=Auth::user()->id;
    } 

     $data->save();
     
     return redirect()->back()->with('message','Request submitted successfully !!');

   }



   public function Request_Digital()
    {
       return view('User_Dash.Request_Digital');
    }

   public function Req_Digital(Request $request)
   {
    
     $data=new Request_Digital;
     $data->Request_Name=$request->Request_Name;
     $data->Marketing_Type=$request->Marketing_Type;
     $data->Creative_Type=$request->Creative_Type;
     $data->Date=$request->Date;
     $data->Company_Goals=$request->Company_Goals;
     $data->Add_Platforms=$request->Add_Platforms;
     $data->Target_Audience=$request->Target_Audience;
     $data->Competitors=$request->Competitors;
     $data->Age_Group=$request->Age_Group;
     $data->description=$request->description;
     $data->file=$request->file;
    //  $data->Priority=$request->Priority;


    if(Auth::id())
    {
     $data->user_id=Auth::user()->id;
    } 

     $data->save();
     
     return redirect()->back()->with('message','Request submitted successfully !!');

   }





  //  public function index(Request $request)
  //  {
  //      if ($request->ajax()) {
  //          $data = User::select('id','name','email')->get();
  //          return Datatables::of($data)->addIndexColumn()
  //              ->addColumn('action', function($row){
  //                  $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
  //                  return $btn;
  //              })
  //              ->rawColumns(['action'])
  //              ->make(true);
  //      }

  //      return view('User_Dashboard');
  //  }


//   public function table1(Request $request)
//   {
//       if ($request->ajax()) {
//           $data1 = User::select('*');
//           return Datatables::of($data1)
//                   ->addIndexColumn()
//                   ->addColumn('action', function($row){
     
//                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
//                           return $btn;
//                   })
//                   ->rawColumns(['action'])
//                   ->make(true);
//       }
        
//       return view('Open_Request');
//   }


  public function index1(Request $request)
  {
     
   
  
   
   
   if($request->ajax()) {
         $data = Request_Graphics::select('id','Request_Name','Design_Information','Priority','Status','Date')->get();           
         //  $data = User::select('*');  
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function($row){
   
                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
  
                          return $btn;
                  })
                  ->rawColumns(['action'])
                  ->make(true);
      }
      
      return view('Index_DataTable1');
  }

  

  public function index2(Request $request)
  {
      if ($request->ajax()) {
         $data = Request_Digital::select('id','Request_Name','Marketing_Type','Creative_Type','Date','Status','Company_Goals','Age_Group')->get();     
         //  $data = User::select('*');  
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function($row){
   
                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
  
                          return $btn;
                  })
                  ->rawColumns(['action'])
                  ->make(true);
      }
      
      return view('Index_DataTable2');
  }

 
  public function index3(Request $request)
  {
      if ($request->ajax()) {
         $data = Request_Web::select('id','Request_Name','Creative_Type','Design_Type','Date','Status','Domain_Name','Priority')->get();     
         //  $data = User::select('*');  
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function($row){
   
                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
  
                          return $btn;
                  })
                  ->rawColumns(['action'])
                  ->make(true);
      }
      
      return view('Index_DataTable3');
  }

  public function index4(Request $request)
  {
      if ($request->ajax()) {
         $data = Request_App::select('id','Request_Name','Creative_Type','Database_Type','Priority','Status','Color_theme','Date')->get();
         //  $data = User::select('*');  
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('action', function($row){
   
                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
  
                          return $btn;
                  })
                  ->rawColumns(['action'])
                  ->make(true);
      }
      
      return view('Index_DataTable4');
  }



   //  public function index5(Request $request)
   //  {
   //      if ($request->ajax()) {
   //          $data2 = User_Request::select('*');
   //          return Datatables::of($data2)->addIndexColumn()
   //              ->addColumn('action', function($row){
   //                  $btn = '<a href="javascript:void(0)" class="view btn btn-primary btn-sm">View</a>';
   //                  return $btn;
   //              })
   //              ->rawColumns(['action'])
   //              ->make(true);
   //      }

   //      return view('Index_DataTable2');
   //  }



   //  public function index6(Request $request)
   //  {
   //      if ($request->ajax()) {
   //          $data2 = Request_Digital::select('id','Request_Name','Marketing_Type','Creative_Type','Date','Status','Company_Goals','Age_Group')->get();
   //          return Datatables::of($data2)->addIndexColumn()
   //              ->addColumn('action', function($row){
   //                  $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
   //                  return $btn;
   //              })
   //              ->rawColumns(['action'])
   //              ->make(true);
   //      }

   //      return view('Open_Request');
   //  }


   //  public function index7(Request $request)
   //  {
   //      if ($request->ajax()) {
   //          $data3 = Request_Web::select('id','Request_Name','Creative_Type','Design_Type','Date','Status','Domain_Name','Priority')->get();
   //          return Datatables::of($data3)->addIndexColumn()
   //              ->addColumn('action', function($row){
   //                  $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
   //                  return $btn;
   //              })
   //              ->rawColumns(['action'])
   //              ->make(true);
   //      }

   //      return view('Open_Request');
   //  }


   //  public function index8(Request $request)
   //  {
   //      if ($request->ajax()) {
   //          $data4 = Request_App::select('id','Request_Name','Creative_Type','Database_Type','Priority','Status','Color_theme','Date')->get();
   //          return Datatables::of($data4)->addIndexColumn()
   //              ->addColumn('action', function($row){
   //                  $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
   //                  return $btn;
   //              })
   //              ->rawColumns(['action'])
   //              ->make(true);
   //      }

   //      return view('Open_Request');
   //  }



   //  -----Request details pages----- 

   public function Open()
   {
      return view('Request_Details.Open_Request');
   }

   public function Complete()
   {
      return view('Request_Details.Completed_Request');
   }

   public function Draft()
   {
      return view('Request_Details.Drafts_Request');
   }

   public function Hold()
   {
      return view('Request_Details.On_Hold_Request');
   }

   public function Due()
   {
      return view('Request_Details.Due_Today_Request');
   }

   public function Overdue()
   {
      return view('Request_Details.Overdue_Request');
   }

   public function Ready()
   {
      return view('Request_Details.Ready_For_Review_Request');
   }



   // public  function dropzoneUi()  
   // {  
   //     return view('Index_DataTable');  
   // }  



//   ------Drag and Drop------

   
  public  function dropzoneUi()  
  {  
      return view('Request_Graphics');  
  }  
  /** 
   * File Upload Method 
   * 
   * @return void 
   */  
  public  function dropzoneFileUpload(Request $request)  
  {  
      $image = $request->file('file');
      $imageName = time().'.'.$image->extension(); 
      $image->move(public_path('images'),$imageName);  
      return response()->json(['success'=>$imageName]);
  }

}
