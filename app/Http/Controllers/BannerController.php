<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['banner'] = Banner::orderBy('id','DESC')->get();
        return view('admin.banners.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
        $data = $request->except('photo','slug');
        $slug = Str::slug($data['title']);
        $slug_count = Banner::where('slug',$slug)->count();
        if($slug_count>0){
            $slug = time().'-'.$slug;
        }
        $data['slug'] = $slug;
        $imagefullname = '';
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imgname = 'BannerPhoto/'.time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagefullname = $image->move('BannerPhoto', $imgname);
            //storePubliclyAs
        }
        $data['photo'] = $imgname;
        // dd($data);
        $insert_banner = Banner::create($data);
        if($insert_banner){
            // return redirect('banners.index')->with('success','Banner Successfully Created');
            $request->session()->flash('success', 'Banner Successfully Created');

            return redirect('admin/banner');
        }else{
            $request->session()->flash('error','Something went Wrong');
            return redirect()->back();
            // return back()->with('error','Something went Wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['banner']= Banner::where('slug',$slug)->first();
        //  dd($data);
        return view('admin.banners.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $slug)
    {
    dd("ghfff");

        // $data = $request->except('photo','slug');
        // //$slug = Str::slug($data['title']);

        // $existing_image = Banner::where('slug',$slug)->select('photo')->first();
        // if(!empty($existing_image)){
        //     $data['photo'] = $existing_image;
        // }else{
        //     $imagefullname = '';
        //     if ($request->hasFile('photo')) {
        //         $image = $request->file('photo');
        //         $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
        //         $imagefullname = $image->move('BannerPhoto', $imgname);
        //         //storePubliclyAs
        //     }
    
        //     $data['photo'] = $imgname;
        // }

      

        // $insert_banner = Banner::where('slug',$slug)->where('id',$request->id)->update($data);

        // if($insert_banner){
            
        //     $request->session()->flash('success', 'Banner Successfully Updated');

        //     return redirect('admin/banner');
        // }else{
        //     $request->session()->flash('error','Something went Wrong');
        //     return redirect()->back();
        // } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
