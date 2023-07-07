<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Http\Requests\FrontendRequest\BlogRequest;
use Intervention\Image\Facades\Image as Image;
use Auth;
use App\Models\blog;
use App\Models\comment;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $getBlog = blog::orderBy('created_at','DESC')->paginate(3);
        return view('Frontend.Blog.blog',compact('getBlog'));
    }
    public function detail($id)
    {
        // dd($id);
        $getBlogdetail= blog::where('id',$id)->get()->toArray();
        $getBlogdetail=$getBlogdetail[0];
        // dd($getBlogdetail['id']);
        $datacomment=comment::where('id_blog',$id)->get();
        return view('Frontend.Blog.blogdetail',compact('getBlogdetail','datacomment'));
    }
    public function addblog()
    {
        $datacategory=category::all();
        //dd($datacategory);
         return view('Frontend.Blog.addblog',compact('datacategory'));
        // return view('Frontend.Blog.addblog');
    }
    public function myblog()
    {
        $id = Auth::id();
        // dd($id);
        $getBlog = blog::where('id_auth',$id)->orderBy('created_at','DESC') ->paginate(3);
        return view('Frontend.Blog.myblog',compact('getBlog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(BlogRequest $request)
    {
        $data = $request->all();
        $data['id_auth'] = Auth::id();
        $file = $request->image;
        if(!empty($file)){
             $duoiImage = $file->getClientOriginalExtension();
            $data['image'] = strtotime(date('Y-m-d H:i:s')).'.'.$duoiImage;
            $path = public_path('upload/Blog/image/' . $data['image']);
        }

        if (Blog::create($data)) {
            if(!empty($file)){
               Image::make($file->getRealPath())->resize(846, 387)->save($path);
            }
            return redirect('/blog')->with('success', __('Create blog success.'));
        } else {
            return redirect()->back()->withErrors('Create blog error.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $editBlog = blog::where('id',$id)->get();

        // dd($editBlog);
        $datacategory=category::all();
        return view('Frontend.blog.editblog', compact('editBlog','datacategory'));
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
        $blog = Blog::findOrFail($id);
       
        
        $data = $request->all();
        $data['id_auth'] = Auth::id();
        $file = $request->image;
        if(!empty($file)){
            $duoiImage = $file->getClientOriginalExtension();
            $data['image'] = strtotime(date('Y-m-d H:i:s')).'.'.$duoiImage;
            $path = public_path('upload/Blog/image/' . $data['image']);
        }
        
        if ($blog->update($data)) {
            if(!empty($file)){
                
               Image::make($file->getRealPath())->resize(846, 387)->save($path);

            }
            return redirect()->back()->with('success', __('Update profile success.'));
        } else {
            return redirect()->back()->withErrors('Update profile error.');
        }
    }
    public function blog_comment(Request $request, $id)
    {
        $commentall= $request->all();
        $idauth = Auth::id();
        $imgauth = Auth::user()->avatar;
        //dd($imgauth);
         $nameauth = Auth::user()->name;
        //dd($nameauth);
          //$level = $request->level;
        $commentall['name']=$nameauth;
        $commentall['id_auth']=$idauth;
        // dd($commentall['id_auth'])
        $commentall['id_blog']=$id;
        $commentall['image']=$imgauth;
        $commentall['level']=$request->level;

               //dd($commentall);
         if (comment::create($commentall)) {
            return redirect()->back()->with('success',('Update comment success.'));
        }
        else{
            return redirect()->back()->withErrors('Update comment error');
            
        }
        //return view('frontend.blogshop.blogdetail',compact('commentall'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog= blog::where('id',$id)->delete();
        if ($blog) {
 
            return redirect('/shop/myblog')->with('success', 'Delete blog success.');
        } else {

            return redirect('/shop/myblog')->withErrors('Delete blog error.');
        }
    }
    public function destroy($id)
    {
        //
    }
}
